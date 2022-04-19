<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<style>
.login h1, .login h2 {
    text-align: center;
}

.login input {
   width: 100%;
}

.welcome .player-name {
    margin: 30px 0;
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

body, input, button {
    font-family: 'Roboto', Arial, Helvetica, sans-serif;
    font-size: 12pt;
    color: #333;
    text-align: center;
}

input[type=text] {
    border-radius: 10px;
    border: 1px solid black;
    margin: 3px 0;
    width: 265px;
    padding: 8px 5px;
}

</style>
<body>

<form class="background" action="question.php" method="post">
<div class="login">
        <h1>Start playing Quiz.bn!</h1>
        <h2>Please fill in your names</h2><br><br>

        <div class="player-name">
            <label for="username">Enter your name: </label>
            <input type="text" id="username" name="username" required />
        </div><br><br>

        <button type="submit">Start</button>
    </div>
</form>

    
</body>
</html>