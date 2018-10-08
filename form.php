<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
</head>
<body>
<center><h1>REGISTRASI</h1></center>
<hr>
<table align="center">
	<form action="submit.php" method="POST" enctype="multipart/form-data">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" maxlength="35" placeholder="Masukkan Nama anda" required></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim" minlength="10" maxlength="10" pattern="\d*" placeholder="Masukkan NIM anda" required></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td>:</td>
			<td><input type="radio" name="kelas" value="4101">41-01
				<input type="radio" name="kelas" value="4102">41-02
				<input type="radio" name="kelas" value="4103">41-03
				<input type="radio" name="kelas" value="4104">41-04</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="jeniskelamin" value="Laki-Laki">Laki-Laki
				<input type="radio" name="jeniskelamin" value="Perempuan">Perempuan</td>
		</tr>
		<tr>
			<td>Hobi</td>
			<td>:</td>
			<td><input type="checkbox" name="hobi[]" value="Membaca">Membaca<br>
				<input type="checkbox" name="hobi[]" value="Nonton">Nonton<br>
				<input type="checkbox" name="hobi[]" value="Menulis">Menulis<br>
				</td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><select name="fakultas">
				<option value="FIT">FIT</option>
				<option value="FIK">FIK</option>
				<option value="FEB">FEB</option>
				<option value="FKB">FKB</option>
				<option value="FRI">FRI</option>
				<option value="FTE">FTE</option>
			</select></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><textarea name="alamat" rows="5"></textarea></td>
		</tr>
		<tr>
			<td align="center" colspan="3"><input type="submit" name="submit" value="Submit"></td>
		</tr>
	</form>
</table>
<hr>
</body>
</html>