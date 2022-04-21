<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<style>
body, html {
  height: 100%;
  margin: 0;
  background-image: url('img/kids.jpg');
}

body::after {
  content: "";
  clear: both;
  display: table;
}

.bkgrdindex{
    text-align: center;
    font-family: Arial, Helvetica, sans-serif;
    display:flex; flex-direction:column; justify-content:center;
    min-height:100vh;
    padding: 0 16px;

}
    
.bkgrdindex, input, button {
   font-size: 12pt;
   color: #333;
   text-align: center;
}

/* submit button CSS */
button {
  background-color: #110448;
  border: 0;
  border-radius: 56px;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-family: system-ui,-apple-system,system-ui,"Segoe UI",Roboto,Ubuntu,"Helvetica Neue",sans-serif;
  font-size: 18px;
  font-weight: 600;
  outline: 0;
  padding: 16px 21px;
  position: relative;
  text-align: center;
  text-decoration: none;
  transition: all .3s;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

button:before {
  background-color: initial;
  background-image: linear-gradient(#fff 0, rgba(255, 255, 255, 0) 100%);
  border-radius: 125px;
  content: "";
  height: 50%;
  left: 4%;
  opacity: .5;
  position: absolute;
  top: 0;
  transition: all .3s;
  width: 92%;
}

button:hover {
  box-shadow: rgba(255, 255, 255, .2) 0 3px 15px inset, rgba(0, 0, 0, .1) 0 3px 5px, rgba(0, 0, 0, .1) 0 10px 13px;
  transform: scale(1.05);
}

@media (min-width: 768px) {
  button {
    padding: 16px 48px;
  }
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

<form class="background" action="level.php" method="post">
<div class="login">
        <h1>Start playing Quiz.bn!</h1>
        <h2>Please fill in your names</h2><br><br>

        <div class="player-name">
            <label for="username">Enter your name: </label>
            <input type="text" id="username" name="username" required />
        </div><br><br>

        <button type="submit" value="Submit" name="beginner">START NOW!</button>
    </div>
</form>
</body>
</html>