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
								<form name="form-tambah" id="form-tambah" data-parsley-validate method="POST" class="form-horizontal" enctype="multipart/form-data" action="<?=base_url()?>data_perusahaan/edit">
									<?php 
									foreach ($perusahaan as $perusahaan) {
									 
									  ?>
									<div class="row">
										<div class="col-md-6 col-sm-12 col-xs-12">
											<div class="form-group">
												<label class="col-md-4 col-sm-4 col-xs-12 label-control">Nama Perusahaan *</label>
												<div class="col-md-8 col-sm-8 col-xs-12">
													<input id="id_perusahaan" value="<?=$perusahaan->id_perusahaan?>" name="id_perusahaan" class="form-control" placeholder="Nama Perusahaan" type="hidden">
													<input id="nama_perusahaan" value="<?=$perusahaan->nama_perusahaan?>" name="nama_perusahaan" class="form-control" placeholder="Nama Perusahaan" required="required">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-4 col-sm-4 col-xs-12 label-control">Lokasi *</label>
												<div class="col-md-8 col-sm-8 col-xs-12">
													
													<textarea id="lokasi" value="<?=$perusahaan->lokasi?>" name="lokasi" class="form-control" placeholder="Lokasi"><?=$perusahaan->lokasi?></textarea>
												</div>
											</div>	
											<div class="form-group">
												<label class="col-md-4 col-sm-4 col-xs-12 label-control">Posisi *</label>
												<div class="col-md-8 col-sm-8 col-xs-12">
													<select id="posisi" value="<?=$perusahaan->posisi?>" name="posisi" class="form-control selectpicker" required="required" title="-- Pilih Posisi Pekerjaan --">
														<?php 
															if($perusahaan->posisi == 'Marketing'){
														?>			
															<option value="Marketing" selected>Marketing</option>
															<option value="Finance">Finance</option>
															<option value="Operator">Operator</option>
															<option value="Manajer">Manajer</option>
															<option value="Qc">Quality Control</option>
														<?php }
														elseif($perusahaan->posisi == 'Finance') { 
														?>
															<option value="Marketing" >Marketing</option>
															<option value="Finance" selected>Finance</option>
															<option value="Operator">Operator</option>
															<option value="Manajer">Manajer</option>
															<option value="Qc">Quality Control</option>
														<?php }
														elseif($perusahaan->posisi == 'Operator') { 
														?>
															<option value="Marketing" >Marketing</option>
															<option value="Finance" >Finance</option>
															<option value="Operator" selected>Operator</option>
															<option value="Manajer">Manajer</option>
															<option value="Qc">Quality Control</option>
														<?php }
														elseif($perusahaan->posisi == 'Manajer') { 
														?>
															<option value="Marketing" >Marketing</option>
															<option value="Finance" >Finance</option>
															<option value="Operator" >Operator</option>
															<option value="Manajer" selected>Manajer</option>
															<option value="Qc">Quality Control</option>
														<?php }
														elseif($perusahaan->posisi == 'Qc') { 
														?>
															<option value="Marketing" >Marketing</option>
															<option value="Finance" >Finance</option>
															<option value="Operator" >Operator</option>
															<option value="Manajer" >Manajer</option>
															<option value="Qc" selected>Quality Control</option>
														<?php }	 ?>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-4 col-sm-4 col-xs-12 label-control">Pendidikan *</label>
												<div class="col-md-8 col-sm-8 col-xs-12">
													<select id="lulusan" value="<?=$perusahaan->lulusan?>" name="lulusan" class="form-control selectpicker" required="required" title="-- Pilih Pendidikan --">
														<?php 
															if($perusahaan->lulusan == 'SLTP Sederajat'){
														?>			
															<option value="SLTP Sederajat" selected>SLTP Sederajat</option>
															<option value="SLTA Sederajat">SLTA Sederajat</option>
															<option value="S1">S1</option>
															<option value="S2">S2</option>
		
														<?php }
														elseif($perusahaan->lulusan == 'SLTA Sederajat') { 
														?>
															<option value="SLTP Sederajat" >SLTP Sederajat</option>
															<option value="SLTA Sederajat" selected>SLTA Sederajat</option>
															<option value="S1">S1</option>
															<option value="S2">S2</option>
														<?php }
														elseif($perusahaan->lulusan == 'S1') { 
														?>
															<option value="SLTP Sederajat" >SLTP Sederajat</option>
															<option value="SLTA Sederajat" >SLTA Sederajat</option>
															<option value="S1" selected>S1</option>
															<option value="S2">S2</option>
														<?php }
														elseif($perusahaan->lulusan == 'S2') { 
														?>
															<option value="SLTP Sederajat" >SLTP Sederajat</option>
															<option value="SLTA Sederajat" >SLTA Sederajat</option>
															<option value="S1" >S1</option>
															<option value="S2" selected>S2</option>
														<?php } ?>
															 
													</select>
												</div>
											</div>	
											<div class="form-group">
												<label class="col-md-4 col-sm-4 col-xs-12 label-control">Deskripsi</label>
												<div class="col-md-8 col-sm-8 col-xs-12">
													<!-- <input id="deskripsi" value="<?=$perusahaan->deskripsi?>" type="text" name="deskripsi" class="form-control" placeholder="Deskripsi">
													 -->
													 <textarea id="deskripsi" value="<?=$perusahaan->deskripsi?>" name="deskripsi" class="form-control" placeholder="Deskripsi"><?=$perusahaan->deskripsi?></textarea>
												</div>
											</div>
											
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="btn-group">
												<button type="reset" id="btn-batal" class="btn btn-warning">Batal</button>
												<button type="submit" id="btn-simpan" class="btn btn-success">Edit</button>
											</div>
										</div>
									</div>
									<?php } ?>
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
