<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Thanh Toán</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="cart.php">Giỏ Hàng</a></li>
                    <li class="breadcrumb-item active">Thanh Toán</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="cart-box-main">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-6 mb-3">
                <div class="checkout-address">
                    <div class="title-left">
                        <h3>Billing address</h3>
                    </div>
                    <form action="paymentcontroller.php" method="POST">
                        <div class="mb-3">
                            <label >Họ và tên *</label>
                            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="">
                            <div class="invalid-feedback"> Vui lòng điền họ và tên. </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label >Email *</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="">
                        <div class="invalid-feedback"> Vui lòng điền email. </div>
                    </div>
                    <div class="mb-3">
                        <label >Số điện thoại *</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="">
                        <div class="invalid-feedback"> Vui lòng điền số điện thoại. </div>
                    </div>
                    <div class="mb-3">
                        <label >Địa chỉ *</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="" required>
                        <div class="invalid-feedback"> Vui lòng điền địa chỉ. </div>
                    </div>
                    
                </div>
            </div>
            <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Hình ảnh</th>
                                <th>Tên sản phảm</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                                
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
                                
                                <p><?php echo $cart_item['quantity']; ?></p>
                                
                            </td>
                            <td class="total-pr">
                                <p><?php echo number_format($total,0,',','.').'vnđ'?></p>
                            </td>

                        </tr>
                        </table>
                        
                        <?php
                        }
                        ?>
            <?php
            }
            ?>
            <div class="col-sm-6 col-lg-6 mb-3">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="order-box">
                            <div class="title-left">
                                <h3>Your order</h3>
                            </div>
                            <hr class="my-1">
                            <div class="d-flex gr-total">
                                <h5>Tổng tiền</h5>
                                <div class="ml-auto h5"> <?php echo number_format($total_amount,0,',','.').'vnđ' ?> </div>
                            </div>
                        <hr> </div>
                    </div>
                    <button class="btn hvr-hover" id="payment" type="payment" name="payment">Thanh toán</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>