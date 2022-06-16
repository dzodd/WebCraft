<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Đăng Ký</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Đăng ký</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="contact-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <div class="contact-info-left">
                    <h2>Chào mừng bạn đến với D&Đ</h2>
                    <ul>
                        <li>
                            <p><i class="fas fa-map-marker-alt"></i> 180 Cao Lỗ, Phường 4, Quận 8 <br>Thành Phố Hồ Chí Minh<br></p>
                        </li>
                        <li>
                            <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+1-888705770">+84968278174</a></p>
                        </li>
                        <li>
                            <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">dtran0692@gmail.com</a></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-sm-12">
                <div class="contact-form-right">
                    <form action="registercontroller.php" method="POST">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>Trở thành 1 khách hàng của D&Đ</h2>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Họ và tên" class="form-control" id="user_name" name="user_name"  required data-error="Vui lòng nhập Họ và tên">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="date" placeholder="Ngày sinh" class="form-control" id="birth" name="birth"  required data-error="Vui lòng nhập ngày sinh">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <br><input type="radio" placeholder="Ngày sinh"  id="sex" name="sex" required data-error="Vui lòng chọn giới tính" checked value="nam">Nam
                                    <input type="radio" placeholder="Ngày sinh"  id="sex" name="sex" value="nữ">Nữ</br>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="email" placeholder="Email" class="form-control" id="email" name="email"  required data-error="Vui lòng nhập email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="password" placeholder="Mật khẩu" class="form-control" id="pass" name="pass" required data-error="Vui lòng nhập mật khẩu">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="password" placeholder="Nhập lại mật khẩu" class="form-control" id="reenterpass" name="reenterpass" required data-error="Vui lòng lại nhập mật khẩu">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Nhập địa chỉ của bạn" class="form-control" id="address" name="address" required data-error="Vui lòng lại nhập mật khẩu">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="checkbox" id="dieukhoan" name="dieukhoan" required data-error="Vui lòng đồng ý để đăng ký">
                                    <label>Tôi đồng ý với điều khoản và điều kiện</label><br>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="submit-button text-center">
                                    <button class="btn hvr-hover" id="register" type="submit" name="register">Đăng ký</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>