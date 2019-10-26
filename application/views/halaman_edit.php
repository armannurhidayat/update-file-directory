<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Edit File</title>
</head>
<body>
    <div class="container mt-5">
        <a class="btn btn-warning mb-3" href="<?= base_url() ?>">Kembali</a>

        <?php echo form_open_multipart('welcome/update');?>
            <input type="hidden" name='id' value='<?= $data->id ?>'>
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="<?= $data->nama ?>" autocomplete="off" placeholder="Judul" required>
            </div>
            <div class="form-group">
                <label for="file">File Baru</label>
                <input type="file" class="form-control" id="file" name="file">
            </div>
            <p>File Sebelumnya : <strong><?= $data->files ?></strong></p><br>

        	<button class="btn btn-primary btn-block my-3" type='submit'>Update</button>
    	<?= form_close(); ?>
    </div>
</body>
</html>