<?php include "connection/Database.php"; ?>
<?php include "head.php"; ?>
<?php include "sidebar.php"; ?>
<?php 


	if(isset($_POST['save'])){
		$p_type = $_POST['programme_type'];
		$date = $_POST['programme_date'];
		$start_time = $_POST['start_time'];
		$end_time = $_POST['end_time'];
		$preacher = $_POST['preacher'];
		$message = $_POST['message'];
		$lastid = "";
		$male = $_POST['male'];
		$female = $_POST['female'];
		$children = $_POST['children'];
		$first_timer = $_POST['first_time'];
		$converts = $_POST['converts'];
		$total = $_POST['total'];

		$sql = "INSERT INTO activities (`programme_type`, `date`, `start_time`, `end_time`, `preacher`, `message`)
		VALUES ('$p_type', '$date', '$start_time', '$end_time', '$preacher', '$message')";
		$q = mysqli_query($db,$sql);
		if($q){
			$last_id = $db -> insert_id;
			$stmnt = "INSERT INTO attendance(`id`, `activities_id`, `male_attended`, `female_attended`, `children_attended`, `first_timer`, `new_convert`, `total`, `remark`)
			VALUES (NULL, '$last_id', '$male', '$female', '$children', '$first_timer', '$converts', '$total', ' ');";
			$query = mysqli_query($db,$stmnt);
			if($query){
				echo "<script> alert('Record Submitted Successfully'); </script>";

			}

		}else{
			echo "<script> alert('Error'); </script>";

		}

	}
?>

	<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Activities</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <div>
         <div class="row justify-content-md-center">
		<div class=" col-xl-12 col-lg-8 col-md-12">
	        <div class="card">
				<div class="card-content collpase show">
					<div class="card-body">
						<form class="form form-horizontal" method="POST">
							<div class="form-body">
								<div class="row ">
									<div class="col-md-6">
										<div class="card-header">
											<h4 class="card-title" id="horz-layout-card-center">Activities Record	</h4>
										</div>
										<div class="form-group row">
											<label class="col-md-3 label-control" for="programme_type">Choose Service</label>
											<div class="col-md-9">
												<select id="programme_type" name="programme_type" class="form-control">
													<option value="1">Sunday Service</option>
													<option value="2">Mid-Week Service</option>
													<option value="3">Bible School</option>
													<option value="4">Water Baptism</option>
													<option value="5">Foundation School</option>
												</select>
											</div>
										</div>
										<br>
										<div class="form-group row">
											<label class="col-md-3 label-control" for="programme_date">Date</label>
											<div class="col-md-9">
												<input type="date" id="programme_date" class="form-control" placeholder="Date" name="programme_date">
											</div>
										</div>
										<br>
										<div class="form-group row">
											<label class="col-md-3 label-control" for="start_time">Start time</label>
											<div class="col-md-9">
												<input type="time" id="start_time" class="form-control" placeholder="start Time" name="start_time">
											</div>
										</div>
										<br>
										<div class="form-group row">
											<label class="col-md-3 label-control" for="end_time">End time</label>
											<div class="col-md-9">
												<input type="time" id="end_time" class="form-control" placeholder="End Time" name="end_time">
											</div>
										</div>
										<br>
										<div class="form-group row">
											<label class="col-md-3 label-control" for="preacher">Preacher</label>
											<div class="col-md-9">
												<input type="text" id="preacher" class="form-control" placeholder="Preacher" name="preacher">
											</div>
										</div>
										<br>
										<div class="form-group row">
											<label class="col-md-3 label-control" for="message">Message</label>
											<div class="col-md-9">
												<input type="text" id="message" class="form-control" placeholder="Message" name="message">
											</div>
										</div>
									</div>
									<!-- Attendance Start -->
									<div class="col-md-6">
										<div class="card-header">
											<h4 class="card-title" id="horz-layout-card-center">Attendance</h4>
										</div>
										<div class="card-body">
											<div class="form-group row">
												<label class="col-md-5 label-control" for="male">Males in attendance</label>
												<div class="col-md-7">
													<input type="number" id="male" class="form-control" placeholder="male" name="male">
												</div>
											</div>
											<br>
											<div class="form-group row">
												<label class="col-md-5 label-control" for="female">Females in attendance</label>
												<div class="col-md-7">
													<input type="number" id="female" class="form-control" placeholder="female" name="female">
												</div>
											</div>
											<br>
											<div class="form-group row">
												<label class="col-md-5 label-control" for="children">Children in attendance</label>
												<div class="col-md-7">
													<input type="number" id="children" class="form-control" placeholder="children" name="children">
												</div>
											</div>
											<br>
											<div class="form-group row">
												<label class="col-md-5 label-control" for="first_time">First Timers</label>
												<div class="col-md-7">
													<input type="number" id="first_time" class="form-control" placeholder="first_time" name="first_time">
												</div>
											</div>
											<br>
											<div class="form-group row">
												<label class="col-md-5 label-control" for="converts">New Converts</label>
												<div class="col-md-7">
													<input type="number" id="converts" class="form-control" placeholder="converts" name="converts">
												</div>
											</div>
											<br>
											<div class="form-group row">
												<label class="col-md-5 label-control" for="total">Total</label>
												<div class="col-md-7">
													<input type="number" id="total" class="form-control" placeholder="total" name="total">
												</div>
											</div>
											<!-- End Attendance -->
										</div>
									</div>
								</div>

							<div class="form-actions center">
	                            <button type="button" class="btn btn-danger mr-1">
	                            	<i class="ft-x"></i> Cancel
	                            </button>
	                            <button type="submit" class="btn btn-primary" name="save" onclick="my_submit()">
	                                <i class="la la-check-square-o"></i> Save
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
<script>
	function my_submit(){
		confirm('Do you want to Submit ?');
	}
</script>
<?php include "footer.php"; ?>
