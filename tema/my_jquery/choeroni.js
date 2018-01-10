$('.angka_saja').on('keyup',function(){
	if ($(this).val()=='') {
		$(this).val('0');
	}
	if (isNaN($(this).val())) {
		$(this).val('0');
	}
	// $(this).val(parseInt($(this).val()));
	$(this).val(parseFloat($(this).val()));
});

$('.form-control').on('keyup',function(e){
	if (e.keyCode==222) {
		var amankan 	= $(this).val();
		$(this).val(amankan.replace("'","`"));
	}
});

$('.tanggal').datepicker({
	format : "dd-mm-yyyy",
	autoclose : true
});

$('.ribuan').on('keyup', function(e){
	var bilangan		= $(this).val();
	var prefix			= '';
	var number_string 	= bilangan.replace(/[^,\d]/g, '').toString(),
		split	= number_string.split(','),
		sisa 	= split[0].length % 3,
		rupiah 	= split[0].substr(0, sisa),
		ribuan 	= split[0].substr(sisa).match(/\d{1,3}/gi);
		
	if (ribuan) {
		separator = sisa ? '.' : '';
		rupiah += separator + ribuan.join('.');
	}
	
	rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
	return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
});

$('.ribuan').on('keydown', function(event) {
	key = event.which || event.keyCode;
	if ( 	key != 188 // Comma
		 && key != 8 // Backspace
		 && key != 17 && key != 86 & key != 67 // Ctrl c, ctrl v
		 && (key < 48 || key > 57) // Non digit
		 // Dan masih banyak lagi seperti tombol del, panah kiri dan kanan, tombol tab, dll
		) 
	{
		event.preventDefault();
		return;
	}
});