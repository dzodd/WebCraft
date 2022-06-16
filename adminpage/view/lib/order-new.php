<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <?php include"Layouts/headeradmin.php" ?>   
</head>
<body>
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
                            <h1> <a href="order.php" class="btn btn-primary"><i class="fa fa-undo"></i>  Back  </a></h1>  
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">    
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
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
                                <strong>Basic Form</strong> Elements
                            </div>
                            <div class="card-body card-block">
                                <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Customer Name</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Text" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Description</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Text" class="form-control"></div>
                                    </div>
                                
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="date-input" class=" form-control-label">Init Date</label></div>
                                        <div class="col-12 col-md-9"><input type="date" id="password-input" name="password-input"  class="form-control">  </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="date-input" class=" form-control-label">Term Date</label></div>
                                        <div class="col-12 col-md-9"><input type="date" id="password-input" name="password-input"  class="form-control">  </div>
                                    </div>
                                   
                                 
                                    
                                
                                 
                              
                                   
                                   
                                  
                                
                                    <div class="row form-group">
                                    <button type="submit" class="btn btn-primary" style="margin-left: 10px">
                                          <i class="fa fa-dot-circle-o"></i> Submit
                                    </button>
                                     <button type="reset" class="btn btn-danger btn-sm" style="margin-left: 10px">
                                            <i class="fa fa-ban"></i> Reset
                                    </button>
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
