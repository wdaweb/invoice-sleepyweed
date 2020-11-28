<?php
//登入檢查
//1.連線資料庫
include_once "base.php";

//2.取表單帳密
$acc=$_POST['acc'];
$pw=$_POST['pw'];

//3.比對會員資料表
$sql="SELECT * FROM `login` WHERE `acc`='$acc' && `pw`='$pw'";

//4.取會員資料判斷是否存在
$check=$pdo->query($sql)->fetch();
// echo "<pre>";
// print_r($check);
// echo "</pre>";

//5.判斷回傳值是否為空
if(!empty($check)){
  echo "登入成功";

//6.取得會員資料
  $member_sql="SELECT * FROM `member` WHERE `login_id`='{$check['id']}'";
  $member=$pdo->query($member_sql)->fetch();
  $role=$member['role'];

//7.判斷身分權限，導向不同頁面
  switch($role){
    case '會員':
      header('location:index.php?do=mem');
    break;

    case'管理員':
      header('location:index.php?do=admin');
    break;
  }
}else{
  header("location:index.php?do=login&meg=帳密不正確，請重新登入或註冊新帳號");
  }


?>