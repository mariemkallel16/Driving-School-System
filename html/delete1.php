<?php
	if(ISSET($_GET['idEmploye'])){
		$db = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
		$idEmploye = $_GET['idEmploye'];
		$sql = $db->prepare("DELETE from `employes` WHERE `idEmploye`='$idEmploye'");
		$sql->execute();
		header('location: employes.php');
	}
?>