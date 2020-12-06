<?php
include_once "base.php";
//?年?月份發票
$period_month=[
    1=>'01~02',
    2=>'03~04',
    3=>'05~06',
    4=>'07~08',
    5=>'09~10',
    6=>'11~12'
];
?>
<div class="title3">西元<?=$_GET['year'];?>年<?=$period_month[$_GET['period']];?>月份發票中獎清單<br></div>
<?php
//1.撈出該期發票
$year=$_GET['year'];
$period=$_GET['period'];
$sql="SELECT * FROM `invoice` WHERE year(`date`)=$year && `period`=$period ORDER BY DATE";
$invoice=$pdo->query($sql)->fetchALL(PDO::FETCH_ASSOC);
// print_r($invoice);

//2.撈出該期獎號
$sql="SELECT * FROM `award_number` WHERE`year`=$year && `period`=$period";
$award=$pdo->query($sql)->fetchALL(PDO::FETCH_ASSOC);
// print_r($award);
?>
<p class="text-right"><a href="./index.php?do=invoice_list">我的發票列表</a></p>
<div class="table-responsive">
<table class="table table-hover">
  <thead>
    <tr class="table-info">
    <th scope="col" class="text-center"></th>
      <th scope="col" class="text-center">消費日期</th>
      <th scope="col" class="text-center">發票號碼</th>
      <th scope="col" class="text-center">消費明細</th>
      <th scope="col" class="text-center">中獎獎項</th>
      <th scope="col" class="text-center">中獎獎金</th>
    <th scope="col" class="text-center"></th>
    </tr>
  </thead>
  <tbody>
    
<?php
//3.開始對獎
// $all_res=-1;//以all_res這個變數來判定四個類別是否中獎，若all_res變成1則中獎
foreach($invoice as $inv){
  $code=$inv['code'];
  $number=$inv['number'];
  $text=$inv['text'];
  $date=$inv['date'];

  foreach($award as $aw){
    switch($aw['type']){
      //特別獎要完全等於我的發票號碼
      case 1:
        if($aw['number']==$number){
?>
        <tr>
          <th scope="row"></th>
          <td class="text-center"><?=$date;?></td>
          <td class="text-center"><?=$code.$number;?></td>
          <td class="text-center"><?=$text;?></td>
          <td class="text-center">特別獎</td>
          <td class="text-center">1,000萬元</td>
          <td class="text-center"></td>
        </tr>
<?php
          // $all_res=1;
        }else{
        }
      break;
?>
<?php
      //特獎要完全等於我的發票號碼
      case 2:
        if($aw['number']==$number){
?>
        <tr>
          <th scope="row"></th>
          <td class="text-center"><?=$date;?></td>
          <td class="text-center"><?=$code.$number;?></td>
          <td class="text-center"><?=$text;?></td>
          <td class="text-center">特獎</td>
          <td class="text-center">200萬元</td>
          <td class="text-center"></td>
        </tr>
<?php
          // $all_res=1;
        }else{
        }
      break;
?>

<?php
      //頭獎～六獎(8~3碼相同)
      case 3:
        $res=-1;//以result這個變數來判定是否有得獎
        for($i=5;$i>=0;$i--){
          $target=mb_substr($aw['number'],$i,(8-$i),'utf8');
          $mynumber=mb_substr($number,$i,(8-$i),'utf8');
          if($target==$mynumber){
            $res=$i;
          }else{
            break;
          }
        }if($res!=-1){
?>
        <tr>
          <th scope="row"></th>
          <td class="text-center"><?=$date;?></td>
          <td class="text-center"><?=$code.$number;?></td>
          <td class="text-center"><?=$text;?></td>
          <td class="text-center"><?="{$awardStr[$res]}獎";?></td>
          <td class="text-center"><?="{$moneyStr[$res]}元";?></td>
          <td class="text-center"></td>
        </tr>
  
<?php
          // $all_res=1;
        }
?>
<?php
      //增開六獎
      case 4:
        if($aw['number']==mb_substr($number,5,3,'utf8')){
?>
        <tr>
          <th scope="row"></th>
          <td class="text-center"><?=$date;?></td>
          <td class="text-center"><?=$code.$number;?></td>
          <td class="text-center"><?=$text;?></td>
          <td class="text-center">增開六獎</td>
          <td class="text-center">2百元</td>
          <td class="text-center"></td>
        </tr>
<?php
          // $all_res=1;
      }
      break;
    }
  }
}
// if($all_res==-1){
//   echo "很可惜，都沒有中";
// }
?>
  </tbody>
</table>
</div>