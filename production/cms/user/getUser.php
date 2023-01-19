<?php
    require_once '../../../config.php';
    require_once '../../../koneksi.php';
    require_once '../../../function.php';
    if($_POST['username']) {
        $res = [];
        $login = $_POST['username'];
        $query = "SELECT * FROM user_account WHERE nama_login = ?";
        $stmt = mysqli_prepare($koneksi, $query);
        mysqli_stmt_bind_param($stmt, 's', $login);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if(mysqli_num_rows($result) > 0) {
            while($fetch = mysqli_fetch_assoc($result)) {
                $otoritas = explode(' ; ', $fetch['otoritas']);
                $data = array(
                    'nama' => $fetch['nama'],
                    'username' => $fetch['nama_login'],
                    'otoritas' => $otoritas
                );
            }
            $res['success'] = 1;
            $res['data'] = $data;
            
        } else {
            $res['success'] = 0;
            $res['message'] = "username tidak ditemukan!";
        }  
        mysqli_stmt_free_result($stmt);
        mysqli_stmt_close($stmt);
    }
    $koneksi = null;
    echo json_encode($res);
?>