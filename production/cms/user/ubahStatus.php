<?php
    require_once '../../../koneksi.php';
    require_once '../../../config.php';
    require_once '../../../function.php';
    $res = [];
    $user = $_POST['user'];
    $select = "SELECT status FROM user_account WHERE nama_login=?";
    $stmt = mysqli_prepare($koneksi, $select);
    mysqli_stmt_bind_param($stmt, 's', $user);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if(mysqli_num_rows($result) > 0) {
        while($fetch = mysqli_fetch_assoc($result)) {
            $current_status = $fetch['status'];
        }  
        $status = $current_status === 'aktif' ? 'tidak aktif' : 'aktif';
        $update = "UPDATE user_account SET status = ? 
                    WHERE nama_login = ?";
        $stmt = mysqli_prepare($koneksi, $update);
        mysqli_stmt_bind_param($stmt, 'ss', $status, $user);
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
        $res['success'] = 0;
        $res['message'] = 'User tidak ditemukan!';
    }
    $koneksi = null;
    echo json_encode($res);
?>