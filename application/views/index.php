<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Upload File</title>
</head>

<body>
	<div class="container mt-5">
		<h1 class="text-center mb-4">Upload dan Update File Beserta Directory</h1>
		<strong class="text-danger"><?php if($error !== null): echo $error; endif;?></strong>

		<a class="btn btn-success my-2" href="<?= base_url('welcome/add') ?>">Tambah</a>
		<table class="table table-hover" cellspacing='0' cellpadding='10' width='100%'>
			<thead>
				<tr>
					<th>No</th>
					<th>File</th>
					<th>Judul</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1; foreach ($files as $file): ?>
				<tr>
					<td><?= $no++ ?></td>
					<td><?= $file->files ?></td>
					<td><?= $file->nama ?></td>
					<td>
						<a href="<?= base_url('welcome/edit/' . $file->id) ?>">Edit</a> |
						<a onclick="return confirm('Serius nih dihapus?')" href="<?= base_url('welcome/delete/' . $file->id) ?>">Hapus</a>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</body>
</html>