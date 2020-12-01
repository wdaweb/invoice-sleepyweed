<?php
include_once "base.php";
$sql="SELECT * FROM `invoice` ORDER BY DATE";
$rows=$pdo->query($sql)->fetchALL();
?>
<button><a href="./index.php?do=mem">繼續輸入發票</a></button>
<button><a href="">幫我對獎</a></button>
<div class="table-responsive">
<table class="table">
  <thead>
    <tr>
      <th scope="col" class="text-center"></th>
      <th scope="col" class="text-center">發票號碼</th>
      <th scope="col" class="text-center">發票金額</th>
      <th scope="col" class="text-center">消費日期</th>
      <th scope="col" class="text-center">消費明細</th>
      <th scope="col" class="text-center">操作</th>
    </tr>
  </thead>
<?php
foreach($rows as $row){
?>
  <tbody>
    <tr>
      <th scope="row"></th>
        <td class="text-center"><?=$row['code'].$row['number'];?></td>
        <td class="text-center"><?=$row['payment'];?></td>
        <td class="text-center"><?=$row['date'];?></td>
        <td class="text-center"><?=$row['text'];?></td>
        <td class="text-center">
          <button class="btn btn-sm btn-secondary">
            <a class="text-light" href="index.php?do=edit_invoice&id=<?=$row['id'];?>">編輯</button></a>
          <button class="btn btn-sm btn-info">
            <a class="text-light" href="index.php?do=del_invoice&id=<?=$row['id'];?>">刪除</button></a>
        </td>
    </tr>
  </tbody>
<?php
}
?>
</table>
</div>


