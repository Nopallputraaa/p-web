<?php
// Soal 1.1
//if (isset($_POST["submit"])) {
    //$targetDirectory = "uploads/"; // Direktori tujuan untuk menyimpan file
    //$targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);

    //if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
        //echo "File berhasil diunggah";
    //} else {
        //echo "Gagal mengunggah file.";
    //}
//}

// soal 1.2
//if (isset($_POST["submit"])) {
    //$targetDirectory = "uploads/"; // Direktori tujuan untuk menyimpan file
    //$targetFile = $targetDirectory. basename($_FILES["fileToUpload"]["name"]);
    //$fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    //$allowedExtensions = array("jpg", "jpeg", "png", "gif");

    //$maxFileSize = 5 * 1024 * 1024;
    //if (in_array($fileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
        //if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
        //echo "File berhasil diunggah.";
        //} else {
           //echo "Gagal mengunggah file.";
        //}
    //} else {
        //echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    //}
//}

// soal 1.3
//if (isset($_POST["submit"])) {
    //$targetDirectory = "uploads/"; // Direktori tujuan untuk menyimpan file
    //$targetFile = $targetDirectory. basename($_FILES["fileToUpload"]["name"]);
    //$fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    //$allowedExtensions = array("jpg", "jpeg", "png", "gif");

    //$maxFileSize = 5 * 1024 * 1024;
    //if (in_array($fileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
        //if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            //cho "File berhasil diunggah.";
            //echo '<br><br><img src="' . $targetFile . '" width="200">';
        //} else {
            //echo "Gagal mengunggah file.";
        //}
    //} else {
        //echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    //}
//}

// soal 1.4
if (isset($_POST["submit"])) {
    $targetDirectory = "documents/"; // Direktori tujuan untuk menyimpan file
    $targetFile = $targetDirectory. basename($_FILES["documentToUpload"]["name"]);
    $documentFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $allowedExtensions = array("txt", "pdf", "doc", "docx");

    $maxFileSize = 10 * 1024 * 1024;

    if (in_array($documentFileType, $allowedExtensions) && $_FILES["documentToUpload"]["size"] <= $maxFileSize) {
        if (move_uploaded_file($_FILES["documentToUpload"]["tmp_name"], $targetFile)) {
            echo "Dokumen berhasil diunggah.";
        } else {
            echo "Gagal mengunggah dokumen.";
        }
    } else {
        echo "Jenis dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    }
}
?>