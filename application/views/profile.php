<?php // echo '<pre>'; print_r($profile_data); die;?>
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
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/style/profile.css">

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
  </style>
</head>
<body>
<section>
  <div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="<?php echo base_url('home/index');?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><b>User Profile</b></li>
          </ol>
        </nav>
      </div>
    </div>
<?php foreach($profile_data as $user_detail){?>
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="<?php echo base_url('assets/img/profile_icon.png');?>" alt="avatar"
              class="rounded-circle img-fluid">
            <h5 class="my-3"><?php echo $user_detail['fname']?></h5>
            <p class="text-muted mb-1">Full Stack Developer</p>
            <p class="text-muted mb-4"><?php echo $user_detail['address']?></p>
           
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
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">First Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $user_detail['fname']?><a href="" type="button" class="btn btn-primary btn-floating" data-mdb-toggle="modal" data-mdb-target="#exampleModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Last Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $user_detail['lname']?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $user_detail['email']?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Password</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">********</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Mobile</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $user_detail['mobile']?></p>
              </div>
            </div>
          </div>
        </div>
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
<?php } ?>
      <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Your Profile</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="<?php echo base_url('home/edit_profile/').$user_detail['id']?>" method="POST">
          <div class="mb-3">
          <input type="text" name="fname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $user_detail['fname']?>">
          </div>
          <div class="mb-3">
            <input type="text" name="lname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $user_detail['lname']?>">
          </div>
          <div class="mb-3">
            <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $user_detail['email']?>">
          </div>
          <div class="mb-3">
            <input type="text" name="mobile" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $user_detail['mobile']?>">
          </div>
          <div class="mb-3">
            <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $user_detail['password']?>">
          </div>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>
</body>
</html>