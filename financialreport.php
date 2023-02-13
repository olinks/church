<?php include "head.php"; ?>
<?php include "sidebar.php"; ?>
<?php include "connection/Database.php"; ?>

	<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Financial</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
					<div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Financial Report
                            </div>

							<div class="card-body">
									<label>From</label>
									<input name="from" id="from" type="date">
									<label>To</label>
									<input name="to" id="to" type="date">
									<input type="submit" value="fetch" name="submit" id="fetch" class="btn btn-primary">
							</div>
                            <div class="card-body">
                                <table id="datatablesSimple" name="recordTable">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>income Type</th>
                                            <th>Office</th>
                                            <th>Amount</th>
                                            <th>date</th>
                                        </tr>
                                    </thead>
                                    <tbody id="frow">
                                    </tbody>
									<tfoot>
										<tr>
											<th></th>
                                            <th>income Type</th>
                                            <th>Office</th>
                                            <th>Amount</th>
                                            <th>date</th>
										</tr>
									</tfoot>
									<tr>
										<td></td>
										<td></td>
										<td></td>
										<td id="total"><b>Total:</b><p id="sum"></p></td>
										<td></td>
									</tr>
                                </table>
                            </div>
                        </div>
 
                </main>
<?php include "footer.php"; ?>
<script>
	$(document).ready(function (){
		// $("#datatablesSimple").addClass("bg-primary");
		var c = 0;
		$("#fetch").on('click',function (e){
			var from = $('#from').val();
			var to = $('#to').val();
			console.log(from + "- from = to -" + to)
			$.ajax({
				url: "modules/Report.php",
				method: "post",
				data: {from: from, to: to},
				success: function(res){
					console.log("success");
					console.log(res);
					$("#frow").html("");
					data = JSON.parse(res);
					$.each(data,function(i,d){
						$("#frow").append(
							"<tr>"
							+
							"<td></td>"
							+
							"<td>"+d.income_type+"</td>"
							+
							"<td></td>"
							+
							"<td>"+d.amount+"</td>"
							+
							"<td>"+d.date+"</td>"
							+
							""
							+
							"</tr>"
						)
						c = c + d.amount;
					});
				},
				error: function(res){
					console.log(res);
				}
			});
			$("#sum").text(""+c+"");
		});

	});
</script>
