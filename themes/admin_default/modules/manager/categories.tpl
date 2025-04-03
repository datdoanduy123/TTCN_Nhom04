<!-- BEGIN: main -->
<div class="table-responsive">
    <a href="{create_category_url}" class="btn btn-success">Thêm Danh Mục</a>
    <table class="table table-striped table-bordered table-hover">
        <colgroup>
            <col class="w100">
            <col span="1">
            <col span="2" class="w150">
        </colgroup>
        <thead>
            <tr class="text-center">
                <th class="text-nowrap">Id</th>
                <th class="text-nowrap">Tên danh mục</th>
                <th class="text-nowrap">Mô tả</th>
                <th class="text-nowrap"></th>

            </tr>
        </thead>
        <tbody>

        <!-- BEGIN: loop -->

        <tr class="text-center">
            <th class="text-nowrap">{ROW.id}</th>
            <th class="text-nowrap">{ROW.name}</th>
            <th class="text-nowrap">{ROW.description}</th>
            <td>
                 <a href="{ROW.url_edit_categrories}" class="btn btn-xs btn-warning">Sửa</a>
<a href="{ROW.url_delete_categrories}" class="btn btn-xs btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này không?');">Xóa</a>
            </td>
        </tr>

        <!-- END: loop -->

        </tbody>
    </table>
</div>
<!-- END: main -->