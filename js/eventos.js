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
				$("#cajaUsuario").hide();
				$("nav").show();
			}
			else
				alert("Usuario o contraseña incorrectos");
		}
		else
			alert("Usuario o clave están vacíos");
	}
	$("#btnValidaUsuario").on("click",validausuario);
}

$(document).on("ready",inicioApp);