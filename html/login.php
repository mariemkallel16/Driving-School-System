
<?php
session_start();
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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->



<?php
   if    (ISSET($_POST['username']) && ISSET($_POST['password'])){

    $requete = $db->prepare('SELECT * FROM users WHERE username=:e and password=:r');
      $requete->execute(array('e' => $_POST['username'] ,'r' => $_POST['password']
      ));

      if ($c = $requete->fetch()) {
       

          if (($c['role'] == 1) ) {

          $_SESSION["x1"]= $c['lastname'];
            $_SESSION["x2"]= $c['username'];
            $_SESSION["x3"]= $c['password'];
            $_SESSION["x4"]= $c['email'];
            $_SESSION["x5"]= $c['homeadress'];
            $_SESSION["x6"]= $c['phonenumber'];
            $_SESSION["x"]= $c['firstname'];

              header("Location: accueilsuperadmin.php");
          } 
         
          
          
elseif (($c['role'] == 2) ) {
$_SESSION["x1"]= $c['lastname'];
            $_SESSION["x2"]= $c['username'];
            $_SESSION["x3"]= $c['password'];
            $_SESSION["x4"]= $c['email'];
            $_SESSION["x5"]= $c['homeadress'];
            $_SESSION["x6"]= $c['phonenumber'];
            $_SESSION["x"]= $c['firstname'];
          

              header("Location: accueilmoniteur.php");
            }

elseif (($c['role'] == 0) && ($c['actif'] == 1 )) {

            $_SESSION["x1"]= $c['lastname'];
            $_SESSION["x2"]= $c['username'];
            $_SESSION["x3"]= $c['password'];
            $_SESSION["x4"]= $c['email'];
            $_SESSION["x5"]= $c['homeadress'];
            $_SESSION["x6"]= $c['phonenumber'];
            $_SESSION["x"]= $c['firstname'];

              header("Location: accueiluser.php");
            }
             else { 
            header("Location: attente.php");
            }




        } 
       
} 


?>

</head>

<body>
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
            <div class="auth-box row">
                <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url(../assets/images/big/logo.jpg);">
                </div>
                <div class="col-lg-5 col-md-7 bg-white">
                    <div class="p-3">
                        <div class="text-center">
                            <img src="../assets/images/big/icon.png" alt="wrapkit">
                        </div>
                        <h2 class="mt-3 text-center">LOGIN</h2>
                        <p class="text-center">Entrez votre nom d'utilisateur et votre mot de passe.</p>
                        <form class="mt-4" action="login.php" method="POST">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                       
                                        <input class="form-control"  type="text" id="username" name="username" value="username" 
                                            placeholder="Nom d'utilisateur">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        
                                        <input class="form-control" id="password" type="password" name="password" value="password" 
                                            placeholder="Mot de passe">
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="btn btn-block btn-dark">Login</button>
                                </div>
                                <div class="col-lg-12 text-center mt-5">
                                    Vous n'êtes pas encore inscrit ? <a href="inscription.php" class="text-danger">Inscription</a>
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
</body>

</html>