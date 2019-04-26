<?php
session_id('mySessionID');
session_start();
?>
<?php include '../Conntection/connection.php'; ?>
<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Product List</h2>
        <div class="block">  
            <table class="data display datatable" id="example">
                <thead>
                    <tr>
                        <th>Book Name</th>
                        <th>Category</th>
                        <th>Writer</th>
                        <th>Quantity</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "select * from " . $_GET['name'];
                    $result = mysqli_query($connection, $sql);
                    if (!empty($result)) {
                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <tr class="odd gradeX">
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['category']; ?></td>
                                <td><?php echo $row['writter']; ?></td>
                                <td><?php echo $row['quantity']; ?></td>
                                <td><img src="../book_image/<?php echo $row['image']; ?>" alt="" height="60" width="70"></td>
                            </tr>
                        <?php }
                    }
                    ?>
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
