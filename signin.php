<?php include('site/header.php'); ?>
    
<?php 
session_start();
if (isset($_SESSION['loginSession'])){
    echo "jest sesja";
    unset($_SESSION['loginSession']);
}else{
if (isset($_POST['submit'])){
 $login=htmlspecialchars($_POST['login']);
 $pass =htmlspecialchars($_POST['password']);
//  echo $login. " " .$pass."<br>";
 $conn = mysqli_connect('localhost', 'webPLA', '', 'portal');
 if(!$conn){
    echo "błąd". mysqli_connect_error();
 }else{
    $sqlSelect = 'SELECT login, haslo FROM users';
    $result = mysqli_query($conn, $sqlSelect);
    $users= mysqli_fetch_all($result, MYSQLI_ASSOC);
    $flag=true;
    foreach ($users as $user){
        // echo $user['login']. " - " . $user['haslo']."<br>";
        
        if($user['login']==$login && $user['haslo']==$pass){
            echo "prawidłowe";
            $flag= false;
            $_SESSION['loginSession']='start';
            header('location: login.php');
            // break;
            
         } //else {
        //     echo "błąd";
        // }
    }
   
    
 } if ($flag) echo "błąd";
}

?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <!-- <form action="signup.php" method="post"> -->
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <h2>zaloguj</h2>
               
                <div class="mb-3">
                  
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="login" name="login">
                </div>
               
                <div class="mb-3">
                   
                    <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="hasło" name="password">
                </div>
             
             
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary mb-3" name="submit">zaloguj</button>
                    <button type="cancel" class="btn btn-primary mb-3">Wyczyść</button>
                </div>
            </form>
        </div>
    </div>
</div>



















<?php } ?>
</body>
</html>