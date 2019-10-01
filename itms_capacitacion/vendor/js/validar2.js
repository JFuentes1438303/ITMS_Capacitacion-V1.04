function validarNumeros(parametro) {
	if (!/^([0-9])*$/.test(parametro)) {
		return false;
	}else {
		return true;
	}
}

function validarEspacios(parametro) {
	var patron = /^\s+$/;
	if (patron.test(parametro)) {
		return false;
	}else {
		return true;
	}
}

function validarDocumento(parametro) {
	if (parametro.length<6 || parametro.length>11) {
		return false;
	}else {
		return true;
	}
}


function validar2() {

	var formulario = document.form2;

	if (formulario.documento.value == "") {
		document.getElementById("alerta").innerHTML = '<div class="alert alert-danger t_centro"><a href="" class="close" data-dismiss="alert">&times;</a>Por favor ingrese el numero de documento.</div>';
		formulario.documento.value = "";
		formulario.documento.focus();
		return false;
	}else if (validarNumeros(formulario.documento.value) == false) {
		document.getElementById("alerta").innerHTML = '<div class="alert alert-danger t_centro"><a href="" class="close" data-dismiss="alert">&times;</a>Solo estan permitidos valores numéricos en el numero de documento.</div>';
		formulario.documento.value = "";
		formulario.documento.focus();
		return false;
	}else if (validarDocumento(formulario.documento.value) == false) {
		document.getElementById("alerta").innerHTML = '<div class="alert alert-danger t_centro"><a href="" class="close" data-dismiss="alert">&times;</a>El numero de documento ingresado no es valido Minimo (6 caracteres) y Maximo (11 caracteres)</div>';
		formulario.documento.value = "";
		formulario.documento.focus();
		return false;
	}else {
		document.getElementById("alerta").innerHTML = "";
	}


	if (formulario.password.value == "") {
		document.getElementById("alerta").innerHTML = '<div class="alert alert-danger t_centro"><a href="" class="close" data-dismiss="alert">&times;</a>Por favor ingrese una contraseña.</div>';
		formulario.password.focus();
		return false;
	}else {
		document.getElementById("alerta").innerHTML = "";
	}

	formulario.submit();

}