<?php
session_id('mySessionID');
session_start();
?>
<?php
if (isset($_SESSION['cusername'])) {
    session_unset($_SESSION['cusername']);
    header("Location:login.php");
}elseif (isset($_SESSION['login_message_success'])) {
    session_unset($_SESSION['login_message_success']);
} elseif (isset($_SESSION['login_message_error'])) {
    session_unset($_SESSION['login_message_error']);
}
?>
