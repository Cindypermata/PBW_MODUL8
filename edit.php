<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
</head>
<body>
	<br/>
	<a href="uts.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA MAHASISWA</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"SELECT * FROM mhs WHERE id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
                    <td>NIM</td>
					<td>
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="number" name="nim" value="<?php echo $d['nim']; ?>">
					</td>
				</tr>
				<tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
				</tr>
				<tr>
					<td>Dosen</td>
					<td><input type="text" name="dosen" value="<?php echo $d['dosen']; ?>"></td>
				</tr>
                <tr>
					<td>Status</td>
					<!-- <td><input type="text" name="status" value="<?php echo $d['status']; ?>"></td> -->
                    <td>
                    <input type="radio" name="status" value="Asprak">Asprak
                    <input type="radio" name="status" value="Praktikan">Praktikan
                    </td>
				</tr>
                <tr>
					<td>Ket</td>
					<!-- <td><input type="text" name="ket" value="<?php echo $d['ket']; ?>"></td> -->
                    <td>
                    <input type="radio" name="ket" value="Hadir">Hadir
                    <input type="radio" name="ket" value="Alpha">Alpha
                    </td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>