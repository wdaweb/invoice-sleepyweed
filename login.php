
<?php
//使用session來保持登入狀態
// session_start();
if(isset($_session['login'])){
  include_once "base.php";

  $sql_user="SELECT `member`.`role`,`login`.`acc` FROM `member`,`login` WHERE `member`.`login_id`=`login`.`id` && acc='{$_session['login']}'";
  echo $sql_user;
  $user=$pdo->query($sql_user)->fetch(PDO::FETCH_ASSOC);
  //fetch( ):使用PDO查詢時，可指定接收的格式，是以陣列(數字索引、欄位名稱索引)或物件方式回傳
  //PDO::FETCH_ASSOC:返回以欄位名稱作為索引鍵(key)的陣列(array)
  //PDO::FETCH_NUM:返回以數字作為索引鍵(key)的陣列(array)，由0開始編號
  //PDO::FETCH_BOTH(系統預設):返回 FETCH_ASSOC 和 FETCH_NUM 的結果，兩個都會列出
  //PDO::FETCH_CLASS:返回一個物件，以欄位名稱設定屬性，並把設值給該屬性

  switch($user['role']){
    case '會員';
      header('location:mem.php');
    break;

    case'管理員':
      header('location:admin.php');
    break;
  }
}
?>

<div class="container">
  <div class="col">
    <form action="check.php" method="post">
    <p class="text-center">帳號:<input type="text" name="acc"></p>
    <p class="text-center">密碼:<input type="password" name="pw"></p>
    <p class="text-center"><a href="?do=register">註冊新帳號</a></p>
    <p class="text-center"><input type="submit" value="登入"></p>
    </form>
  </div>
</div>