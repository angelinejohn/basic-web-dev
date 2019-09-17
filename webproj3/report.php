<!DOCTYPE html>
<html>
<head>
	<title>Report</title>
	 <link href="bootstrap.min.css" rel="stylesheet">
	 <style type="text/css">
	 	img{
	 		width: 150px;
	 	}
	 	body{
	 		background-image: url(report_background.jpg);
	 		width:100%;
			height: 800px;
	 	}
	 	table, td, th {
    		border: 2px solid black!important;
		}
	 </style>
	
</head>
<body>
	<h1 style="text-align: center;font-weight: bold;">Roster Report</h1>

	    <?php
	   if(!defined('MyConst')){die('<h1 style="text-align:center;color:red">Direct access not premitted! Please login <a href="login.html">Here</a></h1>');}
        $db=  mysqli_connect("opatija.sdsu.edu:3306", "jadrn021", "chair", "jadrn021");


        if(!$db)
       {
           die('not connected');
       }
            $db=  mysqli_query($db, "select * from runner ORDER BY category");

       ?>

	<table class="table table-bordered table-striped">
		<tbody>
			<tr>
				<th>Picture</th>
				<th>Last Name</th>
				<th>First Name</th>
				<th>Age</th>
				<th>Experience</th>
				<th>Category</th>
			</tr>
			<tr>
				<?php
				
             while($row= mysqli_fetch_array($db))
             {
             	
                 ?>
             		<td><?php
					//$pic= "images/" . $_FILES["file"]["name"];
					echo "<img  src='".$row['imgpath']."' />";?> 
				 </td>
               
				<td><?php echo $row['lname']; ?></td>
				<td><?php echo $row['fname']; ?></td>
			
				
				<td><?php 

							$dob = new DateTime($row['year']);
							$today = new DateTime('today');
							echo $dob->diff($today)->y
                           ?></td>
				<td><?php echo $row['explevel']; ?></td>
				<td><?php echo $row['category']; ?></td>
				
			</tr>
			<?php 
			
		}
			?>
			
		</tbody>
	</table>
</body>
</html>