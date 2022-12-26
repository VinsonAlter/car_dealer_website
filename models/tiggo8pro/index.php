<?php
    require_once __DIR__ . '/../../config.php';
?>
<!-- Tiggo 8 Pro Pages -->
<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8"/>
        <title>Chery Tiggo 8 Pro</title>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
        />
        <meta name="keyword" content="Tiggo 8 Pro, Tiggo 8 Pro Medan, Tiggo 8 Pro Pekanbaru"/>
        <meta name="description" content="Chery Tiggo 8 Pro 
                                            memiliki keunggulan futuristik seperti ADAS (Advanced Driver Assistance System), 
                                            360 camera dengan surround view, Chery intelligent Voice Assistant, dan 
                                            panoramic sunroof ditambah sinergi antara desain, brand prestisius, 
                                            dan harga terjangkau, 
                                            membuat mobil Chery sangat relevan untuk Anda miliki."/>
        <meta name="robots" content="index, follow"/>
        <meta property="og:site_name" content="Chery Tiggo 8 Pro" />
        <meta property="og:type" content="website"/>
        <meta property="og:url" content="https://cheryorientalgroup.co.id/models/tiggo7pro/" />
        <meta property="og:title" content="Chery Tiggo 8 Pro" />
        <meta property="og:description" content="Chery Tiggo 8 Pro 
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
            .pane-title {
                font-size: 2rem !important;
            }

            .bg-wireframe {
                background: url('../../assets/img/wireframe.jpg') no-repeat center center;
                object-fit: cover;
                height: 500px;
                width: 100%;
            }

            .tiggo8-text-bottom {
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

            .teaser-video {
                object-fit:cover;
            }

            @media (max-width: 768px) {
                .tiggo8-text-bottom {
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

                
            }
        </style>
        
    </head>

    <body>

        <?php require_once __DIR__ . "/../../buttons.php"; ?>

        <header class="header-area header-sticky">
            <?php require_once ("../../header.php"); ?>
        </header>

        <div class="relative mt-5">
            <video class="teaser-video" poster="assets/img/Tiggo8Pro.jpg" controls="">    
                <source src="assets/video/T8Pro.mp4" type="video/mp4">
            </video>
            <div class="playpause"></div>
            <!-- <img class="w-100" src="assets/img/Tiggo8Pro.jpg"> -->
        </div>

        <div class="relative mt-up-8">
            <!-- Desktop Tab View Exterior -->
            <div class = "desktop-nav left-4 right-4 absolute bottom-14 mb-6 centered">
                <ul class="relative nav nav-pills nav-fill ">
                    <li class="nav-item px-4" role="presentation">
                        <button class="nav-link active models-font" id="pills-design-tab" 
                            data-bs-toggle="pill" data-bs-target="#pills-design"
                            type="button" role="tab" aria-controls="pills-design"
                            aria-selected="true">PREMIUM DESIGN</button>
                    </li>
                    <li class="nav-item px-4" role="presentation">
                        <button class="nav-link models-font" id="pills-led-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-led"
                            type="button" role="tab" aria-controls="pills-led"
                            aria-selected="true">FULL LED HEAD-LAMP</button>
                    </li>
                    <li class="nav-item px-4" role="presentation">
                        <button class="nav-link models-font" id="pills-rim-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-rim"
                            type="button" role="tab" aria-controls="pills-rim"
                            aria-selected="true">18 INCH ALUMINIUM RIM</button>
                    </li>
                </ul>
            </div>
            
            <!-- Mobile Tab View Exterior -->
            <div class="mobile-nav relative">
                <ul class="relative nav nav-pills nav-fill py-3">
                    <li class="nav-item px-2 py-1" role="presentation">
                        <button class="nav-link active models-font" id="pills-design-tab" 
                            data-bs-toggle="pill" data-bs-target="#pills-design"
                            type="button" role="tab" aria-controls="pills-design"
                            aria-selected="true">PREMIUM DESIGN</button>
                    </li>
                    <li class="nav-item px-2 py-1" role="presentation">
                        <button class="nav-link models-font" id="pills-led-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-led"
                            type="button" role="tab" aria-controls="pills-led"
                            aria-selected="true">FULL LED HEAD-LAMP</button>
                    </li>
                    <li class="nav-item px-2 py-1" role="presentation">
                        <button class="nav-link models-font" id="pills-rim-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-rim"
                            type="button" role="tab" aria-controls="pills-rim"
                            aria-selected="true">18 INCH ALUMINIUM RIM</button>
                    </li>
                </ul>
            </div>
                
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane show active" id="pills-design" role="tabpanel" aria-labelledby="pills-design-tab">
                    <!-- mobile panel text -->
                    <div class="px-3 py-2 col-12 relative bg-black pane-text-mobile">
                        <p class="text-white font-work">
                            The body is outlined by three main lines,
                            creating an effect that carries dynamic and 
                            static elements alike
                        </p>
                    </div>
                    <div class = "absolute top-48 left-20">
                        <!-- desktop panel text -->
                        <div class = "col-5">
                            <h1 class = "pane-title models-font uppercase text-white">
                                PREMIUM DESIGN
                            </h1>
                            <p class="pane-text text-white font-work">
                                The body is outlined by three main lines,
                                creating an effect that carries dynamic and 
                                static elements alike
                            </p>
                        </div> 
                    </div>
                    <img class="w-100" src="assets/img/Tiggo8Pro-premium.jpg" alt="Tiggo 8 Pro Premium Design">
                </div>
                <div class="tab-pane" id="pills-led" role="tabpanel" aria-labelledby="pills-led-tab">
                    <!-- mobile panel text -->
                    <div class="px-3 py-2 col-12 relative bg-black pane-text-mobile">
                        <p class="text-white font-work">
                            The LED high and low beams adopt a multi-cavity
                            reflective matrix, simple and elegant, illuminating all.
                        </p>
                    </div>
                    <div class = "absolute top-36 left-20">
                        <!-- desktop panel text -->
                        <div class="col-5">
                            <h1 class = "pane-title models-font uppercase text-white">
                                FULL LED HEAD-LAMP
                            </h1>
                            <p class="pane-text text-white font-work">
                                The LED high and low beams adopt a multi-cavity
                                reflective matrix, simple and elegant, illuminating all.
                            </p>
                        </div>
                    </div>
                    <img class="w-100" src="assets/img/Tiggo8Pro-led-lamp.gif" alt="Tiggo 8 Pro LED Lamp">
                </div>
                <div class="tab-pane" id="pills-rim" role="tabpanel" aria-labelledby="pills-rim-tab">
                    <!-- mobile panel text -->
                    <div class="px-3 py-2 col-12 relative bg-black pane-text-mobile">
                        <p class="text-white font-work">
                            18 inch super bright aluminium alloy rim,
                            comparable to sports car class rim, the vehicle
                            is more sporty and majestic
                        </p>
                    </div>
                    <div class = "absolute top-48 left-20">
                        <!-- desktop panel text -->
                        <div class="col-5">
                            <h1 class = "pane-title models-font uppercase text-white">
                                18 INCH ALUMINIUM ALLOY RIM
                            </h1>
                            <p class="pane-text text-white font-work">
                                18 inch super bright aluminium alloy rim,
                                comparable to sports car class rim, the vehicle
                                is more sporty and majestic
                            </p>
                        </div>
                    </div>
                    <img class="w-100" src="assets/img/Tiggo8Pro-alluminium-alloy.jpg" alt="Tiggo 8 Pro Alluminium Alloy">
                </div>
            </div>
        </div>

        <!-- Interior -->
        <div class="relative w-full">
            <div class="p-10 d-block">
                <h1 class="h1-custom">Interior</h1>
            </div>
            <div class="row mx-auto centered">
                <div class="col-12 col-md-6 order-2 order-md-2">
                    <div class="px-2 font-work">
                        <h5 class="py-3 fw-bold">
                            Royal Comfort
                        </h5>
                        <p class="py-4 border-desc">
                           With its super long design, large and flexible trunk
                           capacity, luxury seating, automatic climate control
                           systems and a whole host of other creature comforts,
                           the Tiggo 8 Pro is fitted out to make every passenger
                           feel like royalty
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 order-1 order-md-1 p-0">
                    <div>
                        <img class="w-100 lazyload" data-src="assets/img/Tiggo8Pro-interior.jpg" 
                            alt="Tiggo 8 Pro Interior">
                    </div>
                </div>
            </div>
            <div class="row mx-auto centered">
                <div class="col-12 col-md-6 order-2 order-md-1">
                    <div class="px-3 font-work">
                        <h5 class="py-3 fw-bold">
                            7 Luxury Seat
                        </h5>
                        <p class="py-4 border-desc">
                           The Tiggo 8 Pro's seat cushions are designed with
                           lumber-supporting wrap-around thickened side wings to hug occupants 
                           around the hips 
                           and waist for greater comfort, 
                           as well as aviation style seat headrests for a touch of jet-set class. 
                           The driver's seat has a six-way electric adjuster.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 order-1 order-md-2 p-0">
                    <div>
                        <img class="w-100 lazyload" data-src="assets/img/Tiggo8Pro-luxury-seat.jpg" 
                            alt="Tiggo 8 Pro Luxury Seats">
                    </div>
                </div>
            </div>
            <div class="row mx-auto centered">
                <div class="col-12 col-md-6 order-2 order-md-2">
                    <div class="px-3 font-work">
                        <h5 class="py-3 fw-bold">
                            Spacious Cabin
                        </h5>
                        <p class="py-4 border-desc">
                            The luxuriously roomy cabin and cockpit feature a symmetrical 
                            horizontal integrated, 
                            multiple touch screens and controls in easy reach, 
                            and are finished in a luxurious black and brown with laser-brushed trim
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 order-1 order-md-1 p-0">
                    <div>
                        <img class="w-100 lazyload" data-src="assets/img/Tiggo8Pro-spacious-cabin.jpg" 
                            alt="Tiggo 8 Pro spacious cabin">
                    </div>
                </div>
            </div>
            <div class="row mx-auto centered">
                <div class="col-12 col-md-6 order-2 order-md-1">
                    <div class="px-3 font-work">
                        <h5 class="py-3 fw-bold">
                            Dual Zone Automatic Air Conditioning System
                        </h5>
                        <p class="py-4 border-desc">
                           Intelligent double zone air conditioning in the front and
                           independent air conditioner in the rear create a clean,
                           Nordic level of air quality for all passengers.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 order-1 order-md-2 p-0">
                    <div>
                        <img class="w-100 lazyload" data-src="assets/img/Tiggo8Pro-air-conditioner.jpg" 
                            alt="Tiggo 8 Pro Dual Zone Automatic Air Conditioner">
                    </div>
                </div>
            </div>
            <div class="row mx-auto centered">
                <div class="col-12 col-md-6 order-2 order-md-2">
                    <div class="px-3 font-work">
                        <h5 class="py-3 fw-bold">
                            Pharmaceutical-Grade Air Purification
                        </h5>
                        <p class="py-4 border-desc">
                            The Tiggo 8 Pro delivers the ultimate in air-quality. 
                            The N95-level air-conditioning purifier filters more than 95% of particles and pathogens, 
                            while the AQS + PM2.5 air quality control system detects irritating gas, 
                            automatically switching between inside and outside circulation 
                            to block harmful bacteria
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 order-1 order-md-1 p-0">
                    <div>
                        <img class="w-100 lazyload" data-src="assets/img/Tiggo8Pro-air-purify.jpg" 
                            alt="Tiggo 8 Pro Air Purification">
                    </div>
                </div>
            </div>
            <div class="row mx-auto centered">
                <div class="col-12 col-md-6 order-2 order-md-1">
                    <div class="px-3 font-work">
                        <h5 class="py-3 fw-bold">
                            Multi Color Ambient Light
                        </h5>
                        <p class="py-4 border-desc">
                            Why settle for an ordinary ambient light when you can
                            choose your own? The Tiggo 8 Pro comes with seven 
                            color themes for the interior ambient lighting, varying
                            easily with the rhythm of your favorite music
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 order-1 order-md-2 p-0">
                    <div>
                        <img class="w-100 lazyload" data-src="assets/img/Tiggo8Pro-ambient-light.jpg" 
                            alt="Tiggo 8 Pro Multi Color Ambient Light">
                    </div>
                </div>
            </div>
            <div class="row mx-auto centered">
                <div class="col-12 col-md-6 order-2 order-md-2">
                    <div class="px-3 font-work">
                        <h5 class="py-3 fw-bold">
                            Multi-Function Leather Steering Wheel
                        </h5>
                        <p class="py-4 border-desc">
                            With four adjustment settings and wrapped in soft-touch perforated leather, 
                            the Tiggo 8 Pro’s steering wheel is the ultimate in form and function. 
                            The A/V system and entertainment, colour screens, Bluetooth phone, 
                            and cruise control are all controlled at your fingertips
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 order-1 order-md-1 p-0">
                    <div>
                        <img class="w-100 lazyload" data-src="assets/img/Tiggo8Pro-steering-wheel.jpg" 
                            alt="Tiggo 8 Pro Leather Steering Wheel">
                    </div>
                </div>
            </div>
            <div class="row mx-auto centered">
                <div class="col-12 col-md-6 order-2 order-md-1">
                    <div class="px-3 font-work">
                        <h5 class="py-3 fw-bold">
                            Flexible and Spacious Boot
                        </h5>
                        <p class="py-4 border-desc">
                            With third row seats down, the boot space is a massive 2101L, 
                            and even with these rear seats raised for the maximum seven-person occupancy, 
                            the boot space is still a very generous 1179L.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 order-1 order-md-2 p-0">
                    <div>
                        <img class="w-100 lazyload" data-src="assets/img/Tiggo8Pro-spacious-boot.jpg" 
                            alt="Tiggo 8 Pro Flexible and Spacious Boot">
                    </div>
                </div>
            </div>
        </div>

        <!-- Interior Navbar -->
        <div class="relative mt-up-8">
            <!-- Desktop Tab View Interior -->
            <div class = "desktop-nav left-4 right-4 absolute bottom-14 mb-6 centered">
                <ul class="relative nav nav-pills nav-fill ">
                    <li class="nav-item px-4" role="presentation">
                        <button class="nav-link active models-font" id="pills-seats-tab" 
                            data-bs-toggle="pill" data-bs-target="#pills-seats"
                            type="button" role="tab" aria-controls="pills-seats"
                            aria-selected="true">7 LUXURY SEATS</button>
                    </li>
                    <li class="nav-item px-4" role="presentation">
                        <button class="nav-link models-font" id="pills-cab-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-cab"
                            type="button" role="tab" aria-controls="pills-cab"
                            aria-selected="true">EMBRACING CABIN</button>
                    </li>
                    <li class="nav-item px-4" role="presentation">
                        <button class="nav-link models-font" id="pills-trunk-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-trunk"
                            type="button" role="tab" aria-controls="pills-trunk"
                            aria-selected="true">WIDE SPACE TRUNK</button>
                    </li>
                    <li class="nav-item px-4" role="presentation">
                        <button class="nav-link models-font" id="pills-pano-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-pano"
                            type="button" role="tab" aria-controls="pills-pano"
                            aria-selected="true">PANORAMIC SUNROOF</button>
                    </li>
                </ul>
            </div>
            
            <!-- Mobile Tab View Interior -->
            <div class="mobile-nav relative">
                <ul class="relative nav nav-pills nav-fill py-3">
                    <li class="nav-item px-2 py-1" role="presentation">
                        <button class="nav-link active models-font" id="pills-seats-tab" 
                            data-bs-toggle="pill" data-bs-target="#pills-seats"
                            type="button" role="tab" aria-controls="pills-seats"
                            aria-selected="true">7 LUXURY SEATS</button>
                    </li>
                    <li class="nav-item px-2 py-1" role="presentation">
                        <button class="nav-link models-font" id="pills-cab-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-cab"
                            type="button" role="tab" aria-controls="pills-cab"
                            aria-selected="true">EMBRACING CABIN</button>
                    </li>
                    <li class="nav-item px-2 py-1" role="presentation">
                        <button class="nav-link models-font" id="pills-trunk-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-trunk"
                            type="button" role="tab" aria-controls="pills-trunk"
                            aria-selected="true">WIDE SPACE TRUNK</button>
                    </li>
                    <li class="nav-item px-2 py-1" role="presentation">
                        <button class="nav-link models-font" id="pills-pano-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-pano"
                            type="button" role="tab" aria-controls="pills-pano"
                            aria-selected="true">PANORAMIC SUNROOF</button>
                    </li>
                </ul>
            </div>
                
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane show active" id="pills-seats" role="tabpanel" aria-labelledby="pills-seats-tab">
                    <!-- mobile panel text -->
                    <div class="px-3 py-2 col-12 relative bg-black pane-text-mobile">
                        <p class="text-white font-work">
                            FOR ALL FAMILY MEMBER The six-way 
                            electric adjuster for driver's seat, matching
                            up the electric heater, allows the driver to
                            enjoy convenient, comfort and noble experience.
                        </p>
                    </div>
                    <div class = "absolute top-52 left-20">
                        <!-- desktop panel text -->
                        <div class = "col-5">
                            <h1 class = "pane-title models-font uppercase text-white">
                                7 LUXURY SEATS
                            </h1>
                            <p class="pane-text text-white font-work">
                                FOR ALL FAMILY MEMBER The six-way 
                                electric adjuster for driver's seat, matching
                                up the electric heater, allows the driver to
                                enjoy convenient, comfort and noble experience. 
                            </p>
                        </div> 
                    </div>
                    <img class="w-100" src="assets/img/Tiggo8Pro-7-seats.jpg" alt="Tiggo 8 Pro 7 Luxury Seats">
                </div>
                <div class="tab-pane" id="pills-cab" role="tabpanel" aria-labelledby="pills-cab-tab">
                    <!-- mobile panel text -->
                    <div class="px-3 py-2 col-12 relative bg-black pane-text-mobile">
                        <p class="text-white font-work">
                            With luxurious and dynamic tech, the seat
                            is designed with surround-wide schematics,
                            luxurious quality and elegant interior.
                        </p>
                    </div>
                    <div class = "absolute top-52 left-20">
                        <!-- desktop panel text -->
                        <div class="col-5">
                            <h1 class = "pane-title models-font uppercase text-white">
                                EMBRACING CABIN
                            </h1>
                            <p class="pane-text text-white font-work">
                                With luxurious and dynamic tech, the seat
                                is designed with surround-wide schematics,
                                luxurious quality and elegant interior.
                            </p>
                        </div>
                    </div>
                    <img class="w-100" src="assets/img/Tiggo8Pro-embracing-cabin.jpg" alt="Tiggo 8 Pro Embracing Cabin">
                </div>
                <div class="tab-pane" id="pills-trunk" role="tabpanel" aria-labelledby="pills-trunk-tab">
                    <!-- mobile panel text -->
                    <div class="px-3 py-2 col-12 relative bg-black pane-text-mobile">
                        <p class="text-white font-work">
                            With 5 occupants, the tail space measures
                            out 1179L. In the case when rear seats
                            recline, the tail space can reach 2101L
                        </p>
                    </div>
                    <div class = "absolute top-36 left-20">
                        <!-- desktop panel text -->
                        <div class="col-5">
                            <h1 class = "pane-title models-font uppercase text-white">
                                WIDE SPACE TRUNK
                            </h1>
                            <p class="pane-text text-white font-work">
                                With 5 occupants, the tail space measures
                                out 1179L. In the case when rear seats
                                recline, the tail space can reach 2101L
                            </p>
                        </div>
                    </div>
                    <img class="w-100" src="assets/img/Tiggo8Pro-trunk.jpg" alt="Tiggo 8 Pro Wide Space Trunk">
                </div>
                <div class="tab-pane" id="pills-pano" role="tabpanel" aria-labelledby="pills-pano-tab">
                    <!-- mobile panel text -->
                    <div class="px-3 py-2 col-12 relative bg-black pane-text-mobile">
                        <p class="text-white font-work">
                            With a 1.96m2 skylight (both panels), the
                            Tiggo 8 Pro gives passengers a truly 
                            panoramic view of the sky, whether watching 
                            clouds, stars or skyscrapers.
                        </p>
                    </div>
                    <div class = "absolute top-52 left-20">
                        <!-- desktop panel text -->
                        <div class="col-5">
                            <h1 class = "pane-title models-font uppercase text-white">
                                PANORAMIC SUNROOF
                            </h1>
                            <p class="pane-text text-white font-work">
                                With a 1.96m2 skylight (both panels), the
                                Tiggo 8 Pro gives passengers a truly 
                                panoramic view of the sky, whether watching 
                                clouds, stars or skyscrapers.
                            </p>
                        </div>
                    </div>
                    <img class="w-100" src="assets/img/Tiggo8Pro-panoramic-sunroof.jpg" alt="Tiggo 8 Pro Panoramic Sunroof">
                </div>
            </div>
        </div>

        <!-- Power & Performance -->
        <div class="relative bg-blue w-full">
            <div class="p-10 d-block">
                <h1 class="text-white h1-custom">Power & Performance</h1>
            </div>
            <div class="row mx-auto centered">
                <div class="col-12 col-md-6 order-2 order-md-1">
                    <div class="px-2 font-work">
                        <h5 class="py-3 text-white fw-bold">
                            2.0T GDI ENGINE
                        </h5>
                        <p class="py-4 text-white border-desc">
                           Tiggo 8 Pro has very adequate acceleration and speed to
                           go in every situation and condition. Makes you a leader
                           in its class. This Turbo engine can generate power of 250 HP.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 order-1 order-md-2 p-0">
                    <div>
                        <img class="w-100 lazyload" data-src="assets/img/Tiggo8Pro-engine.jpg" 
                            alt="Tiggo 8 Pro engine">
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
                            The Tiggo 8 Pro is built on the T1X platform. 
                            This chassis has been deliberately crafted to enable better headroom 
                            for front and rear seats, as well as higher ground clearance. 
                            The high approach and departure 
                            angles also ensure better off-road performance if and when required.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 order-1 order-md-1 p-0">
                    <div>
                        <img class="w-100 lazyload" data-src="assets/img/Tiggo8Pro-chassis.jpg" 
                            alt="Tiggo 8 Pro chassis">
                    </div>
                </div>
            </div>
            <div class="row mx-auto centered">
                <div class="col-12 col-md-6 order-2 order-md-1">
                    <div class="px-2 font-work">
                        <h5 class="py-3 text-white fw-bold">
                            DUAL MODE EPS
                        </h5>
                        <p class="py-4 text-white border-desc">
                           The Tiggo 8 Pro's EPS (Electric Power Steering)
                           enables light steering at a low speed and stable steering
                           at a high speed to deliver increased fuel efficiency 
                           compared with hydraulic power systems
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 order-1 order-md-2 p-0">
                    <div>
                        <img class="w-100 lazyload" data-src="assets/img/Tiggo8Pro-EPS.jpg" 
                            alt="Tiggo 8 Pro EPS">
                    </div>
                </div>
            </div>
            <div class="row mx-auto centered">
                <div class="col-12 col-md-6 order-2 order-md-2">
                    <div class="px-2 font-work">
                        <h5 class="py-3 text-white fw-bold">
                            Automatic Start/Stop
                        </h5>
                        <p class="py-4 text-white border-desc">
                            The Tiggo 8 Pro's engine starts and stops automatically 
                            to reduce emissions and reduce fuel consumption.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 order-1 order-md-1 p-0">
                    <div>
                        <img class="w-100 lazyload" data-src="assets/img/Tiggo8Pro-auto-start-stop.jpg" 
                            alt="Tiggo 8 Pro Auto Start Stop">
                    </div>
                </div>
            </div>
            <div class="row mx-auto centered">
                <div class="col-12 col-md-6 order-2 order-md-1">
                    <div class="px-2 font-work">
                        <h5 class="py-3 text-white fw-bold">
                            Elite NVH Levels
                        </h5>
                        <p class="py-4 text-white border-desc">
                           The Tiggo 8 Pro has an interior idling noise level of just
                           35dB. That's as quiet as library. Noise reducing 
                           material is used throughout the interior, exterior, body, and chassis. 
                           An externally controlled variable displacement compressor dampens noise 
                           from the front compressor, cooling fan and rear fuel pump, 
                           while a stepless fan effectively reduces noise in high-speed conditions.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 order-1 order-md-2 p-0">
                    <div>
                        <img class="w-100 lazyload" data-src="assets/img/Tiggo8Pro-NVH.jpg" 
                            alt="Tiggo 8 Pro NVH Levels">
                    </div>
                </div>
            </div>
        </div>

        <!-- Power & Performance Navbar -->
        <div class="relative mt-up-8">
            <!-- Desktop Tab View Power & Performance -->
            <div class = "desktop-nav left-4 right-4 absolute bottom-20 mb-6 centered">
                <ul class="relative nav nav-pills nav-fill ">
                    <li class="nav-item px-4" role="presentation">
                        <button class="nav-link active models-font" id="pills-tech-tab" 
                            data-bs-toggle="pill" data-bs-target="#pills-tech"
                            type="button" role="tab" aria-controls="pills-tech"
                            aria-selected="true">INTELLIGENT TECHNOLOGY</button>
                    </li>
                    <li class="nav-item px-4" role="presentation">
                        <button class="nav-link models-font" id="pills-drive-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-drive"
                            type="button" role="tab" aria-controls="pills-drive"
                            aria-selected="true">INTELLIGENT DRIVING MODES</button>
                    </li>
                    <li class="nav-item px-4" role="presentation">
                        <button class="nav-link models-font" id="pills-cruise-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-cruise"
                            type="button" role="tab" aria-controls="pills-cruise"
                            aria-selected="true">ACC ADAPTIVE CRUISE CONTROL</button>
                    </li>
                </ul>
            </div>
            
            <!-- Mobile Tab View Power & Performance -->
            <div class="mobile-nav relative">
                <ul class="relative nav nav-pills nav-fill py-3">
                    <li class="nav-item px-2 py-1" role="presentation">
                        <button class="nav-link active models-font" id="pills-tech-tab" 
                            data-bs-toggle="pill" data-bs-target="#pills-tech"
                            type="button" role="tab" aria-controls="pills-tech"
                            aria-selected="true">INTELLIGENT TECHNOLOGY</button>
                    </li>
                    <li class="nav-item px-2 py-1" role="presentation">
                        <button class="nav-link models-font" id="pills-drive-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-drive"
                            type="button" role="tab" aria-controls="pills-drive"
                            aria-selected="true">INTELLIGENT DRIVING MODES</button>
                    </li>
                    <li class="nav-item px-2 py-1" role="presentation">
                        <button class="nav-link models-font" id="pills-cruise-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-cruise"
                            type="button" role="tab" aria-controls="pills-cruise"
                            aria-selected="true">ACC ADAPTIVE CRUISE CONTROL</button>
                    </li>
                </ul>
            </div>
                
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane show active" id="pills-tech" role="tabpanel" aria-labelledby="pills-tech-tab">
                    <!-- mobile panel text -->
                    <div class="px-3 py-2 col-12 relative bg-black pane-text-mobile">
                        <p class="text-white font-work">
                            The Tiggo 8 Pro is packed full of the latest 
                            technology, multiple high-end screens,
                            SONY sound system, wireless charging for 
                            your devices, automatic window washer, 
                            refrigerated armrest storage for a cold drink
                            on a hot day, and whole lot more.
                        </p>
                    </div>
                    <div class = "absolute top-88 left-20">
                        <!-- desktop panel text -->
                        <div class = "col-4">
                            <h1 class = "pane-title models-font uppercase text-white">
                                INTELLIGENT TECHNOLOGY
                            </h1>
                            <p class="pane-text text-white font-work">
                                The Tiggo 8 Pro is packed full of the latest 
                                technology, multiple high-end screens,
                                SONY sound system, wireless charging for 
                                your devices, automatic window washer, 
                                refrigerated armrest storage for a cold drink
                                on a hot day, and whole lot more. 
                            </p>
                        </div> 
                    </div>
                    <img class="w-100" src="assets/img/Tiggo8Pro-intelligent-technology.jpg" alt="Tiggo 8 Pro Intelligent Technology">
                </div>
                <div class="tab-pane" id="pills-drive" role="tabpanel" aria-labelledby="pill-drive-tab">
                    <!-- mobile panel text -->
                    <div class="px-3 py-2 col-12 relative bg-black pane-text-mobile">
                        <p class="text-white font-work">
                            The Tiggo 8 Pro shifts between different driving modes
                            according to the road conditions you face, saving you 
                            fuel and enhancing your drive. it will also memorize
                            the driving mode you last so you're already in Eco 
                            or Sports mode when you get back into your car.
                        </p>
                    </div>
                    <div class = "absolute top-88 left-20">
                        <!-- desktop panel text -->
                        <div class="col-4">
                            <h1 class = "pane-title models-font uppercase text-white">
                                INTELLIGENT DRIVING MODES
                            </h1>
                            <p class="pane-text text-white font-work">
                                The Tiggo 8 Pro shifts between different driving modes
                                according to the road conditions you face, saving you 
                                fuel and enhancing your drive. it will also memorize
                                the driving mode you last so you're already in Eco 
                                or Sports mode when you get back into your car.
                            </p>
                        </div>
                    </div>
                    <img class="w-100" src="assets/img/Tiggo8Pro-intelligent-drive.jpg" alt="Tiggo 8 Pro Intelligent Drive">
                </div>
                <div class="tab-pane" id="pills-cruise" role="tabpanel" aria-labelledby="pills-cruise-tab">
                    <!-- mobile panel text -->
                    <div class="px-3 py-2 col-12 relative bg-black pane-text-mobile">
                        <p class="text-white font-work">
                            The Tiggo 8 Pro's adaptive cruise control 
                            monitors road conditions, vehicle spacing, 
                            automatic speed, regulation, and start/stop
                        </p>
                    </div>
                    <div class = "absolute top-88 left-20">
                        <!-- desktop panel text -->
                        <div class="col-4">
                            <h1 class = "pane-title models-font uppercase text-white">
                                ACC ADAPTIVE CRUISE CONTROL
                            </h1>
                            <p class="pane-text text-white font-work">
                                The Tiggo 8 Pro's adaptive cruise control 
                                monitors road conditions, vehicle spacing, 
                                automatic speed, regulation, and start/stop
                            </p>
                        </div>
                    </div>
                    <img class="w-100" src="assets/img/Tiggo8Pro-acc-cruise-control.jpg" alt="Tiggo 8 Pro ACC Adaptive Cruise Control">
                </div>
            </div>
        </div>

        <div class="relative w-full">
            <div class="p-10 d-block">
                <h1 class="h1-custom">Tech</h1>
            </div>
            <div class="row mx-auto centered">
                <div class="col-12 col-md-6 order-2 order-md-2">
                    <div class="px-2 font-work">
                        <h5 class="py-3 fw-bold">
                            BSD Blind Spot Detection
                        </h5>
                        <p class="py-4 border-desc">
                           The Tiggo 8 Pro uses BSD (Blind Spot Detection) and
                           LCA (Lane Change Assist) with microwave radar to
                           detect passing cars and prevent accidents due to
                           overtaking cars moving through any potential blind spots 
                           in the rear mirror.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 order-1 order-md-1 p-0">
                    <div>
                        <img class="w-100 lazyload" data-src="assets/img/Tiggo8Pro-BSD.jpg" 
                            alt="Tiggo 8 Pro Blind Spot Detection">
                    </div>
                </div>
            </div>
            <div class="row mx-auto centered">
                <div class="col-12 col-md-6 order-2 order-md-1">
                    <div class="px-3 font-work">
                        <h5 class="py-3 fw-bold">
                            Automatic Sensing Tail Door
                        </h5>
                        <p class="py-4 border-desc">
                           The Tiggo 8 Pro's electric tailgate opens automatically 
                           when the remote control is brought within 1 metre of
                           the tailgate, sparing you the inconvenience of having to 
                           search for your key when you want to load up the boot.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 order-1 order-md-2 p-0">
                    <div>
                        <img class="w-100 lazyload" data-src="assets/img/Tiggo8Pro-tail.jpg" 
                            alt="Tiggo 8 Pro Tail Door">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="bg-wireframe w-100">
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
                        <div class = "text-center tiggo-nav" onclick="window.open('<?=BASE_URL?>price-list/assets/price-list/tiggo8pro-pricelist.png', '_blank')">
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
            <div class = "d-flex flex-column relative tiggo8-text-bottom centered models-font">
                <h1 class="chery-red text-center mb-4">Tiggo 8 Pro</h1>
                <div class="d-flex gap-row mb-5 centered">
                    <a class="col-12 my-3 button-padding border-rounded bg-light
                            models-font btn" href="../../price-list/assets/brosur/Tiggo8Pro-brosur.pdf" target="_blank">
                        <h5 class="text-center">Unduh Brosur</h5>
                    </a>                         
                    <!-- <a class="col-9 col-md-6 my-3 button-padding border-rounded bg-light
                            models-font btn" href="../../price-list/assets/price-list/tiggo8pro-pricelist.png" target="_blank">
                        <h5 class="text-center">Unduh Price List</h5>
                    </a> -->
                </div>
            </div>
        </div>

        <div class="relative mt-up-25">
            <img class="w-100 lazyload" data-src="assets/img/Tiggo8Pro-exterior.jpg">
        </div>
        
        <footer class="relative footer-border px-3 py-4">
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

        </script>
    </body>
</html>