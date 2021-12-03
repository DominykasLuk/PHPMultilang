<?php include 'header.php' ?>
<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/paprastoji-lugne/1.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1><?php echo $lang['paprastoji-lugne'] ?></h1>
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
                                <img src="assets/img/paprastoji-lugne/1.jpg">
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="thumbnail-slider" class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <img src="assets/img/paprastoji-lugne/1.jpg">
                            </li>
                        </ul>
                    </div>
                </div>
                <?php echo $lang['tulzys_paragrafas'] ?>
                <a style="opacity: 0.3;" href="https://www.google.com/url?sa=D&q=https://lt.wikipedia.org/wiki/Paprastoji_l%25C5%25ABgn%25C4%2597&ust=1638611760000000&usg=AOvVaw3r0qt0uBfQgD_d22XPmKE8&hl=en-GB&source=gmail"><?php echo $lang['nuoroda'] ?></a>
            </div>
        </div>
    </div>
</article>
<?php include 'footer.php' ?>