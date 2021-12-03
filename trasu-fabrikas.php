<?php include 'header.php' ?>
<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/trasu-fabrikas/1.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1><?php echo $lang['trasu-fabrikas'] ?></h1>
                    <h2 class="subheading"><?php echo $lang['trasu-fabrikas_koordinates'] ?></h2>
                    <span class="meta">
                        <p><?php echo $lang['trasu-fabrikas_adresas'] ?></p>
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
                                <img src="assets/img/trasu-fabrikas/1.jpg">
                            </li>
                            <li class="splide__slide">
                                <img src="assets/img/trasu-fabrikas/2.jpg">
                            </li>
                            <li class="splide__slide">
                                <img src="assets/img/trasu-fabrikas/3.jpg">
                            </li>
                            <li class="splide__slide">
                                <img src="assets/img/trasu-fabrikas/3.jpg">
                            </li>
                        </ul>
                    </div>
                </div>

                <div id="thumbnail-slider" class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <img src="assets/img/trasu-fabrikas/1.jpg">
                            </li>
                            <li class="splide__slide">
                                <img src="assets/img/trasu-fabrikas/2.jpg">
                            </li>
                            <li class="splide__slide">
                                <img src="assets/img/trasu-fabrikas/3.jpg">
                            </li>
                            <li class="splide__slide">
                                <img src="assets/img/trasu-fabrikas/3.jpg">
                            </li>
                        </ul>
                    </div>
                </div>
                <?php echo $lang['trasu-fabrikas_paragrafas'] ?>
                <a style="opacity: 0.3;" href="http://www.krastogidas.lt/objektai/454-trasu-fabrikas-union"><?php echo $lang['nuoroda'] ?></a>
            </div>
        </div>

    </div>
</article>
<?php include 'footer.php' ?>