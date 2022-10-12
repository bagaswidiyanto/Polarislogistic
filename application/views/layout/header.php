<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $website->metaTitle; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="keywords" content="<?= $website->metaKeywords; ?>">
    <meta name="description" content="<?= $website->metaDescription; ?>">

    <!-- Favicon -->
    <link href="<?= base_url(); ?>assets/imagenew/url-logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <!-- Libraries Stylesheet -->
    <link href="<?= base_url(); ?>assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/swiper.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/responsive.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/whatsapp_chat.css" rel="stylesheet">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
    <div class="container-xxl bg-white p-0">
        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0" id="home">
            <div class="top_menu d-none d-lg-block">
                <div class="top-content d-flex align-items-center">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-8 col-md-8">
                                <div class="float-left d-flex" data-aos="fade-right" data-aos-duration="1000">
                                    <p><i class="fa fa-envelope"></i> <?= $website->email; ?></p>
                                    <div class="d-flex ms-5">
                                        <i class="fa fa-map-marker text-white"></i>
                                        <?= $website->address; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="float-right" data-aos="fade-left" data-aos-duration="1000">
                                    <div class="d-flex top-social">
                                        <?php foreach ($sosmed as $sosmed) {  ?>
                                        <a class="btn btn-outline-light btn-social" title="<?= $sosmed->name; ?>"
                                            href="<?= $sosmed->link; ?>" target="_blank" title=""><i
                                                class="fa <?= $sosmed->icon; ?>"></i></a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <div class="container">
                    <a href=<?= base_url(); ?> class="navbar-brand p-0">
                        <!-- <h1 class="m-0">FitApp</h1> -->
                        <img class="img-fluid" src="https://admin103.polarislogistic.com/upload/<?= $website->image; ?>"
                            alt="Logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav ms-lg-0 ms-xl-5 py-0">
                            <a href="#home" class="nav-item nav-link active">HOME</a>
                            <a href="#about" class="nav-item nav-link">ABOUT US</a>
                            <a href="#why-us" class="nav-item nav-link">WHY US</a>
                            <a href="#services" class="nav-item nav-link">OUR SERVICES</a>
                            <a href="#client" class="nav-item nav-link">OUR CLIENTS</a>
                            <a href="#gallery" class="nav-item nav-link">OUR GALLERIES</a>
                        </div>
                        <div class="contact d-flex ms-auto">
                            <div class="me-3">
                                <?php
                                $number = $website->phone;
                                $n1 = substr($number, 1, 3);
                                $n2 = substr($number, 4, 4);
                                $n3 = substr($number, 8, 4);
                                $wa = $n1 . ' ' . $n2 . ' ' . $n3;
                                ?>
                                <p class="mb-0">Contact For Support</p>
                                <a href="https://wa.wizard.id/fd969d" target="_blank" class="">+62 <?= $wa; ?></a>
                            </div>
                            <img class="img-fluid" src="<?= base_url(); ?>assets/imagenew/contact-out.svg" alt="">

                        </div>
                    </div>
                </div>
            </nav>

            <div class="container-xxl hero-header" id="home">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-7 text-center text-lg-start text-md-start">
                            <h1 class="text-white mb-3 display-6" data-aos="fade-down" data-aos-duration="2000">
                                <?= $website->name; ?></h1>
                            <h3 class="text-white mb-4 fw-bold" data-aos="fade-right" data-aos-duration="2000">
                                <?= $homeweb->title; ?></h3>
                            <p class="text-white mb-0" data-aos="fade-up" data-aos-duration="2000">
                                <?= $homeweb->deskripsi; ?></p>
                            <p class="text-white fw-bolder" data-aos="fade-up" data-aos-duration="2000">
                                <?= $homeweb->kota; ?></p>
                            <a href="https://wa.wizard.id/fd969d" target="_blank"
                                class="btn btn-light py-2 px-4 px-sm-4 rounded-pill me-3 fw-bolder" data-aos="zoom-in"
                                data-aos-duration="2000">Dapatkan
                                Penawaran</a>
                        </div>
                        <div class="col-lg-5 col-md-5">
                            <div class="img d-flex justify-content-center align-items-center" data-aos="fade-up"
                                data-aos-duration="2000">
                                <img src="https://admin103.polarislogistic.com/upload/<?= $website->image; ?>"
                                    class="img-fluid logo" alt="">
                            </div>
                            <div class="info" data-aos="fade-up" data-aos-duration="2000">
                                <h6 onclick="myFunction()" class="fw-bolder focus-txt text-white mb-0">Info Selengkapnya
                                    <i class="fa fa-angle-right ms-2" id="fa"></i>
                                </h6>
                                <?php
                                $number1 = $website->phone;
                                $n11 = substr($number1, 1, 3);
                                $n21 = substr($number1, 4, 4);
                                $n31 = substr($number1, 8, 4);
                                $wa1 = $n11 . '-' . $n21 . '-' . $n31;

                                $number2 = $website->phone_2;
                                $n12 = substr($number2, 1, 3);
                                $n22 = substr($number2, 4, 4);
                                $n32 = substr($number2, 8, 4);
                                $wa2 = $n12 . '-' . $n22 . '-' . $n32;

                                $number3 = $website->phone_3;
                                $n13 = substr($number3, 1, 3);
                                $n23 = substr($number3, 4, 4);
                                $n33 = substr($number3, 8, 4);
                                $wa3 = $n13 . '-' . $n23 . '-' . $n33;
                                ?>
                                <div id="contact" style="display: none;">
                                    <p class="mb-1 mt-3"><a href="https://wa.wizard.id/fd969d" target="_blank"
                                            class="text-white">+62 <?= $wa1; ?></a></p>
                                    <p class="mb-1"><a href="https://wa.wizard.id/53eb90" target="_blank"
                                            class="text-white">+62 <?= $wa2; ?></a></p>
                                    <p class="mb-1"><a href="https://wa.wizard.id/ecde01" target="_blank"
                                            class="text-white">+62 <?= $wa3; ?></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service mt-5" data-aos="fade-up" data-aos-duration="2000">
                        <div class="row justify-content-center align-items-center">
                            <?php foreach ($service as $s) { ?>
                            <div class="col-lg col-md-6 col-sm-6 col-6 mb-3 mb-lg-0">
                                <div class="service-item ">
                                    <div class="service-box p-3">
                                        <div class="row">
                                            <div class="col-lg-5 text-center">
                                                <img src="https://admin103.polarislogistic.com/upload/service/<?= $s->image; ?>"
                                                    class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <p class="title text-white text-uppercase"><?= $s->title; ?></p>
                                        <p><?= $s->desk_pendek; ?></p>
                                        <a href="https://wa.wizard.id/fd969d" target="_blank"
                                            class="bg-blue mt-3 py-1 px-4 px-sm-2 rounded-pill">Dapatkan
                                            Penawaran</a>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->