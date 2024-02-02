<?php 

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'agenda_banco';

try{

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    $error = $e->getMessage();
    echo "Erro: $error";

}






?>