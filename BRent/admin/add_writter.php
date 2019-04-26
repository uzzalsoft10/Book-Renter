<?php
include '../Conntection/connection.php';

if (isset($_POST['submit'])) {
    $name = isset($_POST["name"]) ? $_POST["name"] : "";

    $sql = "insert into writter(name) values ('$name')";

    $result = mysqli_query($connection, $sql);

    if (!$result) {
        $_SESSION['add_writter_message'] = 'Failed to add new writter!';
    } else {
        $_SESSION['add_writter_message'] = 'Successfully add new writter!';
    }
}
?>

<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Add New Writter</h2>
        <div class="block">  
            <h2>
                <?php
                if (isset($_SESSION['add_writter_message'])) {
                    echo $_SESSION['add_writter_message'];
                    session_unset($_SESSION['add_writter_message']);
                    //session_destroy();
                }
                ?>
            </h2>
            <form action="add_writter.php" method="post">
                <table class="form">					
                    <tr>
                        <td>
                            <input name="name" type="text" placeholder="Writter Name..." class="medium" />
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
<!-- Load TinyMCE -->
<script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        setupTinyMCE();
        setDatePicker('date-picker');
        $('input[type="checkbox"]').fancybutton();
        $('input[type="radio"]').fancybutton();
    });
</script>
<!-- Load TinyMCE -->
<?php include 'inc/footer.php'; ?>