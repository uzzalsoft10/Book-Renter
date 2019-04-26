<?php include '../Conntection/connection.php'; ?>
<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Writter List</h2>
        <div class="block">  
            <table class="data display datatable" id="example">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                    $sql = "select * from writter";
                    $category_result = mysqli_query($connection, $sql);
                    while ($row = mysqli_fetch_array($category_result)) {
                        $i++;
                        ?>
                    <tr class="odd gradeX">
                        <td><?php echo $i;?></td>
                        <td><?php echo $row['name'];?></td>				
                        <td>
                            <a href="edit_writter.php?id=<?php echo $row['id']; ?>">Edit</a> || 
                            <a href="delete_writter.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure to Delete!');" >Delete</a> 
                        </td>
                    </tr>
                    <?php }?>
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
