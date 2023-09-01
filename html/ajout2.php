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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div>
    <?php
     if (isset($_POST['create']))
    {
        $id                  = $_POST['lastname'];
        $Paye                = $_POST['Paye'];
        $ResteApayer         = $_POST['ResteApayer'];
        
        
        $sql = "INSERT INTO paiement(id, Paye, ResteApayer) VALUES (?,?,?)";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert -> execute([$id,$Paye,$ResteApayer]);
        if ($result)
            {echo 'Successfully saved';
        header("Location: paiement.php");} else {
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
               
                
                    <div class="p-3">
                        <img src="../assets/images/big/icon.png" alt="wrapkit">
                        <h2 class="mt-3 text-center">Ajouter un paiement</h2>
                        <form class="mt-4" action="ajout2.php" method="POST" >
                            <div class="col-md-12">
                                <div class="form-group">
                                        <select class="form-control" name="lastname">

<?php
try
{
// connexion à la base de données projet
$db = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
}
catch(Exception $e)
{
// En cas d'erreur, on affiche un message et on quitte la page
die('Erreur : '.$e->getMessage());
}
// Si on passe à l’exécution des instructions suivantes c’est que tout s’est bien passé lors de laconnexion à la base
// On récupère toutes les données contenues dans la table « users »
$reponse = $db->query('SELECT * FROM users where id >5');
// En utilisant une boucle, on affiche chaque entrée (ligne) lue dans le résultat retourné
$ent=$reponse->fetchAll() ;
foreach($ent as $entree ) 
{
 
?>
                                            
                                            <option value="<?php echo $entree['id']; ?> " ><?php echo $entree['lastname'] ."  ". $entree['firstname']   ; ?></option>
                                            <?php 
} ?>


                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" name="Paye" type="text" placeholder="Montant payé" required>
                                    </div>
                                </div>
                                    <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" name="ResteApayer" type="text" placeholder="Montant restant" required>
                                    </div>
                                </div>
                                
                                
                                

                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="btn btn-block btn-dark"  id="create" name="create" value="S'inscrire">Ajouter paiement</button>
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