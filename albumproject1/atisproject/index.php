<?php include "../imagegallery/navbar.php" ?>
<?php include "../style.css" ?>
<!DOCTYPE html>
<html>
<head>
	<title>Hotel Guests</title>
	<h1>Hotel Guests</h1>
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
		table {
			font-size: 40px;
			margin-left: 420px;
			color:red;
		}
	</style>
</head>
<body>

	<form action = "search1.php" method = "post">
		<div style = "margin-left: 420px;" class="input-group">
			<input style=" color:red; font-size: 20px;" name = "search" type="text" class="form-control" placeholder="Search hotel guests">
			<span class="input-group-btn" >
			<button style = "color:blue; font-size: 20px;" name = "submit"  type="submit" value ="search">Search</button></span>
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
					$per_page = 2;
					if(isset($_GET['page'])){
						$page = $_GET['page'];
					}else {
						$page = "";
					}
					if($page == "" || $page == 1){
						$page_1 = 0;
					} else {
						$page_1 = ($page * $per_page) - $per_page;
					}
					$guests_query = "SELECT * FROM guests WHERE user_checked = 'no' ";
					$guests_count = mysqli_query($connection, $guests_query);
					$count = mysqli_num_rows($guests_count);
					if($count < 1){
						echo "<h3 class='text-center'>No guests available</h3>";
					} else {
						$count = ceil($count/$per_page);
						$query = " SELECT * FROM guests WHERE user_checked = 'no' LIMIT $page_1, $per_page ";
						$hotel_query =  mysqli_query($connection, $query);
						if(!$hotel_query){
							die("Failed");
						}
						while($row = mysqli_fetch_assoc($hotel_query)){
							$guest_id = $row['id'];
							$guest_firstname = $row['firstname'];
							$guest_lastname = $row['lastname'];
							$guest_checked = $row ['user_checked'];
							echo "<tr id='". $guest_id ."''>";
							echo "<td>$guest_firstname</td>";
							echo "<td>$guest_lastname</td>";
				?>
					<td>
						<input class='checkBoxes' type='checkbox' name='check' value='<?php echo $guest_id; ?>'>
					</td>
				<?php
						$num_record = mysqli_num_rows($hotel_query);
						if(isset($_POST['check'])){
							$guest_id = $_POST['id'];
							$check_query = "UPDATE guests SET user_checked = 'yes' WHERE id = {$guest_id} ";
							$ress = mysqli_query($connection, $check_query);
							if(!$ress){
								die("failed");
							}
						}
						echo "</tr>";
						} 
					}
				?>
			</tbody>
		</table>
		<br>
		<br>
		<div style="margin-left: 420px;">
			<?php
				for($i = 1; $i <= $count; $i++){
					if($i == $page){
			?>
					<a href = "index.php?page=<?php echo  $i; ?>" style="text-decoration: none; font-size: 20px;"><?php echo $i." ";?></a>
			<?php }else { ?>
					<a href = "index.php?page=<?php echo $i; ?>" style="text-decoration: none; font-size: 20px;"><?php echo $i." ";?></a><?php
					}
				}
			?>
		</div>
	</form>
</body>
</html>