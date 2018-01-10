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
									<!-- <a href="<?=base_url()?>perusahaan"> -->
										Daftar Perusahaan
									<!-- </a> -->
								</h2>
								<ul class="nav navbar-right panel_toolbox">
									<!-- <li>
										<button type="button" id="btn-tambah" class="btn btn-primary">Tambah</button>
									</li> -->
									<li>
										<a class="collapse-link">
											<i class="fa fa-chevron-up"></i>
										</a>
									</li>
								</ul>
								<div class="clearfix"></div>
							</div>
							<div class="x_content">
								<table id="tabel-data" class="table table-bordered table-striped table-hover">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama Perusahaan</th>
											<th>Lokasi</th>
											<!-- <th>Posisi</th>
											<th>Lulusan</th> -->
											<th>Deskripsi</th>
											<!-- <th>Action</th> -->
										</tr>
									</thead>
									<tbody id="tabel-body">
									</tbody>
								</table>
							</div>
						</div>
					
						
					</div>
				</div>
			</div>
			<!-- /page content -->

			<!-- footer content -->
			<footer>
				<div class="pull-right">
				Info Lowongan Pekerjaan Jepara - Afrianti Koirun Nisa - 2017
				</div>
				<div class="clearfix"></div>
			</footer>
			<!-- /footer content -->
		</div>
	</div>
	<?php include(__DIR__ . "/load_js.php"); ?>

		<script>
		$(document).ready(function(){
			var tabel = $('#tabel-data').dataTable({
				"bProcessing": 	true,
				"bAutoWidth": 	true,
				"bSort": 		false,
				"lengthMenu": 	[ 25, 50, 75, 100 ],
				"sAjaxSource": 	'<?php echo base_url(); ?>perusahaan/data',
				"aoColumns":	[
									{ "mData"	: "no"},
									{ "mData"	: "nama_perusahaan"},
									{ "mData"	: "lokasi"},
									// { "mData"	: "posisi"},
									// { "mData"	: "lulusan"},
									{ "mData"	: "deskripsi"}
									// { "mData"	: "action"}
								],
				"columnDefs": 	[
									{ className: "text-justify", "targets": [0,3] },
									{ width: 30, targets: 0},
									{ width: 550, targets: 3}
									
								],
				"fixedColumns": true
			});

			
		});
	</script>
</body>
</html>
