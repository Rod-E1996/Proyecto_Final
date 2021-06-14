<?php
    include ("conexion.php");
    session_start();
    $usuario=$_POST['usuario']; //Recogemos el nombre del usuario ingresado en el login
    $clave=$_POST['clave']; //Recogemos la clave ingresada en el login
    $_SESSION['usuario']=$usuario; //Nombre del usuario que inicia la sesión
    $sql="SELECT * FROM usuarios WHERE usuario='".$usuario."'";
    $result=$conexion->query($sql);
    if ($result->num_rows>0){
        while ($row=$result->fetch_assoc()){
            // Aun no damos acceso hasta que la clave sea comprobada
            if ($row['tipo']==1){
            // Recibimos el hash del user que intenta acceder para comprobar si la clave ingresada es la correcta
                $hash = $row['clave'];
                if (password_verify($clave, $hash)) {
                    // Si la clave es correcta, entonces da acceso al usuario, identificando su nivel de acceso
                    $_SESSION['tipo']=$row['tipo'];
                    //header("Location:./administrador/index.php");
                    header("Location:./dashboard/indexAdmin.php");
                } else {
                    echo "<script>
                        alert('Usuario o clave incorrectos');
                        window.location= './usuario/index.php'
                    </script>";
                }
            }
            else{
                $hash = $row['clave'];
                if (password_verify($clave, $hash)) {
                    $_SESSION['tipo']=$row['tipo'];
                    header("Location:./dashboard/indexUsuario.php");
                } else {
                    echo "<script>
                        alert('Usuario o clave incorrectos');
                        window.location= './usuario/index.php'
                    </script>";
                }
            }
        }
    }
    else {
        echo "<script>
            alert('Ha ocurrido un error al intentar acceder');
            window.location= './usuario/index.php'
        </script>";
    }
?>