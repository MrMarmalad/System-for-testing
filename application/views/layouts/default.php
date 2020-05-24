<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>

	<!-- <script src="/public/scripts/jquery.js"></script>
	<script src="/public/scripts/form.js"></script> -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<!-- <link rel="stylesheet" href="/public/styles/default.css"> -->
	<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> -->
	<?php
		if (isset($custom_scripts) && is_array($custom_scripts))
		{
			foreach ($custom_scripts as $key => $value) {
				echo $value;
			}
		}
	 ?>
</head>
<body class="page">
	<nav class="navbar navbar-dark bg-primary navbar-expand-lg">
		<a href="#" class="navbar-brand">
			<img src="public/recources/mstucaEmblem.png" width="50" height="65" alt="">
		</a>
  <a class="navbar-brand" href="#">Система тестирования</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Главная страница <span class="sr-only">(current)</span></a>
      </li>
			<li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal"
				data-target="#AuthModal">Вход в систему</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Обратиться к администратору</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">О программе</a>
      </li>
    </ul>
  </div>
</nav>


<div class="modal fade" id="AuthModal" tabindex="-1" role="dialog"
aria-labelledby="AuthModal" aria-hidden="true">
<div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="AuthModalLabel">Войти</h5>
			<button class="close" type="button" data-dismiss="modal">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md">
							<form id="modalFormLogin">
								<div class="form-group">
									<label for="exampleInputEmail1">Логин</label>
									<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									<small id="emailHelp" class="form-text text-muted">Выдается администратором системы</small>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Пароль</label>
									<input type="password" class="form-control" id="exampleInputPassword1">
								</div>
								<!-- <div class="form-group form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Check me out</label>
								</div> -->
								<!-- <button type="submit" class="btn btn-primary">Submit</button> -->
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<div class="row">
					<div class="col-md-12 text-right">
						<div class="text-left">
 							<button type="submit" class="btn btn-primary" form="modalFormLogin">
								Войти
							</button>
 							<button class="btn btn-secondary "type="button" name="button">
 								Забыли логин или пароль
 							</button>
 						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>

</div>
</div>
	<!-- <nav class="navbar navbar-dark bg-primary">
		<a href="#" class="navbar-brand">
			<img src="public/recources/mstucaEmblem.png" width="50" height="65" alt="">
		</a>
		<button class="navbar-toggler" type="button"  data-toggle="collapse"
		data-target="#navbarSupport">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapsenavbar-collapse" id="navbarSupprotedContent">
			<ul class="navbar-nav mr-auto">
				<li>
					<a href="#" class="nav-link">Home</a>
				</li>
				<li>
					<a href="#" class="nav-link">Home</a>
				</li>
				<li>
					<a href="#" class="nav-link">Home</a>
				</li>
			</ul>
		</div>
	</nav> -->
	<div class="container-fluid">
		<div class="row">
			<div class="col md-12">

			</div>
		</div>
	</div>
	<?php echo $content; ?>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
