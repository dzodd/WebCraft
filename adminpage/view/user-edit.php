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
  <?php include "../controller/detailUser.php" ?>

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
                <h1> <a href="user-page.php" class="btn btn-primary"><i class="fa fa-undo"></i> Back </a></h1>
              </div>
            </div>
          </div>
          <div class="col-sm-8">
            <div class="page-header float-right">
              <div class="page-title">
                <ol class="breadcrumb text-right">
                  <li><a href="user-page.pphp">Dashboard</a></li>
                  <li><a href="#">Users</a></li>
                  <li class="active">Edit user</li>
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
              
                <form action="../utils/upload.php?id=<?php echo $row["user_id"]; ?>" method="POST" enctype="multipart/form-data">
                  <div class="pl-lg-4">
                  <h6 class="heading-small text-muted mb-4"> &emsp;Avatar </h6>
                    <div class="form-group focused">
                      <div class="col-lg-3 order-lg-2">
                        <div div class="card-profile-image">
                          <a href="#">
                            <img src="../user_image/<?php echo $row["avatar"]; ?>" class="rounded-circle">
                          </a>
                        </div>


                        <Br>
                        <input type="file" name="file" required accept=".jpg " ">
                       
                        <br>
                       
                        <?php if (isset($succes)) {
                          echo " <span class='badge badge-success'>Success</span>";
                        }
                        ?>


                        <div class="form-group focused">

                          
                          <input name="user_id" type="text" id="user_id" class="form-control form-control-alternative" value="<?php echo $row["user_id"];  ?>"hidden >
                        </div>
                        <input name="upload" type="submit" value="Upload" class="btn btn-outline-secondary">
                       
                      </div>
                      <BR>
                </form>

                <form action="../controller/updateUser.php" method="POST"  class="form-horizontal">
                  <div class="col-xl-8 order-xl-1">
                    <div class="card bg-secondary shadow">
                      <div class="card-header bg-white border-0">
                        <div class="row align-items-center">


                        </div>

                        <div class="card-body">

                          <form>

                        </div>
                        <h6 class="heading-small text-muted mb-4">User information</h6>
                        <div class="pl-lg-4">
                          <div class="row">
                            <div class="col-lg-6">
                              <input type="hidden"   name="user_id" value="<?php echo $row["user_id"]; ?> ">
                              <div class="form-group focused">

                                <label class="form-control-label" for="input-username">User ID</label>
                                <input name="birth" type="text"  class="form-control form-control-alternative" value="<?php echo $row["birth"]; ?> ">
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label class="form-control-label" for="input-email">Email </label>
                                <input type="email" name="email"  class="form-control form-control-alternative" value="<?php echo $row["email"]; ?>">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group focused">
                                <label class="form-control-label" for="input-first-name">User Name</label>
                                <input name="user_name" type="text"class="form-control form-control-alternative" value="<?php echo $row["user_name"]; ?>">
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group focused">
                                <label class="form-control-label" for="input-last-name">Sex</label>
                                <input name="sex" type="text" class="form-control form-control-alternative" placeholder="Last name" value="<?php echo $row["sex"]; ?>">
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
                                <input name="address" id="input-address" class="form-control form-control-alternative" placeholder="Home Address" value="<?php echo $row["address"];?>" type="text">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-4">
                              <div class="form-group focused">
                                <label class="form-control-label" for="input-city">Date Created</label>
                                <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="City" value="<?php echo $row["date_created"];?>" readonly>
                              </div>
                            </div>
                            <div class="col-lg-4">

                              <div class="form-group focused">
                                <label class="form-control-label" for="input-country">Status</label>
                                <select name="status" id="role" class="form-control-lg form-control" value="<?php echo $row["status_user"];?> ">
                                  <option value="1">Active</option>
                                  <option value="0">Inactive</option>

                                </select>

                              </div>
                            </div>
                            <div class="col-lg-4">
                              <div class="form-group">
                                <label class="form-control-label" for="input-country">Password</label>
                                <input name="pass" type="password" id="pass" class="form-control form-control-alternative" value="<?php echo $row["pass"];?>"><br><br>
                                <input type="checkbox" onclick="myFunction()"> Show Password 
                              </div>
                            </div>
                          </div>
                          <input  class="btn btn-outline-secondary" name="upload" type="submit" value="Update" class="btn1" >
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

  <?php include "Layouts/footeradmin.php" ?>

  </div><!-- /#right-panel -->

  <!-- Right Panel -->

  <!-- Scripts -->
  <?php include "Layouts/scripadmin.php" ?>


</body>
<footer>

</footer>
</html>