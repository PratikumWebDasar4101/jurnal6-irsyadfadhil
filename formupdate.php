<?php
    require_once("db.php");
    $id = $_GET['id'];
    $query = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id = '$id'");
    $row = mysqli_fetch_assoc($query);
    
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Update Data</title>
</head>
<body>
    <center><h1>Form Update Data</h1></center>
    <table align="center">
    <form method="post">
<tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" maxlength="35" placeholder="Masukkan Nama anda" required value="<?php echo $row['nama']?>"></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><input type="text" name="nim" minlength="10" maxlength="10" pattern="\d*" placeholder="Masukkan NIM anda" required value="<?php echo $row['nim']?>"></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><input type="radio" name="kelas" value="<?php echo $row['kelas']?>">41-01
                <input type="radio" name="kelas" value="<?php echo $row['kelas']?>">41-02
                <input type="radio" name="kelas" value="<?php echo $row['kelas']?>">41-03
                <input type="radio" name="kelas" value="<?php echo $row['kelas']?>">41-04</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="radio" name="jeniskelamin" value="<?php echo $row['jeniskelamin']?>">Laki-Laki
                <input type="radio" name="jeniskelamin" value="<?php echo $row['jeniskelamin']?>">Perempuan</td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>:</td>
            <td><input type="checkbox" name="hobi[]" value="<?php echo $row['hobi']?>">Membaca<br>
                <input type="checkbox" name="hobi[]" value="<?php echo $row['hobi']?>">Nonton<br>
                <input type="checkbox" name="hobi[]" value="<?php echo $row['hobi']?>">Menulis<br>
                </td>
        </tr>
        <tr>
            <td>Fakultas</td>
            <td>:</td>
            <td><select name="fakultas">
                <option value="<?php echo $row['fakultas']?>">FIT</option>
                <option value="<?php echo $row['fakultas']?>">FIK</option>
                <option value="<?php echo $row['fakultas']?>">FEB</option>
                <option value="<?php echo $row['fakultas']?>">FKB</option>
                <option value="<?php echo $row['fakultas']?>">FRI</option>
                <option value="<?php echo $row['fakultas']?>">FTE</option>
            </select></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat" rows="5" value="<?php echo $row['alamat']?>"></textarea></td>
        </tr>
        <tr>
            <td align="center" colspan="3"><input type="submit" name="submit" value="update"></td>
        </tr>
     </form>
     </table>
</body>
</html>

<?php
    if (isset($_POST['nama'])) {
    $nama           = $_POST['nama'];
    $nim            = $_POST['nim'];
    $kelas          = $_POST['kelas'];
    $jeniskelamin   = $_POST['jeniskelamin'];
    $hobi           = $_POST['hobi'];
    $fakultas       = $_POST['fakultas'];
    $alamat         = $_POST['alamat'];

        $query = "UPDATE mahasiswa SET nama='$nama', nim='$nim', kelas='$kelas', jeniskelamin='$jeniskelamin', hobi='$hobi', fakultas='$fakultas', alamat='$alamat' WHERE id='$id'";

        if (mysqli_query($conn, $query)) {
            header("location: list.php");
        }else {
            echo "Error: ". $query."<br?".mysqli_error($conn);
        }
        mysqli_close($conn);
    }
?>