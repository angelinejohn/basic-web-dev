<?php

if($_GET) exit;
if($_POST) exit;

//$user = array('ariggins','cs545','smith','tester');
$pass = array('sdsu','fall2017','abc123','cs545');

#### Using SHA256 #######
$salt='$5$R$4%^gj9@9i8mf65';  # 12 character salt starting with $1$

for($i=0; $i<count($pass); $i++) 
        echo crypt($pass[$i],$salt)."\n";
?>