<?php 


// Config database 

$host = 'localhost';
$dbname = 'laravelCampus';
$username = 'root';
$password = 'thom8651';

try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão realizada com sucesso";
}catch(PDOException $e){
    echo "Erro de conexão: " . $e->getMessage();
}

?>