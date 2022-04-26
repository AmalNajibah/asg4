<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<div id="page-wrap">
    <!-- <link rel="stylesheet" type="text/css" href="style.css" /> -->
<style>

body{
    background-image: url('img/kits.jpg');
}
.advanceli{
   background: yellow; 
   padding: 10px; 
   border: 1px white; 
   border-radius: 25px;
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

.quizbn{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    margin: 10%;
    background-color:yellow;
    height: 100px;
    max-weight:20px;
    vertical-align: middle;
    line-height: 90px;
    text-align:center;
}

.btnGroup{
    font-weight:bold;
    font-size:25px;
    text-align:center;
    
}
</style>

<?php
if(isset($_POST['submit'])) {
    echo "<h1 class='quizbn'>Welcome to Quiz.bn ";
    echo $_POST['advan'];
    echo "</h1>";
}

$advan = $_POST['advan'];
if(!empty($advan)){
//create connection
// $conn = new mysqli ($host, $dbusername, $dbname);
$conn = new mysqli('localhost', 'root', '', 'quizbn');
if(mysqli_connect_error()){
  die('Connect error ('. mysqli_connect_errno().') '. mysqli_connect_error());
}
else{
  $sql = "INSERT INTO advance (username) values ('$advan')";
  if($conn->query($sql)){
    echo "Successfully Added Your Username into database";
  }else{
    echo "Error: ". $sql ."<br>". $conn->error;
  }
  $conn->close();
}


}else{
  echo "Please Enter Your Username ";
  die();
}
?>


<body>
<form action="advanceresult.php" method="post" id="quiz">

<!-- For music -->
<div class="musicplay">
<audio class="music" id="mymusic">
  <source src="audio/music.mp3" type="audio/mpeg">
</audio>
<button class="musicbtn" onclick="playAudio()" type="button">Music on !</button><br><br>
<button class="musicbtn" onclick="pauseAudio()" type="button">Pause music ! </button>
</div><br><br>

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

<!-- for music play -->
<script>
    var x = document.getElementById("mymusic"); 

    function playAudio() { 
      x.play(); 
    } 

    function pauseAudio() { 
     x.pause(); 
    }
</script><br><br>
<script>
    var x = document.getElementById("mymusic"); 

    function playAudio() { 
      x.play(); 
    } 

    function pauseAudio() { 
     x.pause(); 
    }
</script><br><br>

    <ol>
        <li class="advanceli">
            <h3>I am big, I have big ears. I have two long tisks. Who am I?</h3>
            <div>
                <input type="radio" name="advance1" id="advance1-A" value="A" />
                <label for="advance1-A">A)I am a cat</label>
            </div>
            
            <div>
                <input type="radio" name="advance1" id="advance1-B" value="B" />
                <label for="advance1-B">B) I am a butterfly </label>
            </div>
            
            <div>
                <input type="radio" name="advance1" id="advance1-C" value="C" />
                <label for="advance1-C">C)I am an elephant.</label>
            </div>
            
            <div>
                <input type="radio" name="advance1" id="advance1-D" value="D" />
                <label for="advance1-D">D)I am an ant</label>
            </div>
        
        </li><br><br>
        
        <li class="advanceli">
            <h3>Fill in the blank. The students are _______ their notes.</h3>
            
            <div>
                <input type="radio" name="advance2" id="advance2-A" value="A" />
                <label for="advance2-A">A)Wrote</label>
            </div>
            
            <div>
                <input type="radio" name="advance2" id="advance2-B" value="B" />
                <label for="advance2-B">B)Writter</label>
            </div>
            
            <div>
                <input type="radio" name="advance2" id="advance2-C" value="C" />
                <label for="advance2-C">C)Writing</label>
            </div>
            
            <div>
                <input type="radio" name="advance2" id="advance2-D" value="D" />
                <label for="advance2-D">D)Write</label>
            </div>
        
        </li><br><br>
        
        <li class="advanceli">
        
            <h3>identify the correct sentence</h3>
            
            <div>
                <input type="radio" name="advance3" id="advance3-A" value="A" />
                <label for="advance3-A">A)Waiting, for the storm to stop; I was anxiously looking out of the window.</label>
            </div>
            
            <div>
                <input type="radio" name="advance3" id="advance3-B" value="B" />
                <label for="advance3-B">B)Waiting for the storm to stop I was anxiously looking out of the window.</label>
            </div>
            
            <div>
                <input type="radio" name="advance3" id="advance3-C" value="C" />
                <label for="advance3-C">C)Waiting for the storm to stop I was anxiously looking out of the window</label>
            </div>
            
            <div>
                <input type="radio" name="advance3" id="advance3-D" value="D" />
                <label for="advance3-D">D)Waiting for the storm to stop, I was anxiously looking out of the window.</label>
            </div>
        
        </li><br><br>
        
        <li class="advanceli">
        
            <h3>What is 16+20?</h3>
            <div>
                <input type="radio" name="advance4" id="advance4-A" value="A" />
                <label for="advance4-A">A)36</label>
            </div>
            
            <div>
                <input type="radio" name="advance4" id="advance4-B" value="B" />
                <label for="advance4-B">B)26</label>
            </div>

            <div>
                <input type="radio" name="advance4" id="advance4-B" value="B" />
                <label for="advance4-B">C)30</label>
            </div>

            <div>
                <input type="radio" name="advance4" id="advance4-B" value="B" />
                <label for="advance4-B">D)16</label>
            </div>
        
        </li><br><br>
        
        <li class="advanceli">
        
            <h3>Which part of body helps us to know the taste of candy?</h3>
            
            <div>
                <input type="radio" name="advance5" id="advance5-A" value="A" />
                <label for="advance5-A">A)Teeth</label>
            </div>
            
            <div>
                <input type="radio" name="advance5" id="advance5-B" value="B" />
                <label for="advance5-B">B)Tongue</label>
            </div>
            
            <div>
                <input type="radio" name="advance5" id="advance5-C" value="C" />
                <label for="advance5-C">C)Eyes</label>
            </div>
            
            <div>
                <input type="radio" name="advance5" id="advance5-D" value="D" />
                <label for="advance5-D">D)Ears</label>
            </div>
        
        </li><br>

        <li class="advanceli">
        <h3>Which is the largest planet in our solar systems?</h3>
            
            <div>
                <input type="radio" name="advance6" id="advance6-A" value="A" />
                <label for="advance6-A">A)Jupiter</label>
            </div>
            
            <div>
                <input type="radio" name="advance6" id="advance6-B" value="B" />
                <label for="advance6-B">B)Mars</label>
            </div>
            
            <div>
                <input type="radio" name="advance6" id="advance6-C" value="C" />
                <label for="advance6-C">C)Earth</label>
            </div>
            
            <div>
                <input type="radio" name="advance6" id="advance6-D" value="D" />
                <label for="advance6-D">D)Saturn</label>
            </div>
        
        </li><br>

        <li class="advanceli">
        <h3>Which are the vowels in the English alphabet series?</h3>
            
            <div>
                <input type="radio" name="advance7" id="advance7-A" value="A" />
                <label for="advance7-A">A)A, B, C, D</label>
            </div>
            
            <div>
                <input type="radio" name="advance7" id="advance7-B" value="B" />
                <label for="advance7-B">B)A, E, I, O, U</label>
            </div>
            
            <div>
                <input type="radio" name="advance7" id="advance7-C" value="C" />
                <label for="advance7-C">C)A, C, B, D</label>
            </div>
            
            <div>
                <input type="radio" name="advance7" id="advance7-D" value="D" />
                <label for="advance7-D">D)A, D, B, C</label>
            </div>
        
        </li><br>

        <li class="advanceli">
        <h3>Which month of the year have the least number of days?</h3>
            
            <div>
                <input type="radio" name="advance8" id="advance8-A" value="A" />
                <label for="advance8-A">A)April</label>
            </div>
            
            <div>
                <input type="radio" name="advance8" id="advance8-B" value="B" />
                <label for="advance8-B">B)Januray</label>
            </div>
            
            <div>
                <input type="radio" name="advance8" id="advance8-C" value="C" />
                <label for="advance8-C">C)February</label>
            </div>
            
            <div>
                <input type="radio" name="advance8" id="advance8-D" value="D" />
                <label for="advance8-D">D)December</label>
            </div>
        
        </li><br>

        <li class="advanceli">
        
            <h3>How many primary colors are there?</h3>
            
            <div>
                <input type="radio" name="advance9" id="advance9-A" value="A" />
                <label for="advance9-A">A) 3 (red,yellow,blue) </label>
            </div>
            
            <div>
                <input type="radio" name="advance9" id="advance9-B" value="B" />
                <label for="advance9-B">B) 2 (red, gree)</label>
            </div>
            
            <div>
                <input type="radio" name="advance9" id="advance9-C" value="C" />
                <label for="advance9-C">C) 6 (Red, orange, yellow, green, blue, purple</label>
            </div>
            
            <div>
                <input type="radio" name="advance9" id="advance9-D" value="D" />
                <label for="advance9-D">D) 1(red)</label>
            </div>
        
        </li><br><br>

        <li class="advanceli">
        
            <h3>In which direction does the sunrise?</h3>
            
            <div>
                <input type="radio" name="advance10" id="advance10-A" value="A" />
                <label for="advance10-A">A)North</label>
            </div>
            
            <div>
                <input type="radio" name="advance10" id="advance10-B" value="B" />
                <label for="advance10-B">B)West</label>
            </div>
            
            <div>
                <input type="radio" name="advance10" id="advance10-C" value="C" />
                <label for="advance10-C">C)south</label>
            </div>
            
            <div>
                <input type="radio" name="advance10" id="advance10-D" value="D" />
                <label for="advance10-D">D)East</label>
            </div>
        
        </li><br><br>
    
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
    https://codepen.io/masudrana2779/details/GRqzPdZ
-->