<?php include "functions/init.php" ?>
<?php include "style.css" ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <h1>Welcome to the hotel</h1>
</head>
<body>
<div class="signup-form">
  <?php display_message(); ?>
  <?php validate_user_login(); ?>
<form action="" method="post">
     <h4 style="color: blue; font-size: 40px;">LOG IN</h4>
      <div class="form-group">
         <div class="input-group">
           <span class="input-group-addon"><i class="fa fa-user"></i></span>
           <input type="text" class="form-control" name="email" placeholder="Your email" required="required">
         </div>
      </div>
      <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
          </div>
      </div>
      <div class="form-group">
           <button type="submit" name = 'login' class="btn btn-primary btn-lg">LOG IN</button>
      </div>
      <p><a href="">Forgot Password</a></p>
      <p> Or if you do not have an account: </p>
      <div class="form-group">
          <button type="submit" name='signup' class="btn btn-primary btn-lg"><a href = "sign_up.php">SIGN UP</a></button>
      </div>
      <p> Or you can contact us: </p>
      <div class="form-group">
          <button type="submit" name='signup' class="btn btn-primary btn-lg"><a href = "contact.php">Contact Us</a></button>
      </div>      
  </form>
 </div>
</body>
</html>