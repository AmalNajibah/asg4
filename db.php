<?php
$username = $_POST['username'];
if(!empty($username)){
// $host = "localhost";
// $dbusername = "root";
// $dbname = "quizbn";

//create connection
// $conn = new mysqli ($host, $dbusername, $dbname);
$conn = new mysqli('localhost', 'root', '', 'quizbn');
if(mysqli_connect_error()){
  die('Connect error ('. mysqli_connect_errno().') '. mysqli_connect_error());
}
else{
  $sql = "INSERT INTO user (username) values ('$username')";
  if($conn->query($sql)){
    echo "Successfully Added Your Username";
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

