<?php
    require_once __DIR__ .'../../config.php';
?>
<!DOCTYPE HTML>
<html lang='id'>
    <head>
        <meta charset="utf-8"/>
        <title>Program Purna Jual</title>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
        />
        <meta name="keyword" content="Program Purna Jual, Garansi Mesin 10 Tahun,
                                        Garansi Kendaraan 6 Tahun, Gratis Perawatan 4 Tahun"/>
        <meta name="description" content="Nikmati gratis biaya perawatan maupun service di dealer resmi mobil Chery"/>
        <meta name="robots" content="index, follow"/>
        <meta property="og:site_name" content="Program Purna Jual" />
        <meta property="og:type" content="website"/>
        <meta property="og:url" content="https://cheryorientalgroup.co.id/program-purna-jual/" />
        <meta property="og:title" content="Program Purna Jual" />
        <meta property="og:description" content="Nikmati gratis biaya perawatan maupun service di dealer resmi mobil Chery"/>
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
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
        
        <!-- Font Awesome Version 6 Plugins -->
        <link rel="stylesheet" 
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    </head>

    <body>
        <?php require_once __DIR__ . "/../buttons.php"; ?>

        <header class="header-area header-sticky">
            <?php require_once ("../header.php"); ?>
        </header>

        <div class="relative mt-20">
            <img class="w-100 h-100" src="../assets/garansi/garansi_chery.webp"
                alt="Garansi Mobil Chery Indonesia">
        </div>

        <div class="relative w-full">
            <div class="p-10 d-block">
                <h1 class="h1-custom">Program Purna Jual</h1>
            </div>
            <div class="row mx-auto centered">
                <div class="col-12 col-md-6 order-2 order-md-1">
                    <div class="px-2 px-md-4 font-work">
                        <h5 class="py-3 fw-bold">
                            Garansi Kendaraan
                        </h5>
                        <p class="py-2 border-desc">
                            PT Chery Motor Indonesia berkomitmen seluruh 
                            pelanggan setia Chery Indonesia dengan memberikan 
                            garansi kendaraan selama 6 tahun/150.000 km apabila
                            terdapat cacat material atau kesalahan dari hasil kerja 
                            pabrik.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 order-1 order-md-2 p-0">
                    <div>
                        <img class="w-100 lazyload" data-src="../assets/garansi/garansi_6_tahun.webp" 
                            alt="Garansi Kendaraan selama 6 tahun">
                    </div>
                </div>
            </div>
            <div class="row mx-auto centered">
                <div class="col-12 col-md-6 order-2 order-md-2">
                    <div class="px-3 px-md-4 font-work">
                        <h5 class="py-3 fw-bold">
                            Garansi Mesin
                        </h5>
                        <p class="py-2 border-desc">
                           PT Chery Motor Indonesia memberikan garansi 
                           selama 10 tahun/1.000.000 km spesial untuk mesin Tiggo 
                           series dengan ketentuan mesin tersebut mengalami cacat 
                           material atau kesalahan dari hasil kerja pabrik.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 order-1 order-md-1 p-0">
                    <div>
                        <img class="w-100 lazyload" data-src="../assets/garansi/garansi_mesin.webp" 
                            alt="Garansi Mesin selama 10 tahun">
                    </div>
                </div>
            </div>
            <div class="row mx-auto centered">
                <div class="col-12 col-md-6 order-2 order-md-1">
                    <div class="px-2 px-md-4 font-work">
                        <h5 class="py-3 fw-bold">
                            Gratis Perawatan
                        </h5>
                        <p class="py-2 border-desc">
                            PT Chery Motor Indonesia berkomitmen untuk 
                            memberikan gratis perawatan atau service di dealer 
                            resmi PT Chery Indonesia selama 4 tahun/60.000 KM 
                            kepada seluruh pelanggan setia Chery Indonesia.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 order-1 order-md-2 p-0">
                    <div>
                        <img class="w-100 lazyload" data-src="../assets/garansi/gratis_jasa.webp" 
                            alt="Gratis Perawatan & Service Mobil di Dealer Resmi Chery">
                    </div>
                </div>
            </div>
        </div>

        <footer class="relative footer-border px-3 py-4">
            <?php require_once ("../footer.php"); ?>
        </footer>

        <!-- jQuery -->
        <script src="../assets/js/jquery-3.6.1.min.js"></script>

        <!-- Bootstrap -->
        <script src="../assets/js/popper.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        
        <script src=" https://cdn.jsdelivr.net/gh/aFarkas/lazysizes/lazysizes.min.js" async=""></script>

        <script>
      
        // Navbar dropdown function 

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