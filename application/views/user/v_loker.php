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
									</a> 
									
										Cari Lowongan Pekerjaan
									</a> 
								</h2>
								<div class="clearfix"></div>
							</div>
							<div class="x_content">
								<form name="form-cari" id="form-cari" data-parsley-validate method="POST" class="form-horizontal" enctype="multipart/form-data" action="">
									<div class="row">
										<div class="col-md-6 col-sm-12 col-xs-12">
											<!-- <div class="form-group">
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

											 -->
											 <br>
											 <div class="form-group">
												<label class="col-md-4 col-sm-4 col-xs-12 label-control">Pilih Posisi Pekerjaan</label>
												<div class="col-md-8 col-sm-8 col-xs-12">
													<select id="posisi_a" name="posisi_a" class="form-control selectpicker" required="required" title="-- Pilih Posisi Pekerjaan --">
															<option value="Marketing">Marketing</option>
															<option value="Finance">Finance</option>
															<option value="Operator">Operator</option>
															<option value="Manajer">Manajer</option>
															<option value="Qc">Quality Control</option>
													</select>
												</div>
												<input id="posisi" name="posisi" type="hidden" class="form-control" placeholder=""  >
											</div>
											<div class="form-group">
												<label class="col-md-4 col-sm-4 col-xs-12 label-control">  Pilih Pendidikan Terakhir</label>
												<div class="col-md-8 col-sm-8 col-xs-12">
													<select id="lulusan_a" name="lulusan_a" class="form-control selectpicker" required="required" title="-- Pilih Pendidikan --">
															<option value="SLTP Sederajat">SLTP Sederajat</option>
															<option value="SLTA Sederajat">SLTA Sederajat</option>
															<option value="S1">S1</option>
															<option value="S2">S2</option>
													</select>
												</div>
												<input id="lulusan" name="lulusan" type="hidden" class="form-control" placeholder="">
											</div>
											
											<div class="form-group">
												<label class="col-md-4 col-sm-4 col-xs-12 label-control"></label>
												<div class="btn-group col-md-8 col-sm-8 col-xs-12 " >
													<button type="submit" id="btn-cari" class="btn btn-warning">Cari</button>
													<a href="<?=base_url()?>loker" class="btn btn-danger">Cari Semua</a>
												</div>
											</div>
												
											
										</div>
										<br>
									</div>
									<br><br>
									<div class="x_content">
										<table id="tabel-data" class="table table-bordered table-striped table-hover">
											<thead>
												<tr>
													<th>No</th>
													<th>Nama Perusahaan</th>
													<th>Lokasi</th>
													<th>Posisi</th>
													<th>Lulusan</th>
													<th>Deskripsi</th>
													
												</tr>
											</thead>
											<tbody id="tabel-body">
												<?php 
													$nomor = 0;
													foreach($loker as $tampil){
												 	$nomor = $nomor + 1;
												 ?>
												<tr>
													<td><?php echo $nomor ?></td>
													<td><?php echo $tampil->nama_perusahaan ?></td>
													<td><?php echo $tampil->lokasi ?></td>
													<td><?php echo $tampil->posisi ?></td>
													<td><?php echo $tampil->lulusan ?></td>
													<td><?php echo $tampil->deskripsi ?></td>
												</tr>
												<?php } ?>
											</tbody>
										</table>
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
		
			$('#posisi_a').on('change',function(){
				var posisi = $('#posisi_a').val();
				$('#posisi').val(posisi);
			})

			$('#lulusan_a').on('change',function(){
				var lulusan = $('#lulusan_a').val();
				$('#lulusan').val(lulusan);
			})

				var tabel = $('#tabel-data').dataTable({
					"bProcessing": 	true,
					"bAutoWidth": 	true,
					"bPage": 	false,
					"bFilter": 	false,
					"bPaginate": 	false,
					"bSort": 		false,
					"lengthMenu": 	[ 25, 50, 75, 100 ],
					"fixedColumns": true
				});



		});

	</script>
</body>
</html>