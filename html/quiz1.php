<!DOCTYPE html>
<!--code by webdevtrick (webdevtrick.com) -->
<head>
	<meta charset=UTF-8 />
	<link rel="icon" type="image/png" sizes="16x16" href="../assets/images/logo.jpg">
	<title>Auto-école Movenpick</title>
    <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="style.css" />

</head>

<body>
    
	<div >

		<h1>Testez vos connaissances avec ce test </h1>
		
		<form action="result.php" method="post" id="quiz1">
		
            <ol>
            <img src="../assets/images/q1.jpg" width="900" />
            <br>
               <center>
                <li>
                    
                    <h3 align: center >Dans cette situation, je dois :</h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) Maintenir mon allure </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) Freiner afin de laisser passer les piétons</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) Décélérer en utilisant le frein moteur</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) Éviter les piétons en me décalant vers la gauche</label>
                    </div>

                
                </li>
</center>
<br>
                <img src="../assets/images/q1.jpg" width="900" />
                <br>
                <li>
                <center>
                    <h3>Je pourrais prendre</h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A) la première sortie</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) la deuxiéme sortie</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) la troisième sortie</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) la quatrième sortie</label>
                    </div>
                 
                 </center>
                </li>
                
                <li>
                <br>
                <img src="../assets/images/q3.jpg" width="900" />
                <center>
                    <br>
                    <h3>à la prochaine intersection j'aurais la priorité</h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A) Oui</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) Non</label>
                    </div>
                
                </li>
                </center>
                <li>
                    <br>
                <img src="../assets/images/q4.jpg" width="900" />
                <center>
                    <br>
                
                    <h3>Je peux dépasser ce véhicule</h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A) Oui</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) Non</label>
                    </div>
                    
                    
                
                </li>

                <li>
                    <br>
                <img src="../assets/images/q5.jpg" width="900" />
                <center>
                    <br>
                
                    <h3>Dans cette situation</h3>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A) Je passe</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B) Je m'arrête</label>
                    </div>
                
                </li>
                <li>
                <br>
                <img src="../assets/images/q6.jpg" width="900" />
                <center>
                    <br>
                    <h3>Je peux stationner à droite</h3>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
                        <label for="question-6-answers-A">A) Oui</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
                        <label for="question-6-answers-B">B) Non </label>
                    </div>
                
                </li>
                <li>
                <br>
                <img src="../assets/images/q7.jpg" width="900" />
                <center>
                    <br>
                    <h3>La flèche au sol m'interdit de tourner à gauche</h3>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" />
                        <label for="question-7-answers-A">A) Oui</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
                        <label for="question-7-answers-B">B) Non</label>
                    </div>
                
                </li>
                <li>
                <br>
                <img src="../assets/images/q8.jpg" width="900" />
                <center>
                    <br>
                    <h3>La signalisation m'indique</h3>
                    
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" />
                        <label for="question-4-answers-A">A) Une interdiction</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
                        <label for="question-8-answers-B">B) Une obligation</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-C" value="C" />
                        <label for="question-8-answers-C">C) Une indication</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-D" value="D" />
                        <label for="question-8-answers-D">D) Une bifurcation</label>
                    </div>
                
                </li>
                <li>
                <br>
                <img src="../assets/images/q9.jpg" width="900" />
                <center>
                    <br>
                    <h3>Je peux circuler sur la voie de gauche</h3>
                    
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" />
                        <label for="question-9-answers-A">A) Oui</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" />
                        <label for="question-9-answers-B">B) Non</label>
                    </div>
                
                </li>
                <li>
                <br>
                <img src="../assets/images/q10.jpg" width="900" />
                <center>
                    <br>
                    <h3>Je circule sur une route prioritaire</h3>
                    
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" />
                        <label for="question-10-answers-A">A) Oui</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" />
                        <label for="question-10-answers-B">B) Non</label>
                    </div>
                
                </li>
                <li>
                <br>
                <img src="../assets/images/q6.jpg" width="900" />
                <center>
                    <br>
                    <h3>J'allume</h3> <!--q12-->
                    
                    <div>
                        <input type="radio" name="question-11-answers" id="question-11-answers-A" value="A" />
                        <label for="question-11-answers-A">A) Mes feux de position</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-11-answers" id="question-11-answers-B" value="B" />
                        <label for="question-11-answers-B">B) Mes feux de croisement</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-11-answers" id="question-11-answers-C" value="C" />
                        <label for="question-11-answers-C">C) Mes feux de route</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-11-answers" id="question-11-answers-D" value="D" />
                        <label for="question-11-answers-D">D) Aucun feux</label>
                    </div>
                
                </li>
                <li>
                <br>
                <img src="../assets/images/q1.jpg" width="900" />
                <center>
                    <br>
                    <h3>Je devrais rouler a 70km/h</h3> <!--q13-->
                    
                    <div>
                        <input type="radio" name="question-12-answers" id="question-12-answers-A" value="A" />
                        <label for="question-12-answers-A">A) Pour le feu tricolore</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-12-answers" id="question-12-answers-B" value="B" />
                        <label for="question-12-answers-B">B) Pendant 150m</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-12-answers" id="question-12-answers-C" value="C" />
                        <label for="question-12-answers-C">C) Uniquement sur cette route</label>
                    </div>
                
                </li>
                <li>
                <br>
                <img src="../assets/images/q10.jpg" width="900" />
                <center>
                    <br>
                    <h3>Je peux suivre le véhicule blanc</h3>
                    
                    <div>
                        <input type="radio" name="question-13-answers" id="question-13-answers-A" value="A" />
                        <label for="question-13-answers-A">A) Oui</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-13-answers" id="question-13-answers-B" value="B" />
                        <label for="question-13-answers-B">B) Non</label>
                    </div>
                
                </li>
                <li>
                <br>
                <img src="../assets/images/q14.jpg" width="900" />
                <center>
                    <br>
                    <h3>Je peux prendre au giratoire</h3>
                    
                    <div>
                        <input type="radio" name="question-14-answers" id="question-14-answers-A" value="A" />
                        <label for="question-14-answers-A">A) La première sortie</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-14-answers" id="question-14-answers-B" value="B" />
                        <label for="question-14-answers-B">B) La deuxiéme sortie</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-14-answers" id="question-14-answers-C" value="C" />
                        <label for="question-14-answers-C">C) La troisième sortie</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-14-answers" id="question-14-answers-D" value="D" />
                        <label for="question-14-answers-D">D) La quatrième sortie</label>
                    </div>
                
                </li>
                <li>
