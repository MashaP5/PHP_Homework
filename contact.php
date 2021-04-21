<?php
include './partials/header.php';
include './partials/contactMap.php';

if (isset($_POST['send']) && $_POST['send'] === 'contact') {

    $formData = $_POST;

    $errorMessage = array();


    if (!isset($formData['name'])) {
        $errorMessage['required'][] = 'Name was not sent';
    } else {
        $name = trim($formData['name']);
        if (empty($name)) {
            $errorMessage['name'][] = 'Name is a requiered field';
        }
    }

    if (!isset($formData['email'])) {
        $errorMessage['required'][] = 'Email was not sent';
    } else {
        $email = trim($formData['email']);
        if (empty($email)) {
            $errorMessage['email'][] = 'Email is a requiered';
        }
        if (strpos($email, '@') < 2) {
            $errorMessage['email'][] = 'Email is not valid';
        }
    }

    if (!isset($formData['message'])) {
        $errorMessage['required'][] = 'Message was not sent';
    } else {
        $message = $formData['message'];
        if (empty($message)) {
            $errorMessage['message'][] = 'Message is a requiered field';
        }
    }
    if (!isset($formData['send'])) {
        $errorMessage['required'][] = 'Contact was not sent';
    }
}
?>

<main>
    <div class="container">
        <section class="contact-section">
            <aside class="form-wrapper">
                <form method="POST" action="" class="contact-form">
                    <div class="form-group">
                        <label for='name'>Your Name*</label>
                        <input type="text" name="name" id='name' value="" class="form-control" />
                        <div class="error-wrapper">
                            <?php
                            if (isset($errorMessage)) {
                                if (array_key_exists('name', $errorMessage)) {
                                    ?>
                                    <div style="background-color: red; padding:10px">
                                        <?php
                                        echo implode('<br>', $errorMessage['name']) . '<br>';
                                        ?>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email*</label>
                        <input type="email" name="email" id="email" value="" class="form-control" />
                        <div class="error-wrapper">
                            <?php
                            if (isset($errorMessage)) {
                                if (array_key_exists('email', $errorMessage)) {
                                    ?>
                                    <div style="background-color: red; padding:10px">
                                        <?php
                                        echo implode('<br>', $errorMessage['email']) . '<br>';
                                        ?>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message*</label>
                        <textarea name="message" id='message' value='' class="form-control" rows="7"></textarea>
                        <div class="error-wrapper">
                            <?php
                            if (isset($errorMessage)) {
                                if (array_key_exists('message', $errorMessage)) {
                                    ?>
                                    <div style="background-color: red; padding:10px">
                                        <?php
                                        echo implode('<br>', $errorMessage['message']) . '<br>';
                                        ?>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="send" value="contact" class="btn">Send Message</button>
                    </div>
                </form>

                <?php
                if (isset($errorMessage)) {
                    if (empty($errorMessage)) {
                        ?>
                        <div class="success-wrapper">
                            <div style="background-color: green; padding:10px">
                                <h2>Your message was successfully sent. Thank you</h2>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>

            </aside>
            <div class="contact-map">
                <iframe src="<?php echo $contactMap; ?>"></iframe>
            </div>
        </section>
    </div>
</main>

<?php
include './partials/footer.php';
