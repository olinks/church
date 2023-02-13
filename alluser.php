<?php include "connection/Database.php"; ?>
<?php include "head.php"; ?>
<?php include "sidebar.php"; ?>

	<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Users</h1>
                    </div>
                    <div>
         <div class="row justify-content-md-center">
		<div class=" col-xl-11 col-lg-12 col-md-11">
                <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    <p class="card-text">
                                      All Admins List
                                    </p>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered file-export" id="datatablesSimple">
                                            <thead>
                                                <tr>
                                                <th></th>
                                                  <th>Name</th>
                                                  <th>Email</th>
                                                  <th>Gender</th>
                                                  <th>Status</th>
                                                  <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              <?php
                                    $sn=1;
                                    $sql = "SELECT * FROM users where status !='0'";
                                    $result = $con->query($sql);

                                    if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        $admin_id = $row["id"];
                                         $role_id=$row['role_id'];
                                         $first_name=$row['firstname'];
                                  			 $last_name=$row['lastname'];
                                  			 $gender=$row['gender'];
                                         $email=$row['email'];
                                         $status=$row['status'];
                                         $name = $first_name.' '.$last_name;
                                         if($status=='1')
                            					 {
                                         $status = '<span class="btn btn-info">Active</span>';
                                       }else {
                                         $status = '<span class="btn btn-danger">Suspended</span>';
                                       }
                                        echo '<tr>
                                            <td>'.$sn.'</td>
                                            <td>'.$name.'</td>
                                            <td>'.$email.'</td>
                                            <td>'.$gender.'</td>
                                            <td>'.$status.'</td>
                                            <td><div class="row">
                                                <a href="dashboard?bhu=admin_profile&id='.$admin_id.'"><button type="button" class="btn btn-sm btn-info bg-transparent text-info mr-1 mb-1">View Profile</button></a>
                                                </div></td>
                                        </tr>';

                                        $sn++;
                                        }
                                    } else {
                                    echo '<tr>
                                    <td colspan="4">0 result
                                    </td></tr>';
                                    }
                                    $con->close();
                                ?>

                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                  <th></th>
                                                  <th>Name</th>
                                                  <th>Email</th>
                                                  <th>Gender</th>
                                                  <th>Status</th>
                                                  <th>Action</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
	    </div>
	</div>
                    </div>
                </main>
<?php include "footer.php"; ?>
