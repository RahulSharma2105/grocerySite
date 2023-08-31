<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://i.pinimg.com/originals/76/e9/23/76e9238fca30a0fc41b6f5fac75b516b.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://i.pinimg.com/originals/76/e9/23/76e9238fca30a0fc41b6f5fac75b516b.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://i.pinimg.com/originals/76/e9/23/76e9238fca30a0fc41b6f5fac75b516b.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/style/index.css">

<div class="container pt-4">
  <h4 class="featured">Featured</h4>
  <h1 class="product">Products</h1>
  <div class="animation mt-3"></div>
</div>

<div class="bbb_viewed">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="bbb_main_container">
          <div class="bbb_viewed_title_container">
            <div class="bbb_viewed_nav_container">
              <div class="bbb_viewed_nav bbb_viewed_prev"><i class="fas fa-chevron-left"></i></div>
              <div class="bbb_viewed_nav bbb_viewed_next"><i class="fas fa-chevron-right"></i></div>
            </div>
          </div>
          <div class="bbb_viewed_slider_container">
            <div class="owl-carousel owl-theme bbb_viewed_slider">
              <?php foreach ($product_details as $dtls) : ?>
                <div class="owl-item">
                  <a href="<?php echo base_url('home/detail/') . $dtls['p_id']; ?>">
                  <div class="slide">
                    <div class="content">
                      <img src="<?php echo base_url().$dtls['p_img'] ?>" class="product_images">
                      <h3 class="pro"><?php echo $dtls['p_name'] ?></h3>
                      <p class="pro1"><?php echo $dtls['p_details']?></p>
                      <?php $old_price=$dtls['p_price'];
                        $new_price=$old_price - (($old_price * $dtls['p_discount'])/100) 
                      ?>
                      <h6 class="pro2"><del>Rs <?php echo $dtls['p_price'] ?></del> Rs: <?php echo $new_price;?></h6>
                      <ul class="shoes">
                        <li class="jko"><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li class="jko"><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li class="jko"><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li class="jko"><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li class="jko"><i class="fa fa-star" aria-hidden="true"></i></li>
                      </ul>
                      <button class="buy-1">Add to Cart <i class="fa fa-shopping-cart"></i></button>
                    </div>
                  </div>
              </a>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="middle p-1 mt-3">
  <div class="wrapper">
    <div class="product-img">
      <img src="http://bit.ly/2tMBBTd" height="420" width="327">
    </div>
    <div class="product-info">
      <div class="product-text">
        <h1>Harvest Vase <span class="new"> NEW</span></h1>
        <h2>by studio and friends</h2>
        <p>Harvest Vases are a reinterpretation<br> of peeled fruits and vegetables as<br> functional objects. The surfaces<br> appear to be sliced and pulled aside,<br> allowing room for growth. </p>
      </div>
      <div class="product-price-btn">
        <p class="rs"><b><del>Rs4000.00 </del> Rs.3000</p></b><br>
        <button type="button">buy now </button>
      </div>
    </div>
  </div>
</div>

<div class="container pt-4">
  <h4 class="featured">Grocery</h4>
  <h1 class="product">Products</h1>
  <div class="animation mt-3"></div>
</div>

<div class="bbb_viewed">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="bbb_main_container">
          <div class="bbb_viewed_title_container">
            <div class="bbb_viewed_nav_container">
              <div class="bbb_viewed_nav bbb_viewed_prev"><i class="fas fa-chevron-left"></i></div>
              <div class="bbb_viewed_nav bbb_viewed_next"><i class="fas fa-chevron-right"></i></div>
            </div>
          </div>
          <div class="bbb_viewed_slider_container">
            <div class="owl-carousel owl-theme bbb_viewed_slider">
              <?php foreach ($product_details as $detls) {
                if ($detls['p_type'] == 'grocery') { ?>
                  <div class="owl-item">
                    <div class="slide">
                      <div class="content">
                        <img src="<?php echo base_url().$detls['p_img'] ?>" class="product_images">
                        <h3 class="pro"><?php echo $detls['p_name'] ?></h3>
                        <p class="pro1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <?php $old_price=$dtls['p_price'];
                  $new_price=$old_price - (($old_price * $dtls['p_discount'])/100) 
                ?>
                        <h6 class="pro2"><del>Rs <?php echo $dtls['p_price'] ?></del> Rs: <?php echo $new_price;?></h6>
                        <ul class="shoes">
                          <li class="jko"><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li class="jko"><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li class="jko"><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li class="jko"><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li class="jko"><i class="fa fa-star" aria-hidden="true"></i></li>
                        </ul>
                        <a href="<?php echo base_url('home/detail/').$detls['p_id']; ?>"><button class="buy-1">Add to Cart <i class="fa fa-shopping-cart"></i></button></a>
                      </div>
                    </div>
                  </div>
              <?php }
              } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container pt-4">
  <h4 class="featured">Stationery</h4>
  <h1 class="product">Products</h1>
  <div class="animation mt-3"></div>
