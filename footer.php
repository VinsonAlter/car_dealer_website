<!-- <div class="d-lg-none text-center px-3 py-3">
    <a href = "<?= BASE_URL; ?>">
        <img src="<?= BASE_URL; ?>assets/logo/logo chery oriental stars.png" class="footer-logo-small">
    </a>
</div> -->
<div class="row mx-auto py-3 footer-wrapper footer-desktop-padding">
    <div class="col-md-4 col-6 d-flex no-padding mr-sm-10">
        <div class="d-flex flex-column row-gap-4">
            <a href = "<?= BASE_URL; ?>">
                <div class="d-flex flex-column centered row-gap-4">
                    <img src="<?= BASE_URL; ?>assets/logo/logo chery oriental stars.png" class="footer-logo-small">
                    <p class="text-center fs-bold-700 card-title-font">MEDAN ORIENTAL STARS</p>
                </div>
            </a>
            <ul class="d-flex align-center p-0">
                <li>
                    <a href="https://www.instagram.com/cherymedan/" target="_blank">
                        <span class="fa-stack">
                            <i class="fa-solid fa-circle fa-stack-2x"></i>
                            <i class="fa-solid fa-brands fa-instagram fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/profile.php?id=100088285603591&mibextid=ZbWKwL" target="_blank">
                        <span class="fa-stack">
                            <i class="fa-solid fa-circle fa-stack-2x"></i>
                            <i class="fa-solid fa-brands fa-facebook-f fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- <div class="d-flex flex-column no-padding">
        <p class="footer-header">
            <a href="#">Home</a>
        </p>
    </div> -->
    <div class="col-md-8 col-6 mobile-flex-column">
        <div class="d-flex flex-column no-padding pr-5">
            <p class="footer-header">
                <a href="<?= BASE_URL; ?>models/">Models</a>
            </p>
            <ul>
                <li>
                    <a href="<?= BASE_URL; ?>models/tiggo7pro/">Tiggo 7 Pro</a>
                </li>
                <li>
                    <a href="<?= BASE_URL; ?>models/tiggo8pro/">Tiggo 8 Pro</a>
                </li>
            </ul>
        </div>
        <div class="d-flex flex-column no-padding pr-5">
            <p class="footer-header">
                <a href="https://forms.gle/csGRdsmUEcbmxdxF8" target="_blank">Test Drive</a>
            </p>
        </div>
        <div class="d-flex flex-column no-padding pr-5">
            <p class="footer-header">
                <a href="<?= BASE_URL; ?>price-list/">Price List</a>
            </p>
        </div>
        <!-- <div class="d-flex flex-column no-padding">
            <p class="footer-header">
                <a href="javascript:void(0)">Promo</a>
            </p>
        </div>
        <div class="d-flex flex-column no-padding">
            <p class="footer-header">
                <a href="javascript:void(0)">Layanan</a>
            </p>
            <ul>
                <li>
                    <a href="javascript:void(0)">Cari Dealer</a>
                </li>
                <li>
                    <a href="javascript:void(0)">Sparepart</a>
                </li>
            </ul>
        </div> -->
        <div class="d-flex flex-column no-padding pr-5">
            <p class="footer-header">
                <a href="<?= BASE_URL; ?>berita/">Berita</a>
            </p>
        </div>
        <div class="d-flex flex-column no-padding pr-5">
            <p class="footer-header">
                <a href="https://forms.gle/nh9R9RwHzGug2MeF9" target="_blank">Kontak Kami</a>
            </p>
        </div>
        <div class="d-flex flex-column no-padding pr-5">
            <p class="footer-header">
                <a href="<?= BASE_URL; ?>about/">Mengenal Chery</a>
            </p>
            <ul>
                <li>
                    <a href="<?= BASE_URL; ?>about/chery-love.php">With Chery with love</a>
                </li>
                <li>
                    <a href="<?= BASE_URL; ?>about/about-chery.php">Tentang Chery</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="copyright text-center">
    © 2022 Chery Oriental Group. All rights reserved
</div>
<!-- Currently this part is not needed -->
<!-- <div class="container-fluid media-mobile">
    <div class="row work-font text-white cp">
        <div class="col-4 text-center" onclick="window.location='<?=BASE_URL?>price-list/index.php'">
            <i class="fas fa-dollar-sign"></i>
            <p class="p-0 m-0 fs-bold-600">
                Price List
            </p>
        </div>
        <div class="col-4 text-center" onclick="window.location='<?=BASE_URL?>price-list/index.php'">
            <i class="fas fa-book-reader"></i>
            <p class="p-0 m-0 fs-bold-600">
                Brosur
            </p>
        </div>
        <div class="col-4 text-center" onclick="window.open('https://forms.gle/nh9R9RwHzGug2MeF9', '_blank')">
            <i class="fas fa-comments"></i>                 
            <p class="p-0 m-0 fs-bold-600">
                Kontak Kami
            </p>
        </div>
    </div>
</div> -->

<!-- Popup Price List -->
<!-- This concept is not needed yet -->
<!-- <div class="modal fade" id="popupPriceList" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable text-dark">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pilih Price-List yang ingin anda unduh.</h5>
                <button type="button" class = "btn btn-light" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times text-body"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row mt-2">
                        <div class="col-md-4">
                            <div class="card bg-dark text-white card-brochure" onclick="window.open('<?=BASE_URL;?>brosur/new-pajero-sport.pdf')">
                                <img src="https://sardanagroup.co.id/mitsubishi-medan/assets/img/bg/new-pajero.jpg" class="card-img card-img-custom" alt="Mitsubishi Pajero Sport">
                                <div class="card-img-overlay">
                                    <h5 class="card-title">Tiggo 7 Pro<i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-2 mt-sm-0">
                            <div class="card bg-dark text-white card-brochure" onclick="window.open('https://sardanagroup.co.id/brosur/new-xpander.pdf')">
                                <img src="https://sardanagroup.co.id/mitsubishi-medan/assets/img/bg/new-xpander.jpg" class="card-img card-img-custom" alt="Mitsubishi New Xpander">
                                <div class="card-img-overlay">
                                    <h5 class="card-title">Tiggo 8 Pro<i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>                
            </div>
        </div>
    </div>
</div> -->

<!-- <div class="sosmed d-flex centered mt-3 no-padding">
    <ul>
        <li>
            <a href="https://www.instagram.com/cherymedan/" target="_blank">
                <span class="fa-stack">
                    <i class="fa-solid fa-circle fa-stack-2x"></i>
                    <i class="fa-solid fa-brands fa-instagram fa-stack-1x fa-inverse"></i>
                </span>
            </a>
        </li>
        <li>
            <a href="https://www.facebook.com/profile.php?id=100088285603591&mibextid=ZbWKwL" target="_blank">
                <span class="fa-stack">
                    <i class="fa-solid fa-circle fa-stack-2x"></i>
                    <i class="fa-solid fa-brands fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
            </a>
        </li>
    </ul>
</div> -->
