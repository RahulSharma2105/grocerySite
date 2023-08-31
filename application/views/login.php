<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/style/login.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-page">
  <div class="form">
    <form class="register-form" method="post" action="<?php echo base_url('home/register')?>">
      <input type="text" name="fname" placeholder="First name" required/>
      <input type="text" name="lname" placeholder="Last name" required/>
      
      <input type="text" name="email" placeholder="email address" required>
       <input type="password" name="password" placeholder="password" required/>
       <input type="number" name="mobile" placeholder="Phone" required/>
       <textarea name="address" id="" cols="30" rows="10" placeholder="Enter your Address" required></textarea>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" method="post" action="<?php echo base_url('home/login_currectly')?>">
      <input type="text" name="email" placeholder="username"/>
      <input type="password" name="password" placeholder="password"/>
      <button>login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script>
    $('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
  </script>

</body>
</html>
