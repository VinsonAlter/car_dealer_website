<?php
    require_once '../../../config.php';
    require_once '../../../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Chery User Account</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="../dist/css/styles.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../index3.html" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../index3.html" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="pages/tables/simple.html" class="nav-link">
              <i class="nav-icon fas fa-user-circle"></i>
              <p>
                User Accounts
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="javascript:void(0)" class="nav-link">
              <i class="nav-icon fas fa-money-bill"></i>
              <p>
                Price List
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="javascript:void(0)" class="nav-link">
              <i class="nav-icon fas fa-car-alt"></i>
              <p>
                Test Drive
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="javascript:void(0)" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Berita
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="offset-sm-6 col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main con   tent -->
    <section class="content">
      <div class="container-fluid">
        <!-- /.row -->
        <!-- <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Responsive Hover Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div> -->
              <!-- /.card-header -->
              <!-- <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>User</th>
                      <th>Date</th>
                      <th>Status</th>
                      <th>Reason</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>183</td>
                      <td>John Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-success">Approved</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>219</td>
                      <td>Alexander Pierce</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-warning">Pending</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>657</td>
                      <td>Bob Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-primary">Approved</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>175</td>
                      <td>Mike Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-danger">Denied</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                  </tbody>
                </table>
              </div> -->
              <!-- /.card-body -->
            <!-- </div> -->
            <!-- /.card -->
          <!-- </div>
        </div> -->
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">User Accounts</h3>
              </div>
              <button class="btn btn-info col-4 col-md-2 p-2 m-3" data-toggle="modal" data-target="#tambah_user" type="button">
                Tambah User
              </button>
              <div class="table-responsive p-0" style="height: 350px;">
                <table class="table table-head-fixed text-nowrap" id="table_user">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Otoritas</th>
                      <th>Status</th>
                      <th>Edit User</th>
                      <th>Aktif</th>
                      <th>Tidak Aktif</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                        $tampil = 'select * from user_account';
                        $hasil = mysqli_query($koneksi, $tampil);
                        $no = 0;
                        while($data = mysqli_fetch_row($hasil)) {
                            $no++;
                            echo "<tr>
                                <td>$no</td>
                                <td>$data[1]</td>
                                <td>$data[3]</td>
                                <td>$data[4]</td>
                                <td><a class='btn btn-block bg-gradient btn-warning' data-toggle='modal' data-target='#edit_user'>Edit User</a></td>
                                <td><a class='btn btn-block bg-gradient btn-success'>Aktif</a></td>
                                <td><a class='btn btn-block bg-gradient btn-danger'>Tidak Aktif</a></td>
                            ";
                        }
                    ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <!-- Bootstrap Tambah User Modals -->
  <div class="modal fade" id="tambah_user">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Tambah Akun User</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form class="form-horizontal" id="add_user" role="form" method="post" action="javascript:initSubmit()">
            <div class="form-group row">
              <label class="cp col-sm-2 col-form-label" for="nama_user">
                Nama
              </label>
              <div class="col-sm-10">
                <input id="nama_user" type="text" class="cp form-control" 
                  name="nama_user" autocomplete="off" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="cp col-sm-2 col-form-label" for="nama_login">
                Username
              </label>
              <div class="col-sm-10">
                <input id="nama_login" type="text" class="cp form-control" 
                  name="nama_login" autocomplete="off" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="cp col-sm-2 col-form-label" for="password_user">
                Password
              </label>
              <div class="col-sm-10">
                <input id="password_user" type="text" class="cp form-control" 
                  name="password_user" autocomplete="off" required>
              </div>
            </div>
            <div class="form-group">
              <label class="col-form-label">Otoritas:</label>
              <div class="custom-control custom-checkbox">
                <input id="user-accounts" name="otoritas[]" type="checkbox" class="cp custom-control-input" value="user-accounts" required>
                <label class="cp custom-control-label" for="user-accounts">
                  User Accounts
                </label>
              </div>
              <div class="custom-control custom-checkbox">
                <input id="price-list" name="otoritas[]" type="checkbox" class="cp custom-control-input" value="price-list" required>
                <label class="cp custom-control-label" for="price-list">
                  Price List
                </label>
              </div>
              <div class="custom-control custom-checkbox">
                <input id="test-drive" name="otoritas[]" type="checkbox" class="cp custom-control-input" value="test-drive" required>
                <label class="cp custom-control-label" for="test-drive">
                  Test Drive
                </label>
              </div>
              <div class="custom-control custom-checkbox">
                <input id="berita" name="otoritas[]" type="checkbox" class="cp custom-control-input" value="berita" required>
                <label class="cp custom-control-label" for="berita">
                  Berita
                </label>
              </div>
              <div class="offset-10 mt-2 custom-control custom-checkbox">
                <input id="aktif" type="checkbox" class="cp custom-control-input" value="aktif" name="aktif">
                <label class="cp custom-control-label" for="aktif">
                  Aktif
                </label>
              </div>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap Edit User Modals -->
  <div class="modal fade" id="edit_user">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Akun User</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" role="form">
            <div class="form-group row">
              <label class="cp col-sm-2 col-form-label" for="nama_user">
                Nama
              </label>
              <div class="col-sm-10">
                <input id="nama_user" type="text" class="cp form-control">
              </div>
            </div>
            <div class="form-group row">
              <label class="cp col-sm-2 col-form-label" for="password_user">
                Password
              </label>
              <div class="col-sm-10">
                <input id="password_user" type="password" class="cp form-control">
              </div>
            </div>
            <div class="form-group">
              <label class="col-form-label">Otoritas:</label>
              <div class="custom-control custom-checkbox">
                <input id="user-accounts" type="checkbox" class="cp custom-control-input" value="user-accounts">
                <label class="cp custom-control-label" for="user-accounts">
                  User Accounts
                </label>
              </div>
              <div class="custom-control custom-checkbox">
                <input id="price-list" type="checkbox" class="cp custom-control-input" value="price-list">
                <label class="cp custom-control-label" for="price-list">
                  Price List
                </label>
              </div>
              <div class="custom-control custom-checkbox">
                <input id="test-drive" type="checkbox" class="cp custom-control-input" value="test-drive">
                <label class="cp custom-control-label" for="test-drive">
                  Test Drive
                </label>
              </div>
              <div class="custom-control custom-checkbox">
                <input id="berita" type="checkbox" class="cp custom-control-input" value="berita">
                <label class="cp custom-control-label" for="berita">
                  Berita
                </label>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>

<!-- Custom Scripts -->
<script>
  $(document).ready(() => {
    $('#tambah_user').on('show.bs.modal', function() {
      $("#tambah_user input[type=checkbox]").each(function(){
        $(this).prop("checked", true);
      });
    });
  })

  function initSubmit() {
    $.ajax({
      type: "POST",
      url: "register.php",
      data: $('#add_user').serialize(),
      success: result => {
        const res = $.parseJSON(result);
        if(res.success == 1) {
          // clear the modals inputs after data submission
          $('#tambah_user .modal-body input[type="text"]').val('');
          // hide modals after data submission
          $('#tambah_user').modal('hide');
          // refresh table after data submission
          // $('#table_user').html(result);
        } alert(res.message);
      },
      error: err => {
        console.error(res.statusText);
      }
    })
  }
</script>


</body>
</html>
