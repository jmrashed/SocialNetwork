<?php
 
include("profilesql.php");
$i=1;
$result = mysql_query("SELECT * FROM addfriends where meid='$_SESSION[logid]' ");
while ($row = mysql_fetch_array($result)) {
    $uid[$i] = $row["friendid"]; 
    $i++;
}

$result1 = mysql_query("SELECT * FROM addfriends WHERE friendid='uid[$i]'"); 
if($result1 === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}
$i=1;
while($row = mysql_fetch_array($result1))
{
 $img1[$i] = $row['image'];
 $i++;
}
 
?>