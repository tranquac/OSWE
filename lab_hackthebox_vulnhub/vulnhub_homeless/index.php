<?php
session_start();
error_reporting(0);


    if (@$_POST['username'] and @$_POST['password'] and @$_POST['code'])
    {

        $username = (string)$_POST['username'];
        $password = (string)$_POST['password'];
        $code     = (string)$_POST['code'];

        if (($username == $password ) or ($username == $code)  or ($password == $code)) {
            
            echo 'Your input can not be the same.';

        } else if ((md5($username) === md5($password) ) and (md5($password) === md5($code)) ) {
            $_SESSION["secret"] = '133720';
            header('Location: admin.php');  
            exit();

        } else {

            echo "<pre> Invalid password </pre>";
        }
    }


?>

<html >                                                                                                                  
  <head>                                                                                                                 
                                                                                                                  
    <meta charset="UTF-8">                                                                                               
    <title>Secure Login - Homeless</title>    
    <link href="css/bootstrap.min.css" rel="stylesheet">                                                                                 

</head>                                                                                                                
                                                                                                                         
  <body>                                                                                                                 
                                                                                                                         
    <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="index.phps">Need Hint?</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" method="post" action="">
                                                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username" autocomplete="off">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password" autocomplete="off">
                                    </div>
              
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-qrcode"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="code" value="" placeholder="secret code" autocomplete="off">                                        
                                    </div>
                      

                                
                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                        </label>
                                      </div>
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    <div class="col-sm-12 controls">
                                      <input type="submit" name="login" value="Login"  class="btn btn-success"/>
                                    </div>
                                </div>

                    
                         </form>  


                        </div>                     
                    </div>  
        </div>
    
    </div>  
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>      
  </body>                                                                                                                
</html> 