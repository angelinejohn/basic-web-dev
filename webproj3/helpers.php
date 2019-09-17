<?php

/*
    John, Angeline Flora
    jadrn021
    Project #3
    Fall 2017
*/

$bad_chars = array('$','%','?','<','>','php');
$UPLOAD_DIR = 'imgs/';

function check_post_only() {
console.log("Entered check post only");
if(!$_POST) {
    write_error_page("This scripts can only be called from a form.");
    exit;
    }
}

function write_error_page($msg) {
    write_header();
    echo "<div id=\"message_line\">Sorry, an error occurred<br />",
    $msg,"</h2>";
    write_footer();
    }
    
function write_header() {
print <<<ENDBLOCK
<!DOCTYPE html>
<html>
<head>
    <!--
        John, Angeline Flora
        Jadrn021
        Project #3
        Fall 2017
    -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>SDSU Marathon</title>

    <link href="marathon.css" rel="stylesheet">
    <script src="jquery.min.js"></script> 
    <script src="jsValidationSnippet.js"></script>
    <script type="text/javascript" src="ajax_get_lib.js"></script> 

</head>
ENDBLOCK;
}

function write_footer() {
    echo "</html>";
    }
    
function get_db_handle() {
    //echo "in get_db_handle function";
    $user = 'jadrn021';
    $pass = 'chair';
    $database = 'jadrn021'; 
    $server = 'opatija.sdsu.edu:3306';
        
    if(!($db = mysqli_connect($server, $user, $pass, $database))) {
        write_error_page('SQL ERROR: Connection failed: '.mysqli_error($db));
        }
        //echo "connection succesffil";
    return $db;
    }        
       
function close_connector($db) {
    mysqli_close($db);
    }
    
?>