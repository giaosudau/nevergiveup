<?php

$conn=  mysql_connect("localhost", "root", "");
mysql_select_db("chanh", $conn) or die("khong ket noi co so du lieu");
mysql_query('set names "utf8"'); 
?>
