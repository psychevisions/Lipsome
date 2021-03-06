<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sales Page</title> <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<style>
    .container{border: solid 1px black; background-color: #ECECEC}
     .nav-item{margin-left: 80%; color: red}
    .navbar-navbar-expand-lg-navbar-light-bg-light{background-color: #FFF2F2;
    border: solid 1px black; margin-top: 2%}
    .navbar-brand{margin-left: 9px}
    .heading{margin-top: 2%;}
    .main-body{width: 80%;border: solid 1px black; margin-left: 10%;
    margin-top: 3%; background-color: white; margin-bottom: 7%}
    .form-signin{width: 50%;margin-left: 24%;
    margin-bottom: 10%;}
    .form-control{margin-bottom: 4%}
    .btn-btn-lg-btn-primary-btn-block{width: 40%; color: green;  }
    .btn-btn-lg-btn-primary-btn-block2{width: 40%; color: red; margin-top: 5%}
</style>
 <script>
              function doinventory(boxa,boxb,boxc,boxd){

                
                var available= parseInt(boxa); //boxa,boxb, boxd,boxc
                var units= parseInt(boxb);

                var newAvailable= available - units;

                boxa = newAvailable; 

                var  total = units * parseInt(boxc);
                boxd.value = total  

                }

                function deleteRow(rowtodelete,rowdeletedid,rowtoupdate1='',rowtoupdate2=''){

                    document.getElementById(rowtodelete).style = "display:none";

                    var row1number = parseInt(document.getElementById(rowdeletedid).innerHTML);

                    if(rowtoupdate1 != ''){
                        document.getElementById(rowtoupdate1).innerHTML = row1number;
                    }

                     if(rowtoupdate2 != ''){
                        document.getElementById(rowtoupdate2).innerHTML = ++row1number;
                    }

                }

</script>
<body>
    <div class="container">
            <nav class="navbar-navbar-expand-lg-navbar-light-bg-light">
                    <a class="navbar-brand" href="#">
                            <img src="C:\projects\Lipsome\Assets\img\weedhub.png" width="30" height="30" alt="">
                          </a>
                          <a class="nav-item" href="logout.php">Log Out</a>
                        </nav>
                        <div class="heading"> <h6>Store Inventory System</h6></div>
                        <br>
                        <div class="main-body">
                          <form name="tableH">
                                <table  class="table table-striped">
                                        <thead>
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Vehicle Type</th>
                                            <th scope="col">Available Quantity</th>
                                            <th scope="col">Units</th>
                                            <th scope="col">Price per Unit $</th>
                                            <th scope="col">Total Price $</th>
                                            <th scope="col"></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                         
                                          <tr id="row1">
                                            <th id="row1number" scope="row">1</th>
                                            <td>Carburator</td>
                                            <td>Honda</td>
                                            <td> <input  readonly name="boxa" value="15" size= "1" type="text" placeholder="0" ></td>
                                            <td><input onkeyup ="doinventory(tableH.boxa.value,this.value,tableH.boxc.value,tableH.boxd)" name="boxb" size="1" type="text" placeholder="0"></td>
                                            <td> <input readonly name="boxc" size="1" type="text" value="300"></td>
                                            <td><input name="boxd" size="1" type="text" placeholder="0"></td>
                                            <td><i class="fas fa-times" style="cursor: pointer" onclick="deleteRow('row1','row1number','row2number','row3number')"></i></td>
                                          </tr>
                                          <tr id="row2">
                                            <th id="row2number" scope="row">2</th>
                                            <td>Brake Pad</td>
                                            <td>Benz</td>
                                            <td><input  readonly name="boxe" value="10" size= "1" type="text" placeholder="0" ></td>
                                            <td><input onkeyup ="doinventory(tableH.boxe.value,this.value,tableH.boxg.value,tableH.boxh)" name="boxf" size="1" type="text" placeholder="0"></td>
                                            <td><input readonly name="boxg" size="1" type="text" value="190"></td>
                                            <td><input name="boxh" size="1" type="text" placeholder="0"></td>
                                            <td><i style="cursor: pointer" onclick="deleteRow('row2','row2number','row3number')" class="fas fa-times"></i></td>
                                          </tr>
                                          <tr id="row3">
                                            <th id="row3number" scope="row">3</th>
                                            <td>Side Mirror</td>
                                            <td>BMW</td>
                                            <td><input  readonly name="boxi" value="22" size= "1" type="text" placeholder="0" ></td>
                                            <td><input onkeyup ="doinventory(tableH.boxi.value,this.value,tableH.boxk.value,tableH.boxl)" name="boxj" size="1" type="text" placeholder="0"></td>
                                            <td><input readonly name="boxk" size="1" type="text" value="250"></td>
                                            <td><input name="boxl" size="1" type="text" placeholder="0"></td>
                                            <td><i onclick="deleteRow('row3','row3number')" style="cursor: pointer" class="fas fa-times"></i></td>
                                          </tr>
                                          <tr>
                                                <th scope="row"><i class="far fa-plus-square"></i></th>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </form>
                                      <br>
                                      
                                      <form class="form-signin">
                                            
                                            <h1 class="h3-mb-3-font-weight-normal">Customer Info</h1>
                                            <label for="inputEmail" class="sr-only">Name</label>
                                            <input type="email" id="inputEmail" class="form-control" placeholder="Name" required autofocus>
                                            <label for="inputPhone" class="sr-only">Phone Number</label>
                                            <input type="text" id="inputPhone" class="form-control" placeholder="Phone Number" required>
                                            <label for="inputAddress" class="sr-only">Address</label>
                                            <input type="text" id="inputAddress" class="form-control" placeholder="Address" required>
                                            
                                            <button class="btn-btn-lg-btn-primary-btn-block" type="submit">Place Order</button>
                                            <button class="btn-btn-lg-btn-primary-btn-block2" type="reset">Cancel</button>
                                           
                                            </form>
                                       
                        </div>
    </div>
    
</body>
</html>