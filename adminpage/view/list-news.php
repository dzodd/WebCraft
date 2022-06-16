<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <?php include"Layouts/headeradmin.php" ?>
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
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
                           <h1> <a type="submit" href="new-category.php" class="btn btn-primary"><i class="fa fa-plus-square"></i> New Category  </a></h1>  
                           
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">    
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Post</a></li>
                                    <li class="active">List Post</li>
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
                                <strong class="card-title"> Category</strong>
                            </div>
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th> Name</th>
                                            <th> Quantity</th>
                                            <th>update last time</th>
                                            
                                            <th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr >   
                                    <td  > News </td>
                                    <td>  <span class="name">23</span> </td>                         
                                    <td> <span class="product">23/5/2021</span> </td>
                                

                                    <td>    
                                        <a style="margin-right:10px" href="news-tintuc.php"  class="btn btn-info"><i class="fa fa-lightbulb-o"></i> Details</a>
                                        <a style="margin-right:10px" href="new-write.php?id='.($i+1).'" class="btn btn-success"><i class="fa fa-edit"></i> New</a>
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</button>
                                    </td>
                                    </tr>
                                    <tr >   
                                    <td> Sport </td>
                                    <td>  <span class="name">53</span> </td>                         
                                    <td> <span class="product">23/11/2021</span> </td>
                                

                                    <td>
                                        <a style="margin-right:10px" href="news-tintuc.php" class="btn btn-info"><i class="fa fa-lightbulb-o"></i> Details    </a>
                                        <a style="margin-right:10px" href="news-giaitri.php" class="btn btn-success"><i class="fa fa-edit"></i> New</a>
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</button>
                                    </td>
                                    </tr>
                                    
                                    

                                     
                                    </tbody>
                                </table>
                            </div> <!-- /.table-stats -->
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
