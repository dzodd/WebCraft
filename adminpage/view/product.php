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
                           <h1> <a type="submit" href="product-new.php" class="btn btn-primary"><i class="fa fa-plus-square"></i> New Product  </a></h1>  
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">    
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Product</a></li>
                                    <li class="active">Product List</li>
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
                                <strong class="card-title">Product List</strong>
                            </div>
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th class="ID">#</th>
                                            <th >Product</th>
                                          
                                            <th>Name</th>
                                            <th>details</th>
                                            <th>Status</th>
                                            <th>Quantity</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        for ($i =0 ; $i<5 ;$i++){
                                        echo'<tr >';     
                                        echo'<td class="ID">'.($i+1).'</td>';
                                        echo'<td class="avatar">';
                                        echo'<div class="round-img">';
                                        echo'        <a href="#"><img class="rounded-circle" src="images/avatar/1.jpg" alt=""></a>';
                                        echo' </div>';
                                        echo'</td>';
                                        echo'<td>  <span class="name">Chess table</span> </td>';                         
                                        echo'<td> <span class="product">Bàn cờ vua thủ công</span> </td>';
                                        echo'<td>';
                                        echo'<span class="badge badge-complete">Còn hàng</span>';
                                        echo'</td>';
                                        echo'<td>  <span class="name"> 12 </span> </td>'; 
                                        echo'<td>';
                                        
                                        echo'<a style="margin-right:10px" href="product-detail.php?id='.($i+1).'" class="btn btn-info"><i class="fa fa-lightbulb-o"></i> Info</a>';
                                        echo'<a style="margin-right:10px" href="product-edit.php?id='.($i+1).'" class="btn btn-success"><i class="fa fa-edit"></i> Edit</a>';
                                        echo'<button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</button>'; 
                                        echo'</td>';
                                        echo'</tr>';
                                    }
                                     ?>

                                     
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
