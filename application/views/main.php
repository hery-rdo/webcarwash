<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>

	<!-- materializecss -->	
  <!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

  <!-- jquery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/core.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- app -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/core.js"></script>

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col s12">
				This div is 12-columns wide on all screen sizes
				<a class="waves-effect waves-light btn modal-trigger" href="#login">Login</a>
			</div>
			<div class="col s6">6-columns (one-half)</div>
			<div class="col s6">6-columns (one-half)</div>
		</div>
	</div>

	<!-- Login Modal Structure -->
	<div id="login" class="modal">
		<div class="modal-content">
			<div class="row">
				<div class="col s12">
					<h4>Login</h4>
				</div>
			<div class="row">
				<div class="input-field col s6">
					<i class="material-icons prefix">account_circle</i>
					<input id="email" type="email" class="validate">
					<label for="email" data-error="wrong" data-success="right">E-mail</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<i class="material-icons prefix">account_circle</i>
					<input id="password" type="password">
					<label for="password" data-error="wrong" data-success="right">Password</label>
				</div>
			</div>


			</div>
		</div>
		<div class="modal-footer">
			<a href="#!" class="waves-effect waves-green btn-flat">Login</a>
		</div>
	</div>

</body>
</html>