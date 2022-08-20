<?php
$message = null;
$username = $_POST['username'];
$password = $_POST['password'];



//database connection
$conn = new mysqli('127.0.0.1','root','','test');
if($conn -> connect_error){
    die('Connection Failed: ' . $conn->connect_error);
}else{
    $sql = "SELECT pass FROM user WHERE username = '$username';";
    $result = mysqli_query($conn, $sql);
    $pass = mysqli_fetch_all($result,MYSQLI_ASSOC);
    $sandi = $pass[0]['pass'];
    if ($password == $sandi){
        header("Location: http://localhost:8080/ngakanyuk/public/profile.php?username=$username");
    }else{
        $message ="Incorrect pasword";
        header("Location: http://localhost:8080/ngakanyuk/public/loginpage.php?message=error");
    }
    $conn->close();
}

?>