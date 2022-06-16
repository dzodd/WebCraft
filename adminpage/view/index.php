<link rel="stylesheet" href="assets/css/login.css">
<script src="assets/js/login.js"></script>
<body id="particles-js"></body>
<div class="animated bounceInDown">
  <div class="container">
    <span class="error animated tada" id="msg"></span>
    <form method="POST" action="../controller/login-controller.php" name="form1" class="box" onsubmit="return checkStuff()">
      <h4>Admin<span>Dashboard</span></h4>
      <h5>Sign in to your account.</h5>
        <input type="text" name="email" placeholder="Email" autocomplete="off">
        <i class="typcn typcn-eye" id="eye"></i>
        <input type="password" name="pass" placeholder="Passsword" id="pass" autocomplete="off">
        <label>
          <input type="checkbox" onclick="myFunction()">
          <span></span>
          <small class="rmb">Remember me</small>
        </label>
        <a href="#" class="forgetpass">Forget Password?</a>
        <input name="btn_submit" type="submit" value="Sign in" class="btn1">
      </form>
        <a href="#" class="dnthave">Don’t have an account? Sign up</a>
  </div> 
       
</div>