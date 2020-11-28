<?php
include_once "base.php";

$acc=$_POST['acc'];
$pw=$_POST['pw'];
$name=$_POST['name'];
$email=$_POST['email'];
$education=$_POST['education'];

//1.寫入login資料表
$insert_into_login="INSERT INTO `login`(`acc`,`pw`,`email`) VALUES ('$acc','$pw','$email')";
$pdo->exec($insert_into_login);
echo $insert_into_login;

//2.連結兩張資料表
$select_login_user="SELECT * FROM `login` WHERE `acc`='$acc' && `pw`='$pw'";
$login_user=$pdo->query($select_login_user)->fetch();
$login_id=$login_user['id'];
// echo "註冊者id:";
// echo "$login_id";

//3.寫入member資料表
$insert_into_member="INSERT INTO `member`(`name`,`role`,`education`,`login_id`) VALUES ('$name','會員','$education','$login_id') ";
$result=$pdo->exec($insert_into_member);
echo $insert_into_member;


//4.判斷是否註冊成功並跳轉頁面。不同頁面？前要加index.php
if($result){
  header("location:index.php?do=login&meg=新增成功");
}else{
  header("location:index.php?do=login&meg=新增失敗");
}



?>