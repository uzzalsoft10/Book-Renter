<?php include '../Conntection/connection.php'; ?>
﻿<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Book List</h2>
        <div class="block">  
            <table class="data display datatable" id="example">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Writter</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "select * from books";
                    $result = mysqli_query($connection, $sql);
                    while ($row = mysqli_fetch_array($result)) { ?>
                        <tr class="odd gradeX">
                            <td><?php echo $row['name']; ?></td>
                            <td><img src="../book_image/<?php echo $row['image'];?>" alt="" height="60" width="70"></td>
                            <td><?php echo $row['category']; ?></td>
                            <td><?php echo $row['writter']; ?></td>
                            <td><a href="edit_book.php?id=<?php echo $row['id'];?>">Edit</a> || <a onclick="return confirm('Are you sure to Delete!');" href="delete_book.php?id=<?php echo $row['id'];?>">Delete</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        setupLeftMenu();
        $('.datatable').dataTable();
        setSidebarHeight();
    });
</script>
<?php include 'inc/footer.php'; ?>
