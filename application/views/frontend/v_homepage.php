<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cahya web | Jasa Pembuatan Website Professional</title>
    <link rel="shortcut icon" href="<?=base_url('assets_frontend')?>/image/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?=base_url('assets_frontend')?>/library/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url('assets_frontend')?>/library/animate/animate.min.css">
    <link rel="stylesheet" href="<?=base_url('assets_frontend')?>/library/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url('assets_frontend')?>/library/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="<?=base_url('assets_frontend')?>/style.css">
</head>
<body data-spy="scroll" data-target="#navbar-spy" data-offset="100">

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top transparent" id="navbar-spy">
        <a href="" class="navbar-brand"> <img src="<?=base_url('assets_frontend')?>/image/logo-navbar.svg" alt="Cahya web | Jasa Pembuatan Website Professional" height="55"> </a>
        <button class="navbar-toggler">
            <span class="navbar-toggler-icon" data-toggle="collapse" data-target="#addNavbar"></span>
        </button>
        <div class="collapse navbar-collapse" id="addNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#home" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#about" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="#service" class="nav-link">Service</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

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
                    <h1 class="mb-3">Performance</h1>
                    <p class="mb-2">Kami pastikan website anda akan memiliki performa yang tinggi sehingga meningkatkan retensi konsumen anda</p>
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

        <!--website pribadi-->
        <section class="container-fluid website-pribadi" id="service">
            <div class="row text-center justify-content-center">
                <h1 class="display-4 title-border mt-5 mb-1">Website Pribadi</h1>
                <div class="col-12">
                    <p class="mt-3 mb-5">Sangat cocok bagi anda yang ingin membuat sebuah Website Profile untuk menunjukkan skill-skill anda dan ditampilkan dalam website agar tampak lebih keren.</p>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-4 card-price">
                    <div class="card mb-4">
                        <div class="card-content">
                            <div class="card-header text-light text-center" style="background: linear-gradient(to bottom, rgb(70, 218, 33), rgb(104, 204, 23));">
                                <h1>Standard</h1>
                            </div>
                            <div class="card-body card-feature">
                                <ul>
                                    <li>3 halaman</li>
                                    <li>Hosting 1Gb</li>
                                    <li>Domain</li>
                                    <li>Konten disediakan oleh klien</li>
                                    <li>SEO Friendly</li>
                                    <li>Integrasi Wordpress</li>
                                    <li>Support</li>
                                    <li>Responsive Layout</li>
                                    <li>Link To Social Media</li>
                                    <li>Statistik Pengunjung</li>
                                    <li>Alamat Email Domain</li>
                                    <li>Revisi maksimal 2 kali</li>
                                </ul>
                                <div class="text-center">
                                    <h4>Rp. 3.000.000</h4>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="http://api.whatsapp.com/send?phone=+6287859671000&text=Pesan+paket+Website+Pribadi+yang+Standard" class="btn btn-dark btn-block">Pesan</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 card-price">
                    <div class="card mb-4">
                        <div class="card-content">
                            <div class="card-header text-light text-center" style="background: linear-gradient(to bottom, rgb(39, 78, 250), rgb(25, 29, 240));">
                                <h1>Plus</h1>
                            </div>
                            <div class="card-body card-feature">
                                <ul>
                                    <li>5 halaman</li>
                                    <li>Hosting 2Gb</li>
                                    <li>Domain</li>
                                    <li>Konten disediakan oleh klien</li>
                                    <li>SEO Friendly</li>
                                    <li>Integrasi Wordpress</li>
                                    <li>Support</li>
                                    <li>Responsive Layout</li>
                                    <li>Link To Social Media</li>
                                    <li>Statistik Pengunjung</li>
                                    <li>Alamat Email Domain</li>
                                    <li>Revisi maksimal 3 kali</li>
                                </ul>
                                <div class="text-center">
                                    <h4>Rp. 4.500.000</h4>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="http://api.whatsapp.com/send?phone=+6287859671000&text=Pesan+paket+Website+Pribadi+yang+Plus" class="btn btn-dark btn-block">Pesan</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 card-price">
                    <div class="card mb-4">
                        <div class="card-content">
                            <div class="card-header text-light text-center" style="background: linear-gradient(to bottom, rgb(241, 227, 32), rgb(228, 208, 29));">
                                <h1>Premium</h1>
                            </div>
                            <div class="card-body card-feature">
                                <ul>
                                    <li>8 halaman</li>
                                    <li>Hosting 2Gb</li>
                                    <li>Web Accelerator 32x</li>
                                    <li>Domain</li>
                                    <li>Konten disediakan oleh klien</li>
                                    <li>SEO Friendly</li>
                                    <li>Integrasi Wordpress</li>
                                    <li>Support</li>
                                    <li>Responsive Layout</li>
                                    <li>Link To Social Media</li>
                                    <li>Statistik Pengunjung</li>
                                    <li>Alamat Email Domain</li>
                                    <li>Revisi maksimal 5 kali</li>
                                </ul>
                                <div class="text-center">
                                    <h4>Rp. 6.000.000</h4>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="http://api.whatsapp.com/send?phone=+6287859671000&text=Pesan+paket+Website+Pribadi+yang+Premium" class="btn btn-dark btn-block">Pesan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container-fluid website-pribadi-contoh">
            <div class="row text-center justify-content-center">
                <h1 class="display-4 title-border mt-5 mb-5" style="font-size: 30px">Contoh Website Pribadi</h1>
            </div>
            <div class="row justify-content-around contoh-web" style="margin-bottom: 48px">
                <div class="col-lg-3 border">
                    <img src="" alt="Cahya web | Jasa Pembuatan Website Professional">
                </div>
                <div class="col-lg-3 border">
                    <img src="" alt="Cahya web | Jasa Pembuatan Website Professional">
                </div>
                <div class="col-lg-3 border">
                    <img src="" alt="Cahya web | Jasa Pembuatan Website Professional">
                </div>
            </div>
        </section>
        <!-- end website pribadi -->

        <!--website bisnis-->
        <section class="container-fluid website-bisnis">
            <div class="row text-center justify-content-center">
                <h1 class="display-4 title-border mt-5 mb-1">Website Bisnis</h1>
                <div class="col-12">
                    <p class="mt-3 mb-5">Sangat cocok bagi anda yang ingin membuat sebuah Website Company Profile untuk meningkatkan integritas dari bisnis anda dan meningkatan kepercayaan pada konsumen anda.</p>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-4 card-price">
                    <div class="card mb-4">
                        <div class="card-content">
                            <div class="card-header text-light text-center" style="background: linear-gradient(to bottom, rgb(70, 218, 33), rgb(104, 204, 23));">
                                <h1>Standard</h1>
                            </div>
                            <div class="card-body card-feature">
                                <ul>
                                    <li>5 halaman</li>
                                    <li>Hosting 2Gb</li>
                                    <li>Domain</li>
                                    <li>Konten disediakan oleh klien</li>
                                    <li>SEO Friendly</li>
                                    <li>Integrasi Wordpress</li>
                                    <li>Support</li>
                                    <li>Responsive Layout</li>
                                    <li>Link To Social Media</li>
                                    <li>Statistik Pengunjung</li>
                                    <li>Alamat Email Domain</li>
                                    <li>Revisi maksimal 2 kali</li>
                                </ul>
                                <div class="text-center">
                                    <h4>Rp. 5.000.000</h4>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="http://api.whatsapp.com/send?phone=+6287859671000&text=Pesan+paket+Website+Bisnis+yang+Standard" class="btn btn-dark btn-block">Pesan</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 card-price">
                    <div class="card mb-4">
                        <div class="card-content">
                            <div class="card-header text-light text-center" style="background: linear-gradient(to bottom, rgb(39, 78, 250), rgb(25, 29, 240));">
                                <h1>Plus</h1>
                            </div>
                            <div class="card-body card-feature">
                                <ul>
                                    <li>12 halaman</li>
                                    <li>Hosting 2Gb</li>
                                    <li>Domain</li>
                                    <li>Konten disediakan oleh klien</li>
                                    <li>SEO Friendly</li>
                                    <li>Integrasi Wordpress</li>
                                    <li>Support</li>
                                    <li>Responsive Layout</li>
                                    <li>Link To Social Media</li>
                                    <li>Statistik Pengunjung</li>
                                    <li>Alamat Email Domain</li>
                                    <li>Revisi maksimal 3 kali</li>
                                </ul>
                                <div class="text-center">
                                    <h4>Rp. 8.000.000</h4>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="http://api.whatsapp.com/send?phone=+6287859671000&text=Pesan+paket+Website+Bisnis+yang+Plus" class="btn btn-dark btn-block">Pesan</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 card-price">
                    <div class="card mb-4">
                        <div class="card-content">
                            <div class="card-header text-light text-center" style="background: linear-gradient(to bottom, rgb(241, 227, 32), rgb(228, 208, 29));">
                                <h1>Premium</h1>
                            </div>
                            <div class="card-body card-feature">
                                <ul>
                                    <li>14 halaman</li>
                                    <li>Hosting 3Gb</li>
                                    <li>Web Accelerator 32x</li>
                                    <li>Domain</li>
                                    <li>Konten disediakan oleh klien</li>
                                    <li>SEO Friendly</li>
                                    <li>Integrasi Wordpress</li>
                                    <li>Support</li>
                                    <li>Responsive Layout</li>
                                    <li>Link To Social Media</li>
                                    <li>Statistik Pengunjung</li>
                                    <li>Alamat Email Domain</li>
                                    <li>Revisi maksimal 5 kali</li>
                                </ul>
                                <div class="text-center">
                                    <h4>Rp. 10.000.000</h4>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="http://api.whatsapp.com/send?phone=+6287859671000&text=Pesan+paket+Website+Bisnis+yang+Premium" class="btn btn-dark btn-block">Pesan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container-fluid website-bisnis-contoh">
            <div class="row text-center justify-content-center">
                <h1 class="display-4 title-border mt-5 mb-5" style="font-size: 30px">Contoh Website Bisnis</h1>
            </div>
            <div class="row justify-content-around contoh-web" style="margin-bottom: 48px">
                <div class="col-lg-3 border">
                    <img src="" alt="Cahya web | Jasa Pembuatan Website Professional">
                </div>
                <div class="col-lg-3 border">
                    <img src="" alt="Cahya web | Jasa Pembuatan Website Professional">
                </div>
                <div class="col-lg-3 border">
                    <img src="" alt="Cahya web | Jasa Pembuatan Website Professional">
                </div>
            </div>
        </section>
        <!--end website bisnis-->

        <!--website e-commerce-->
        <section class="container-fluid website-ecommerce">
            <div class="row text-center justify-content-center">
                <h1 class="display-4 title-border mt-5 mb-1">Website E-Commerce</h1>
                <div class="col-12">
                    <p class="mt-3 mb-5">Sangat cocok bagi anda yang ingin membuat sebuah Online Shop untuk meningkatkan integritas dan kemudahan bagi konsumen anda ketika berbelanja di toko anda.</p>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-4 card-price">
                    <div class="card mb-4">
                        <div class="card-content">
                            <div class="card-header text-light text-center" style="background: linear-gradient(to bottom, rgb(70, 218, 33), rgb(104, 204, 23));">
                                <h1>Standard</h1>
                            </div>
                            <div class="card-body card-feature">
                                <ul>
                                    <li>Fitur Keranjang belanjaan</li>
                                    <li>Fitur Diskon</li>
                                    <li>Fitur Pengiriman</li>
                                    <li>Fitur Pembayaran</li>
                                    <li>Hosting 2Gb</li>
                                    <li>Domain</li>
                                    <li>Input Kategori & Produk</li>
                                    <li>Integrasi Wordpress</li>
                                    <li>Integrasi Woocommerce</li>
                                    <li>SEO Friendly</li>
                                    <li>Support</li>
                                    <li>Responsive Layout</li>
                                    <li>Link to Social Media</li>
                                    <li>Statistik Pengunjung</li>
                                    <li>Alamat Email Domain</li>
                                    <li>Revisi maksimal 2 kali</li>
                                </ul>
                                <div class="text-center">
                                    <h4>Rp. 7.000.000</h4>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="http://api.whatsapp.com/send?phone=+6287859671000&text=Pesan+paket+Website+Ecommerce+yang+Standard" class="btn btn-dark btn-block">Pesan</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 card-price">
                    <div class="card mb-4">
                        <div class="card-content">
                            <div class="card-header text-light text-center" style="background: linear-gradient(to bottom, rgb(39, 78, 250), rgb(25, 29, 240));">
                                <h1>Plus</h1>
                            </div>
                            <div class="card-body card-feature">
                                <ul>
                                    <li>Fitur Keranjang belanjaan</li>
                                    <li>Fitur Diskon</li>
                                    <li>Fitur Pengiriman</li>
                                    <li>Fitur Pembayaran</li>
                                    <li>Hosting 3Gb</li>
                                    <li>Domain</li>
                                    <li>Input Kategori & Produk</li>
                                    <li>Integrasi Wordpress</li>
                                    <li>Integrasi Woocommerce</li>
                                    <li>SEO Friendly</li>
                                    <li>Support</li>
                                    <li>Responsive Layout</li>
                                    <li>Link to Social Media</li>
                                    <li>Statistik Pengunjung</li>
                                    <li>Alamat Email Domain</li>
                                    <li>Revisi maksimal 3 kali</li> 
                                </ul>
                                <div class="text-center">
                                    <h4>Rp. 11.000.000</h4>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="http://api.whatsapp.com/send?phone=+6287859671000&text=Pesan+paket+Website+Ecommerce+yang+Plus" class="btn btn-dark btn-block">Pesan</a>
                            </div>
                        </div>
                    </div>
                </div>

                <test class="col-lg-4 card-price">
                    <div class="card mb-4">
                        <div class="card-content">
                            <div class="card-header text-light text-center" style="background: linear-gradient(to bottom, rgb(241, 227, 32), rgb(228, 208, 29));">
                                <h1>Premium</h1>
                            </div>
                            <div class="card-body card-feature">
                                <ul>
                                    <li>Theme Premium</li>
                                    <li>Fitur Keranjang belanjaan</li>
                                    <li>Fitur Diskon</li>
                                    <li>Fitur Pengiriman</li>
                                    <li>Fitur Pembayaran</li>
                                    <li>Hosting 4Gb</li>
                                    <li>Domain</li>
                                    <li>Input Kategori & Produk</li>
                                    <li>Integrasi Wordpress</li>
                                    <li>Integrasi Woocommerce</li>
                                    <li>SEO Friendly</li>
                                    <li>Support</li>
                                    <li>Responsive Layout</li>
                                    <li>Link to Social Media</li>
                                    <li>Statistik Pengunjung</li>
                                    <li>Alamat Email Domain</li>
                                    <li>Revisi maksimal 5 kali</li> 
                                </ul>
                                <div class="text-center">
                                    <h4>Rp. 25.000.000</h4>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="http://api.whatsapp.com/send?phone=+6287859671000&text=Pesan+paket+Website+Ecommerce+yang+Premium" class="btn btn-dark btn-block">Pesan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container-fluid website-ecommerce-contoh">
            <div class="row text-center justify-content-center">
                <h1 class="display-4 title-border mt-5 mb-5" style="font-size: 30px">Contoh Website e-commerce</h1>
            </div>
            <div class="row justify-content-around contoh-web" style="margin-bottom: 48px">
                <div class="col-lg-3 border">
                    <img src="" alt="Cahya web | Jasa Pembuatan Website Professional">
                </div>
                <div class="col-lg-3 border">
                    <img src="" alt="Cahya web | Jasa Pembuatan Website Professional">
                </div>
                <div class="col-lg-3 border">
                    <img src="" alt="Cahya web | Jasa Pembuatan Website Professional">
                </div>
            </div> 
        </section>
        <!--end website e-commerce-->

    </main>

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
                                <td class="icon"> <i class="fas fa-map-marker-alt"></i> </td class="icon">
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
                <div class="col-lg-6 mt-sm-4 mt-md-0">
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