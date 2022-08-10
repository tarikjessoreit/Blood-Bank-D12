<?php include "header.php"; ?>
<?php 
if (isset($_GET['search'])) {
	$div = $_GET['sdivision'];
	$bgroup = $_GET['sbgroup']; 
}else{
	header('location:index.php');
}?>

	<!-- Container -->
	<div class="container px-4 blood-search">
		<h1><?php echo "Serach for <b>$div</b> ($bgroup)"; ?></h1>


		<div class="row">

			<?php 
			
			$sql = "SELECT * FROM $users WHERE u_division LIKE '%$div%' AND u_blood_group LIKE '%$bgroup%'";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			  // output data of each row
			  while($row = $result->fetch_assoc()) { ?>
			   
			<!-- List Items -->
			<div class="card col-md-4 blood-list-item">
			  <div class="card-body text-center">
			  	<img src="assets/images/default-avatar.jpg" class="rounded w-75 mb-3" >
			    <h5 class="card-title"><?php echo $row['u_name']; ?> (<?php echo $row['u_blood_group']; ?>)</h5>
			    <p class="card-text"></p>
			  </div>
			  <ul class="list-group list-group-flush">
			    <li class="list-group-item"><b>Email:</b> <a href="mailto:<?php echo $row['u_email']; ?>"><?php echo $row['u_email']; ?></a></li>
			    <li class="list-group-item"><b>Phone No:</b> <a href="tel:017777777777"><?php echo $row['u_phone_no']; ?></a></li>
			    <li class="list-group-item"><b>Address:</b><?php echo $row['u_village'].', '.$row['u_zilla'].', '.$row['u_division']; ?></li>
			  </ul>
			  <div class="card-body">
			    <a href="" class="btn btn-sm btn-success">
	        		<i class="fa-solid fa-pen-to-square"></i> Edit
	        	</a>
	        	<a href="" class="btn btn-sm btn-danger">
	        		<i class="fa-solid fa-trash"></i> Delete
	        	</a>
			  </div>
			</div>

			<?php  }
			} else {
			  echo "<h1 class='text-center'> Results not found</h1>";
			} 
				
			?>
			
			
		</div>
		
	</div>

<?php include "footer.php"; ?>