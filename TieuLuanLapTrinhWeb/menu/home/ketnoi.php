<?php
    $servername = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'ql_dk';
    $conn = new mysqli($servername,$user,$password,$dbname,3308);
    $conn->set_charset = 'utf8'; 
?>