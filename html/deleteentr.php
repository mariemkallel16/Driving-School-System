<?php
	if(ISSET($_GET['ide'])){
		$db = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
		$ide = $_GET['ide'];
		$sql = $db->prepare("DELETE from `entretiens` WHERE `ide`='$ide'");
		$sql->execute();
		header('location:entretien.php');
	}
?>