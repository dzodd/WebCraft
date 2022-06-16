<?php
require_once'../view/connect.php'
?>
<?php
$sql_pro="SELECT * FROM product,category WHERE product.cate_id=category.cate_id ORDER BY product.product_id ASC LIMIT 6";
$query_pro=mysqli_query($conn,$sql_pro);
?>
<?php include 'page/banner.php'; ?>
<div class="products-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-all text-center">
                    <h1>Best Sellers</h1>
                    <p>Những sản phẩm hot nhất</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
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
                                            <img src='../product_image/<?php echo $row_pro['product_image'] ?>' class="img-fluid" alt="Image">
                                            <div class="mask-icon">
                                                <a class="cart" href="index.php?manage=product-detail&id=<?php echo $row_pro['product_id'] ?>">Xem thêm</a>
                                            </div>
                                        </div>
                                        <div class="why-text">
                                            <h3>Tên sản phẩm : <?php echo $row_pro['product_name'] ?></h3>
                                            <h3>Danh mục : <?php echo ($row_pro['cate_name']) ?></h3>
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