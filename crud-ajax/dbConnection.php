<?php 

$db_host = "loaclhost";
$db_user = "root";
$db_password = "";
$db_name = "jqajax";

$conn = new mysqli($db_host,$db_user,$db_password,$db_name);

if(!$conn->connect_error){
    die("error");
}
else{
    echo "<h1>This is working</h1>";
}

?>