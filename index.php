<?php
include './partials/header.php';
include './partials/slider.php';
include './partials/homepageAbout.php';
?>

<main>
    <div class="container"><!-- container start -->
        <?php
        if (!empty($slider)) {
            ?>
            <section class="hero-section"><!-- hero section start -->
                <div class="hero-slider owl-carousel">
                    <!--Item start-->
                    <?php
                    foreach ($slider as $key => $value) {
                        ?>
                        <div class="hero-item">
                            <img src="<?php echo $value['image'] ?>" alt="">
                            <div class="caption">
                                <h2><?php echo $value['title'] ?></h2>
                                <p><?php echo $value['sliderDesc'] ?></p>
                                <a class="btn" href="about.php?id=<?php echo $value['link'] ?> ;">Read More</a>
                            </div>
                        </div><!--Item end-->
                        <?php
                    }
                    ?>
                </div><!--.hero-slider end-->
            </section><!--.hero-section end-->
            <?php
        }
        ?>

     
            
        <?php
        if (!empty($homepageAbout)) {
            ?>
            <section class="about-section">
                 <aside class="about-image">
                        <img src="<?php echo $homepageAbout['image'] ?>" alt="">
                    </aside>
                    <article class="about-info">
                        <h2><?php echo $homepageAbout['title'] ?></h2>
                        <p><?php echo $homepageAbout['aboutDesc'] ?></p>
                        <a class="btn" href="about.php?id=<?php echo $value['link'] ?> ;">Read More</a>
                    </article>    
            </section>
            <?php
        }
        ?>
 </div><!-- container end -->
</main>




<?php
include './partials/footer.php';
