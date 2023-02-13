<?php include "connection/Database.php"; ?>
<?php include "head.php"; ?>
<?php include "sidebar.php"; ?>

<?php
	if(isset($_POST['save'])){
		$income_type = $_POST['income_type'];
		$date = $_POST['programme_date'];
		$total = $_POST['amount'];

		$sql = "INSERT INTO income (id,income_type,amount,form,date,remark)
		 VALUES (NULL,$income_type, $total, '1', '$date', '')";
		$q = $db->query($sql);
		if($q){
			echo "<script> alert('Record Submitted Successfully'); </script>";
		}else{
			echo "<script> alert('Error'); </script>";
		}
	}
?>

	<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Income</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <div>
         <div class="row justify-content-md-center">
		<div class=" col-xl-6 col-lg-8 col-md-10">
	        <div class="card">
	            <div class="card-header">
	                <h4 class="card-title" id="horz-layout-card-center">Income Record</h4>
	            </div>
	            <div class="card-content collpase show">
	                <div class="card-body">
						<form class="form form-horizontal" method="POST">
							<div class="form-body">
								<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="income_type">Income Type</label>
	                            	<div class="col-md-9">
			                            <select id="income_type" name="income_type" class="form-control" required>
			                                <option >- Select -</option>
			                                <option value="1">Offering</option>
			                                <option value="2">Tithe</option>
			                                <option value="3">Thanks Giving</option>
			                            </select>
		                            </div>
		                        </div>
		                        <br>
								<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="programme_date">Date</label>
	                            	<div class="col-md-9">
	                            		<input type="date" id="programme_date" class="form-control" placeholder="Date" name="programme_date" required>
	                            	</div>
		                        </div>
		                        <br>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="amount">Total Amount</label>
	                            	<div class="col-md-9">
	                            		<input type="text" id="amount" class="form-control" placeholder="amount" name="amount" required>
	                            	</div>
		                        </div>
								<br>
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
					<div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Income Records
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
											$sql = "SELECT * FROM income";
											$result = $con->query($sql);
		
											if ($result->num_rows > 0) {
											// output data of each row
												while($row = $result->fetch_assoc()) {
													$id = $row['id'];
													$date = $row['date'];
													$income_type = $row['income_type'];
													$amount = $row['amount'];
													echo '
														<tr>
														<td>'.$sn.'</td>
														<td>'.$date.'</td>
														<td>'.$income_type.'</td>
														<td>'.$amount.'</td>
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
                <script>
                	function my_submit(){
                		confirm('Do you want to Submit ?');
                	}
                </script>
<?php include "footer.php"; ?>
