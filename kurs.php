<?php
session_start();
include('site/header.php');
?>
<?php
if (isset($_SESSION['loginSession'])) {
?>
<div class="cointainer">
    <div class="row">
    <div class="col-12 alert alert-info">
                <h3>Jesteś zalogowany <?php echo $_SESSION['loginSession']; ?>. Masz dostęp do kursów.</h3>
</div>
    </div>
</div>
    <div class="container">
        <div class="row">
            <div class="col text-center box-margin">
                
                </div>
            </div>
            <div class="row">
                <div class="col-md box-margin">
                    
                    <div class="card">
                        <img src="https://picsum.photos/300/200?random=3" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Kurs PHP</h5>
                        <p class="card-text">Poznaj podstawy programowania PHP i ćwicz umiejętności w praktyce!</p>
                        <a href="tutorialPHP.php" class="btn btn-primary">Rozpocznij kurs</a>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                </div>
                <div class="col-md box-margin">
                    
                    <div class="card">
                        <img src="https://picsum.photos/300/200?random=1" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Kursy</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md box-margin">
                    
                    <div class="card">
                        <img src="https://picsum.photos/300/200?random=2" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Kursy</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <?php } else { ?>
        <div class="cointainer">
            <div class="row">
            <div class="col-12 alert alert-dark foot p-5">
                <h1 class="p-3">Brak dostępu do kursów </h1>
                    <p>Musisz się <a href="signin.php">zalogować </a> lub <a href="signup.php">zarejestrować</a> do portalu.</p>
                </div>
            </div>
        </div>

        <?php } ?>
        <?php include('site/footer.php'); ?>