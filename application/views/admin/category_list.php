<div class="container-fluid">
  <div class="item">
   <a href="<?php echo base_url('admin/category')?>" class="additem"><img src="<?php echo base_url('assets/admin/images/add.png')?>" class="itemont1"></a>
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">SR.No</th>
      <th scope="col">Categories ID</th>
      <th scope="col">Categories Name</th>
      <th style="text-align: right;">Action</th>
    </tr>
  </thead>
  <tbody>
    
    <?php $i=0; foreach($category_list as $list){ $i++?>
    <tr>
        <td><?php echo $i;?></td>
      <td><?php echo $list['c_id']?></td>
      <td><?php echo $list['c_name']?></td>
      <td style="float: right;"><a href="<?php echo base_url('admin/edit_category/'.$list['c_id'])?>"><img src="<?php echo base_url('assets/admin/images/edit.png')?>"class="item0"></a> <a href="<?php echo base_url('admin/category_delete/'.$list['c_id'])?>"><img src="<?php echo base_url('assets/admin/images/delete.png')?>" class="item0"></a>
    </tr>
    <?php }?>
  </tbody>
</table>
</div>
</div>