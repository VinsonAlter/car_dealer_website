<?php
    require_once __DIR__ .'/../../config.php';
?>
<!-- Tiggo 7 Pro Pages -->
<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8"/>
        <title>Chery Tiggo 7 Pro</title>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
        />
        <meta name="keyword" content="Tiggo 7 Pro, Tiggo 7 Pro Medan, Tiggo 7 Pro Pekanbaru"/>
        <meta name="description" content="Chery Tiggo 7 Pro 
                                            memiliki keunggulan futuristik seperti ADAS (Advanced Driver Assistance System), 
                                            360 camera dengan surround view, Chery intelligent Voice Assistant, dan 
                                            panoramic sunroof ditambah sinergi antara desain, brand prestisius, 
                                            dan harga terjangkau, 
                                            membuat mobil Chery sangat relevan untuk Anda miliki."/>
        <meta name="robots" content="index, follow"/>
        <meta property="og:site_name" content="Chery Tiggo 7 Pro" />
        <meta property="og:type" content="website"/>
        <meta property="og:url" content="https://cheryorientalgroup.co.id/models/tiggo7pro/" />
        <meta property="og:title" content="Chery Tiggo 7 Pro" />
        <meta property="og:description" content="Chery Tiggo 7 Pro 
                                            memiliki keunggulan futuristik seperti ADAS (Advanced Driver Assistance System), 
                                            360 camera dengan surround view, Chery intelligent Voice Assistant, dan 
                                            panoramic sunroof ditambah sinergi antara desain, brand prestisius, 
                                            dan harga terjangkau, 
                                            membuat mobil Chery sangat relevan untuk Anda miliki."/> 
        <!-- Link Swiper's CSS -->  
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
        />
        <link 
            rel="stylesheet"
            type="text/css"
            href="../../assets/css/style.css"
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

            .tiggo7-text-bottom {
                top: 35%;
                font-size: 3rem !important;
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

            #tiggo7-iframe {
                width: 100%;
                height: 800px;
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

                #tiggo7-iframe {
                    height: 350px;
                }  
            } 

        </style>

    </head>


    <body>

        <?php require_once __DIR__ . "/../../buttons.php"; ?>

        <header class="header-area header-sticky">
            <?php require_once ("../../header.php"); ?>
        </header>

        <div class="relative mt-5">
            <video class="teaser-video" poster="assets/img/Tiggo 7 Pro.jpg" controls="">    
                <source src="assets/video/T7Pro.mp4" type="video/mp4">
            </video>
            <div class="playpause"></div>
        </div>
        <!-- Tiggo 7 Pro 360 -->
        <div class="relative mt-up-10">
            <iframe seamless="seamless" title="chery" id="tiggo7-iframe" width="100%" height="800px" src="https://360.chery.co.id/tiggo7pro/"></iframe>
        </div>
        <div class="relative mt-up-8">
            <!-- Desktop Tab View -->
            <div class = "desktop-nav left-4 right-4 absolute bottom-20 mb-6 centered">
                <ul class="relative nav nav-pills nav-fill ">
                    <li class="nav-item px-4" role="presentation">
                        <button class="nav-link active models-font" id="pills-dashboard-tab" 
                            data-bs-toggle="pill" data-bs-target="#pills-dashboard"
                            type="button" role="tab" aria-controls="pills-dashboard"
                            aria-selected="true">DASHBOARD</button>
                    </li>
                    <li class="nav-item px-4" role="presentation">
                        <button class="nav-link models-font" id="pills-trunk-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-trunk"
                            type="button" role="tab" aria-controls="pills-trunk"
                            aria-selected="true">TRUNK</button>
                    </li>
                    <li class="nav-item px-4" role="presentation">
                        <button class="nav-link models-font" id="pills-roof-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-roof"
                            type="button" role="tab" aria-controls="pills-roof"
                            aria-selected="true">PANORAMIC ROOF</button>
                    </li>
                    <li class="nav-item px-4" role="presentation">
                        <button class="nav-link models-font" id="pills-cam-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-cam"
                            type="button" role="tab" aria-controls="pills-cam"
                            aria-selected="true">360 HD PANORAMIC CAMERA</button>
                    </li>
                </ul>
            </div>
            
            <!-- Mobile Tab View -->
            <div class="mobile-nav relative">
                <ul class="relative nav nav-pills nav-fill py-3">
                    <li class="nav-item px-2 py-1" role="presentation">
                        <button class="nav-link active models-font" id="pills-dashboard-tab" 
                            data-bs-toggle="pill" data-bs-target="#pills-dashboard"
                            type="button" role="tab" aria-controls="pills-dashboard"
                            aria-selected="true">DASHBOARD</button>
                    </li>
                    <li class="nav-item px-2 py-1" role="presentation">
                        <button class="nav-link models-font" id="pills-trunk-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-trunk"
                            type="button" role="tab" aria-controls="pills-trunk"
                            aria-selected="true">TRUNK</button>
                    </li>
                    <li class="nav-item px-2 py-1" role="presentation">
                        <button class="nav-link models-font" id="pills-roof-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-roof"
                            type="button" role="tab" aria-controls="pills-roof"
                            aria-selected="true">PANORAMIC ROOF</button>
                    </li>
                    <li class="nav-item px-2 py-1" role="presentation">
                        <button class="nav-link models-font" id="pills-cam-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-cam"
                            type="button" role="tab" aria-controls="pills-cam"
                            aria-selected="true">360 HD PANORAMIC CAMERA</button>
                    </li>
                </ul>
            </div>
                
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane show active" id="pills-dashboard" role="tabpanel" aria-labelledby="pills-dashboard-tab">
                    <div class = "absolute top-48 left-20">
                        <h1 class = "pane-title models-font uppercase text-white">
                            DASHBOARD
                        </h1>
                    </div>
                    <img class="w-100" src="assets/img/Tiggo7Pro-interior.jpg" alt="Tiggo 7 Pro Interior">
                </div>
                <div class="tab-pane" id="pills-trunk" role="tabpanel" aria-labelledby="pills-trunk-tab">
                    <div class = "absolute top-48 left-20">
                        <h1 class = "pane-title models-font uppercase text-white">
                            TRUNK
                        </h1>
                    </div>
                    <img class="w-100" src="assets/img/Tiggo7Pro-trunk.jpg" alt="Tiggo 7 Pro Trunk">
                </div>
                <div class="tab-pane" id="pills-roof" role="tabpanel" aria-labelledby="pills-roof-tab">
                    <div class = "absolute top-48 left-20">
                        <h1 class = "pane-title models-font uppercase text-white">
                            PANORAMIC ROOF
                        </h1>
                    </div>
                    <img class="w-100" src="assets/img/Tiggo7Pro-pano-roof.jpg" alt="Tiggo 7 Panoramic Roof">
                </div>
                <div class="tab-pane" id="pills-cam" role="tabpanel" aria-labelledby="pills-cam-tab">
                    <div class = "col-4 absolute top-48 left-20">
                        <h1 class = "pane-title models-font uppercase text-white">
                            360 HD PANORAMIC CAMERA
                        </h1>
                    </div>
                    <img class="w-100" src="assets/img/Tiggo7Pro-pano-cam.jpg" alt="Tiggo 7 360 HD Panoramic Camera">
                </div>
            </div>
        </div>
        
        <!-- Power & Performances -->
        <div class="relative bg-blue w-full">
            <div class="p-10 d-block">
                <h1 class="text-white h1-custom">Power & Performance</h1>
            </div>
            <div class="row mx-auto centered">
                <div class="col-12 col-md-6 order-2 order-md-1">
                    <div class="px-2 font-work">
                        <h5 class="py-3 text-white fw-bold">
                            1.5. Turbo Charged Engine
                        </h5>
                        <p class="py-4 text-white border-desc">
                            Mesin Tiggo 7 Pro yang bertenaga memberikan 
                            sensasi berkendara anda lebih menyenangkan untuk
                            melewati berbagai jalan raya. Mesin turbo ini
                            dapat menghasilkan tenaga sebesar 155 HP.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 order-1 order-md-2 p-0">
                    <div>
                        <img class="w-100 lazyload" data-src="assets/img/Tiggo7Pro-engine.jpg" 
                            alt="Tiggo 7 Pro engine">
                    </div>
                </div>
            </div>
            <div class="row mx-auto centered">
                <div class="col-12 col-md-6 order-2 order-md-2">
                    <div class="px-2 font-work">
                        <h5 class="py-3 text-white fw-bold">
                            T1X Comfort Chassis
                        </h5>
                        <p class="py-4 text-white border-desc">
                           T1x memiliki ruang kepala yang lebih baik 
                           untuk kursi bagian depan dan bagian belakang,
                           dan memiliki ground clearance yang tinggi.
                           Approach dan departure angles juga memastikan
                           bahwa kinerja off-road yang lebih baik.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 order-1 order-md-1 p-0">
                    <div>
                        <img class="w-100 lazyload" data-src="assets/img/Tiggo7Pro-chassis.jpg" 
                            alt="Tiggo 7 Pro chassis">
                    </div>
                </div>
            </div>
        </div>

        <!-- Car Features -->
        <div class="relative w-full">
            <div class="p-10 d-block">
                <h1 class="h1-custom">Features</h1>
            </div>
            <div class="row mx-auto centered">
                <div class="col-12 col-md-6 order-2 order-md-2">
                    <div class="px-2 font-work">
                        <h5 class="py-3 fw-bold">
                            Intelligent Voice Assistant
                        </h5>
                        <p class="py-4 border-desc">
                            Teknologi sistem cerdas yang dapat berinteraksi 
                            dengan Anda dengan 
                            melalui perintah suara, untuk mengoperasikan 
                            fitur-fitur pada mobil Anda. 
                            Dapat diaktifkan dengan mengatakan “Hello Chery” 
                            atau dengan 
                            cara menekan tombol pada stir kemudi, lalu di 
                            ikuti dengan mengatakan perintah untuk 
                            fitur di mobil yang ingin diatur oleh Anda.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 order-1 order-md-1 p-0">
                    <div>
                        <img class="w-100 lazyload" data-src="assets/img/Tiggo7Pro-voice-assistant.jpg" 
                            alt="Tiggo 7 Pro voice assistant">
                    </div>
                </div>
            </div>
            <div class="row mx-auto centered">
                <div class="col-12 col-md-6 order-2 order-md-1">
                    <div class="px-3 font-work">
                        <h5 class="py-3 fw-bold">
                            Intelligent Wireless Charger
                        </h5>
                        <p class="py-4 border-desc">
                           Mengisi daya pada smartphone anda secara wireless,
                           serta mempunyai sistem pengingat saat perangkat 
                           tertinggal di dalam kendaraan.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 order-1 order-md-2 p-0">
                    <div>
                        <img class="w-100 lazyload" data-src="assets/img/Tiggo7Pro-wireless-charger.jpg" 
                            alt="Tiggo 7 Pro wireless charger">
                    </div>
                </div>
            </div>
            <div class="row mx-auto centered">
                <div class="col-12 col-md-6 order-2 order-md-2">
                    <div class="px-3 font-work">
                        <h5 class="py-3 fw-bold">
                            Advanced Driving Assistants Systems
                        </h5>
                        <p class="py-4 border-desc">
                           Sistem cerdas yang akan membantu anda lebih
                           nyaman saat berkendara.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 order-1 order-md-1 p-0">
                    <div>
                        <img class="w-100 lazyload" data-src="assets/img/Tiggo7Pro-driving-assist.jpg" 
                            alt="Tiggo 7 Pro driving assistants">
                    </div>
                </div>
            </div>
            <div class="row mx-auto centered">
                <div class="col-12 col-md-6 order-2 order-md-1">
                    <div class="px-3 font-work">
                        <h5 class="py-3 fw-bold">
                            Panel Console
                        </h5>
                        <p class="py-4 border-desc">
                           Interior dilengkapi dengan teknologi terdepan
                           yang modern dan material berkualitas tinggi
                           untuk kenyamanan anda.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 order-1 order-md-2 p-0">
                    <div>
                        <img class="w-100 lazyload" data-src="assets/img/Tiggo7Pro-panel-console.jpg" 
                            alt="Tiggo 7 Pro panel console">
                    </div>
                </div>
            </div>
            <div class="row mx-auto centered">
                <div class="col-12 col-md-6 order-2 order-md-2">
                    <div class="px-3 font-work">
                        <h5 class="py-3 fw-bold">
                            Dynamic-tech Interior
                        </h5>
                        <p class="py-4 border-desc"></p>
                    </div>
                </div>
                <div class="col-12 col-md-6 order-1 order-md-1 p-0">
                    <div>
                        <img class="w-100 lazyload" data-src="assets/img/Tiggo7Pro-dynamic-interior.jpg" 
                            alt="Tiggo 7 Pro dynamic tech interior">
                    </div>
                </div>
            </div>
            <div class="row mx-auto centered">
                <div class="col-12 col-md-6 order-2 order-md-1">
                    <div class="px-3 font-work">
                        <h5 class="py-3 fw-bold">
                            360 HD Panoramic Camera
                        </h5>
                        <p class="py-4 border-desc">
                            Fitur kamera yang dapat memantau dan diputar 
                            untuk melihat keadaan di sekitar kendaraan 
                            melalui headunit
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 order-1 order-md-2 p-0">
                    <div>
                        <img class="w-100 lazyload" data-src="assets/img/Tiggo7Pro-pano-cam.jpg" 
                            alt="Tiggo 7 Pro 360 HD Panoramic Camera">
                    </div>
                </div>
            </div>
            <div class="row mx-auto centered">
                <div class="col-12 col-md-6 order-2 order-md-2">
                    <div class="px-3 font-work">
                        <h5 class="py-3 fw-bold">
                            Pendingin Udara Ganda
                        </h5>
                        <p class="py-4 border-desc">
                            8 inci panel digital dengan pendingin udara ganda
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 order-1 order-md-1 p-0">
                    <div>
                        <img class="w-100 lazyload" data-src="assets/img/Tiggo7Pro-dual-ac.jpg" 
                            alt="Tiggo 7 Pro 360 pendingin udara ganda">
                    </div>
                </div>
            </div>
            <div class="row mx-auto centered">
                <div class="col-12 col-md-6 order-2 order-md-1">
                    <div class="px-3 font-work">
                        <h5 class="py-3 fw-bold">
                            Airbags
                        </h5>
                        <p class="py-4 border-desc">
                            Bekleding tipe 6 airbag dapat memberikan 
                            sebuah perlindungan yang komprehensif dan aman
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 order-1 order-md-2 p-0">
                    <div>
                        <img class="w-100 lazyload" data-src="assets/img/Tiggo7Pro-airbags.jpg" 
                            alt="Tiggo 7 Pro airbags">
                    </div>
                </div>
            </div>
            <div class="relative">
                <video class="teaser-video" poster="assets/img/Tiggo7poster2.jpg" controls="">    
                    <source src="assets/video/T7Pro2.mp4" type="video/mp4">
                </video>
                <div class="playpause"></div>
            </div>
            <div class="bg-wireframe w-100 mt-up-6">
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
                            <div class = "text-center tiggo-nav" onclick="window.open('<?=BASE_URL?>price-list/assets/price-list/tiggo7pro-pricelist-medan.webp', '_blank')">
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
                <div class = "d-flex flex-column relative tiggo7-text-bottom centered models-font">
                    <h1 class="chery-red text-center mb-3">Tiggo 7 Pro</h1>
                    <div class="d-flex gap-row mb-5 centered">
                        <a class="col-12 my-3 button-padding border-rounded bg-light
                                models-font btn" href="../../price-list/assets/brosur/Tiggo7Pro-brosur.pdf" target="_blank">
                            <h5 class="text-center">Unduh Brosur</h5>
                        </a>                     
                        <!-- <a class="col-9 col-md-6 my-3 button-padding border-rounded bg-light
                                models-font btn" href="../../price-list/assets/price-list/tiggo7pro-pricelist.png" target="_blank">
                            <h5 class="text-center">Unduh Price List</h5>
                        </a> -->
                    </div>
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