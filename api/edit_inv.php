<?php
include_once "../base.php";

$sql="UPDATE `invoice` 
      SET `code`='{$_POST['code']}',`number`='{$_POST['number']}',
      `payment`='{$_POST['payment']}',`date`='{$_POST['date']}',`text`='{$_POST['text']}'
      WHERE `id`='{$_POST['id']}'";

$pdo->exec($sql);
// print_r($sql);
echo "修改成功";
header("location:../index.php?do=invoice_list");
?>