<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="icon" href="./assets/ico.png"/>
    <title>Registrarse</title>
</head>
<body style="background-color: #0b1129">
    <div class="container">
        <div class="row row-login justify-content-md-center">
            <div class="col col-xs-12 col-md-6 bg-light text-center shadow pt-5" style="border-radius: 10px;">
                <div class="img-responsive">
                    <img src="./assets/logo.png" width="250px" class="img-fluid" alt="image">
                </div>
                <h1 class="display-4" style="font-size: 50px !important;">Bienvenido</h1>
                <p class="mb-5" style="font-size: 20px !important;">Ingrese su nombre de usuario y clave</p>
                <form action="./registro.php" method="post">
                    <div class="input-group input-group-lg px-4 mb-2">
                        <input type="text" name="usuario" class="form-control" id="usuario" autocomplete="off" placeholder="Usuario" autofocus required>
                    </div>
                    <div class="input-group input-group-lg px-4 mb-2">
                        <input type="password" name="clave" class="form-control" id="clave" autocomplete="off" placeholder="Contraseña" required>
                    </div>
                    <div class="input-group input-group-lg px-4 mb-2">
                        <input type="password" name="Compclave" class="form-control" onkeyup="compare_input();" id="Compclave" autocomplete="off" placeholder="Verificar Contraseña" required>
                        <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                    </div>
                    <div class="px-4 mt-4">
                        <button type="submit" id="regist" class="btn btn-success btn-block btn-lg login">Registrarse</button>
                    </div>
                </form>
                <hr>
                <a href="index.php">Volver</a><hr>
            </div>
        </div>
    </div>
</body>
<script src="./js/jQuery.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Sweet alert de mensaje importante -->
<script>
    Swal.fire({
        title: '<strong>Importante antes de iniciar!</strong>',
        icon: 'info',
        html:
            'Asegurate de que tu contraseña coincida también con la casilla verificar, ' +
            'de lo contrario, el botón de <b>Registrarse</b> no se activará',
        showCloseButton: true,
        showCancelButton: false,
        focusConfirm: false,
        confirmButtonText:
            '<i class="fa fa-thumbs-up"></i> Messirve!',
        confirmButtonAriaLabel: 'Thumbs up, great!',
    })
</script>
<!-- Scripts de la funcion de ver contraseñas -->
<script>
    document.getElementById("regist").disabled = true;
    function compare_input(){
        var f_input=document.getElementById('clave').value;
        var s_input=document.getElementById('Compclave').value;
        if(f_input===s_input){
            // alert('same as first');
            document.getElementById("regist").disabled = false;
        }
        else{
            document.getElementById("regist").disabled = true;
        }
    }
    //Funcion para mostrar la contraseña en las casillas de claves y comprobacion
    function mostrarPassword(){
		var cambio = document.getElementById("clave");
		var cambio2 = document.getElementById("Compclave");
		if(cambio.type == "password"){
			cambio.type = "text";
			cambio2.type = "text";
			$('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
		}else{
			cambio.type = "password";
			cambio2.type = "password";
			$('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
		}
	} 
	
	$(document).ready(function () {
	//CheckBox mostrar contraseña
	$('#ShowPassword').click(function () {
		$('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
	});
});
</script>
</html>