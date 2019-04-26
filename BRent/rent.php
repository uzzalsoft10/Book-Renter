<?php
session_id('mySessionID');
session_start();
?>
<?php include './Conntection/connection.php'; ?>
<?php include './header.php'; ?>

<div class="main">
    <div class="content">
        <div class="cartoption">		
            <div class="cartpage">
                <h2>Your Cart</h2>
                <table class="tblone">
                    <tr>
                        <th width="20%">Book Name</th>
                        <th width="10%">Image</th>
                        <th width="15%">Category</th>
                        <th width="25%">Writer</th>
                        <th width="20%">Quantity</th>
                        <th width="10%">Action</th>
                    </tr>
                    <?php
                    if (isset($_SESSION['cusername'])) {
                        $table_name = $_SESSION['cusername'];
                        $sql = "select * from " . $table_name;
                        $result = mysqli_query($connection, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                            ?>

                            <tr>
                                <td><?php echo $row['name'];?></td>
                                <td><img src="book_image/<?php echo $row['image'];?>" alt=""/></td>
                                <td><?php echo $row['category'];?></td>
                                <td><?php echo $row['writter'];?></td>
                                <td><?php echo $row['quantity'];?></td>
                                <td><a onclick="return confirm('Are you sure to Delete!');" href="delete_user_product.php?id=<?php echo $row['id'];?>">X</a></td>
                            </tr>

                        <?php
                        }
                    }
                    ?>
                </table>
            </div>
            <div class="shopping">
                <div class="shopleft">
                    <a href="index.php"> <img src="images/shop.png" alt="" /></a>
                </div>
                <div class="shopright">
                    <a href="#"> <img src="images/check.png" alt="" /></a>
                </div>
            </div>
        </div>  	
        <div class="clear"></div>
    </div>
</div>
</div>
<?php include './footer.php'; ?>