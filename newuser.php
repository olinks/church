<?php include "connection/Database.php"; ?>
<?php include "head.php"; ?>
<?php include "sidebar.php"; ?>
<?php 
if(isset($_POST['submit'])){
	$role = mysqli_real_escape_string($con, $_POST['role']);
	$u_name = mysqli_real_escape_string($con, $_POST['username']);
	$f_name = mysqli_real_escape_string($con, $_POST['firstname']);
	$l_name = mysqli_real_escape_string($con, $_POST['lastname']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$tel = mysqli_real_escape_string($con, $_POST['phone']);
	$gender = mysqli_real_escape_string($con, $_POST['gender']);
	$dob = mysqli_real_escape_string($con, $_POST['dob']);
	$date_created = date('Y-m-d H:i:s');

	$sql ="INSERT INTO users(`username`, `password`, `email`, `role_id`, `date_created`, `firstname`, `lastname`, `gender`)
	VALUES ('$u_name', '$password', '$email', '$role', '$date_created', '$f_name', '$l_name', '$gender')";
	$q = mysqli_query($con,$sql);
	if($q){
		echo '<script> alert("Submitted") </script>';
	}else{
		echo '<script> alert("Error") </script>';
	}
}
?>

	<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Create New User</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <div>
         <div class="row justify-content-md-center">
		<div class=" col-xl-6 col-lg-8 col-md-10">
	        <div class="card">
	            <div class="card-header">
	                <h4 class="card-title" id="horz-layout-card-center">Create User</h4>
	            </div>
	            <div class="card-content collpase show">
					<div class="card-body">
						<form class="form form-horizontal" method="POST">
							<div class="form-body">
								
							<div class="form-group row">
								<label class="col-md-3 label-control" for="role">Role</label>
								<div class="col-md-9">
									<select id="role" class="form-control" name="role">
										<option>- Select Role -</option>
										<?php
											$sql = "SELECT * FROM roles";
											$result = $con->query($sql);
											if ($result->num_rows > 0) {
												while($row = $result->fetch_assoc()) {
													$id = $row['id'];
													$role = $row['role_name'];
													echo '
													<option value="'.$id.'">'.$role.'</option>
													';
													$sn++;
												}
											}
										?>
									</select>
								</div>
							</div>
							<br>
							<div class="form-group row">
								<label class="col-md-3 label-control" for="firstname">First Name</label>
								<div class="col-md-9">
									<input type="text" id="firstname" class="form-control" placeholder="First Name" name="firstname">
								</div>
							</div>
							<br>
							<div class="form-group row">
								<label class="col-md-3 label-control" for="lastname">Last Name</label>
								<div class="col-md-9">
									<input type="text" id="lastname" class="form-control" placeholder="Last Name" name="lastname">
								</div>
							</div>
							<br>
							<div class="form-group row">
								<label class="col-md-3 label-control" for="gender">Gender</label>
								<div class="col-md-9">
									<select type="gender" id="gender" class="form-control" name="gender">
										<option >Gender</option>
										<option value="male">Male</option>
										<option value="female">Female</option>
										<option value="other">Other</option>
									</select>
								</div>
							</div>
							<br>
							<div class="form-group row">
								<label class="col-md-3 label-control" for="dob">D.O.B</label>
								<div class="col-md-9">
									<input type="date" id="dob" class="form-control" placeholder="D.O.B" name="dob">
								</div>
		                    </div>
							<br>
							<div class="form-group row">
								<label class="col-md-3 label-control" for="username">Username</label>
								<div class="col-md-9">
									<input type="text" id="username" class="form-control" placeholder="Username" name="username">
								</div>
		                    </div>
							<br>
							<div class="form-group row">
								<label class="col-md-3 label-control" for="email">Email</label>
								<div class="col-md-9">
									<input type="email" id="email" class="form-control" placeholder="Email" name="email">
								</div>
		                    </div>
							<br>
							<div class="form-group row">
								<label class="col-md-3 label-control" for="email">Phone</label>
								<div class="col-md-9">
									<input type="tel" id="phone" class="form-control" placeholder="phone" name="phone">
								</div>
		                    </div>
							<br>
							<div class="form-group row">
								<label class="col-md-3 label-control" for="password">Password</label>
								<div class="col-md-9">
									<input type="password" id="password" class="form-control" placeholder="Password" name="password">
								</div>
		                    </div>
							<br>

							<div class="form-actions center">
	                            <button type="button" class="btn btn-danger mr-1">
	                            	<i class="ft-x"></i> Cancel
	                            </button>
	                            <button type="submit" class="btn btn-primary" value="submit" name="submit" >
	                                <i class="la la-check-square-o"></i> Submit
	                            </button>
	                        </div>
						</form>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
                    </div>
                </main>
<?php include "footer.php"; ?>
