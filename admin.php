<form action="api/add_award_number.php" method="post">
<table class="table table-bordered table-sm" summary="統一發票中獎號碼單">
  <tbody>
    <tr> 
    <th id="month">年月份</th> 
    <td headers="month" class="title">
    <div class="row flex-nowrap">
    <div class="form-group col-3">
    <select type="number" name="year" class="custom-select">
      <option value="2019">2019</option>
      <option value="2020" selected>2020</option>
      <option value="2021">2021</option>
    </select>
    </div>
    <div class="form-group col-3">
      <select name="period" class="custom-select">
        <option value="1">01~02</option>
        <option value="2">03~04</option>
        <option value="3">05~06</option>
        <option value="4">07~08</option>
        <option value="5">09~10</option>
        <option value="6">11~12</option>
      </select>
    </div>
    </div>
    </td>
    </tr> 
    <tr> 
    <th id="specialPrize" rowspan="2">特別獎</th> 
    <td headers="specialPrize" class="number">
      <input type="number"name="special_prize" min="00000001" max="99999999">
    </td> 
    </tr> 
    <tr> 
    <td headers="specialPrize"> 同期統一發票收執聯8位數號碼與特別獎號碼相同者獎金1,000萬元 </td> 
    </tr> 
    <tr> 
    <th id="grandPrize" rowspan="2">特獎</th> 
    <td headers="grandPrize" class="number">
      <input type="number"name="grand_prize" min="00000001" max="99999999">
    </td> 
    </tr> 
    <tr> 
    <td headers="grandPrize"> 同期統一發票收執聯8位數號碼與特獎號碼相同者獎金200萬元 </td> 
    </tr> 
    <tr> 
    <th id="firstPrize" rowspan="2">頭獎</th> 
    <td headers="firstPrize" class="number">
      <input type="number"name="first_prize[]" min="00000001" max="99999999">
      <input type="number"name="first_prize[]" min="00000001" max="99999999">
      <input type="number"name="first_prize[]" min="00000001" max="99999999">
    </td> 
    </tr> 
    <tr> 
    <td headers="firstPrize"> 同期統一發票收執聯8位數號碼與頭獎號碼相同者獎金20萬元 </td> 
    </tr> 
    <tr hidden> 
    <th id="twoPrize">二獎</th> 
    <td headers="twoPrize"> 同期統一發票收執聯末7 位數號碼與頭獎中獎號碼末7位相同者各得獎金4萬元 </td> 
    </tr> 
    <tr hidden> 
    <th id="threePrize">三獎</th> 
    <td headers="threeAwards"> 同期統一發票收執聯末6 位數號碼與頭獎中獎號碼末6 位相同者各得獎金1萬元 </td> 
    </tr> 
    <tr hidden> 
    <th id="fourPrize">四獎</th> 
    <td headers="fourPrizes"> 同期統一發票收執聯末5 位數號碼與頭獎中獎號碼末5 位相同者各得獎金4千元 </td> 
    </tr> 
    <tr hidden> 
    <th id="fivePrize">五獎</th> 
    <td headers="fivePrize"> 同期統一發票收執聯末4 位數號碼與頭獎中獎號碼末4 位相同者各得獎金1千元 </td> 
    </tr> 
    <tr hidden> 
    <th id="sixPrize">六獎</th> 
    <td headers="sixPrize"> 同期統一發票收執聯末3 位數號碼與 頭獎中獎號碼末3 位相同者各得獎金2百元 </td> 
    </tr> 
    <tr> 
    <th id="addSixPrize">增開六獎</th> 
    <td headers="addSixPrize" class="number">
      <input type="number"name="add_six_prize[]" min="001" max="999">
      <input type="number"name="add_six_prize[]" min="001" max="999">
      <input type="number"name="add_six_prize[]" min="001" max="999">
    </td> 
    </tr> 
    
  </tbody>
</table>
  <div class="row justify-content-center flex-nowrap">
    <p class="mx-2"><input type="submit" value="儲存"></p>
    <p class="mx-2"><input type="reset" value="重置"></p>
  </div>
  </form> 