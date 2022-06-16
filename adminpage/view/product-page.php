<!doctype html>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
    <!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
    <?php include"Layouts/headeradmin.php"?>
    <?php include"../utils/Login-session.php"?>
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
                            <h1> <a type="submit" href="product-new.php" class="btn btn-outline-success"   ><i class="ti-pencil-alt"></i> New Product  </a></h1>  
                            
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="page-header float-right">
                                <div class="page-title">    
                                    <ol class="breadcrumb text-right">
                                        <li><a href="user-page.php">Dashboard</a></li>
                                        <li><a href="#">Product</a></li>
                                        <li class="active">List of Product</li>
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
                                    <strong class="card-title">List of Product</strong>
                                </div>
                                <?php
                                include_once('../utils/connection.php');
                                include('../controller/user-controller.php');
                                $sql = "SELECT * FROM product , category where product.cate_id=category.cate_id";
                                if ($result = mysqli_query($conn,$sql)){
                                    if(mysqli_num_rows($result)>0){
                                        
                                
                                    echo'<div class="table-stats order-table ov-h">';
                            echo'  <table class="table ">';
                                    echo'<thead>';
                                            echo'<tr>';
                                            
                                                echo'<th class="avatar">Image</th>';
                                                echo'<th>ID</th>';
                                                echo'<th>Product Name</th>';
                                                echo'<th>Price</th>';
                                            
                                                echo' <th>Cate Name</th></th>';
                                                echo' <th>Action</th>';
                                               
                                            echo'</tr>';
                                            echo'</thead>';
                                    
                                            echo'<tbody>';
                                            while($row=mysqli_fetch_array($result)){
                                            echo"<tr >";
                                            

                                        
                                
                                        
                          
                                    
                                      

                                            echo' <td class="avatar">';
                                            echo'  <div class="round-img">';
                                          //  <img src="../view/images/Avatar/<?php echo $row["avatar"]; 
                                            echo" <img class='rounded-circle' src= ../product_image/". $row['product_image'] ." alt=''> ";
                                            echo'    </div>';
                                            echo'   </td>';
                                            echo" <td> " . $row['product_id'] . "</td>";
                                            echo"  <td>  <span class='name'>" . $row['product_name'] . "</span> </td>               ";          
                                            echo"   <td> <span class='email'>" . $row['price'] . "</span> </td>";
                                          
                                            echo"   <td> <span class='sex'>" . $row['cate_name'] . "</span> </td>";
                                            
                                            echo'    <td>';
                                            echo"    <a style'margin-right:10px' href='product-detail.php?id=".$row['product_id']."' class='btn btn-outline-info btn-lg'><i class='fa fa-lightbulb-o'></i> Info</a>";
                                            echo"    <a style'margin-right:10px' href='product-edit.php?id=".$row['product_id']."' class='btn btn-outline-secondary btn-lg'><i class='fa fa-edit'></i> Edit</a>";
                                            echo"    <a style'margin-right:10px' href='../view/deleteProduct.php?id=".$row['product_id']."' class='btn btn-outline-danger btn-lg'><i class='fa fa-trash-o'></i> Delete</a>";
                                        
                                            echo'  </td>';
                                            echo'   </tr>';
                                    

                                        }
                                            echo'</tbody>';
                                    
                                            echo'  </table>';
                                            echo'   </div> <!-- /.table-stats -->';
                            }
                                    
                        }
                                ?>
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