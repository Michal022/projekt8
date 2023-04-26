<?php include('site/header.php'); ?>
    
<?php 
session_start();
if(isset($_SESSION['loginSession'])){
    if(isset($_POST['logout'])) {
    unset ($_SESSION['loginSession']);
    header('location: signin.php');
    } else {
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>konta użytkowników portalu</h1>
        </div>
        <div class="col-12">
         <?php $conn = mysqli_connect('localhost', 'webPLA', '', 'portal');
            if(!$conn){
            echo "błąd". mysqli_connect_error();
            }else{
                $sqlSelect = 'SELECT IdUser, imie, nazwisko, login, mail, dataDodania FROM users';
                $sqlSelectResult = mysqli_query($conn, $sqlSelect);
                $users= mysqli_fetch_all($sqlSelectResult, MYSQLI_ASSOC);
                
                if(isset($_POST['remove'])){
                    $IdUser=$_POST['IdUser'];
                    $sqlDelete="DELETE FROM users WHERE IdUser=$IdUser";
                    mysqli_query($conn, $sqlDelete);
                    header('location: signin.php');
                }  
                
                ?>
                <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <?php
    $i=1;
    foreach($users as $user){
    echo "<tr>";
    echo "<th scope=\"row\">". $i."</th>";
    echo "<td>".$user['imie']."</td>";
    echo "<td>".$user['nazwisko']."/td>";
    echo "<td>".$user['login']."</td>";
    echo "<td>".$user['mail']."</td>";
    echo "<td>".$user['dataDodania']."</td>";
    echo "<td>";
    echo "<form action=\"signin.php\" method=\"post\">";
    echo "<input type=\"hidden\" name=\"IdUser\" value=\"" . $user['IdUser']. "\" >";
    echo "<input class=\"btn btn-warning btn-sm\"type=\"submit\" name=\"remove\" value=\"usuń\">";
    echo "</form>";
    echo "</td>";
    echo "</tr>";
    $i++;
    }
    ?>
  </tbody>
</table><?php
                
                mysqli_close($conn);
            }
?>
        </div>
    </div>
</div>
<div class="container">
<div class="row">
    <div class="col-12">
        <h1>Wylogowywanie</h1>
</div>
</div>
</div>
<div class="container">
<div class="row">
    <div class="col-12">
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post"> 
            <button type="submit" class="btn btn-primary" name='logout'>Log Out</button>
             </form>
        </div>
    </div>
</div>
<?php 
}
} else {
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
            mysqli_close($conn);
            header('location: signin.php');
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
<?php include('site/footer.php'); ?>