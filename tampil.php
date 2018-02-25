<?php 
	include('koneksi.php');
	include('database.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ujian Uas</title>
</head>
<body>
	<table border="2">
		<tr>
			<td>No</td>
			<td>Nama</td>
			<td>Kelas</td>
		</tr>
		<?php
			$seleksi = "select * from uas";
			$hasil_seleksi = mysql_query($seleksi);

			if(!$hasil_seleksi){
				echo"seleksi gagal";
			}else{
				while($baris = mysql_fetch_array($hasil_seleksi)){
					echo"
						<tr>
							<td>".$baris['no']."</td>
							<td>".$baris['nama']."</td>
							<td>".$baris['kelas']."</td>
						</tr>
					";
				}
			}
		?>
	</table>
</body>
</html>