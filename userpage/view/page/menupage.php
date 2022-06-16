<?php
require_once'../view/connect.php'
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>D&Đ - Ngôi Nhà Thủ Công</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/custom.css">
    </head>
    <body>
        <div class="main-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="text-slid-box">
                            <div id="offer-box" class="carouselTicker">
                                <ul class="offer-box">
                                    <li>
                                        <i class="fab fa-opencart"></i> Miễn phí giao hàng cho hóa đơn từ 500.000 VNĐ
                                    </li>
                                    <li>
                                        <i class="fab fa-opencart"></i> Miễn phí giao hàng cho hóa đơn từ 500.000 VNĐ
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="our-link">
                            <ul>
                                <?php
                                session_start();
                                if (isset($_SESSION['login']))
                                {
                                echo'<li>';
                                    echo'<i>Chào mừng '.$_SESSION["login"].'</i>';
                                echo'</li>';
                                echo'<li>';
                                    echo'<a href="logoutcontroller.php" >Đăng xuất</a>';
                                echo'</li>';
                                }else
                                {
                                echo'<li><a href="index.php?manage=login">ĐĂNG NHẬP</a></li>';
                                }
                                ?>
                                <li><a href="index.php?manage=my-account">TÀI KHOẢN CỦA TÔI</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <header class="main-header">
            <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
                <div class="container">
                    <div class="navbar-header">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="index.php"><img src="images/logo/logo.png" class="logo" alt=""></a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                            <li class="nav-item active"><a class="nav-link" href="index.php">Trang Chủ</a></li>
                            <li class="nav-item"><a class="nav-link" href="index.php?manage=product&id=1">Sản Phẩm</a></li>
                            <li class="nav-item"><a class="nav-link" href="index.php?manage=news&id=1">Bài Viết</a></li>
                            <li class="nav-item"><a class="nav-link" href="index.php?manage=contact">Liên Hệ</a></li>
                            <li class="nav-item"><a class="nav-link" href="index.php?manage=about">Về Chúng Tôi</a></li>
                            <li class="nav-item">
                                <form action="index.php?manage=search" method="POST">
                                    <p><input type="text" class="form-control" placeholder="Tìm kiếm sản phẩm" name="key" >
                                        <input type="submit" name="search" value="Tìm kiếm"></p>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <div class="attr-nav">
                            <ul>
                                
                                <li class="side-menu"><a href="#">
                                    <i class="fa fa-shopping-bag"></i>
                                    <span class="badge"></span>
                                </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="side">
                        <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                        <li class="cart-box">
                            <ul class="cart-list">
                                <?php
                                if (isset($_SESSION['cart'])) {
                                $i=0;
                                $total_amount=0;
                                foreach($_SESSION['cart'] as $cart_item){
                                $total= $cart_item['quantity']*$cart_item['price'];
                                $total_amount+=$total;
                                $i++;
                                ?>
                                <li>
                                    <img src="<?php echo $cart_item['product_image']; ?>" class="cart-thumb" alt="" />
                                    <h6><?php echo $cart_item['product_name']; ?></h6>
                                    </a> <p><?php echo $cart_item['quantity']; ?></p> - <span class="price"><?php echo number_format($cart_item['price'],0,',','.').'vnđ'; ?></span></p>
                                </li>
                                <?php
                                }
                                ?>
                                <li class="total">
                                    <a href="index.php?manage=cart" class="btn btn-default hvr-hover btn-cart">Xem giỏ hàng</a>
                                    <span class="float-right"><strong>Tổng tiền</strong>:<?php echo number_format($total_amount,0,',','.').'vnđ' ?></span>
                                </li>
                                <?php
                                }else{
                                ?>
                                <li>
                                    
                                    <h6><a href="#">Giỏ hàng trống </a></h6>
                                    
                                </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </li>
                    </div>
                </nav>
            </header>
        </body>
    </html>