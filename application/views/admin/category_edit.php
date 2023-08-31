
<div class="container pt-5">
<?php foreach($item as $item){?>
        <form action="<?php echo base_url('admin/category_update/'.$item['c_id'])?>" method="POST">
        <div class="card text-center crut">
          <div class="card-header tophead">
            <img src="<?php echo base_url('assets/admin/images/categories.png')?>" class="method"> Edit Category Form <br>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="formGroupExampleInput">Product Type</label>
              
              <input type="text" class="form-control" name="category_name" id="formGroupExampleInput" value="<?php echo $item['c_name']?>" required>
            </div>
          </div>
          <div class="card-footer text-muted">
            <button class="btn press">Submit</button>
          </div>
        </div>
        </form>
        <?php }?>
      </div>
</body>

</html>