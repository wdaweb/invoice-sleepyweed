<?php
include_once "base.php";

$sql="DELETE FROM `invoice` WHERE `id`='{$_GET['id']}'";

$pdo->exec($sql);
header("location:index.php?do=invoice_list");

?>