<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/style/wishlist.css">
<div class="container pt-5">
  <div class="row">
    <div class="col-lg-4">
      <div class="card mb-4">
        <div class="card-body text-center">
          <img src="<?php echo base_url('assets/img/profile_icon.png') ?>" alt="avatar" class="rounded-circle img-fluid">
          <h5 class="my-3"><?php echo $this->session->userdata('fname'); ?></h5>
          <p class="text-muted mb-1">Full Stack Developer</p>
          <p class="text-muted mb-4"><?php echo $this->session->userdata('address') ?></p>
        </div>
      </div>
      <div class="card mb-4 mb-lg-0">
        <div class="card-body p-0">
          <ul class="list-group list-group-flush rounded-3">
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
              <p class="mb-0"><b>ACCOUNT SETTINGS</b></p>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
              <i class="fa fa-user" aria-hidden="true"></i>
              <a href="<?php echo base_url('home/profile') ?>">
                <p class="mb-0">Profile Infoemation</p>
              </a>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
              <i class="fa fa-map-marker"></i>
              <a href="<?php echo base_url('home/manage_address') ?>">
                <p class="mb-0">Manage Address</p>
              </a>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
              <i class="fa fa-map-marker"></i>
              <a href="<?php echo base_url('home/myorder') ?>">
                <p class="mb-0">My Order</p>
              </a>
            </li>

          </ul>
        </div>
      </div>
    </div>
    <div class="col-lg-8">
      <section class="gradient-custom">
        <div class="container-fluid">
          <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-12 ">
              <div class="card" style="border-radius: 10px;">
                <div class="card-header px-4 py-5">
                  <h5 class="text-muted mb-0">My Wishlist, <span style="color: #4C0033;"><?php echo $this->session->userdata('fname'); ?></span> !</h5>
                </div>
                <div class="card-body p-4">
                  <?php foreach ($product_details as $details) { ?>
                    <div class="card shadow-0 border mb-4">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-2">
                            <a href="<?php echo base_url('home/detail/') . $details['p_id'] ?>"><img src="<?php echo base_url() . $details['p_img']; ?>" class="img-responsive" alt="Phone"></a>
                          </div>
                          <div class="col-md-4 text-center d-flex justify-content-center align-items-center">
                            <p class="text-muted mb-0"><?php echo $details['p_name'] ?></p>
                          </div>
                          <div class="col-md-4 text-center d-flex justify-content-center align-items-center">
                            <p class="text-muted mb-0 small"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $details['p_price'] ?></p>
                          </div>
                          <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                            <a href="<?php echo base_url('home/product_delete_wishlist/') . $details['w_id']; ?>">
                              <p class="text-muted mb-0 small"><i class="fa fa-trash" aria-hidden="true"></i></p>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
      </section>
    </div>
  </div>
</div>