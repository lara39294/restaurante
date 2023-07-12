const btnNew=document.querySelector("#btnAgregar");
const panelDatos=document.querySelector("#panelDatos");
const panelFormulario=document.querySelector("#panelFormulario");
const mensaje=document.querySelector("#mensaje");
const tableContent=document.querySelector("#contentTable table tbody");
const searchText=document.querySelector("#txtSearch");
const pagination=document.querySelector(".pagination");
const btnCancelar=document.querySelector("#btnCancelar");
const divFoto=document.querySelector("#divFoto");
const inputFoto=document.querySelector("#foto");
const miForm=document.querySelector("#miForm");
const recordShow=4;
const API=new Api();
const objDatos={
    records:[],
    recordsFilter:[],
    currentPage:1,
    filter:""
};

//eventos
EventListeners();

//eventos de boton, buscador, y en el document como tal
function EventListeners(){
    btnNew.addEventListener("click",agregarRestaurante);
    document.addEventListener("DOMContentLoaded",cargarDatos);
    searchText.addEventListener("input",aplicarFiltro);
    btnCancelar.addEventListener("click",cancelarRestaurante);
    divFoto.addEventListener("click",agregarFoto);
    inputFoto.addEventListener("change",actualizarFoto);
    miForm.addEventListener("submit",guardarRest);
}

//funciones
function guardarRest(e) {
    e.preventDefault();
    const formdata=new FormData(miForm);
    API.saveRest(formdata).then(data => {
        if (data.success) {
            cancelarRestaurante();
            Swal.fire({
                icon:"info",
                text:data.msg
            });
        }else{
            Swal.fire({
                icon:"error",
                title:"Error",
                text:data.msg
            });
        }
    }).catch(error => {
      console.error("Error",error);  
    })
}

function actualizarFoto(el) {
    if (el.target.files && el.target.files[0]) {
        const reader=new FileReader();
        reader.onload=e=>{
            divFoto.innerHTML=`<img src="${e.target.result}" class="h-100 w-100"
            style="object-fit:contain;">`;
        }
        reader.readAsDataURL(el.target.files[0]);
    } 
}

function agregarFoto() {
    inputFoto.click();
}

//boton cancelar del formulario para agregar users
function cancelarRestaurante() {
    panelDatos.classList.remove("d-none");
    panelFormulario.classList.add("d-none");
    cargarDatos();
}

//carga los datos desde la api
function cargarDatos() {
    API.loadRest().then(data=> {
        if (data.success) {
            objDatos.records=data.records;
            objDatos.currentPage=1;
            crearTabla();
        } else {
            mensaje.textContent=data.msg;
            
        }
    }).catch(error => {
        console.error("Error:", error);
    });
}

//el boton agregar muestra el formulario para agregar users
function agregarRestaurante() {
    panelDatos.classList.add("d-none");
    panelFormulario.classList.remove("d-none");
    limpiarform();
}
//crea tabla en html y contiene el filtro de busqueda
function crearTabla() {
    if (objDatos.filter==="") {
        objDatos.recordsFilter=objDatos.records.map(item=>item);
    } else{
        objDatos.recordsFilter=objDatos.records.filter(item=>{
            const {nombres,direccion,telefono,contacto,fecha}=item;
            if ((nombres.toUpperCase().search(objDatos.filter.toUpperCase())!= -1)
                || (direccion.toUpperCase().search(objDatos.filter.toUpperCase())!= -1)
                || (telefono.toUpperCase().search(objDatos.filter.toUpperCase())!= -1)
                || (contacto.toUpperCase().search(objDatos.filter.toUpperCase())!= -1)
                || (fecha.toUpperCase().search(objDatos.filter.toUpperCase())!= -1)){
                return item;
            } else {
                
            }
        });
    }
    //mostrar paginacion y cuantos registros
    const recordIni=(objDatos.currentPage*recordShow)-recordShow;
    const recordFin=(recordIni+recordShow)-1;
    //ejecucion de mostrar los datos y la creacion de la tabla en el html
    let html="";
    objDatos.recordsFilter.forEach((item,index)=>{
        if((index>=recordIni) && (index<=recordFin)){
            const{nombre_restaurante,direccion,telefono,contacto,fecha_ingreso,id_restaurantes}=item
            html+=`<tr>
                    <td scope="col">${index+1}</td>
                    <td scope="col">${nombre_restaurante}</td>
                    <td scope="col">${direccion}</td>
                    <td scope="col">${telefono}</td>
                    <td scope="col">${contacto}</td>
                    <td scope="col">${fecha_ingreso}</td>
                    <td scope="col"><button class="btn btn-primary btn-xs" onclick="editarRest(${id_restaurantes})"><i class="fa fa-edit"></i></button>
                    <button class="btn btn-danger btn-xs" onclick="EliminarRest(${id_restaurantes})"><i class="fa fa-trash-alt"></i></button>
                    </td>
                </tr>
            `;
        }
    });
    tableContent.innerHTML=html;
    crearPaginacion();
}

