<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Web Programming II</title>
	<script type="text/javascript">
		function myfunction()
		{
			alert("Data Sudah Diisi")
		}
	</script>
</head>
<body>
	<div>
		<header align=center>
				<h1>DATA SISWA</h1>
		</header>
	</div>

<style>
	fieldset{
		width: 40%;
		margin: 20px auto;
		border-radius: 5px;
	}

	select{
		width: 100%;
	}
</style>

	<fieldset>
		<legend>Masukan Data Siswa</legend>
		<form method="POST">
		<table>
			<tr>
				<th>Nama Siswa</th>
				<td>:</td>
				<td>
					<input type="text" name="nama" id="nama">
				</td>
			</tr>

			<tr>
				<th>NIS</th>
				<td>:</td>
				<td>
					<input type="text" name="nis" id="nis">
				</td>
			</tr>

			<tr>
				<th>Kelas</th>
				<td>:</td>
				<td>
					<input type="text" name="kelas" id="kelas">
				</td>
			</tr>

			<tr>
				<th>Tanggal Lahir</th>
				<td>:</td>
				<td>
					<input type="text" name="tgl" id="tgl">
				</td>
			</tr>

			<tr>
				<th>Tempat Lahir</th>
				<td>:</td>
				<td>
					<input type="text" name="tmpt" id="tmpt">
				</td>
			</tr>

			<tr>
				<th>Alamat</th>
				<td>:</td>
				<td>
					<input type="text" name="alamat" id="alamat">
				</td>
			</tr>

			<tr>
				<th>Jenis Kelamin</th>
				<td>:</td>
				<td>
					<input type="radio" name="jk" value="Laki-Laki">Laki-Laki
					<input type="radio" name="jk" value="Perempuan">Perempuan
				</td>
			</tr>

			<tr>
				<th>Agama</th>
				<td>:</td>
				<td>
					<select name="agama" id="agama">
						<option>--PILIH--</option>
						<?php foreach ($agama as $a) : ?>
						<option value="<?=$a;?>"><?=$a;?></option>
						<?php endforeach;?>
					</select>
				</td>
			</tr>

			<tr>
				<td colspan="3" align="center">
					<hr>
					<button type="submit" onclick="myfunction()">Simpan</button>
				</td>
			</tr>
		</table>
	</form>
</fieldset>

</body>
</html>