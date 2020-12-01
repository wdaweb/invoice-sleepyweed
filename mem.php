<form action="api/add_invoice.php" method="post">
    <div>發票號碼:
    <input type="text" name="code" style="width:50px">
    <input type="number" name="number" style="width:150px">
    </div>
    <div>發票金額:
    <input type="number" name="payment">
    </div>
  <div>消費日期:<input type="date" name="date"></div>
    消費期別:<select name="period" id="">
    <option value="1">1,2月</option>
    <option value="2">3,4月</option>
    <option value="3">5,6月</option>
    <option value="4">7,8月</option>
    <option value="5">9,10月</option>
    <option value="6">11,12月</option>
  </select>
    <div>消費明細:
    <input type="text" name="text">
    </div>
    <div>
    <input type="submit" value="送出">
    <input type="reset" value="重置">
    </div>
  </form>
  <button><a href="./index.php?do=invoice_list">我的發票列表</a></button>