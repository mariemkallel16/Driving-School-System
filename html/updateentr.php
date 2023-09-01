<?php
	$db = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
 
	if(ISSET($_POST['create'])){
		    $ide=$_GET['ide'];
			$matricule = $_POST['matricule'];
			$dateEntretien = $_POST['dateEntretien'];
			$typeEntretien = $_POST['typeEntretien'];
			
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "UPDATE `entretiens`SET `matricule` = '$matricule', `dateEntretien` = '$dateEntretien', `typeEntretien` = '$typeEntretien' WHERE `matricule` = '$matricule'";
			$result = $db->exec($sql);
		if ($result)
            {echo 'Successfully saved';
    header("Location: entretien.php");} else {
                echo 'Error while saving data';
            } 
            }
?>