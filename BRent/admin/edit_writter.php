<?php
include '../Conntection/connection.php';

if (isset($_POST['submit'])) {
    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $id = isset($_POST["id"]) ? $_POST["id"] : "";
    $sql = "update writter set name = '$name' where id = '$id'";

    if(mysqli_query($connection, $sql)){
        header("Location:writter_list.php");
    }
}
?>

<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Edit Writter</h2>
        <div class="block">  
            <form action="edit_writter.php" method="post">
                <table class="form">					
                    <tr>
                       <?php
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            $sql = "select * from writter where id = '$id'";
                            $result = mysqli_query($connection, $sql);
                            if ($row = mysqli_fetch_array($result)) {
                                ?>
                                <td>
                                    <input name="id" hidden="" value="<?php echo $id; ?>"/>
                                    <input name="name" value="<?php
                                    echo $row['name'];
                                }
                                ?>" type="text" placeholder="Writter Name..." class="medium" />
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