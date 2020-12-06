<div class="container d-flex flex-nowrap justify-content-around">
<form action="" method="post" class="row">
  <div class="form-group">
    <select name="year" class="custom-select mx-1" style="width:100px">
      <option value="2019">2019</option>
      <option value="2020" selected>2020</option>
      <option value="2021">2021</option>
    </select>
  </div>

  <div class="form-group">
    <select name="period" class="custom-select mx-1" style="width:100px">
      <option value="1">01~02</option>
      <option value="2">03~04</option>
      <option value="3">05~06</option>
      <option value="4">07~08</option>
      <option value="5">09~10</option>
      <option value="6">11~12</option>
    </select>
  </div>
  <input type="submit" value="提交" class="mx-1 py-auto" style="height:40px"> 
</form>
  

<?php
include_once "base.php";

// $_POST['year']=explode('-',$_POST['date']);//這裡！！！
// $date=explode('-',date)[0];
//year(`date`)=$year

if(isset($_POST['year']) && isset($_POST['period'])){
  $year=$_POST['year'];
  $period=$_POST['period'];
  $sql="SELECT * FROM `invoice` WHERE year(`date`)='$year' && `period`='$period' ORDER BY DATE";
}else{
$sql="SELECT * FROM `invoice` ORDER BY DATE";
}
// print_r($sql);
$rows=$pdo->query($sql)->fetchALL();

?>
  <div class="row flex-nowrap">
    <a href="./index.php?do=mem" class="mx-2">繼續輸入發票</a>
    <a href="index.php?do=all_award&year=<?=$year;?>&period=<?=$period;?>" class="mx-2">幫我對獎</a>
  </div>
</div>
<div class="table-responsive">
<table class="table table-hover">
<thead>
<tr class="table-info">
  <th scope="col" class="text-center"></th>
  <th scope="col" class="text-center">發票號碼</th>
  <th scope="col" class="text-center">發票金額</th>
  <th scope="col" class="text-center">消費日期</th>
  <th scope="col" class="text-center">消費明細</th>
  <th scope="col" class="text-center">操作</th>
  <th scope="col" class="text-center"></th>
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
    <td class="text-center"></td>
</tr>
</tbody>
<?php
}
?>
</table>
</div>