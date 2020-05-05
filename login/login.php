<?php
// bắt đầu sử dụng session
session_start();
require_once "../config/utils.php";

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo BASE_URL . 'public/css/main.css' ?>">
	<style>
		.hidden {
			display: <?php echo $_GET['style'] ?>
		}
	</style>
</head>
</head>

<body>
	<div class="container">
		<div class="row pt-5">
			<div class="col-4 offset-4">

				<form action="./post-login.php" method="post" autocomplete="on">
					<div class="d-flex justify-content-center login-logo">
						<a href="<?php echo BASE_URL ?>">
							<img src="<?php echo PUBLIC_URL . 'admin/img/logo.png' ?>" alt="" class="img-thumbnail">
						</a>
					</div>
					<div class="d-flex justify-content-center">
						<?php if (isset($_GET['msg'])) : ?>
							<span class="text-danger"><?php echo $_GET['msg'] ?></span>
						<?php endif; ?>
					</div>
					<div class="d-flex justify-content-center">
						<?php if (isset($_GET['messages'])) : ?>
							<span class="text-danger"><?php echo $_GET['messages'] ?></span>
						<?php endif; ?>
					</div>
					<div class="form-group">
						<label for="email">Email address</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Nhập Email" autofocus>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" name="password">
					</div>
					<div class="form-group">
						<a href="<?php echo BASE_URL . 'login/register.php' ?>" class="text-danger hidden"><ins>Chưa có tài khoản, đi tới đăng ký</ins></a>&nbsp;
					</div>
					<div class="d-flex justify-content-center">
						<button type="submit" class="btn btn-primary">Submit</button>&nbsp;
						<a href="<?php echo BASE_URL ?>" class="btn btn-danger">Cancel</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>