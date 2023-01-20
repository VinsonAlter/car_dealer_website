<?php
    require_once '../../../koneksi.php';
    require_once '../../../config.php';
    require_once '../../../function.php';
    $res = [];
    $user = $_POST['user'];
    $status = $_POST['status'];
    if($status == 'aktif') {
        $update = "UPDATE user_account SET status = 'tidak aktif' 
                    WHERE nama_login = ?";
        $stmt = mysqli_prepare($koneksi, $update);
        mysqli_stmt_bind_param($stmt, 's', $user);
        mysqli_stmt_execute($stmt);
        if(mysqli_stmt_affected_rows($stmt) > 0) {
            $res['success'] = 1;
        } else {
            $res['success'] = 0;
            $res['message'] = 'Status gagal diganti, mohon periksa koneski anda!';
        }
        mysqli_stmt_free_result($stmt);
        mysqli_stmt_close($stmt);
    } else {
        $update = "UPDATE user_account SET status = 'aktif' 
                    WHERE nama_login = ?";
        $stmt = mysqli_prepare($koneksi, $update);
        mysqli_stmt_bind_param($stmt, 's', $user);
        mysqli_stmt_execute($stmt);
        if(mysqli_stmt_affected_rows($stmt) > 0) {
            $res['success'] = 1;
        } else {
            $res['success'] = 0;
            $res['message'] = 'Status gagal diganti, mohon periksa koneski anda!';
        }
        mysqli_stmt_free_result($stmt);
        mysqli_stmt_close($stmt);
    }
    $koneksi = null;
    echo json_encode($res);
?>