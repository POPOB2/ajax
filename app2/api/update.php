<?php
//處理更新資料的請求
$dsn="mysql:host=localhost; charset=utf8; dbname=students";
$pdo=new PDO($dsn,'root','');
$sql="UPDATE `students` SET `classroom`='{$_POST['classroom']}', 
                            `seat_num`='{$_POST['seatnum']}', 
                            `name`='{$_POST['name']}', 
                            `birthday`='{$_POST['birthday']}' 
      WHERE `id`='{$_POST['id']}'";
$pdo->exec($sql);

?>

