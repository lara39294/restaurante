const btnNew=document.querySelector("#btnAgregar");
const panelDatos=document.querySelector("#panelDatos");
const panelFormulario=document.querySelector("#panelFormulario");
const mensaje=document.querySelector("#mensaje");
const tableContent=document.querySelector("#contentTable table tbody");
const searchText=document.querySelector("#txtSearch");
const pagination=document.querySelector(".pagination");
const btnCancelar=document.querySelector("#btnCancelar");
const divFoto1=document.querySelector("#divFoto1");
const divFoto2=document.querySelector("#divFoto2");
const divFoto3=document.querySelector("#divFoto3");
const inputFoto1=document.querySelector("#foto1");
const inputFoto2=document.querySelector("#foto2");
const inputFoto3=document.querySelector("#foto3");
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
    btnNew.addEventListener("click",agregarProducto);
    document.addEventListener("DOMContentLoaded",cargarDatos);
    searchText.addEventListener("input",aplicarFiltro);
    btnCancelar.addEventListener("click",cancelarProduct);
    divFoto1.addEventListener("click",agregarFoto);
    divFoto2.addEventListener("click",agregarFoto);
    divFoto3.addEventListener("click",agregarFoto);
    inputFoto1.addEventListener("change",actualizarFoto);
    inputFoto2.addEventListener("change",actualizarFoto);
    inputFoto3.addEventListener("change",actualizarFoto);
    miForm.addEventListener("submit",guardarProduct);
}

//funciones
function guardarProduct(e) {
    e.preventDefault();
    const formdata=new FormData(miForm);
    API.saveProduct(formdata).then(data => {
        if (data.success) {
            cancelarProduct();
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
function cancelarProduct() {
    panelDatos.classList.remove("d-none");
    panelFormulario.classList.add("d-none");
    cargarDatos();
}

//carga los datos desde la api
function cargarDatos() {
    API.loadProduct().then(data=> {
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
function agregarProducto() {
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
            const {nombre,descripcion,precio}=item;
            if ((nombre.toUpperCase().search(objDatos.filter.toUpperCase())!= -1)
                || (descripcion.toUpperCase().search(objDatos.filter.toUpperCase())!= -1)
                || (precio.toUpperCase().search(objDatos.filter.toUpperCase())!= -1)){
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
            const{nombre,descripcion,precio,id_producto}=item
            html+=`<tr>
                    <td scope="col">${index+1}</td>
                    <td scope="col">${nombre}</td>
                    <td scope="col">${descripcion}</td>
                    <td scope="col">${precio}</td>
                    <td scope="col"><button class="btn btn-primary btn-xs" onclick="editarProduct(${id_producto})"><i class="fa fa-edit"></i></button>
                    <button class="btn btn-danger btn-xs" onclick="EliminarProducto(${id_producto})"><i class="fa fa-trash-alt"></i></button>
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

function editarProduct(id) {
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
    const {nombre,descripcion,precio,id_producto}=record;
    document.querySelector("#id_producto").value=id_producto;
    document.querySelector("#nombre").value=nombre;
    document.querySelector("#descripcion").value=descripcion;
    document.querySelector("#precio").value=precio;
}

function EliminarProduct(id) {
    Swal.fire({
        title: "esta seguro de eliminar el registro",
        showDenyButton:true,
        confirmButtonText:"Si",
        denyButtonText:"No"
    }).then(result =>{
        if(result.isConfirmed){
            API.deleteProduct(id).then(data=>{
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