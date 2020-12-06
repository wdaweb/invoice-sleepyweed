<?php
include_once "base.php";

$sql="SELECT * FROM `invoice` WHERE `id`='{$_GET['id']}'";
$inv=$pdo->query($sql)->fetch();
// print_r($inv);
?>

<button><a href="./index.php?do=invoice_list">我的發票列表</a></button>

<div class="form-group">
<form action="api/edit_inv.php" method="post">
發票號碼：<div class="form-control"><input type="text" name="code" value="<?=$inv['code'];?>"></div>
        <div class="form-control"><input type="text" name="number" value="<?=$inv['number'];?>"></div>
發票金額：<div class="form-control"><input type="text" name="payment" value="<?=$inv['payment'];?>"></div>
消費日期：<div class="form-control"><input type="text" name="date" value="<?=$inv['date'];?>"></div>
消費明細：<div class="form-control"><input type="text" name="text" value="<?=$inv['text'];?>"></div>
<button type="submit" class="btn btn-primary">提交</button>
<button type="reset" class="btn btn-info">重置</button>
<!-- post表單一定要傳送id，不然資料庫update時會抓不到要修改的是哪一筆資料 -->
<input type="hidden" name="id" value="<?=$inv['id'];?>">
</form>
</div>