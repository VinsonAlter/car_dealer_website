<?php
    require_once __DIR__ . '../../config.php';
    require_once __DIR__ . '../../koneksi.php';

    $res = [];

    if(isset($_POST['check']) && isset($_POST["namaCust"]) && isset($_POST["noHP"]) && isset($_POST["modelKend"]) && isset($_FILES["image_size"]["tmp_name"])) {

        $nama = $_POST["namaCust"];

        $hp = $_POST["noHP"];

        $tipe = $_POST["modelKend"];

        // $img_name = $_FILES["image_size"]["name"];

        $uniquesavename=time().uniqid(rand());

        $target = "../test-drive/sim-img/$uniquesavename.jpg";

        $target_name = "$uniquesavename.jpg";

        $tmp = $_FILES["image_size"]["tmp_name"];

        move_uploaded_file($tmp, $target);

        $insert = "INSERT INTO test_drive (nama, hp, model, img_path) VALUES (?, ?, ?, ?)";

        $stmt = mysqli_prepare($koneksi, $insert);

        mysqli_stmt_bind_param($stmt, 'ssss', $nama, $hp, $tipe, $target_name);

        mysqli_stmt_execute($stmt);

        if(mysqli_stmt_affected_rows($stmt) > 0) {

            $res['success'] = 1;

            $res['message'] = 'Data berhasil disimpan!';

        } else {

            $res['success'] = 0;

            $res['message'] = 'Data gagal disimpan, mohon coba kembali';

        }

        

    } else {

        $res['success'] = 0;

        $res['message'] = 'Mohon pastikan anda sudah memasukkan info anda secara lengkap dan menyetujui peraturan test drive!';

    } 

    $koneksi = null;

    echo json_encode($res);
    
?>