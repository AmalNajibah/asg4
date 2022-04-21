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
    $answer1 = $_POST['answerqs1'];
    $answer2 = $_POST['answerqs2'];
    $answer3 = $_POST['answerqs3'];
    $answer4 = $_POST['answerqs4'];
    $answer5 = $_POST['answerqs5'];

    $totalCorrect = 0;
    
    if ($answer1 == "A") { $totalCorrect++; }
    if ($answer2 == "C") { $totalCorrect++; }
    if ($answer3 == "C") { $totalCorrect++; }
    if ($answer4 == "B") { $totalCorrect++; }
    if ($answer5 == "D") { $totalCorrect++; }
    
    if ($totalCorrect <2){
        echo "<div id='error'> Game Over!</div><br><br>";
    }
    echo "<div id='results'>$totalCorrect / 5 correct</div>";

?>

<h2>Scoreboard Top 5 goes here (mus)</h2><br><br>
<a href="biginner.php" class="playagainbtn">Play again!</a><br><br>
<a href="index.php" class="endbtn">End game!</a><br><br>


    
</body>
</html>