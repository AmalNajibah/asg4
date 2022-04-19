<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<div id="page-wrap">
    <link rel="stylesheet" type="text/css" href="style.css" />

<body class="questionbkgrd">
<form action="result.php" method="post" id="quiz">
<h1 class="quizbn">Welcome to Quiz.bn</h1>
<h3 style="color:white;">timer function here(mus)</h2>
    <ol>
        <li>
            <h3>Can you guess which one is grape?</h3>
            <div id="b">
                <img id="b" src="img/grape.png" alt=""><br>
                <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                <label for="question-1-answers-A">A)  </label>
            </div>
            
            <div id="b">
                <img id="b" src="img/strawberry.jpg" alt=""><br>
                <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                <label for="question-1-answers-B">B)</label>
            </div>
            
            <div id="b">
            <img id="b" src="img/orange.png" alt=""><br>
                <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                <label for="question-1-answers-C">C)</label>
            </div>
            
            <div id="b">
            <img id="b" src="img/banana.jpg" alt=""><br>
                <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                <label for="question-1-answers-D">D)</label>
            </div>
        
        </li>
        
        <li>
            <h3>How many colors in rainbow?</h3>
            
            <div>
                <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                <label for="question-2-answers-A">A) 12</label>
            </div>
            
            <div>
                <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                <label for="question-2-answers-B">B) 10</label>
            </div>
            
            <div>
                <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                <label for="question-2-answers-C">C) 7</label>
            </div>
            
            <div>
                <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                <label for="question-2-answers-D">D) 20</label>
            </div>
        
        </li>
        
        <li>
        
            <h3>Tick the shape of square</h3>
            
            <div id="b">
                <img id="b" src="img/star.jpg" alt=""><br>
                <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                <label for="question-3-answers-A">A)</label>
            </div>
            
            <div id="b">
                <img id="b" src="img/circle.jpg" alt=""><br>
                <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                <label for="question-3-answers-B">B)</label>
            </div>
            
            <div id="b">
                <img id="b" src="img/square.jpg" alt=""><br>
                <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                <label for="question-3-answers-C">C)</label>
            </div>
            
            <div id="b">
                <img id="b" src="img/oval.jpg" alt=""><br>
                <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                <label for="question-3-answers-D">D) </label>
            </div>
        
        </li>
        
        <li>
        
            <h3>Select the longer pencil</h3>
            
            <div id="b">
                <img id="b" src="img/small.png" alt=""><br>
                <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                <label for="question-4-answers-A">A)</label>
            </div>
            
            <div id="b">
                <img id="b" src="img/long.jpg" alt=""><br>
                <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                <label for="question-4-answers-B">B)</label>
            </div>
        
        </li>
        
        <li>
        
            <h3>Fill in the missing number 23,___,___,26,___,</h3>
            
            <div>
                <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                <label for="question-5-answers-A">A)23,25,22,26,27</label>
            </div>
            
            <div>
                <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                <label for="question-5-answers-B">B)23,24,27,26,25</label>
            </div>
            
            <div>
                <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                <label for="question-5-answers-C">C)23,27,24,26,25</label>
            </div>
            
            <div>
                <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                <label for="question-5-answers-D">D)23,24,25,26,27</label>
            </div>
        
        </li>
    
    </ol>
    
    <button id="subqsbtn" type="submit" value="Submit" class="submitbtn">Submit</button>

</form>



</body>
</html>


<!-- Refrence:
    https://code-projects.org/online-quiz-system-in-php-with-source-code/
    https://t4tutorials.com/source-code-of-online-quiz-in-php/?amp
    https://www.sourcecodester.com/php/14487/simple-realtime-quiz-system-using-phpmysql-source-code.html

-->