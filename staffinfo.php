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
                        <img src="C:\projects\Lipsome\Assets\img\weedhub.png" width="30" height="30" alt="">
                      </a>
                      <a class="nav-item2" href="#">Add Products</a>
                 <a class="nav-item" href="#">Log Out</a>
                    </nav>
                    <div class="heading"> <h6>Store Inventory System</h6></div>
                    <div class="main-body">
                        <br>
                       
                            <div class= "sub-name"><strong>Staff Information</strong></div>
                            <hr>
                               <br>
                               <form action="addstaff.php" method="post">
                                   <div class="form">
                                       <div class="form-group">
                                           <label for="Name">Name</label>
                                           <input type="text" class="form-control" name="staff_name" id="InputProdName" aria-describedby="emailHelp" required >
                                          
                                         </div>
                                         <div class="form-group">
                                           <label for="staff_id">Staff ID</label>
                                           <input type="email" name="staff_id" class="form-control" placeholder="email@company.com" required>
                                         </div>
                                         <div class="form-group">
                                               <label for="staff_phone">Phone Number </label>
                                               <input name="staff_phone"  type="text" class="form-control" id="InputStaffID" aria-describedby="emailHelp"required >
                                              
                                             </div>
                                             <div class="form-group">
                                               <label for="password">Password</label>
                                               <input type="password" class="form-control" name="staff_password" required >
                                             </div>
                                             
                                         <button type="submit" class="btn btn-sm btn-primary">Add Staff</button>
                                   </div>
                                 </form>
                               
                          </div>


               
                </div>
            </body>
            </html>