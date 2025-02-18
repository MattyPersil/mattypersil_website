
<!-- Contact -->
<section id="contact" class="five">
    <div class="container">

        <header>
            <h2>Contact</h2>
        </header>

        <p>
            Please fill out this form if you wish to contact me, <br>
            If you are curious on how this form works and where this is sent,
            you can checkout it's code on my git repository for this site ;)
        </p>

        <?php
        session_start();
        $token = uniqid();
        $_SESSION['token'] = $token;

        ?>
        <form method="post" action="/actions/send-form.php">
            <div class="row">
                <div class="col-6 col-12-mobile">
                    <input type="text" name="name" placeholder="Name" maxlength="20" required/></div>
                <div class="col-6 col-12-mobile"><input type="email" name="email" placeholder="Email" required/></div>
                <div class="col-12">
                    <textarea name="message" placeholder="Message" maxlength="750" required></textarea>
                </div>
                <div class="col-12">
                    <input type="submit" value="Send Message" />
                </div>
                <input type="hidden" name="token" value="<?php echo $token?>">
            </div>
        </form>

    </div>
</section>
