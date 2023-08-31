<div class="container-fluid">
    <div class="item">
    <?php foreach ($edit_item as $detl) { ?>
    <form method="POST" action="<?php echo base_url('admin/product_detail_edit/').$detl['p_id'] ?>" enctype="multipart/form-data">
        <h4>Edit Product <span>/ <a href="#">Back</a></span></h4>
        <div class="row pl-3">
            <div class="col-md-12">
                    
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Select Product Type: </label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="p_type">
                                        <?php if($detl['p_type']=='grocery'){?>
                                        <option value="<?php echo $detl['p_type']?>"><?php echo $detl['p_type']?></option>
                                        <option value="stationery">Stationery</option>
                                        <?php } else{?>
                                        <option value="<?php echo $detl['p_type']?>"><?php echo $detl['p_type']?></option>
                                        <option value="grocery">grocery</option>
                                        <?php }?>
                                    </select>

                                    <label for="exampleInputEmail1">Select Category : </label>
                                    <select class="form-control" id="category"  name="p_category_id">
                                        <option value="<?php echo $detl['c_id']?>"><?php echo $detl['c_name']?></option>
                                        <?php foreach($item_category as $category){?>
                                        <option value="<?php echo $category['c_id']?>"><?php echo $category['c_name']?></option>
                                        <?php } ?>
                                    </select>

                                    <label for="exampleInputEmail1">Select Sub-Category : </label>
                                    <select class="form-control"  id="sub_category" name="s_id">
                                    <option value="<?php echo $detl['s_id']?>"><?php echo $detl['s_name']?></option>
                                    </select>

                                    <label for="exampleInputEmail1">Name :</label>
                                    <input type="text" name="p_name" class="form-control"  aria-describedby="emailHelp" value="<?php echo $detl['p_name'] ?>" required>

                                    <label for="exampleFormControlSelect1">HSN Code :</label>
                                    <input type="text" class="form-control"  aria-describedby="emailHelp">

                                    <label for="exampleFormControlSelect1">MRP :</label>
                                    <input type="text" name="price" class="form-control"  aria-describedby="emailHelp" value="<?php echo $detl['p_price'] ?>" required>

                                    <label for="exampleFormControlSelect1">Discount :</label>
                                    <input type="text" name="discount" class="form-control"  aria-describedby="emailHelp" value="<?php echo $detl['p_discount'] ?>" required>

                                    <label for="exampleFormControlSelect1">Product Detail :</label>
                                    <input type="text" name="detail" class="form-control"  aria-describedby="emailHelp" value="<?php echo $detl['p_details'] ?>" required>
 
                                    <label for="exampleFormControlSelect1">Product Tax :</label>
                                    <input type="text" name="p_tax" class="form-control"  aria-describedby="emailHelp" value="<?php echo $detl['p_tax'] ?>" required>

                                    <label for="exampleFormControlSelect1">Shipping Charge:</label>
                                    <input type="text" name="shipping" class="form-control"  aria-describedby="emailHelp" value="<?php echo $detl['shipping_charge'] ?>" required>
                                
                                  </div>
                            </div>
                            <div class="col-md-6">
                                <label for="exampleFormControlSelect1">Select Image1 :</label>
                                <img src="<?php echo base_url() . $detl['p_img'] ?>" alt="" style="height:100px; width:98px;">
                                <input type="file" name="img" class="form-control"  value="<?php echo base_url().$detl['p_img'] ?>">

                                <label for="exampleFormControlSelect1">Select Image2 :</label>
                                <img src="<?php echo base_url() . $detl['p_img2'] ?>" alt="" style="height:100px; width:98px;">
                                <input type="file" name="img2" class="form-control"  value="<?php echo $detl['p_img2'] ?>">

                                <label for="exampleFormControlSelect1">Select Image3 :</label>
                                <img src="<?php echo base_url() . $detl['p_img3'] ?>" alt="" style="height:100px; width:98px;">
                                <input type="file" name="img3" class="form-control"  value="<?php echo $detl['p_img3'] ?>">

                                <label for="exampleFormControlSelect1">Select Image4 :</label>
                                <img  src="<?php echo base_url() . $detl['p_img4'] ?>" alt="" style="height:100px; width:98px;">
                                <input type="file" name="img4" class="form-control"  value="<?php echo $detl['p_img4'] ?>">
                            </div>
                        </div>
                    
            </div>
        </div>
        <button type="cancel" class="btn pop" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn pop">Save</button>
        </form>
        <?php } ?>
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
          url: "<?php echo base_url('admin/sub_category_find_edit') ?>",
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