<br>
                <img src="../assets/images/q15.jpg" width="900" />
                <center>
                    <br>                    <h3>Je peux dépasser</h3>
                    
                    <div>
                        <input type="radio" name="question-15-answers" id="question-15-answers-A" value="A" />
                        <label for="question-15-answers-A">A) Oui</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-15-answers" id="question-15-answers-B" value="B" />
                        <label for="question-15-answers-B">B) Non</label>
                    </div>
                
                </li>
                <li>
                <br>
                <img src="../assets/images/q16.jpg" width="900" />
                <center>
                    <br>
                    <h3>Je ne suis pas concerné par la signalisation</h3>
                    
                    <div>
                        <input type="radio" name="question-16-answers" id="question-16-answers-A" value="A" />
                        <label for="question-16-answers-A">A) Oui</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-16-answers" id="question-16-answers-B" value="B" />
                        <label for="question-16-answers-B">B) Non</label>
                    </div>
                
                </li>
                <li>
                <br>
                <img src="../assets/images/q17.jpg" width="900" />
                <center>
                    <br>
                    <h3>Je serais limité a 70km/h</h3>
                    
                    <div>
                        <input type="radio" name="question-17-answers" id="question-17-answers-A" value="A" />
                        <label for="question-17-answers-A">A) Oui</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-17-answers" id="question-17-answers-B" value="B" />
                        <label for="question-17-answers-B">B) Non</label>
                    </div>
                
                </li>
                <li>
                <br>
                <img src="../assets/images/q18.jpg" width="900" />
                <center>
                    <br>
                    <h3>Dans 200m je vais rencontrer un passage piéton et un feu tricolore</h3>
                    
                    <div>
                        <input type="radio" name="question-18-answers" id="question-18-answers-A" value="A" />
                        <label for="question-18-answers-A">A) Oui</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-18-answers" id="question-18-answers-B" value="B" />
                        <label for="question-18-answers-B">B) Non</label>
                    </div>
                
                </li>
                <li>
                <br>
                <img src="../assets/images/q19.jpg" width="900" />
                <center>
                    <br>
                    <h3>Dans cette situation</h3>
                    
                    <div>
                        <input type="radio" name="question-19-answers" id="question-19-answers-A" value="A" />
                        <label for="question-19-answers-A">A) Je passe</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-19-answers" id="question-19-answers-B" value="B" />
                        <label for="question-19-answers-B">B) Je m'arrête</label>
                    </div>
                
                </li>
                <li>
                <br>
                <img src="../assets/images/q20.jpg" width="900" />
                <center>
                    <br>
                    <h3>Je peux effectuer un demi tour</h3>
                    
                    <div>
                        <input type="radio" name="question-20-answers" id="question-20-answers-A" value="A" />
                        <label for="question-20-answers-A">A) Oui</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-20-answers" id="question-20-answers-B" value="B" />
                        <label for="question-20-answers-B">B) Non </label>
                    </div>
                    
                </li>
                <li>
                <br>
                <img src="../assets/images/q21.jpg" width="900" />
                <center>
                    <br>
                    <h3>Je peux effectuer un demi tour</h3>
                    
                    <div>
                        <input type="radio" name="question-21-answers" id="question-21-answers-A" value="A" />
                        <label for="question-21-answers-A">A) Oui</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-21-answers" id="question-21-answers-B" value="B" />
                        <label for="question-21-answers-B">B) Non</label>
                    </div>
                    
                </li>
                <li>
                <br>
                <img src="../assets/images/q22.jpg" width="900" />
                <center>
                    <br>
                    <h3>Je peux stationner sur les pavés à ma gauche</h3>
                    
                    <div>
                        <input type="radio" name="question-22-answers" id="question-22-answers-A" value="A" />
                        <label for="question-22-answers-A">A) Oui</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-22-answers" id="question-22-answers-B" value="B" />
                        <label for="question-22-answers-B">B) Non</label>
                    </div>
                    
                </li>
                <li>
                    <br>
                <img src="../assets/images/q23.jpg" width="900" />
                <center>
                    <br>
                <h3>La conduite sous l’empire d’un état alcoolique est :</h3>
                    
                    <div>
                        <input type="radio" name="question-23-answers" id="question-23-answers-A" value="A" />
                        <label for="question-23-answers-A">A) Une infraction ordinaire</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-23-answers" id="question-23-answers-B" value="B" />
                        <label for="question-23-answers-B">B) Une infraction grave </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-23-answers" id="question-23-answers-C" value="C" />
                        <label for="question-23-answers-C">C) Un délit </label>
                    </div>
                
                </li>

                <li>
                    <br>
                <img src="../assets/images/q20.jpg" width="900" />
                <center>
                    <br>
                <h3> Un dépassement de la vitesse maximale autorisée de moins de 20 Km à l'heure</h3>
                    
                    <div>
                        <input type="radio" name="question-24-answers" id="question-24-answers-A" value="A" />
                        <label for="question-24-answers-A">A) N'est pas puni</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-24-answers" id="question-24-answers-B" value="B" />
                        <label for="question-24-answers-B">B) Est puni d'une amende allant de 11 à 60 dinars</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-24-answers" id="question-24-answers-C" value="C" />
                        <label for="question-24-answers-C">C) Est puni d’une amende allant de 60 à 100 dinars</label>
                    </div>
                    
                </li>
                <li>
                    <br>
                <img src="../assets/images/q2.jpg" width="900" />
                <center>
                    <br>
                <h3>Toute personne qui dépasse la vitesse maximale autorisée de cinquante km/h ou plus </h3>
                    
                    <div>
                        <input type="radio" name="question-25-answers" id="question-25-answers-A" value="A" />
                        <label for="question-25-answers-A">A) Est punie d’une amende allant de 120 à 240 dinars</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-25-answers" id="question-25-answers-B" value="B" />
                        <label for="question-25-answers-B">B) Est emprisonnée</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-25-answers" id="question-25-answers-C" value="C" />
                        <label for="question-25-answers-C">C) Est punie d’une amende allant de 60 à 200 dinars</label>
                    </div>
                
                </li>
                <li>
                    <br>
                <img src="../assets/images/q6.jpg" width="900" />
                <center>
                    <br>
                <h3>S'il n'y a pas de panneaux </h3>
                    
                    <div>
                        <input type="radio" name="question-26-answers" id="question-26-answers-A" value="A" />
                        <label for="question-26-answers-A">A) Je m'arrete </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-26-answers" id="question-26-answers-B" value="B" />
                        <label for="question-26-answers-B">B) J'applique la priorité à droite</label>
                    </div>
                </li>
                <li>
                    <br>
                <img src="../assets/images/q27.jpg" width="900" />
                <center>
                    <br>
                <h3>Ce panneau temporaire ne concerne que les camions et ne me concerne pas</h3>
                    
                    <div>
                        <input type="radio" name="question-27-answers" id="question-27-answers-A" value="A" />
                        <label for="question-27-answers-A">A) Oui</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-27-answers" id="question-27-answers-B" value="B" />
                        <label for="question-27-answers-B">B) Non</label>
                    </div>
                </li>
                <li>
                    <br>
                <img src="../assets/images/q28.jpg" width="900" />
                <center>
                    <br>
                <h3>Ce panneau signale :</h3>
                    
                    <div>
                        <input type="radio" name="question-28-answers" id="question-28-answers-A" value="A" />
                        <label for="question-28-answers-A">A) Un passage à niveau muni de barriéres</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-28-answers" id="question-28-answers-B" value="B" />
                        <label for="question-28-answers-B">B) Rétrecissement de la chaussée</label>
                    </div>
                    
                </li>
                <li>
                    <br>
                <img src="../assets/images/q29.jpg" width="900" />
                <center>
                    <br>
                <h3> Pour tourner à gauche je peux rouler sur les pavés</h3>
                    
                    <div>
                        <input type="radio" name="question-29-answers" id="question-29-answers-A" value="A" />
                        <label for="question-29-answers-A">A) Oui </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-29-answers" id="question-29-answers-B" value="B" />
                        <label for="question-29-answers-B">B) Non</label>
                    </div>
                    
                </li>
                <li>
                    <br>
                <img src="../assets/images/q30.jpg" width="900" />
                <center>
                    <br>
                <h3>Je ralentis</h3>
                    
                    <div>
                        <input type="radio" name="question-30-answers" id="question-30-answers-A" value="A" />
                        <label for="question-30-answers-A">A) Oui</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-30-answers" id="question-30-answers-B" value="B" />
                        <label for="question-30-answers-B">B) Non</label>
                    </div>
                    
                </li>

            </ol>
            <center>
            <input type="submit" value="Submit" class="submitbtn" />
		</center>
		</form>
        <button type="button" href="accueiluser.php"
                                        class="btn waves-effect waves-light btn-rounded btn-outline-success">  Back  </button>
	
	</div>


</body>

</html>