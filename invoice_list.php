<?php
include_once "base.php";
$sql="SELECT * FROM `invoice` ORDER BY DATE";
$rows=$pdo->query($sql)->fetchALL();
?>

<tr>
  <td class="text-center">發票號碼</td>
  <td class="text-center">發票金額</td>
  <td class="text-center">消費日期</td>
  <td class="text-center">消費明細</td>
  <td class="text-center">操作</td>
</tr>
<?php
foreach($rows as $row){
  ?>
  <tr>
  <td><?=$row['code'].$row['number'];?></td>
  <td><?=$row['payment'];?></td>
  <td><?=$row['date'];?></td>
  <td><?=$row['text'];?></td>
  </tr>
<?php
}
?>

<button><a href="./index.php?do=mem">繼續輸入發票</a></button>


