<?php
session_id('mySessionID');
session_start();
?>
<?php
include './Conntection/connection.php';

if (isset($_SESSION['cusername'])) {
    $table_name = $_SESSION['cusername'];

    if (isset($_POST['submit'])) {
        $id = isset($_POST['id']) ? $_POST['id'] : "";
        $quantity = isset($_POST['quantity']) ? $_POST['quantity'] : "";

        //Query for see the table id
        $query = "select id from " . $table_name;
        //Get the result of true or false
        $result = mysqli_query($connection, $query);

        if (empty($result)) {
            //echo "<h1>" . $table . " Table does not exist</h1>";
            //Just create the new table
            $newTableSql = "create table if not exists " . $table_name . "(
	        id int(100) not null,
	        name varchar(400) not null,
	        category varchar(300) not null,
                writter varchar(300) not null,
		quantity varchar(40) not null,
		image varchar(400) not null)";

            $query = mysqli_query($connection, $newTableSql);
        }

        $sql = "select * from books where id = '$id'";
        $result = mysqli_query($connection, $sql);

        if ($row = mysqli_fetch_array($result)) {
            $id = $id;
            $name = $row['name'];
            $category = $row['category'];
            $writter = $row['writter'];
            $quantity = $quantity;
            $image = $row['image'];
        }

        $insertSql = "insert into " . $table_name . " (id,name,category,writter,quantity,image) values ('$id','$name','$category','$writter','$quantity','$image')";

        if (mysqli_query($connection, $insertSql)) {
            header("Location:rent.php");
            echo "Success";
        }
    }
} else {
    header("Location:login.php");
}
?>
<?php include './header.php'; ?>
<div class="main">
    <div class="content">
        <div class="section group">
            <div class="cont-desc span_1_of_2">	
                <?php
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $sql = "select * from books where id = '$id'";
                    $result = mysqli_query($connection, $sql);

                    if ($row = mysqli_fetch_array($result)) {
                        ?>
                        <div class="grid images_3_of_2">
                            <img src="book_image/<?php echo $row['image']; ?>" height="100" width="100" alt="" />
                        </div>
                        <div class="desc span_3_of_2">
                            <h2><?php echo $row['name']; ?></h2>
                            <h2><?php echo $row['category']; ?></h2>
                            <h2><?php echo $row['writter']; ?></h2>
                            <div class="add-cart">
                                <form action="preview.php" method="post">
                                    <input type="text" hidden="" name="id" value="<?php echo $id; ?>"/>
                                    <input type="number" class="buyfield" name="quantity" value="1"/>
                                    <input type="submit" class="buysubmit" name="submit" value="Rent"/>
                                </form>				
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php include './footer.php'; ?>