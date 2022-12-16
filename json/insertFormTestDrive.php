<?php
    require_once __DIR__ . '../../config.php';
    require_once __DIR__ . '../../koneksi.php';
    
    $res = [];

    $target = "../test-drive/sim-img";

    $nama = $_POST["namaCust"];

    $hp = $_POST["noHP"];

    $tipe = $_POST["modelKend"];

    $img_name = $_FILES["img-upload"]["name"];

    $tmp = $_FILES["img-upload"]["tmp_name"];

    move_uploaded_file($tmp, $target);

    if(move_uploaded_file($tmp, $target)){
        echo 'File uploaded successfully';
    } else {
        echo 'You should select a file to upload !!';
    }

    // echo $img_name;
    
?>