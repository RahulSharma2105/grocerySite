<div class="container-fluid">
  <div class="item">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Order Id</th>
          <th scope="col">Customer Name</th>
          <th scope="col">Product</th>
          <th scope="col">Customer Number</th>
          <th scope="col">Customer Address</th>
          <th scope="col">Payment Mode</th>
          <th scope="col">Quantity</th>
          <th scope="col">Grand Total</th>
          <th scope="col">Placed On</th>
          <th style="text-align: right;">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($order as $data){?>
        <tr>
          
          <th scope="row"><?php echo $data['order_item_id']?></th>
          <td><?php echo $data['name']?></td>
          <td><?php echo $data['p_name']?></td>
          <td><?php echo $data['mobile']?>
           <?php echo $data['a_number']?></td>
            <td><?php echo $data['address']?>,
              <?php echo $data['locality']?>,
              <?php echo $data['landmark']?>,
              <?php echo $data['city']?>,
              <?php echo $data['state']?>,
            <?php echo $data['pin']?></td>
          <td><?php echo $data['pay_type']?></td>
          <td><?php echo $data['quantity']?></td> 
          <td><?php echo $data['sub_total']?></td>
          <td><?php echo $data['pay_date_time']?></td>          
          <td style="float: right;"><a href="#"><img src="<?php echo base_url('assets/admin/images/delete.png')?>" class="item0"></a>
        </tr>
        <?php  } ?>
      </tbody>
    </table>
  </div>
</div>