<?php
include_once("mysql.php");
include_once 'includes/customFunction.php';

if (isset($_SESSION["logid"])) {
    header("Location: profile.php");
}
if (isset($_POST["logiin"])) {

    /*   echo '<pre>';
      print_r($_POST);
      echo '</pre>';
     * 
     */

    $logres = mysql_query("SELECT * FROM stuacc WHERE email='$_POST[username]' AND password='$_POST[pass]' ");

    if (mysql_num_rows($logres) == 1) {
        $id = get_id('stuacc', 'email', $_POST["username"]);
        session_start();
        $_SESSION["logid"] = $_POST["username"];
        $_SESSION["id"] = $id;
        header("Location: profile.php");
    } else {
        $_SESSION["logfa"] = "Invalid username or password";
    }
}
include("header.php");
?>

<div class="container bodyStart"> 
    <?php
    if (isset($_SESSION["res"])) {
        echo "<br>";
        echo $_SESSION["res"];
    } elseif (isset($_SESSION["logfa"])) {
        echo "<br>";
        echo $_SESSION["logfa"];
    } else {
        echo "<br>";
        echo "Please Enter User Name And Password";
    }
    ?>     

    <form method="post" action="login.php">

        <div class="omb_login">
            <h3 class="omb_authTitle">প্রবেশ করুন  অথবা    <a href="#">নিবন্ধন করুন </a></h3>
            <div class="row omb_row-sm-offset-3 omb_socialButtons">
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="btn btn-lg btn-block omb_btn-facebook">
                        <i class="fa fa-facebook visible-xs"></i>
                        <span class="hidden-xs">ফেসবুক </span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="btn btn-lg btn-block omb_btn-twitter">
                        <i class="fa fa-twitter visible-xs"></i>
                        <span class="hidden-xs">টুইটার </span>
                    </a>
                </div>	
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="btn btn-lg btn-block omb_btn-google">
                        <i class="fa fa-google-plus visible-xs"></i>
                        <span class="hidden-xs">গুগুল প্লাস</span>
                    </a>
                </div>	
            </div>

            <div class="row omb_row-sm-offset-3 omb_loginOr">
                <div class="col-xs-12 col-sm-6">
                    <hr class="omb_hrOr">
                    <span class="omb_spanOr">or</span>
                </div>
            </div>

            <div class="row omb_row-sm-offset-3">
                <div class="col-xs-12 col-sm-6">	
                    <form class="omb_loginForm" action="" autocomplete="off" method="POST">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" name="username" placeholder="আপনার ইমেইল প্রবেশ করুন ">
                        </div>
                        <span class="help-block"></span>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input  type="password" class="form-control" name="pass" placeholder="সুরক্ষিত কোড প্রবেশ করুন">
                        </div>
                        <span class="help-block">ঙ্কোডটি ভুল হয়েছে </span>

                        <input name="logiin"  id="logiin" class="btn btn-lg btn-success btn-block" type="submit" value="প্রবেশ করুন "> 
                    </form>
                </div>
            </div>
            <div class="row omb_row-sm-offset-3">
                <div class="col-xs-12 col-sm-3">
                    <label class="checkbox">
                        <input type="checkbox" value="remember-me">ব্রাউজার আমাকে মনে রাখুক 
                    </label>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <p class="omb_forgotPwd">
                        <a href="#">সুরক্ষিত কোডটি ভুলে গেছেন ?</a>
                    </p>
                </div>
            </div>	    


    </form>
</div>
</div>
<?php include("footer.php"); ?>