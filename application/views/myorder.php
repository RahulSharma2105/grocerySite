<?php //echo '<pre>'; print_r($order_detail); die;?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
  rel="stylesheet"
/>

<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"
></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style/profile.css')?>">

  <style>
    .myproduct{
      width:100%;
    }
    .fa-pencil-square-o{
      float: right;
    padding-top: 10px;
    padding-right: 6px;
    font-size: 20px;
    }
    .btn-floating{
      float: right;
    }
    .cradit{
        border: 2px solid rgb(73, 131, 255);
        padding: 8px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 15px;
    }
    .address , span{
      font-size: 12px;
    font-weight: 500;
    }
    form{
  padding:10px;
  border-radius:15px;
  display:none;
    }
  .dropstart{
    float: right;
    position: relative;
    top: -28px;
    cursor: pointer;
    font-size: 20px;
  }
  .dropstart .dropdown-toggle:before{
    display: none !important;
  }
  .fa-ellipsis-v{
    font-size: 15px;
    color: #555;
  }
  .requested{
      font-size: 12px;
      color: rgb(176, 176, 176);
  }
  .cancel{
    height: 10px;
    width: 10px;
    border-radius: 50%;
    display: inline-block;
    margin-right: 8px;
  }
  .cancelon{
    background-color: #ff6161;
    border: 2px solid #ff6161;
  }
  .cancelon1{
    background-color: #13aa0b;
    border: 2px solid #13aa0b;
  }
  </style>
</head>
<body>
<section>
    <div class="container py-5">
        <div class="row">
          <div class="col">
            <nav aria-label="breadcrumb" class="rounded-3 p-3 mb-4">
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="<?php echo base_url('home/index')?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><b>User Profile</b></li>
              </ol>
            </nav>
          </div>
        </div>
    
        <div class="row">
          <div class="col-lg-4">
            <div class="card mb-4">
              <div class="card-body text-center">
              <img src="<?php echo base_url('assets/img/profile_icon.png')?>" alt="avatar"
                  class="rounded-circle img-fluid">
                <h5 class="my-3">Rajkumar Laha</h5>
                <p class="text-muted mb-1">Full Stack Developer</p>
                <p class="text-muted mb-4">Bay Area, Burdwan</p>
               
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
               <a href="<?php echo base_url('home/profile')?>"><p class="mb-0">Profile Infoemation</p></a>
                
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fa fa-map-marker"></i>
               <a href="<?php echo base_url('home/manage_address')?>"><p class="mb-0">Manage Address</p></a> 
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fa fa-map-marker"></i>
               <a href="<?php echo base_url('home/myorder')?>"><p class="mb-0">My Order</p></a> 
              </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
          <?php foreach($order_detail as $detl){?>
            <div class="card c1 mb-2">
              <div class="card-body">
                    <div class="address">
                        <div class="row">
                           <div class="col-md-1">
                             <img src="<?php echo base_url().$detl['p_img']?>" alt="" class="myproduct">
                           </div>
                           <div class="col-md-5">
                            <span><?php echo $detl['p_name']?></span> <br>
                            <span class="requested">Quantity: <?php echo $detl['quantity']?></span> 
                           </div>
                           <div class="col-md-2">
                              <span>₹<?php echo $detl['sub_total']?></span>
                           </div>
                           <div class="col-md-4">
                            <div class="cancel cancelon"></div> <span>Cancelled on Tue Aug 22</span><br>
                            <span class="requested">You requested a cancellation because you changed your mind about this product.</span>
                         </div> 
                        </div>
                  </div>
                  </div>
                  </div>
                  <?php } ?>
                  <div class="card c1 mb-2">
                    <div class="card-body">
                  <div class="address">
                    <div class="row">
                       <div class="col-md-1">
                         <img src="https://rukminim2.flixcart.com/image/l5bd5zk0/track-pant/m/5/s/l-bijali-32-34-moonvelly-original-imaggyndzbz8beg3.jpeg" alt="" class="img-fluid">
                       </div>
                       <div class="col-md-5">
                        <span>MOONVELLY Solid Men Multicolor Track Pan...</span> <br>
                        <span class="requested">Color: Grey</span> 
                       </div>
                       <div class="col-md-2">
                          <span>₹21,490</span>
                       </div>
                       <div class="col-md-4">
                        <div class="cancel cancelon1"></div> <span>Delivered on May 14</span><br>
                        <span class="requested">Your item has been delivered</span>
                     </div> 
                    </div>
              </div>
                  </div>
            </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#formButton").click(function(){
        $("#form1").toggle();
    });
});

$(document).ready(function(){
    $("#formButton1").click(function(){
        $("#form2").toggle();
    });
});
</script>
</body>
</html>