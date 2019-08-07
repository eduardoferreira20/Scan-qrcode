<?php
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "csec";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
} 

$sql = "UPDATE inscricaos SET presenca ='1' WHERE id= $_GET['scans']";

if ($conn->query($sql) === TRUE) {
    echo "Sucesso";
} else {
    echo "Error" . $conn->error;
}

$conn->close();
?>