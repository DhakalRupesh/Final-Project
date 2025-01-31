<?php 
include __DIR__ .'../php/auth/auth_login.php';
include __DIR__ . '../include/header.php'; 
session_start();
?>
    <body>
        <div class="container d-flex justify-content-center align-items-center" style="min-height:100vh">
            <form class="border shadow p-3 rounded" style="width:450px;" action="" method="post">
            <h1 class="text-center p-3">LOGIN</h1>               
                <?php if(isset($errors)) { 
                    foreach($errors as $error){ ?>                     
                    <div class="alert alert-danger" role="alert">
                            <?=$error ?>
                    </div>                    
                <?php } } ?> 
                <div class="mb-3">
                    <label for="email" class="form-label">User Name or Email</label>
                    <input type="text" class="form-control" name="email" id="email">                    
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                
                <button type="submit" name = "submit" class="btn btn-primary">Submit</button>
                <p>Not registered yet? <a href="signup.php"> Signup</a></p>
            </form>
        </div>
    </body>
<?php include __DIR__ . '../include/footer.php'; ?>