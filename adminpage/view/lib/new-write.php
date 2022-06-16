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
                            <h1> <a href="news-tintuc.php" class="btn btn-primary"><i class="fa fa-undo"></i>  Back  </a></h1>  
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">    
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">User</a></li>
                                    <li class="active">Write Post</li>
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
                            <div class="card-header bg-primary">
                                <strong class="card-title text-light">Write Post </strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="user-controler.php" method="POST"  enctype="multipart/form-data" class="form-horizontal">
                                   
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="User Name " class=" form-control-label">Title</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="txt_username" name="txt_Title" placeholder="Title" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Textarea</label></div>
                                        <div class="col-12 col-md-9"><textarea name="textarea-input" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea></div>
                                    </div>
                                   
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Category</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="Role" id="role" class="form-control-lg form-control">
                                                <option value="0">Please select</option>
                                                <option value="News">News</option>
                                                <option value="Sport">Sport</option>
                                            
                                            </select>
                                    </div>
                                    </div>
                             
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Status</label></div>
                                        <div class="col col-md-9">
                                            <div class="form-check-inline form-check" style="margin-left:-20px">
                                                <label for="inline-checkbox1" class="form-check-label ">
                                                    <input type="radio" id="rdo-male" name="sex" value="male" checked class="lbs">Public
                                                </label>
                                                <label for="inline-checkbox2" class="form-check-label ">
                                                    <input type="radio" id="rdo-female" name="sex" value="female" style="margin-left:40px" class="lbs">Private
                                                </label>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Upload Image</label></div>
                                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="file_avatar" class="form-control-file"></div>
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
                            <!-- /.table-stats -->
                        </div>
                    </div>
        </div>.content -->

<div class="clearfix"></div>

<?php include "Layouts/footeradmin.php"?>

</div><!-- /#right-panel -->

<!-- Right Panel -->

<!-- Scripts -->
<?php include "Layouts/scripadmin.php"?>


</body>
</html>
