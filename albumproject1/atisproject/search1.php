<?php include "../imagegallery/navbar.php" ?>
<?php include "../style.css" ?>
<!DOCTYPE html>
<html>
<head>
	<title>Hotel Guests</title>
    <h1> Hotel Guests </h1>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
         $(document).ready(function(){
			$('input[type="checkbox"]').click(function(){
				var check = 0;
				if ($('input[type="checkbox"]').is(":checked")) {
					var check = 1;
				}
				var id = $(this).val();
				$.ajax({
					url:"index.php",
					method:"POST",
					data:{check:check,id:id,},
					success: function(data){
						$('#'+id).remove();
						alert("Guest removed");
						},
				});

			});
		});
</script>
<style type="text/css">

h3 {
	color: red;
}
table {
	font-size: 40px;
	margin-left: 420px;
	color:red;
}
</style>
</head>
<body>

	<form action = "" method = "post">
       <div style = "margin-left: 420px;" class="input-group">
            <input style=" color:red; font-size: 20px;" name = "search" type="text" class="form-control" placeholder="Search hotel guests">
            <span class="input-group-btn">
            <button style = "color:blue; font-size: 20px;" style = "color:blue;" name = "submit"  type="submit"value ="search">Search</button></span>
       </div>
<table border="1" class = "table table-bordered table-hover table">
<thead>
	<tr>
		<th>Name</th>
		<th>Surname</th>
		<th>Check</th>
    </tr>
</thead>
<tbody>
  <?php
 if(isset($_POST['submit'])){
    $search_guest = $_POST['search'];
    if($search_guest == ""){
    	  echo '<script language="javascript">';
	           echo 'alert("Search something")';
	           echo '</script>';
    }
    else {
    $query = "SELECT * FROM guests WHERE user_checked = 'no' AND firstname LIKE '%$search_guest%' OR user_checked = 'no' AND lastname LIKE '%$search_guest%' ";
    $search_query = mysqli_query($connection, $query);
    if(!$search_query){
      die("Error");
     }
     $count = mysqli_num_rows($search_query);
      if($count == 0){
	     	   echo '<script language="javascript">';
	           echo 'alert("No Result")';
	           echo '</script>';
         } 
   else{
      while($row = mysqli_fetch_assoc($search_query)){
		     $guest_id = $row['id'];
		     $guest_firstname = $row['firstname'];
		     $guest_lastname = $row['lastname'];
		     $guest_checked = $row ['user_checked'];
		       echo "<tr>";
			   echo "<td>$guest_firstname </td>";
			   echo "<td>$guest_lastname </td>";
  ?>
	   <td><input class='checkBoxes' type='checkbox' name='check'  value='<?php echo $guest_id; ?>'>
	    <?php

     if(isset($_POST['check'])){
     $guest_id = $_POST['id'];
     $check_query = "UPDATE guests SET user_checked = 'yes' WHERE id = {$guest_id} ";
     $ress = mysqli_query($connection, $check_query);
     if(!$ress){
      die("Failed");
     }
   } 
        echo "</tr>";
	  }
	}
  }
}
?>
</tbody>
</table>
<button style="margin-left: 420px;"><a href = "index.php">Back</button>
</form>	
</body>
</html>