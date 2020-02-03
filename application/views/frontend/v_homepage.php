    <header id="home">
        <section class="jumbotron d-flex flex-wrap align-items-center justify-content-center heading" style="background-image: url('<?=base_url('assets_frontend')?>/image/bg-header.jpg'); background-size: cover; background-repeat: no-repeat;">
            <div class="row justify-content-center align-items-center">
                <div class="headline col-lg-6 my-sm-4 pl-4">
                    <h1 class="mb-4 text-white animated rollIn" style="font-size: 3.5rem; text-transform: uppercase; font-size: 50px; animation-delay: 0s;">Jasa Pembuatan Website</h1>
                    <p class="mb-4 text-white animated flipInX" style="animation-delay: .2s;">Apakah anda ingin brand atau bisnis anda menjadi lebih terkenal
                        secara online dan tampak lebih professional ?</p>
                    <a class="btn btn-dark mr-2 text-light animated fadeInUp" href="#service" style="font-size: 16px; animation-delay: .3s;">Lihat Paket</a>
                    <a class="btn btn-light animated fadeInUp" href="#feature" style="font-size: 16px; animation-delay: .5s;">Keunggulan Kami</a>
                </div>
                <div class="illustration col-lg-6 mx-auto text-center my-sm-4">
                    <img src="<?=base_url('assets_frontend')?>/image/computer.svg" class="animated bounceInRight" style="animation-delay: .5s;" alt="Cahya web | Jasa Pembuatan Website Professional">
                </div>
            </div>
        </section>

    </header>
    
    <main>

        <section class="container-fluid about" id="about">

                <div class="row">
                    <div class="col-lg-6">
                        <img src="<?=base_url('assets_frontend')?>/image/desk.jpg" alt="Cahya web | Jasa Pembuatan Website Professional" class="mx-auto mb-4" style="width: 95%">
                    </div>
                    <div class="col-lg-6">
                        <h1 class="mb-4" style="font-size: 40px" data-scroll>Solusi Kebutuhan Website Anda ada disini !</h1>
                        <ul class="mb-3">
                            <li>Apakah Anda ingin bisnis anda terlihat lebih professional dan tampak lebih memukau ?</li>
                            <li>Apakah anda ingin membuat portofolio anda menjadi lebih menarik sehingga banyak perusahaan tertarik untuk merekrut anda ?</li>
                            <li>Apakah anda memiliki ritel atau olshop dan ingin membuat e-commerce untuk mendongkrak popularitas dari brand anda ?</li>
                        </ul>
                        <p>Seluruh keinginan anda bisa anda dapatkan disini...</p>
                    </div>
                </div>
                
        </section>

        <section class="container-fluid features" style="background-image: url('<?=base_url('assets_frontend')?>/image/bg-feature.svg'); background-size: cover; background-repeat: no-repeat;" id="feature">
            <div class="row">
                <h1 class="display-4 mx-auto text-light title-border my-3" >Keunggulan</h1>
            </div>
            <div class="row justify-content-center text-light text-center mt-5">
                <div class="col-lg-4">
                    <div class="feature-logo mx-auto my-3 icon-feature">
                        <img src="<?=base_url('assets_frontend')?>/image/feature-briefcase.svg" alt="Cahya web | Jasa Pembuatan Website Professional">
                    </div>
                    <h1 class="mb-3">Professional</h1>
                    <p class="mb-2">Kami bekerja secara professional untuk memenuhi kebutuhan anda  untuk menciptakan website yang sangat sesuai dengan apa anda inginkan</p>
                </div>
                <div class="col-lg-4">
                    <div class="feature-logo mx-auto my-3 icon-feature">
                        <img src="<?=base_url('assets_frontend')?>/image/feature-computer.svg" alt="Cahya web | Jasa Pembuatan Website Professional">
                    </div>
                    <h1 class="mb-3">SEO Friendly</h1>
                    <p class="mb-2">Search Engine Optimization sangat dibutuhkan dalam website anda agar dapat mudah terjangkau oleh mesin pencari seperti Google</p>
                </div>
                <div class="col-lg-4">
                    <div class="feature-logo mx-auto my-3 icon-feature">
                        <img src="<?=base_url('assets_frontend')?>/image/feature-call.svg" alt="Cahya web | Jasa Pembuatan Website Professional">
                    </div>
                    <h1 class="mb-3">Support</h1>
                    <p class="mb-2">Bila anda menemui kesulitan anda dapat menghubungi kami, kami selalu siap untuk membantu</p>
                </div>
            </div>
            </section>

            <section class="plan" id="service">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="pb-3 mx-auto" style="border-bottom: 1px solid; width: fit-content;">Pilih paket yang anda inginkan!</h1>
                        </div>
                    </div>
                    <div class="row justify-content-around mb-2">
                        <div class="col-lg-4">
                            <a href="<?=base_url().'index.php/pribadi'?>">
                                <div class="card">
                                    <div class="card-body text-white" style="background:url('<?=base_url('assets_frontend')?>/image/paket/pribadi.jpg') no-repeat; background-size: cover; height: 200px;">
                                        <h4>Website Pribadi
                                        /Portofolio</h4>
                                    </div>
                                    <div class="card-footer">
                                        <small>DISKON 50% !!!</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="<?=base_url().'index.php/bisnis'?>">
                                <div class="card">
                                    <div class="card-body text-white" style="background:url('<?=base_url('assets_frontend')?>/image/paket/bisnis.jpg') no-repeat; background-size: cover; height: 200px;">
                                        <h4>Website Bisnis</h4>
                                    </div>
                                    <div class="card-footer">
                                        <small>DISKON 50% !!!</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="<?=base_url().'index.php/ecommerce'?>">
                                <div class="card">
                                <div class="card-body text-white" style="background:url('<?=base_url('assets_frontend')?>/image/paket/ecommerce.jpg') no-repeat; background-size: cover; height: 200px;">
                                    <h4>Website E-Commerce</h4>
                                </div>
                                    <div class="card-footer">
                                        <small>DISKON 50% !!!</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        
    </main>