<?php
$sql_news="SELECT * FROM news WHERE news.caten_id='$_GET[id]' ORDER BY news_id ASC";
$query_news=mysqli_query($conn,$sql_news);
$sql_caten="SELECT * FROM categoryn WHERE categoryn.caten_id='$_GET[id]' LIMIT 1";
$query_caten=mysqli_query($conn,$sql_caten);
$row_title=mysqli_fetch_array($query_caten);
$sql_caten="SELECT * FROM categoryn ORDER BY caten_id ASC ";
$query_caten=mysqli_query($conn,$sql_caten);
?>
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Bài viết</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Bài viết</li>
                    <li class="breadcrumb-item active"><?php echo $row_title['caten_name'] ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="about-box-main">
    <div class="container">
        <div class="row my-4">
            <div class="col-12">
                <h2 class="noo-sh-title">Danh mục bài viết</h2>
                <?php
                while($row_caten=mysqli_fetch_array($query_caten)){
                ?>
                <li class="nav-item"><a class="nav-link" href="index.php?manage=news&id=<?php echo $row_caten['caten_id'] ?>"><?php echo $row_caten['caten_name'] ?></a></li>
                <?php
                }
                ?>
            </div>
            <?php
            while($row_news = mysqli_fetch_array($query_news)){
            ?>
            <div class="col-sm-6 col-lg-3">
                <div class="hover-team">
                    <div class="our-team"> <img src='../../adminpage/news_image/<?php echo $row_news['news_img'] ?>' alt="" />
                        <div class="team-content">
                            <h3 class="title"></h3> <span class="post"><a href="index.php?manage=detailnews&id=<?php echo $row_news['news_id'] ?>">Xem thêm</a></span> </div>
                        </div>
                        <a href='#'><?php echo $row_news['news_name'] ?></a>
                        <div class="team-description">
                            <p><?php echo $row_news['news_title'] ?></p>
                        </div>
                    <hr class="my-0"> </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>