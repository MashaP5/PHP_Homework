<?php
include './partials/pizzas.php';
include './partials/header.php';

?>

<main>
    <div class="container">
 <?php
        if (!empty($pizzas)) {
            ?>
            <section class="pizzas">
                <?php
                foreach ($pizzas as $key => $value) {
                    ?>
                    <article class="pizza-item">
                        <a href="single-pizza.php?id=<?php echo $key; ?>">
                            <img src="<?php echo $value['image'] ?>">
                        </a>
                        <span class="favorite fa <?php
                        if ($value['favorite'] === true) {
                            echo 'fa-heart';
                        } else {
                            echo 'fa-heart-o';
                        }
                        ?>"></span>
                        <div class="pizza-item-info">
                            <h3 class="pizza-item-title"><?php echo $value['name'] ?></h3>
                            <div class="pizza-item-info-detail">
                                <p>
                                    <span class="icon fa fa-clock-o"></span>
                                    <span><?php echo $value['preparationTime'] ?>min</span>
                                </p>
                                <p>
                                    <span class="icon fa fa-star"></span>
                                    <span><?php echo $value['rating'] ?></span>
                                </p>
                            </div>
                        </div>
                    </article>
                    <?php
                }
                ?>
            </section>
            <?php
        }
        ?> 
    </div>
</main>


<?php
include './partials/footer.php';
