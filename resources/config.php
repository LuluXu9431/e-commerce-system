<?php
    
ob_start();//send the request to php

session_start();
session_destroy();


defined("DS") ? null:define("DS",DIRECTORY_SEPARATOR);

defined("TEMPLATE_FRONT") ? null:define("TEMPLATE_FRONT",__DIR__.DS."templates/front");
defined("TEMPLATE_BACK") ? null:define("TEMPLATE_BACK",__DIR__.DS."templates/back");
//echo TEMPLATE_FRONT;
 //echo _DIR_ ;//the whole path
//echo _FILE_;
    
defined("DB_HOST") ? null:define("DB_HOST","localhost");  
defined("DB_USER") ? null:define("DB_USER","root"); 
defined("DB_PASS") ? null:define("DB_PASS","root"); 
defined("DB_NAME") ? null:define("DB_NAME","ecom_db"); 


$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

//require_once("functions.php");//include everything :functions ;require it here     
    
    
 require_once("functions.php");   
 require_once("cart.php");     
    
    
?>