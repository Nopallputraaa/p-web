<?php
// Soal 3.1
//if (isset($_FILES['file'])) {
    //$errors = array();
    //$file_name = $_FILES['file']['name'];
    //$file_size = $_FILES['file']['size'];
    //$file_tmp = $_FILES['file']['tmp_name'];
    //$file_type = $_FILES['file']['type'];
    //@$file_ext = strtolower("" . end(explode('.', $_FILES['file']['name'])) . "");
    // Bisa diganti format filenya
    //$extensions = array("pdf", "doc", "docx", "txt");

    //if (in_array($file_ext, $extensions) === false) {
        //$errors[] = "Ekstensi file yang diizinkan adalah PDF, DOC, DOCX, atau TXT.";
    //}

    //if ($file_size > 2097152) {
        //$errors[] = "Ukuran file tidak boleh lebih dari 2 MB.";
    //}

    //if (empty($errors) == true) {
        //move_uploaded_file($file_tmp, "documents/" . $file_name);
        //echo "File berhasil diunggah.";
    //} else {
        //echo implode(" ", $errors);
    //}
//}

// Soal 3.2
//if (isset($_FILES['file'])) {
    //$errors = array();

    //foreach ($_FILES['file']['tmp_name'] as $key => $tmp_name) {
        //$file_name = $_FILES['file']['name'][$key];
        //$file_size = $_FILES['file']['size'][$key];
        //$file_tmp = $_FILES['file']['tmp_name'][$key];
        //$file_type = $_FILES['file']['type'][$key];
        //$file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        // Bisa diganti format filenya
        //$extensions = array("jpg", "jpeg", "png", "gif");

        //if (in_array($file_ext, $extensions) === false) {
            //$errors[] = "Ekstensi file yang diizinkan adalah JPG, JPEG, PNG, atau GIF.";
        //}

        //if ($file_size > 2097152) {
            //$errors[] = "Ukuran file tidak boleh lebih dari 2 MB.";
        //}

        //if (empty($errors) == true) {
            //move_uploaded_file($file_tmp, "uploads/" . $file_name);
            //echo "File $file_name berhasil diunggah.<br>";
        //} else {
            //echo implode(" ", $errors);
        //}
    //}
//}

// Soal 4.2
if (isset($_FILES['file'])) {
    $errors = array();
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    // Bisa diganti format filenya
    $extensions = array("pdf", "doc", "docx", "txt");

    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "Ekstensi file yang diizinkan adalah PDF, DOC, DOCX, atau TXT.";
    }

    if ($file_size > 2097152) {
        $errors[] = "Ukuran file tidak boleh lebih dari 2 MB.";
    }

    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, "documents/" . $file_name);
        echo "File berhasil diunggah.";
    } else {
        echo implode(" ", $errors);
    }
}
?>