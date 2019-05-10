<?php include "navbar.php"?>
<!DOCTYPE html>
<?php
if(isset($_POST['upload_album'])){
    $album_title = $_POST['album_title'];
  if($album_title == "" || empty($album_title)){
       echo"The field cannot be empty";
    }
      else{
            $query = "INSERT INTO album_gallery(album_title)";
            $query .= "VALUE ('{$album_title}')";
            $create_album_query = mysqli_query($connection, $query);
         if(!$create_album_query){
                  die("Query Failed".mysqli_error($connection));
                 }
          echo"ALBUM CREATED";
           }
       }
?>    
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <link rel="icon" type="image/png" href="https://coderszine.com/wp-content/themes/v2/cz.png">
     <title>ADD IMAGE</title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body class="">
    <div class="container" style="min-height:500px;">
      <div class="container">	
	       <h2 style="text-align: center; color:red;">ADD ALBUM </h2>	
	       <br><br>
	      <div class="row">
	        <div class="col-md-4 col-md-offset-4 well">			
		       <strong><a href="index.php">View Gallery</a> </strong>
			  <form role="form" enctype='multipart/form-data' action="" method="post">
				 <fieldset>
					 <legend>ADD ALBUM</legend>				
				     <div class="form-group">
						<label for="name">Title</label>
						<input type="text" name="album_title" placeholder="Album Title" class="form-control" />
					 </div>	
				     <div class="form-group">
						<input type="submit" name="upload_album" value="upload" class="btn btn-primary" />
					 </div>
				 </fieldset>
			 </form>			
		   </div>
	     </div>	
         <br>
      </div>
  </div>
</body>
</html>

