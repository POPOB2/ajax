<?php
//處理查詢資料的請求
$classroom=$_GET['classroom'];
$dsn="mysql:host=localhost; charset=utf8; dbname=students";
$pdo=new PDO($dsn,'root','');
$sql="SELECT * FROM students WHERE classroom='{$classroom}'";
$rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

// print_r($rows);
echo json_encode($rows); // 需echo 否則在index2.html的log執行query時會是undefind
?>