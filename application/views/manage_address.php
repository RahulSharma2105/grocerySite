<?php //echo '<pre>'; print_r($new_address); die;?>
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
    .address{
      border: 1px solid rgb(186, 186, 186);
      padding: 10px;
      border-radius: 5px;
    }
    .address , span{
      font-size: 14px;
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
  .c1{
    min-height: 600px;
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
            <div class="card c1 mb-4">
              <div class="card-body">
                <h2 class="mb-3">Manage Address</h2>
                <a class="cradit" id="formButton"><i class="fa fa-plus" aria-hidden="true"> &nbsp;</i>  Add New Address</a>
                <hr>
               
                <form id="form1" method="POST" action="<?php echo base_url('home/manage_address_add')?>">
                    <div class="row mb-3">
                        <div class="col">
                            <label for="">Name</label>
                            <input type="text" name="c_name" class="form-control" id="exampleFormControlInput1" placeholder="Name" required>
                        </div>
                        <div class="col">
                            <label for="">Mobile</label>
                          <input type="text" name="mobile" class="form-control" id="exampleFormControlInput1" placeholder="Mobile" required>
                      </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="">Pincode</label>
                            <input type="text" name="pin" class="form-control" id="exampleFormControlInput1" placeholder="Pincode" required>
                        </div>
                        <div class="col">
                            <label for="">Locality</label>
                          <input type="text" name="locality" class="form-control" id="exampleFormControlInput1" placeholder="Locatity" required>
                      </div>
                    </div>
                    <div class="mb-3">
                        <label for="">Address</label>
                      <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Text" required></textarea>
                    </div>
                    <div class="row mb-3">
                      <div class="col">
                          <label for="">City</label>
                          <input type="text" name="city" class="form-control" id="exampleFormControlInput1" placeholder="City" required>
                      </div>
                      <div class="col">
                          <label for="">State</label>
                        <select class="form-select" aria-label="Default select example" name="state" required>
                          <option value="Andhra Pradesh">Andhra Pradesh</option>
                          <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                          <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                          <option value="Assam">Assam</option>
                          <option value="Bihar">Bihar</option>
                          <option value="Chandigarh">Chandigarh</option>
                          <option value="Chhattisgarh">Chhattisgarh</option>
                          <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                          <option value="Daman and Diu">Daman and Diu</option>
                          <option value="Delhi">Delhi</option>
                          <option value="Lakshadweep">Lakshadweep</option>
                          <option value="Puducherry">Puducherry</option>
                          <option value="Goa">Goa</option>
                          <option value="Gujarat">Gujarat</option>
                          <option value="Haryana">Haryana</option>
                          <option value="Himachal Pradesh">Himachal Pradesh</option>
                          <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                          <option value="Jharkhand">Jharkhand</option>
                          <option value="Karnataka">Karnataka</option>
                          <option value="Kerala">Kerala</option>
                          <option value="Madhya Pradesh">Madhya Pradesh</option>
                          <option value="Maharashtra">Maharashtra</option>
                          <option value="Manipur">Manipur</option>
                          <option value="Meghalaya">Meghalaya</option>
                          <option value="Mizoram">Mizoram</option>
                          <option value="Nagaland">Nagaland</option>
                          <option value="Odisha">Odisha</option>
                          <option value="Punjab">Punjab</option>
                          <option value="Rajasthan">Rajasthan</option>
                          <option value="Sikkim">Sikkim</option>
                          <option value="Tamil Nadu">Tamil Nadu</option>
                          <option value="Telangana">Telangana</option>
                          <option value="Tripura">Tripura</option>
                          <option value="Uttar Pradesh">Uttar Pradesh</option>
                          <option value="Uttarakhand">Uttarakhand</option>
                          <option selected value="West Bengal">West Bengal</option>
                        </select>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col">
                        <label for="">Landmark </label>
                        <input type="text" name="landmark" class="form-control" id="exampleFormControlInput1" placeholder="Landmark">
                    </div>
                    <div class="col">
                        <label for="">Alternative Number(Optional)</label>
                      <input type="text" name="a_number" class="form-control" id="exampleFormControlInput1" placeholder="Alternative Number">
                  </div>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="place" id="flexRadioDefault1" value="Home">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Home
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="place" id="flexRadioDefault2" value="Work" checked>
                  <label class="form-check-label" for="flexRadioDefault2">
                    Work
                  </label>
                </div>
                  
                    <button type="submit" id="submit" class="btn btn-primary mt-3">Submit</button>
                    </form>
                    <?php foreach($new_address as $add){?>
                    <div class="address mt-3">
                      <span><?php echo $add['name']?></span> &nbsp; &nbsp; <span><?php echo $add['mobile']?></span> <br>
                      <span><?php echo $add['address']?>, <?php echo $add['locality'] ?>, <?php echo $add['city']?>, <?php echo $add['state']?> - <?php echo $add['pin']?></span>
                      
                      <div class="btn-group dropstart">
                        <a  class="dropdown-toggle" data-mdb-toggle="dropdown" aria-expanded="false">
                          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#" id="formButton1" onclick="form(<?php echo $add['shipping_id']?>)">Edit</a></li>
                          <li><hr class="dropdown-divider" /></li>
                          <li><a class="dropdown-item" href="<?php echo base_url('home/delete_address/'.$add['shipping_id'])?>">Delete</a></li>
                        </ul>
                      </div>
                    </div>
                  <?php } ?>
                  
                  <form id="form2">
                    <div class="row mb-3">
                        <div class="col">
                            <label for="">Name</label>
                            <input type="text" name="c_name" class="form-control" id="name"  required>
                        </div>
                        <div class="col">
                            <label for="">Mobile</label>
                          <input type="text" name="mobile" class="form-control" id="exampleFormControlInput1" placeholder="Mobile" required>
                      </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="">Pincode</label>
                            <input type="text" name="pin" class="form-control" id="exampleFormControlInput1" placeholder="Pincode" required>
                        </div>
                        <div class="col">
                            <label for="">Locality</label>
                          <input type="text" name="locality" class="form-control" id="exampleFormControlInput1" placeholder="Locatity" required>
                      </div>
                    </div>
                    <div class="mb-3">
                        <label for="">Address</label>
                      <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Text" required></textarea>
                    </div>
                    <div class="row mb-3">
                      <div class="col">
                          <label for="">City</label>
                          <input type="text" name="city" class="form-control" id="exampleFormControlInput1" placeholder="City" required>
                      </div>
                      <div class="col">
                          <label for="">State</label>
                        <select class="form-select" aria-label="Default select example" name="state" required>
                          <option value="Andhra Pradesh">Andhra Pradesh</option>
                          <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                          <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                          <option value="Assam">Assam</option>
                          <option value="Bihar">Bihar</option>
                          <option value="Chandigarh">Chandigarh</option>
                          <option value="Chhattisgarh">Chhattisgarh</option>
                          <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                          <option value="Daman and Diu">Daman and Diu</option>
                          <option value="Delhi">Delhi</option>
                          <option value="Lakshadweep">Lakshadweep</option>
                          <option value="Puducherry">Puducherry</option>
                          <option value="Goa">Goa</option>
                          <option value="Gujarat">Gujarat</option>
                          <option value="Haryana">Haryana</option>
                          <option value="Himachal Pradesh">Himachal Pradesh</option>
                          <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                          <option value="Jharkhand">Jharkhand</option>
                          <option value="Karnataka">Karnataka</option>
                          <option value="Kerala">Kerala</option>
                          <option value="Madhya Pradesh">Madhya Pradesh</option>
                          <option value="Maharashtra">Maharashtra</option>
                          <option value="Manipur">Manipur</option>
                          <option value="Meghalaya">Meghalaya</option>
                          <option value="Mizoram">Mizoram</option>
                          <option value="Nagaland">Nagaland</option>
                          <option value="Odisha">Odisha</option>
                          <option value="Punjab">Punjab</option>
                          <option value="Rajasthan">Rajasthan</option>
                          <option value="Sikkim">Sikkim</option>
                          <option value="Tamil Nadu">Tamil Nadu</option>
                          <option value="Telangana">Telangana</option>
                          <option value="Tripura">Tripura</option>
                          <option value="Uttar Pradesh">Uttar Pradesh</option>
                          <option value="Uttarakhand">Uttarakhand</option>
                          <option selected value="West Bengal">West Bengal</option>
                        </select>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col">
                        <label for="">Landmark </label>
                        <input type="text" name="landmark" class="form-control" id="exampleFormControlInput1" placeholder="Landmark">
                    </div>
                    <div class="col">
                        <label for="">Alternative Number(Optional)</label>
                      <input type="text" name="a_number" class="form-control" id="exampleFormControlInput1" placeholder="Alternative Number">
                  </div>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="place" id="flexRadioDefault1" value="Home">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Home
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="place" id="flexRadioDefault2" value="Work" checked>
                  <label class="form-check-label" for="flexRadioDefault2">
                    Work
                  </label>
                </div>
                  
                    <button type="submit" id="submit" class="btn btn-primary mt-3">Submit</button>
                    </form>
                  </div>
            </div>
<!-- 
            <div class="row">
              <div class="col-md-6">
                <div class="card mb-4 mb-md-0">
                  <div class="card-body">
                    <p class="mb-4"><span class="text-primary font-italic me-1">Product Status
                    </p>
                    <p class="mb-1 dumy">simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.<br>
                    simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                </p>
                    <div class="progress rounded">
                      <div class="progress-bar" role="progressbar" aria-valuenow="80"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="mt-4 mb-1">Product Return</p>
                    <div class="progress rounded">
                      <div class="progress-bar on" role="progressbar" aria-valuenow="72"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card mb-4 mb-md-0">
                  <div class="card-body">
                    <p class="mb-4"><span class="text-primary font-italic me-1">How to manage your Account</span>
                    </p>
                    <p class="mb-1 dumy">simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                  </div>
                </div>
              </div>
             </div> -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("#formButton").click(function(){
        $("#form1").toggle();
    });
});

// $(document).ready(function(){
//     $("#formButton1").click(function(){
//         $("#form2").toggle();
//     });
// });

function form($id){
      var id=id;
      alert($id)   
        
        $.ajax({
          url:"<?php echo base_url('home/fetch_add')?>",
          method:"POST",
          data:{id:id},
          dataType:"json",
      
        });
        $("#form2").toggle();
    
}
</script>
</body>
</html>