<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Web Programming II</title>
</head>
<body>
	<div align=center>
		<header>
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
		<legend align=center>Hasil Inputan Data Siswa</legend>
		<form method="POST">
		<table>
			<tr>
				<th>Nama Siswa</th>
				<td>:</td>
				<td>
					<?= $nama; ?>
				</td>
			</tr>

			<tr>
				<th>NIS</th>
				<td>:</td>
				<td>
                    <?= $nis; ?>
				</td>
			</tr>

			<tr>
				<th>Kelas</th>
				<td>:</td>
				<td>
                    <?= $kelas; ?>
				</td>
			</tr>

			<tr>
				<th>Tanggal Lahir</th>
				<td>:</td>
				<td>
                    <?= $tgl; ?>
				</td>
			</tr>

			<tr>
				<th>Tempat Lahir</th>
				<td>:</td>
				<td>
                    <?= $tmpt; ?>
				</td>
			</tr>

			<tr>
				<th>Alamat</th>
				<td>:</td>
				<td>
                    <?= $alamat; ?>
				</td>
			</tr>

			<tr>
				<th>Jenis Kelamin</th>
				<td>:</td>
				<td>
                    <?= $jk; ?>
				</td>
			</tr>

			<tr>
				<th>Agama</th>
				<td>:</td>
				<td>
                    <?= $agama; ?>
				</td>
			</tr>

            <div>
			<tr>
				<td colspan="3" align="center">
					<hr>
					<button  href="<?= base_url('sekolah');?>">Kembali</button>
				</td>
			</tr>
        </div>
		</table>
	</form>
</fieldset>

</body>
</html>