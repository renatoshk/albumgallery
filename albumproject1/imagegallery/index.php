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
            <h2>HOTEL IMAGES</h2>	
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
<?php if(isset($_SESSION['user_id'])){ ?>                
<div class="row"> 
<?php
    if(isset($_GET['album'])){
       $photo_album_id = $_GET['album'];    
    
    $query = "SELECT * FROM gallery WHERE user_id = '".$_SESSION['user_id']."' AND album_id = $photo_album_id ";
    $res  = mysqli_query($connection, $query);
    if(!$res){
        die("Failed" . mysqli_error($connection));
    }
    while($row = mysqli_fetch_assoc($res)){
        $gallery_id = $row['gallery_id'];
        $user_id = $row['user_id'];
        $album_id = $row['album_id'];
        $image_title = $row['image_title'];
        $image_name = $row['image_name'];
        $image_content = $row['image_content'];
        ?>               
        <div class="gallery">
            <a  href="file.php?image=<?php echo $gallery_id?>"<?php $image_name ?> >
            <img src="<?php echo $image_name ?>"  width="600" height="400">
            </a>
            <div class="desc"><?php echo  $image_content ?></div>
        </div>

        <?php }}} ?>
        
  </div>
</div>
</body>
</html>
