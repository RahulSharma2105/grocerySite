
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ecommerce</title>

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/index.js"></script>

  <style>
    .img-fluid {
      height: 80px;
      width: auto;
      padding-left: 40px;
    }
    .btn-search {
    background: #ffc904 !important;
}
.input-group{
    border:none !important;
}
.navbar-toggler-icon{
  background-image: url(https://cdn-icons-png.flaticon.com/128/6995/6995971.png) !important;
}
@media only screen and (max-width: 600px) {
    .main-navbar .top-navbar .nav-link{
        font-size: 12px;
        padding: 8px 10px;
    }
        .img-fluid {
          height: 38px !important;
          width: auto;
          padding-left: 40px;
        }
}
  </style>
</head>

<body>

  <div class="main-navbar shadow-sm sticky-top">
    <div class="top-navbar">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2 my-auto d-none d-sm-none d-md-block d-lg-block">
            <a href="<?php echo base_url('home/index'); ?>"><img src="<?php echo base_url('assets/img/logo.png') ?>" class="img-fluid"></a>
          </div>
          <div class="col-md-5 my-auto">
            <form role="search"  action="<?php echo base_url('home/search_bar')?>" method="POST">
              <div class="input-group">
                <input type="search" placeholder="Search your product" name="product" class="form-control" />
                <button class="btn btn-search" type="submit">
                  <i class="fa fa-search"></i>
                </button>
              </div>
            </form>
          </div>
          <div class="col-md-5 my-auto">
            <ul class="nav justify-content-end">
              <li class="nav-item">
                <?php
                $sess = $this->session->userdata('fname'); ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-user-circle"></i>
                  Hi,
                  <?php if($this->session->userdata('id')){
                    echo $sess;
                  }else{
                    echo 'USER';
                  }
                  ?>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <?php if ($this->session->userdata('id')) { ?>
                    <li><a class="dropdown-item" href="<?php echo base_url('home/profile'); ?>"><i class="fa fa-user-circle"></i> Profile</a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url('home/myorder') ?>"><i class="fa fa-list"></i> My Orders</a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url('home/cart') ?>"><i class="fa fa-shopping-cart"></i> My Cart</a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url('home/wishlist') ?>"><i class="fa fa-heart" aria-hidden="true"></i> My Wishlist</a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url('home/logout') ?>"><i class="fa fa-sign-out"></i> Logout</a></li>
                  <?php } else { ?>
                    <li><a class="dropdown-item" href="<?php echo base_url('home/login'); ?>"><i class="fa fa-sign-in"></i>Login</a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url('home/login') ?>"><i class="fa fa-shopping-cart"></i> My Cart</a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url('home/login') ?>"><i class="fa fa-heart" aria-hidden="true"></i> My Wishlist</a></li>
                  <?php } ?>
                </ul>
              </li>
              </li>
              <li class="nav-item">
                <?php if ($this->session->userdata('id')) { ?>
                  <a class="nav-link" href="<?php echo base_url('home/cart') ?>">
                    <i class="fa fa-shopping-cart"></i> Cart (<?php echo $this->cart->total_items();?>)
                  </a>
                <?php } else { ?>

                  <a class="nav-link" href="<?php echo base_url('home/login') ?>">
                    <i class="fa fa-shopping-cart"></i> Cart (0)
                  </a>
                <?php } ?>
              </li>
              <li class="nav-item">
                <?php if ($this->session->userdata('id')) { ?>
                  <a class="nav-link" href="<?php echo base_url('home/myorder') ?>">
                    <i class="fa fa-list"></i> My Orders
                  </a>
                <?php } else { ?>
                  <a class="nav-link" href="<?php echo base_url('home/login') ?>">
                    <i class="fa fa-list"></i> My Orders
                  </a>
                <?php } ?>
              </li>
              <li class="nav-item">
                <?php if ($this->session->userdata('id')) { ?>
                  <a href="<?php echo base_url('home/logout') ?>" class="nav-link">
                    <i class="fa fa-sign-out"></i> Logout
                  </a>
                <?php } else { ?>
                  <a href="<?php echo base_url('home/login') ?>" class="nav-link">
                    <i class="fa fa-sign-out"></i> Login
                  </a>
                <?php } ?>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand d-block d-sm-block d-md-none d-lg-none" href="<?php echo base_url('home/index'); ?>"><img src="<?php echo base_url('assets/img/logo.png') ?>" class="img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">  <img src="<?php //echo base_url('assets/img/menus.png')?>" alt=""> </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <?php foreach ($category as $cat_item) {  ?>
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                  <?php echo  $cat_item['c_name'] ?>
                </a>
                <div class="dropdown-menu">
                  <?php  foreach ($item as $pro) {
                    if ($cat_item['c_name'] == $pro['c_name']) { ?>
                      <a class="dropdown-item dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false"><?php echo $pro['s_name'] ?></a>
                      <div class="dropdown-menu dropdown-submenu">
                        <a class="dropdown-item" href="<?php echo base_url('home/detail/'.$pro['p_id']) ?>"><?php echo $pro['p_name'] ?></a>
                      </div>
                  <?php }
                  } ?>
              </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </nav>
  </div>