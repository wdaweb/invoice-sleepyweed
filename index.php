<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>統一發票</title>
  <!-- <link rel="stylesheet" href="style.css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/97604f290f.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&display=swap" rel="stylesheet">
</head>
<style>
.base{
  color:#d7fff0;/* 米藍 */
  font-size:16px;
  background:url("https://i.imgur.com/6KnqEEH.jpg");
  background-size:cover;
  /* background-position:center center; */
  font-family: 'Kosugi Maru', sans-serif;
}

.col-md-5.col-lg-7.p-3.mx-auto{
  background:#a8a8a8;/* 灰 */
}

.table.table-sm{
  color:#002242;/* 深藍 */
}

.number{
  font-size:24px;
  color:#1cea96;/* 綠 */
  font-weight:bolder;
  font-family:helvetica;
  -webkit-text-stroke: 1px #002242;
}

a{
  font-size:18px;
  color:#002242;
  text-decoration:none;
}

a:hover{
  color:#1cea96;
  text-decoration:none;
}

.text-center.title1{
  background:#d7fff0;
  border-radius:20px;
  color:#002242;
  font-size:22px;
}

.ym{
  font-size:28px;
  color:transparent;
  font-weight:bolder;
  font-style:italic;
  font-family:helvetica;
  -webkit-text-stroke: 1px #002242;
}

input{
  color:#002242;
  padding:5px 15px;
  background:#ccc;
  border:none;
  border-radius: 5px;
}

input[type="submit"]:hover{
  cursor:pointer;
  background:#1cea96;
}

input[type="reset"]:hover{
  cursor:pointer;
  background:#1cea96;
}

.custom-select{
  color:#002242;
  padding:5px 15px;
  /* background:#ccc; */
  border:none;
}

.th.text-center{
  color:#d7fff0;
  background:#002242;
}

.title3{
  color:#d7fff0;
  font-size:22px;
  font-weight:bolder;
}
</style>
<body class="base">
  <div class="container mt-5">
    <div class="col-md-5 col-lg-7 p-3 d-flex justify-content-around mx-auto">
      <div class="text-center title1"><a href="index.php">&nbsp;統一發票當期對獎號碼&nbsp;</a></div>
      <div class="text-center title1"><a href="?do=login">&nbsp;登入看更多！&nbsp;</a></div>
    </div>

    <div class="col-md-5 col-lg-7 p-3 mx-auto">
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