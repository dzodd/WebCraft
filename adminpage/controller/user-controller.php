<?php
function checkStatus ($status)
{
    if ($status ==1){
        $status="&nbsp Active &nbsp";
    }
    else
       { $status="Inactive";}
return $status;
}

function changeColor($status)
{   $color= 'btn btn-success btn-sm'   ;
    if($status==1){
        return $color;
    }
    else{
        $color='btn btn-warning btn-sm'; 
        return $color;
    }
}

?>
