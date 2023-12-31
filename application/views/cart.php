    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <style>
.product-image {
  float: left;
  width: 20%;
}

.product-details {
  float: left;
  width: 37%;
}

.product-price {
  float: left;
  width: 12%;
}

.product-quantity {
  float: left;
  width: 10%;
}

.product-removal {
  float: left;
  width: 9%;
}

.product-line-price {
  float: left;
  width: 12%;
  text-align: right;
}

/* This is used as the traditional .clearfix class */
.group:before, .shopping-cart:before, .column-labels:before, .product:before, .totals-item:before,
.group:after,
.shopping-cart:after,
.column-labels:after,
.product:after,
.totals-item:after {
  content: '';
  display: table;
}

.group:after, .shopping-cart:after, .column-labels:after, .product:after, .totals-item:after {
  clear: both;
}

.group, .shopping-cart, .column-labels, .product, .totals-item {
  zoom: 1;
}

/* Apply clearfix in a few places */
/* Apply dollar signs */
.product .product-price:before, .product .product-line-price:before, .totals-value:before {
  content: 'Rs ';
}

/* Body/Header stuff */


h1 {
  font-weight: 100;
}

label {
  color: #aaa;
}

.shopping-cart {
  margin-top: -45px;
}

/* Column headers */
.column-labels label {
  padding-bottom: 15px;
  margin-bottom: 15px;
  border-bottom: 1px solid #eee;
}
.column-labels .product-image, .column-labels .product-details, .column-labels .product-removal {
  text-indent: -9999px;
}

/* Product entries */
.product {
  margin-bottom: 20px;
  padding-bottom: 10px;
  border-bottom: 1px solid #eee;
}
.product .product-image {
  text-align: center;
}
.product .product-image img {
  width: 100px;
}
.product .product-details .product-title {
  margin-right: 20px;
  font-family: "HelveticaNeue-Medium", "Helvetica Neue Medium";
}
.product .product-details .product-description {
  margin: 5px 20px 5px 0;
  line-height: 1.4em;
}
.product .product-quantity input {
  width: 40px;
}
.product .remove-product {
  border: 0;
  padding: 4px 8px;
  background-color: #c66;
  color: #fff;
  font-family: "HelveticaNeue-Medium", "Helvetica Neue Medium";
  font-size: 12px;
  border-radius: 3px;
}
.product .remove-product:hover {
  background-color: #a44;
}

/* Totals section */
.totals .totals-item {
  float: right;
  clear: both;
  width: 100%;
  margin-bottom: 10px;
}
.totals .totals-item label {
  float: left;
  clear: both;
  width: 79%;
  text-align: right;
}
.totals .totals-item .totals-value {
  float: right;
  width: 21%;
  text-align: right;
}
.totals .totals-item-total {
  font-family: "HelveticaNeue-Medium", "Helvetica Neue Medium";
}

.checkout {
  float: right;
  border: 0;
  margin-top: 20px;
  padding: 6px 25px;
  background-color: #6b6;
  color: #fff;
  font-size: 25px;
  border-radius: 3px;
}

.checkout:hover {
  background-color: #494;
}

/* Make adjustments for tablet */
@media screen and (max-width: 650px) {
  .shopping-cart {
    margin: 0;
    padding-top: 20px;
    border-top: 1px solid #eee;
  }

  .column-labels {
    display: none;
  }

  .product-image {
    float: right;
    width: auto;
  }
  .product-image img {
    margin: 0 0 10px 10px;
  }

  .product-details {
    float: none;
    margin-bottom: 10px;
    width: auto;
  }

  .product-price {
    clear: both;
    width: 70px;
  }

  .product-quantity {
    width: 100px;
  }
  .product-quantity input {
    margin-left: 20px;
  }

  .product-quantity:before {
    content: 'x';
  }

  .product-removal {
    width: auto;
  }

  .product-line-price {
    float: right;
    width: 70px;
  }
}
/* Make more adjustments for phone */
@media screen and (max-width: 350px) {
  .product-removal {
    float: right;
  }

  .product-line-price {
    float: right;
    clear: left;
    width: auto;
    margin-top: 10px;
  }

  .product .product-line-price:before {
    content: 'Item Total: $';
  }

  .totals .totals-item label {
    width: 60%;
  }
  .totals .totals-item .totals-value {
    width: 40%;
  }
}

