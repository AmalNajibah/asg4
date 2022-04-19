<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<div id="page-wrap">
    <link rel="stylesheet" type="text/css" href="style.css" />
   
<body class="questionbkgrd">
<h1>Result</h1>

<?php
    $answer1 = $_POST['question-1-answers'];
    $answer2 = $_POST['question-2-answers'];
    $answer3 = $_POST['question-3-answers'];
    $answer4 = $_POST['question-4-answers'];
    $answer5 = $_POST['question-5-answers'];

    $totalCorrect = 0;
    
    if ($answer1 == "A") { $totalCorrect++; }
    if ($answer2 == "C") { $totalCorrect++; }
    if ($answer3 == "C") { $totalCorrect++; }
    if ($answer4 == "B") { $totalCorrect++; }
    if ($answer5 == "D") { $totalCorrect++; }
    
    echo "<div id='results'>$totalCorrect / 5 correct</div>";
    
?>
</head>

<h2>Scoreboard Top 5 goes here(mus)</h2>

    
</body>
</html>