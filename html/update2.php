<?php
	$db = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
 
	if(ISSET($_POST['create'])){
		
			$id = $_GET['id'];
			$Paye = $_POST['Paye'];
		    $ResteApayer = $_POST['ResteApayer'];
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "UPDATE `paiement` SET `Paye` = '$Paye', `ResteApayer` = '$ResteApayer' WHERE `id` = '$id'" ;
			$result = $db->exec($sql);
		if ($result)
            {echo 'Successfully saved';
    header("Location: paiement.php");} else {
                echo 'Error while saving data';
            } 
            }
?>