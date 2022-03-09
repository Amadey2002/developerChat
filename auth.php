<?php 
// $name = $_POST["name"];
$login = $_POST["email"];
$pass = $_POST["password"];

// echo $name."<br>";
// echo $email."<br>";
// echo $pass;

// $pass = md5($pass."thisAmIsGone"); 

$mysql = new mysqli('localhost', 'root', '', 'devChat');

$result1 = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login'");
$user1 = $result1->fetch_assoc(); // Конвертируем в массив

$resultPassword = $mysql->query("SELECT * FROM `users` WHERE `pass` = '$pass'");
$user1Pass = $resultPassword->fetch_assoc(); // Конвертируем в массив

if(!empty($user1Pass)){
    header("Location: http://localhost:3000/");
}else{
    echo "Что-то не так";
}

?>