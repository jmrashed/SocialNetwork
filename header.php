<?php 

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>সিধু সামাজিক যোগাযোগ </title>
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet"> 
        <link href="css/setting.css" rel="stylesheet">   
    </head>
    <body class="backgroundImage">
        <!-- Navigation -->
        <nav class="navbar navbar-default  topnav" role="navigation">
            <div class="container topnav">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand topnav" href="index.php"> <img src="images/logo.png" class="img img-responsive" style="height:30px" > </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?php  if(isset( $_SESSION['logid'] ) ) { ?>
                    <form class="navbar-form navbar-right" role=" " action="login.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="example@email.com" name="search">
                        </div> 
                        <input  type="submit" class="btn btn-success" name="logiin" value="খুজুন " >
                    </form>
                    
                    <ul class="nav navbar-nav navbar-left">
                        <li> 
                            <a href="profile.php"> 
                                <span class="glyphicon glyphicon-user isHover" data-toggle="tooltip"  data-placement="bottom"  title="My Profile" > 
                                </span>
                            </a>
                        </li> 
                         <li>
                            <a href="profile.php"> 
                                <span class="glyphicon glyphicon-envelope isHover" data-toggle="tooltip"  data-placement="bottom"  title="Message " > 
                                </span>
                            </a>
                        </li>
                         <li>
                            <a href="profile.php"> 
                                <span class="glyphicon glyphicon-flag isHover" data-toggle="tooltip"  data-placement="bottom"  title="Message " > 
                                </span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="profile.php"> 
                                <span class="glyphicon glyphicon-cog isHover" data-toggle="tooltip"  data-placement="bottom"  title="Setting" > 
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="logout.php"> 
                                <span class="glyphicon glyphicon-off isHover" data-toggle="tooltip"  data-placement="bottom"  title="Logout" > 
                                </span>
                            </a>
                        </li>
                        
                       


                    </ul>
                    <?php } if(! isset( $_SESSION['logid'] ) ) { ?>
                    <form class="navbar-form navbar-right" role=" " action="login.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="example@email.com" name="username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="pass">
                        </div>
                        <input  type="submit" class="btn btn-success" name="logiin" value="প্রবেশ করুন " >
                    </form>
                    <?php } ?>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
