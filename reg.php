<?php 
$name = $_POST["name"];
$login = $_POST["email"];
$pass = $_POST["password"];

// echo $name."<br>";
// echo $email."<br>";
// echo $pass;

$pass = md5($pass."thisAmIsGone"); 

$mysql = new mysqli('localhost', 'root', '', 'devChat');

$result1 = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login'");
$user1 = $result1->fetch_assoc(); // Конвертируем в массив
if(!empty($user1)){
	echo "Данный логин уже используется!";
	exit();
}

$mysql->query("INSERT INTO `users` (`login`, `pass`, `name`)
	VALUES('$login', '$pass', '$name')");
$mysql->close();


header("Location: http://localhost:3000/");
?>