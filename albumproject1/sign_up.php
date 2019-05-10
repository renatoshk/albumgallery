<?php include "functions/init.php"?>
<?php include "style.css" ?>
<!DOCTYPE html>
<html>
	<head>
	   <title>Login</title>
	   <h1>Welcome to the hotel</h1>
    </head>
<body>
<div class="signup-form">
	<?php validate_user_registration() ?>
	 <?php display_message(); ?>
   <form action="" method="post">
    <h4 style="color: blue; font-size: 40px;">SIGN UP</h4>
<!--       <h6 class="text-center"><?php  ?></h6>
 -->		<div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" name="firstname" placeholder="Your name" required="required">
                </div>
             </div>
            <div class="form-group">
                <div class="input-group">
                   <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                   <input type="text" class="form-control" name="lastname" placeholder="Your lastname" required="required">
                </div>
            </div>
           <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="text" class="form-control" name="username" placeholder="username" required="required">
                </div>
           </div>
           <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="text" class="form-control" name="email" placeholder="Your email" required="required">
                </div>
           </div>
           <div class="form-group">
                <div class="input-group">
                    <span classs="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control" name="password" placeholder="new password" required="required">
                </div>
           </div>
           <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control" name="conf_password" placeholder="confirm password" required="required">
                </div>
           </div>
           <div class="form-group">
                  <button type="submit" name ="signup" class="btn btn-primary btn-lg">SIGN UP</button>
            </div>
         <p> Or if you  have an account: </p>
           <div class="form-group">
                 <button type="submit" class="btn btn-primary btn-lg"><a href = "login.php">LOG IN</a></button>
           </div>
       </form>
   </div>
 </body>
</html>