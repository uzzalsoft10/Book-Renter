<?php
session_id('mySessionID');
session_start();
?>

<?php
include '../Conntection/connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "delete from writter where id = '$id'";

    if (mysqli_query($connection, $sql)) {
        header("Location:writter_list.php");
    }
}

