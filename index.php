<?php session_start(); 

// if($_SESSION['user_logged_in'] == 'yes' ){
//     header("location: salespage.php");
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lipsome Auto-Part Retailer</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">

    <link rel="stylesheet" href="Assets/css/styles.css" />
    <script src="Assets/js/script.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   
</head>
<body>
    <div class="container">
        
        <nav class="navbar-navbar-expand-lg-navbar-light-bg-light">
                <a class="navbar-brand" href="#">
                        <img src="Assets/img/weedhub.png" width="30" height="30" alt="">
                      </a>
           
                 <a class="nav-item" href="#">Admin Login</a>
                    </nav>
                    <div class="heading"> <h6>Store Inventory System</h6></div>
                    <div class="main-body">
                        <div class="head1">
                        <h3>Lipsome Auto-Part Dealer</h3>
                        We sell the best vareties of auto parts you would find in Nigeria, Africa, Earth,<br> 
                        The Solar System and The entire Galaxy.<br>
                        Trade with us because we use vibranium to make our  parts stronger.
                    </div>
                        <br>
                        <br>
                        
                        
              
            <body class="text-center">
                <form name="formsuper" class="form-signin" action="login.php" method="POST">
          
            <h1 class="h3-mb-3-font-weight-normal">Staff Login</h1>

          <?php 

            if(isset($_SESSION['login_error'])){

          ?>

            <div class="alert alert-danger">
                <?php 
                    echo $_SESSION['login_error'];
                    unset($_SESSION['login_error']);
                ?>
            </div>

        <?php } ?>
               

            <label for="inputEmail" class="sr-only">Staff ID</label>
            <input name="staff_id" type="email" id="inputEmail" class="form-control" placeholder="Staff ID" required autofocus>

            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="staff_password" id="inputPassword" class="form-control" placeholder="Password" required>
            
        <button class="btn-btn-lg-btn-primary-btn-block" type="submit">Log in</button> 
           
            </form>
            </body>
            </html>


                                </div>
                </div>
            </body>
            </html>