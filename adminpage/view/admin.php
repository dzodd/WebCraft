<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
  <?php include "Layouts/headeradmin.php" ?>
  <?php include"../utils/Login-session.php"?>
</head>

<body>
  <?php include "../controller/admindetail.php" ?>

  <?php include "Layouts/menuadmin.php" ?>
  <div id="right-panel" class="right-panel">

    <!-- Header-->
    <?php include "Layouts/menutopadmin.php" ?>
    <!-- Header-->


    <div class="breadcrumbs">
      <div class="breadcrumbs-inner">
        <div class="row m-0">
          <div class="col-sm-4">
            <div class="page-header float-left">
              <div class="page-title">
          
              </div>
            </div>
          </div>
          <div class="col-sm-8">
            <div class="page-header float-right">
              <div class="page-title">
                <ol class="breadcrumb text-right">
                  <li><a href="admin-page.pphp">ADMIN</a></li>
                
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="content">
      <div class="animated fadeIn">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <strong>Basic Form</strong>
              </div>
              <div class="card-body card-block">
                

                <form action="../controller/createadmin.php" method="POST"  class="form-horizontal">
                  <div class="col-xl-8 order-xl-1">
                    <div class="card bg-secondary shadow">
                      <div class="card-header bg-white border-0">
                        <div class="row align-items-center">


                        </div>

                        <div class="card-body">

                          <form>

                        </div>
                        <h6 class="heading-small text-muted mb-4">ADMIN information</h6>
                        <div class="pl-lg-4">
                          <div class="row">
                            
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label class="form-control-label" for="input-email">Email </label>
                                <input type="email" name="email"  class="form-control form-control-alternative"placeholder=expamle@example.com value="<?php echo $row["email"]; ?> ">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-country">Password</label>
                                <input name="pass" type="password" id="pass" class="form-control form-control-alternative" value="<?php echo $row["pass"];?>"><br><br>
                                <input type="checkbox" onclick="myFunction()"> Show Password 
                              </div>
                            <div class="col-lg-6">
                              <div class="form-group focused">
                                <label class="form-control-label" for="input-last-name">Sex</label>
                                <input name="sex" type="text" class="form-control form-control-alternative" placeholder="Sex" value="">
                              </div>
                            </div>
                          </div>
                          <input name="create" type="submit" value="update" class="btn1">
                        </div>
                      
                        <!-- Address -->
                    
                        
                      
                        </div>
                       
                
                        <!-- Description -->


                </form>
              </div>
            </div>
          </div>
          </form>
        </div>
        <div class="card-footer">

        </div>
      </div>
    </div>
  </div><!-- .animated -->
  </div><!-- .content -->

  <div class="clearfix"></div>

  <?php include "Layouts/footeradmin.php" ?>

  </div><!-- /#right-panel -->

  <!-- Right Panel -->

  <!-- Scripts -->
  <?php include "Layouts/scripadmin.php" ?>


</body>
<footer>

</footer>
</html>