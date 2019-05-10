<?php include "navbar.php"?>
<?php
$target_dir = "images/";
$uploadOk = 1;
if(isset($_POST["upload_image"])) {
	$title=$_POST["title"];
    $image_album_id = $_POST['image_album_id'];
	$description=$_POST["description"];
	$user_id=$_SESSION["user_id"];
	$target_file = $target_dir . basename($_FILES["image"]["name"]);
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	$check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  } 
if ($_FILES["image"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    	$query= "INSERT INTO gallery(gallery_id, user_id, album_id, image_title, image_content, image_name) 
		VALUES('', '".$_SESSION["user_id"]."', '".$image_album_id."', '".$title."', '".$description."', '".$target_file."')";
        $res = mysqli_query($connection, $query);
       if(!$res){
	    die("Faield query");
              }	
        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
        }
   }
}
?>
<!DOCTYPE html>
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
	       <h2 style="text-align: center; color:red;">ADD IMAGE </h2>	
	       <br><br>
	      <div class="row">
	        <div class="col-md-4 col-md-offset-4 well">			
		       <strong><a href="index.php">View Gallery</a> </strong>
			  <form role="form" enctype='multipart/form-data' action="" method="post">
				 <fieldset>
					 <legend>Upload Images</legend>				
				     <div class="form-group">
						<label for="name">Title</label>
						<input type="text" name="title" placeholder="Image Title" class="form-control" />
					 </div>
                     <div class="form-group">
                        <label for="album">Album: </label>
                         <select name="image_album_id" id="" placeholder="">

                                <?php 
                                $query = "SELECT * FROM album_gallery";
                                $select_albums = mysqli_query($connection, $query);
                                if(!$select_albums){
                                    die("Failed" . mysqli_error($connection));
                                }
                                while($row = mysqli_fetch_assoc($select_albums)){
                                $album_id = $row['album_id']; 
                                $album_title = $row['album_title'];
                                echo "<option value='{$album_id}'>{$album_title}</option>";
                                }
                                ?>   

                          </select>    
                        </div>	
                             <div class="form-group">
						<label for="name">Description:</label>
						<input type="text" name="description" placeholder="Image Description" class="form-control" />
					 </div>	
					 <div class="form-group">
						<label for="image">Choose Image:</label>
						<input type="file" name="image" id = "image" placeholder="Choose file" class="form-control" />
					 </div>	
					 <div class="form-group">
						<input type="submit" name="upload_image" value="upload" class="btn btn-primary" />
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

