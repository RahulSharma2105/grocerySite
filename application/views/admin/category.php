<div class="container pt-5">
  <form action="<?php echo base_url('admin/add_category') ?>" method="POST">
    <div class="card text-center crut">
      <div class="card-header tophead">
        <img src="<?php echo base_url('assets/admin/images/categories.png') ?>" class="method"> Add Category Form <br>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="formGroupExampleInput">Product Type</label>
          <input type="text" class="form-control" name="category_name" id="formGroupExampleInput" placeholder="Category Name" required>
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