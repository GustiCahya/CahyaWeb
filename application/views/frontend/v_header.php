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
    <link rel="stylesheet" href="<?=base_url('assets_frontend')?>/style.css">
</head>
<body data-spy="scroll" data-target="#navbar-spy" data-offset="100">

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top transparent" id="navbar-spy">
        <a href="<?=base_url()?>" class="navbar-brand"> <img src="<?=base_url('assets_frontend')?>/image/logo-navbar.svg" alt="Cahya web | Jasa Pembuatan Website Professional" height="55"> </a>
        <button class="navbar-toggler">
            <span class="navbar-toggler-icon" data-toggle="collapse" data-target="#addNavbar"></span>
        </button>
        <div class="collapse navbar-collapse" id="addNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="<?= (current_url() == base_url()) ? '#home' : base_url()?>" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="<?= (current_url() == base_url()) ? '#about' : base_url().'#about'?>" class="nav-link">About</a>
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