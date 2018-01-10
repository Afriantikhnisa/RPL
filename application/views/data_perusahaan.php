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
									<a href="<?=base_url()?>data_perusahaan">
										Data perusahaan
									</a>
								</h2>
								<ul class="nav navbar-right panel_toolbox">
									<li>
										<button type="button" id="btn-tambah" class="btn btn-primary">Tambah</button>
									</li>
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
											<th>Posisi</th>
											<th>Lulusan</th>
											<th>Deskripsi</th>
											<th>Action</th>
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
				"sAjaxSource": 	'<?php echo base_url(); ?>data_perusahaan/data',
				"aoColumns":	[
									{ "mData"	: "no"},
									{ "mData"	: "nama_perusahaan"},
									{ "mData"	: "lokasi"},
									{ "mData"	: "posisi"},
									{ "mData"	: "lulusan"},
									{ "mData"	: "deskripsi"},
									{ "mData"	: "action"}
								],
				"columnDefs": 	[
									{ className: "text-center", "targets": [0,6] },
									{ width: 30, targets: 0},
									{ width: 50, targets: 6}
									
								],
				"fixedColumns": true
			});

			$('#tabel-body').on('click', '#btn-detail', function(){
				var kode 	= $(this).data('kd');
				var url = "<?=base_url()?>alamat/detail/"+kode;
				window.location.href = url;
			});

			
			$('#btn-tambah').click(function() {
				var url = "<?=base_url()?>data_perusahaan/form_tambah/";
				window.location.href = url;
			});

			$('#tabel-body').on('click', '#btn-ubah', function(){
				var kode = $(this).data('id'); //di ambil dari contoller btn ubah di function data
				var url = "<?=base_url()?>data_perusahaan/form_edit/" + kode;
				window.location.href = url;
			});


			$('#tabel-body').on('click', '#btn-hapus', function(){
				var kode 	= $(this).data('id');
				var nama 	= $(this).data('nama_perusahaan');
				swal({
					title: "Apakah anda yakin?",
					text: "Untuk menghapus data : " + nama,
					type: "warning",
					showCancelButton: true,
					confirmButtonColor: "#DD6B55",
					confirmButtonText: "Delete",
					cancelButtonText: "Cancel",
					closeOnConfirm: false,
					closeOnCancel: false
				},
				function(isConfirm){
					if (isConfirm) {
						$.ajax({
							type: 		'ajax',
							method: 	'post',
							url: 		'<?=base_url()?>'+'data_perusahaan/hapus/' + kode,
							async: 		true,
							dataType: 	'json',
							success: 	function(response){
								if(response==true){
									tabel.api().ajax.reload();
									swal("Deleted!", "Hapus data sukses.", "success");
								}else{
									swal("ERROR", "Hapus data gagal.", "error");
								}
							},
							error: function(){
								swal("ERROR", "Hapus data gagal.", "error");
							}
						});
					} else {
						swal("Cancelled", "Hapus data dibatalkan.", "error");
					}
				});	
			});
		});
	</script>
</body>
</html>
