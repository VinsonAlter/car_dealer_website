<?php
    $title = $_GET['title'];
?>

<!-- Berita pages -->
<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <title>Chery Berita Page</title>
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
            href="/chery_template/assets/logo/favicon-32x32.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="/chery_template/assets/logo/favicon-32x32.png"
        />
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
        
        <!-- Font Awesome Version 6 Plugins -->
        <link rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

        <style>
            @media (max-width:768px) {
                .news-text {
                    font-size: 13.5px;
                }
            }

            .breadcrumb-item a:hover {
                color: rgb(192, 11, 32);
            }
        </style>

    </head>

    <body>
        <header class="header-area header-sticky">
            <?php readfile("../header.php"); ?>
        </header>
        
        <div class="mx-auto mt-top-header relative container">
            <nav aria-label="breadcrumb">
                <ol class="px-2 breadcrumb">
                    <li class="breadcrumb-item"><a href="../berita/">Kembali</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Berita</li>
                </ol>
            </nav>
        </div>

        <section class="relative container mx-auto mt-5">
            <div class="row centered">
                <div class="col-12 col-md-8">
                    <h1 class="text-capitalize news-title">
                        <!-- Insert title here -->
                    </h1>
                    <p class="text-muted news-date">
                        <!-- Insert date here -->
                    </p>
                    <img class="w-100 news-img">
                        <!-- Insert img here -->
                    </img>
                </div>
                <div class="col-11 col-md-8 mt-4 font-work text-justify news-content">
                    <!-- Insert News Content here -->
                </div>
            </div>
        </section>

        <section class="relative mt-5">
            <?php include '../news.php'?>
        </section>

        <footer class="relative footer-border px-3 py-4">
            <?php readfile("../footer.php"); ?>
        </footer>

        <!-- jQuery -->
        <script src="../assets/js/jquery-3.6.1.min.js"></script>

        <!-- Bootstrap -->
        <script src="../assets/js/popper.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        
        <script src=" https://cdn.jsdelivr.net/gh/aFarkas/lazysizes/lazysizes.min.js" async=""></script>

        <script>
      
        // Navbar dropdown function 

        var get_title = "<?php echo $title?>";

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
            $(this).children('ul').addClass('visible-scroll-info');
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

        fetch('/chery_template/news.json')
            .then(function (response) {
                return response.json();
            })
            .then(function (data) {
                appendData(data);
            })
            .catch(function (err) {
                console.log('error: ' + err);
            });

            function appendData(data) {
                var title = document.getElementsByClassName("news-title");
                var date = document.getElementsByClassName("news-date");
                var img = document.getElementsByClassName("news-img");
                var content = document.getElementsByClassName('news-content');
                var news = document.getElementsByClassName('news');
                // var totalNews = 3;
                // var showFrom = data.length - totalNews;
                for (var i = 0; i < data.length; i++) {
                    if (data[i].slug.includes(get_title)) {
                        var slicedData = parseInt(data[i].id);
                        $(title).append().html(data[i].title);
                        $(date).append().html(data[i].date);
                        $(img).attr("src", data[i].img);
                        $(content).append().html(data[i].content);
                        var totalNews = 3;
                        var showFrom = slicedData;
                        var showTo = showFrom + totalNews;
                        // var showBerita = (data[showFrom].id);
                        // var showBeritaTo = (data[showTo].id);
                        for (var i = showFrom; i <= showTo - 1; i++) {
                            $($('<div>').attr({
                                    class: 'col col-news mb-3'
                                }).append(
                                    $($('<div>').attr({
                                    class: 'card card-news text-dark mb-3 shadow-lg h-100'
                                    })).append(
                                    ($('<div>').attr({
                                        class: 'user-img'
                                    })).append(
                                    $('<img>').attr({
                                        class: 'card-img-top',
                                        src: data[i].img,
                                    })),   
                                    ($('<div>').attr({
                                        class: 'card-body'
                                    })).append(
                                        ($('<p>').attr({
                                        class: 'card-title'
                                        })).append(
                                        $('<h5>').attr({
                                            class: 'card-title font-work',
                                        }).html(data[i].title)
                                        ),
                                        ($('<p>').attr({
                                        class: 'card-text text-muted card-date'
                                        })).append().html(data[i].date),
                                        ($('<p>').attr({
                                        class: 'card-text card-content font-work'
                                        })).append().html(data[i].preview),
                                        $('<a>').attr({
                                        class: 'btn news-button text-center font-work',
                                        href: "/chery_template/berita/detail.php?title=" + data[i].slug
                                        }).html("Lebih lanjut...")
                                    )
                                    )
                                )
                            ).appendTo(news);
                        } console.log(slicedData);
                            
                        }
                        
                    }
                    
                }

        </script>

    </body>

    
</html>