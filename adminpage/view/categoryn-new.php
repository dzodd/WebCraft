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
                                <h1> <a href='javascript: history.go(-1)' class="btn btn-primary"><i class="fa fa-undo"></i> Back </a></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="user-page.php">Dashboard</a></li>
                                    <li><a href="#">Category News</a></li>
                                    <li class="active">Create Category News</li>
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
                                <strong>Create Category News</strong>
                            </div>
                            <div class="card-body card-block">


                                <form action="../controller/createCategoryn.php" method="POST" class="form-horizontal">
                                    <div class="col-xl-8 order-xl-1">
                                        <div class="card bg-secondary shadow">
                                            <div class="card-header bg-white border-0">
                                                <div class="row align-items-center">


                                                </div>

                                                <div class="card-body">

                                                    <form>

                                                </div>
                                                <h6 class="heading-small text-muted mb-4">Category News</h6>
                                                <div class="pl-lg-4">
                                                    <div class="row">

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-control-label" for="input-email">Category Name</label>
                                                                <input type="text" name="caten_name" class="form-control form-control-alternative" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                
                                                </div>
                                                <hr class="my-4">
                                                <!-- Address -->
                                            
                                            
                                                <input name="create" type="submit" value="create" class="btn1">
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