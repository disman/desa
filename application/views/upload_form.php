<!DOCTYPE html>
<html>

<head>
    <title>Codeigniter Upload</title>
</head>

<body>

    <h3>Upload File Dengan Codeigniter</h3>

    <?php
    echo form_open_multipart('upload/do_upload');
    ?>

    <input type="file" name="gambar">
    <button type="submit">Upload Gambar</button>
    <?php echo form_close(); ?>

</body>

</html>