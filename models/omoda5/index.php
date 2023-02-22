<?php
    require_once __DIR__ .'/../../config.php';
?>
<!-- Omoda 5 Pages -->
<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8"/>
        <title>Omoda 5</title>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0"
        />
        <link 
            rel="stylesheet"
            type="text/css"
            href="../../assets/css/style.css"
        />
        <meta name="keyword" content="Chery Omoda 5, Chery Omoda 5 Medan, Chery Omoda 5 Pekanbaru, Omoda 5"/>
        <meta name="description" content="Chery OMODA 5 adalah SUV 5 Seater yang menawarkan kesan elegan dan kecanggihan. 
                                            Dengan konsep 'Art in Motion', mobil di segmen crossover ini 
                                            telah terkomputerisasi dengan sistem ADAS sehingga pengguna merasa lebih aman 
                                            dan nyaman selama bermobilitas."/>
        <meta name="robots" content="index, follow"/>
        <meta property="og:site_name" content="Chery Omoda 5" />
        <meta property="og:type" content="website"/>
        <meta property="og:url" content="https://cheryorientalgroup.co.id/models/tiggo7pro/" />
        <meta property="og:title" content="Chery Omoda 5" />
        <meta property="og:description" content="Chery OMODA 5 adalah SUV 5 Seater yang menawarkan kesan elegan dan kecanggihan. 
                                                Dengan konsep 'Art in Motion', mobil di segmen crossover ini 
                                                telah terkomputerisasi dengan sistem ADAS sehingga pengguna merasa lebih aman 
                                                dan nyaman selama bermobilitas."/> 
        <!-- Link Swiper's CSS -->  
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
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
        
        <style>
           

           .bg-wireframe {
                background: url('../../assets/img/wireframe.jpg') no-repeat center center;
                object-fit: cover;
                height: 500px;
                width: 100%;
            }

            .omoda-brochure {
                background: url('assets/img/omoda-brochure.png') no-repeat center center;
                object-fit:cover;
                width: 100%;
                height: 500px;
            }

            .omoda-brochure-text {
                top: 12.5%;
            }

            .fs64-scaled {
                font-size: 52px;
            }

            .lh-1half {
                line-height: 2;
            }

            .btn-red {
                background-color: #C00B20;
            }

            .btn-red:hover {
                filter: brightness(90%);
            }

            .border-rounded {
                border-radius: 25px;
                border: 2px solid grey;
            }

            .button-padding {
                padding: .5rem .5rem;
            }

            .button-padding h5 {
                padding: 0;
                margin: 0;
            }

            .gap-row {
                flex-wrap: nowrap !important;
                gap: 2rem;
            }

            .border-rounded:hover {
                background-color: rgb(192, 11, 32) !important;
                color: #fff;
            }

            @media (max-width: 768px) {
                .tiggo7-text-bottom {
                    top: 30%;
                    font-size: 1.875rem !important;
                } 
                .gap-row {
                    flex-wrap: wrap !important;
                    gap: .125rem;
                }

                .button-padding h5 {
                    font-size: calc(1rem + .3vw);
                }
                
                .fs64-scaled {
                    font-size: 24px;
                }
            } 

        </style>

    </head>


    <body>

        <?php require_once __DIR__ . "/../../buttons.php"; ?>

        <header class="header-area header-sticky">
            <?php require_once ("../../header.php"); ?>
        </header>
    
        <div class="relative mt-5 pb-1 pt-3">
            <img class="w-100" src="assets/img/prebook-omoda.jpg" alt="banner prebook Chery Omoda 5">
        </div>

        <div class="relative w-full">
            <!-- Omoda 5 Exterior -->
            <div class="p-4 d-block">
                <h1 class="omoda-font">Interior</h1>
            </div>
            <img class="w-100 lazyload" data-src="assets/img/omoda-ivc.jpg" alt="Chery Omoda 5 Intelligent Voice Control">
            <img class="w-100 lazyload" data-src="assets/img/omoda-ventilation-seat.jpg" alt="Sport Leather Seat With Ventilation">
            <img class="w-100 lazyload" data-src="assets/img/omoda-cabin.jpg" alt="Futuristic Cabin Design">
            <img class="w-100 lazyload" data-src="assets/img/omoda-ambient-light.jpg" alt="Multicolor Ambient Light">
            <img class="w-100 lazyload" data-src="assets/img/omoda-super-large-screen.jpg" alt="Multicolor Ambient Light">
            <!-- Omoda 5 Features -->
            <div class="p-4 d-block">
                <h1 class="omoda-font">Features</h1> 
            </div>
            <img class="w-100 lazyload" data-src="assets/img/omoda-wireless-charger.jpg" alt="Wireless Charger with Phone Reminder">
            <img class="w-100 lazyload" data-src="assets/img/omoda-premium-audio.jpg" alt="Sony Premium Audio Sound">
            <img class="w-100 lazyload" data-src="assets/img/omoda-door-mirror-heating.jpg" alt="Door Mirror Heating">
            <!-- Omoda 5 Specification -->
            <div class="p-4 d-block">
                <h1 class="omoda-font">Specification</h1> 
            </div>
            <img class="w-100 lazyload" data-src="assets/img/omoda-spec.jpg" alt="Omoda 5 Specification">
            <img class="w-100 lazyload" data-src="assets/img/omoda-suv.jpg" alt="Omoda 5 Dynamic and Cross-over SUV">
            <img class="w-100 lazyload" data-src="assets/img/omoda-engine-tgdi.jpg" alt="Omoda 5 1.5 TGDI Engine">
            <!-- Omoda 5 Brochure Section -->
            <div class="omoda-brochure">
            <div class="container-fluid pl-0">
                <div class="d-flex work-font text-white cp">
                    <div class="col-3 col-md-4 mr-2">
                        <!-- Temporarily still used the google form test drive -->
                        <div class = "text-center tiggo-nav" onclick="window.open('https://forms.gle/csGRdsmUEcbmxdxF8', '_blank')">
                            <!-- In future, this test drive form will be used, below is just the template -->
                            <!-- <div class = "text-center tiggo-nav" onclick="window.open('<?=BASE_URL?>test-drive/', '_blank')">     -->
                            <i class="fa-solid fa-car-on"></i>
                            <p class="p-0 m-0 fs-bold-600">
                                Test Drive
                            </p>
                        </div>
                    </div>
                    <div class="col-5 col-md-4 mr-2">
                        <div class = "text-center tiggo-nav" onclick="window.open('<?=BASE_URL?>price-list/assets/price-list/tiggo8pro-pricelist-medan.webp', '_blank')">
                            <i class="fas fa-book-reader"></i> 
                            <p class="p-0 m-0 fs-bold-600">
                                Unduh Price List
                            </p>
                        </div>
                    </div>
                    <div class="col-4 col-md-4">
                        <div class = "text-center tiggo-nav" onclick="window.open('https://forms.gle/nh9R9RwHzGug2MeF9', '_blank')">
                            <i class="fas fa-comments"></i>                 
                            <p class="p-0 m-0 fs-bold-600">
                                Kontak Kami
                            </p>
                        </div>
                    </div>
                </div>
            </div>
                <div class = "px-5 d-flex flex-column relative omoda-font omoda-brochure-text">
                    <p class="relative text-white mb-2 fw-bold fs64-scaled lh-1half">Download Brosur</p>
                    <p class="relative text-white mb-3 fw-bold fs64-scaled lh-1half">Omoda 5 Sekarang Juga</p>
                    <a href="javascript:void(0)">
                        <button class="btn btn-lg fw-bold btn-red text-white">
                            Download Brosur
                        </button>
                    </a>
                    <!-- <div class="d-flex gap-row mb-5 centered">
                        <a class="col-12 my-3 button-padding border-rounded bg-light
                                models-font btn" href="../../price-list/assets/brosur/Tiggo8Pro-brosur.pdf" target="_blank">
                            <h5 class="text-center">Download Brosur</h5>
                        </a>                         
                    </div> -->
                </div>
            </div>
        </div>

        <footer class="relative footer-border mt-up-8 px-3 py-4">
            <?php require_once ("../../footer.php"); ?>
        </footer>

        <!-- jQuery -->
        <script src="../../assets/js/jquery-3.6.1.min.js"></script>

        <!-- Bootstrap -->
        <script src="../../assets/js/popper.js"></script>
        <script src="../../assets/js/bootstrap.min.js"></script>
        
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

        // PLay Button Function
        $('.teaser-video').parent().click(function () {
            if($(this).children(".teaser-video").get(0).paused){
                $(this).children(".teaser-video").get(0).play();
                $(this).children(".playpause").fadeOut();
            }else{
            $(this).children(".teaser-video").get(0).pause();
                $(this).children(".playpause").fadeIn();
            }
        });
        </script>
    </body>
</html>