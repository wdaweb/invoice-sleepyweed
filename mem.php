<div class="container">
<p class="text-right mr-5"><a href="./index.php?do=invoice_list">我的發票列表</a></p>
<form action="api/add_invoice.php" method="post">
    <p class="text-center">發票號碼:
    <input type="text" name="code" style="width:50px">
    <input type="number" name="number" style="width:150px">
    </p>
    <p class="text-center">發票金額:
    <input type="number" name="payment" style="width:210px">
    </p>
  <p class="text-center">消費日期:
  <input type="date" name="date" style="width:210px">
  </p>
  <!-- <input type="hidden" name="year">
  因為直到使用者按下送出後才會得到year的值
  ，所以在invoice_list.php的「這裡！！！」處
  設置一行程式--> 
  <p class="text-center">消費期別:
    <select name="period" class="custom-select" style="width:210px">
    <option value="1">1,2月</option>
    <option value="2">3,4月</option>
    <option value="3">5,6月</option>
    <option value="4">7,8月</option>
    <option value="5">9,10月</option>
    <option value="6">11,12月</option>
    </select>
  </p>
    <p class="text-center">消費明細:
    <input type="text" name="text" style="width:210px">
    </p>
    <p class="text-center">
    <input type="submit" value="送出">
    <input type="reset" value="重置">
    </p>
  </form>
  </div>