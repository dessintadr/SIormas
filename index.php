<?php
include 'koneksi.php';
$result = mysqli_query($connect, "SELECT * FROM ormas ORDER BY id ASC");
?>

<!DOCTYPE html>
<html>
<head>
	<title> Data Ormas</title>
</head>
<body>
<H1 align="center"> Database Organisasi Kemasyarakatan Daerah Jawa Tengah</H1>

<form method="POST" action="index.php"><input type="text" name="query" placeholder="Cari">
<input type="button" name="Cari" value="Cari"></form>
<table>
	<tr><input type="button" name="tambah" value="Tambah Data" onclick='top.location="tambahdata.php"'></tr>

<?php

$result = mysqli_query($connect, "SELECT * FROM  ormas"); 
foreach ($result as $data) {
	# code...
	?>
	<tr><td>INI LOGO</td></tr>
	<tr><td>Nama Organisasi</td> 
		<td>: <?php echo $data['nama']?> </td></td>
	</tr>
	<tr><td>Bidang Kegiatan </td>
		 <td>:</td>
	</tr>
	<tr><td>Ruang Lingkup  </td>
		<td>: <?php echo $data['ruang_lingkup']?></td>	
	</tr>
	<tr><td>Alamat Kantor/Sekretariat </td>
		<td>:</td>
	</tr>
	<tr><td>Tempat dan Waktu Pendirian </td>
		<td>:</td>	 
	</tr>
	<tr><td>Asas Ciri Organisasi </td> 
		<td>:</td>
	</tr>
	<tr><td>Tujuan Organisasi </td>
		<td>:</td> 
	</tr>
	<tr><td>Nama Pendiri </td> 
		<td>:</td>
	</tr>
	<tr><td>Nama Pembina </td>
		<td>:</td> 
	</tr>
	<tr><td>Nama Penasehat </td> 
		<td>:</td>
	</tr>
	<tr>
		<td>Ketua</td>
		<td>:</td>	 
	</tr>
	<tr><td>Sekretaris</td>
		<td>:</td>
	</tr>
	<tr><td>Bendahara </td>
		<td>:</td>
	</tr>
	<tr><td>Masa Bhakti Kepengurusan </td>
		<td>:</td>	 
	</tr>
	<tr><td>Keputusan Tertinggi Orgnaisai </td>
		<td>:</td> 
	</tr>
	<tr><td>Unit/Satuan/Sayap Otonom Organisasi </td> 
		<td>:</td>
	</tr>
	<tr><td>Usaha Organisasi </td>
		<td>:</td>
	</tr>
	<tr><td>Nama Sumber Keuangan </td> 
		<td>:</td>
	</tr>
	<tr><td>
	<input type="button" name="ubah" value="Ubah Data" onClick='top.location="ubahdata.php"'>
	<input type="button" name="tambah" value="Hapus Data" onClick='top.location="hapusdata.php'></td></tr>
		<?php
}
?>
</table>
</form>
</body>
</html>