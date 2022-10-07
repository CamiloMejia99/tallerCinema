class selecPelicula{
	constructor(){
		// Constructor de la clase
		this.precio = new Precio (0);
	}

	darProducto(){
		// Retornar el producto 1
		return this.precio;
	}

	abastecerProducto(pUnidades){
		// Abastece el producto 1 pero tiene funcion de retorno
		this.precio.abastecer(pUnidades);	
	}

	venderProducto(){
		// Vende producto 1, sin función de retorno
		let cantidad = this.precio.darCantidadUnidadesDisponibles();
		if(cantidad > 0 ){
			this.precio.vender();
		}
		else{
			alert("No se puede vender, no hay existencias");
		}
	}

}

class Precio{

	constructor(){
		this.cantidadUnidadesDisponibles = 0;
		this.cantidadUnidadesVendidas = 0;
	}

	abastecer(pUnidades){
			// Abastece un producto sin función de retorno
			this.cantidadUnidadesDisponibles = this.cantidadUnidadesDisponibles + pUnidades;
		}

	darCantidadUnidadesDisponibles(){
		// Retorna la cantidad de unidades disponibles de un producto
		return this.cantidadUnidadesDisponibles;
	}

	darCantidadUnidadesVendidas(){
		// Retorna la cantidad de unidades vendidas de un producto
		return this.cantidadUnidadesVendidas;
	}

	vender(){
		this.cantidadUnidadesDisponibles = this.cantidadUnidadesDisponibles - 1;
		this.cantidadUnidadesVendidas = this.cantidadUnidadesVendidas + 1;
	}

}

let maquina = new selecPelicula();

function opcion2(){

	var  pre;
	pre = parseInt(document.getElementById("precioP").value);

	let cantidad = prompt("Ingrese valor");
	let c = parseInt(cantidad);

	maquina.abastecerProducto(c);
	let disp = maquina.darProducto().darCantidadUnidadesDisponibles();

	resul = pre*disp;
	document.getElementById('txt_resul').innerHTML = 'Resultado: ' + resul;
}

