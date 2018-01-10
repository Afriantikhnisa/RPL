<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<!-- Meta, title, CSS, favicons, etc. -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>INFO Lowongan Pekerjaan - JEPARA</title>
	<!-- 	<link rel="shortcut icon" href="<?=base_url()?>tema/images/logo2.gif">
 -->
		<!-- Bootstrap -->
		<link href="<?=base_url()?>tema/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		<!-- Font Awesome -->
		<link href="<?=base_url()?>tema/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<!-- NProgress -->
		<link href="<?=base_url()?>tema/vendors/nprogress/nprogress.css" rel="stylesheet">
		<!-- Animate.css -->
		<link href="<?=base_url()?>tema/vendors/animate.css/animate.min.css" rel="stylesheet">

		<!-- Custom Theme Style -->
		<link href="<?=base_url()?>tema/build/css/custom.min.css" rel="stylesheet">

<!-- 		<script language='JavaScript'>
			var txt=" INFO Lowongan Pekerjaan - JEPARA ";
			var speed=300;
			var refresh=null;
			function action() { document.title=txt;
			txt=txt.substring(1,txt.length)+txt.charAt(0);
			refresh=setTimeout("action()",speed);}action();
		</script> --><!--  untuk title berjalan -->
	</head>

	<body class="login">
		<div>
			<a class="hiddenanchor" id="signup"></a>
			<a class="hiddenanchor" id="signin"></a>

			<div class="login_wrapper">
				<div class="animate form login_form">
					<section class="login_content">
						<div>
							<!-- <img src="<?=base_url()?>tema/images/logo2.gif" width="150px" height="150px"> -->
							<h2>
								<b>
								INFO LOWONGAN PEKERJAAN  JEPARA
								</b>
							</h2>
						</div>
						<form method="POST" action="<?=base_url()?>login/masuk">
							<h1>Silahkan Login</h1>
							<div>
								<input type="text" name="username" class="form-control" placeholder="Silahkan Masukan Username Anda" required="" />
							</div>
							<div>
								<input type="password" name="password" class="form-control" placeholder="Silahkan Masukan Password Anda" required="" />
							</div>
							<div>
								<button class="btn btn-default form-control" type="submit">Login</button>
							</div>
							<div class="clearfix"></div>
							<div class="separator">

								<div class="clearfix"></div>
								<br />

								<div>
									<p>INFO Lowongan Pekerjaan - JEPARA	</p>
								</div>
							</div>
						</form>
					</section>
				</div>
			</div>
		</div>
	</body>
</html>
