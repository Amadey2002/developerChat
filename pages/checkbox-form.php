<?php
$mysql = new mysqli('localhost', 'root', '', 'devChat');
$arrNameUsers =  $_POST['nameUser'];
$delete = $_POST['ban'];

if($delete){
for($i = 0; $i <= count($arrNameUsers) - 1; $i++){
        $userDelete = $arrNameUsers[$i];
        $mysql->query("DELETE  FROM `users` WHERE `name` = '$userDelete'");
        echo $arrNameUsers[$i]."<br>";
}
}

header("Location: people.php");
?>