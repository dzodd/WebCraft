<?php
$sql_pro="SELECT * FROM product WHERE product.cate_id='$_GET[id]' ORDER BY product_id ASC";
$query_pro=mysqli_query($conn,$sql_pro);
$sql_cate="SELECT * FROM category WHERE category.cate_id='$_GET[id]' LIMIT 1";
$query_cate=mysqli_query($conn,$sql_cate);
$row_title=mysqli_fetch_array($query_cate);
?>
<?php include 'page/banner.php'; ?>
<div class="products-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-all text-center">
                    <h1>Danh mục sản phẩm</h1>
                    <p><?php echo $row_title['cate_name'] ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <?php include 'page/sidebar/sidebar.php'; ?>
        <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
            <div class="right-product-box">
                <div class="row product-categorie-box">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                            <div class="row">
                                <?php
                                while ($row_pro = mysqli_fetch_array($query_pro))
                                {
                                ?>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                    <div class="products-single fix">
                                        <div class="box-img-hover">
                                            <div class="type-lb">
                                            </div>
                                            <img src='../../adminpage/product_image/<?php echo $row_pro['product_image'] ?>' class="img-fluid" alt="Image">
                                            <div class="mask-icon">
                                                <a class="cart" href="index.php?manage=product-detail&id=<?php echo $row_pro['product_id'] ?>">Xem thêm</a>
                                            </div>
                                        </div>
                                        <div class="why-text">
                                            <h3>Tên sản phẩm : <?php echo $row_pro['product_name'] ?></h3>
                                            <h4>Giá : <?php echo number_format($row_pro['price'],0,',','.').'vnđ' ?></h4>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>