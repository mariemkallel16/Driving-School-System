<?php
	if(ISSET($_GET['id'])){
		$db = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
		$id = $_GET['id'];
		$sql = $db->prepare("DELETE from `suivicandidat` WHERE `id`='$id'");
		$sql->execute();
		header('location:suivi.php');
	}
?>