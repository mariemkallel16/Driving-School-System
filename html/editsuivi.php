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
                if(ISSET($_GET['id'])){
                    $db = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', ''); 
                    $id = $_GET['id'];
                    $sql = $db->prepare("SELECT * FROM `suivicandidat` WHERE `id`='$id'");
                    $sql->execute();
                    $entree = $sql->fetch();
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
                        <h2 class="mt-3 text-center">MODIFIER</h2>
                        <form class="mt-4" method="POST" action="updatesuivi.php?id=<?php echo $id?>">
                        
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <select class="form-control" name="avancement" >
                                    <option value="conduite">conduite</option> 
                                    <option value="code">code</option>
                                    
                                </select>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" name="heuresAssurees" type="text" value="<?php echo $entree['heuresAssurees']?>" required >
                                    </div>
                                </div>
                                    <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" name="heuresRestantes" type="text" value="<?php echo $entree['heuresRestantes']?>">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                <div class="form-group">
                                        <input class="form-control" name="remarques" type="text" value="<?php echo $entree['remarques']?>">
                                    </div>
                                </div>
                                

                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="btn btn-block btn-dark"  id="create" name="create" value="S'inscrire">Modifier</button>
                                </div>
                                
                            </div>
                        </form>
                        
                        <?php
                $db = null;
            ?>
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
