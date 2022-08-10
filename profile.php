<?php include "header.php"; ?>

	<!-- Container -->
	<div class="container px-4">
		<h1>Profile</h1>

		<?php 
			if (isset($_POST['add-d-btn'])) {
				$added_date = date('Y-m-d H:i:s');
				$user_id  = $_SESSION["UserID"];
				$donation_date = date('Y-m-d H:i:s', strtotime($_POST['donation-dt']));
				$donation_note = $_POST['donation_note'];

				$sql = "INSERT INTO b_donate_date(added_date, user_id, donation_date, donation_note, donation_status) VALUES ('$added_date', '$user_id', '$donation_date', '$donation_note', 'done')";


			if($conn->query($sql)===true){
				$msg = "New Data Addes!";
			}else{
				$err = "<b>Faild to Add Data:</b> ".$conn->error;
			}
				
			}



		 ?>

		<div class="row">
			<!-- List Items -->
			<div class="card col-md-4 blood-list-item">
			  <div class="card-body text-center">
			  	<img src="assets/images/default-avatar.jpg" class="rounded w-75 mb-3" >
			    <h5 class="card-title">Mr. Jobbar Hasan (O+)</h5>
			    <p class="card-text"></p>
			  </div>
			  <ul class="list-group list-group-flush">
			    <li class="list-group-item"><b>Email:</b> <a href="mailto:test@gmail.com">test@gmail.com</a></li>
			    <li class="list-group-item"><b>Phone No:</b> <a href="tel:017777777777">01777777777</a></li>
			    <li class="list-group-item"><b>Address:</b>Khulna, Bangladesh</li>
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
		</div>


		<div class="row mt-4">
			<h2>Donation details</h2>
			<?php
			if (isset($msg)) {
			 	echo '<div class="alert alert-success">'.$msg.'</div>';
			 } 
			 ?>

			<?php
			if (isset($err)) {
			 	echo '<div class="alert alert-danger">'.$err.'</div>';
			 } 
			 ?>
			<form class="form-inline" method="post" action="">
			  <div class="form-group mb-2">
			    <label for="donation-date" class="sr-only">Donation Date</label>
			    <input type="datetime-local" max="<?php echo date('Y-m-d H:i:s')?>" name="donation-dt" class="form-control" id="donation-date" required>
			  </div>

			  <div class="form-group">
			    <label for="doantion-note">Note</label>
			    <textarea class="form-control" name="donation_note" rows="3" required></textarea>
			  </div>

			  <input type="submit" name="add-d-btn"  class="btn btn-primary my-2" value="Add Donation">
			</form>
		</div>

		<div class="row">
			<div class="card">
				<div class="card-header">Donation List</div>
				<div class="card-body">
				<!-- users datatable -->
				<table id="userdatatable" class="table table-striped" style="width:100%">
			        <thead>
			            <tr>
			                <th>ID</th>
			                <th>Donation Date</th>
			                <th>Donation Note</th>
			                <th>Action</th>
			            </tr>
			        </thead>
			        <tbody>
			            <?php 
			            $uid = $_SESSION['UserID'];
			        	$sql ="SELECT * FROM $donate_date WHERE user_id =$uid";

			        	$res = $conn->query($sql);
			        	if ($res->num_rows > 0) {
			        		while ($row = $res->fetch_assoc()) { 
			        	?>

			            <tr>
			                <td><?php echo $row['ID'] ?></td>
			                <td><?php echo $row['donation_date']; ?></td>
			                <td><?php echo $row['donation_note']; ?></td>
			                <td>
			                	<a href="" class="btn btn-sm btn-success">
			                		<i class="fa-solid fa-pen-to-square"></i> Edit
			                	</a>
			                	<a href="" class="btn btn-sm btn-danger">
			                		<i class="fa-solid fa-trash"></i> Delete
			                	</a>
			                </td>
			            </tr>
			           
			           	<?php	
			        		}
			        	}
			        	?>
			          
			           
			        </tbody>
			        <tfoot>
			            <tr>
			                <th>ID</th>
			                <th>Donation Date</th>
			                <th>Donation Note</th>
			                <th>Action</th>
			            </tr>
			        </tfoot>
			    </table>
				</div>
			</div>
		</div>

		
	</div>

<?php include "footer.php"; ?>