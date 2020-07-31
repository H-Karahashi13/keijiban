<?php
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=PHP復習用;host=localhost;","root","root");

$pdo->exec("insert into 4each_keijiban(handlename,title,comments)
values('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');");


header("Location:http://localhost/4each_keijiban/掲示板復習.php");

?>