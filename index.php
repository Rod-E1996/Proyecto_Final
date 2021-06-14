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
    <title>Login</title>
</head>
<body style="background-color: #0b1129">
    <div class="container">
        <div class="row row-login justify-content-md-center">
            <div class="col col-xs-12 col-md-6 bg-light text-center shadow pt-5" style="border-radius: 10px;">
                <div class="img-responsive">
                    <img src="./assets/logo.png" width="250px" class="img-fluid" alt="image">
                </div>
                <h1 class="display-4" style="font-size: 50px !important;">Bienvenido</h1>
                <p class="mb-5" style="font-size: 20px !important;">Inicie sesión con sus credenciales</p>
                <form action="./session.php" method="post">
                    <div class="input-group input-group-lg px-4 mb-2">
                        <input type="text" name="usuario" class="form-control" id="usuario" autocomplete="off" placeholder="Usuario" autofocus required>
                    </div>
                    <div class="input-group input-group-lg px-4">
                        <input type="password" name="clave" class="form-control" id="clave" autocomplete="off" placeholder="Contraseña" required>
                        <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                    </div>
                    <div class="px-4 mt-4">
                        <button type="submit" class="btn btn-primary btn-block btn-lg login">Acceder</button>
                    </div>
                </form>
                <hr>
                <!-- <p class="text-primary pb-2">Es una prueba solamente</p> -->
                <a href="nuevoUsuario.php">Registrate ahora!</a><hr>
            </div>
        </div>
    </div>
</body>
<script src="./js/jQuery.js"></script>
<script type="text/javascript">
    function mostrarPassword(){
            var cambio = document.getElementById("clave");
            if(cambio.type == "password"){
                cambio.type = "text";
                $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
            }else{
                cambio.type = "password";
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