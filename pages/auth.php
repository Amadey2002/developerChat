<?php 
session_start();

$login = $_POST["email"];
$pass = $_POST["password"];

$pass = md5($pass."thisAmIsGone"); 


$mysql = new mysqli('localhost', 'root', '', 'devChat');

$result1 = $mysql->query("SELECT `login` FROM `users` WHERE `login` = '$login'");
$user1 = $result1->fetch_assoc(); // Конвертируем в массив

$resultPassword = $mysql->query("SELECT `pass` FROM `users` WHERE `pass` = '$pass'");
$user1Pass = $resultPassword->fetch_assoc(); // Конвертируем в массив

$resultName = $mysql->query("SELECT `name` FROM `users` WHERE `login` = '$login'");
$userName = $resultName->fetch_assoc(); // Конвертируем в массив

$resultAdmin = $mysql->query("SELECT `admin` FROM `users` WHERE `login` = '$login'");
$admin = $resultAdmin->fetch_assoc(); // Конвертируем в массив

$_SESSION['name'] =  implode($userName) ;
$_SESSION['email']  = implode($user1);
$_SESSION['admin'] = implode($admin);

if(!empty($user1) && !empty($user1Pass)){
    // header("Location: http://localhost:3000/");
    header("Location: myAccount.php");
    echo $_SESSION['name'].'<br>';
    echo $_SESSION['email'];
    
}else{
    echo "Что-то не так";
}

?>