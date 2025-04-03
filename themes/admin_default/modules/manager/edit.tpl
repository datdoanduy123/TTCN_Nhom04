<!-- BEGIN: edit -->
<h2 class="mb-4">Thông tin sản phẩm</h2>
<form action="" method="post">
    <table class="table table-bordered" >
        <tbody>
            <tr>
                <td><label for="name">Tên sản phẩm:</label></td>
                <td><input type="text" id="name" name="name" value="{ROW.name}" required></td>
            </tr>
            <tr>
                <td><label for="price">Giá:</label></td>
                <td><input type="number" id="price" name="price" value="{ROW.price}" required></td>
            </tr>
            <tr>
                <td><label for="quantity">Số lượng:</label></td>
                <td><input type="number" id="quantity" name="quantity" value="{ROW.quantity}" required></td>
            </tr>
            <tr>
                <td><label for="image">Ảnh:</label></td>
                <td><input type="text" id="image" name="image" value="{ROW.image}"></td>
            </tr>
            <tr>
                <td><label for="category_id">Danh mục:</label></td>
                <td>
                    <select id="category_id" name="category_id">
                        <!-- Lặp qua danh sách danh mục -->
                        <!-- BEGIN: category_loop -->
                        <option value="{CATEGORY.id}" {CATEGORY.selected}>{CATEGORY.name}</option>
                        <!-- END: category_loop -->
                    </select>
                </td>
            </tr>
            <tr>
            <td colspan="3" class="text-center"><input name="submit1" type="submit" value="{LANG.save}" class="btn btn-primary w100"/></td>
            </tr>
        </tbody>
    </table>
</form>
<!-- END: edit -->
