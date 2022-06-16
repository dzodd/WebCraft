<?php
$sql_detailnews = "SELECT * FROM news WHERE news.news_id='$_GET[id]' LIMIT 1";
$query_detailnews = mysqli_query($conn,$sql_detailnews);
?>
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Tin Tức</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                    <li class="breadcrumb-item active"><a href="index.php?manage=news">Tin Tức</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php while($row_detailnews=mysqli_fetch_array($query_detailnews)){ ?>
<div class="about-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="noo-sh-title"><?php echo $row_detailnews['news_name'] ?></h2>
                <?php echo ($row_detailnews['news_content']) ?>
            </div>
            <div class="col-lg-6">
                <div class="banner-frame"> <img class="img-thumbnail img-fluid" src="<?php echo $row_detailnews['news_img'] ?>" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
?>