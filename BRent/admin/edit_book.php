<?php
session_id('mySessionID');
session_start();
?>


﻿<?php
include '../Conntection/connection.php';
if ($connection) {
    if (isset($_POST['submit'])) {
//        echo "<pre>";
//        print_r($_POST);
        $id = isset($_POST["id"]) ? $_POST["id"] : "";
        $name = isset($_POST["name"]) ? $_POST["name"] : "";
        $category = isset($_POST["category"]) ? $_POST["category"] : "";
        $writter = isset($_POST["writter"]) ? $_POST["writter"] : "";

        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        move_uploaded_file($image_tmp, "../book_image/$image");

        $sql = "update books set name = '$name', category = '$category', writter='$writter', image = '$image' where id = '$id'";

        if (mysqli_query($connection, $sql)) {
            header("Location:book_list.php");
        }
    }
}
?>
<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Edit Book</h2>
        <div class="block">  
            </h2>
            <form name="edit_book" action="edit_book.php" method="post" enctype="multipart/form-data">
                <table class="form">

                    <?php
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $etSql = "select * from books where id = '$id'";
                        $etResult = mysqli_query($connection, $etSql);

                        if ($etRow = mysqli_fetch_array($etResult)) {
                            ?>

                            <tr>
                                <td>
                                    <label>Name</label>
                                </td>
                                <td>
                                    <input hidden="" value="<?php echo $etRow['id']; ?>" name="id" type="text"/>
                                    <input value="<?php echo $etRow['name']; ?>" type="text" name="name" placeholder="Book Name..." class="medium" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Category</label>
                                </td>
                                <td>
                                    <select id="select" name="category">
                                        <?php
                                        $sql_category = "select * from category";
                                        $result_category = mysqli_query($connection, $sql_category);
                                        while ($row_category = mysqli_fetch_array($result_category)) {
                                            ?>
                                            <option value="<?php echo $row_category['name']; ?>"><?php echo $row_category['name']; ?></option>
                                        <?php } ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Writter</label>
                                </td>
                                <td>
                                    <select id="select" name="writter">
                                        <?php
                                        $sql_writter = "select * from writter";
                                        $result_writter = mysqli_query($connection, $sql_writter);
                                        while ($row_writter = mysqli_fetch_array($result_writter)) {
                                            ?>
                                            <option value="<?php echo $row_writter['name']; ?>"><?php echo $row_writter['name']; ?></option>
                                        <?php } ?>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label>Upload Image</label>
                                </td>
                                <td>
                                    <input type="file" name="image"/>
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td>
                                    <input type="submit" name="submit" Value="Save" />
                                </td>
                            </tr>
                            <script type="text/javascript">
                                document.forms['edit_book'].elements['category'].value = '<?php echo $etRow['category']; ?>';
                                document.forms['edit_book'].elements['writter'].value = '<?php echo $etRow['writter']; ?>';
                                document.forms['edit_book'].elements['image'].value = '<?php echo $etRow['image']; ?>';
                            </script>
                            <?php
                        }
                    }
                    ?>
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


