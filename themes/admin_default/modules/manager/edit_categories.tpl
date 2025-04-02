<!-- BEGIN: main -->
<h2 class="mb-4">Chỉnh Sửa Danh Mục Sản Phẩm</h2>

<form action="" method="post">
    <table class="table table-bordered">
        <tbody>
            <tr>
                <td><strong>Tên</strong><sup class="required">(*)</sup></td>
                <td><input type="text" name="name" id="name" class="w300 form-control" value="{CUSTOMER.name}" required /></td>
            </tr>

            <tr>
                <td><strong>Mô tả</strong></td>
                <td><<input type="text" name="description" id="description" class="w300 form-control" value="{CUSTOMER.description}" required />
</td>
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
