<?php
  require_once __DIR__ . '/config.php';
?>
<!-- Main Page -->
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8"/>
    <title>Chery Official Medan | Chery Oriental Group</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
    />
    <meta name="description" content="Selamat datang di situs resmi Chery Oriental Group.
                                      Dealer resmi mobil chery di Medan & Pekanbaru, Dapatkan Chery Tiggo 7 & 8 Pro dengan jaminan bebas service mesin 1 juta km / 10 tahun" />  
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="chery motor indonesia , mobil chery, chery oriental group, chery medan, chery pekanbaru
                                    opening dealer mobil baru, promo chery, harga chery, harga chery medan, harga chery pekanbaru"/>
    <meta property="og:site_name" content="Opening soon dealer Mobil Chery di Medan & Pekanbaru, Dapatkan Chery Tiggo 7 & 8 Pro dengan jaminan bebas service mesin 1 juta km / 10 tahun" />
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://cheryorientalgroup.co.id/" />
    <meta property="og:title" content="Chery Official Medan | Chery Oriental Group" />
    <meta property="og:description" content="Selamat datang di situs resmi chery oriental group medan.
                                             Dealer resmi mobil chery di Medan & Pekanbaru"/>
    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <link 
      rel="stylesheet"
      type="text/css"
      href="assets/css/style.css"
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
    <link 
      href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" 
      rel="stylesheet"> 
    <link
      href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap"
      rel="stylesheet"
    />
    <!-- Font Awesome Version 6 Plugins -->
    <link rel="stylesheet" 
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    
    <style>
      .play-video {
        object-fit:cover;
      }

      textarea {
        resize: none !important;
      }
    </style>
  
  </head>
  <body>
    <header class="header-area header-sticky">
        <?php require_once "header.php"; ?>
    </header>
    <main>
        <?php require_once __DIR__ . "/buttons.php"; ?>
        <section>
            <div>
                <?php require_once "banner.php"; ?>
            </div>
        </section>
        <section>
          <div>
            <?php require_once "cars.php"; ?>
          </div>
        </section>
        <section>
          <div class="bg-black">
            <?php require_once "launch.php";?>
          </div>
        </section>
        <section>
          <div>
            <?php require_once "news.php"; ?>
          </div>
        </section>
        <section class="bg-section">
            <div>
              <?php require_once "dealer-location.php"; ?>
            </div>
        </section>
        <section class="bg-exhibition mt-up-50">
            <div>
              <?php require_once "exhibition.php"; ?>
            </div>
        </section>
    </main>
    <footer class="relative footer-border px-3 py-4">
        <?php require_once "footer.php"; ?>
    </footer>
    
    <!-- jQuery -->
    <script src="assets/js/jquery-3.6.1.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <!-- <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script> -->
    
    <!-- Global Init -->
    <!-- <script src="assets/js/dropdown.js"></script> -->

    <script>
      
      // Navbar dropdown function 

      $(document).ready(function(){
        $('.models-click').click(function(e){
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

        fetch('news.json')
            .then(function (response) {
                return response.json();
            })
            .then(function (data) {
                appendData(data);
            })
            .catch(function (err) {
                console.log('error: ' + err);
            });
        
        // dynamic JSON data append 

        function appendData(data) {
            var news = document.getElementsByClassName('news');
            for (var i = 0; i < 3; i++) {
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
                          href: "<?= BASE_URL; ?>berita/detail.php?title=" + data[i].slug
                        }).html("Lebih lanjut...")
                      )
                    )
                  )
                ).appendTo(news);
                // for (var i = 0; i < data.length; i++) {
                // $(img).eq(i).append(
                //   $('<img>').attr({
                //     class: 'card-img-top',
                //     src: data[i].img,
                //   })
                // );
                // $(title).eq(i).prepend(
                // $('<h5>').attr({
                //   class: 'card-title font-work',
                // }).html(data[i].title)
                // );
                // $(date).eq(i).append().html(data[i].date);
                // $(content).eq(i).append().html(data[i].preview);
                // // $(news).eq(i).attr('href', data[i].ref);
                // $(news).eq(i).append().attr('href', "<?= BASE_URL; ?>berita/detail.php?title=" + data[i].slug);
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

      $('.play-video').parent().click(function () {
        if($(this).children(".play-video").get(0).paused){
            $(this).children(".play-video").get(0).play();
            $(this).children(".playpause").fadeOut();
        }else{
          $(this).children(".play-video").get(0).pause();
          $(this).children(".playpause").fadeIn();
        }
      });

      var btnKirimWhatsapp = document.getElementById('btnKirimWhatsapp');
      var konten = document.getElementById('kontenWhatsapp').value;    
      btnKirimWhatsapp.addEventListener('click', function() {        
        window.open("https://wa.me/+628116050300?text=" + konten);
        $('#whatsapp').modal('hide');
      })
      
    </script>

  </body>
</html>