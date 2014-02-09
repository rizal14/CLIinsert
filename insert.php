<?php
include "konek.php"; 
$query = ("INSERT INTO deployment(db_id,dbversi_id,host_id,dbname_target,stagging) VALUES ('4','1288127179','7','contoh')");
$hasil = mysql_query($query);

?>  
