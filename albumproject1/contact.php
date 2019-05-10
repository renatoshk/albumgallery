 <?php include "style.css" ?>
<?php include "functions/init.php" ?>
<!DOCTYPE html>
<html>
<head>
	 <title>Login</title>
	 <h1>Welcome to the hotel</h1>
</head>
<body>
<div class="signup-form">
    <form action="" method="post">
      <h4 style="color: blue; font-size: 40px;">Contact Us</h4>
		<div class="form-group">
			 <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-user"></i></span>
                 <input type="text" class="form-control" name="name" placeholder="Your name" required="required">
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
				 <input type="text" class="form-control" name="email" placeholder="Your email" required="required">
	           </div>
         </div>
               <div class="form-group">
			     <div class="input-group">
				  <span class="input-group-addon"><i class="fa fa-lock"></i></span>
				   <textarea name="content" class = "form-control" placeholder="Your message" id="" cols="30" rows="10"> </textarea>
			      </div>
                 </div>
                <div class="form-group">
              <button type="submit" class="btn btn-primary btn-lg">Contact Us</button>
             </div>
           <p>OR</p>
       <div class="form-group">
      <button type="submit" class="btn btn-primary btn-lg"><a href = "login.php">LOG IN</a></button>
    </div>
   </form>
  </div>
 </body>
</html>