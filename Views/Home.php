</html>
<!doctype html>
<html lang="en">
  <head>
  	<title><?= $data['page_tag'] ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<link rel="stylesheet" href="<?= media() ?>/css/style_login.css">

		<link rel="manifest" href="./manifest.json">

	</head>
	<body>
	<section class="ftco-section">

		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
			      		<div class="icon d-flex align-items-center justify-content-center">
			      			<span class="fa fa-user-o"></span>
			      		</div>
		      			
		      			<h3 class="text-center mb-4">INICIAR SESIÓN</h3>
		      			<div id="mensaje"></div>
							<form class="login-form" id="form_login" name="form_login">
				      		<div class="form-group">
				      			<input type="text" class="form-control rounded-left" name="text-user" id="text-user" placeholder="USUARIO" required autocomplete="off">
				      		</div>
				            <div class="form-group d-flex">
				              <input type="password" class="form-control rounded-left" name="text-pass" id="text-pass" placeholder="CONTRASEÑA" required autocomplete="off">
				            </div>
				            <div class="form-group">
				            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">INICIAR SESIÓN</button>
				            </div>
			          </form>
	        		</div>
				</div>
			</div>
		</div>
	</section>

	<script>
		const base_url = "<?= base_url(); ?>";
	</script>

	<script src="<?= media() ?>/js/jquery.min.js"></script>
	<script src="<?= media() ?>/js/popper.js"></script>
	<script src="<?= media() ?>/js/bootstrap.min.js"></script>
	<script src="<?= media() ?>/js/main.js"></script>
	<script src="<?= media() ?>/js/app.js"></script>
	<script src="<?= media() ?>/js/project/<?= $data['data_functions_js'] ?>"></script>


	</body>
</html>

