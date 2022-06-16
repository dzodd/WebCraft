<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <?php include"Layouts/headeradmin.php" ?>   
    <?php include"../utils/Login-session.php"?>
</head>
<body>
<?php include"../controller/detailOrder.php"?>
    <?php include"Layouts/menuadmin.php" ?>
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php include"Layouts/menutopadmin.php" ?>
        <!-- Header-->

     
        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                            <h1> <a href="order-page.php" class="btn btn-primary"><i class="fa fa-undo"></i>  Back  </a></h1>  
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">    
                                <ol class="breadcrumb text-right">
                                    <li><a href="order-page.pphp">Dashboard</a></li>
                                    <li><a href="#">Order</a></li>
                                    <li class="active">Order Detail</li>
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
                                <strong>Order</strong> 
                            </div>
                            <div class="card-body card-block">
                                <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
               
         
              </div>
           
            <div class="card-body">
              <form>
              <h6   class="heading-small text-muted mb-4"> &emsp;&emsp;Avatar </h6>
                <div class="pl-lg-4">
                  <div class="form-group focused">
                        <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                  <img src="../user_image/<?php echo $row["avatar"]; ?>" class="rounded-circle">
                  </a>
                </div>
              </div>
                    
                </div>
                <h6 class="heading-small text-muted mb-4">Order information</h6>
                  <div class="pl-lg-4">
                      <div class="row">
                       <div class="col-lg-6">
                        
                           <div class="form-group focused">
                         
                        <label class="form-control-label" for="input-ordername">order ID</label>
                        <input   type="text" id="input-ordername" class="form-control form-control-alternative" value="<?php echo $row["order_id"]; ?>" readonly>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email </label>
                        <input type="email" id="input-email" class="form-control form-control-alternative" value="<?php echo $row["email_order"]; ?>" readonly>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-first-name">Name</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative"  value="<?php echo $row["fullname"]; ?>" readonly>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Phone</label>
                        <input type="number" id="input-last-name" class="form-control form-control-alternative"  value="<?php echo $row["phone"]; ?>" readonly>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-address">Address</label>
                        <input id="input-address" class="form-control form-control-alternative" value="<?php echo $row["address_order"]; ?>" readonly type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-city">Date Created</label>
                        <input type="text" id="input-city" class="form-control form-control-alternative"  value="<?php echo $row["datecreate_order"]; ?>" readonly>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-country">Status</label>
                        <input type="number" id="input-country" class="form-control form-control-alternative"  value="<?php echo $row["status_order"]; ?>" readonly>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">User ID</label>
                        <input type="number" value="<?php echo $row["user_id"]; ?>" class="form-control form-control-alternative" readonly >
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Price</label>
                        <input type="number" value="<?php echo $row["total"]; ?>" class="form-control form-control-alternative" readonly >
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
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

<?php include "Layouts/footeradmin.php"?>

</div><!-- /#right-panel -->

<!-- Right Panel -->

<!-- Scripts -->
<?php include "Layouts/scripadmin.php"?>


</body>
</html>
