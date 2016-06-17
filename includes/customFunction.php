<?php
function filter($data) {
    $data = trim(htmlentities(strip_tags($data)));

    if (get_magic_quotes_gpc())
        $data = stripslashes($data);

    $data = mysql_real_escape_string($data);

    return $data;
}

function get_id($table, $column, $value) {
    $con = mysql_connect("localhost", "root", "");
    if (!$con) {
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("collegenetworking", $con);

    $sql = "SELECT id FROM $table WHERE $column='$value'"; 
    $result =  mysql_query($sql); 
    $array = mysql_fetch_assoc($result); 
        return $array["id"];
    
}

?>