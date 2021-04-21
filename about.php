<?php
include './partials/header.php';
include './partials/aboutSections.php';
?>


<main>
    <div class="container">


         <?php
        if (!empty($aboutSections)) {
            foreach ($aboutSections as $key => $value) {
                ?>
                <section class="about-section" id="<?php echo $key; ?>">
                 <aside class="about-image">
                        <img src="<?php echo $value['image'] ?>" alt="">
                    </aside>
                    <article class="about-info">
                        <h2 class="section-title"><?php echo $value['title'] ?></h2>
                        <div class="about-info-data">
                            <p>
                                <?php echo $value['fullText'] ?>
                            </p>                           
                        </div>
                    </article>
                </section>
                <?php
            }
        }
        ?>





    </div>
</main>


<?php
include './partials/footer.php';
