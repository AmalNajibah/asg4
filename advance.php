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

 
 #subqsbtn {
   background-color: #09aeae;
   color: #FFF;
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
<form action="advanceresult.php" method="post" id="quiz">
<h3 style="color:black;">2) Timer function here (mus)</h3>

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
    
    </ol>
    
    <button id="subqsbtn" type="submit" value="Submit">Submit answer</button><br><br>

</form>





</body>
</html>


<!-- Refrence:
    https://code-projects.org/online-quiz-system-in-php-with-source-code/
    https://t4tutorials.com/source-code-of-online-quiz-in-php/?amp
    https://www.sourcecodester.com/php/14487/simple-realtime-quiz-system-using-phpmysql-source-code.html

-->