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

.quizbn{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    margin: 10%;
    background-color:pink;
    height: 100px;
    max-weight:20px;
    vertical-align: middle;
    line-height: 90px;


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
</style>

<?php
if(isset($_POST['beginner'])) {
    echo "<h1 class='quizbn'>Welcome to Quiz.bn ";
    echo $_POST['username'];
    echo "</h1>";
    echo "<h3 style='color:black'>1) untuk mysql rahmah, sini tu kali..kalau ya login ya save ke db</h3>";
    }
?>

<body>
<h1 class="level">Choose your level</h1>
<form class="background" action="biginner.php" method="post">
    <a href="biginner.php" type="submit" value="beginner" name="beginner" class="btn">Beginner</a>
    <a href="advance.php" type="submit" value="advance" name="advance" class="btn">Advance</a>
</form>
</body>
</html>