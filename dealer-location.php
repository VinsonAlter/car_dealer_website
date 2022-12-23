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
    <style>
        .swiper-slide {
            text-align: left !important;
            border-radius: .5rem !important;
        }

        .swiper-horizontal > .swiper-pagination-bullets, 
        .swiper-pagination-bullets.swiper-pagination-horizontal, 
        .swiper-pagination-custom, .swiper-pagination-fraction {
            bottom: 1vh;
        }
    </style>
    </head>
    <body>
        <div class="container mt-5 pt-3 pb-5">
            <div>
                <h1 class="models-font fs40-scaled text-white">Lokasi Dealer</h1>
            </div>
            <div class = "relative mt-4">
                <ul class="nav nav-pills justify-content-center mt-3 ">
                    <li class="nav-item px-4" role="presentation">
                        <button class="nav-link active models-font" id="pills-medan-tab" 
                            data-bs-toggle="pill" data-bs-target="#pills-medan"
                            type="button" role="tab" aria-controls="pills-medan"
                            aria-selected="true">
                            MEDAN
                        </button>
                    </li>
                    <li class="nav-item px-3" role="presentation">
                        <button class="nav-link models-font" id="pills-pekanbaru-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-pekanbaru"
                            type="button" role="tab" aria-controls="pills-pekanbaru"
                            aria-selected="true">
                            PEKANBARU
                        </button>
                    </li>
                </ul>
            </div>

            <div class="relative row row-cols-1 row-cols-md-2 mt-4 centered">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane show active" id="pills-medan" role="tabpanel" aria-labelledby="pills-medan-tab">
                        <div class="swiper mySwiper2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card text-dark shadow-lg border-none w-100" style="min-height:200px;">
                                        <div class="card-header bg-transparent">
                                            <p class="fs-bold-700 card-title-font">PT. MEDAN ORIENTAL STARS</p>
                                            <p class="text-secondary card-subtitle-font">Your Reliable Partner</p>
                                        </div>
                                        <div class="card-body d-flex flex-column">
                                            <!-- <div class="card-item">
                                                <p class="fs-bold-700 card-opening-soon mt-2 text-center">Opening Soon!</p>
                                            </div> -->
                                            <div class="card-item">
                                                <i class="fa-sharp fa-solid fa-location-dot"></i>
                                                <p class="ml-4">Jl. Sisingamangaraja Km. 6,5 Harjosari II, Kota Medan 20147</p>
                                            </div>
                                            <!-- <div class="card-item mt-3">
                                                <i class="fa-sharp fa-solid fa-location-dot"></i>
                                                <p class="ml-4">Jl. Sisingamangaraja No.22 A, Mesjid, Kota Medan, 20213</p>
                                            </div> -->
                                            <div class="card-item mt-3">
                                                <a class="d-flex" href="tel:+62617853300" target="_blank">
                                                <a class="d-flex" href="javascript:void(0)">
                                                    <i class="fa-solid fa-phone"></i>
                                                    <p class="ml-4">061-7853300</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="card text-dark shadow-lg border-none w-100" style="min-height:200px;">
                                        <div class="card-header bg-transparent">
                                            <p class="fs-bold-700 card-title-font">PT. MEDAN ORIENTAL STARS</p>
                                            <p class="text-secondary card-subtitle-font">Your Reliable Partner</p>
                                        </div>
                                        <div class="card-body d-flex flex-column"> 
                                            <div class="card-item">
                                                <i class="fa-sharp fa-solid fa-location-dot"></i>
                                                <p class="ml-4">Jl. Sisingamangaraja No.22 A, Mesjid, Kota Medan, 20213</p>
                                            </div>
                                            <div class="card-item mt-3">
                                                <a class="d-flex" href="tel:+626142912300" target="_blank">
                                                <a class="d-flex" href="javascript:void(0)">
                                                    <i class="fa-solid fa-phone"></i>
                                                    <p class="ml-4">061-42912300</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <!-- <div class="col">
                        <div class="card text-dark mb-3 shadow-lg border-none">
                            <img class="card-img" src="<?= BASE_URL; ?>assets/img/opening-stamp.png">
                            <div class="opening-stamp">
                                <div class="card-header bg-transparent">
                                    <p class="fs-bold-700 card-title-font">PT. MEDAN ORIENTAL STARS</p>
                                    <p class="text-secondary card-subtitle-font">Your Reliable Partner</p>
                                </div>
                                <div class="card-body opacity-5">
                                    <div class="card-item">
                                        <i class="fa-sharp fa-solid fa-location-dot"></i>
                                        <p class="ml-4">Jl. Sisingamangaraja No.22 A, Mesjid, Kota Medan, 20213</p>
                                    </div>
                                    <div class="card-item mt-3">
                                        // old phone number
                                        <a class="d-flex" href="tel:+62617369922" target="_blank">
                                        // new phone number
                                        <a class="d-flex" href="tel:+6242912300" target="_blank">
                                        <a class="d-flex" href="javascript:void(0)">
                                            <i class="fa-solid fa-phone"></i>
                                            // old phone number
                                            <p class="ml-4">061-7369922</p>
                                            // new phone number 
                                            <p class="ml-4">42912300</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="tab-pane" id="pills-pekanbaru" role="tabpanel" aria-labelledby="pills-pekanbaru-tab">
                        <div>
                            <div class="card text-dark mb-3 shadow-lg border-none w-100" style="min-height:200px;">
                                <div class="card-header bg-transparent">
                                    <p class="fs-bold-700 card-title-font">PT. RIAU ORIENTAL STAR</p>
                                    <p class="text-secondary card-subtitle-font">Your Reliable Partner</p>
                                    <!-- <p class="fs-bold-700 card-opening-soon mt-2">Opening Soon!</p> -->
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <!-- <div class="card-item">
                                        <p class="fs-bold-700 card-opening-soon mt-2 text-center">Opening Soon!</p>
                                    </div> -->
                                    <div class="card-item">
                                        <i class="fa-sharp fa-solid fa-location-dot"></i>
                                        <p class="ml-4">Jl. SM Amin No. 70-73 Kel. Simpang Baru, Kec. Tampan
                                            Kota Pekanbaru - Riau 28290</p>
                                    </div>
                                    <div class="card-item">
                                        <div class="card-item mt-3">
                                            <a class="d-flex" href="tel:+62617369922" target="_blank">
                                                <i class="fa-solid fa-phone"></i>
                                                <p class="ml-4">061-7369922</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

        <!-- Initiate Swiper -->
        <script>
        var swiper = new Swiper(".mySwiper2", {
            slidesPerView: 1,
            loop: true,
            spaceBetween: 30,
            keyboard: {
            enabled: true,
            },
            pagination: {
            el: ".swiper-pagination",
            clickable: true,
            }
        });
        </script>
    </body>
</html>