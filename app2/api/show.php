<?php
$id=$_GET['id'];
$dsn="mysql:host=localhost; charset=utf8; dbname=students";
$pdo=new PDO($dsn,'root','');
$sql="SELECT * FROM `students` WHERE `id`='$id' ";
$student=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC); // fetch()只取一筆
echo json_encode($student);
?>