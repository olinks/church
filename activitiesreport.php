<?php include "head.php"; ?>
<?php include "sidebar.php"; ?>
<div id="layoutSidenav_content">
	<main>
		<div class="container-fluid px-4">
			<h1 class="mt-4">Activities Report</h1>
			<ol class="breadcrumb mb-4">
				<li class="breadcrumb-item active">Dashboard</li>
			</ol>
		</div>
		<div>
			<div class="row justify-content-md-center">
				<div class=" col-xl-11 col-lg-11 col-md-11">
					<div class="card mb-4">
						<div class="card-header">
							<i class="fas fa-table me-1"></i>
							Activities Records
						</div>
						<div class="card-body">
							<table id="datatablesSimple">
								<thead>
									<tr>
										<th>SN</th>
										<th>Programme</th>
										<th>Date</th>
										<th>Start Time</th>
										<th>End Time</th>
										<th>Preacher</th>
										<th>Male Attd.</th>
										<th>Female Attd.</th>
										<th>Children Attd.</th>
										<th>First Timer Attd.</th>
										<th>New Convert</th>
										<th>Total Attdn.</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th>SN</th>
										<th>Programme</th>
										<th>Date</th>
										<th>Start Time</th>
										<th>End Time</th>
										<th>Preacher</th>
										<th>Male Attd.</th>
										<th>Female Attd.</th>
										<th>Children Attd.</th>
										<th>First Timer Attd.</th>
										<th>New Convert</th>
										<th>Total Attdn.</th>
									</tr>
								</tfoot>
								<tbody>
									<?php
										$sn=1;
										$sql = "SELECT * FROM activities";
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
				</div>
			</div>
		</div>
    </main>
<?php include "footer.php"; ?>
