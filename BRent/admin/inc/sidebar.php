<?php include '../Conntection/connection.php'; ?>
<div class="grid_2">
    <div class="box sidemenu">
        <div class="block" id="section-menu">
            <ul class="section menu">

                <li><a class="menuitem">Book Category</a>
                    <ul class="submenu">
                        <li><a href="catadd.php">Add</a> </li>
                        <li><a href="catlist.php">List</a> </li>
                    </ul>
                </li>

                <li><a class="menuitem">Writter</a>
                    <ul class="submenu">
                        <li><a href="add_writter.php">Add</a> </li>
                        <li><a href="writter_list.php">List</a> </li>
                    </ul>
                </li>
                <li><a class="menuitem">Books</a>
                    <ul class="submenu">
                        <li><a href="book_add.php">Add</a> </li>
                        <li><a href="book_list.php">List</a> </li>
                    </ul>
                </li>
                <li><a class="menuitem">Customer Books</a>
                    <ul class="submenu">
                        <?php
                        $sql = "select * from customer_register";
                        $result = mysqli_query($connection, $sql);

                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <li><a href="customer_book_list.php?name=<?php echo $row['cusername']; ?>"><?php echo $row['cusername']; ?></a> </li>
                        <?php } ?>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>