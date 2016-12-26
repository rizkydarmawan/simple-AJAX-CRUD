<?php
// ob_start();
include '../koneksi.php';
?>
<style type="text/css">
	table{
		border-collapse: collapse;
	}
</style>
<table border="1">
	<thead>
		<th>NO</th>
		<th>Nama</th>
		<th>Usia</th>
		<th>Action</th>
	</thead>
	<tbody>
	<?php
	$no =1;
	$sql = "SELECT*FROM siswa";
	$result = $conn->query($sql);
	foreach ($result as $siswa){
	?>
		<tr>
			<td> <?= $no++ ?> </td>
			<td > <?= $siswa['nama'] ?></td>
			<td > <?= $siswa['usia']?></td>
			<td> 
					<a href="" class="edit" name="edit" data-id="<?= $siswa['id'] ?>"> Edit </a>
					<a href="" class="hapus" data-id="<?= $siswa['id'] ?>">Hapus</a>
			</td>
		</tr>
	<?php
		}
	?>
	</tbody>
</table>