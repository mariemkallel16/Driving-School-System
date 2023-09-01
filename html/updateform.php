<?php
	$db = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
 
	if(ISSET($_POST['create'])){
		
			$idFormation = $_GET['idFormation'];
			$dateFormation = $_POST['dateFormation'];
		    $horaire = $_POST['horaire'];
		    $type = $_POST['type'];
		    $idEmploye = $_POST['idEmploye'];
		    $id = $_POST['id'];
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "UPDATE `seancesformation` SET `dateFormation` = '$dateFormation', `horaire` = '$horaire', `type` = '$type', `idEmploye` = '$idEmploye', `id` = '$id' WHERE `idFormation` = '$idFormation'" ;
			$result = $db->exec($sql);
		if ($result)
            {echo 'Successfully saved';
    header("Location:formation2.php");} else {
                echo 'Error while saving data';
            } 
            }
?>