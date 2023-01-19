<?php
    require_once '../../../config.php';
    require_once '../../../koneksi.php';
    require_once '../../../function.php';
    $res = [];
    $nama = $_POST['edit_nama_user'];
    $id = $_POST['id_user'];
    $login = strtolower($_POST['edit_nama_login']);
    if(isset($nama) && isset($login)) {
        if(checkinput($nama) || checkinput($login)) {
            $res['success'] = 0;
            $res['message'] = 'Mohon masukkan angka atau huruf!';
        } else {
            if(isset($_POST['otoritas'])) {
                if($_POST['edit_password_user'] != '' && $_POST['edit_conf_pass'] != '') {
                    $password = $_POST['edit_password_user'];
                    $confirm = $_POST['edit_conf_pass'];
                    if($password !== $confirm) {
                        $res['success'] = 0;
                        $res['message'] = 'Mohon pastikan password yang anda ketik sudah sesuai!';
                    } else {
                        $password = password_hash($password, PASSWORD_DEFAULT);
                        $update = "UPDATE user_account 
                                    SET nama=?, password=?, otoritas=?, nama_login=?
                                    WHERE id=?";
                        $otoritas = implode(' ; ', $_POST['otoritas']);
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
                    }
                } else {
                    $update = "UPDATE user_account 
                                SET nama=?, otoritas=?, nama_login=?
                                WHERE id=?";
                    $otoritas = implode(' ; ', $_POST['otoritas']);
                    $stmt = mysqli_prepare($koneksi, $update);
                    mysqli_stmt_bind_param($stmt, 'sssi', $nama, $otoritas, $login, $id);
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
                } 
            } else {
                $res['success'] = 0;
                $res['message'] = 'Mohon centang salah satu checkbox otoritas yang sudah disediakan!';
            }     
        }
        mysqli_stmt_free_result($statement);
        mysqli_stmt_close($statement);
    } else {
        $res['success'] = 0;
        $res['message'] = 'Mohon pastikan nama dan nama user sudah terisi!';
    }    
    $koneksi = null;
    echo json_encode($res);
?>