<?php include 'header.php' ?>
<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/karalienes-azuolas/1.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1><?php echo $lang['karalienes-azuolas'] ?></h1>
                    <h2 class="subheading"><?php echo $lang['karalienes-azuolas_koordinates'] ?></h2>
                    <span class="meta">
                        <p><?php echo $lang['karalienes-azuolas_adresas'] ?></p>
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Post Content-->
<article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">

                <div id="main-slider" class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <img src="assets/img/karalienes-azuolas/1.jpg">
                            </li>
                            <li class="splide__slide">
                                <img src="assets/img/karalienes-azuolas/2.jpg">
                            </li>
                            <li class="splide__slide">
                                <img src="assets/img/karalienes-azuolas/3.jpg">
                            </li>
                            <li class="splide__slide">
                                <img src="assets/img/karalienes-azuolas/4.jpg">
                            </li>
                        </ul>
                    </div>
                </div>

                <div id="thumbnail-slider" class="splide">
                    <div class="splide__track">
                    <ul class="splide__list">
                            <li class="splide__slide">
                                <img src="assets/img/karalienes-azuolas/1.jpg">
                            </li>
                            <li class="splide__slide">
                                <img src="assets/img/karalienes-azuolas/2.jpg">
                            </li>
                            <li class="splide__slide">
                                <img src="assets/img/karalienes-azuolas/3.jpg">
                            </li>
                            <li class="splide__slide">
                                <img src="assets/img/karalienes-azuolas/4.jpg">
                            </li>
                         
                        </ul>
                    </div>
                </div>
                <?php echo $lang['karalienes-azuolas_paragrafas'] ?>
                <a style="opacity: 0.3;" href="http://www.krastogidas.lt/objektai/327-karalienes-luizes-azuolas"><?php echo $lang['nuoroda'] ?></a>
            </div>
        </div>

    </div>
</article>
<?php include 'footer.php' ?>