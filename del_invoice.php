<?php
include_once "base.php";

$sql="SELECT * FROM `invoice`";
$inv=$pdo->query($sql)->fetch();
?>

<div class="col-md-6 text-center border p-4 mx-auto">
  <div class="text-center">你確定要刪除以下發票嗎?</div>
    <ul>
      發票號碼：<li><?=$inv['code'].$inv['number'];?></li>
      發票金額：<li><?=$inv['payment'];?></li>
      消費日期：<li><?=$inv['date'];?></li>
    </ul>
    <div class="text-center mt-4">
      <button class="btn btn-info">
      <a href="index.php?do=api/del_inv&id=<?=$_GET['id'];?>">確認</a>
      </button>
      <button class="btn btn-warning">
      <a href="index.php?do=invoice_list">取消</a>
      </button>
    </div>
</div>