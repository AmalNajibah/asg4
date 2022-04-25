<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<div id="page-wrap">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Play" />
    <link href="http://fonts.cdnfonts.com/css/games" rel="stylesheet">
                
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

table, td{
  border: 1px solid;
  border-collapse:collapse;
  margin:20px;
    font-family: Play;
    font-size: 20px;
    font-style: normal;
    font-variant: normal;
    font-weight: 700;
    line-height: 15.4px;
}
</style>

<body>



<?php
    $answer1 = $_POST['answerqs1'];
    $answer2 = $_POST['answerqs2'];
    $answer3 = $_POST['answerqs3'];
    $answer4 = $_POST['answerqs4'];
    $answer5 = $_POST['answerqs5'];
    $answer6 = $_POST['answerqs6'];
    $answer7 = $_POST['answerqs7'];
    $answer8 = $_POST['answerqs8'];
    $answer9 = $_POST['answerqs9'];
    $answer10 = $_POST['answerqs10'];

    $totalCorrect = 0;
    
    if ($answer1 == "A") { $totalCorrect++; }
    if ($answer2 == "C") { $totalCorrect++; }
    if ($answer3 == "C") { $totalCorrect++; }
    if ($answer4 == "B") { $totalCorrect++; }
    if ($answer5 == "D") { $totalCorrect++; }
    if ($answer6 == "B") { $totalCorrect++; }
    if ($answer7 == "D") { $totalCorrect++; }
    if ($answer8 == "A") { $totalCorrect++; }
    if ($answer9 == "B") { $totalCorrect++; }
    if ($answer10 == "C") { $totalCorrect++; }
    
    if ($totalCorrect <5){
        echo "<div id='error'> Game Over!</div><br><br>";
    }else{
      echo "<div id='pass'> You Passed!</div><br><br>";
    }
    
    echo "<div id='results' class='outer'> You Score $totalCorrect / 10 correct</div>";

?>



<h2>Scoreboard Top 5</h2>
       
            
<?php
  
/* Connection Variable ("Servername",
"username","password","database") */
// $con = mysqli_connect("localhost", 
//         "root", "", "leaderboard");

  
/* Mysqli query to fetch rows 
in descending order of marks */
// $result = mysqli_query($con, "SELECT userName, 
// marks FROM leaderboard ORDER BY marks DESC");

  
/* First rank will be 1 and 
    second be 2 and so on */
$ranking = 1;
  
/* Fetch Rows from the SQL query */
// if (mysqli_num_rows($result)) {
//     while ($row = mysqli_fetch_array($result)) {
//         echo "<td>{$ranking}</td>
//         <td>{$row['userName']}</td>
//         <td>{$row['marks']}</td>";
//         $ranking++;
//     }
// }

//create connection
$conn = new mysqli('localhost', 'root', '', 'quizbn');
if(mysqli_connect_error()){
  die('Connect error ('. mysqli_connect_errno().') '. mysqli_connect_error());
}


//insert score
$sql = "INSERT INTO score, ranking (`score`,`ranking`) VALUES (`$totalCorrect`)";

              $result = mysqli_query($conn, $sql);
              if($result){
                  echo 'Your Score Have Been Added';
              }else{
                  echo 'Cannot add your score';
              }


//get the username
$result = mysqli_query($conn, "SELECT * FROM user");
if (mysqli_num_rows($result) > 0){
  ?>

  <table>
    <tr>
      <td>username</td>
      <td>score</td>
      <td>ranking</td>
</tr>
      <?php
      $i = 0;
      while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
        <td><?php echo $row["username"]; ?></td>
        <td><?php echo $row["$ranking"]; ?></td>
        <td><?php echo $row["$totalCorrect"]; ?></td>
        
      </tr>
      <?php

      }
}


?>

</table>
<br>
<a href="biginner.php" class="playagainbtn">Play again!</a><br><br>
<a href="index.php" class="endbtn">End game!</a><br><br>
    
</body>
</html>

<!--
  refrence:
  https://www.cssfontstack.com/Play
  https://www.cdnfonts.com/games.font


-->