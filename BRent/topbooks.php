<?php
session_id('mySessionID');
session_start();
?>
<?php include './Conntection/connection.php'; ?>
<?php include './header.php'; ?>

<div class="main">
    <div class="content">
        <div class="content_top">
            <div class="heading">
                <h3>All Books</h3>
            </div>
            <div class="clear"></div>
        </div>
        <div class="section group">
            <?php
            $sSql = "select * from books limit 4 offset 0";
            $sResult = mysqli_query($connection, $sSql);
            while ($sRow = mysqli_fetch_array($sResult)) {
                ?>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="preview.php?id=<?php echo $sRow['id']; ?>"><img src="book_image/<?php echo $sRow['image']; ?>" alt="" /></a>
                    <h2><?php echo $sRow['category']; ?></h2>
                    <h2><?php echo $sRow['writter']; ?></h2>
                    <div class="button"><span><a href="preview.php?id=<?php echo $sRow['id']; ?>" class="details">Rent</a></span></div>
                </div>
            <?php } ?>
        </div>
        <div class="section group">
            <?php
            $sSql = "select * from books limit 4 offset 4";
            $sResult = mysqli_query($connection, $sSql);
            while ($sRow = mysqli_fetch_array($sResult)) {
                ?>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="preview.php?id=<?php echo $sRow['id']; ?>"><img src="book_image/<?php echo $sRow['image']; ?>" alt="" /></a>
                    <h2><?php echo $sRow['category']; ?></h2>
                    <h2><?php echo $sRow['writter']; ?></h2>
                    <div class="button"><span><a href="preview.php?id=<?php echo $sRow['id']; ?>" class="details">Rent</a></span></div>
                </div>
            <?php } ?>
        </div>
        <div class="section group">
            <?php
            $sSql = "select * from books limit 4 offset 8";
            $sResult = mysqli_query($connection, $sSql);
            while ($sRow = mysqli_fetch_array($sResult)) {
                ?>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="preview.php?id=<?php echo $sRow['id']; ?>"><img src="book_image/<?php echo $sRow['image']; ?>" alt="" /></a>
                    <h2><?php echo $sRow['category']; ?></h2>
                    <h2><?php echo $sRow['writter']; ?></h2>
                    <div class="button"><span><a href="preview.php?id=<?php echo $sRow['id']; ?>" class="details">Rent</a></span></div>
                </div>
            <?php } ?>
        </div>
        <div class="section group">
            <?php
            $sSql = "select * from books limit 4 offset 12";
            $sResult = mysqli_query($connection, $sSql);
            while ($sRow = mysqli_fetch_array($sResult)) {
                ?>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="preview.php?id=<?php echo $sRow['id']; ?>"><img src="book_image/<?php echo $sRow['image']; ?>" alt="" /></a>
                    <h2><?php echo $sRow['category']; ?></h2>
                    <h2><?php echo $sRow['writter']; ?></h2>
                    <div class="button"><span><a href="preview.php?id=<?php echo $sRow['id']; ?>" class="details">Rent</a></span></div>
                </div>
            <?php } ?>
        </div>
        <div class="section group">
            <?php
            $sSql = "select * from books limit 4 offset 16";
            $sResult = mysqli_query($connection, $sSql);
            while ($sRow = mysqli_fetch_array($sResult)) {
                ?>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="preview.php?id=<?php echo $sRow['id']; ?>"><img src="book_image/<?php echo $sRow['image']; ?>" alt="" /></a>
                    <h2><?php echo $sRow['category']; ?></h2>
                    <h2><?php echo $sRow['writter']; ?></h2>
                    <div class="button"><span><a href="preview.php?id=<?php echo $sRow['id']; ?>" class="details">Rent</a></span></div>
                </div>
            <?php } ?>
        </div>
        <div class="section group">
            <?php
            $sSql = "select * from books limit 4 offset 20";
            $sResult = mysqli_query($connection, $sSql);
            while ($sRow = mysqli_fetch_array($sResult)) {
                ?>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="preview.php?id=<?php echo $sRow['id']; ?>"><img src="book_image/<?php echo $sRow['image']; ?>" alt="" /></a>
                    <h2><?php echo $sRow['category']; ?></h2>
                    <h2><?php echo $sRow['writter']; ?></h2>
                    <div class="button"><span><a href="preview.php?id=<?php echo $sRow['id']; ?>" class="details">Rent</a></span></div>
                </div>
            <?php } ?>
        </div>
        <div class="section group">
            <?php
            $sSql = "select * from books limit 4 offset 24";
            $sResult = mysqli_query($connection, $sSql);
            while ($sRow = mysqli_fetch_array($sResult)) {
                ?>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="preview.php?id=<?php echo $sRow['id']; ?>"><img src="book_image/<?php echo $sRow['image']; ?>" alt="" /></a>
                    <h2><?php echo $sRow['category']; ?></h2>
                    <h2><?php echo $sRow['writter']; ?></h2>
                    <div class="button"><span><a href="preview.php?id=<?php echo $sRow['id']; ?>" class="details">Rent</a></span></div>
                </div>
            <?php } ?>
        </div>
        <div class="section group">
            <?php
            $sSql = "select * from books limit 4 offset 28";
            $sResult = mysqli_query($connection, $sSql);
            while ($sRow = mysqli_fetch_array($sResult)) {
                ?>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="preview.php?id=<?php echo $sRow['id']; ?>"><img src="book_image/<?php echo $sRow['image']; ?>" alt="" /></a>
                    <h2><?php echo $sRow['category']; ?></h2>
                    <h2><?php echo $sRow['writter']; ?></h2>
                    <div class="button"><span><a href="preview.php?id=<?php echo $sRow['id']; ?>" class="details">Rent</a></span></div>
                </div>
            <?php } ?>
        </div>
        <div class="section group">
            <?php
            $sSql = "select * from books limit 4 offset 32";
            $sResult = mysqli_query($connection, $sSql);
            while ($sRow = mysqli_fetch_array($sResult)) {
                ?>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="preview.php?id=<?php echo $sRow['id']; ?>"><img src="book_image/<?php echo $sRow['image']; ?>" alt="" /></a>
                    <h2><?php echo $sRow['category']; ?></h2>
                    <h2><?php echo $sRow['writter']; ?></h2>
                    <div class="button"><span><a href="preview.php?id=<?php echo $sRow['id']; ?>" class="details">Rent</a></span></div>
                </div>
            <?php } ?>
        </div>
        <div class="section group">
            <?php
            $sSql = "select * from books limit 4 offset 36";
            $sResult = mysqli_query($connection, $sSql);
            while ($sRow = mysqli_fetch_array($sResult)) {
                ?>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="preview.php?id=<?php echo $sRow['id']; ?>"><img src="book_image/<?php echo $sRow['image']; ?>" alt="" /></a>
                    <h2><?php echo $sRow['category']; ?></h2>
                    <h2><?php echo $sRow['writter']; ?></h2>
                    <div class="button"><span><a href="preview.php?id=<?php echo $sRow['id']; ?>" class="details">Rent</a></span></div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php include './footer.php'; ?>
