<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<div id="page-wrap">
    <link rel="stylesheet" type="text/css" href="style.css" />

<?php
if(isset($_POST['biginner'])) {
    echo "<h1 class='quizbn'>Welcome to Quiz.bn ";
    echo $_POST['username'];
    echo "</h1>";
    echo "<h3 style='color:white'>1) untuk mysql rahmah, sini tu kali..kalau ya login ya save ke db</h3>";
    }
?>

<body class="questionbkgrd">
<form action="biginnerresult.php" method="post" id="quiz">
<h3 style="color:white;">2) Timer function here (mus)</h3>
    <ol>
        <li class="biginnerli">
            <h3>Can you guess which one is grape?</h3>
            <div id="b">
                <img id="b" src="img/grape.png" alt=""><br>
                <input type="radio" name="answerqs1" id="answerqs1-A" value="A" />
                <label for="answerqs1-A">A)  </label>
            </div>
            
            <div id="b">
                <img id="b" src="img/strawberry.jpg" alt=""><br>
                <input type="radio" name="answerqs1" id="answerqs1-B" value="B" />
                <label for="answerqs1-B">B)</label>
            </div>
            
            <div id="b">
            <img id="b" src="img/orange.png" alt=""><br>
                <input type="radio" name="answerqs1" id="answerqs1-C" value="C" />
                <label for="answerqs1-C">C)</label>
            </div>
            
            <div id="b">
            <img id="b" src="img/banana.jpg" alt=""><br>
                <input type="radio" name="answerqs1" id="answerqs1-D" value="D" />
                <label for="answerqs1-D">D)</label>
            </div>
        
        </li><br>
        
        <li class="biginnerli">
            <h3>How many colors are there in a rainbow?</h3>
            
            <div>
                <input type="radio" name="answerqs2" id="answerqs2-A" value="A" />
                <label for="answerqs2-A">A) 12</label>
            </div>
            
            <div>
                <input type="radio" name="answerqs2" id="answerqs2-B" value="B" />
                <label for="answerqs2-B">B) 10</label>
            </div>
            
            <div>
                <input type="radio" name="answerqs2" id="answerqs2-C" value="C" />
                <label for="answerqs2-C">C) 7</label>
            </div>
            
            <div>
                <input type="radio" name="answerqs2" id="answerqs2-D" value="D" />
                <label for="answerqs2-D">D) 20</label>
            </div>
        
        </li><br>
        
        <li class="biginnerli">
        
            <h3>Tick the shape of square</h3>
            
            <div id="b">
                <img id="b" src="img/star.jpg" alt=""><br>
                <input type="radio" name="answerqs3" id="answerqs3-A" value="A" />
                <label for="answerqs3-A">A)</label>
            </div>
            
            <div id="b">
                <img id="b" src="img/circle.jpg" alt=""><br>
                <input type="radio" name="answerqs3" id="answerqs3-B" value="B" />
                <label for="answerqs3-B">B)</label>
            </div>
            
            <div id="b">
                <img id="b" src="img/square.jpg" alt=""><br>
                <input type="radio" name="answerqs3" id="answerqs3-C" value="C" />
                <label for="answerqs3-C">C)</label>
            </div>
            
            <div id="b">
                <img id="b" src="img/oval.jpg" alt=""><br>
                <input type="radio" name="answerqs3" id="answerqs3-D" value="D" />
                <label for="answerqs3-D">D) </label>
            </div>
        
        </li><br>
        
        <li class="biginnerli">
        
            <h3>Select the longer pencil</h3>
            
            <div id="b">
                <img id="b" src="img/small.png" alt=""><br>
                <input type="radio" name="answerqs4" id="answerqs4-A" value="A" />
                <label for="answerqs4-A">A)</label>
            </div>
            
            <div id="b">
                <img id="b" src="img/long.jpg" alt=""><br>
                <input type="radio" name="answerqs4" id="answerqs4-B" value="B" />
                <label for="answerqs4-B">B)</label>
            </div>
        
        </li><br>
        
        <li class="biginnerli">
        
            <h3>Fill in the missing number 23,___,___,26,___,</h3>
            
            <div>
                <input type="radio" name="answerqs5" id="answerqs5-A" value="A" />
                <label for="answerqs5-A">A)23,25,22,26,27</label>
            </div>
            
            <div>
                <input type="radio" name="answerqs5" id="answerqs5-B" value="B" />
                <label for="answerqs5-B">B)23,24,27,26,25</label>
            </div>
            
            <div>
                <input type="radio" name="answerqs5" id="answerqs5-C" value="C" />
                <label for="answerqs5-C">C)23,27,24,26,25</label>
            </div>
            
            <div>
                <input type="radio" name="answerqs5" id="answerqs5-D" value="D" />
                <label for="answerqs5-D">D)23,24,25,26,27</label>
            </div>
        
        </li><br>
    
    </ol>
    
    <button id="subqsbtn" type="submit" value="Submit" class="submitbtn" name="submit">Submit answer</button><br><br>

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
    
    if(isset($_POST['submit'])){
        if( $totalCorrect <= 2){
            header("Location: gameover.php");
            exit();
        }else{
            header("Location: biginnerresult.php");
            exit();
        }
    }
    ?>

</form>





</body>
</html>


<!-- Refrence:
    https://code-projects.org/online-quiz-system-in-php-with-source-code/
    https://t4tutorials.com/source-code-of-online-quiz-in-php/?amp
    https://www.sourcecodester.com/php/14487/simple-realtime-quiz-system-using-phpmysql-source-code.html

-->