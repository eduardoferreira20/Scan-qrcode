<?php
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "csec";
$id = $_POST['scan.content'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Conexão falhou: " . $conn->connect_error);
} 
elseif(isset($id)){
$sql = "UPDATE inscricaos SET presenca ='1' WHERE id = '".$id."' ";
}
if ($conn->query($sql) === TRUE) {
	echo "Sucesso";
} else {
	echo "Error" . $conn->error;
}

$conn->close();
?>