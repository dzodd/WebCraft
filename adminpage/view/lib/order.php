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
                           <h1> <a type="submit" href="Order-new.php" class="btn btn-primary"><i class="fa fa-plus-square"></i> New Order  </a></h1>  
                           
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">    
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Order</a></li>
                                    <li class="active">List Order</li>
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
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Table Dark</strong>
                        </div>
                        <div class="card-body">
                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Init Date</th>
                                        <th scope="col">Term Date</th>
                                        <th scope="col"> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Customer A</td>
                                        <td>20/11/2021</td>
                                        <td>23/11/2021</td>
                                              <td><a style="margin-right:10px" href="order-detail.php?id='.($i+1).'" class="btn btn-info"><i class="fa fa-lightbulb-o"></i> Info</a>
                                             <a style="margin-right:10px" href="order-edit.php?id='.($i+1).'" class="btn btn-success"><i class="fa fa-edit"></i> Edit</a>
                                              <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</button> </td>
                                    </tr>
                                    <tr>
                                    <th scope="row">2</th>
                                        <td>Customer A</td>
                                        <td>20/11/2021</td>
                                        <td>23/11/2021</td>
                                        <td><a style="margin-right:10px" href="order-detail.php?id='.($i+1).'" class="btn btn-info"><i class="fa fa-lightbulb-o"></i> Info</a>
                                             <a style="margin-right:10px" href="order-edit.php?id='.($i+1).'" class="btn btn-success"><i class="fa fa-edit"></i> Edit</a>
                                              <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</button> </td>
                                
                                    </tr>
                                    <tr>
                                    <th scope="row">3</th>
                                        <td>Customer A</td>
                                        <td>20/11/2021</td>
                                        <td>23/11/2021</td>

                                        <td><a style="margin-right:10px" href="order-detail.php?id='.($i+1).'" class="btn btn-info"><i class="fa fa-lightbulb-o"></i> Info</a>
                                             <a style="margin-right:10px" href="order-edit.php?id='.($i+1).'" class="btn btn-success"><i class="fa fa-edit"></i> Edit</a>
                                              <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</button> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
