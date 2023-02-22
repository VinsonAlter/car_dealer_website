<!-- Seting Front Page Swiper -->
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8"/>
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
      href="assets/css/style.css"
    />
    <!-- Bootstrap 5 CSS Plugins -->
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
        crossorigin="anonymous"
    />
  </head>

  <body>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <picture class="pt-5">
            <source media="(min-width: 920px)" 
              srcset="assets/img/chery-omoda-5-website.webp">
            <img src="assets/img/chery-omoda-5-mobile.webp" 
              alt="Chery Omoda 5 Pricelist" class="bg-img">
          </picture>
        </div>
        <div class="swiper-slide">
            <picture class="pt-5">
                <source media="(min-width: 920px)" 
                    srcset="assets/img/Chery-Popup-Website-Banner.webp">
                <img src="assets/img/Chery-Popup-Mobile-Banner.webp" 
                    alt="Chery Motor Medan Pop Up to Mall" class="bg-img">
            </picture>
        </div>
        <div class="swiper-slide">
            <picture class="pt-5">
                <source media="(min-width: 920px)" 
                    srcset="assets/img/opening-banner.webp">
                <img src="assets/img/banner-mobile-edited.webp" 
                    alt="Dealer Mobil Chery Opening Soon di Medan dan Pekanbaru" class="bg-img">
            </picture>
        </div>
        <div class="swiper-slide">
            <picture class="pt-5">
                <source media="(min-width: 920px)" 
                    srcset="assets/img/tiggo8prodekstop.webp">
                <img src="assets/img/tiggo8profixmobile.webp" 
                    alt="Chery Tiggo 8 Pro" class="bg-img">
            </picture>
        </div>
        <div class="swiper-slide">
            <picture class="pt-5">
                <source media="(min-width: 920px)" 
                    srcset="assets/img/tiggo7prodekstop.webp">
                <img src="assets/img/tiggo7profixmobile.webp" 
                    alt="Chery Tiggo 7 Pro" class="bg-img">
            </picture>
        </div>
        <div class="swiper-slide">
            <picture class="pt-5">
                <source media="(min-width: 920px)" 
                    srcset="assets/img/chery_banner2-1.webp">
                <img src="assets/img/chery_mobile3-rev.webp" 
                    alt="Chery Banner" class="bg-img">
            </picture>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initiate Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        loop: true,
        keyboard: {
          enabled: true,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>

  </body>
</html>
