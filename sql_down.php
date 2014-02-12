<?php
include "koneksi.php"; 
mysql_select_db('ssodb');
$query = "alter table tabel1 add column alamat varchar (20) ; ";
echo $query;
mysql_query($query) or die(mysql_error()); 

?>  

