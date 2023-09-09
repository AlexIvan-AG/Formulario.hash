<?php 
    /* conexion a la base de datos --------------- */
    $conn = new mysqli("localhost","root","","universidad");
    /*................. Proceso de encriptcion */
    if(isset($_POST['registro'])){
        if(!empty(trim($_POST['password_usu'])) && !empty (trim($_POST['usuario_usu']))){
            $password_usu    =$_POST['password_usu'];
            $usuario_usu     =$_POST['usuario_usu'];

            $enc_password_usu = password_hash($password_usu, PASSWORD_DEFAULT);

            $conn->query("INSERT INTO usuarios (usuario_usu, password_usu) VALUES ('$usuario_usu','$enc_password_usu')");

            if($conn->affected_rows !=1){
                $registro_error = "hubo un error";
            }
        }else{
            $registro_error = "ambos campos deben ser llamados";
        }
    
}



?>