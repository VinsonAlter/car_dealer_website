<?php
    require_once __DIR__ . '../../config.php';
    require_once __DIR__ . '../../koneksi.php';

    $res = [];

    if(isset($_POST['email']) ? $email = $_POST['email'] : $email = ''); 

    if(isset($_POST['check']) && isset($_POST["namaCust"]) && isset($_POST["noHP"]) && isset($_POST["modelKend"]) && isset($_FILES["image_size"]["tmp_name"]) && isset($_POST['g-recaptcha-response'])) {

        $nama = $_POST["namaCust"];

        $hp = $_POST["noHP"];

        $tipe = $_POST["modelKend"];

        $captcha=$_POST['g-recaptcha-response'];

        $secret_key = "6LfPU4cjAAAAAESqqlxBQJxsQxi7N8QfWEqq47MN";

        $ip = $_SERVER['REMOTE_ADDR'];

        // get function, gak aman

        // $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secret_key) .  '&response=' . urlencode($captcha);

        // $response = file_get_contents($url);

        // $responseKeys = json_decode($response, true); 

        // if($responseKeys["success"]) {

        // post function

        $url = 'https://www.google.com/recaptcha/api/siteverify';

        $data = array(
            'secret' => $secret_key,
            'response' => $captcha,
            'remoteip' => $ip
        );

        $curlConfig = array(
            CURLOPT_URL => $url,
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => $data
        );

        $ch = curl_init();
        curl_setopt_array($ch, $curlConfig);
        $verify = curl_exec($ch);
        curl_close($ch);
        $captcha_success = json_decode($verify, true);

        if($captcha_success['success']) {
       
            // $img_name = $_FILES["image_size"]["name"];

            $uniquesavename=time().uniqid(rand());

            $target = "../test-drive/sim-img/$uniquesavename.jpg";

            $target_name = "$uniquesavename.jpg";

            $tmp = $_FILES["image_size"]["tmp_name"];

            move_uploaded_file($tmp, $target);

            $insert = "INSERT INTO test_drive (nama, hp, email, model, img_path) VALUES (?, ?, ?, ?, ?)";

            $stmt = mysqli_prepare($koneksi, $insert);

            mysqli_stmt_bind_param($stmt, 'sssss', $nama, $hp, $email, $tipe, $target_name);

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

            $res['message'] = 'Mohon pastikan anda bukan robot';

        }

    } else {

        $res['success'] = 0;

        $res['message'] = 'Mohon pastikan anda sudah memasukkan info anda secara lengkap dan menyetujui peraturan test drive!';

    } 

    $koneksi = null;

    echo json_encode($res);
    
?>