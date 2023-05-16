<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
	<br/>
	<a href="uts.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA MAHASISWA</h3>
	<form name="myForm" method="post" action="tambah_aksi.php" onsubmit="return validateForm()">
		<table>
            <tr>
                <td>NIM</td>
                <td><input type="number" name="nim"></td>
            </tr>
            <tr>			
                <td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Dosen</td>
				<td><input type="text" name="dosen"></td>
			</tr>
            <tr>
				<td>Status</td>
				<!-- <td><input type="text" name="status"></td> -->
                <td>
                    <input type="radio" name="status" value="Asprak">Asprak
                    <input type="radio" name="status" value="Praktikan">Praktikan
                </td>
			</tr>
            <tr>
				<td>Ket</td>
				<!-- <td><input type="text" name="ket"></td> -->
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

    <script>
        function validateForm() {
            var nim = document.forms["myForm"]["nim"].value;
            var nama = document.forms["myForm"]["nama"].value;
            var dosen = document.forms["myForm"]["dosen"].value;
            var status = document.forms["myForm"]["status"].value;
            var ket = document.forms["myForm"]["ket"].value;

            if (nim == "" || nama == "" || dosen == "" || status == "" || ket == "") {
                alert("Harap lengkapi semua data dibawah!");
                return false;
            }
        }
    </script>
</body>
</html>
