<?php
    require_once '../../../config.php';
    require_once '../../../koneksi.php';
    require_once '../../../function.php';
    $res = [];
    $nama = $_POST['nama_user'];
    $login = strtolower($_POST['nama_login']);
    $password = $_POST['password_user'];
    $confirm = $_POST['conf_pass'];
    $aktif = isset($_POST['aktif']) ? $_POST['aktif'] : 'tidak aktif';
    if(isset($nama) && isset($login) && isset($password)) {
        if(checkinput($nama) || checkinput($login) || checkinput($password)) {
            $res['success'] = 0;
            $res['message'] = 'Mohon masukkan angka atau huruf!';
        } else {
            if($password !== $confirm) {
                $res['success'] = 0;
                $res['message'] = 'Mohon pastikan password yang anda ketik sudah sesuai!';
            } else {
                $check = "SELECT * FROM user_account where nama_login = ?";
                $statement = mysqli_prepare($koneksi, $check);
                mysqli_stmt_bind_param($statement, 's', $login);
                mysqli_stmt_execute($statement);
                mysqli_stmt_store_result($statement);
                $rows = mysqli_stmt_num_rows($statement);
                if($rows > 0) {
                    $res['success'] = 0;
                    $res['message'] = 'Username sudah terdaftar di database! Mohon masukkan username lain!';
                } else {
                    if(isset($_POST['otoritas'])) {
                        // $password = password_hash($password, PASSWORD_DEFAULT);
                        $otoritas = implode(' ; ', $_POST['otoritas']);
                        $insert = "INSERT INTO user_account (nama, password, otoritas, status, nama_login) VALUES (?, ?, ?, ?, ?); ";
                        $stmt = mysqli_prepare($koneksi, $insert);
                        mysqli_stmt_bind_param($stmt, 'sssss', $nama, $password, $otoritas, $aktif, $login);
                        mysqli_stmt_execute($stmt);
                        if(mysqli_stmt_affected_rows($stmt) > 0) {
                            $res['success'] = 1;
                            $res['message'] = 'User baru berhasil dimasukkan!';
                        } else {
                            $res['success'] = 0;
                            $res['message'] = 'User gagal dimasukkan! Periksa koneksi anda!';
                        }
                        mysqli_stmt_free_result($stmt);
                        mysqli_stmt_close($stmt);
                    } else {
                        $res['success'] = 0;
                        $res['message'] = 'Mohon centang salah satu checkbox otoritas yang sudah disediakan!';
                    }
                    
                }
                mysqli_stmt_free_result($statement);
                mysqli_stmt_close($statement);
            }}} else {
        $res['success'] = 0;
        $res['message'] = 'Mohon pastikan nama, nama login, dan password sudah terisi!';
    }    
    $koneksi = null;
    echo json_encode($res);
?>

