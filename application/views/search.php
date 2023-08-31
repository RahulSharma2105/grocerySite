<?php //echo '<pre>'; print_r($search); die;?>
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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style/index.css')?>">

  <style>
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
    <?php foreach($search as $item){?>
            <div class="card c1 mb-2">
              <div class="card-body">
                    <div class="address">
                        <a href="<?php echo base_url('home/detail/'.$item['p_id'])?>">
                        <div class="row">
                            
                           <div class="col-md-1">
                             <img src="<?php echo base_url().$item['p_img']?>" alt="" class="img-fluid">
                           </div>
                           <div class="col-md-5">
                            <span><?php echo $item['p_name']?></span> <br>
                           </div>
                           <div class="col-md-2">
                            <?php $old_price=$item['p_price'];
                                $new_price=$old_price - (($old_price * $item['p_discount'])/100) 
                                ?>
                              <p class="new-price"><b>New Price:<?php echo $new_price;?></b><span> Off (<?php echo $item['p_discount']?> %)</span></p>
                              <del><p class="last-price">Old Price: <span><?php echo $item['p_price'] ?></span></p></del>
                           </div>
   
                        </div>
                         </a>
                  </div>
</div>
</div>
 <?php } ?>
</div>


<section id="copy-right" style="padding-top:255px;";>
      <div class="copy-right-sec"><i class="fa-solid fa-copyright"></i>  
        Developed By Rahul Sharma
      </div>
    </section>
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