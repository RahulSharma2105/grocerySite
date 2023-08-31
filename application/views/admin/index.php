
<?php if (!empty($this->session->userdata('a_id'))) { ?>

      <div class="container-fluid">
        <center><img src="<?php echo base_url('assets/admin/images/shopping.png')?>" class="img-fluid font"></center>
      </div>
<?php } else { redirect('admin/login');
    }?>