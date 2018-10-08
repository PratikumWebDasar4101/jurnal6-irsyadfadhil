<?php
require_once("db.php");
$nama			= $_POST['nama'];
$nim 			= $_POST['nim'];
$kelas 			= $_POST['kelas'];
$jeniskelamin	= $_POST['jeniskelamin'];
$hobi 			= $_POST['hobi'];
$fakultas 		= $_POST['fakultas'];
$alamat 		= $_POST['alamat'];

$list_hobi = implode(", ", $hobi);

$query = "INSERT INTO mahasiswa(nama, nim, kelas, jeniskelamin, hobi, fakultas, alamat)
		VALUES ('$nama','$nim','$kelas','$jeniskelamin','$list_hobi','$fakultas','$alamat')";

if (mysqli_query($conn, $query)) {
	echo "Data baru berhasil di tambah";
}else {
	echo "Error :".$query."<br>". mysqli_error($conn);
}

mysqli_close($conn);
echo "<br>";
echo "<a href='login.php'>Silahkan lihat data anda</a>";
?>