</div>
<div class="bb_viewed">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="bb_main_container">
          <div class="bb_viewed_title_container">
            <div class="bb_viewed_nav_container">
              <div class="bb_viewed_nav bb_viewed_prev"><i class="fas fa-chevron-left"></i></div>
              <div class="bb_viewed_nav bb_viewed_next"><i class="fas fa-chevron-right"></i></div>
            </div>
          </div>
          <div class="bb_viewed_slider_container">
            <div class="owl-carousel owl-theme bb_viewed_slider">
              <?php foreach ($product_details as $detls) {
                if ($detls['p_type'] == 'stationery') { ?>
                  <div class="owl-item">
                    <div class="slide">
                      <div class="content">
                        <img src="<?php echo base_url().$detls['p_img'] ?>" class="product_images">
                        <h3 class="pro"><?php echo $detls['p_name'] ?></h3>
                        <p class="pro1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <?php $old_price=$dtls['p_price'];
                  $new_price=$old_price - (($old_price * $dtls['p_discount'])/100) 
             ?>
                        <h6 class="pro2"><del>Rs <?php echo $dtls['p_price']?></del> Rs: <?php echo $new_price;?></h6>
                        <ul class="shoes">
                          <li class="jko"><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li class="jko"><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li class="jko"><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li class="jko"><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li class="jko"><i class="fa fa-star" aria-hidden="true"></i></li>
                        </ul>
                        <a href="<?php echo base_url('home/detail/') . $detls['p_id']; ?>"><button class="buy-1">Add to Cart <i class="fa fa-shopping-cart"></i></button></a>
                      </div>
                    </div>
                  </div>
              <?php }
              } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <a href="index.html"><img src="file:///C:/Users/user/Downloads/attachment_109048124-removebg-preview.png" alt=""
            class="img-fluid logo-footer"></a>
        <div class="footer-about">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, </p>
        </div>

      </div>
      <div class="col-md-3">
        <div class="useful-link">
          <h2>Useful Links</h2>
          <img src="./assets/images/about/home_line.png" alt="" class="img-fluid">
          <div class="use-links">
            <li><a href="<?php echo base_url('home/index')?>"><i class="fa-solid fa-angles-right"></i> Home</a></li>
            <li><a href="about.html"><i class="fa-solid fa-angles-right"></i> About Us</a></li>
            <li><a href="gallery.html"><i class="fa-solid fa-angles-right"></i> Gallery</a></li>
            <li><a href="contact.html"><i class="fa-solid fa-angles-right"></i> Contact</a></li>
          </div>
        </div>

      </div>
      <div class="col-md-3">
        <div class="social-links">
          <h2>Follow Us</h2>
          <img src="./assets/images/about/home_line.png" alt="">
          <div class="social-icons">
            <li><a href=""><i class="fa-brands fa-facebook-f"></i> Facebook</a></li>
            <li><a href=""><i class="fa-brands fa-instagram"></i> Instagram</a></li>
            <li><a href=""><i class="fa-brands fa-linkedin-in"></i> Linkedin</a></li>
          </div>
        </div>


      </div>
      <div class="col-md-3">
        <div class="address">
          <h2>Address</h2>
          <img src="./assets/images/about/home_line.png" alt="" class="img-fluid">
          <div class="address-links">
            <li class="address1"><i class="fa-solid fa-location-dot"></i> Burdwan/Katapukur/Near GT-Road/
              713148</li>
            <li><a href=""><i class="fa-solid fa-phone"></i> +91 5445455214</a></li>
            <li><a href=""><i class="fa-solid fa-envelope"></i> mail@1234567.com</a></li>
          </div>
        </div>
      </div>

    </div>
  </div>

</footer>