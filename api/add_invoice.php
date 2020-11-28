<?php
//將發票號碼及相關資料寫入資料庫
include_once "../base.php";

$sql="INSERT INTO `invoice`(`".implode("`,`",array_keys($_POST))."`) 
VALUES ('".implode("','",$_POST)."')";
$pdo->exec($sql);

echo"新增完成";

header("location:../index.php?do=invoice_list");
?>