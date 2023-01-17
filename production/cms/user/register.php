<?php
    require_once '../../../config.php';
    require_once '../../../koneksi.php';
    $res = [];
    $nama = $_POST['nama_user'];
    $login = strtolower($_POST['nama_login']);
    $password = $_POST['password_user'];
    $aktif = isset($_POST['aktif']) ? $_POST['check'] : 'tidak aktif';
    if(isset($nama) && isset($login) && isset($password) && isset($_POST['otoritas'])) {
        if(checkinput($nama) || checkinput($login) || checkinput($password)) {
            $res['success'] = 0;
            $res['message'] = 'Mohon masukkan angka atau huruf!';
        } else {
            $password = password_hash($password, PASSWORD_DEFAULT);
            $otoritas = implode(' ; ', $_POST['otoritas']);
            $insert = "INSERT INTO user_account (nama, nama_login, password, status, otoritas)
                    VALUES (?, ?, ?, ?, '$otoritas')";
            $stmt = mysqli_prepare($koneksi, $insert);
            mysqli_stmt_bind_param($stmt, 'ssss', $nama, $login, $password, $status);
            mysqli_stmt_execute($stmt);
            if(mysqli_stmt_affected_rows($stmt) > 0) {
                $res['success'] = 1;
                $res['message'] = 'User baru berhasil dimasukkan!';
            } else {
                $res['success'] = 0;
                $res['message'] = 'User gagal dimasukkan! Periksa koneksi anda!';
            }
        }
    } else {
        $res['success'] = 0;
        $res['message'] = 'Mohon pastikan nama, nama login, dan password sudah terisi!';
    }    
    $koneksi = null;
    echo json_encode($res);
?>

