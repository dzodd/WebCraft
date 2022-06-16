<?php include"Layouts/headeradmin.php" ?>


  <form action="register.php" method="post">
   <div class="container">
     <h1>Form Đăng Ký</h1>
     <p>Xin hãy nhập biểu mẫu bên dưới để đăng ký.</p>
     <hr>
     <label for="username"><b>Tên đăng nhập</b></label>
     <input type="text" placeholder="Nhập tên đăng nhập" name="username" required>
    <label for="email"><b>Email</b></label>
     <input type="text" placeholder="Nhập Email" name="email" required>
    <label for="psw"><b>Mật Khẩu</b></label>
     <input type="password" placeholder="Nhập Mật Khẩu" name="password" required>
    <label for="psw-repeat"><b>Nhập Lại Mật Khẩu</b></label>
     <input type="password" placeholder="Nhập Lại Mật Khẩu" name="psw-repeat" required>
    <label>
       <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Nhớ Đăng Nhập
     </label>
    <div class="clearfix">
       <button type="submit" name="dangky">Sign Up</button>
     </div>
   </div>
 </form>

	
