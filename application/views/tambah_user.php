<!DOCTYPE html>
<html>
<?php include(__DIR__ . "/tittle.php"); ?>
<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<?php include(__DIR__ . "/sidebar.php"); ?>
			<?php include(__DIR__ . "/top_nav.php"); ?>

			<!-- page content -->
			<div class="right_col" role="main">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="x_panel">
							<div class="x_title">
								<h2>
									<a href="<?=base_url()?>">
										<i class="fa fa-home"></i>
									</a> \ 
									<a href="<?=base_url()?>data_user">
										Data User
									</a> \ 
									<a href="#">
										Tambah Data User
									</a>
								</h2>
								<div class="clearfix"></div>
							</div>
							<div class="x_content">
								<form name="form-tambah" id="form-tambah" data-parsley-validate method="POST" class="form-horizontal" enctype="multipart/form-data" action="<?=base_url()?>data_user/tambah">
									<div class="row">
										<div class="col-md-6 col-sm-12 col-xs-12">
											<div class="form-group">
												<label class="col-md-4 col-sm-4 col-xs-12 label-control">Username *</label>
												<div class="col-md-8 col-sm-8 col-xs-12">
													<input id="id_user" name="id_user" class="form-control" placeholder="Username" type="hidden">
													<input id="username" name="username" class="form-control" placeholder="Username" required="required">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-4 col-sm-4 col-xs-12 label-control">Password</label>
												<div class="col-md-8 col-sm-8 col-xs-12">
													<input id="password" type="password" name="password" class="form-control" placeholder="Password">
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-md-4 col-sm-4 col-xs-12 label-control">Level *</label>
												<div class="col-md-8 col-sm-8 col-xs-12">
													<select id="level" name="level" class="form-control selectpicker" required="required" title="-- Pilih Level --">
														<option value="Admin">Admin</option>
														<option value="User">User</option>
													</select>
												</div>
											</div>
											
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="btn-group">
												<button type="reset" id="btn-batal" class="btn btn-warning">Batal</button>
												<button type="submit" id="btn-simpan" class="btn btn-success">Simpan</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /page content -->
			
			<!-- footer content -->
			<footer>
				<div class="pull-right">
				Info Lowongan Pekerjaan Jepara 
				</div>
				<div class="clearfix"></div>
			</footer>
			<!-- /footer content -->
		</div>
	</div>
	<?php include(__DIR__ . "/load_js.php"); ?>
	<script>
		$(document).ready(function(){
			
			$('#btn-batal').click(function() {
				var url = "<?=base_url()?>data_user";
				window.location.href = url;
			});

		});
	</script>
</body>
</html>
