 
<?php include './partials/social.php' ?>


<footer>
    <div class="container">
        <p>&copy; All right reserved. <a href="https://cubes.edu.rs">Cubes Scholl</a></p>
        <?php
        if (!empty($social)) {
            ?>
            <nav class="social">
                <?php
                foreach ($social as $key => $value) {
                    ?>

                    <a href="<?php echo $value['link'] ?>.php?id=<?php echo $key; ?>" class="fa <?php echo $value['icon'] ?>" target="_blank"></a>

                    <?php
                }
                ?>
            </nav>

            <?php
        }
        ?>
    </div>

</footer>


<script src="./js/jquery.js" type="text/javascript"></script>
<script src="./js/owl.carousel.js" type="text/javascript"></script>
<script src="./js/main.js" type="text/javascript"></script>

</body>
</html>