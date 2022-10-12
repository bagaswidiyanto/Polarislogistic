<!-- About Start -->
<div class="container-xxl about" id="about">
    <img src="<?= base_url(); ?>assets/imagenew/bg-circle.png" class="img-fluid bg" alt="">
    <div class="container py-5 px-lg-5">
        <div class="about-us text-center" data-aos="fade-up" data-aos-duration="2000">
            <h1 class="mb-5">About <span class="txt-blue">Us</span></h1>
            <?= $website->description; ?>
        </div>
        <div class="visi-misi pt-5">
            <div class="row position-relative">
                <div class="col-lg-10 col-md-12">
                    <div class="row" data-aos="fade-up" data-aos-duration="2000">
                        <div class="col-lg-2 col-md-2 col-sm-12">
                            <h2><?= $visi->nama; ?></h2>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <p><?= $visi->desk_1; ?></p>
                        </div>
                    </div>
                    <div class="row mt-5" data-aos="fade-up" data-aos-duration="2000">
                        <div class="col-lg-2 col-md-2 col-sm-12">
                            <h2><?= $misi->nama; ?></h2>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <div class="d-flex">
                                <img src="<?= base_url(); ?>assets/imagenew/misi-1.svg" class="img-fluid" alt="">
                                <p class="ms-5"><?= $misi->desk_1; ?></p>
                            </div>
                            <div class="d-flex mt-4">
                                <img src="<?= base_url(); ?>assets/imagenew/misi-2.svg" class="img-fluid" alt="">
                                <p class="ms-5"><?= $misi->desk_2; ?></p>
                            </div>
                            <div class="d-flex mt-4">
                                <img src="<?= base_url(); ?>assets/imagenew/misi-3.svg" class="img-fluid" alt="">
                                <p class="ms-5"><?= $misi->desk_3; ?></p>
                            </div>
                            <div class="d-flex mt-4">
                                <img src="<?= base_url(); ?>assets/imagenew/misi-4.svg" class="img-fluid" alt="">
                                <p class="ms-5"><?= $misi->desk_4; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<div class="container-xxl why-us px-0" id="why-us">
    <img src="<?= base_url(); ?>assets/imagenew/bg-why-us.png" class="img-fluid bg" alt="">
    <div class="container py-5 px-lg-5">
        <div class="row text-white">
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="fitur">
                    <div class="d-flex align-items-center mt-4" data-aos="fade-up" data-aos-duration="2000">
                        <img src="<?= base_url(); ?>assets/imagenew/cepat.svg" class="img-fluid" alt="">
                        <p class="ms-3 mb-0 fw-bold">Pelayanan yang Cepat</p>
                    </div>
                    <div class="d-flex align-items-center mt-4" data-aos="fade-up" data-aos-duration="2000">
                        <img src="<?= base_url(); ?>assets/imagenew/tepat.svg" class="img-fluid" alt="">
                        <p class="ms-3 mb-0 fw-bold">Tepat harga</p>
                    </div>
                    <div class="d-flex align-items-center mt-4" data-aos="fade-up" data-aos-duration="2000">
                        <img src="<?= base_url(); ?>assets/imagenew/tuntas.svg" class="img-fluid" alt="">
                        <p class="ms-3 mb-0 fw-bold">Tuntas mengatasi pengiriman</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-8 col-sm-12">
                <div class="content" data-aos="fade-up" data-aos-duration="2000">
                    <h1 class="text-white">WHY US</h1>
                    <?= $website->why_us; ?>
                    <a href="https://wa.wizard.id/fd969d" target="_blank"
                        class="btn btn-light mt-lg-5 py-1 px-4 px-sm-4 rounded-pill me-3 fw-bolder">Dapatkan
                        Penawaran</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-xxl our-services px-0" id="services">
    <div class="container pb-5 px-lg-5">
        <div class="text-heading text-center" data-aos="fade-up" data-aos-duration="2000">
            <h1>OUR <span class="txt-blue">SERVICES</span></h1>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="slider-container mt-5" style="height: 100%;" data-aos="fade-up" data-aos-duration="2000">
                    <div class="swiper-container services-slider" style="height: 100%;">
                        <div class="swiper-wrapper">
                            <?php foreach ($service as $s) { ?>
                            <div class="swiper-slide">
                                <div class="service-box p-3 p-sm-4 text-white">
                                    <div class="row">
                                        <div class="col-lg-6 text-center">
                                            <img src="https://admin103.polarislogistic.com/upload/service/<?= $s->image; ?>"
                                                class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <p class="title mt-4 text-uppercase fw-bold"><?= $s->title; ?></p>
                                    <p><?= $s->desk_panjang; ?></p>
                                    <div class="btn-klik text-center">
                                        <a href="https://wa.wizard.id/fd969d" target="_blank"
                                            class="border border-white text-white  mt-3 py-1 py-sm-2 px-4 px-md-3 rounded-pill">Dapatkan
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
    </div>
</div>

<div class="container-xxl promo px-0">
    <img src="<?= base_url(); ?>assets/imagenew/bg-promo.png" class="img-fluid bg" alt="">
    <div class="container py-5 px-lg-5">
        <div class="row">
            <div class="col-lg-6">

            </div>
            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="2000">
                <h3 class="text-white">Dapatkan promo pengiriman
                    menarik hari ini</h3>
                <a href="https://wa.wizard.id/fd969d" target="_blank"
                    class="btn btn-light mt-lg-3 py-1 px-4 px-sm-4 rounded-pill me-3 fw-bolder">Dapatkan
                    Penawaran</a>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl gallery px-0" id="gallery">
    <div class="container py-5 px-lg-5">
        <div class="text-heading text-center" data-aos="fade-up" data-aos-duration="2000">
            <h1>OUR <span class="txt-blue">GALLERIES</span></h1>
        </div>
        <div class="row">
            <?php foreach ($gallery as $g) { ?>
            <div class="col-lg-3 col-md-3 col-sm-4 col-6 mt-4">
                <div class="gallery-box">
                    <div class="gallery-img">
                        <img src="https://admin103.polarislogistic.com/upload/gallery/<?= $g->image; ?>"
                            class="img-fluid" alt="">
                    </div>
                    <div class="gallery-content text-center text-white">
                        <p class="mb-0"><?= $g->name; ?> </p>
                        <small class="fw-bold"><?= date('d F Y', strtotime($g->createDate)); ?></small>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

<div class="container-xxl clients px-0" id="client">
    <div class="row me-0">
        <div class="col-lg-3 col-md-4 col-sm-12 pe">
            <div class="client-side">
                <img src="<?= base_url(); ?>assets/imagenew/bg-client.png" class="img-fluid bg" alt="">
                <p data-aos="fade-right" data-aos-duration="2000">Berikut ini klien-klien terbaik yang telah bekerjasama
                    dengan perusahaan kami</p>
            </div>
        </div>
        <div class="col-lg-9 col-md-8 col-sm-12">
            <div class="text-heading text-center" data-aos="fade-up" data-aos-duration="2000">
                <h1>OUR <span class="txt-blue">CLIENTS</span></h1>
            </div>
            <div class="container  px-lg-5" data-aos="fade-up" data-aos-duration="2000">
                <div class="slider-container px-lg-5 mt-lg-5">
                    <div class="swiper-container client-slider">
                        <div class="swiper-wrapper">
                            <?php foreach ($client as $c) { ?>
                            <div class="swiper-slide d-flex justify-content-center align-items-center">
                                <div class="client-img d-flex justify-content-center align-items-center">
                                    <img src="https://admin103.polarislogistic.com/upload/client/<?= $c->image; ?>"
                                        title="<?= $c->nama; ?>" class="img-fluid" alt="">
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>