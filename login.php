<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<center><h1>LOGIN</h1></center>
	<hr>
	<center>
	<form action="list.php" method="POST">
		Username : <input type="text" name="nama" maxlength="35" placeholder="Masukkan Nama anda" required><br><br>
		Password : <input type="text" name="nim" minlength="10" maxlength="10" pattern="\d*" placeholder="Masukkan NIM anda" required><br><br>
		<input type="submit" name="submit">
	</form>
	</center>
	<hr>
	<a href='form.php'>Belum Registrasi?</a>
	<hr>
</body>
</html>
<?php

if(isset($_POST['login'])){
    require_once("db.php");
    $user = $_POST['nama'];
    $pass = $_POST['nim'];
    $sql = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nama='$user' && nim='$pass'");
    $num = mysqli_num_rows($sql);
    if ($num == 1) {
        session_start();
        $_SESSION['user'] = $user;
        header("location: list.php");
    }else{
        header("Location: login.php");
        echo "gagal login";
    }
}
?>