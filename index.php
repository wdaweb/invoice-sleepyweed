<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>統一發票</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/97604f290f.js" crossorigin="anonymous"></script>
</head>
<style>
  .number{
        font-size:1.2rem;
        color:red;
        font-weight:bolder;
    }

</style>
<body>
  <div class="container mt-5">
    <div class="col-md-5 col-lg-6 p-3 d-flex justify-content-around mx-auto border">
      <div class="text-center"><a href="index.php">統一發票當期對獎號碼</a></div>
      <div class="text-center"><a href="?do=login">登入看更多！</a></div>
    </div>

    <div class="col-md-5 col-lg-6 p-3 d-flex justify-content-around mx-auto border">
      <?php
        if(isset($_GET['do'])){
          $file=$_GET['do'].".php";
          include $file;
        }else{
          include "main.php";
        }
      ?>
    </div>
  </div>
</body>
</html>