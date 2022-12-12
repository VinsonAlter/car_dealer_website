<?php
    require_once __DIR__ . '/../config.php'; 
?>
<!-- Models pages -->
<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <title>Chery Model Page</title>
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
            href="../assets/logo/favicon-32x32.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="../assets/logo/favicon-32x32.png"
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
                background-image: url("../assets/img/wireframe.jpg");
                background-size: cover;
                background-repeat:no-repeat;
                background-position:center;
            }

            .border-rounded {
                border-radius: 25px;
                border: 2px solid grey;
            }

            .button-padding {
                padding: 2.5rem 2.5rem;
            }

            .gap-row {
                flex-wrap: nowrap !important;
                gap: 1.5em;
            }

            .border-rounded:hover {
                background-color: rgb(192, 11, 32) !important;
                color: #fff;
            }

            @media (max-width: 768px) {
                .gap-row {
                    flex-wrap: wrap !important;
                }

                h4 {
                    font-size: calc(1rem + .3vw);
                }
            }
        </style>

    </head>

    <body>
        <header class="header-area header-sticky">
            <?php require_once ("../header.php"); ?>
        </header>

        <section>
            <div class = "bg-wireframe">
                <div class="container " style="height:600px;">
                    <div class="py-3 mt-5">
                        <div class="container mt-5 pt-3">
                            <h1 class="models-font fs50-scaled chery-red ">
                                MODELS
                            </h1>
                        </div>
                    </div>

                    <div class="px-4">
                        <div class="row gap-row mb-5">
                            <a class="col-12 col-md-6 button-padding border-rounded bg-light
                                    models-font btn" href="tiggo7pro/">
                                <h4>Tiggo 7 Pro</h4>
                            </a>
                                
                            <a class="col-12 col-md-6 button-padding border-rounded bg-light
                                    models-font btn" href="tiggo8pro/">
                                <h4>Tiggo 8 Pro</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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