<?php
	if(ISSET($_GET['matricule'])){
		$db = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
		$matricule = $_GET['matricule'];
		$sql = $db->prepare("DELETE from `véhicules` WHERE `matricule`='$matricule'");
		$sql->execute();
		header('location:véhicules.php');
	}
?>