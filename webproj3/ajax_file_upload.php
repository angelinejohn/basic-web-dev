<?php
/*
    John, Angeline Flora
    jadrn021
    Project #3
    Fall 2017
*/

    $UPLOAD_DIR = 'imgs/';
    $COMPUTER_DIR = '/home/jadrn021/public_html/proj3/imgs/';
    $fname = $_FILES['img']['name'];
    $message = "";

        
    if($_FILES['img']['error'] > 0) {
        $err = $_FILES['img']['error'];  
        if($err == 4) {
            $message = "Please upload image";
        }
        else
            $message .= "Error Code: $err ";
        }     
             
    else {
        move_uploaded_file($_FILES['img']['tmp_name'], "$UPLOAD_DIR".$fname);
        $message = "Success! Your file has been uploaded to the server</br >\n";
    }         
    echo $message;
?>  

