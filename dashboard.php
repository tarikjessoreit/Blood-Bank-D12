<?php include "header.php"; ?>

	<!-- Container -->
	<div class="container px-4">
		<h1>Dashboard</h1>

		<!-- users datatable -->
		<table id="userdatatable" class="table table-striped" style="width:100%">
	        <thead>
	            <tr>
	                <th>ID</th>
	                <th>Name</th>
	                <th>Address</th>
	                <th>Blood Group</th>
	                <th>L.D. Date</th>
	                <th>Action</th>
	            </tr>
	        </thead>
	        <tbody>

	        	<?php 

	        	$sql ="SELECT * FROM $users";

	        	$res = $conn->query($sql);
	        	if ($res->num_rows > 0) {
	        		while ($row = $res->fetch_assoc()) { 
	        	?>

	            <tr>
	                <td><?php echo $row['ID'] ?></td>
	                <td><?php echo $row['u_name']; ?></td>
	                <td><?php echo $row['u_village'].', '.$row['u_zilla'].', '.$row['u_division']; ?></td>
	                <td><?php echo $row['u_blood_group']; ?></td>
	                <td><?php echo last_donate_date($row['ID']); ?></td>
	                <td>
	                	<a href="" class="btn btn-sm btn-success">
	                		<i class="fa-solid fa-pen-to-square"></i> Edit
	                	</a>
	                	<a href="delete.php?uid=<?php echo $row['ID'] ?>" class="btn btn-sm btn-danger">
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
	                <th>Name</th>
	                <th>Address</th>
	                <th>Blood Group</th>
	                <th>L.D. Date</th>
	                <th>Action</th>
	            </tr>
	        </tfoot>
	    </table>


	</div>

<?php include "footer.php"; ?>