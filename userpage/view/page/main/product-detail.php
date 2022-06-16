<?php
$sql_prodetail="SELECT * FROM product,category WHERE product.cate_id=category.cate_id AND product.product_id='$_GET[id]' LIMIT 1";
$query_prodetail=mysqli_query($conn,$sql_prodetail);
while($row_prodetail=mysqli_fetch_array($query_prodetail)){
?>
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Chi Tiết Sản Phẩm</h2>
            </div>
        </div>
    </div>
</div>
<div class="shop-detail-box-main">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-5 col-md-6">
                <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active"> <img class="d-block w-100" src='../../product_image/<?php echo $row_prodetail['product_image'] ?>' alt="First slide"> </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-6">
                <form method="POST" action="page/main/addtocart.php?idproduct=<?php echo ($row_prodetail['product_id']) ?>">
                    <div class="single-product-details">
                        <h2>Tên sản phẩm : <?php echo $row_prodetail['product_name'] ?></h2>
                        <h5>Giá : <?php echo number_format($row_prodetail['price'],0,',','.').'vnđ' ?></h5>
                        <p class="available-stock"><span>ID : <?php echo ($row_prodetail['product_id']) ?></span>
                        <p>
                            <h4>Mô tả sản phẩm:</h4>
                            <?php echo ($row_prodetail['description']) ?>
                            <div class="price-box-bar">
                                <div class="cart-and-bay-btn">
                                    <p><input class="btn hvr-hover" data-fancybox-close="" type="submit" name="addtocart" value="Thêm vào giỏ"></p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>