function crearPaginacion() {
    while (pagination.firstElementChild) {
        pagination.removeChild(pagination.firstElementChild);
    }
    const elAnterior=document.createElement("li");
    elAnterior.classList.add("page-item");
    elAnterior.innerHTML=`<a class="page-link" href="#">Anterior</a>`;
    elAnterior.onclick=()=>{
        objDatos.currentPage=(objDatos.currentPage==1 ? 1: --objDatos.currentPage);
        crearTabla();
    }
    pagination.append(elAnterior);
    const totalPage= Math.ceil(objDatos.recordsFilter.length/recordShow);
    for (let i = 1; i <= totalPage; i++) {
        const el=document.createElement("li");
        el.classList.add("page-item");
        el.innerHTML=`<a class="page-link" href="#">${i}</a>`;
        el.onclick=()=>{
            objDatos.currentPage=i;
            crearTabla();
        }
        pagination.append(el);
        
    }
    const elSiguiente=document.createElement("li");
    elSiguiente.classList.add("page-item");
    elSiguiente.innerHTML=`<a class="page-link" href="#">Siguiente</a>`;
    elSiguiente.onclick=()=>{
        objDatos.currentPage=(objDatos.currentPage=+totalPage ? totalPage: ++objDatos.currentPage);
        crearTabla();
    }
    pagination.append(elSiguiente);
}

function editarRest(id) {
    limpiarform(1);
    panelDatos.classList.add("d-none");
    panelFormulario.classList.remove("d-none");
    API.getOneRest(id).then(data=>{
        if (data.success) {
            mostrarDatosForm(data.records[0]);
        } else {
            Swal.fire({
                icon: 'Erroro',
                title: 'Error',
                text:data.msg
            });
        }
    }).catch(error=>{
        console.error("Error", error);
    });
}
function mostrarDatosForm(record) {
    const {id_restaurantes,nombre_restaurante,telefono,contacto,fecha_ingreso}=record;
    document.querySelector("#id_restaurantes").value=id_restaurantes;
    document.querySelector("#nombres").value=nombre_restaurante;
    document.querySelector("#telefono").value=telefono;
    document.querySelector("#contacto").value=contacto;
    document.querySelector("#fecha").value=fecha_ingreso;
    divFoto.innerHTML=`<img src="${foto}" class="h-100 w-100"
    style="object-fit:contain;">`;
}

function EliminarRest(id) {
    Swal.fire({
        title: "esta seguro de eliminar el registro",
        showDenyButton:true,
        confirmButtonText:"Si",
        denyButtonText:"No"
    }).then(result =>{
        if(result.isConfirmed){
            API.deleteRest(id).then(data=>{
                if (data.success) {
                    cancelarRestaurante();
                }else{
                    Swal.fire({
                        icon: 'Erroro',
                        title: 'Error',
                        text:data.msg
                    });
                }
            }).catch(error => {
                console.error("Error",error)
            })
        }
    });
}

function aplicarFiltro(e){
    e.preventDefault();
    objDatos.filter=this.value;
    crearTabla();
}

function limpiarform() {
    miForm.reset();
    document.querySelector("#id_restaurantes").value="0";
}