<?php
include_once('db.php');
if (isset($_POST['status'])) {
    $id = $_POST['taskId'];

    $status = $_POST['status'];
    if ($status === '0') {
        $status = '1';
    } else {
        $status = '0';
    }
}
$sql = "update tasks set status=$status where id = ".$id;
mysqli_query($conn, $sql);
header('location: index.php?updated=true');
?>
