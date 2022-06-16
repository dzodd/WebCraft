
<!DOCTYPE html>
<html lang="en">
<head>
<?php include "../controller/detailCategoryn.php" ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row"> 
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>
                            Delete Record
                        </h1>
                    </div>
                <form action="../controller/categorynDelete.php" method="post"> 
                    <div class="alert alert-danger fade in">
                        <input type="hidden" name="id" value="<?php echo $row["caten_id"];?>"/>
                        <input type="hidden" name="ava" value="<?php echo $row["caten_name"];?>"/>
                        <p>
                            Are you sure you want to delete this record ?
                        </p><br>
                        <p>
                            <input type="submit" value"Yes" class="btn btn-danger">
                            <a href="../view/user-page.php" class="btn btn-default"> No </a>
                        </p>
                    </div>
                </form>                    
                </div>
            </div> 
 
        </div>
    </div>
    
</body>
</html>
