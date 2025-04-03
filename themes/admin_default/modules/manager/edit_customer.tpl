<!-- BEGIN: main -->
<h2 class="mb-4">Chỉnh sửa khách hàng</h2>

<form action="" method="post">
    <table class="table table-bordered">
        <tbody>
            <tr>
                <td><strong>Name</strong><sup class="required">(*)</sup></td>
                <td><input type="text" name="name" id="name" class="w300 form-control" value="{CUSTOMER.name}" required /></td>
            </tr>

            <tr>
                <td><strong>Email</strong></td>
                <td><input type="email" name="email" id="email" class="w300 form-control" value="{CUSTOMER.email}" required /></td>
            </tr>

            <tr>
                <td><strong>Phone Number</strong></td>
                <td><input type="text" name="phone" id="phone" class="w300 form-control" value="{CUSTOMER.phone}" /></td>
            </tr>
            <tr>
                <td><strong>Address</strong></td>
                <td><input type="text" name="address" id="address" class="w300 form-control" value="{CUSTOMER.address}" /></td>
            </tr>

            <tr>
                <td colspan="2" class="text-center">
                    <input name="submit_edit" type="submit" value="Lưu thay đổi" class="btn btn-primary w100" />
                </td>
            </tr>
        </tbody>
    </table>
</form>
<!-- END: main -->
