<?php
	$db = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
 
	if(ISSET($_POST['create'])){
		
			$id = $_GET['id'];
			$avancement = $_POST['avancement'];
		    $heuresAssurees = $_POST['heuresAssurees'];
		    $heuresRestantes = $_POST['heuresRestantes'];
		    $remarques = $_POST['remarques'];
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "UPDATE `suivicandidat` SET `avancement` = '$avancement', `heuresAssurees` = '$heuresAssurees' , `heuresRestantes` = '$heuresRestantes', `remarques` = '$remarques'WHERE `id` = '$id'" ;
			$result = $db->exec($sql);
		if ($result)
            {echo 'Successfully saved';
    header("Location: suivi.php");} else {
                echo 'Error while saving data';
            } 
            }
?>