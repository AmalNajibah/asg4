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

/* for submit button css */
.out{
  position:relative;
  height:80px;
  width:100%;
}
.container{
  position:absolute;
  bottom:0;
  right:0;
  left:0;
  text-align:center;
}

#subqsbtn {
  align-self: center;
  background-color: #fff;
  background-image: none;
  background-position: 0 90%;
  background-repeat: repeat no-repeat;
  background-size: 4px 3px;
  border-radius: 15px 225px 255px 15px 15px 255px 225px 15px;
  border-style: solid;
  border-width: 2px;
  box-shadow: rgba(0, 0, 0, .2) 15px 28px 25px -18px;
  box-sizing: border-box;
  color: #41403e;
  cursor: pointer;
  display: inline-block;
  font-family: Neucha, sans-serif;
  font-size: 1rem;
  line-height: 23px;
  outline: none;
  padding: .75rem;
  text-decoration: none;
  transition: all 235ms ease-in-out;
  border-bottom-left-radius: 15px 255px;
  border-bottom-right-radius: 225px 15px;
  border-top-left-radius: 255px 15px;
  border-top-right-radius: 15px 225px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

#subqsbtn:hover {
  box-shadow: rgba(0, 0, 0, .3) 2px 8px 8px -5px;
  transform: translate3d(0, 2px, 0);
}

#subqsbtn:focus {
  box-shadow: rgba(0, 0, 0, .3) 2px 8px 4px -6px;
}
                

/* for music css */
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

<!-- For music -->
<div class="musicplay">
<audio class="music" id="mymusic">
  <source src="audio/music.mp3" type="audio/mpeg">
</audio>
<button class="musicbtn" onclick="playAudio()" type="button">Music on !</button><br><br>
<button class="musicbtn" onclick="pauseAudio()" type="button">Pause music ! </button>
</div>

<!-- timer -->
<div class="btnGroup">Timer
        <span class="Btn" id="verifiBtn">
        </span>
        <span class="timer">
          <span id="counter"></span>
        </span>
      </div>

<!-- for countdown 1 min -->
<script>
    function countdown() {
        var seconds = 59;
        function tick() {
          var counter = document.getElementById("counter");
          seconds--;
          counter.innerHTML =
            "0:" + (seconds < 10 ? "0" : "") + String(seconds);
          if (seconds > 0) {
            setTimeout(tick, 1000);
          } else {
            window.location.replace("biginnerresult.php");
          }
        }
        tick();
      }
      countdown();
</script>

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


        <li class="biginnerli">
        
            <h3>What is 1+1</h3>
            
            <div>
                <input type="radio" name="answerqs6" id="answerqs6-A" value="A" />
                <label for="answerqs6-A">A)4</label>
            </div>
            
            <div>
                <input type="radio" name="answerqs6" id="answerqs6-B" value="B" />
                <label for="answerqs6-B">B)2</label>
            </div>
            
            <div>
                <input type="radio" name="answerqs6" id="answerqs6-C" value="C" />
                <label for="answerqs6-C">C)6</label>
            </div>
            
            <div>
                <input type="radio" name="answerqs6" id="answerqs6-D" value="D" />
                <label for="answerqs6-D">D)10</label>
            </div>
        
        </li><br>

        <li class="biginnerli">
        
            <h3>What is baby frog known as?</h3>
            
            <div>
                <input type="radio" name="answerqs7" id="answerqs7-A" value="A" />
                <label for="answerqs7-A">A) Kitten</label>
            </div>
            
            <div>
                <input type="radio" name="answerqs7" id="answerqs7-B" value="B" />
                <label for="answerqs7-B">B) Puppy</label>
            </div>
            
            <div>
                <input type="radio" name="answerqs7" id="answerqs7-C" value="C" />
                <label for="answerqs7-C">C) rabbit</label>
            </div>
            
            <div>
                <input type="radio" name="answerqs7" id="answerqs7-D" value="D" />
                <label for="answerqs7-D">D) Tadpole</label>
            </div>
        </li><br>

        <li class="biginnerli">
        
            <h3>Which day comes after saturday</h3>
            
            <div>
                <input type="radio" name="answerqs8" id="answerqs8-A" value="A" />
                <label for="answerqs8-A">A)Sunday</label>
            </div>
            
            <div>
                <input type="radio" name="answerqs8" id="answerqs8-B" value="B" />
                <label for="answerqs8-B">B)Monday</label>
            </div>
            
            <div>
                <input type="radio" name="answerqs8" id="answerqs8-C" value="C" />
                <label for="answerqs8-C">C)Tuesday</label>
            </div>
            
            <div>
                <input type="radio" name="answerqs8" id="answerqs8-D" value="D" />
                <label for="answerqs8-D">D)Friday</label>
            </div>
        
        </li><br>

        <li class="biginnerli">
        
            <h3>How many hours do we have in a day?</h3>
            
            <div>
                <input type="radio" name="answerqs9" id="answerqs9-A" value="A" />
                <label for="answerqs9-A">A) 36 hourd</label>
            </div>
            
            <div>
                <input type="radio" name="answerqs9" id="answerqs9-B" value="B" />
                <label for="answerqs9-B">B) 24 hours</label>
            </div>
            
            <div>
                <input type="radio" name="answerqs9" id="answerqs9-C" value="C" />
                <label for="answerqs9-C">C) 10 hours</label>
            </div>
            
            <div>
                <input type="radio" name="answerqs9" id="answerqs9-D" value="D" />
                <label for="answerqs9-D">D) 12 hours</label>
            </div>
        
        </li><br>

        <li class="biginnerli">
        
            <h3>How many days do we have in a week?</h3>
            
            <div>
                <input type="radio" name="answerqs10" id="answerqs10-A" value="A" />
                <label for="answerqs10-A">A)4</label>
            </div>
            
            <div>
                <input type="radio" name="answerqs10" id="answerqs10-B" value="B" />
                <label for="answerqs10-B">B)2</label>
            </div>
            
            <div>
                <input type="radio" name="answerqs10" id="answerqs10-C" value="C" />
                <label for="answerqs10-C">C)7</label>
            </div>
            
            <div>
                <input type="radio" name="answerqs10" id="answerqs10-D" value="D" />
                <label for="answerqs10-D">D)10</label>
            </div>
        
        </li><br>
    
    </ol>
    
    <div class="out">
<div class="container">
    <button id="subqsbtn" type="submit" value="Submit">Submit answer</button><br><br>
</div>
</div>

</form>




</body>
</html>


<!-- Refrence:
    https://code-projects.org/online-quiz-system-in-php-with-source-code/
    https://t4tutorials.com/source-code-of-online-quiz-in-php/?amp
    https://www.sourcecodester.com/php/14487/simple-realtime-quiz-system-using-phpmysql-source-code.html

-->