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
  <?php include "../controller/detailnews.php" ?>

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
                <h1> <a  href='javascript: history.go(-1)' class="btn btn-primary"><i class="fa fa-undo"></i> Back </a></h1>
              </div>
            </div>
          </div>
          <div class="col-sm-8">
            <div class="page-header float-right">
              <div class="page-title">
                <ol class="breadcrumb text-right">
                  <li><a href="news-page.pphp">Dashboard</a></li>
                  <li><a href="#">newss</a></li>
                  <li class="active">Edit news</li>
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
              
                <form action="../utils/uploadNews.php?id=<?php echo $row["news_id"]; ?>" method="POST" enctype="multipart/form-data">
                  <div class="pl-lg-4">
                  <h6 class="heading-small text-muted mb-4"> &emsp;News Image </h6>
                    <div class="form-group focused">
                      <div class="col-lg-3 order-lg-2"> 
                        <div div class="card-profile-image">
                          <a href="#">
                            <img src="../news-img/<?php echo $row["news_img"]; ?>" class="rounded-circle">
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

                          
                          <input name="news_id" type="text" id="news_id" class="form-control form-control-alternative" value="<?php echo $row["news_id"];  ?>"hidden >
                        </div>
                        <input name="upload" type="submit" value="Upload" class="btn btn-outline-secondary">
                       
                      </div>
                      <BR>
                </form>

                <form action="../controller/updateNew.php" method="POST"  class="form-horizontal">
                  <div class="col-xl-8 order-xl-1">
                    <div class="card bg-secondary shadow">
                      <div class="card-header bg-white border-0">
                        <div class="row align-items-center">


                        </div>

                        <div class="card-body">

                          <form>

                        </div>
                        <h6 class="heading-small text-muted mb-4">news information</h6>
                        <div class="pl-lg-4">
                          <div class="row">
                            <div class="col-lg-6">
                              <input type="hidden"   name="news_id" value="<?php echo $row["news_id"]; ?> ">
                              <div class="form-group focused">

                                <label class="form-control-label" for="input-newsname"> ID</label>
                                <input name="news_id    " type="text"  class="form-control form-control-alternative" value="<?php echo $row["news_id"]; ?> ">
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label class="form-control-label" for="input-email">Name </label>
                                <input type="text" name="news_name"  class="form-control form-control-alternative" value="<?php echo $row["news_name"]; ?>">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group focused">
                                <label class="form-control-label" for="input-first-name">Title </label>
                                <input name="news_title" type="text"class="form-control form-control-alternative" value="<?php echo $row["news_title"]; ?>">
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
                                <textarea name="news_content"  rows="40" cols="50" id="input-content" class="form-control form-control-alternative" > <?php echo $row["news_content"]; ?></textarea>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-4">
                            
                            </div>
                          
                            <div class="col-lg-4">
                         
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