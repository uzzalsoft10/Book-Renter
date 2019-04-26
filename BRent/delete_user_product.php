<?php
session_id('mySessionID');
session_start();
?>

<?php
include './Conntection/connection.php';
if (isset($_SESSION['cusername'])) {
    $table_name = $_SESSION['cusername'];
    
    //echo $table_name;

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        //echo $id;
        $sql = "delete from " . $table_name . " where id = '$id'";

        if (mysqli_query($connection, $sql)) {
            header("Location:rent.php");
        }
    }
}
?>
    