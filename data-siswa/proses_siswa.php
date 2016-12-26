<?php
include_once '../koneksi.php';

$nama  = @$_POST['nama'];
$usia = @$_POST['usia'];
$id = @$_POST['id'];
if (@$_GET['page'] == 'add') {

	$SQL = "INSERT INTO siswa(nama, usia) VALUES(?,?)";
	$insert = $conn->prepare($SQL);
	$insert->bind_param('ss',$nama, $usia);
	$insert->execute();
}elseif (@$_GET['page']=='edit') {
	$SQL = "UPDATE siswa SET nama = ?, usia = ? WHERE id = '$id'";
	$edit = $conn->prepare($SQL);
	$edit->bind_param('ss',$nama, $usia);
	$edit->execute();
}elseif (@$_GET['page']=='delete') {
	$del = $conn->prepare("DELETE FROM siswa WHERE id = ?");
	$del->bind_param('i', $id);
	$del->execute();
}
?>
