<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<div id="page-wrap">
    <link rel="stylesheet" type="text/css" href="style.css" />
   
    <style>
   body{
    text-align: center;
    font-family: Arial, Helvetica, sans-serif;
    display:flex; flex-direction:column; justify-content:center;
    min-height:100vh;
    padding: 0 16px;
    background-image: url('img/kids.jpg');
}

body::after {
  content: "";
  clear: both;
  display: table;
}
</style>

<body>
<h1 id='results'>Your Score: </h1>

<?php
    $answer1 = $_POST['advance1'];
    $answer2 = $_POST['advance2'];
    $answer3 = $_POST['advance3'];
    $answer4 = $_POST['advance4'];
    $answer5 = $_POST['advance5'];

    $totalCorrect = 0;
    
    if ($answer1 == "C") { $totalCorrect++; }
    if ($answer2 == "C") { $totalCorrect++; }
    if ($answer3 == "D") { $totalCorrect++; }
    if ($answer4 == "A") { $totalCorrect++; }
    if ($answer5 == "B") { $totalCorrect++; }

    if ($totalCorrect <2){
        echo "<div id='error'> You failed! <br> Try again!</div>";
    }
    
    echo "<div id='results'>$totalCorrect / 5 correct</div>";
    
?>
</head>

<h2>Scoreboard Top 5 goes here (mus)</h2><br><br>
<a href="advance.php" class="playagainbtn">Play again!</a><br><br>
<a href="index.php" class="endbtn">End Game!</a><br><br> 
</body>
</html>