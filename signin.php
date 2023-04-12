<?php include('site/header.php'); ?>
    


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
                   
                    <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="hasło" name="haslo1">
                </div>
             
             
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary mb-3" name="submit">zaloguj</button>
                    <button type="reset" class="btn btn-primary mb-3">Wyczyść</button>
                </div>
            </form>
        </div>
    </div>
</div>




















</body>
</html>