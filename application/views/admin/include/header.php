<?php if (!empty($this->session->userdata('a_id'))) { ?>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Grocery Admin</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/style/style.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/style/bootstrap.min.css') ?>">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin/style/css2.css') ?>" rel="stylesheet">

    <script src="<?php echo base_url('assets/admin/js/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/admin/js/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/admin/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/admin/js/index.js') ?>"></script>

  </head>

  <body>
    <div class="page-wrapper chiller-theme toggled">
      <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
        <i class="fas fa-bars"></i>
      </a>
      <nav id="sidebar" class="sidebar-wrapper">
        <div class="sidebar-content">
          <div class="sidebar-brand">
            <a href="#">Grocery</a>
            <div id="close-sidebar">
              <i class="fas fa-times"></i>
            </div>
          </div>
          <div class="sidebar-menu">
            <ul>

              <li class="sidebar">
                <a href="<?php echo base_url('admin/index') ?>">
                  <i class="fa fa-tachometer-alt"></i>
                  <span>Dashboard</span>
                </a>

              </li>
              <li class="sidebar">
                <a href="<?php echo base_url('admin/product') ?>">
                  <i class="fas fa-shopping-cart"></i>
                  <span>Products Table</span>
                </a>

              </li>
              <li class="sidebar">
                <a href="<?php echo base_url('admin/category_list') ?>">
                  <i class="fa fa-th-large"></i>
                  <span>Categories</span>
                </a>

              </li>
              <li class="sidebar">
                <a href="<?php echo base_url('admin/sub_category_list') ?>">
                  <i class="fa fa-th-large"></i>
                  <span>Sub Categories</span>
                </a>

              </li>
              <li class="sidebar">
                <a href="<?php echo base_url('admin/order_list') ?>">
                  <i class="fa fa-list" aria-hidden="true"></i>
                  <span>Order List</span>

                </a>
              </li>
              <li class="sidebar">
                <a href="<?php echo base_url('admin/logout') ?>">
                  <i class="fa fa-file" aria-hidden="true"></i>
                  <span>Logout</span>

                </a>
              </li>
            </ul>
          </div>
          <!-- sidebar-menu  -->
        </div>
        <!-- sidebar-content  -->
        <div class="sidebar-footer">
          <a href="allshow.html">
            <p class="student" style="color:#fff; text-align: center;"> All Views</p>
          </a>
        </div>
      </nav>

      <main class="page-content">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"> <img src="<?php echo base_url('assets/admin/images/user.png') ?>" alt="" class="tech"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <h5 class="no"><?php echo $this->session->userdata('a_name')?><br></h5>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

                <a href="<?php echo base_url('admin/logout')?>"> <img src="<?php echo base_url('assets/admin/images/login.png') ?>" class="item1"></a>
              </form>
            </div>
          </nav>
        </div>
      <?php } else {
      redirect('admin/login');
    } ?>