<?php 


// Config database 

$host = '';
$dbname = '';
$username = '';
$password = '';

try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão realizada com sucesso";
}catch(PDOException $e){
    echo "Erro de conexão: " . $e->getMessage();
}

?>