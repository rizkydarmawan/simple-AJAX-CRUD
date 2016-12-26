$(document).ready(function(){
		// Tambah Data
		$("#proses").click(function(){
			$("#wrapp").hide().load("input_siswa.php").fadeIn(1000);
		});
		$("#wrapp").on('click','#submit',function(){
			event.preventDefault();
			var nama = $('#nama').val();
			var usia = $('#usia').val();
			$.ajax({
				method : 'POST',
				url  : 'proses_siswa.php?page=add',
				data : { nama : nama, usia : usia },
				success : function(data){
					$(".wrapper").load("ls_siswa.php");
				}
			});
		});
		$('#wrapp_siswa').on('click','.edit',function(){
			event.preventDefault();
			 id = $(this).attr('data-id');
			$.ajax({
				url : 'edit_siswa.php',
				method : 'POST',
				data : { id : id },
				success : function(data){
					$('#wrapp').hide().fadeIn(1000).html(data);
				}
			});
		});
		$("#wrapp").on('click','#editSub',function(){
			var nama = $('#nama').val();
			var usia = $('#usia').val();
			var id   = $('#id').val();
			$.ajax({
				url		 : "proses_siswa.php?page=edit",
				method : "POST",
				data 	 : { nama : nama, usia : usia, id : id},
				success : function(){
				  $(".wrapper").load("ls_siswa.php");
				  $("#wrapp").fadeOut(400);
				}
			});
		});
		$('.wrapper').on('click','.hapus',function(){
			event.preventDefault();
			id = $(this).attr('data-id');
			var conf = confirm("Yakin Menghapus?");
			if (conf == true){
				$.ajax({
					url : 'proses_siswa.php?page=delete',
					method : 'POST',
					data : { id : id },
					success : function(data){
							$(".wrapper").load("ls_siswa.php");
							$('#wrapp').hide();
					}
				});
			};
		});
		$("#refresh").click(function(){
			$("#wrapp_siswa").fadeOut(300).fadeIn(300);
			window.location = "index.php";

		});
	});