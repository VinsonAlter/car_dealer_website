<?php
    require_once __DIR__ . '/../../koneksi.php';
    require_once __DIR__ . '/../../config.php';
    require_once __DIR__ . '/../../function.php';

    if(!isset($_SESSION['user_login'])) {
        header('location:../index.php');
    }

    $user = $_SESSION['user_login'];
    $search_user = "SELECT * FROM user_account WHERE nama_login = ?";
    $stmt = mysqli_prepare($koneksi, $search_user);
    mysqli_stmt_bind_param($stmt, 's', $user);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $otoritas = explode(' ; ', $row['otoritas']);
        }
    } else {
        echo('Username tidak ditemukan!');
    }

?>

<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
        <?php
            if(in_array('user-accounts', $otoritas)) {
                echo '
                <a href='?><?=BASE_URL;?><?php echo 'production/cms/user/ class="nav-link">
                    <i class="nav-icon fas fa-user-circle"></i>
                    <p>
                        User Accounts
                    </p>
                </a>
                ';
            }
        ?>
        </li>
        <li class="nav-item">
        <?php
            if(in_array('price-list', $otoritas)) {
                echo '
                    <a href="javascript:void(0)" class="nav-link">
                        <i class="nav-icon fas fa-money-bill"></i>
                        <p>
                            Price List
                        </p>
                    </a>
                ';
            }
        ?>    
        </li>
        <li class="nav-item">
        <?php
            if(in_array('test-drive', $otoritas)) {
                echo '
                    <a href="javascript:void(0)" class="nav-link">
                        <i class="nav-icon fas fa-car-alt"></i>
                        <p>
                            Test Drive
                        </p>
                    </a>
                ';
            }
        ?>
        </li>
        <li class="nav-item">
        <?php 
            if(in_array('berita', $otoritas)) {
                echo '
                <a href="javascript:void(0)" class="nav-link">
                    <i class="nav-icon fas fa-newspaper"></i>
                    <p>
                        Berita
                    </p>
                </a>
                ';
            }
        ?>
        </li>
    </ul>
</nav>