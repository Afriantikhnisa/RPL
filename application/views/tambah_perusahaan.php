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
									<a href="<?=base_url()?>data_perusahaan">
										Data Perusahaan
									</a> \ 
									<a href="#">
										Tambah Data Perusahaan
									</a>
								</h2>
								<div class="clearfix"></div>
							</div>
							<div class="x_content">
								<form name="form-tambah" id="form-tambah" data-parsley-validate method="POST" class="form-horizontal" enctype="multipart/form-data" action="<?=base_url()?>data_perusahaan/tambah">
									<div class="row">
										<div class="col-md-6 col-sm-12 col-xs-12">
											<div class="form-group">
												<label class="col-md-4 col-sm-4 col-xs-12 label-control">Nama Perusahaan *</label>
												<div class="col-md-8 col-sm-8 col-xs-12">
													<input id="id_perusahaan" name="id_perusahaan" class="form-control" placeholder="Nama Perusahaan" type="hidden">
													<input id="nama_perusahaan" name="nama_perusahaan" class="form-control" placeholder="Nama Perusahaan" required="required">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-4 col-sm-4 col-xs-12 label-control">Lokasi *</label>
												<div class="col-md-8 col-sm-8 col-xs-12">
													
													<textarea id="lokasi"  name="lokasi" class="form-control" placeholder="Lokasi"></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-4 col-sm-4 col-xs-12 label-control">Posisi *</label>
												<div class="col-md-8 col-sm-8 col-xs-12">
													<select id="posisi" name="posisi" class="form-control selectpicker" required="required" title="-- Pilih Posisi Pekerjaan --">
															<option value="Marketing">Marketing</option>
															<option value="Finance">Finance</option>
															<option value="Operator">Operator</option>
															<option value="Manajer">Manajer</option>
															<option value="Qc">Quality Control</option>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-4 col-sm-4 col-xs-12 label-control">Pendidikan *</label>
												<div class="col-md-8 col-sm-8 col-xs-12">
													<select id="lulusan" name="lulusan" class="form-control selectpicker" required="required" title="-- Pilih Pendidikan --">
															<option value="SLTP Sederajat">SLTP Sederajat</option>
															<option value="SLTA Sederajat">SLTA Sederajat</option>
															<option value="S1">S1</option>
															<option value="S2">S2</option>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-4 col-sm-4 col-xs-12 label-control">Deskripsi</label>
												<div class="col-md-8 col-sm-8 col-xs-12">
													<!-- <input id="deskripsi" type="text" name="deskripsi" class="form-control" placeholder="Deskripsi"> -->
													<textarea id="deskripsi"  name="deskripsi" class="form-control" placeholder="Deskripsi"></textarea>
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
				var url = "<?=base_url()?>data_perusahaan";
				window.location.href = url;
			});

		});
	</script>
</body>
</html>
