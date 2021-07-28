<?php require_once "app/Autoload.php"; ?>
<?php 
	
	$student = new Student;

	if (isset($_GET['id'])) {
		$id = $_GET['id'];


		$mess = $student -> peyonerAvoishap($id);


	}




 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	

	<div class="wrap-table shadow">
		<a class="btn btn-primary btn-sm" href="index.php">Add New Student</a>
		<div class="card">
			<div class="card-body">
				<h2>All Data</h2>

				<?php 

					if ( isset($mess) ) {
						echo $mess;
					}


				?>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Username</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

						<?php 

							//data read method
							$All_Students = $student -> peyonerAgerbad();


							$i = 1;
							while ($stu = $All_Students -> fetch_assoc() ) :




						 ?>

						<tr>
							<td><?php echo $i; $i++; ?></td>
							<td><?php echo $stu['name']; ?></td>
							<td><?php echo $stu['email']; ?></td>
							<td><?php echo $stu['cell']; ?></td>
							<td><?php echo $stu['username']; ?></td>
							<td>
								<a class="btn btn-sm btn-info" href="#">View</a>
								<a class="btn btn-sm btn-warning" href="#">Edit</a>
								<a class="btn btn-sm btn-danger" href="?id=<?php echo $stu['id']; ?>">Delete</a>
							</td>
						</tr>
						
					<?php endwhile; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>