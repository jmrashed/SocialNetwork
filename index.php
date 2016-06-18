<?php
session_start();
include("mysql.php");
$result = mysql_query("SELECT * FROM profile ORDER BY RAND()
");
if (isset($_SESSION["logid"])) {
    header("Location: profile.php");
}
$i = 0;
while ($row = mysql_fetch_array($result)) {
    $img[$i] = $row["image"];
    $uid[$i] = $row["userid"];
    $i++;
}

include("mysql.php");
$result1 = mysql_query("SELECT * FROM college");

if (isset($_POST["submit"])) {
    /*   echo '<pre>';
      print_r($_POST);
      echo '</pre>';
     */

 
    $fname =filter($_POST['fname']);
    $lname = filter($_POST['fname']);
    $email = filter($_POST['email']);
    $pass = filter($_POST['pass']);
    $cpass = filter($_POST['cpass']);
    $gen = filter($_POST['gen']);
    $date = filter($_POST['date']);
    
    $sql = "INSERT INTO stuacc (firstname,lastname,email,password,confirmpassword,iam,dob)
VALUES ('$fname','$lname','$email','$pass','$cpass','$gen','$date')";

    if (!mysql_query($sql, $con)) {
        die('Error: ' . mysql_error());
    } else {
        $_SESSION["res"] = "User Registered Successfully...";
        header("Location: login.php");
    }
}
?>
<?php
include("header.php"); 
?>
<div class="container bodyStart">
    <div class="row"> 
        <?php include("head.php"); ?> 
    </div>

    <div class="row">
        <div class="col-md-6 col-sm-12">

            <div>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"> পরিচয় </a></li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">উপকারিতা </a></li>
                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">প্রযুক্তি </a></li>
                    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">ভাষা নির্বাচন </a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <img src="images/shidhu.jpg" class="img img-responsive img-rounded" width="100%" height="100px" >

                        <p class="text-justify">  বর্তমান সময়ে পৃথিবী আমাদের হাতের মুঠোয় এনে দিয়েছে যে প্রযুক্তি তার নাম আমরা দিয়েছি সামাজিক যোগাযোগ মাধ্যম বা সোস্যাল মিডিয়া।এটি আমাদের পুরোনো সেই দিন গুলোর কথা ভুলিয়ে দিয়েছে যে কোন এককালে আমরা চাইলেই প্রিয় জনের খোজ নিতে পারতাম না। চিঠি পাঠিয়ে প্রতিদিন ডাক পিওনের বাইসাইকেল এর ঘন্টার টীং টিং আওয়াজের অপেক্ষায় কত যে পথ চেয়ে বসে থাকা। 
                            আজ আর সেই সব দিন নেই।আর মানুষ সেই দিন গুলোকে মনে ও করে না খুব একটা।নিত্য নতুন প্রযুক্তি আমাদের সব কিছু কেই আপন করে দিয়েছে।আর আমার লেখা সেই সব সামাজিক যোগাযোগের মাধ্যম কি আর আমাদের যুবক দের মাঝে তার ক্ষতিকর কোন প্রভাব কি পড়েছে? 
                            তার আগে আসুন আমরা জেনে নেই সোস্যাল মিডিয়া কি? </p> 
                        <p class="text-justify"> 
                            আমরা যাকে ফেইসবুক নামে চিনি এটি একটি এই সোস্যাল মিডিয়া।এ রকম আরো অনেক রয়েছে যেমনঃ টুইটার,মাইস্পেস,গুগল প্লাস,ইন্সটাগ্রাম,ইউ টিউব SiDu ইত্যাদি।
                        </p>  
                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile">
                        <p class="lead">The Campus networking web site is an online community designed to make your Campus life more active and stimulating. The Campus network can help you maintain existing relationships with college students and share pictures and messages, and establish new ones by reaching out to people you've never met before, and also using this site user can share Knowledge's, education related books, question/answer, etc. </td>
                        </p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="messages">
					আমরা যাকে ফেইসবুক নামে চিনি এটি একটি এই সোস্যাল মিডিয়া।এ রকম আরো অনেক রয়েছে যেমনঃ টুইটার,মাইস্পেস,গুগল প্লাস,ইন্সটাগ্রাম,ইউ টিউব SiDu ইত্যাদি।
					</div>
                    <div role="tabpanel" class="tab-pane" id="settings">
						<div class="row">
						
						<form class="form">
							<label>ফন্ট নির্বাচন </label> 
							<input type="radio" name="font" > Solimal Lipi 
							<input type="radio" name="font" > Solimal Lipi 
							<input type="submit" class="btn btn-success" value="Change">
						</form>
						</div> 
						<hr>
                    </div>
                </div>

            </div>

        </div>
        <div class="col-md-6 col-sm-12"> 
            <h1 class="green"> রেজিস্ট্রেশন করুন <small style="color:red"> সম্পুর্ণ্য ফ্রী </small> </h1>
            <form class="form-horizontal" role="form" method="post" action="index.php">

                <div class="form-group has-success has-feedback">  
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="inputSuccess" name="fname" placeholder="নামের প্রথম অংশ ">
                        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="inputSuccess" name="lname" placeholder="নামের শেষ অংশ ">
                        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                    </div>    
                </div>
                <div class="form-group has-success has-feedback"> 
                    <div class="col-sm-12">
                        <input type="email" class="form-control" id="inputSuccess" name="email" placeholder="ইমেইল বা ফোন নাম্বার ">
                        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                    </div>    
                </div>
                <div class="form-group has-success has-feedback"> 
                    <div class="col-sm-12">
                        <input type="password" class="form-control" id="inputSuccess" name="pass" placeholder="সুরক্ষিত কোড ">
                        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                    </div>
                </div>
                <div class="form-group has-success has-feedback"> 
                    <div class="col-sm-12">
                        <input type="password" class="form-control" id="inputSuccess" name="cpass" placeholder="নিশ্চিত ভাবে সুরক্ষিত কোড">
                        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                    </div>
                </div>
                <div class="form-group has-success has-feedback"> 
                    <div class="col-sm-6">
                        <div class="col-sm-4"> 
                            <label> আমি একজন    </label>
                        </div>
                        <div class="col-sm-8"> 
                            <label class="radio-inline"><input type="radio" name="gen" id="inlineRadio1" value="Male"> পুরুষ  </label> 
                            <label class="radio-inline"><input type="radio" name="gen" id="inlineRadio1" value="Female"> মহিলা  </label> 
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" id="inputSuccess" name="date" placeholder="জন্ম তারিখ ">
                        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                    </div>

                </div>
                <div class="form-group has-success has-feedback"> 
                    <div class="col-sm-12">
                        <input type="submit" class="btn btn-success btn-lg" id="inputSuccess" name="submit" value="নিবন্ধন করুন " style="width:100%"> 
                    </div>

                </div>

            </form> 
        </div>
    </div>


</div> 
<?php include("footer.php"); ?>