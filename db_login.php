<?php 
 
const HOSTNAME = 'localhost'; // server navn
const MYSQLUSER = 'root'; // super bruger (remote har man særskilte database brugere)
const MYSQLPASS = 'root'; // bruger password
const MYSQLDB = 'mul_b'; // database navn 


$con = new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);

$con->set_charset('utf-8');


if($con->connect_error){ 
	die($con->connect_error);
}else {
	echo 'Du er forbundet';
}
