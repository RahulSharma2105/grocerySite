<div class="container pt-5">
  <form action="<?php echo base_url('admin/sub_category_edit/')?>" method="POST">
    <div class="card text-center crut">
      <div class="card-header tophead">
        <img src="<?php echo base_url('assets/admin/images/categories.png') ?>" class="method"> Edit Sub Category Form <br>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col">
            <label for="formGroupExampleInput">Category</label>
            <select class="form-control" name="c_id">
              <?php foreach ($item_category as $item) { ?>
                <option value="<?php echo $item['c_id']?>"><?php echo $item['c_name'] ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="col">
            <div class="form-group">
              <label for="formGroupExampleInput">Sub Category</label>
              <input type="text" class="form-control" name="sub_category_name" id="formGroupExampleInput" placeholder="Example input" required>
            </div>
          </div>
        </div>
      </div>
      <div class="card-footer text-muted">
        <button class="btn press">Submit</button>
      </div>
    </div>
  </form>
</div>
</body>

</html>