const BASE_API='/restaurante/';

class Api{
	async validarLogin(form){
		const query =await fetch(`${BASE_API}login/validar`,{
			method:"POST",
			body:form
		});
		const data=await query.json();
		return data;
	}

	async loadData(){
		const query = await fetch(`${BASE_API}usuarios/getAll`);
		const data = await query.json();
		return data;
	}
	async saveUser(form){
		const query =await fetch(`${BASE_API}usuarios/save`,{
			method:"POST",
			body:form
		});
		const data=await query.json();
		return data;
	}
	async getOneUser(id){
		const query = await fetch(`${BASE_API}usuarios/getOneUser?id=${id}`);
		const data = await query.json();
		return data;
	}

	async deleteUser(id){
		const query = await fetch(`${BASE_API}usuarios/deleteUser?id=${id}`);
		const data = await query.json();
		return data;
	}
	/***************************************************fin ususarios */
	//inicio de restaurantes
	async loadRest(){
		const query = await fetch(`${BASE_API}restaurantes/getAll`);
		const data = await query.json();
		return data;
	}
	//saveRest para restaurantes
	async saveRest(form){
		const query =await fetch(`${BASE_API}restaurantes/save`,{
			method:"POST",
			body:form
		});
		const data=await query.json();
		return data;
	}
	//getOneRest para restaurantes
	async getOneRest(id){
		const query = await fetch(`${BASE_API}restaurantes/getOneRest?id=${id}`);
		const data = await query.json();
		return data;
	}
	//deleteRest
	async deleteRest(id){
		const query = await fetch(`${BASE_API}restaurantes/deleteRest?id=${id}`);
		const data = await query.json();
		return data;
	}
	/***************************************************fin restaurantes */
	//loadProd para productos
	async loadProduct(){
		const query = await fetch(`${BASE_API}productos/getAll`);
		const data = await query.json();
		return data;
	}
	//saveProduct para productos
	async savePorduct(form){
		const query =await fetch(`${BASE_API}productos/save`,{
			method:"POST",
			body:form
		});
		const data=await query.json();
		return data;
	}
	//getOneProduct para restaurantes
	async getOneProduct(id){
		const query = await fetch(`${BASE_API}productos/getOneProduct?id=${id}`);
		const data = await query.json();
		return data;
	}
	//deleteProduct
	async deleteProduct(id){
		const query = await fetch(`${BASE_API}restaurantes/deleteRest?id=${id}`);
		const data = await query.json();
		return data;
	}
	
}