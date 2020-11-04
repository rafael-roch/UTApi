<?php
    include('conexion.php');

    $obj = new Conexion;

    $usuario = $_POST['inputUser'];
    $pass = $_POST['inputPassword'];

   // $text="Nombre: ".$usuario."Contraseña: ".$pass;

$res = $obj->buscarUsuario($usuario, $pass);
if($res == 1){
    $datos=array('dato' => 'OK');
}else{
    $datos=array('dato' => 'No');
}

    //$datos=array('datos' => $text);

    echo json_encode($datos, JSON_FORCE_OBJECT);
?>

