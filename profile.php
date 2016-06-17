<?php
session_start();
/*
  echo '<pre>';
  print_r($_SESSION);
  echo '</pre>';
 * 
 */



if (!isset($_SESSION['logid'])) {
    header('Location:login.php');
}
if (isset($_SESSION['logid'])) {
    $_SESSION['logid'] = $_SESSION['logid'];
    $_SESSION['id'] = $_SESSION['id'];
}



include("profilesql.php");
include("friends.php");
include("header.php");
?>
<?php
$result = mysql_query("SELECT * FROM profile ORDER BY RAND()");
$i = 0;
while ($row = mysql_fetch_array($result)) {
    if ($row["userid"] != $_SESSION["stuid"]) {
        $img[$i] = $row["image"];
        $uid[$i] = $row["userid"];
        $i++;
    }
}
$result = mysql_query("SELECT * FROM stuacc where id");

$strec = mysql_query("SELECT * FROM stuacc WHERE email='$_SESSION[logid]' ");

while ($row = mysql_fetch_array($strec)) {
    $_SESSION["stuid"] = $row["id"];
}

$colrec = mysql_query("SELECT * FROM profile WHERE userid='$_SESSION[stuid]' ");

while ($row = mysql_fetch_array($colrec)) {
    $cname = $row["coluni"];
}

$acrec1 = mysql_query("SELECT * FROM stuacc WHERE id='$uid[0]' ");

while ($row = mysql_fetch_array($acrec1)) {
    $stid1 = $row["id"];
    $name1 = $row["firstname"];
    $gen1 = $row["iam"];
}

$acrec2 = mysql_query("SELECT * FROM stuacc WHERE id='$uid[1]' ");

while ($row = mysql_fetch_array($acrec2)) {
    $stid2 = $row["id"];
    $name2 = $row["firstname"];
    $gen2 = $row["iam"];
}

$acrec3 = mysql_query("SELECT * FROM stuacc WHERE id='$uid[2]' ");

while ($row = mysql_fetch_array($acrec3)) {
    $stid3 = $row["id"];
    $name3 = $row["firstname"];
    $gen3 = $row["iam"];
}

$acrec4 = mysql_query("SELECT * FROM stuacc WHERE id='$uid[3]' ");

while ($row = mysql_fetch_array($acrec4)) {
    $stid4 = $row["id"];
    $name4 = $row["firstname"];
    $gen4 = $row["iam"];
}
?>
<div class="container bodyStart">
    <div class="row">
        <?php include("head.php"); ?>
        <?php // include("menu.php"); ?>
    </div>
    <div class="row">
        <div class="col-md-2 col-sm-2">
            <?php include("profileleft.php"); ?>
        </div>
        <div class="col-md-7 col-sm-7">
            Welcome, <?php echo $_SESSION["logid"]; ?><br>
            Number of visitors:
            <?php
            if (isset($_SESSION['views']))
                $_SESSION['views'] = $_SESSION['views'] + 1;
            else
                $_SESSION['views'] = 1;
            echo $_SESSION['views'];
            ?>

            <br>
            College Name : <b><?php echo $cname; ?></b>
            <hr>
            <table class="table">
                <tr>
                    <td colspan="4" align="left">Request Friends</td>
                </tr>
                <tr>
                    <td><a href="friendsprofile.php?fid=<?php echo $stid1; ?>"><img
                                src="<?php echo $img[1]; ?>" width="100" height="150" border="0"
                                alt=""> <?php echo $img[1]; ?> <br/>
                            <?php echo $name1; ?><br/>

                        </a><br></td>
                    <td><a href="friendsprofile.php?fid=<?php echo $stid2; ?>""><img
                                src="<?php echo $img[1]; ?>" width="100" height="150" border="0"
                                alt=""><br/>
                                <?php echo $name2; ?>
                        </a><br></td>
                    <td><a href="friendsprofile.php?fid=<?php echo $stid3; ?>""><img
                                src="<?php echo $img[2]; ?>" width="100" height="150" border="0"
                                alt=""><br/>
                                <?php echo $name3; ?>
                        </a><br></td>
                    <td><a href="friendsprofile.php?fid=<?php echo $stid4; ?>""><img
                                src="<?php echo $img[3]; ?>" width="100" height="150" border="0"
                                alt=""><br/>
                                <?php echo $name4; ?>
                        </a><br></td>

                </tr>
            </table>
            <table class="table table-responsive">
                <tr>
                    <th colspan="2" scope="col"><br/> &nbsp; <?php echo $fname . " " . $lname; ?></th>
                </tr>
                <tr>
                    <td colspan="2">College Name : <b><?php echo $cname; ?></b></td>
                </tr>
                <tr>
                    <td width="51%">City
                        :<?php
                        if (isset($_GET["fmes"]))
                            echo $_GET["fmes"];
                        else
                            echo 'None';
                        ?></td>
                    <td width="49%"><?php echo $city; ?></td>
                </tr>
                <tr>
                    <td >State:</td>
                    <td><?php echo $state; ?></td>
                </tr>
                <tr>
                    <td >Pincode:</td>
                    <td><?php echo $pincode; ?></td>
                </tr>
                <tr>
                    <td >Country:</td>
                    <td><?php echo $country; ?></td>
                </tr>
            </table>

        </div>
        <div class="col-md-3 col-sm-3">
            <ul class="leftmenu">
                <?php
                for ($i = 1; $i < 10; $i++) {
                    ?>
                    <div class="col-sm-12">
                        <li class="leftmenu">
                            <a href="" class="leftmenu"><img src="images/1.png" style="width:10px; height:10px "> Muhib Ull <?= $i ?> </a>
                        </li>
                    </div>

                    <?php
                }
                ?> 
            </ul>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>


