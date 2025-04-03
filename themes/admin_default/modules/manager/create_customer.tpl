<!-- BEGIN: main -->
<h2 class="mb-4">Thêm khách hàng</h2>
<form action="" method="post">
    <table class="table table-bordered">
        <tbody>
            <tr>
                <td><strong>Tên khách hàng</strong><sup class="required">(*)</sup></td>
                <td><input type="text" name="name" id="name" class="w300 form-control" required /></td>
            </tr>
            
            <tr>
                <td><strong>Email</strong><sup class="required">(*)</sup></td>
                <td><input type="email" name="email" id="email" class="w300 form-control" required /></td>
            </tr>

            <tr>
                <td><strong>Số điện thoại</strong></td>
                <td><input type="text" name="phone" id="phone" class="w300 form-control" /></td>
            </tr>
            
            <tr>
                <td><strong>Địa Chỉ</strong><sup class="required">(*)</sup></td>
                <td><input type="address" name="address" id="address" class="w300 form-control" required minlength="6" /></td>
            </tr>
            
            <tr>
                <td colspan="2" class="text-center">
                    <input name="submit_customer" type="submit" value="{LANG.save}" class="btn btn-primary w100" />
                </td>
            </tr>
        </tbody>
    </table>
</form>
<!-- END: main -->
