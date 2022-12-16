<?php
    require_once __DIR__ . '../../config.php';
    require_once __DIR__ . '../../koneksi.php';

    if(isset($_POST['check'])) {
    
        $res = [];

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

        if( mysqli_stmt_execute($stmt)) {

            $res['success'] = 1;

            $res['message'] = 'Data berhasil disimpan!';

        } else {

            $res['success'] = 0;

            $res['message'] = 'Data gagal disimpan, mohon coba kembali';

        }

        $koneksi = null;

    } else {

        $res['success'] = 0;

        $res['message'] = 'Mohon pastikan anda sudah menyetujui peraturan test drive!';

    } 

    echo json_encode($res);
    
?>