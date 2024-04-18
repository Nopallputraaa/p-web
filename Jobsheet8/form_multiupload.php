<!DOCTYPE html>
<html>
    <head>
        <title>Multiupload Dokumen</title>
    </head>
    <body>
        <h2>Unggah Dokumen/Gambar</h2>
        <form action="proses_upload.php" method="post" enctype="multipart/form-data">

        <!-- multiple bisa merubah format file yang diinginkan-->
        <input type="file" name="files[]" multiple="multiple" accept=".jpg, .jpeg, .png">
        <input type="submit" value="Unggah">
        </form>
    </body>
</html>