var inicioApp = function()
{
	var validausuario = function()
	{
		var usuario = $("#txtUsuario").val();
		var clave   = $("#txtClave").val();
		if(usuario!="" && clave!="")
		{
			if(usuario=="hola" && clave=="mundo")
			{
				$("#cajaUsuario").hide("slow");
				$("nav").show("slow");
			}
			else
				alert("Usuario o contraseña incorrectos");
		}
		else
			alert("Usuario o clave están vacíos");
	}

	var teclaClave = function(tecla)
	{
		if(tecla.which===13) //Que pena
			validausuario();
	}

	$("#btnValidaUsuario").on("click",validausuario);
	$("#txtClave").on("keypress",teclaClave);
}

$(document).on("ready",inicioApp);





