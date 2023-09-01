<?php
	$db = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
 
	if(ISSET($_POST['create'])){
		
			$id = $_GET['id'];
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$email = $_POST['email'];
			$homeadress = $_POST['homeadress'];
			$phonenumber = $_POST['phonenumber'];
			$password = $_POST['password'];
			$username = $_POST['username'];
			$actif = $_POST['actif'];
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "UPDATE `users`SET `firstname` = '$firstname', `lastname` = '$lastname', `email` = '$email', `homeadress` = '$homeadress', `phonenumber` = '$phonenumber', `password` = '$password', `username` = '$username' , `actif` = '$actif' WHERE `id` = '$id'";
			$result = $db->exec($sql);
		if ($result)
            {echo 'Successfully saved';
    header("Location: actif.php");} else {
                echo 'Error while saving data';
            } 
            }
?>