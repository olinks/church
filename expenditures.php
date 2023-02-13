<?php include "connection/Database.php"; ?>
<?php include "head.php"; ?>
<?php include "sidebar.php"; ?>
<?php 
	if(isset($_POST['save'])){
		$date = $_POST['programme_date'];
		$cost = $_POST['cost'];

		$sql = "INSERT INTO expenditures ('date', 'cost', 'remark') VALUES ($date, $cost, '')";
		$q = $db->query($sql);
	}
?>

	<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Expenditures</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <div>
         <div class="row justify-content-md-center">
		<div class=" col-xl-6 col-lg-8 col-md-10">
	        <div class="card">
	            <div class="card-header">
	                <h4 class="card-title" id="horz-layout-card-center">Expenditure</h4>
	            </div>
	            <div class="card-content collpase show">
	                <div class="card-body">
						<form class="form form-horizontal">
							<div class="form-body">
								<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="programme_date">Date</label>
	                            	<div class="col-md-9">
	                            		<input type="date" id="programme_date" class="form-control" placeholder="Date" name="programme_date">
	                            	</div>
		                        </div>
		                        <br>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="cost">Cost</label>
	                            	<div class="col-md-9">
	                            		<input type="text" id="cost" class="form-control" placeholder="cost" name="cost">
	                            	</div>
		                        </div>

								<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="remark">Remark</label>
	                            	<div class="col-md-9">
	                            		<input type="text" id="remark" class="form-control" placeholder="remark" name="remark">
	                            	</div>
		                        </div>
	                			

							<div class="form-actions center">
	                            <button type="button" class="btn btn-danger mr-1">
	                            	<i class="ft-x"></i> Cancel
	                            </button>
	                            <button type="submit" class="btn btn-primary" name="save">
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
					<div class="card my-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Expenditure Records
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Date</th>
                                            <th>icome Type</th>
                                            <th>Total Amount</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
											<th>SN</th>
                                            <th>Date</th>
                                            <th>icome Type</th>
                                            <th>Total Amount</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
										<?php
											$sn=1;
											$sql = "SELECT * FROM expenditure";
											$result = $con->query($sql);
		
											if ($result->num_rows > 0) {
											// output data of each row
												while($row = $result->fetch_assoc()) {
													$id = $row['id'];
													$date = $row['date'];
													$cost = $row['cost'];
													echo '
														<tr>
														<td>'.$sn.'</td>
														<td>'.$date.'</td>
														<td>'.$cost.'</td>
														<td>'.$cost.'</td>
														</tr>
													';
													$sn++;
												}
											}
										?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </main>
<?php include "footer.php"; ?>
