<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" type="text/css" href="style.css" /> -->
    <title>Login</title>
</head>

<style>
body, html {
  height: 100%;
  margin: 0;
}

.bkgrdindex{
    background-image: url('img/index1.jpg');
    background-repeat:no-repeat;
    background-size:cover;
    /* border: 5px solid white; */
    height:100%

}
    
.bkgrdindex, input, button {
   font-family: 'Roboto', Arial, Helvetica, sans-serif;
   font-size: 12pt;
   color: #333;
   text-align: center;
}

button {
   background-color: #09aeae;
   color: #FFF;
   border: 0;
   border-radius: 10px;
   padding: 1em 2em;
   cursor: pointer;
}

button[disabled] {
   cursor: not-allowed;
   opacity: .5;
}

//hover
button {
  overflow: hidden;
  transition: all 300ms ease;
}

/* button h4 {
  color: #111;
} */

button:after {
  width: 300%;
  height: 300%;
  left: -300%;
  transform: rotate(45deg);
  background-color: #f21170;
  transition: all 300ms ease;
}

button:hover {
  color: #fff;
  z-index: 10;
  font-weight: 600;
}

button:hover::after {
  left: -100%;
}

button:hover {
  border: 2px solid #f21170;
}





.login h1, .login h2 {
   text-align: center;
}

.login input {
  width: 100%;
}

.welcome .player-name {
   margin: 30px 0;
}

input[type=text] {
   border-radius: 10px;
   border: 1px solid black;
   margin: 3px 0;
   width: 265px;
   padding: 8px 5px;
}


</style>

<body class="bkgrdindex">

<form class="background" action="biginner.php" method="post">
<div class="login">
        <h1>Start playing Quiz.bn!</h1>
        <h2>Please fill in your names</h2><br><br>

        <div class="player-name">
            <label for="username">Enter your name: </label>
            <input type="text" id="username" name="username" required />
        </div><br><br>

        <button type="submit" value="Submit" name="beginner">Biginner</button>
        <button type="submit" value="Submit" name="advance">Advance</button>
    </div>
</form>

    
</body>
</html>