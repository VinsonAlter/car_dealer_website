<?php
    require_once '../../../config.php';
    require_once '../../../koneksi.php';
    require_once '../../../function.php';
    $res = [];
    $nama = $_POST['edit_nama_user'];
    $id = $_POST['id_user'];
    $login = strtolower($_POST['edit_nama_login']);
    $password = $_POST['edit_password_user'];
    $confirm = $_POST['edit_conf_pass'];
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
                        $password = password_hash($password, PASSWORD_DEFAULT);
                        $otoritas = implode(' ; ', $_POST['otoritas']);
                        $update = "UPDATE user_account 
                                    SET nama=?, password=?, otoritas=?, nama_login=?
                                    WHERE id=?";
                        $stmt = mysqli_prepare($koneksi, $update);
                        mysqli_stmt_bind_param($stmt, 'ssssi', $nama, $password, $otoritas, $login, $id);
                        mysqli_stmt_execute($stmt);
                        if(mysqli_stmt_affected_rows($stmt) > 0) {
                            $res['success'] = 1;
                            $res['message'] = 'Data user berhasil diganti!';
                        } else {
                            $res['success'] = 0;
                            $res['message'] = 'Data user gagal diganti! Mohon check koneksi anda!';
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