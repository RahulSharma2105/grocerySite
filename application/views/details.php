<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/style/details.css">
<div class="container-fluid pt-5">
  <div class="card-wrapper">
    <div class="card">
      <!-- card left -->
      <?php foreach ($product_details as $detl) { ?>
        <div class="product-imgs">
          <div class="img-display">
            <div class="img-showcase">
              <img src="<?php echo base_url().$detl['p_img'] ?>" alt="shoe image">
              <img src="<?php echo base_url().$detl['p_img2'] ?>" alt="shoe image">
              <img src="<?php echo base_url().$detl['p_img3'] ?>" alt="shoe image">
              <img src="<?php echo base_url().$detl['p_img4'] ?>" alt="shoe image">
            </div>
          </div>
          <div class="img-select">
            <div class="img-item">
              <a href="#" data-id="1">
                <img src="<?php echo base_url().$detl['p_img'] ?>" alt="shoe image">
              </a>
            </div>
            <div class="img-item">
              <a href="#" data-id="2">
                <img src="<?php echo base_url().$detl['p_img2'] ?>" alt="shoe image">
              </a>
            </div>
            <div class="img-item">
              <a href="#" data-id="3">
                <img src="<?php echo base_url().$detl['p_img3'] ?>" alt="shoe image">
              </a>
            </div>
            <div class="img-item">
              <a href="#" data-id="4">
                <img src="<?php echo base_url().$detl['p_img4'] ?>" alt="shoe image">
              </a>
            </div>
          </div>
        </div>
        <!-- card right -->
        <div class="product-content">
          <h2 class="product-title pt-5"><?php echo $detl['p_name'] ?></h2>
          <a href="#" class="product-link">Haribanso</a>

          <div class="product-price">
            <p class="last-price">Old Price: <span><?php echo $detl['p_price'] ?></span></p>
            <?php $old_price=$detl['p_price'];
                  $new_price=$old_price - (($old_price * $detl['p_discount'])/100) 
             ?>
            <p class="new-price">New Price: <b><?php echo $new_price;?></b><span>  (<?php echo $detl['p_discount']?> %)</span></p>
          </div>

          <div class="product-detail">
            <h2>about this item:
            <p><?php echo $detl['p_details']?></p>
            <ul>
              <li>Color: <span>Black</span></li>
              <li>Available: <span>in stock</span></li>
              <li>Category: <span>Shoes</span></li>
              <li>Shipping Area: <span>All over the world</span></li>
              <li>Shipping Fee: <span><?php if($detl['shipping_charge']==0){
                echo 'Free'; } else {
              } echo $detl['shipping_charge']?></span></li>
            </ul>
          </div>

          <div class="purchase-info">
            <?php if ($this->session->userdata('id')) { ?>
              <a href="<?php echo base_url('home/cart')?>"><button type="button"  class="btn" onclick="javascript:cart_add(<?php echo $detl['p_id'];?>)" >
                  Add to Cart <i class="fa fa-shopping-cart"></i>
                </button></a>
              <a href="<?php echo base_url('home/wishlist')?>"><button type="button" class="btn wish"  onclick="javascript:wish_add(<?php echo $detl['p_id'];?>)">
                  Add to Wishlist <i class="fa fa-heart" aria-hidden="true"></i>
                </button></a>
            <?php } else { ?>
              <a href="<?php echo base_url('home/login') ?>"><button type="button" class="btn">
                  Add to Cart <i class="fa fa-shopping-cart"></i>
                </button></a>
              <a href="<?php echo base_url('home/login') ?>"><button type="button" class="btn wish">
                  Add to Wishlist <i class="fa fa-heart" aria-hidden="true"></i>
                </button></a>
            <?php } ?>
          </div>
            <input type="hidden" name="product_id" class="products_id<?php echo $detl['p_id'];?>" value="<?php echo $detl['p_id']; ?>" >
            <input type="hidden" name="product_name" class="products_name<?php echo $detl['p_id'];?>" value="<?php echo $detl['p_name']; ?>" >
            <input type="hidden" name="product_price" class="products_price<?php echo $detl['p_id'];?>" value="<?php echo $new_price ?>" >
            <input type="hidden" name="product_img" class="products_img<?php echo $detl['p_id'];?>" value="<?php echo $detl['p_img']; ?>" >
            <input type="hidden" name="product_details" class="products_details<?php echo $detl['p_id'];?>" value="<?php echo $detl['p_details']; ?>" >
            <input type="hidden" name="product_shipping" class="products_shipping<?php echo $detl['p_id'];?>" value="<?php echo $detl['shipping_charge']; ?>" >
        </div>
      <?php } ?>
    </div>
  </div>
</div>
<!-- Related Product -->
<div class="container mt-4">
  <h4 class="featured">Related</h4>
  <h1 class="product">Products</h1>
  <div class="animation mt-3"></div>
</div>

