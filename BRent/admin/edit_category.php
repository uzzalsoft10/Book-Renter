<?php
session_id('mySessionID');
session_start();
?>

<?php
include '../Conntection/connection.php';

if (isset($_POST['submit'])) {
    
    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $id = isset($_POST["id"]) ? $_POST["id"] : "";
    $sql = "update category set name = '$name' where id = '$id'";

    if (mysqli_query($connection, $sql)) {
        header("Location:catlist.php");
    }
}
?>
﻿<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Edit Category</h2>
        <div class="block copyblock"> 
            <form method="post" action="edit_category.php">
                <table class="form">	
                    <tr>
                     <?php
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            $sql = "select * from category where id = '$id'";
                            $result = mysqli_query($connection, $sql);
                            if ($row = mysqli_fetch_array($result)) {
                                ?>
                                <td>
                                    <input name="id" hidden="" value="<?php echo $id; ?>"/>
                                    <input name="name" value="<?php
                                    echo $row['name'];
                                }
                                ?>" type="text" placeholder="Book Name..." class="medium" />
                            </td>
                        <?php } ?>
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