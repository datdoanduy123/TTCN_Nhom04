
 <!-- BEGIN: main -->
<a href="{create_product}" class="btn btn-success">Thêm Sản Phẩm</a>
 <div class="table-responsive">
     <table class="table table-bordered">
         <thead>
             <tr>
                 <th>ID</th>
                 <th>Hình ảnh</th>
                 <th>Tên Sản Phẩm</th>
                 <th>Giá</th>
                 <th>Số Lượng Trong Kho</th>
                 <th>Danh Mục</th>
                 <th></th>

             </tr>
         </thead>
         <tbody>
             <!-- BEGIN: loop -->
             <tr>
                 <td>{ROW.id}</td>
                 <td><img src="{ROW.image_path}" width="100" height="100" onerror="this.onerror=null; this.src='uploads/no-image.png';"></td>
                 <td>{ROW.name}</td>
                 <td>{ROW.price}</td>
                 <td>{ROW.quantity}</td>
                 <td>{ROW.category_name}</td> 

                 <td>
                     <a href="{ROW.edit_url}" class="btn btn-xs btn-warning">Sửa</a>
                     <a href="{ROW.delete_url}" class="btn btn-xs btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này không?');">Xóa</a>

                 </td>
             </tr>
             <!-- END: loop -->
         </tbody>
     </table>
 </div>

  <!-- END: main -->
