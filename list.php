<?php
require_once("db.php");
?>

<table border="1" style="text-align: center;">
	<thead>
		<td>Nama</td>
		<td>NIM</td>
		<td>Kelas</td>
		<td>JenisKelamin</td>
		<td>Hobi</td>
		<td>Fakultas</td>
		<td>alamat</td>
		<td colspan="2"">Edit</td>
	</thead>
	<tbody>

		<?php
		$query = "SELECT * FROM mahasiswa";
		$result = mysqli_query($conn, $query);
		$list = mysqli_num_rows($result);

		if ( $list > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				?>

				<tr>
				<td><?php echo $row['nama']?></td>
				<td><?php echo $row['nim']?></td>
				<td><?php echo $row['kelas']?></td>
				<td><?php echo $row['jeniskelamin']?></td>
				<td><?php echo $row['hobi']?></td>
				<td><?php echo $row['fakultas']?></td>
				<td><?php echo $row['alamat']?></td>
				<td><a href="delete.php?id=<?php echo $row['id']?>">Hapus</a></td>
				<td><a href="formupdate.php?id=<?php echo $row['id']?>">Update</a></td>
				</tr>
				
				<?php
			}
		}else {
			echo "0 Result";
		}
		mysqli_close($conn);
		?>
	</tbody>
</table>
<a href='login.php'>Logout</a>