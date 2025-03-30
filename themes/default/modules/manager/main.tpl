<!-- BEGIN: main -->
<form method="GET">
    <input type="text" name="search" value="{SEARCH_VALUE}" placeholder="Nhập tên sản phẩm..." />
    <button type="submit">Tìm kiếm</button>
</form>

<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Hình ảnh</th>
                <th>Mô tả</th>
                <th>Danh mục</th>
            </tr>
        </thead>
        <tbody>
            <!-- BEGIN: loop -->
            <tr>
                <td>{ROW.id}</td>
                <td>{ROW.name}</td>
                <td>{ROW.price}</td>
                <td>{ROW.quantity}</td>
                <td><img src="images/{ROW.image}" width="50"></td>
                <td>{ROW.description}</td>
                <td>{ROW.category_name}</td>
            </tr>
            <!-- END: loop -->
        </tbody>
    </table>
</div>
<!-- END: main -->
