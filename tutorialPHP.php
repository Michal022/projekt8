<?php
session_start();
include('site/header.php');
?>
<?php
if (isset($_SESSION['loginSession'])) {
?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Jesteś zalogowany <?php echo $_SESSION['loginSession']; ?>. Masz dostęp do kursów.</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col text-center box-margin">
                <h1>Kurs PHP.</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md box-margin">
                <div class="card">
                    <img src="https://picsum.photos/900/200?random=3" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

<?php
} else {
?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Materiał dostępny dla zalogowanych. Nie masz dostępu do kursu.</h3>
            </div>
        </div>
    </div>

<?php
}
?>