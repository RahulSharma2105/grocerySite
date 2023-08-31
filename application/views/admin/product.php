<div class="container-fluid">
  <div class="item">
    <a href="" class="additem" data-toggle="modal" data-target="#exampleModal1"><img src="<?php echo base_url('assets/admin/images/add.png') ?>" class="itemont1"></a>
    <table class="table">
      <thead class="thead-dark">
        <tr> 
          <th scope="col">SR.No</th>
          <th scope="col">Image-1</th>
          <th scope="col">Image-2</th>
          <th scope="col">Image-3</th>
          <th scope="col">Product name</th>
          <th scope="col">Product Detail</th>
          <th scope="col">Product Type</th>
          <th scope="col">Product MRP</th>
          <th scope="col">Product Discount</th>
          <th scope="col">Product Tax</th>
          <th scope="col">Product Shipping</th>
          <th scope="col">Product Status</th>
          <th style="text-align: right;">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($item_detail as $detl) { ?>
          <tr>
            <th scope="row"><?php echo $detl['p_id'] ?></th>
            <td><img src="<?php echo base_url() . $detl['p_img'] ?>" class="product"></td>
            <td><img src="<?php echo base_url() . $detl['p_img2'] ?>" class="product"></td>
            <td><img src="<?php echo base_url() . $detl['p_img3'] ?>" class="product"></td>
            <td><?php echo $detl['p_name'] ?></td>
            <td><?php echo $detl['p_details'] ?></td>
            <td><?php echo $detl['p_type'] ?></td>
            <td><?php echo $detl['p_price'] ?></td>
            <td><?php echo $detl['p_discount'] ?></td>
            <td><?php echo $detl['p_tax'] ?></td>
            <td><?php echo $detl['shipping_charge'] ?></td>
            <td><?php if ($detl['P-status'] == 1) {
                  echo 'Active';
                } ?></td>
            <td style="float: right;"><a href="<?php echo base_url('admin/product_edit/').$detl['p_id']?>"><img src="<?php echo base_url('assets/admin/images/edit.png') ?>" class="item0"></a> <a href="<?php echo base_url('admin/product_delete/') . $detl['p_id'] ?>"><img src="<?php echo base_url('assets/admin/images/delete.png') ?>" class="item0"></a></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
<!-- ADD  Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <form method="POST" action="<?php echo base_url('admin/add_product') ?>" enctype="multipart/form-data">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><img src="<?php echo base_url('assets/admin/images/product.png') ?>" class="itemont1">&nbsp;Add Product</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row pl-3">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                  <label for="sub_category">Product Type : </label>
                      <select class="form-control"  name="p_type">
                        <option value="grocery">Grocery</option>
                        <option value="stationery">Stationary</option>
                      </select>
                  <label for="category">Select Category : </label>
                      <select class="form-control" id="category" name="c_id">
                        <?php foreach ($item_category as $item) { ?>
                          <option value="<?php echo $item['c_id'] ?>"><?php echo $item['c_name'] ?></option>
                        <?php } ?>
                      </select>

                      <label for="sub_category">Select Sub-category : </label>
                      <select class="form-control" id="sub_category" name="sub_id">
                      </select>

                    <label for="exampleInputEmail1">Name :</label>
                    <input type="text" name="p_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" required>

                    <label for="exampleFormControlSelect1">HSN Code :</label>
                    <input type="text" name="p_HSN" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter HSN Code" required>

                    <label for="exampleFormControlSelect1">MRP :</label>
                    <input type="text" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter MRP" required>

                    <label for="exampleFormControlSelect1">Discount :</label>
                    <input type="text" name="discount" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Discount Percent" required>

                    <label for="exampleFormControlSelect1">Product Detail :</label>
                    <input type="text" name="detail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Detail" required>

                    <label for="exampleFormControlSelect1">Tax :</label>
                    <input type="text" name="p_tax" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Detail" required>   
                    
                    <label for="exampleFormControlSelect1">Shipping Charge :</label>
                    <input type="text" name="p_shipping" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Detail" required>   
                  
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="exampleFormControlSelect1">Select Image1 :</label>
                  <input type="file" name="img" class="form-control" id="exampleInputEmail1" required>

                  <label for="exampleFormControlSelect1">Select Image2 :</label>
                  <input type="file" name="img2" class="form-control" id="exampleInputEmail1" required>

                  <label for="exampleFormControlSelect1">Select Image3 :</label>
                  <input type="file" name="img3" class="form-control" id="exampleInputEmail1" required>

                  <label for="exampleFormControlSelect1">Select Image4 :</label>
                  <input type="file" name="img4" class="form-control" id="exampleInputEmail1" required>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn pop" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn pop">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>


<script>
  $(document).ready(function() {
    $('#category').change(function() {
      var c_id = $('#category').val();
      //alert(c_id);
      //exit;
      if (c_id != '') {
        $.ajax({
          url: "<?php echo base_url('admin/sub_category_find') ?>",
          method: 'POST',
          data: {
            c_id: c_id
          },
          success: function(data) {
            $('#sub_category').html(data);
          }
        })
      }
    });
  });
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>