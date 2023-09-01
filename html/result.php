<!DOCTYPE html>

<html>

<head>
	<meta charset="UTF-8" />
	<link rel="icon" type="image/png" sizes="16x16" href="../assets/images/logo.jpg">
	<title>Auto-école Movenpick</title>
	
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

	<div id="page-wrap">

		<h1>Résultat du test </h1>
		
        <?php
            
            $answer1  = $_POST['question-1-answers'];
            $answer2  = $_POST['question-2-answers'];
            $answer3  = $_POST['question-3-answers'];
            $answer4  = $_POST['question-4-answers'];
            $answer5  = $_POST['question-5-answers'];
            $answer6  = $_POST['question-6-answers'];
            $answer7  = $_POST['question-7-answers'];
            $answer8  = $_POST['question-8-answers'];
            $answer9  = $_POST['question-9-answers'];
            $answer10 = $_POST['question-10-answers'];
            $answer11 = $_POST['question-11-answers'];
            $answer12 = $_POST['question-12-answers'];
            $answer13 = $_POST['question-13-answers'];
            $answer14 = $_POST['question-14-answers'];
            $answer15 = $_POST['question-15-answers'];
            $answer16 = $_POST['question-16-answers'];
            $answer17 = $_POST['question-17-answers'];
            $answer18 = $_POST['question-18-answers'];
            $answer19 = $_POST['question-19-answers'];
            $answer20 = $_POST['question-20-answers'];
            $answer21 = $_POST['question-21-answers'];
            $answer22 = $_POST['question-22-answers'];
            $answer23 = $_POST['question-23-answers'];
            $answer24 = $_POST['question-24-answers'];
            $answer25 = $_POST['question-25-answers'];
            $answer26 = $_POST['question-26-answers'];
            $answer27 = $_POST['question-27-answers'];
            $answer28 = $_POST['question-28-answers'];
            $answer29 = $_POST['question-29-answers'];
            $answer30 = $_POST['question-30-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "C") { $totalCorrect++; }
            if ($answer2 == "B") { $totalCorrect++; }
            if ($answer3 == "B") { $totalCorrect++; }
            if ($answer4 == "A") { $totalCorrect++; }
            if ($answer5 == "A") { $totalCorrect++; }
            if ($answer6 == "A") { $totalCorrect++; }
            if ($answer7 == "B") { $totalCorrect++; }
            if ($answer8 == "C") { $totalCorrect++; }
            if ($answer9 == "B") { $totalCorrect++; }
            if ($answer10 == "A") { $totalCorrect++; }
            if ($answer11 == "D") { $totalCorrect++; }
            if ($answer12 == "A") { $totalCorrect++; }
            if ($answer13 == "A") { $totalCorrect++; }
            if ($answer14 == "B") { $totalCorrect++; }
            if ($answer15 == "B") { $totalCorrect++; }
            if ($answer16 == "A") { $totalCorrect++; }
            if ($answer17 == "B") { $totalCorrect++; }
            if ($answer18 == "B") { $totalCorrect++; }
            if ($answer19 == "A") { $totalCorrect++; }
            if ($answer20 == "B") { $totalCorrect++; }
            if ($answer21 == "B") { $totalCorrect++; }
            if ($answer22 == "B") { $totalCorrect++; }
            if ($answer23 == "C") { $totalCorrect++; }
            if ($answer24 == "B") { $totalCorrect++; }
            if ($answer25 == "A") { $totalCorrect++; }
            if ($answer26 == "B") { $totalCorrect++; }
            if ($answer27 == "B") { $totalCorrect++; }
            if ($answer28 == "A") { $totalCorrect++; }
            if ($answer29 == "A") { $totalCorrect++; }
            if ($answer30 == "A") { $totalCorrect++; }
            
            echo "<div id='results'> Vous avez obtenu la note $totalCorrect / 30  </div>";

            if ($totalCorrect<24)
                {echo "<div class=\"alert alert-danger alert-dismissible bg-danger text-white border-0 fade show\"
                                    role=\"alert\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                        <span aria-hidden=\"true\">&times;</span>
                                    </button>
                                    <strong>Oops </strong> Vous n'avez pas réussi le test
                                </div> ";}
            else {echo "<div class=\"alert alert-success alert-dismissible bg-success text-white border-0 fade show\"
                                    role=\"alert\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                        <span aria-hidden=\"true\">&times;</span>
                                    </button>
                                    <strong>Bravo! </strong> Vous avez réussi le test
                                </div> ";} 
            
        ?>
    <div class="btn-list" >
                                  <a href="accueiluser">  <button type="button" href="accueiluser.php"
                                        class="btn waves-effect waves-light btn-outline-primary">Retour </button> </a></div>
    </div>
</body>

</html>