<div class="bottom-nav text-center">
    <a href="#whatsapp" id="toggle-whatsapp" data-bs-toggle="modal" 
        data-target="#whatsapp" class="d-flex centered flex-column">
        <img class="px-1 whatsapp-icon" src="<?=BASE_URL?>assets/logo/whatsapp.png">
        <!-- <i class="fab fa-2x fa-whatsapp px-1"></i> -->
        <span class="whatsapp-container px-1">Chat Us</span>
    </a>
</div>

<!-- Popup Whatsapp -->
<div class="modal fade" id="whatsapp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Chat with us <i class="fab fa-lg fa-whatsapp ml-1" style="color: green"></i></h5>
            </div>
            <div class="modal-body">
                <form>
                    <div style="margin-bottom: 0;">                    
                        <textarea class="form-control" id="kontenWhatsapp" rows="3">Halo Chery, Saya ingin bertanya seputar produk Chery.</textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-danger" id="btnKirimWhatsapp">Kirim</button>
            </div>
        </div>
    </div>
</div>
