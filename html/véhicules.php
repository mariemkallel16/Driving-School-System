<?php
session_start();
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

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
    <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
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
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="index.html">
                            <b class="logo-icon">
                                <!-- Dark Logo icon -->
                                <img src="../assets/images/logo.jpg" alt="homepage" class="dark-logo" width="100" />
                                <!-- Light Logo icon -->
                                <img src="../assets/images/logo-icon.png" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="../assets/images/logo11.png" alt="homepage" class="dark-logo" width="100" />
                                <!-- Light Logo text -->
                                <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                            </span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                        <!-- Notification -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle pl-md-3 position-relative" href="javascript:void(0)"
                                id="bell" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <span></span>
                                <span class="badge badge-primary notify-no rounded-circle"></span>
                            </a>
                        
                        </li>
                        <!-- End Notification -->
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        
                        
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                     
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src="../assets/images/users/logo.jpg" alt="user" class="rounded-circle"
                                    width="40">
                                <span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span> <span
                                        class="text-dark"><?php echo  $_SESSION["x"] ; ?></span> <i data-feather="chevron-down"
                                        class="svg-icon"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <a href="profiluser.php" class="dropdown-item" href="javascript:void(0)"><i data-feather="user"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Mon profil</a>
                               
                              
                                <div class="dropdown-divider"></div>
                                <a href="login.php" class="dropdown-item" href="javascript:void(0)"><i data-feather="power"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Logout</a>
                                
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
            <!-- ============================================================== -->
            <!-- End Topbar header -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <aside class="left-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar" data-sidebarbg="skin6">
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav">
                            <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="accueilmoniteur.php"
                                    aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                        class="hide-menu">Tableau de bord</span></a></li>
                            <li class="list-divider"></li>
                            <li class="nav-small-cap"><span class="hide-menu">Fonctionnalités</span></li>

                            <li class="sidebar-item"> <a class="sidebar-link" href="suivi.php"
                                aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                                    class="hide-menu">Suivi des Candidats
                                </span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link" href="véhicules.php"
                                aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                                    class="hide-menu">Gestion des véhicules
                                </span></a>
                        </li>
                        
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="entretien.php"
                                aria-expanded="false"><i data-feather="calendar" class="feather-icon"></i><span
                                    class="hide-menu">Calendrier des entretiens</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="formation.php"
                                aria-expanded="false"><i data-feather="calendar" class="feather-icon"></i><span
                                    class="hide-menu">Calendrier des séances</span></a></li>


                            <li class="list-divider"></li>
                            
                            
                            
                        
                            <li class="nav-small-cap"><span class="hide-menu">Extra</span></li>
                            
                            <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="login.php"
                                    aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span
                                        class="hide-menu">Logout</span></a></li>
                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </aside>
            <!-- ============================================================== -->
            <!-- End Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Page wrapper  -->
            <!-- ============================================================== -->
            <div class="page-wrapper">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="page-breadcrumb">
                    <div class="row">
                        <div class="col-7 align-self-center">
                            <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Véhicules </h4>
                            <div class="d-flex align-items-center">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb m-0 p-0">
                                        <li class="breadcrumb-item"><a href="index.html" class="text-muted">Fonctionnalités</a></li>
                                        <li class="breadcrumb-item text-muted active" aria-current="page">Gestion des véhicules</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid">
                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->
                    <!-- basic table -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <!-- Column -->
                                        <div class="col-md-6 col-lg-3 col-xlg-3">
                                            <div class="card card-hover">
                                                <div class="p-2 bg-cyan text-center">
                                                    <h1 class="font-light text-white"><?php
$db = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
$nb = $db->query('SELECT COUNT(matricule) FROM véhicules');
echo $nb->fetchColumn();

?></h1>
                                                    <h6 class="text-white">Voitures</h6>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    
                                    <div class="table-responsive">
                                        <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                            
                                                <tr>
                                                    
                                                    <th>Matricule</th>
                                                    <th>Marque</th>
                                                    <th>Date de réparation</th>
                                                    <th>Date d'assurance</th>
                                                    <th>Date des vignettes</th>
                                                    <th>Date de visite technique</th>
                                                    <th>Opérations</th>
                                                </tr>
                                            
                                            
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
$reponse = $db->query('SELECT * FROM véhicules');
// En utilisant une boucle, on affiche chaque entrée (ligne) lue dans le résultat retourné
$vehicules=$reponse->fetchAll() ;
foreach($vehicules as $entree ) 
{
 
?>
                                            <tr>
                                                    
                                                    <td><a href="javascript:void(0)" class="font-weight-medium link"><?php echo $entree['matricule']; ?></a></td>
                                                    <td><a href="javascript:void(0)" class="font-bold link"><?php echo $entree['marque']; ?></a></td>
                                                    <td><a href="javascript:void(0)" class="font-bold link"><?php echo $entree['dateReparation']; ?></a></td>
                                                    <td><a href="javascript:void(0)" class="font-bold link"><?php echo $entree['dateAssurance']; ?></a></td>
                                                    <td><a href="javascript:void(0)" class="font-bold link"><?php echo $entree['dateVignettes']; ?></a></td>
                                                    <td><a href="javascript:void(0)" class="font-bold link"><?php echo $entree['dateVisiteTechnique']; ?></a></td>
                                                    <td><a href="editvoit.php?matricule=<?php echo $entree['matricule']?>">Edit</a> | <a href="deletevoit.php?matricule=<?php echo $entree['matricule']?>">Delete</a></td>
                                                    
                                                    
                                            </tr>
                           <?php 
               } 
          ?>                   
                                        </table>
                                       <a href="ajoutvoit.php"> <button type="button" href="ajoutsuivi.php"
                                        class="btn waves-effect waves-light btn-rounded btn-outline-success"> Ajouter véhicule  </button></a>
                                    <br>   
                                        <br/>
                                        <br/>
 
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
        
        <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
        <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
        <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- apps -->
        <!-- apps -->
        <script src="../dist/js/app-style-switcher.js"></script>
        <script src="../dist/js/feather.min.js"></script>
        <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
        <script src="../dist/js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script src="../dist/js/custom.min.js"></script>
    </body>

    </html>