<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level</title>
</head>

<style>

body{
    text-align: center;
    font-family: Amatica SC;
    display:flex; flex-direction:column; justify-content:center;
    min-height:100vh;
    padding: 0 16px;
    /* background: url('img/kids.jpg'); */
}

body::after {
  content: "";
  clear: both;
  display: table;
}

/* CSS */
.btn {
  appearance: none;
  background-color: #FFFFFF;
  border-radius: 40em;
  border-style: none;
  box-shadow: #ADCFFF 0 -12px 6px inset;
  box-sizing: border-box;
  color: #000000;
  cursor: pointer;
  display: inline-block;
  font-family: -apple-system,sans-serif;
  font-size: 1.2rem;
  font-weight: 700;
  letter-spacing: -.24px;
  margin: 0;
  outline: none;
  padding: 1rem 1.3rem;
  quotes: auto;
  text-align: center;
  text-decoration: none;
  transition: all .15s;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  margin-right: 10px;
  
}

.btn:hover {
  background-color: #FFC229;
  box-shadow: #FF6314 0 -6px 8px inset;
  transform: scale(1.125);
}

.btn:active {
  transform: scale(1.025);
}

@media (min-width: 768px) {
  .btn {
    font-size: 1.5rem;
    padding: .75rem 2rem;
  }
}
video {
  object-fit: cover;
  width: 100vw;
  height: 100vh;
  position: fixed;
  top: 0;
  left: 0;
}

 h1, form{
  position: relative;
  text-align: center;
  display: flex;
  align-items: center;
  justify-content: center;
}


</style>



<script>
function myFunction() {
  var x = document.getElementById("myVideo").autoplay;
}
</script>

<body>
  <!-- The video -->
<video id="myVideo" controls autoplay>
  <source src="video/video.mp4" type="video/mp4">
  </video>
</div>


<h1>Welcome to Quiz.bn!</h1>
<h1 class="level">Please choose your level</h1>

<form class="background" method="post">

    <a href="beginuser.php" type="submit" value="beginner" name="beginner" class="btn">Beginner</a>
    <a href="advanceuser.php" type="submit" value="advance" name="advance" class="btn">Advance</a>
  </form>


</body>

</html>