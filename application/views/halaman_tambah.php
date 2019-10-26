<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tambah</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container my-5">
		
		<a class="btn btn-warning mb-3" href="<?= base_url() ?>">Kembali</a>

		<?= form_open_multipart('welcome/upload');?>
			<div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" placeholder="judul" autocomplete="off" required="">
            </div>
			<div class="form-group">
                <label for="file">File</label>
                <input type="file" class="form-control" id="file" name="file" required="">
            </div>
			<button type="submit" class="btn btn-success">Simpan</button>
		<?= form_close(); ?>
	</div>
	
</body>
</html>