<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<div id="page-wrap">

<h1>Result</h1>

<?php
    
    $answer1 = $_POST['question-1-answers'];
    $answer2 = $_POST['question-2-answers'];
    $answer3 = $_POST['question-3-answers'];
    $answer4 = $_POST['question-4-answers'];
    $answer5 = $_POST['question-5-answers'];

    $totalCorrect = 0;
    
    if ($answer1 == "A") { $totalCorrect++; }
    if ($answer2 == "D") { $totalCorrect++; }
    if ($answer3 == "A") { $totalCorrect++; }
    if ($answer4 == "B") { $totalCorrect++; }
    if ($answer5 == "D") { $totalCorrect++; }
    
    echo "<div id='results'>$totalCorrect / 5 correct</div>";
    
?>

</div>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>