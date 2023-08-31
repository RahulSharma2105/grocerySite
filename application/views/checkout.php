
 <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/style/checkout.css">
<style>

    .address{
      border: 1px solid rgb(186, 186, 186);
      padding: 10px;
      border-radius: 5px;
    }


</style>
<div class="container rounded bg-white mt-5">
    <div class="bg row d-flex justify-content-center pb-5">
        <div class="col-sm-4 col-md-4 ml-1">
            <div class="py-4 pl-6 d-flex flex-row">
                <h5><span class="fa fa-check-square-o"></span><b> Total you </b> | </h5><span class="pl-2">Pay</span>
            </div>
            <?php foreach($this->cart->contents() as $items){?>
            <div class="bg-white p-2 d-flex flex-column">
                <div class="text-center mt-4"> <img class="img-fluid" src="<?php echo base_url().$items['image']?>" width="200"/> </div>
                <h5><?php echo $items['name']?></h5>
                <p>Delivery within 7 days (7 Days Replacement Policy)</p>
                <h4 class="green"><i class="fa fa-inr" aria-hidden="true"></i> 249</h4>
          
            </div>
            <?php } ?>
        </div>

        <div class="col-sm-5 col-md-6 mobile">
            <div class="py-4 d-flex justify-content-end">
            
            </div>
            <form action="<?php echo base_url('home/order')?>" method="post" class="from-control">
            <div class="bg-white p-3 d-flex flex-column">
              
                <div class="pt-2">
                    <h5>Payment details</h5>
                </div>
                <?php foreach($this->cart->contents() as $items){?>
                <div class="d-flex">
                    <div class="col-8"><?php echo $items['name']?></div>
                    <div class="ml-auto "><b><i class="fa fa-inr" aria-hidden="true"></i><?php echo $items['subtotal']?></b></div>
                </div>
                <?php } ?>
                <hr>
                <div class="d-flex" >
                    <div class="col-8" ><b>Total Payable</b></div>
                    <div class="ml-auto "><b><i class="fa fa-inr" aria-hidden="true"></i><?php echo $this->cart->total(); ?></b></div>
                </div>
              <hr>
              <?php if(!empty($address)){ ?>
                <div class="d-flex flex-row pt-3">
                    <h5 class="pl-2"><span class="fa fa-check-square-o"></span><b>Delivery Address</b> | </h5><span class="pl-2">Pay</span>
                </div>
                <?php   foreach($address as $add){?>
                <div class="pl-2">
                <div class="address mt-3">
                <input class="form-check-input" type="radio" name="s_id" id="flexRadioDefault1" value="<?php echo $add['shipping_id']?>">
                <span><?php echo $add['name']?></span> &nbsp; &nbsp; <span><?php echo $add['mobile']?></span> <br>
                      <span><?php echo $add['address']?>, <?php echo $add['city']?>, <?php echo $add['state']?> - <?php echo $add['pin']?></span>
                </div> 
                </div>
                <?php }  ?>
               
                <input type="submit" name="pay" value="Online Payment" class=" btn bill mt-4" > 
                <input type="submit" name="pay" value="Cash on Delivery" class=" btn bill mt-4" >
                <?php } else{ ?>
                    <a class="btn bill mt-4"  href="<?php echo base_url('home/manage_address')?>">Add Address</a>
                <?php } ?>
            </div>
            <!-- <div class="bg-white mt-4 p-3 d-flex flex-column">
                <div class="pt-2">
                    <h5>Login</h5>
                </div>
                <div class="d-flex">
                    <div class="col-8">Name </div>
                    <div class="ml-auto"><b><?php echo $this->session->userdata('fname') ?></b>   <b><?php echo $this->session->userdata('lname') ?></b></div>
                </div>
                <div class="d-flex">
                    <div class="col-8">Mobile</div>
                    <div class="ml-auto"><b><?php echo  $this->session->userdata('mobile')?></b></div>
                </div>
                <div class="pt-2">
                    <h5>Delivery Address</h5>
                </div>
                <div class="d-flex">
                    <div class="col-8">Address </div>
                    <div class="ml-auto"><b>Badshahi Road</b></div>
                </div>
                <div class="d-flex">
                    <div class="col-8">Mobile</div>
                    <div class="ml-auto"><b><?php echo  $this->session->userdata('mobile')?></b></div>
                </div>
                </div> -->
            </form>
        </div>
    </div>
</div>
