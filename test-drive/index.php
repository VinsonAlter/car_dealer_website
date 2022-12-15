<?php
    require_once __DIR__ . '../../config.php'; 
?>
<!-- Chery Test Drive Page -->
<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <title>Permintaan Test Drive Mobil Chery | Chery Oriental Group</title>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
        />
        <meta name="description" content="form pendaftaran test drive mobil chery PT. Chery Oriental Group"/>
        <meta name="robots" content="index, follow"/>
        <meta property="og:site_name" content="Permintaan Test Drive Mobil Chery | Chery Oriental Group" />
        <meta property="og:type" content="website"/>
        <!-- <meta property="og:url" content="https://cheryorientalgroup.co.id/test-drive/" /> -->
        <meta property="og:title" content="Permintaan Test Drive Mobil Chery | Chery Oriental Group" />
        <meta property="og:description" content="form pendaftaran test drive mobil chery PT. Chery Oriental Group"/>
        <!-- Link Swiper's CSS -->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
        />
        <link 
            rel="stylesheet"
            type="text/css"
            href="../assets/css/style.css"
        />
        <!-- Bootstrap 5 CSS Plugins -->
        <link 
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
            crossorigin="anonymous"
        />
        <!-- Favicon Icon -->
        <link
            rel="icon"
            type="image/png"
            sizes="32x32"
            href="../assets/logo/favicon-32x32.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="../assets/logo/favicon-32x32.png"
        />
        <!-- Simple Pagination CSS -->
        <link 
            rel="stylesheet"
            type="text/css"
            href="../assets/css/simplePagination.css"
        />

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
        
        <!-- Font Awesome Version 6 Plugins -->
        <link rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

        <style>
           body {
            background-color: #D0D0D0;
           } 

           .c-white {
            background-color: #FFFFFF;
           }

           ol li {
            list-style-type: number;
           }

           .form-check-flex {
            display: flex !important;
           }

           input[type="file"] {
            display: none;
           }

           /* .img-ktp {
            margin-left: 15.6%;
           } */

           .img-ktp figure {
            display: block;
            float: left;
            margin: 0 5px 5px 0;
            width: 120px;
            height: 150px;
            overflow: hidden;
            background-color: lightgray;
            text-align: center;
            line-height: 150px;
            font-weight: 500;
            color: white;
           }

           @media (max-width:768px) {
            .form-title-font {
                font-size: 1.125rem !important;
            }

            .form-mobile-font {
                font-size:14px;
                text-align:justify;
            }

            /* .img-ktp {
                margin-left: 25%;
            } */
           }

        </style>

    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-lg-2 offset-md-2 c-white panel-container">
                    <div class="row">
                        <div class="py-2">
                            <img src="<?=BASE_URL?>assets/img/banner-test-drive.jpg" class="w-100 panel-img">
                        </div>
                        <div class="panel-row">
                            <div class="panel-section px-4 py-3">
                                <div class="panel-blue"></div>
                                <h3 class="fs-bold-650">Permintaan Test Drive</h3>
                                <p class="m-0 form-mobile-font">
                                    Berminat dengan mobil Chery? Jika Anda ingin
                                    merasakan impresi berkendara ala Chery yang elegan
                                    dengan fitur-fiturnya yang premium dan futuristik,
                                    yuk isi form di bawah ini. 
                                    Kami akan menghubungi Anda kembali untuk informasi
                                    lebih lanjut.
                                </p>
                            </div>

                            <div class="panel-section px-4 py-3">
                                <h5 class="fs-bold-600 form-title-font">
                                    TIGGO 8 PRO - Enjoy Your First Class
                                </h5>
                                <p class="m-0 form-mobile-font fs-bold-550">
                                    The all new luxury and first class SUV!
                                </p>
                                <p class="form-mobile-font">
                                    Fitur keamanan berkelas dan design yang premium dari 
                                    Chery Tiggo 8 Pro siap menemani setiap perjalanan
                                    berharga Chery Family bersama keluarga!
                                </p>
                                <img class="w-100" src="<?=BASE_URL?>assets/img/tiggo8prodekstop.jpg">
                            </div>

                            <div class="panel-section px-4 py-3">
                                <h5 class="fs-bold-600 form-title-font">
                                    TIGGO 7 PRO - Build For Elite
                                </h5>
                                <p class="m-0 form-mobile-font fs-bold-550">
                                    Combine between technology and design!
                                </p>
                                <p class="form-mobile-font">
                                    Fitur dan teknologi canggih berpadu 
                                    dengan design yang mewah, Chery Tiggo 7 Pro 
                                    akan membawa kesan berkendara premium 
                                    serta nyaman untuk seluruh keluarga!
                                </p>
                                <img class="w-100" src="<?=BASE_URL?>assets/img/tiggo7prodekstop.jpg">
                            </div>

                            <div class="panel-section px-4 py-3">
                                <h5 class="text-center ">
                                    PENDAFTARAN TEST DRIVE
                                </h5>
                                <hr/>
                                <div class="mb-3 form-label-text">
                                    <label for="exampleInputNama" class="form-label required">1. Nama</label>
                                    <input type="text" class="form-control form-resize" id="exampleInputNama">
                                </div>
                                <div class="mb-3 form-label-text">
                                    <label for="exampleInputHP" class="form-label required">2. Nomor HP</label>
                                    <input type="text" class="form-control form-resize" id="exampleInputHP">
                                </div>
                                <div class="mb-4 form-label-text">
                                    <label class="form-label required">3. Model Kendaraan</label>
                                    <select class="form-select form-select-resize" aria-label="Default select example">
                                        <option selected>Choose</option>
                                        <option value="Tiggo 8 Pro">Tiggo 8 Pro</option>
                                        <option value="Tiggo 7 Pro">Tiggo 7 Pro</option>
                                    </select>
                                </div>
                                <div class="mb-3 row g-3 align-items-center form-label-text">
                                    <div class="col-4 col-md-2 required">
                                        <label class="col-form-label">4. Upload SIM</label>
                                    </div>
                                    <div class="col-auto">
                                        <label for="img-upload" class="custom-file-upload">
                                            <i class="fa fa-image"></i> Pilih Gambar
                                        </label>
                                        <input id="img-upload" type="file" data-filename-placement="inside"/>
                                        <!-- <div class="cp img-ktp mt-2">
                                            <figure id="upload-ktp">
                                                No Image
                                            </figure>
                                        </div> -->
                                        <!-- <button type="button" id="btn-sim" class="btn btn-sm btn-success">
                                            <i class="fas fa-image"></i>
                                                Pilih Gambar
                                        </button> -->
                                    </div>
                                </div>
                                <div class="mb-3 row g-3 align-items-center form-label-text">
                                    <div class="offset-4 offset-md-2 col-auto">
                                        <div class="cp img-ktp mt-2">
                                            <figure id="upload-ktp">
                                                No Image
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
                                <div class="col-md-10 offset-md-1 disclamer-font">
                                    <h5>Peraturan Test Drive:</h5>
                                    <ol>
                                        <li>
                                            Usia pengemudi test drive minimal 17 tahun dan 
                                            maksimal 60 tahun, serta 
                                            memiliki SIM A/B1/B2 yang 
                                            masih berlaku (wajib mendaftar dan wajib memperlihatkan SIM) 
                                            sebelum test drive.
                                        </li>
                                        <li>
                                            Menggunakan sabuk keselamatan demi keselamatan
                                            peserta sendiri dan pihak lain di area test drive.
                                        </li>
                                        <li>
                                            Menaati arahan yang diberikan instruktur test drive 
                                            terutama mengenai cara pengoperasian kendaraan
                                            dan fitur-fitur yang berkaitan dengan berkendara.
                                        </li>
                                        <li>
                                            Dalam keadaan sehat, tidak dalam pengaruh obat-obatan 
                                            yang sedang dikonsumsi serta tidak dalam keadaan mabuk.
                                            Juga tidak mengidap penyakit dalam yang dapat berakibat fatal.
                                        </li>
                                        <li>
                                            Tidak mengoperasikan handphone selama test drive.
                                        </li>
                                        <li>
                                            Tidak merokok dan membawa makanan / minuman ke dalam mobil test drive.
                                        </li>
                                        <li>
                                            Ibu hamil dan balita tidak diperkenankan mengikuti test drive.
                                        </li>
                                        <li>
                                            Customer / pengemudi bertanggung jawab terhadap insiden yang terjadi
                                            karena kelalaian dalam mengemudi dan segala tuntutan yang diterima dari pihak ketiga.
                                        </li>
                                    </ol>
                                    <h5>Safety First!</h5>
                                    <div class="mb-3">
                                        <div class="form-check form-check-flex centered">
                                            <input class="form-check-input mr-2" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Saya setuju dengan peraturan dan pernyataan diatas
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <hr/>
                                <div class="d-flex centered">
                                    <div class="mb-3">
                                        <button type="button" class="btn btn-sm btn-danger">
                                            <i class="fa fa-paper-plane pr-1"></i>
                                                Kirim
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- jQuery -->
        <script src="../assets/js/jquery-3.6.1.min.js"></script>

        <!-- Bootstrap -->
        <script src="../assets/js/popper.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        
        <!-- Lazyload Plugins -->
        <script src=" https://cdn.jsdelivr.net/gh/aFarkas/lazysizes/lazysizes.min.js" async=""></script>

        <!-- Bootpag for Pagination -->
        <script src="../assets/js/jquery.simplePagination.js"></script>

        <script>
        
        
        </script>

    </body>

    
</html>