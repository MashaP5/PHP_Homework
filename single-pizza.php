
<?php

include './partials/pizzas.php';
include './partials/header.php';

?>


<main>
    <div class="container">



        <?php
        if (!isset($_GET['id'])) {
            ?>
            <h2>Error 404. Page not found</h2>
            <a href="./pizzas.php">Back to Pizzas</a>

            <?php
        } else {



            if (!array_key_exists($_GET['id'], $pizzas)) {
                ?>
                <h2>There is no such pizza</h2>
                <a href="./pizzas.php">Back to Pizzas</a>
                <?php
            } else {



                $pizza = $pizzas[$_GET['id']];
                ?>
                <section class="single-pizza">
                    <aside class="pizza-image">
                        <img src="<?php echo $pizza['image'] ?>">
                    </aside>
                    <article class="pizza-detail">
                        <h1 class="pizza-title"><?php echo $pizza['name'] ?></h1>
                        <p class="pizza-description"><?php echo $pizza['description'] ?></p>
                        <div class="price">
                            <?php foreach ($pizza['size'] as $key => $value) { ?>
                                <p><b>Size:</b><span class="size"> <?php echo $key; ?> (<?php echo $value['radius'] ?>)</span> : <b class="price"><?php echo $value['price'] ?></b> &euro;</p>
                            <?php } ?>
                        </div>
                        <p><b>Preparation time</b>: <span class="preparation-time"><?php echo $pizza['preparationTime'] ?></span> min</p>
                        <p><b>Customer rate</b>: <span class="rate"><?php echo $pizza['rating'] ?></span> <span class="fa fa-star"></span></p>
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
