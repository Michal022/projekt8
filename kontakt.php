<?php include('site/header.php'); ?>
<?php
$kod = array();
if(isset($_POST['submit']) && $_POST['numer'] == $_POST['codesave'] ){
    
echo $imie=$_POST['imie'];
echo $_POST['mejl'];
echo $_POST['temat'];
echo $_POST['tresc'];
echo $_POST['numer'];
echo $_POST['codesave'];
$wiadomosc = "wiadomość od (nazwa): <strong>";
$wiadomosc .= $_POST['imie'];
$wiadomosc .= "</strong>\n";
$wiadomosc .= "mail nadawcy : <strong>";
$wiadomosc .= $_POST['mejl'];
$wiadomosc .= "</strong>\n";
$wiadomosc .= "tresc wiadomości: ";
$wiadomosc .= $_POST['tresc'];
$charSet = "UTF-8";
$userName = "adres@gmail.com";
$port=587;
$mailSubject = $_POST['tresc'];

$header = "Content-type: text/html; charset=" . $charSet . " \r\n";
$header .= "From: " . $_POST['imie'] . " <" . $_POST['imie'] . "> \r\n";
$header .= "MIME-Version: 1.0 \r\n";
$header .= "Content-Transfer-Encoding: 8bit \r\n";
$header .= "Date: " . date("r (T)") . " \r\n";
$header .= iconv_mime_encode("Subject", $mailSubject);
        // Send mail
        $success = mail($userName, $mailSubject, $wiadomosc, $header);

        if (!$success) {
            $komunikat = "Twoja wiadmość nie została wysłana.";
            print "$komunikat";
        } else {
            $komunikat = "Dziekujemy za wysłaną wiadomość! Odezwiemy się w ciągu 24 godzin.";
            print "$komunikat";
        } 
    ?>
     <h1 class="napis">Mail został wysłany</h1>
<?php
    } else {
        ?>



<div class="container">
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="row justify-content-start">
        <div class="col-xl-2 col-md-4">
            <label for="exampleFormControlInput1" class="form-label">name</label>

        </div>
        <div class="col-xl-4 col-md-8 ">
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="jan kowalski" name="imie">
        </div>
    </div>
    <div class="row justify-content-start">
        <div class="col-xl-2 col-md-4">
            <label for="exampleFormControlInput1" class="form-label">email</label>

        </div>
        <div class="col-xl-4 col-md-8 ">
            <input type="mail" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="mejl">
        </div>
    </div>
    <div class="row justify-content-start">
        <div class="col-xl-2 col-md-4">
            <label for="exampleFormControlInput1" class="form-label">name</label>

        </div>
        <div class="col-xl-4 col-md-8 ">
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="temat wiadomosci" name="temat">
        </div>
    </div>
    <div class="row justify-content-start">
        <div class="col-xl-2 col-md-4">
            <label for="exampleFormControlTextarea1" class="form-label" >Example textarea</label>
        </div>
        <div class="col-xl-4 col-md-8">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="tresc"></textarea>
        </div>
        <div class="row justify-content alert-succes">
        <div class="col-xl-2 col-md-4 alert alert-success text-center">
        <?php
            $tmp='';
            $kod = array();
            for($i=0; $i <4; $i++){
                $kod[]= rand(0,9);
                echo $kod[$i];
                $tmp .= $kod[$i];
            }
            //print_r($kod);
           
            ?>
            <input type="hidden" value="<?php echo $tmp; ?>"name="codesave" id="">
        </div>
        <div class="col-xl-4 col-md-8 ">
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="wpisz kod" name="numer">
        </div>
    </div>
    </div>
        <div class="col-xl-2 col-md-4">
        <button type="submit" class="btn btn-primary" name="submit">wyslij</button>
        
        
        <button type="reset" class="btn btn-primary">reset</button>
</div>
        </form>
</div>
<?php
    } ?>
<?php include('site/footer.php'); ?>