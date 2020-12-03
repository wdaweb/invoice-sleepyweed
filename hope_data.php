<?php
include_once "base.php";

$codeBase=["AM","UG","PO","UA","IH","FJ"];
$textBase=["便當","飯糰","牙膏","洗髮精","書包","香皂","雞蛋","衛生紙","禮品","百貨"];
for($i=0;$i<100;$i++){
$code=$codeBase[rand(0,5)];
$text=$textBase[rand(0,9)];
$number=sprintf("%08d",rand(0,99999999));
// str_pad($number,8,'0',STR_PAD_LEFT)."<br>";


$payment=rand(1,10000);

$start=strtotime("2020-01-01");
$end=strtotime("2020-12-31");
$date=date("Y-m-d",rand($start,$end));
$period=ceil(explode("-",$date)[1]/2);

$hope=[
  'code'=>$code,
  'number'=>$number,
  'payment'=>$payment,
  'period'=>$period,
  'date'=>$date,
  'text'=>$text
];


$sql="INSERT INTO invoice(`".implode("`,`",array_keys($hope))."`) VALUES ('".implode("','",$hope)."')";
$pdo->exec($sql);


}




?>