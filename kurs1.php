<?php 
session_start();
include('site/header.php'); ?>
<?php
if (isset($_SESSION['loginSession'])) {
?>







    <?php
} else { ?>
        <div class="cointainer">
            <div class="row">
                <div class="col-12">
                    <h1>Brak dostępu do kursów </h1>
                    <p>Musisz się <a href="signin.php">zalogować </a> lub <a href="signup.php">zarejestrować</a> do portalu.</p>
                </div>
            </div>
        </div>

        <?php } ?>











<?php include('site/footer.php'); ?>