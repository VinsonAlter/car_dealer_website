<!-- About Chery pages -->
<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <title>About Chery Page</title>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
        />
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
            href="/chery_template/assets/logo/logo-chery-oriental-stars.png"
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
            .h1-custom-big {
                font-size: 2.25rem;
                line-height: 2.5rem;
            }

            .work-font {
                font-family: 'Work Sans', sans-serif !important;
                font-size: 14px !important;
            }

            .font-base {
                font-size: 1rem;
                line-height: 1.5rem;
            }

            @media (max-width:768px) {
                .teaser-video { 
                    height: auto;
                }

                .font-base {
                    font-size: .895rem;
                }
                
                .border-red-80 {
                    width: 12rem;
                }
            }

            @media (min-width: 1024px){
                .text-lg {
                    font-size: 1.5rem !important;
                    line-height: 2rem !important;
                }
            }

            .text-lg {
                font-size: 1.125rem;
                line-height: 1.75rem;
            }
        </style>

    </head>

    <body>
        <header class="header-area header-sticky">
            <?php readfile("../header.php"); ?>
        </header>

        <main>
            <section>
                <div class="py-3 mt-5">
                    <div class="container mt-5 pt-3 pb-5 ">
                        <h1 class="models-font fs50-scaled chery-red ">
                            TENTANG
                        </h1>
                        <h1 class="models-font fs50-scaled">
                            CHERY
                        </h1>
                        <div class="border-red-80 mt-5"></div>
                    </div>
                </div>

                <div class="bg-blue relative">
                    <div class="container px-5 py-5 work-font">
                        <h1 class="text-white h1-custom-big">Cerita Kami</h1>
                        <div class="relative mt-4">
                            <video class="teaser-video" poster="assets/img/chery_placeholder.jpeg" controls="">    
                                <source src="assets/video/about_chery.mp4" type="video/mp4">
                            </video>
                            <div class="playpause"></div>
                        </div>
                        <div class="mt-3">
                            <p class="text-white text-lg border-left-red pr-10">
                                Selama 20 tahun terakhir, Chery selalu menekankan inovasi, 
                                mendirikan pusat riset dan pengembangan di Cina, Jerman, 
                                Amerika Serikat, dan Brasil. Komitment ini membentuk tim otomotif 
                                berkelas Internasional yang terdiri lebih dari 5.500 ahli,
                                sehingga secara bertahap membangun teknologi holistik dan 
                                produk-produk berinovasi tinggi.
                                Chery telah berhasil menciptakan produk terbaik seperti Arrizo, Tiggo
                                dengan penjualan di pasar Internasional lebih dari 10 juta unit.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="relative mt-3">
                    <div class="container px-5 py-5 work-font">
                        <h1 class="h1-custom-big">Mitra</h1>
                        <div class="mt-3">
                            <p class="font-base text-justify">
                                Chery selalu konsisten menerapkan strategi globalisasi sejak 
                                didirikan dan telah menjadi perusahaan mobil pertama di China 
                                yang mengekspor kendaraan, suku cadang CKD, mesin,
                                teknologi manufaktur, dan peralatan ke pasar Internasional.
                            </p>
                            <p class="font-base mt-2 text-justify">
                                Pada tahun 2012, Chery dan Jaguar Land Rover Motors 
                                bersama-sama berinvestasi dalam pendirian 
                                Chery Jaguar Land Rover Motors Co., Ltd., 
                                yang merupakan perusahaan 
                                mobil high-end joint venture Tiongkok-Inggris pertama di China.
                            </p>
                            <p class="font-base mt-2 text-justify">
                                Chery tidak hanya berfokus pada 
                                teknologi otomotif tetapi juga menuju era kendaraan cerdas. 
                                Hingga saat ini, Chery bekerja sama dengan 
                                perusahaan terkemuka di bidang teknologi cerdas, 
                                seperti Horizon Robotics, Huawei, iFly Tek, Alibaba, dll.
                            </p>
                        </div>
                        <div class="mt-5">
                            <img class="img-fluid lazyload" data-src="assets/img/chery-joint.jpeg"> 
                        </div>
                    </div>
                </div>

            </section>
        </main>

        <footer class="relative footer-border px-3 py-4">
            <?php readfile("../footer.php"); ?>
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