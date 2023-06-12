<?php 
if (isset($_POST['email'])) { $mail=$_POST['email'];}  else { $mail='';}
if (isset($_POST['password'])) { $password=$_POST['password'];}  else { $password='';}

// include '../conectar/con_db.php';

include '../model/usuarios.php';

    if($mail<>'' or $password<>'') { 
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        
        $buscar=busco_usuario($mail);
        
        if ($buscar == 0) {
            insertar_usuario($mail,$hashedPassword);
            echo 'REGISTRADO!';

        } else {
            echo "Existe un usuario con ese email. ";
        }
        
            

    } else {

    $message ='';
    include "../view/contacto.php";
    }

?>