<div id="container">
  <div id="slider-container">
    <span onclick="slideLeft()" class="btn"></span>
    <div id="slider">
      <?php foreach($full_product as $detail){?>
      <div class="slide">
        <?php if($detail['p_sub_category_id']==$detl['p_sub_category_id']){?>
        <div class="content">
          <img src="<?php echo base_url().$detail['p_img']?>" class="product_images">
          <h3 class="pro"><?php echo $detail['p_name']?></h3>
          <p class="pro1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          <h6 class="pro2"><del>Rs360.00 </del> Rs200.00</h6>
          <ul class="shoes">
            <li class="jko"><i class="fa fa-star" aria-hidden="true"></i></li>
            <li class="jko"><i class="fa fa-star" aria-hidden="true"></i></li>
            <li class="jko"><i class="fa fa-star" aria-hidden="true"></i></li>
            <li class="jko"><i class="fa fa-star" aria-hidden="true"></i></li>
            <li class="jko"><i class="fa fa-star" aria-hidden="true"></i></li>
          </ul>
          <a href="<?php echo base_url('home/detail/') .$detail['p_id']; ?>"><button class="buy-1">Add to Cart <i class="fa fa-shopping-cart"></i></button></a>
        </div>
        <?php } ?>
      </div>
      <?php } ?>
    </div>
    <span onclick="slideRight()" class="btn"></span>
  </div>
</div>

<script type="text/javascript">
  const imgs = document.querySelectorAll('.img-select a');
  const imgBtns = [...imgs];
  let imgId = 1;

  imgBtns.forEach((imgItem) => {
    imgItem.addEventListener('click', (event) => {
      event.preventDefault();
      imgId = imgItem.dataset.id;
      slideImage();
    });
  });

  function slideImage() {
    const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

    document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
  }

  window.addEventListener('resize', slideImage);


  var container = document.getElementById('container');
  var slider = document.getElementById('slider');
  var slides = document.getElementsByClassName('slide').length;
  var buttons = document.getElementsByClassName('btn');

  var currentPosition = 0;
  var currentMargin = 0;
  var slidesPerPage = 0;
  var slidesCount = slides - slidesPerPage;
  var containerWidth = container.offsetWidth;
  var prevKeyActive = false;
  var nextKeyActive = true;

  window.addEventListener("resize", checkWidth);

  function checkWidth() {
    containerWidth = container.offsetWidth;
    setParams(containerWidth);
  }

  function setParams(w) {
    if (w < 551) {
      slidesPerPage = 1;
    } else {
      if (w < 901) {
        slidesPerPage = 2;
      } else {
        if (w < 1101) {
          slidesPerPage = 3;
        } else {
          slidesPerPage = 4;
        }
      }
    }
    slidesCount = slides - slidesPerPage;
    if (currentPosition > slidesCount) {
      currentPosition -= slidesPerPage;
    };
    currentMargin = -currentPosition * (100 / slidesPerPage);
    slider.style.marginLeft = currentMargin + '%';
    if (currentPosition > 0) {
      buttons[0].classList.remove('inactive');
    }
    if (currentPosition < slidesCount) {
      buttons[1].classList.remove('inactive');
    }
    if (currentPosition >= slidesCount) {
      buttons[1].classList.add('inactive');
    }
  }

  setParams();

  function slideRight() {
    if (currentPosition != 0) {
      slider.style.marginLeft = currentMargin + (100 / slidesPerPage) + '%';
      currentMargin += (100 / slidesPerPage);
      currentPosition--;
    };
    if (currentPosition === 0) {
      buttons[0].classList.add('inactive');
    }
    if (currentPosition < slidesCount) {
      buttons[1].classList.remove('inactive');
    }
  };

  function slideLeft() {
    if (currentPosition != slidesCount) {
      slider.style.marginLeft = currentMargin - (100 / slidesPerPage) + '%';
      currentMargin -= (100 / slidesPerPage);
      currentPosition++;
    };
    if (currentPosition == slidesCount) {
      buttons[1].classList.add('inactive');
    }
    if (currentPosition > 0) {
      buttons[0].classList.remove('inactive');
    }
  };
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
          
  function wish_add(p_id){
            var id=$('.products_id'+p_id).val();
            var names=$('.products_name'+p_id).val();
            var name=names.replace(/[^a-zA-Z0-9 ]/g, '');
            var img=$('.products_img'+p_id).val();
            var price=$('.products_price'+p_id).val();
            //alert(id+'----'+name+"-------"+img+'---------'+price);
            $.ajax({
              type:"POST",
              url:"<?php echo base_url('home/wishlist_add')?>",
              data:{
                id:id,
                name:name,
                image:img,
                price:price
              },
              success:function(response){
                alert("Add to Wishlist")
              }

            });

        }
        function cart_add(p_id){
            var id=$('.products_id'+p_id).val();
            var names=$('.products_name'+p_id).val();
            var name=names.replace(/[^a-zA-Z0-9 ]/g, '');
            var price=$('.products_price'+p_id).val();
            var img=$('.products_img'+p_id).val();
            var details=$('.products_details'+p_id).val();
            var shipping=$('.products_shipping'+p_id).val();
            //alert(id+'----'+name+"-------"+img+'---------'+price+'//////'+details);
            $.ajax({
              type:"POST",
              url:"<?php echo base_url('home/cart_data')?>",
              data:{
                id:id,
                name:name,
                price:price,
                image:img,
                details:details,
                shipping:shipping
              },
              success:function(response){
                //alert("Add to Cart")
              }

            });

        }
</script>
