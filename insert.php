<?php

include('config.php') ;


if(isset($_POST['upload'])){
    
$PRICE = $_POST['price']; 
$DETAILS = $_POST['details'];
$PLACE = $_POST['place'];

$filename = $_FILES['image']['name'];
$filetmpname = $_FILES['image']['tmp_name'];
$folder = "image/";
move_uploaded_file($filetmpname, $folder.$filename);


$insert = "INSERT INTO card ( price, details , place , image  ) VALUES ( '$PRICE','$DETAILS','$PLACE','$filename')";
mysqli_query($con , $insert);
if(move_uploaded_file($image_location,'image/'. $image_name)){
    echo"<script>alert('تم رفع العقار بنجاح')</script>";
}else{
    echo"<script>alert('حدث مشكلة لم يتم رفع العقار')</script>";
}
header('location: add.php');


}
?>


