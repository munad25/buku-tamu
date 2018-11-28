<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Simpan Data Buku Tamu</title>
</head>
<body>
	<?php
		$query = "SELECT * FROM buku_tamu";
		$result = mysqli_query($koneksi, $query);
		if (!$result) {
			die("QUERY ERROR".mysqli_error($koneksi));
		}
	?>
	<h1>Buku tamu</h1>
	<table border="1">
		<?php
		while ($r = mysqli_fetch_array($result))
		{
			?>

			<tr>
				<td><?=$r['nm_bktamu']?></td>
				<td><?=$r['email_bktamu']?></td>
				<td><?=$r['tgl_bktamu']?></td>
				<td><?php echo $r['komentar']?></td>
			</tr>
			<?php
		}
		?>
	</table>
	

</body>
</html>

