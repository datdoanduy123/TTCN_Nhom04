<!-- BEGIN: main -->
<h2 class="mb-4">Thêm sản phẩm</h2>
<form action="" method="post" enctype="multipart/form-data>
    <table class="table table-bordered">
        <tbody>
            <tr>
                <td><strong>Tên sản phẩm</strong><sup class="required">(*)</sup></td>
                <td><input type="text" name="name" id="name" class="w300 form-control" required /></td>
            </tr>
            
            <tr>
                <td><strong>Giá</strong><sup class="required">(*)</sup></td>
                <td><input type="number" name="price" id="price" class="w300 form-control" required /></td>
            </tr>
            
            <tr>
                <td><strong>Số lượng</strong><sup class="required">(*)</sup></td>
                <td><input type="number" name="quantity" id="quantity" class="w300 form-control" required /></td>
            </tr>
            
            <tr>
                <td><strong>Hình ảnh</strong></td>
                <td><input type="file" name="image" id="image" class="w300 form-control" /></td>
            </tr>
            
            <tr>
                <td><strong>Danh mục</strong><sup class="required">(*)</sup></td>
                <td>
                    <select name="category_id" id="category_id" class="w300 form-control" required>
                        <option value="">-- Chọn danh mục --</option>
                        <!-- BEGIN: category_loop -->
                        <option value="{CATEGORY.id}">{CATEGORY.name}</option>
                        <!-- END: category_loop -->
                    </select>
                </td>
            </tr>
            
            <tr>
                <td colspan="2" class="text-center">
                    <input name="submit1" type="submit" value="{LANG.save}" class="btn btn-primary w100" />
                </td>
            </tr>
        </tbody>
    </table>
</form>
<!-- END: main -->
