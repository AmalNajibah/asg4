<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<div id="page-wrap">
    <link rel="stylesheet" type="text/css" href="style.css" />

<style>
    body{
        background-image: url('img/kits.jpg');
    }

    #subqsbtn {
   background-color: #09aeae;
   color: white;
   border: 0;
   border-radius: 10px;
   padding: 1em 2em;
   cursor: pointer;
   font-family: 'Roboto', Arial, Helvetica, sans-serif;
   font-size: 12pt;
   color: black;
   text-align: center;
   text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;

}

#subqsbtn:hover {
  background-color: #008CBA;
  color: white;
}


.musicplay{
  display:flex;
  justify-content: flex-end;
}

.musicbtn {
  background-color: #fbeee0;
  border: 2px solid #422800;
  border-radius: 30px;
  box-shadow: #422800 4px 4px 0 0;
  color: #422800;
  cursor: pointer;
  display: inline-block;
  font-weight: 600;
  font-size: 18px;
  padding: 0 18px;
  line-height: 50px;
  text-align: center;
  text-decoration: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.musicbtn:hover {
  background-color: #fff;
}

.musicbtn:active {
  box-shadow: #422800 2px 2px 0 0;
  transform: translate(2px, 2px);
}

@media (min-width: 768px) {
  .musicbtn {
    min-width: 120px;
    padding: 0 25px;
  }
}
</style>


<body>
<form action="biginnerresult.php" method="post" id="quiz">
<h3 class="timer" style="color:black;">1) Timer function here (mus)</h3><br><br>

<!-- For music -->
<div class="musicplay">
<audio class="music" id="mymusic">
  <source src="audio/music.mp3" type="audio/mpeg">
</audio>
<button class="musicbtn" onclick="playAudio()" type="button">Music on !</button><br><br>
<button class="musicbtn" onclick="pauseAudio()" type="button">Pause music ! </button>
</div>

<script>
    var x = document.getElementById("mymusic"); 

    function playAudio() { 
      x.play(); 
    } 

    function pauseAudio() { 
     x.pause(); 
    }
</script><br><br>


<!-- 5 questions -->
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

</form>





</body>
</html>


<!-- Refrence:
    https://code-projects.org/online-quiz-system-in-php-with-source-code/
    https://t4tutorials.com/source-code-of-online-quiz-in-php/?amp
    https://www.sourcecodester.com/php/14487/simple-realtime-quiz-system-using-phpmysql-source-code.html

-->