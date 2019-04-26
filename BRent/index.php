<?php
session_id('mySessionID');
session_start();
?>
<?php include './Conntection/connection.php'; ?>
<?php include './header.php'; ?>
<div class="header_bottom">
    <div class="header_bottom_left">
        <div class="section group">
            <?php
            $robSql = "select * from books where writter ='Rabindranath Tagore' limit 2";
            $robQuery = mysqli_query($connection, $robSql);
            while ($robRow = mysqli_fetch_array($robQuery)) {
                ?>
                <div class="listview_1_of_2 images_1_of_2">
                    <div class="listimg listimg_2_of_1">
                        <a href="preview.php?id=<?php echo $robRow['id']; ?>"><img src="book_image/<?php echo $robRow['image']; ?>" alt="" /></a>
                    </div>
                    <div class="text list_2_of_1">
                        <h2><?php echo $robRow['name']; ?></h2>
                        <h2><?php echo $robRow['category']; ?></h2>
                        <div class="button"><span><a href="preview.php?id=<?php echo $robRow['id']; ?>">Rent</a></span></div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="section group">
            <?php
            $robSql = "select * from books where writter ='Kazi Nazrul Islam' limit 2";
            $robQuery = mysqli_query($connection, $robSql);
            while ($robRow = mysqli_fetch_array($robQuery)) {
                ?>
                <div class="listview_1_of_2 images_1_of_2">
                    <div class="listimg listimg_2_of_1">
                        <a href="preview.php?id=<?php echo $robRow['id']; ?>"> <img src="book_image/<?php echo $robRow['image']; ?>" alt="" /></a>
                    </div>
                    <div class="text list_2_of_1">
                        <h2><?php echo $robRow['name']; ?></h2>
                        <h2><?php echo $robRow['category']; ?></h2>
                        <div class="button"><span><a href="preview.php?id=<?php echo $robRow['id']; ?>">Rent</a></span></div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="clear"></div>
    </div>
    <div class="header_bottom_right_images">
        <!-- FlexSlider -->

        <!--Change Slider Image-->
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li><img src="images/1.jpg" alt=""/></li>
                    <li><img src="images/2.jpg" alt=""/></li>
                    <li><img src="images/3.jpg" alt=""/></li>
                    <li><img src="images/4.jpg" alt=""/></li>
                </ul>
            </div>
        </section>
        <!-- FlexSlider -->
        <!--Change Slider Image-->
    </div>
    <div class="clear"></div>
</div>	

<div class="main">
    <div class="content">
        <div class="content_top">
            <div class="heading">
                <h3>Rabindranath Thagore Books</h3>
            </div>
            <div class="clear"></div>
        </div>
        <div class="section group">
            <?php
            $rSQl = "select * from books where writter = 'Rabindranath Tagore'";
            $rQuery = mysqli_query($connection, $rSQl);
            while ($rRow = mysqli_fetch_array($rQuery)) {
                ?>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="preview.php?id=<?php echo $rRow['id']; ?>"><img src="book_image/<?php echo $rRow['image']; ?>" alt="" /></a>
                    <h2><?php echo $rRow['category']; ?></h2>
                    <h2><?php echo $rRow['writter']; ?></h2>
                    <div class="button"><span><a href="preview.php?id=<?php echo $rRow['id']; ?>" class="details">Rent</a></span></div>
                </div>
            <?php } ?>
        </div>
        <div class="content_bottom">
            <div class="heading">
                <h3>Kazi Nazrul Islam Books</h3>
            </div>
            <div class="clear"></div>
        </div>
        <div class="section group">
            <?php
            $kSql = "select * from books where writter = 'Kazi Nazrul Islam'";
            $kResult = mysqli_query($connection, $kSql);
            while ($kRow = mysqli_fetch_array($kResult)) {
                ?>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="preview.php?id=<?php echo $kRow['id']; ?>"><img src="book_image/<?php echo $kRow['image']; ?>" alt="" /></a>
                    <h2><?php echo $kRow['category']; ?></h2>
                    <h2><?php echo $kRow['writter']; ?></h2>
                    <div class="button"><span><a href="preview.php?id=<?php echo $kRow['id']; ?>" class="details">Rent</a></span></div>
                </div>
            <?php } ?>
        </div>

        <div class="content_bottom">
            <div class="heading">
                <h3>Science Fictions</h3>
            </div>
            <div class="clear"></div>
        </div>
        <div class="section group">
            <?php
            $sSql = "select * from books where category = 'Science Fiction'";
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
</div>
<?php include './footer.php'; ?>