<?php
function path($path,$data=""){
   if($data){
   	extract($data);
   }
   include 'view/layout.php';
 }
 ?>