<!DOCTYPE html>
<html>
    <head>
        <title>File Upload</title>
    </head>
    <body>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <!-- Change the name and id attribute (fileToUpload or documentToUpload)-->
            <input type="file" name="documentToUpload" id="documentToUpload">
            <input type="submit" value="Upload File" name="submit">
        </form>
    </body>
</html>