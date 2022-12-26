<?php
    require_once __DIR__ . '../../config.php'; 
?>
<!-- Chery Brosur & Price List pages -->
<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <title>Unduh Chery Brosur & Pricelist</title>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
        />
        <meta name="keyword" content="brosur mobil chery, brosur mobil chery medan, brosur mobil chery pekanbaru, harga mobil chery medan,
                                        harga mobil chery pekanbaru, harga tiggo 7 pro medan, harga tiggo 7 pro pekanbaru, harga tiggo 8 pro medan, harga tiggo 8 pro pekanbaru"/>
        <meta name="description" content="Dapatkan informasi mengenai harga, promo dan penawaran terbaru mobil chery di medan dan pekanbaru"/>
        <meta name="robots" content="index, follow"/>
        <meta property="og:site_name" content="Unduh Chery Brosur & Pricelist" />
        <meta property="og:type" content="website"/>
        <meta property="og:url" content="https://cheryorientalgroup.co.id/price-list/" />
        <meta property="og:title" content="Berita Chery" />
        <meta property="og:description" content="Dapatkan informasi mengenai harga, promo dan penawaran terbaru mobil chery di medan dan pekanbaru"/>
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
        <link rel="shortcut icon" href="<?=BASE_URL;?>favicon.ico">
        <link
            rel="icon"
            type="image/png"
            sizes="32x32"
            href="<?= BASE_URL; ?>favicon-32x32.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="<?= BASE_URL; ?>favicon-16x16.png"
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
            .car-logo {
                left: 12rem;
            }

            .car-img {
                right: 12rem;
            }

            .gap-row {
                flex-wrap: nowrap !important;
                gap: 5rem;
            }

            .gap-row-2 {
                flex-wrap: nowrap!important;
                gap: 1.5rem;
            }

            .button-padding {
                padding: .625em .25rem;
                z-index: 9999;
            }

            .border-rounded {
                border-radius: 35px;
                background-color: rgb(192, 11, 32) !important;
                color: #fff !important;
            }

            .border-rounded:hover {
                background-color: #000 !important;
                color: #fff !important;
            }

            .work-font {
                font-family: 'Work Sans', sans-serif !important;
                font-size: 14px !important;
            }

            .font-base {
                font-size: 1.125rem;
                line-height: 1.5rem;
            }

            .nav-pills .nav-link {
                color: #000 !important;
            }

            .nav-pills .nav-link.active, .nav-pills .show > .nav-link {
                background-color:rgb(192, 11, 32) !important;
                color: #fff !important;
            }

            .nav-link {
                padding: .875rem .875rem !important;
            }

            @media (max-width:768px) {
                .car-logo {
                    left: 0rem !important;
                }

                .gap-row {
                    flex-wrap: wrap !important;
                    gap: 1.5rem;
                }

                .gap-row-2 {
                    flex-wrap: wrap!important;
                }

                .fs50-scaled {
                    font-size: 50px !important;
                }

                .px-mobile-5 {
                    padding-right: 3rem !important;
                    padding-left: 3rem!important;
                }

            }

        </style>

    </head>

    <body>
        <header class="header-area header-sticky">
            <?php require_once ("../header.php"); ?>
        </header>

        <main>
            <section>
                <div class="mt-top-header">
                    <div class = "nav centered">
                        <ul class="relative nav nav-pills nav-fill ">
                            <li class="nav-item px-4" role="presentation">
                                <button class="nav-link active models-font" id="pills-t7-tab" 
                                    data-bs-toggle="pill" data-bs-target="#pills-t7"
                                    type="button" role="tab" aria-controls="pills-t7"
                                    aria-selected="true">TIGGO 7 PRO</button>
                            </li>
                            <li class="nav-item px-4" role="presentation">
                                <button class="nav-link models-font" id="pills-t8-tab"
                                    data-bs-toggle="pill" data-bs-target="#pills-t8"
                                    type="button" role="tab" aria-controls="pills-t8"
                                    aria-selected="true">TIGGO 8 PRO</button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane show active" id="pills-t7" role="tabpanel" aria-labelledby="pills-t7-tab">
                        <div class="py-3">
                            <div class="container mt-5 pt-3 pb-5 ">
                                <div class="row ">
                                    <div class="px-mobile-5 col-12 col-md-5 relative car-logo">
                                        <h1 class="models-font fs50-scaled chery-red">
                                            TIGGO 
                                        </h1>
                                        <h1 class="models-font fs50-scaled">
                                            7 PRO
                                        </h1>
                                        <div class="border-red-48 mt-5"></div>
                                    </div>
                                    <div class="col-12 col-md-7">
                                        <img class="img-fluid" src="assets/img/tiggo7pro.jpg">
                                        <div class="container gap-row row work-font mt-3">
                                            <a class="col-12 col-md-5 button-padding border-rounded bg-light
                                                btn centered" href="assets/brosur/Tiggo7Pro-brosur.pdf" target="_blank">
                                                <p class="centered-p font-base">Unduh Brosur</p>
                                            </a>
                                            <a class="col-12 col-md-5 button-padding border-rounded bg-light
                                                btn centered" href="assets/price-list/tiggo7pro-pricelist.png" target="_blank">
                                                <p class="centered-p font-base">Unduh Pricelist</p>
                                            </a>
                                        </div>
                                        <div class="container gap-row-2 row work-font mt-4">
                                            <div class="col-12 col-md-4">
                                                <h5 class="chery-red">1.5L T</h5>
                                                <h5>Engine</h5>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <h5 class="chery-red">4500 mm</h5>
                                                <h5>Length</h5>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <h5 class="chery-red">2627 mm</h5>
                                                <h5>Wheelbase</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane show" id="pills-t8" role="tabpanel" aria-labelledby="pills-t8-tab">
                        <div class="py-3">
                            <div class="container mt-5 pt-3 pb-5 ">
                                <div class="row ">
                                    <div class="px-mobile-5 col-12 col-md-5 relative car-logo">
                                        <h1 class="models-font fs50-scaled chery-red">
                                            TIGGO 
                                        </h1>
                                        <h1 class="models-font fs50-scaled">
                                            8 PRO
                                        </h1>
                                        <div class="border-red-48 mt-5"></div>
                                    </div>
                                    <div class="col-12 col-md-7">
                                        <img class="img-fluid" src="assets/img/tiggo8pro.jpg">
                                        <div class="container gap-row row work-font mt-3">
                                            <a class="col-12 col-md-5 button-padding border-rounded bg-light
                                                btn centered" href="assets/brosur/Tiggo8Pro-brosur.pdf" target="_blank">
                                                <p class="centered-p font-base">Unduh Brosur</p>
                                            </a>
                                            <a class="col-12 col-md-5 button-padding border-rounded bg-light
                                                btn centered" href="assets/price-list/tiggo8pro-pricelist.png" target="_blank">
                                                <p class="centered-p font-base">Unduh Pricelist</p>
                                            </a>
                                        </div>
                                        <div class="container gap-row-2 row work-font mt-4">
                                            <div class="col-12 col-md-4">
                                                <h5 class="chery-red">2.0L TGDI</h5>
                                                <h5>Engine</h5>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <h5 class="chery-red">4722 mm</h5>
                                                <h5>Length</h5>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <h5 class="chery-red">2710 mm</h5>
                                                <h5>Wheelbase</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="relative mt-3">
                    <img class="img-fluid" src="assets/img/withcherywithlove.jpeg">
                </div>

                <div class="bg-blue relative">
                    <div class="container px-5 pt-24 pb-5 work-font">
                        <div class="relative mt-4">
                            <img class="w-100 lazyload" data-src="assets/img/withcherywithlove2.jpeg">
                        </div>
                        <div class="py-5 text-white">
                            <h1 class="h1-custom-big">Mulai Perjalanan Baru dalam Gerakan Global Kami</h1>
                        </div>
                        <div class="container mt-3">
                            <div class = "row pr-10 border-left-red">
                                <div class = "col-12 col-md-6">
                                    <p class="text-white font-base">
                                        With Chery With Love adalah gerakan global 
                                        yang dimulai dari grup pemilik Chery di seluruh dunia.
                                        Pada bulan September, Chery secara resmi meluncurkan musim kedua
                                        With Chery With Love, mengundang pengguna dari lebih dari
                                        80 negara dan wilayah untuk berpartisipasi dalam
                                        aktivitas online dan offline di berbagai negara.
                                    </p>
                                </div>
                                <div class="col-12 col-md-6">
                                    <p class="text-white font-base ">
                                        Chery mencoba membangun platform interaksi 
                                        pengguna global untuk pertama kalinya, dan
                                        mengadakan musim pertama kegiatan "With Chery With Love".
                                        Pada bulan September, With Chery With Love Musim 2 memulai perjalanan barunya, 
                                        dengan acara yang mencakup puluhan negara di Eropa Timur,
                                        Amerika Selatan, Afrika, Timur Tengah, dan Asia Tenggara.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <img class="w-100 lazyload" data-src="assets/img/withcherywithlove3.jpeg">
                </div>

                <div class="relative mt-3">
                    <div class="container py-5 px-5 work-font">
                        <div class = "row">
                            <div class = "col-12 col-md-6">
                                <p class="font-base">
                                    Chery telah merencanakan berbagai kegiatan online dan 
                                    offline di negara-negara tersebut, yang saat ini sedang berlangsung di Brasil,
                                    Chili, Peru, Filipina, Kuwait, dan negara lainnya.
                                    Pengguna dapat berpartisipasi dalam kegiatan melalui
                                    akun resmi Chery di Facebook, Instagram dan media sosial lainnya.
                                </p>
                            </div>
                            <div class="col-12 col-md-6">
                                <p class="font-base">
                                    Chery Indonesia akan mengambil peran dalam gerakan With Chery With Love. 
                                    Akan ada lebih banyak acara menarik, 
                                    gathering dan banyak lagi yang akan datang. So, stay tune!    
                                </p>
                            </div>
                        </div>
                    </div>
                </div> -->

            </section>
        </main>

        <footer class="relative footer-border px-3 py-4">
            <?php require_once ("../footer.php"); ?>
        </footer>

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
        
        var news = document.getElementsByClassName('news');

        $(document).ready(function(){
            $('.models-click').click(function(){
            $(this).children('ul').toggleClass('visible-scroll-model');
            $('.layanan-click').find('ul').removeClass('visible-scroll-layanan');
            $('.info-click').find('ul').removeClass('visible-scroll-info');
            }) 
            
            $('.layanan-click').click(function(){
            $(this).children('ul').toggleClass('visible-scroll-layanan');
            $('.models-click').find('ul').removeClass('visible-scroll-model');
            $('.info-click').find('ul').removeClass('visible-scroll-info');
            })

            $('.info-click').click(function(){
            $(this).children('ul').toggleClass('visible-scroll-info');
            $('.models-click').find('ul').removeClass('visible-scroll-model');
            $('.layanan-click').find('ul').removeClass('visible-scroll-layanan');
            })
        
        })

        $(document).click(function(e){
            var clickover = $(e.target);
                if(!clickover.closest('nav').length){
                $('.models-click').find('ul').removeClass('visible-scroll-model');
                $('.layanan-click').find('ul').removeClass('visible-scroll-layanan');
                $('.info-click').find('ul').removeClass('visible-scroll-info');

                // slideup dropdown if user clicked outside of navbar
                var opened_nav = $('.nav').css('display') == 'block';

                // close the mobile navbar if user clicks outside of it
                if (opened_nav === true && !$(clickover).closest('nav').length) {
                    $('.menu-trigger').toggleClass('active');
                    $('.header-area .nav').slideToggle(200);
                }
            } 
        })

        if($('.menu-trigger').length){
            $(".menu-trigger").on('click', function() {	
            $(this).toggleClass('active');
            $('.header-area .nav').slideToggle(200);
            });
        }

        </script>

    </body>

    
</html>