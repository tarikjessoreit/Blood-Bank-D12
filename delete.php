<?php include "header.php"; ?>

	<!-- Container -->
	<div class="container px-4">
		<h1>DELETE</h1>

		<?php 
		if (isset($_GET['uid'])) {
			if (isset($_POST['dconfirm'])) {
				$t = $_POST['txt'];

				if ($t === 'DELETE') {
					$uid = 0;
					$uid = $_GET['uid'];
					if (!empty($uid)) {
						$conn->query("DELETE FROM $users WHERE ID = $uid");
						echo "<div class='alert alert-success'>deleted</div>";
					}
					
				}else{
					echo "<div class='alert alert-danger'>Please try again</div>";
				}
			}
		}else{
			header('location:dashboard.php');
		}




		 ?>

		<form action="" method="post" class="form-group">
			<input type="text" name="txt" placeholder="please type DELETE">
			<input type="submit" value="Confim" name="dconfirm">
		</form>
		

		
		
	</div>

<?php include "footer.php"; ?>