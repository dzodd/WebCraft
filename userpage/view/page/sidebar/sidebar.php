<?php
require_once'../view/connect.php'
?>
<?php
$sql_cate="SELECT * FROM category ORDER BY cate_id ASC ";
$query_cate=mysqli_query($conn,$sql_cate);
?>
<div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
    <div class="product-categori">
        <div class="filter-sidebar-left">
            <div class="title-left">
                <h3>Danh mục sản phẩm</h3>
            </div>
            <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men" data-children=".sub-men">
                <?php
                while($row_cate=mysqli_fetch_array($query_cate)){
                ?>
                <li class="nav-item"><a class="nav-link" href="index.php?manage=product&id=<?php echo $row_cate['cate_id'] ?>"><?php echo $row_cate['cate_name'] ?></a></li>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>