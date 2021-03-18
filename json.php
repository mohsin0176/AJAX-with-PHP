<?php

include "product.php";
$product=new Product();
$product->id='p1';
$product->name='Product 1';
$product->price= 100;
echo json_encode($product);

?>