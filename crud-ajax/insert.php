<?php include('dbConnection.php') ?>
<?php 

$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);
$id = $mydata['id'];
$name = $mydata['name'];
$email = $mydata['email'];
$password = $mydata['password'];

if(!empty($name) && !empty($email) && !empty($password)){
    $sql = "INSERT INTO student(name, email, password) VALUES('$name','$email','$password')";
    if($conn->query($sql) == TRUE){
        echo "student data saved";
    }else{
        echo "unable to save";
    }
}else{
    echo "fill all fields";
}
?>
