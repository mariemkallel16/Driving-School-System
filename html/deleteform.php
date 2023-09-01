<?php
	if(ISSET($_GET['idFormation'])){
		$db = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
		$idFormation = $_GET['idFormation'];
		$sql = $db->prepare("DELETE from `seancesformation` WHERE `idFormation`='$idFormation'");
		$sql->execute();
		header('location:formation2.php');
	}
?>