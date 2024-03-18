<?php 
include __DIR__ .'../php/auth/auth_login.php'; 
include __DIR__ .'../include/header.php'; 
session_start();

?>
    <body>
        <div class="container d-flex justify-content-center align-items-center" style="min-height:100vh">
            <?php if(isset($errors)) { 
                foreach($errors as $error){ ?>                     
                <div class="alert alert-danger" role="alert">
                        <?=$error ?>
                </div>                    
            <?php } } ?> 
            <h1>hello </h1>
            <a href="logout.php">Logout</a>
        </div>
    </body>
<?php include __DIR__ . '../include/footer.php'; ?>