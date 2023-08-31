
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/style/cart.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<header id="site-header">
  <div class="container for1">
    <h1>Shopping cart <span>[</span> <em><a href="<?php echo base_url('home/index') ?>" target="_blank"> Go To Home Page</a></em> <span class="last-span is-open">]</span></h1>
  </div>
</header>

<div class="container for">
  <section id="cart">
    <?php 
    $ntotal=0;
    foreach ($cart_details as $detl) { 
      $ntotal=$ntotal+$detl['p_price'];
      ?>
      <article class="product">
        <header>
          <a href="<?php echo base_url('home/cart_product_delete/').$detl['cart_id']?>" class="remove">
            <img src="<?php echo base_url().$detl['p_img']?>" alt="">

            <h3>Remove product</h3>
          </a>
        </header>
        <div class="content">
          <h1><b><?php echo $detl['p_name']?></b></h1>
          <p style="color: #7a797a;"><b>Delivery within 7 days (7 Days Replacement Policy)</b></p>
          <p><b>Sold By Grocery</b> <span class="fee"> Shipping Fee: 00 </span></p>
        </div>
        <footer class="content">
          <span class="qt-minus">-</span>
          <span class="qt"><?php echo $detl['p_quantity']?></span>
          <span class="qt-plus">+</span>
          <h2 class="full-price">
            <i class="fa fa-inr" aria-hidden="true"></i><?php echo $detl['p_price']?>
          </h2>
          <h2 class="price">
          <?php echo $detl['p_price']?> <i class="fa fa-inr" aria-hidden="true"></i>
          </h2>
        </footer>
      </article>
    <?php } ?>
  </section>

</div>

<footer id="site-footer">
  <div class="container clearfix">

    <div class="left">
      <h2 class="subtotal">Subtotal: <span><?php echo $ntotal; ?></span><i class="fa fa-inr" aria-hidden="true"></i></h2>
      <h3 class="tax">Taxes (5%): <span>8.2</span><i class="fa fa-inr" aria-hidden="true"></i></h3>
      <h3 class="shipping">Shipping: <span>5.00</span><i class="fa fa-inr" aria-hidden="true"></i></h3>
    </div>

    <div class="right">
      <h1 class="total">Total: <span> </span><i class="fa fa-inr" aria-hidden="true"></i></h1>
      <a class="btn1" href="<?php echo base_url('home/checkout') ?>">Checkout</a>
    </div>
  </div>
</footer>
</div>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/cart.js"></script>