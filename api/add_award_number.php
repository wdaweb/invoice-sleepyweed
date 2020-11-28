<?php
include_once "../base.php";

//將表單傳送過來的中獎號碼寫入資料庫

$year=$_POST['year'];
$period=$_POST['period'];

//特別獎 type=1
$sql="INSERT INTO `award_number`(`year`,`period`,`number`,`type`)
      VALUES('$year','$period','{$_POST['special_prize']}','1')";
$pdo->exec($sql);

//特獎 type=2
$sql="INSERT INTO `award_number`(`year`,`period`,`number`,`type`)
      VALUES('$year','$period','{$_POST['grand_prize']}','2')";
$pdo->exec($sql);

//頭獎 type=3
foreach($_POST['first_prize'] as $first){
  if(!empty($first)){
    $sql="INSERT INTO `award_number`(`year`,`period`,`number`,`type`)
          VALUES ('$year','$period','$first','3')";
    $pdo->exec($sql);
  }
}

//增開六獎
foreach($_POST['add_six_prize'] as $six){
  if(!empty($six)){
    $sql="INSERT INTO `award_number`(`year`,`period`,`number`,`type`)
          VALUES ('$year','$period','$six','4')";
    $pdo->exec($sql);
  }
}

header("location:../index.php?do=main&pd=".$year."-".$period);


?>