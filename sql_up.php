<?php
include "koneksi.php"; 
mysql_select_db('ssodb');
$query = "DELETE FROM tabel1
        WHERE db_id=2";
echo $query;
mysql_query($query) or die(mysql_error()); 


?>  

