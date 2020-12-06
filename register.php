<div class="container">
<form action="api/add_user.php" method="post">

    <p class="text-center">帳號:<input type="text" name='acc' style="width:210px"></p>
    <p class="text-center">密碼:<input type="password" name='pw' style="width:210px"></p>
    <p class="text-center">姓名:<input type="text" name='name' style="width:210px"></p>
    <p class="text-center">email:<input type="text" name='email' style="width:210px"></p>
    <p class="text-center">學歷:
        <select name="education" class="custom-select" style="width:210px">
        <option value="國中">國中</option>
        <option value="高中">高中</option>
        <option value="大學/專科">大學/專科</option>
        <option value="碩士">碩士</option>
        <option value="博士">博士</option>
        </select>
    </p>

    <div class="row justify-content-center flex-nowrap">
    <p class="mx-2 my-2"><input type="submit" value="確認新增"></p>
    <p class="mx-2 my-2"><input type="reset" value="重置"></p>
    </div>

    
</form>
</div>