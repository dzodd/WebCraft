<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <?php include "Layouts/headeradmin.php" ?>
    <?php include "../utils/Login-session.php" ?>
</head>

<body>
    <?php include "../controller/detailProduct.php" ?>
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
                                <h1> <a href="product-page.php" class="btn btn-primary"><i class="fa fa-undo"></i> Back </a></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="product-page.php">Dashboard</a></li>
                                    <li><a href="#">Table</a></li>
                                    <li class="active">Basic table</li>
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
                                <form action="../utils/uploadProduct.php?id=<?php echo $row["product_id"]; ?>" method="POST" enctype="multipart/form-data">
                                    <div class="pl-lg-4">
                                        <h6 class="heading-small text-muted mb-4"> &emsp;Image Product </h6>
                                        <div class="form-group focused">
                                            <div class="col-lg-3 order-lg-2">
                                                <div div class="card-profile-image">
                                                    <a href="#">
                                                        <img src="../product_image/<?php echo $row["product_image"]; ?>" class="rounded-circle">
                                                    </a>
                                                </div>


                                                <Br>
                                                <input type="file" name="file" required accept=".jpg " ">
                       
                        <br>
                
 

                        <div class=" form-group focused">


                                                <input name="user_id" type="text" id="user_id" class="form-control form-control-alternative" value="<?php echo $row["product_id"];  ?>" hidden>
                                            </div>
                                            <input name="upload" type="submit" value="Upload" class="btn btn-outline-secondary">

                                        </div>
                                        <BR>
                                </form>
                                <form action="../controller/updateProduct" method="post" class="form-horizontal">
                                    <div class="col-xl-8 order-xl-1">
                                        <div class="card bg-secondary shadow">
                                            <div class="card-header bg-white border-0">
                                                <div class="row align-items-center">
                                                </div>
                                                <div class="card-body">
                                                    <form action="../controller/updateProduct.php" method="POST"  class="form-horizontal">
                                                        <h6 class="heading-small text-muted mb-4">product information</h6>
                                                        <div class="pl-lg-4">
                                                            <div class="row">
                                                                <div class="col-lg-6">

                                                                    <div class="form-group focused">

                                                                        <label class="form-control-label" for="input-productname">Product ID</label>
                                                                        <input type="text" name= "product_id"id="input-productname" class="form-control form-control-alternative" value="<?php echo $row["product_id"]; ?> "readonly >
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label class="form-control-label" for="input-email">Product Name </label>
                                                                        <input type="text"name= "product_name" id="input-email" class="form-control form-control-alternative" value="<?php echo $row["product_name"]; ?>" >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="form-group focused">
                                                                        <label class="form-control-label" for="input-first-name">Price</label>
                                                                        <input type="text"name= "price" id="input-first-name" class="form-control form-control-alternative" value="<?php echo $row["price"]; ?>" >
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="form-group focused">
                                                                        <label class="form-control-label" for="input-first-name">Category Name</label>
                                                                        <input type="text"name= "cate_name" id="input-first-name" class="form-control form-control-alternative" value="<?php echo $row["cate_name"]; ?>" >
                                                                    </div>
                                                                </div>

                                                            
                                                                <div class="col-lg-6">
                                                                    <div class="form-group focused">
                                                                        <label class="form-control-label" for="input-first-name">Category ID</label>
                                                                        <input type="text" name= "cate_id" id="input-first-name" class="form-control form-control-alternative" value="<?php echo $row["cate_id"]; ?>" >
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="form-group focused">
                                                                        <label class="form-control-label" for="input-last-name">Description</label>

                                                                        <textarea rows="5" name= "description"cols="1fc 0" id="input-content" class="form-control form-control-alternative" > <?php echo $row["description"]; ?></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <input  class="btn btn-outline-secondary" name="upload" type="submit" value="Update" class="btn1" >
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

</html>