<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<div id="page-wrap">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Play" />

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

/* for play again button */
.playagainbtn {
  appearance: none;
  backface-visibility: hidden;
  background-color: #27ae60;
  border-radius: 8px;
  border-style: none;
  box-shadow: rgba(39, 174, 96, .15) 0 4px 9px;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  @import url('http://fonts.cdnfonts.com/css/game');
  font-family: 'GAME', sans-serif;
  font-size: 16px;
  font-weight: 600;
  letter-spacing: normal;
  line-height: 1.5;
  outline: none;
  overflow: hidden;
  padding: 13px 20px;
  position: relative;
  text-align: center;
  text-decoration: none;
  transform: translate3d(0, 0, 0);
  transition: all .3s;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: top;
  white-space: nowrap;
}

.playagainbtn:hover {
  background-color: #1e8449;
  opacity: 1;
  transform: translateY(0);
  transition-duration: .35s;
}

.playagainbtn:active {
  transform: translateY(2px);
  transition-duration: .35s;
}

.playagainbtn:hover {
  box-shadow: rgba(39, 174, 96, .2) 0 6px 12px;
}

/* for end game button */
.endbtn {
  background: #FF4742;
  border: 1px solid #FF4742;
  border-radius: 6px;
  box-shadow: rgba(0, 0, 0, 0.1) 1px 2px 4px;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: nunito,roboto,proxima-nova,"proxima nova",sans-serif;
  font-size: 16px;
  font-weight: 800;
  line-height: 16px;
  min-height: 40px;
  outline: 0;
  padding: 12px 14px;
  text-align: center;
  text-rendering: geometricprecision;
  text-transform: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: middle;
}

.endbtn:hover,
.endbtn:active {
  background-color: red;
  background-position: 0 0;
  color: white;
}

.endbtn:active {
  opacity: .5;
}


/* for font-family, playagain and end game button */
.endbtn, .playagainbtn{
    font-family: Play;
    font-size: 20px;
    font-style: normal;
    font-variant: normal;
    font-weight: 700;
    line-height: 15.4px;
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
        echo "<div id='error'> Game Over!</div><br><br>";
    }
    
    echo "<div id='results'>$totalCorrect / 5 correct</div>";
    
?>
</head>

<h2>Scoreboard Top 5 goes here (mus)</h2><br><br>
<a href="advance.php" class="playagainbtn">Play again!</a><br><br>
<a href="index.php" class="endbtn">End Game!</a><br><br> 
</body>
</html>

<!-- refrence: https://www.cssfontstack.com/Play -->