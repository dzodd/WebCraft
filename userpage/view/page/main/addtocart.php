<?php 
session_start();
include('../../connect.php');
//session_destroy();
//thêm số lượng
if (isset($_GET['add'])) {
    $id=$_GET['add'];
    foreach($_SESSION['cart'] as $cart_item){
        if ($cart_item['id']!=$id) {
             $product[]=array('product_name'=>$cart_item['product_name'],'id'=>$cart_item['id'],'quantity'=>$cart_item['quantity'],'price'=>$cart_item['price'],'product_image'=>$cart_item['product_image']);
             $_SESSION['cart']=$product;
        }else{
            $addquantity = $cart_item['quantity']+1;
            if ($cart_item['quantity']<=9) {
                $product[]=array('product_name'=>$cart_item['product_name'],'id'=>$cart_item['id'],'quantity'=>$addquantity,'price'=>$cart_item['price'],'product_image'=>$cart_item['product_image']);
            }else{
                $product[]=array('product_name'=>$cart_item['product_name'],'id'=>$cart_item['id'],'quantity'=>$cart_item['quantity'],'price'=>$cart_item['price'],'product_image'=>$cart_item['product_image']);
            }
            $_SESSION['cart']=$product;
        }   
    }
    header('Location:../../index.php?manage=cart');
}
//trừ sản phẩm
if (isset($_GET['remove'])) {
    $id=$_GET['remove'];
    foreach($_SESSION['cart'] as $cart_item){
        if ($cart_item['id']!=$id) {
             $product[]=array('product_name'=>$cart_item['product_name'],'id'=>$cart_item['id'],'quantity'=>$cart_item['quantity'],'price'=>$cart_item['price'],'product_image'=>$cart_item['product_image']);
             $_SESSION['cart']=$product;
        }else{
            $addquantity = $cart_item['quantity']-1;
            if ($cart_item['quantity']>1) {
                $product[]=array('product_name'=>$cart_item['product_name'],'id'=>$cart_item['id'],'quantity'=>$addquantity,'price'=>$cart_item['price'],'product_image'=>$cart_item['product_image']);
            }else{
                $product[]=array('product_name'=>$cart_item['product_name'],'id'=>$cart_item['id'],'quantity'=>$cart_item['quantity'],'price'=>$cart_item['price'],'product_image'=>$cart_item['product_image']);
            }
            $_SESSION['cart']=$product;
        }   
    }
    header('Location:../../index.php?manage=cart');
}
//xóa sản phẩm
if (isset($_SESSION['cart'])&&isset($_GET['delete'])) {
    $id=$_GET['delete'];
    foreach($_SESSION['cart'] as $cart_item){
        if ($cart_item['id']!=$id) {
            $product[]=array('product_name'=>$cart_item['product_name'],'id'=>$cart_item['id'],'quantity'=>$cart_item['quantity'],'price'=>$cart_item['price'],'product_image'=>$cart_item['product_image']);
        }
        $_SESSION['cart']=$product;
        header('Location:../../index.php?manage=cart');
    }
}
//xóa tất cả
if (isset($_GET['deleteall'])&&$_GET['deleteall']==1) {
    unset($_SESSION['cart']);
    header('Location:../../index.php?manage=cart');
}
//thêm sản phẩm vào giỏ hàng
if (isset($_POST['addtocart'])) {
    $id=$_GET['idproduct'];
    $quantity=1;
    $sql="SELECT * FROM product WHERE product_id='".$id."' LIMIT 1";
    $query=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($query);
    if($row){
        $new_product=array(array('product_name'=>$row['product_name'],'id'=>$id,'quantity'=>$quantity,'price'=>$row['price'],'product_image'=>$row['product_image']));
        //kiểm tra session giỏ hàng đã tồn tại hay chưa
        if(isset($_SESSION['cart'])){
            $found = false;
            foreach($_SESSION['cart'] as $cart_item){
            	//nếu trùng dữ liệu sẽ dùng array_merga để gộp 2 dữ liệu lại với nhau
                if($cart_item['id']==$id){
                    $product[]=array('product_name'=>$cart_item['product_name'],'id'=>$cart_item['id'],'quantity'=>$quantity+1,'price'=>$cart_item['price'],'product_image'=>$cart_item['product_image']);
                    $found = true;
                }else{
                	//nếu dữ liệu không trùng
                    $product[]=array('product_name'=>$cart_item['product_name'],'id'=>$cart_item['id'],'quantity'=>$cart_item['quantity'],'price'=>$cart_item['price'],'product_image'=>$cart_item['product_image']);
                }
            }
            if ($found == false) {
            	//liên kết dữ liệu new_product với product
            	$_SESSION['cart']=array_merge($product,$new_product);
            }else{
            	//nếu session cart không tồn tại mảng product sẽ được tạo
            	$_SESSION['cart']=$product;
            }
        }else{
            $_SESSION['cart']=$new_product;
        }
    }
    header('Location:../../index.php?manage=cart');
}
 ?>