<?php
$conectar =@mysql_connect('localhost','root','palomateamo');
if(!$conectar){
    echo"no se pudo conectar";
}else{
    $base=mysql_select_db('programmingworld');
    if(!$base){
        echo "no se encontro la base de datos";
    }
}
$email = $_POST['email'];
$nombre = $_POST['nombre'];
$pais = $_POST['pais'];
$mensaje = $_POST['mensaje'];
$sql  = "INSERT INTO datos(email,nombre,pais,mensaje) VALUES ('$email','$nombre','$pais','$mensaje')";
var_dump($mensaje);
$ejecutar =mysql_query($sql);
if(!$ejecutar){
    echo"hubo algun error";
}else{
    echo"datos guardados<br><a href='index.html'>volver</a>";
}
?>