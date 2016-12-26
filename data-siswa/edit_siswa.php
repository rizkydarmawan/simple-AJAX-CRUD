<?php
include_once '../koneksi.php';
$id = @$_POST['id'];
$SQL = "SELECT*FROM siswa WHERE id = '$id'";
$result = $conn->query($SQL);
$data = $result->fetch_assoc();
?>
<h4> Edit Siswa</h4>
		<input type="hidden" id="id" value="<?= $id ?>">
		<input type="text" name="nama" id="nama" value="<?= $data['nama']; ?>"><br>
		<input type="text" name="usia" id="usia" value="<?= $data['usia']; ?>"><br>
		<input type="submit" name="submit" id="editSub" value="Edit">