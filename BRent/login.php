<?php
session_id('mySessionID');
session_start();
?>

<?php
include './Conntection/connection.php';
if (isset($_SESSION['register_message_error'])) {
    session_unset($_SESSION['register_message_error']);
} elseif (isset($_SESSION['register_message_success'])) {
    session_unset($_SESSION['register_message_success']);
}

if ($connection) {
    if (isset($_POST['register'])) {
        $cname = isset($_POST['cname']) ? $_POST['cname'] : "";
        $caddress = isset($_POST['caddress']) ? $_POST['caddress'] : "";
        $ccity = isset($_POST['ccity']) ? $_POST['ccity'] : "";
        $cemail = isset($_POST['cemail']) ? $_POST['cemail'] : "";
        $czipcode = isset($_POST['czipcode']) ? $_POST['czipcode'] : "";
        $cphone = isset($_POST['cphone']) ? $_POST['cphone'] : "";
        $cusername = isset($_POST['cusername']) ? $_POST['cusername'] : "";
        $cpassword = isset($_POST['cpassword']) ? $_POST['cpassword'] : "";

        //echo $cname."<br>".$caddress."<br>".$ccity."<br>".$cemail."<br>".$czipcode."<br>".$cphone."<br>".$cusername."<br>".$cpassword;

        $checkSql = "select * from customer_register where cemail = '$cemail' or cusername = '$cusername'";
        $checkSqlResult = mysqli_query($connection, $checkSql);
        if ($checkSqlResultRow = mysqli_fetch_array($checkSqlResult)) {
//            echo $checkSqlResultRow['cemail']."<br>".$checkSqlResultRow['cusername'];
            if ($cemail == $checkSqlResultRow['cemail'] || $cusername == $checkSqlResultRow['cusername']) {
                $_SESSION['register_message_error'] = "Username or Email Already Exist!!";
            }
        } else {
            $insertSql = "insert into customer_register(cname,caddress,ccity,cemail,czipcode,cphone,cusername,cpassword) values "
                    . "('$cname','$caddress','$ccity','$cemail','$czipcode','$cphone','$cusername','$cpassword')";
            $insertSqlResult = mysqli_query($connection, $insertSql);

            if ($insertSqlResult) {
                $_SESSION['register_message_success'] = "Successfully Registered!!";
            } else {
                $_SESSION['register_message_error'] = "Registration Failed!!";
            }
        }
    } else if (isset($_POST['login'])) {
        $cusername = isset($_POST['cusername']) ? $_POST['cusername'] : "";
        $cpassword = isset($_POST['cpassword']) ? $_POST['cpassword'] : "";

        $loginSql = "select * from customer_register where cusername = '$cusername' and cpassword = '$cpassword'";
        $loginSqlResult = mysqli_query($connection, $loginSql);
        if ($loginSqlResultRow = mysqli_fetch_array($loginSqlResult)) {
            if ($cusername == $loginSqlResultRow['cusername'] && $cpassword == $loginSqlResultRow['cpassword']) {
                $_SESSION['cusername'] = $cusername;
                $_SESSION['login_message_success'] = "Successfully Login!";
                //echo "Success";
            } else {
                $_SESSION['login_message_error'] = "Login Failed!";
                //echo "Failed";
            }
        } else {
            $_SESSION['login_message_error'] = "Login Failed!";
            //echo "Failed";
        }
    }
}
?>
<?php include './header.php'; ?>

<div class="main">
    <div class="content">
        <div class="login_panel">
            <h3>Existing Customers</h3>
            <p>Sign in with the form below.</p>
            <?php
            if (isset($_SESSION['login_message_success'])) {
                ?>
                <h2 style="color: green"><?php echo $_SESSION['login_message_success']; ?></h2>
            <?php } elseif (isset($_SESSION['login_message_error'])) {
                ?>
                <h2 style="color: red"><?php echo $_SESSION['login_message_error']; ?></h2>
            <?php } ?>
            <form action="login.php" method="post" id="member">
                <input name="cusername" type="text" value="Username" class="field" onfocus="this.value = '';" onblur="if (this.value == '') {
                            this.value = 'Username';
                        }">
                <input name="cpassword" type="password" value="Password" class="field" onfocus="this.value = '';" onblur="if (this.value == '') {
                            this.value = 'Password';
                        }">
                <p class="note">If you forgot your passoword just enter your email and click <a href="#">here</a></p>
                <div class="buttons"><div><button name="login" type="submit" class="grey">Sign In</button></div></div>
            </form>

        </div>
        <div class="register_account">
            <h3>Register New Account</h3>
            <form method="post" action="login.php">
                <?php
                if (isset($_SESSION['register_message_success'])) {
                    ?>
                    <h2 style="color: green"><?php echo $_SESSION['register_message_success']; ?></h2>
                <?php } elseif (isset($_SESSION['register_message_error'])) {
                    ?>
                    <h2 style="color: red"><?php echo $_SESSION['register_message_error']; ?></h2>
                <?php } ?>
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <input name="cname" placeholder="Name" type="text" required="">
                            </td>
                            <td>
                                <input name="caddress" placeholder="Address" type="text" required="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input name="ccity" placeholder="City" type="text" required="">
                            </td>
                            <td>
                                <input name="cemail" class="field" placeholder="Email" type="text" required="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input name="czipcode" placeholder="Zip-Code" type="text" required="">
                            </td>
                            <td>
                                <input name="cphone" placeholder="Phone" type="text" required="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input name="cusername" placeholder="Username" type="text" required="">
                            </td>
                            <td>
                                <input name="cpassword" class="field" placeholder="Password" type="text" required="">
                            </td>
                        </tr>

                    </tbody></table> 
                <div class="search"><div><button type="submit" name="register" class="grey">Create Account</button></div></div>
                <p class="terms">By clicking 'Create Account' you agree to the <a href="#">Terms &amp; Conditions</a>.</p>
                <div class="clear"></div>
            </form>
        </div>  	
        <div class="clear"></div>
    </div>
</div>
</div>
<?php include './footer.php'; ?>
