<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Login</title>
	<meta http-equiv="content-type" 
		content="text/html;charset=utf-8" />                 
<style type="text/css">
h1, h2 { text-align: center; }
input { margin: 5px; }
#message_line { color: red; }
</style>             	
</head>
<body>

<?php

//$user = $_POST['user'];
$pass = $_POST['pass'];
$valid = false;

$raw = file_get_contents('password.dat');
$data = explode("\n",$raw);
foreach($data as $item) {
    //$pair = explode('=',$item);
    if(crypt($pass,$item) === $item) 
            $valid = true;            
    }  #end foreach
    
    
if($valid){
    //echo "<h3 style='color:blue;'>Login Successful!</h3>";
    define('MyConst', TRUE);
   include 'report.php';
}
else{
    echo "<h3 style='color:red;text-align:center;'>Login Unsuccessful!</h3>";  
}

?>
</body>
</html>