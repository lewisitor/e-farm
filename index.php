<!Doctype html>
<html>
    <head>
        <title>E-farm</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery-2.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body> 
        
        <div class="container-fluid">
            <br>
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <span class="glyphicon glyphicon-home" style="font-size:40px">
                        </span><b style="color:white">E-farm</b></a>
                        &nbsp;&nbsp; 
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li<li><a href="#"></a></li>
                    <li><a href="#"></a></li><li><a href="#"></a></li>
                    <li><a href="#"></a></li><li><a href="#"></a></li>
                     <li><a href="#"></a></li><li><a href="#"></a></li><li><a href="#"></a></li>
                    <li><a href="#"></a></li><li><a href="#"></a></li>
                     <li><a href="#"></a></li><li><a href="#"></a></li>
                   <li><a href="#"></a></li> <li><a href="#"></a></li> <li><a href="#"></a></li> <li><a href="#"></a></li>
                   
                        &nbsp;&nbsp;&nbsp;

                 <form class="navbar-form navbar navbar-right"  method="post" action="login.php">
                        <select class="form-control" style="width:100px;" name="role">
                            <option value="1">Farmer</option>
                            <option value="2">Vendor</option>
                            <option value="3">Admin</option>
                        </select>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                        <div style="float:right">
                            <div class="row">
                                <div class="form-group">
                                  <input type="text" class="form-control" name="uname" placeholder="Username">
                                   <input type="password" class="form-control" name="pass" placeholder="Password">
                                </div>
                                &nbsp;&nbsp;
                                <button type="submit" class="btn btn-info" name="signin">Sign In</button>
                                <a href="Register.html" class="btn btn-info">Sign Up</a>
                            </div>
                            <a href="forgotpass.html"><u>Forgot Password?</u></a>
                        </div> 
                    </form>
                </ul>

            </nav>
            <br>
            <div class="page-header text-center">
                <img src="#" alt="E-farm logo" class="img-rounded" height="100" width="130" style="float:left">
                <h1 style="color:purple; font-size:4em;">
                E-farm&nbsp;<small style="color:black"><i>Improving farmers Income</i></small></h1>
            </div>
            <div class="row">
			<!--
                <div class="col-xs-3 col-sm-3 col-md-2 col-lg-2">
                    <p style="font-size: 20px;"><br><span class="glyphicon glyphicon-leaf" style="font-size: 40px;"></span>The Produce You Can Sell Us ~</p><br>   
                    <a href="#grain" class="btn btn-info" style="width:100%">Grains</a><br><br>
                    <a href="#veg" class="btn btn-info" style="width:100%">Vegetables</a><br><br>
                </div>
				-->

                <div class="col-xs-9 col-sm-9 col-md-10 col-lg-10   ">
                      <img src="images/farm.jpg" alt="Image" height="100%" width="121%">   
                </div> 
            </div>

               <div class="jumbotron" id="grain">
                        <h1>Grains</h1>
                        <p>Your Expectation, Our Responsibility !!!</p>
                </div>
            
           <div>
                
                
        </div>

    <div class="jumbotron" id="veg">
                        <h1>Vegetables</h1>
                        <p>Your Expectation, Our Responsibility !!!</p>
                </div>
            
        <div>
                
                
        </div>
        </div>
        <footer class="text-center footer">E-farm <i>Improving Farmers Income</i> &copy; 2016, All rights reserved</footer>
    </body>  </html>