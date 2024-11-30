<?php
 define('SEU_HOST', 'localhost');
 define('SEU_USER', 'root');
 define('PASS', '');//se tiver senha coloque-a entre as aspas simples
 define('SEU_DB','SEU_BANCO');//coloque sua DATABASE

 $conn= new mysqli(HOST,USER,PASS,DB);

 /*
 if($conn==true){
    print "Conseguiu conectar";
}else{
    print "Não conectou";
}
    */
?>