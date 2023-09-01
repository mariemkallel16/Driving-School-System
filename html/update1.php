<?php
    $db = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
 
    if(ISSET($_POST['create'])){
        
            $idEmploye = $_GET['idEmploye'];
            $Nom = $_POST['Nom'];
            $Prenom = $_POST['Prenom'];
            $Email = $_POST['Email'];;
            $Tel = $_POST['Tel'];
            $Disponiblite = $_POST['Disponiblite'];
            $sql = "UPDATE `employes`SET `Nom` = '$Nom', `Prenom` = '$Prenom', `Email` = '$Email',  `Tel` = '$Tel',  `Disponiblite` = '$Disponiblite' WHERE `idEmploye` = '$idEmploye'";
            $result = $db->exec($sql);
        if ($result)
            {echo 'Successfully saved';
    header("Location: Employes.php");} else {
                echo 'Error while saving data';
            } 
            }
?>