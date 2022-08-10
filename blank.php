<?php include "header.php"; ?>

	<!-- Container -->
	<div class="container px-4">
		<h1>Dashboard</h1>
		

		<?php echo date('H i s') ?>
		<hr>
		<?php 

		$sql = "SELECT * FROM users";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		  // output data of each row
		  while($row = $result->fetch_assoc()) {
		    echo $row['ID'].". ".$row['u_name']."<hr>";
		  }
		} else {
		  echo "0 results";
		}

		 ?>


		
	</div>

<?php include "footer.php"; ?>