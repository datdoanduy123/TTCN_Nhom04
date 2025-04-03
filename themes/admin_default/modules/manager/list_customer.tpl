<!-- BEGIN: main -->
<div class="table-responsive">
    <a href="{create_url}" class="btn btn-success">Thêm khách hàng</a>
    <table class="table table-striped table-bordered table-hover">
        <colgroup>
            <col class="w100">
            <col span="1">
            <col span="2" class="w150">
        </colgroup>
        <thead>
            <tr class="text-center">
                <th class="text-nowrap">Id</th>
                <th class="text-nowrap">Name</th>
                <th class="text-nowrap">Email</th>
                <th class="text-nowrap">phone</th>
                <th class="text-nowrap">Address</th>
                <th class="text-nowrap"></th>
            </tr>
        </thead>
        <tbody>

        <!-- BEGIN: loop -->

        <tr class="text-center">
            <th class="text-nowrap">{ROW.id}</th>
            <th class="text-nowrap">{ROW.name}</th>
            <th class="text-nowrap">{ROW.email}</th>
            <th class="text-nowrap">{ROW.phone}</th>
            <th class="text-nowrap">{ROW.address}</th>
            <th class="text-nowrap">
                <a href="{ROW.url_edit_customer}" class="btn btn-warning">Sửa</a>
                <a href="{ROW.url_delete_customer}" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa không?');">Xóa</a>
            </a>
            
        </th>
        
</tr>

        <!-- END: loop -->

        </tbody>
    </table>
</div>
<!-- END: main -->