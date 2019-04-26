<?php
session_id('mySessionID');
session_start();
?>

<?php
include '../Conntection/connection.php';

if (isset($_POST['submit'])) {
    $name = isset($_POST["name"]) ? $_POST["name"] : "";

    $sql = "insert into category(name) values ('$name')";

    $result = mysqli_query($connection, $sql);

    if (!$result) {
        $_SESSION['category_add_message'] = 'Failed to add new category!';
    } else {
        $_SESSION['category_add_message'] = 'Successfully add new category!';
    }
}
?>
﻿<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Add New Category</h2>
        <div class="block copyblock"> 
            <h2>
                <?php
                if (isset($_SESSION['category_add_message'])) {
                    echo $_SESSION['category_add_message'];
                    session_unset($_SESSION['category_add_message']);
                    //session_destroy();
                }
                ?>
            </h2>
            <form method="post" action="catadd.php">
                <table class="form">					
                    <tr>
                        <td>
                            <input name="name" type="text" placeholder="Enter Book Category..." class="medium" />
                        </td>
                    </tr>
                    <tr> 
                        <td>
                            <input type="submit" name="submit" Value="Save" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
<?php include 'inc/footer.php'; ?>