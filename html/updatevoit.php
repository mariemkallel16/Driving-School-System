<?php
    $db = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
 
    if(ISSET($_POST['create'])){
        
            $matricule = $_GET['matricule'];
            $marque = $_POST['marque'];
            $dateReparation = $_POST['dateReparation'];
            $dateAssurance = $_POST['dateAssurance'];;
            $dateVignettes = $_POST['dateVignettes'];
            $dateVisiteTechnique = $_POST['dateVisiteTechnique'];
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE `véhicules`SET `marque` = '$marque', `dateReparation` = '$dateReparation', `dateAssurance` = '$dateAssurance',  `dateVignettes` = '$dateVignettes', `dateVisiteTechnique` = '$dateVisiteTechnique' WHERE `matricule` = '$matricule'";
            $result = $db->exec($sql);
        if ($result)
            {echo 'Successfully saved';
    header("Location: véhicules.php");} else {
                echo 'Error while saving data';
            } 
            }
?>