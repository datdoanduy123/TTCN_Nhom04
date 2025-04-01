
 <!-- BEGIN: main -->
<a href="{CREATE_URL}" class="btn btn-success">Thêm Sản Phẩm</a>
 <div class="table-responsive">
     <table class="table table-bordered">
         <thead>
             <tr>
                 <th>ID</th>
                 <th>Name</th>
                 <th>Price</th>
                 <th>Quantity</th>
                 <th>image</th>
                 <th>Description</th>
                 <th>category</th>

             </tr>
         </thead>
         <tbody>
             <!-- BEGIN: loop -->
             <tr>
                 <td>{ROW.id}</td>
                 <td>{ROW.name}</td>
                 <td>{ROW.price}</td>
                 <td>{ROW.quantity}</td>
                <td><img src="{ROW.image_path}" width="100" height="100" onerror="this.onerror=null; this.src='uploads/no-image.png';"></td>
                 <td>{ROW.description}</td>
                 <td>{ROW.category_name}</td> 

                 <td>
                     <a href="{ROW.edit_url}" class="btn btn-xs btn-warning">Sửa</a>
                     <a href="{ROW.delete_url}" class="btn btn-xs btn-danger">Xóa</a>
                 </td>
             </tr>
             <!-- END: loop -->
         </tbody>
     </table>
 </div>

  <!-- END: main -->
