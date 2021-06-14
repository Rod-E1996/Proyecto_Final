<?php
    include ("./conexion.php");
    // session_start();
    $usuario=$_POST['usuario']; //Recogemos el nombre del usuario ingresado en el login
    $clave=$_POST['clave']; //Recogemos la clave ingresada en el login
    //Crearemos el hash para la nueva clave
    $hash = password_hash($clave, PASSWORD_ARGON2I, ['memory_cost' => 2048, 'time_cost' => 4, 'threads' => 3]); 
    // $_SESSION['usuario']=$usuario; //Nombre del usuario que inicia la sesión
    $consulta="INSERT INTO usuarios (usuario, clave, tipo) VALUES ('".$usuario."', '".$hash."', 2)";
    
    if (mysqli_query($conexion, $consulta)){
        echo "<script>
            alert('Gracias por registrarte con nosotros. Inicia sesion para continuar');
            window.location= './usuario/index.php'
        </script>";
    }
    // else {
        $error=('Error: ' . $consulta . '<br>' . mysqli_error($conexion));
?>
        <script>
            console.log ("<?=$error?>");
        </script>
        <?
    
?>