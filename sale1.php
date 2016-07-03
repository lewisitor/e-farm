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
                    <li class="active"><a href="index.php">Home</a></li>
                    
                    <li><a href="#">Sale</a></li>
                    <li><a href="#">Purchase</a></li>
                        &nbsp;&nbsp;&nbsp;
                </ul>

            </nav>
            <br>
            <div class="page-header text-center">
                <img src="images/img2.png" alt="E-farm" class="img-rounded" height="100"   width="130" style="float:left">
                <h1 style="color:purple; font-size:4em;">
                E-farm&nbsp;<small style="color:black"><i>Improving farmers Income</i></small></h1>
            </div>
            
            <div class="page-header text-center">
                <h1 style="color:black; font-size:4em;">Sale Your Produce</h1>
            </div>





            <?php

            include 'dbconnect.php';

            session_start();
            
             $sql1="select uid from farmer where uname='".$_SESSION['uname']."'";
        $res=mysqli_query($conn,$sql1);
        $db_field=mysqli_fetch_assoc($res);
        $uid=$db_field['uid'];

     $SQL2= "select fname,lname,mob,address from farmer where uid='$uid'";

     $sam=mysqli_query($conn,$SQL2);
     if($sam)
      {
        echo"yess";
      }
      else
      {
        echo"not";
      }
     $db_field1=mysqli_fetch_assoc($sam);

    


     echo"".$db_field1['mob'];
     echo"".$db_field1['address'];

                      

            ?>

            <!--display the whole data of particular id-->

            
            
            <form class="container form-horizontal" action="sale.php" method="post">
                     <!-- <div class="form-group row">
                        <label for="inputname" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-4 col-md-4">
                          <input type="text" class="form-control" id="inputname" placeholder="First Name">
                        </div>
                        <div class="col-sm-4 col-md-4">
                          <input type="text" class="form-control" id="inputname" placeholder="Last Name">
                        </div>
                      </div>

                     <div class="form-group">
                        <label for="inputaddr" class="col-sm-2 control-label">Mob</label>
                        <div class="col-sm-8">
                         <input type="text" class="form-control" id="inputmob" placeholder="Mobile">
                        </div>
                      </div>

                     <div class="form-group">
                        <label for="inputaddr" class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-8">
                          <textarea class="form-control" rows="3" name="addr"></textarea>
                        </div>
                      </div>

                       
-->

                   <div class="form-group">
                        <label for="inputaddr" class="col-sm-2 control-label"> Name </label>
                        <div class="col-sm-8">
                           <label for="inputaddr" class="col-sm-4 control-label">

                           <?php  echo"".$db_field1['fname'];
                             echo"".$db_field1['lname'];?>
                          
                          </label>
                            
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="inputname" class="col-sm-2 control-label">Produce</label>
                          <div class="col-sm-8 col-md-4">
                              <select class="form-control" style="width:200px;" name="Producename">
                                    <option value="Wheat">Wheat</option>
                                    <option value="Rice">Rice</option>
                                    
                                   
                                    
                                    <option value="Onion">Onion</option>
                                    <option value="Tomato">Tomato</option>
            1                       <option value="Chilly">Chilly</option>
                                    
                                    <option value="Carrot">Carrot</option>
                                    
                                    <option value="Potato">Potato</option>
                                    
                                </select>
                          </div>
                      </div>

                      <div class="form-group">
                         <label for="inputusername" class="col-sm-2 control-label" >Quality </label>
                          <div class="col-sm-8 col-md-4">
                              <select class="form-control" style="width:200px;" name="Quality">
                                    <option value="Normal">Normal</option>
                                    <option value="Good">Good</option>
                                    <option value="Best">Best</option>
                                </select>
                          </div>
                      </div>

                     <div class="form-group">
                        <label for="inputquantity" class="col-sm-2 control-label">Quantity </label>
                        <div class="col-sm-4 col-md-2 input-group">
                           
                            <input type="text" class="form-control" placeholder="Quantity" name="Quantity" required="required">
                            <span class="input-group-addon">Kg</span>
                     
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="inputusername" class="col-sm-2 control-label">Market Price </label>
                        <div class="col-sm-4 col-md-2 input-group">
                            <span class="input-group-addon">frs</span>
                            <input type="text" class="form-control" placeholder="Amount" name="mp" required="required">
                            <span class="input-group-addon">.00</span>
                     
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="inputusername" class="col-sm-2 control-label">Expected Price </label>
                        <div class="col-sm-4 col-md-2 input-group">
                            <span class="input-group-addon">frs</span>
                            <input type="text" class="form-control" placeholder="Amount" name="ep" required="required">
                            <span class="input-group-addon">.00</span>
                     
                        </div>
                      </div>
                            
                      <div class="form-group row">
                            <div class="col-md-offset-2 col-md-3">
                              <button type="submit" class="btn btn-success" name="submit">Submit</button>
                              
                            </div>
                          <br><br><br>
                            <div class="col-md-offset-3 col-sm-5 col-md-8">
                                <p class="bg-danger">Cash On Delivery</p>
                            </div>
                      </div>
                    </form>
        </div>
            <footer class="text-center footer">E-farm <i>improvin Farmers Income</i> &copy; 2016, All rights reserved</footer>
    </body> </html>