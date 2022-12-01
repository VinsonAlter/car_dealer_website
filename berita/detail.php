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
        </style>

    </head>

    <body>
        <header class="header-area header-sticky">
            <?php readfile("../header.php"); ?>
        </header>

        <section class="relative container mx-auto mt-top-header">
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
                    <!-- <p>  
                        PT Chery Sales Indonesia, prinsipal dari brand mobil Chery, 
                        melaksanakan konferensi dealer perdananya bersama dengan perwakilan 20 
                        outlet dealer dari sepuluh grup dealer yang tersebar di Jakarta, 
                        Tangerang, Bekasi, Bandung, Yogyakarta, Surabaya, Makassar, Balikpapan, 
                        Semarang, Batam, Lampung, dan Pekanbaru. Pada kesempatan tersebut 
                        dilaksanakan pula seremoni penandatanganan kesepakatan kerja sama antara
                        PT Chery Sales Indonesia yang diwakili oleh Tao Yong selaku President 
                        Director, dengan pimpinan dari kesembilan grup dealer. Acara yang 
                        berlangsung di Hotel Fairmont, Jakarta Selatan ini juga menghadirkan 
                        manajemen Chery International Co. Ltd. secara virtual, yang tidak hanya 
                        menyampaikan pemaparan, tetapi juga dukungan dan dorongan semangat untuk
                        bersama-sama membangun reputasi Chery sebagai perusahaan berbasis 
                        teknologi yang mengedepankan kepuasan pelanggan melalui kualitas produk 
                        dan pelayanannya.
                    <br/>
                    <br/>
                    <p>
                        Sejak awal tahun ini, Chery telah melakukan pendekatan kepada 
                        grup-grup dealer besar yang sudah memiliki kredibilitas dan pengalaman 
                        panjang di industri otomotif Indonesia untuk melakukan penjajakan kerja 
                        sama. Akhirnya Chery melabuhkan keyakinannya untuk bermitra dengan 
                        sepuluh grup dealer yang pada tahap awal ini bersiap untuk kesiapan 20 
                        outlet dealer. Kesepuluh grup dealer yang dinilai telah memenuhi standar
                        klasifikasi 3S (Service, Sales, dan Spare Parts) ini adalah: PT Arta 
                        Bumi Motor, PT Tri Daya Auto, PT Central Mekar Abyudaya, PT Surya 
                        Mahkota Gemilang, PT Manang Sejahtera Abadi, PT Persada Sukses 
                        Mobilindo, PT Cherindo Lamda Sejahtera, PT Ambara Karya Arjuna, PT 
                        Cemaco Makmur Corporatama, PT Mitra Borneo Indah, dan PT Idola Mobil. 
                        Saat ini, mereka tengah menyelesaikan konstruksi outlet dealer sesuai 
                        rancangan dan standar Chery, dari sisi infrastruktur dan desain yang 
                        akan siap sebelum peluncuran TIGGO 7 PRO dan TIGGO 8 PRO. Bersama 
                        kesepulah grup dealer ini, Chery bersiap untuk memberikan pengalaman 
                        konsumen terbaik melalui keunggulan produk dan layanan, sehingga dapat 
                        memberikan kontribusi yang nyata bagi kemajuan industri otomotif 
                        Indonesia
                    <br/>
                    <br/>
                    </p>
                    <p><em>“Kami mengucapkan selamat datang ke dalam keluarga Chery kepada 
                        kesepuluh grup dealer dan berterima kasih karena bersedia membuka pintu 
                        kerja sama untuk memberikan pilihan produk-produk SUV Premium yang 
                        berteknologi tinggi kepada konsumen otomotif Indonesia. Kami bangga 
                        bahwa para dealers memiliki keyakinan yang sama akan potensi besar Chery
                        di Indonesia,”</em> ujar Tao Yong, President Director PT Chery Sales Indonesia.
	                    <br>
	                    <br>Pada kesempatan konferensi dealer ini, Zhang Shengshan, Executive 
                            VP Chery International Co. Ltd, juga hadir secara virtual dan 
                            menyampaikan beberapa tanggapan serta motivasi. “<em>Chery memiliki 
                            kekuatan besar dalam kemampuan teknis, sehingga mampu membangun 
                            produk-produk berkualtas dengan teknologi tinggi dan desain yang 
                            fashionable, serta konsisten berinovasi untuk memberikan pengalaman 
                            terbaik bagi konsumen sesuai tren yang berjalan. Kekuatan besar ini 
                            harus didukung dengan customer experience yang baik, sehingga secara 
                            menyeluruh, reputasi dapat terjaga dan terus dipercaya.”</em>
	                    <br>
                        <br>Kecanggihan teknologi Chery yang dilandasi oleh riset mendalam 
                            menjadi salah satu kunci dalam pengembangan produk dan layanan, yang 
                            artinya Chery selalu berusaha menjawab kebutuhan konsumen dan 
                            mengembangkan inovasi sesuai tren yang berlangsung. Prinsip Chery ini 
                            diturunkan ke dalam empat pilar yang menjadi tonggak untuk membangun 
                            langkah Chery sebagai brand SUV Premium pilihan konsumen Indonesia, 
                            yaitu pilar produk, yang secara fisik menjadi bukti inovasi yang 
                            berkelanjutan; pilar network yang dibangun bersama dengan para dealer; 
                            pilar brand, yang dikokohkan melalui berbagai kegiatan marketing, 
                            komunikasi, dan digital; serta pilar layanan, yang mengutamakan 
                            pengalaman dan kepuasan konsumen, baik dari penjualan, purnajual, dan 
                            penyediaan suku cadang.
                        <br>
                        <br><em>“Konsumen adalah prioritas kami dan kami akan berusaha untuk 
                            membangun hubungan jangka panjang dengan menyediakan layanan terbaik 
                            serta melalui program-program yang banyak melibatkan mereka, sehingga 
                            interaksi yang terjadi lebih humanis dan memberikan kenyamanan,”&nbsp;</em>tutup Tao Yong.</p> -->
                </div>
            </div>
        </section>

        <footer class="relative footer-border px-5 py-4">
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

            fetch('../news.json')
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

                for (var i = 0; i < data.length; i++) {
                    if(data[i].slug === get_title) {
                        $(title).append().html(data[i].title);
                        $(date).append().html(data[i].date);
                        $(img).attr("src", data[i].img);
                        $(content).append().html(data[i].content);
                    }
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