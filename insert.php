<?php
include "konek.php"; 
$query = ("INSERT INTO `deployment`(`db_id`, `dbversi_id`, `host_id`, `dbname_target`, `staging`, `is_deploy`, `last_modif`, `username_modif`) VALUES (2,1388127176,7,2,null,0,2014-02-14,1)");
echo $query;
mysql_query($query) or die(mysql_error()); 
//$hasil = mysql_query($query);

?>  
