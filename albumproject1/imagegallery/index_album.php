<!DOCTYPE html>
<?php include("navbar.php")?>

<html>
<head>
        <title>Gallery</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
            <h2>HOTEL GALLERY</h2>	
        <div class="row">
            <div class="collapse navbar-collapse" id="navbar1">
                <ul class="nav navbar-nav navbar-left">
                    <li><p class="navbar-text"><strong>Welcome!</strong> You're signed in as <strong><?php echo $_SESSION['email'] ?></strong></p></li>
                        <br>
                   <li><a href="add_album.php"><strong>Upload Album</strong></a></li>
                    <br>
                   <li><a href="add_image.php"><strong>Upload Images in Album</strong></a></li>
                </ul>
            </div>	
         </div>
    <div class="row"> 
    <?php
    $query = "SELECT * FROM album_gallery ";
    $alb_res  = mysqli_query($connection, $query);
    if(!$alb_res){
        die("Failed" . mysqli_error($connection));
    }
    while($row = mysqli_fetch_assoc($alb_res)){
       $album_id = $row['album_id'];
       $album_title = $row['album_title'];        
        ?>               
        <div class="gallery">
            <a href="index.php?album=<?php echo $album_id?>">
            <img src="images/example.jpg"  width="600" height="400">
            </a>
            <div class="desc"><?php echo  $album_title?></div>
        </div>
     <?php } ?>
   </div>
 </div>
</body>
</html>
