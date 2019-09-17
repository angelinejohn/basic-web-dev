<!DOCTYPE html>
<html>
<head>
	   <!--
        John, Angeline Flora
        Jadrn021
        Project #3
        Fall 2017
    -->
	<title>Confirmation</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>SDSU Marathon</title>

    
    <link href="bootstrap.min.css" rel="stylesheet">

   
    <link href="font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>



    <link href="marathon.css" rel="stylesheet">
    <script src="jquery.min.js"></script>
    <script src="popper.min.js"></script>
    
    <script src="marathon.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="jquery.easing.min.js"></script>

    <script>
        $(document).ready(function () {
            $('body').scrollspy({ target: ".navbar", offset: 50 });
        });
    </script>
	
</head>
<body id="page-top">


    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="index.html">SDSU Marathon</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">            
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.html#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="forms.html">Sign Up</a>
                    </li>            
                </ul>
            </div>
        </div>
    </nav>
    <div> 
        <h1 id="pad">You have registered successfully!!Enjoy the run!</h1>
    </div>

<?php
echo <<<ENDBLOCK

    <table>
        <tr>
            <td colspan="2">Thank you for registering, $params[1]!</td>
        </tr>
        <tr>
            <td style="font-weight:bold;">Fields</td>
            <td style="font-weight:bold;">Values</td>
        </tr>
        <tr>
            <td>Middlename</td>
            <td>$params[2]</td>
        </tr>
        <tr>
            <td>Lastname</td>
            <td>$params[3]</td>
        </tr>
        <tr>
            <td>Address 1</td>
            <td>$params[4]</td>
        </tr>
        <tr>
            <td>Address 2</td>
            <td>$params[5]</td>
        </tr>
        <tr>
            <td>City</td>
            <td>$params[6]</td>
        </tr> 
        <tr>
            <td>State</td>
            <td>$params[7]</td>
        </tr> 
        <tr>
            <td>Zip Code</td>
            <td>$params[8]</td>
        </tr> 
        <tr>
            <td>Area Code</td>
            <td>$params[13]</td>
        </tr> 
        <tr>
            <td>Phone Prefix</td>
            <td>$params[14]</td>
        </tr> 
        <tr>
            <td>Phone Number</td>
            <td>$params[15]</td>
        </tr> 
        <tr>
            <td>Email</td>
            <td>$params[12]</td>
        </tr> 
        <tr>
            <td>Gender</td>
            <td>$params[16]</td>
        </tr> 
        <tr>
            <td>Date of Birth</td>
            <td>$params[9].$params[10].$params[11]</td>
        </tr> 
          <tr>
            <td>Level</td>
            <td>$params[17]</td>
        </tr> 
        <tr>
            <td>Category</td>
            <td>$params[18]</td>
        </tr>
        <tr>
            <td> Image </td>
            <td>$params[0]</td>
        </tr>
        <tr>
            <td>Medical Condition</td>
            <td>$params[19]</td>
        </tr> 
    </table>                          
ENDBLOCK;
?>
</body>
</html>