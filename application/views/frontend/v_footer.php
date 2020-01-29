<footer>
        <section class="testimoni-and-contact" id="contact">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 testimoni text-center">
                        <div class="judul">
                            <h4>Testimoni</h4>
                        </div>
                        <div class="d-flex justify-content-center flex-column" style="height:90%">
                            <div class="owl-carousel owl-theme owl-loaded">
                                <div class="item">
                                    <div class="mx-auto mb-4" style="width: 120px; border-radius: 50%;">
                                        <img class="shadow" src="<?=base_url('assets_frontend')?>/image/testimoni/merleeshop.jpg" alt="testimoni cahyaweb jasa pembuatan website professional" style="width: 100%; border-radius: 50%">
                                    </div>
                                    <h5>Merleeshop</h5>
                                    <p class="px-4">Websitenya sangat membantu saya dalam berjualan, great job lah pokoknya !</p>
                                </div>
                                <div class="item">
                                    <div class="mx-auto mb-4" style="width: 120px; border-radius: 50%;">
                                        <img class="shadow" src="<?=base_url('assets_frontend')?>/image/testimoni/cahyalomboktravel.jpg" alt="testimoni cahyaweb jasa pembuatan website professional" style="width: 100%; border-radius: 50%">
                                    </div>
                                    <h5>Cahyalomboktravel</h5>
                                    <p class="px-4">Travel saya sekarang semakin laku! Terimakasih banyak ya... recomended banget pokoknya!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 contact">
                        <div class="judul">
                            <h4 class="text-center">Kontak</h4>
                        </div>
                        <div>
                            <form class="form-group mt-3" action="" method="POST">
                                <label for="">Nama</label>
                                <input class="form-control" name="nama" type="text">
                                <?= form_error('nama', '<p class="ml-3" style="color: darkred; margin-bottom: 0;">', '</p>') ?>

                                <label for="">Email</label>
                                <input class="form-control" name="email" type="email">
                                <?= form_error('email', '<p class="ml-3" style="color: darkred; margin-bottom: 0;">', '</p>') ?>

                                <label for="">Telepon</label>
                                <input class="form-control" name="telepon" type="text">
                                <?= form_error('telepon', '<p class="ml-3" style="color: darkred; margin-bottom: 0;">', '</p>') ?>

                                <label for="">Pesan</label>
                                <input class="form-control" name="pesan" type="text">
                                <?= form_error('pesan', '<p class="ml-3" style="color: darkred; margin-bottom: 0;">', '</p>') ?>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary mt-4" style="width: 200px">Kirim</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer text-white">
            <div class="row">
                <div class="col-lg-6">
                    <h4>Contact Us</h4>
                    <div class="alamat">
                        <table>
                            <tr>
                                <td class="icon"> <img src="<?=base_url('assets_frontend')?>/icon/Icon awesome-map-marker-alt.svg" alt="Cahya web | Jasa Pembuatan Website Professional"> </td class="icon">
                                <td><p>Jl. Langko 70 Dasan Agung Mataram</p></td>
                            </tr>
                            <tr>
                                <td class="icon"> <img src="<?=base_url('assets_frontend')?>/icon/Icon awesome-whatsapp.svg" alt="Cahya web | Jasa Pembuatan Website Professional"> </td>
                                <td><p>+6287859671000</p></td>
                            </tr>
                            <tr>
                                <td class="icon"> <img src="<?=base_url('assets_frontend')?>/icon/Icon awesome-telegram-plane.svg" alt="Cahya web | Jasa Pembuatan Website Professional"> </td>
                                <td><p>@GustiCahya</p></td>
                            </tr>
                            <tr>
                                <td class="icon"> <img src="<?=base_url('assets_frontend')?>/icon/Icon feather-mail.svg" alt="Cahya web | Jasa Pembuatan Website Professional"> </td>
                                <td><p>gusticahyax@yahoo.com</p></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6 mt-4 mt-md-0">
                    <h4>Lokasi</h4>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15780.672974134988!2d116.095374!3d-8.579817!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x20eb060e5100fe5e!2sCahya%20Lombok%20Travel!5e0!3m2!1sid!2sid!4v1579953067486!5m2!1sid!2sid" style="width:100%" height="200" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </section>
    </footer>
   
    <script src="<?=base_url('assets_frontend')?>/library/jquery/jquery.slim.min.js"></script>
    <script src="<?=base_url('assets_frontend')?>/library/popper/popper.min.js"></script>
    <script src="<?=base_url('assets_frontend')?>/library/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=base_url('assets_frontend')?>/library/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?=base_url('assets_frontend')?>/library/scroll out/scroll-out.min.js"></script>

    <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            autoplay:true,
            responsive:{
                0:{
                    items:1
                }
            }
        })
        ScrollOut({
            threshold : .6
        });
        window.addEventListener('scroll', function(){
            if(window.scrollY > 0){
                $('.navbar').removeClass('transparent')
            }else{
                $('.navbar').addClass('transparent')
            }
        })
    </script>
</body>
</html>