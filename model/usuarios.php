<?php
function busco_usuario($mail) {

    include "../conectar/con_db.php";

    $sql = "SELECT COUNT(*) as total FROM usuario WHERE usuario='$mail'";
    $result = mysqli_query($conn, $sql);

    // Obtener el resultado
    $row = mysqli_fetch_assoc($result);
    $total = $row['total'];
    return $total;
}

function insertar_usuario($mail,$hashedPassword){

    include "../conectar/con_db.php";

    $sql= "INSERT INTO usuario (usuario, clave) VALUES ('".$mail."','".$hashedPassword."')";
    $stmt =$conn->prepare($sql);
    $stmt->execute(); 
}
?>