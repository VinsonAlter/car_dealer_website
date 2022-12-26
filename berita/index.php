<?php
    require_once __DIR__ . '/../config.php'; 
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

        <!-- Simple Pagination CSS -->
        <link 
            rel="stylesheet"
            type="text/css"
            href="../assets/css/simplePagination.css"
        />
        <!-- Favicon Icon -->
        <link
            rel="icon"
            type="image/png"
            sizes="48x48"
            href="<?= BASE_URL; ?>favicon-48x48.png"
        />
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
            .simple-pagination {
                display: flex;
            }

            .light-theme a,
            .light-theme .current,
            .light-them span {
                padding: .225rem .625rem;
            }
        </style>

    </head>

    <body>
        <header class="header-area header-sticky">
            <?php require_once ("../header.php"); ?>
        </header>

        <main>
            <section>
                <div class="py-3 mt-4">
                    <?php require_once "../news.php"; ?>
                </div>
            </section>
            <div class="mt-up-65 py-3">
                <div id = "pagination-container" class="simple-pagination justify-content-center"> 
                    
                </div>
            </div>
        </main>

        <footer class="relative footer-border px-5 py-4">
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

            // fetch json data for news letter 

            fetch('../news.json')
                .then(function (response) {
                    return response.json();
                })
                .then(function (data) {
                    appendData(data);
                    /* pagination part */
                    var items = $(".list-wrapper .list-item");
                    var numItems = items.length;
                    var perPage = 3;
                    items.slice(perPage).hide();
                    $('#pagination-container').pagination({
                        cssStyle: 'light-theme',
                        items: numItems,
                        itemsOnPage: perPage,
                        prevText: "&laquo;",
                        nextText: "&raquo;",
                        onPageClick: function (pageNumber) {
                            var showFrom = perPage * (pageNumber - 1);
                            var showTo = showFrom + perPage;
                            items.hide().slice(showFrom, showTo).show();
                        }
                    });
                })
                .catch(function (err) {
                    console.log('error: ' + err);
                });
                
                /* Dynamic JSON data append */
                function appendData(data) {                    
                    for (var i = 0; i < data.length; i++) {
                        $($('<div>').attr({
                            class: 'col col-news mb-3 list-item',
                            id: 'news-content'
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
                                class: 'card-text card-date fs-bold-700 text-muted'
                                })).append().html(data[i].date),
                                ($('<p>').attr({
                                class: 'card-text card-content font-work'
                                })).append().html(data[i].preview),
                                $('<a>').attr({
                                class: 'btn news-button text-center font-work',
                                href: "<?= BASE_URL; ?>berita/detail.php?title=" + data[i].slug
                                }).html("Lebih lanjut..."))
                            )
                        )
                    ).appendTo(news);
                }
            }
        
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