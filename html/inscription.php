<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/logo.jpg">
    <title>Auto-école Movenpick</title>
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">
    
</head>

<body>
    <div>
    <?php
     if (isset($_POST['create']))
    {
        $firstname   = $_POST['firstname'];
        $lastname    = $_POST['lastname'];
        $username    = $_POST['username'];
        $email       = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        $homeadress  = $_POST['homeadress'];
        $password    = $_POST['password'];
        $sql = "INSERT INTO users(firstname,lastname,username,email,phonenumber,homeadress,password) VALUES (?,?,?,?,?,?,?)";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert -> execute([$firstname,$lastname,$username,$email,$phonenumber,$homeadress,$password]);
        if ($result)
            {echo 'Successfully saved';
        header("Location:attente1.php");} else {
                echo 'Error while saving data';
            }
   }
    ?>  
</div>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
            style="background:url(../assets/images/big/auth-bg.jpg) no-repeat center center;"> 
            <div class="auth-box row text-center">
                <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url(../assets/images/big/logo.jpg);">
                </div>
                <div class="col-lg-5 col-md-7 bg-white">
                    <div class="p-3">
                        <img src="../assets/images/big/icon.png" alt="wrapkit">
                        <h2 class="mt-3 text-center">INSCRIPTION</h2>
                        <form class="mt-4" action="inscription.php" method="POST">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" name="firstname" type="text" placeholder="Nom" required pattern="[A-Za-z]{4,}">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" name="lastname" type="text" placeholder="Prénom" required pattern="[A-Za-z]{4,}">
                                    </div>
                                </div>
                                    <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" name="email" type="email" placeholder="Adresse email" pattern="[A-Za-z0-9._%+-]{3,}@[a-zA-Z]{3,}([.]{1}[a-zA-Z]{2,}|[.]{1}[a-zA-Z]{2,}[.]{1}[a-zA-Z]{2,})" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                <div class="form-group">
                                        <input class="form-control" name="phonenumber" type="text" placeholder="Téléphone" required pattern="[0-9]{8}">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                <div class="form-group">
                                        <input class="form-control" name="homeadress" type="text" placeholder="Adresse" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                <div class="form-group">
                                        <input class="form-control" name="username" type="text" placeholder="Nom d'utilisateur" required pattern="[A-Za-z0-9]{4,}">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" name="password" type="password" placeholder="Mot de passe" required  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                                    </div>
                                </div>

                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="btn btn-block btn-dark" id="create" name="create" value="S'inscrire">Inscription</button>
                                </div>
                                <div class="col-lg-12 text-center mt-5">
                                    Vous êtes déjà inscrit ? <a href="login.php" class="text-danger">Login</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js "></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js "></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
        $(".preloader ").fadeOut();
    </script>
    <!-- Main JS-->
    <script src="js/global.js"></script>
    <script type="text/javascript">
    $(function(){
        $('#register').click(function(e){

            var valid = this.form.checkValidity();

            if(valid){


            var firstname   = $('#firstname').val();
            var lastname    = $('#lastname').val();
            var username    = $('#username').val();
            var email       = $('#email').val();
            var password    = $('#password').val();
            var phonenumber = $('#phonenumber').val();
            var homeadress  = $('#homeadress').val();


                e.preventDefault(); 

                $.ajax({
                    type: 'POST',
                    url: 'process.php',
                    data: {firstname: firstname,lastname: lastname,username: username,email: email,phonenumber: phonenumber,password: password,homeadress: homeadress},
                    success: function(data){
                    Swal.fire({
                                'title': 'Successful',
                                'text': 'data',
                                'type': 'success'
                                })

                    },
                    error: function(data){
                        Swal.fire({
                                'title': 'Errors',
                                'text': 'There were errors while saving the data.',
                                'type': 'error'
                                })
                    }
                });


            }else{

            }





        });     


    });
</script>
</body>

</html>