.main-navbar{
    border-bottom: 1px solid #ccc;
}
.main-navbar .top-navbar{
    background-color: #ffffff61;
    padding-top: 10px;
    padding-bottom: 10px;
}
.main-navbar .top-navbar .brand-name{
    color: #fff;
}
.main-navbar .top-navbar .nav-link{
    color: #524f4f;
    font-size: 16px;
    font-weight: 500;
}
.input-group{
    border:1px solid #524f4f;
}
.main-navbar .top-navbar .dropdown-menu{
    padding: 0px 0px;
    border-radius: 0px;
}
.main-navbar .top-navbar .dropdown-menu .dropdown-item{
    padding: 8px 16px;
    border-bottom: 1px solid #ccc;
    font-size: 14px;
}
.main-navbar .top-navbar .dropdown-menu .dropdown-item i{
    width: 20px;
    text-align: center;
    color: #2874f0;
    font-size: 14px;
}
.main-navbar .navbar{
    padding: 0px;
    background-color: #ffc904;
}
.main-navbar .navbar .nav-item .nav-link{
    padding: 8px 20px;
    color: #000;
    font-size: 15px;
}
.shopping{
  font-weight: bold;
    padding-top: 21px;
    padding-left: 50px;
    font-size: 35px;
}
.copy-right-sec{
  padding: 1.8rem;
    background:#ffc904;
    color: #524f4f;
    text-align: center;
    border-top: 1px solid #524f4f;
}
.copy-right-sec a{
  color: #524f4f;
    font-weight: 500;
}
a{
  text-decoration:none;
}
.footer-about p{
  color: #524f4f;
}

    </style>

    <h1 class="shopping">Shopping Cart</h1>
<div class="container">
<div class="shopping-cart">
<?php if($this->cart->total_items()>0){?>
  <div class="column-labels">
    <label class="product-image">Image</label>
    <label class="product-details">Product</label>
    <label class="product-price">Price</label>
    <label class="product-quantity">Quantity</label>
    <label class="product-removal">Remove</label>
    <label class="product-line-price">Total</label>
  </div>
<?php 
$shipping=0;
foreach($this->cart->contents() as $items){
  if($items['u_id']== $this->session->userdata('id')){
    $shipping=$shipping+$items['shipping'];
    ?>
  <div class="product">
    <div class="product-image">
      <a href="<?php echo base_url('home/detail/'.$items['id'])?>"><img  src="<?php echo base_url().$items['image']?>"></a>
    </div>
    <div class="product-details">
      <div class="product-title"><?php echo $items['name']?></div>
      <p class="product-description"><?php echo $items['details']?></p>
    </div>
    <div class="product-price"><?php echo $items['price']?></div>
    <div class="product-quantity">
      <input type="number" value="<?php echo $items['qty']?>" min="1"  onchange="updateQuantity(this, '<?php echo $items["rowid"]; ?>')">
    </div>
    <div class="product-removal">
        <a class="btn btn-danger" href="<?php echo base_url('home/cart_item_remove/'.$items['rowid'])?>">Remove</a>
        
    </div>
    <div class="product-line-price"><?php echo $items['subtotal']?></div>
  </div>
<?php } } ?>
  <div class="totals">
    <div class="totals-item">
      <label>Subtotal</label>
      <div class="totals-value" id="cart-subtotal"><?php echo $this->cart->total();?></div>
    </div>
    <div class="totals-item">
      <label>Shipping</label>
      <div class="totals-value" id="cart-shipping"  value="<?php echo $shipping;?>"><?php echo $shipping;?></div>
    </div>
    <div class="totals-item totals-item-total">
      <label>Grand Total</label>
      <div class="totals-value" id="cart-total" ><?php echo ($this->cart->total())+$shipping;?></div>
    </div>
    <a class="checkout"  href="<?php echo base_url('home/checkout')?>">Checkout</a>
  </div>
</div>
</div>
<?php } else{ ?>
</div>
  <div class="footer">
  <center><img src="<?php echo base_url('assets/img/empty-cart.png')?>" class="center"></center>
  <?php } ?>
</div>
</div>

<section id="copy-right" style="padding-top:65px;";>
      <div class="copy-right-sec"><i class="fa-solid fa-copyright"></i>  
        Developed By Rahul Sharma
      </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
// Update item quantity
function updateQuantity(obj, rowid){
    $.get("<?php echo base_url('home/qtyUpdate/'); ?>", {rowid:rowid, qty:obj.value}, function(resp){
        if(resp == 'ok'){
            location.reload();
        }else{
            alert('Error');
        }
    });
}
</script>
