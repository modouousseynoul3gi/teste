<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_valide = "localhost";
$database_valide = "restauration_royal_creperie";
$username_valide = "root";
$password_valide = "";
$valide = mysql_pconnect($hostname_valide, $username_valide, $password_valide) or trigger_error(mysql_error(),E_USER_ERROR); 
?>