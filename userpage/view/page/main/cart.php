<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Giỏ Hàng</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item active">Giỏ Hàng</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="cart-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-main table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Hình ảnh</th>
                                <th>Tên sản phảm</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <?php
                        if (isset($_SESSION['cart'])) {
                        $i=0;
                        $total_amount=0;
                        foreach($_SESSION['cart'] as $cart_item){
                        $total= $cart_item['quantity']*$cart_item['price'];
                        $total_amount+=$total;
                        $i++;
                        ?>
                        
                        <tr>
                            <td>
                                <p><?php echo $i; ?></p>
                            </td>
                            <td class="thumbnail-img">
                                
                                <img class="img-fluid" src="../../adminpage/product_image/<?php echo $cart_item['product_image']; ?>" alt="" />
                                
                            </td>
                            <td class="name-pr">
                                <?php echo $cart_item['product_name']; ?>
                            </td>
                            <td class="price-pr">
                                <p><?php echo number_format($cart_item['price'],0,',','.').'vnđ'; ?></p>
                            </td>
                            <td>
                                <a href="page/main/addtocart.php?add=<?php echo $cart_item['id']?>">+</a>
                                <p><?php echo $cart_item['quantity']; ?></p>
                                
                                <a href="page/main/addtocart.php?remove=<?php echo $cart_item['id']?>">-</a>
                            </td>
                            <td class="total-pr">
                                <p><?php echo number_format($total,0,',','.').'vnđ'?></p>
                            </td>
                            <td class="remove-pr">
                                <a href="page/main/addtocart.php?delete=<?php echo $cart_item['id']?>">
                                    <i class="fas fa-times"></i>
                                </a>
                            </td>
                        </tr>
                        
                        <?php
                        }
                        ?>
                        <table style="text-align: center; float: center;">
                            <tr>
                                <td colspan="7">
                                    <a href="page/main/addtocart.php?deleteall=1" class="ml-auto btn hvr-hover">Xóa tất cả</a>
                                    <?php
                                    if (isset($_SESSION['login'])) {
                                    ?>
                                    <form action="index.php?manage=payment" method="POST">
                                        
                                    
                                    <h5>Tổng tiền</h5>
                                    <div class="ml-auto h5"><?php echo number_format($total_amount,0,',','.').'vnđ' ?>
                                        <button class="btn hvr-hover" id="payment" type="payment" name="payment">Tiến hành đặt hàng</button>
                                    </form>
                                    <?php
                                    }else{
                                    ?>
                                    <a href="index.php?manage=login" class="ml-auto btn hvr-hover">Đăng nhập để thanh Toán</a>
                                    <?php
                                    }
                                    ?>
                                </td>
                            </tr>
                        </table>
                        <?php
                        }else{
                        ?>
                        <table style="text-align: center; float: center;">
                            <tr>
                                <td colspan="7">
                                    <div>GIỎ HÀNG CỦA BẠN ĐANG TRỐNG </div>
                                </td>
                            </tr>
                        </table>
                        
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
        
    </div>
</div>