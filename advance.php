<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<div id="page-wrap">
    <link rel="stylesheet" type="text/css" href="style.css" />

<?php
if(isset($_POST['advance'])) {
    echo "<h1 class='quizbn'>Welcome to Quiz.bn ";
    echo $_POST['username'];
    echo "</h1>";
    echo "<h3 style='color:white'>1) untuk mysql rahmah, sini tu kali..kalau ya login ya save ke db</h3>";
    }
?>

<body class="questionbkgrd">
<form action="advanceresult.php" method="post" id="quiz">
<h3 style="color:white;">2) Timer function here (mus)</h3>
    <ol>
        <li>
            <h3>I am big, I have big ears. I have two long tisks. Who am I?</h3>
            <div>
                <input type="radio" name="answerqs1" id="answerqs1-A" value="A" />
                <label for="answerqs1-A">A)I am a cat</label>
            </div>
            
            <div>
                <input type="radio" name="answerqs1" id="answerqs1-B" value="B" />
                <label for="answerqs1-B">B) I am a butterfly </label>
            </div>
            
            <div>
                <input type="radio" name="answerqs1" id="answerqs1-C" value="C" />
                <label for="answerqs1-C">C)I am an elephant.</label>
            </div>
            
            <div>
                <input type="radio" name="answerqs1" id="answerqs1-D" value="D" />
                <label for="answerqs1-D">D)I am an ant</label>
            </div>
        
        </li>
        
        <li>
            <h3>Fill in the blank. The studnts are _______ their notes.</h3>
            
            <div>
                <input type="radio" name="answerqs2" id="answerqs2-A" value="A" />
                <label for="answerqs2-A">A)Wrote</label>
            </div>
            
            <div>
                <input type="radio" name="answerqs2" id="answerqs2-B" value="B" />
                <label for="answerqs2-B">B)Writterb</label>
            </div>
            
            <div>
                <input type="radio" name="answerqs2" id="answerqs2-C" value="C" />
                <label for="answerqs2-C">C)Writing</label>
            </div>
            
            <div>
                <input type="radio" name="answerqs2" id="answerqs2-D" value="D" />
                <label for="answerqs2-D">D)Write</label>
            </div>
        
        </li>
        
        <li>
        
            <h3>identify the correct sentence</h3>
            
            <div>
                <input type="radio" name="answerqs3" id="answerqs3-A" value="A" />
                <label for="answerqs3-A">A)Waiting, for the storm to stop; I was anxiously looking out of the window.</label>
            </div>
            
            <div>
                <input type="radio" name="answerqs3" id="answerqs3-B" value="B" />
                <label for="answerqs3-B">B)Waiting for the storm to stop I was anxiously looking out of the window.</label>
            </div>
            
            <div>
                <input type="radio" name="answerqs3" id="answerqs3-C" value="C" />
                <label for="answerqs3-C">C)Waiting for the storm to stop I was anxiously looking out of the window</label>
            </div>
            
            <div>
                <input type="radio" name="answerqs3" id="answerqs3-D" value="D" />
                <label for="answerqs3-D">D)Waiting for the storm to stop, I was anxiously looking out of the window.</label>
            </div>
        
        </li>
        
        <li>
        
            <h3>What is 16+20?</h3>
            <div>
                <input type="radio" name="answerqs4" id="answerqs4-A" value="A" />
                <label for="answerqs4-A">A)30</label>
            </div>
            
            <div>
                <input type="radio" name="answerqs4" id="answerqs4-B" value="B" />
                <label for="answerqs4-B">B)26</label>
            </div>

            <div>
                <input type="radio" name="answerqs4" id="answerqs4-B" value="B" />
                <label for="answerqs4-B">C)36</label>
            </div>

            <div>
                <input type="radio" name="answerqs4" id="answerqs4-B" value="B" />
                <label for="answerqs4-B">D)16</label>
            </div>
        
        </li>
        
        <li>
        
            <h3>Which part of body helps us to know the taste of candy?</h3>
            
            <div>
                <input type="radio" name="answerqs5" id="answerqs5-A" value="A" />
                <label for="answerqs5-A">Teeth</label>
            </div>
            
            <div>
                <input type="radio" name="answerqs5" id="answerqs5-B" value="B" />
                <label for="answerqs5-B">B)Tongue</label>
            </div>
            
            <div>
                <input type="radio" name="answerqs5" id="answerqs5-C" value="C" />
                <label for="answerqs5-C">C)Eyes</label>
            </div>
            
            <div>
                <input type="radio" name="answerqs5" id="answerqs5-D" value="D" />
                <label for="answerqs5-D">D)Ears</label>
            </div>
        
        </li>
    
    </ol>
    
    <button id="subqsbtn" type="submit" value="Submit" class="submitbtn">Submit answer</button>

</form>





</body>
</html>


<!-- Refrence:
    https://code-projects.org/online-quiz-system-in-php-with-source-code/
    https://t4tutorials.com/source-code-of-online-quiz-in-php/?amp
    https://www.sourcecodester.com/php/14487/simple-realtime-quiz-system-using-phpmysql-source-code.html

-->