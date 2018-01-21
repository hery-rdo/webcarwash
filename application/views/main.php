<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title></title>

	<!-- materializecss -->	
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
	<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css" media="screen,projection">

  <!-- jquery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

  <!-- app -->
	<script src="<?php echo base_url('main/app/login.js'); ?>"></script>
	<script src="<?php echo base_url('main/app/main.js'); ?>"></script>
	<script src="<?php echo base_url('main/app/reports.js'); ?>"></script>

</head>
<body>

	<nav>
		<div class="nav-wrapper">
			<a href="#" class="brand-logo">Logo</a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a href="#">Usuários</a></li>
					<li><a href="#">Grupos</a></li>
					<li><a href="#">Clientes</a></li>
					<li><a href="#">Relatórios</a></li>
					<li><a href="#">Financeiro</a></li>
			</ul>
		</div>
	</nav>

	<div class="container">
		<div class="row">
			<div class="col s12">
				<p></p>
				<a class="waves-effect waves-light btn modal-trigger" href="#loginmodal">Login</a>
			</div>
		</div>
	</div>

	<!-- Login Modal -->
	<div id="loginmodal" class="modal">
		<div class="modal-content">
			<div class="row">
				<div class="col s12">
					<h4 class="center-align">Login</h4>
				</div>
			</div>
			<div class="row">
				<div class="col s12">
					<div class="row">
					<div class="input-field col s6">
						<i class="material-icons prefix">account_box</i>
						<input id="email" type="email" class="validate">
						<label for="email" data-error="wrong" data-success="right">E-mail</label>
					</div>
					</div>
				</div>
			</div>
			<dir class="row">
				<div class="col s12">
					<div class="row">
					<div class="input-field col s6">
						<i class="material-icons prefix">lock</i>
						<input id="password" type="password">
						<label for="password" data-error="wrong" data-success="right">Password</label>
					</div>
					</div>
				</div>
			</dir>
		</div>
		<div class="modal-footer">
			<a href="#!" class="waves-effect waves-green btn-flat"><i class="material-icons right">send</i>Login</a>
		</div>
	</div>
</body>
</html>