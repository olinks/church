<?php 
session_start();
require "connection\Database.php";
include "loginheader.php";
?>

<?php

	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		$password = $_POST['password'];

		$query = "SELECT * FROM users WHERE username='".$email."' AND password='".$password."'";
		$rs = $db -> query($query);
		if($rs){
			$user = $rs->fetch_assoc();
			echo 'Success id'.$user['role_id'];
			$_SESSION['role_id'] = $user['role_id'];
			header("Location: dashboard.php");
		}else{
			echo 'Fail';
		}
	}

?>

    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="index.php">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="input" name="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div>
                                            <div>
                                            	<input class="btn btn-primary" type="submit" name="submit" value="Login">
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Forgot Password?</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>

<?php include "loginfooter.php"; ?>
