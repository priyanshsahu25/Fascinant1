<?php 
include_once('databaseconnection.php'); 
error_reporting(0);
$query="SELECT * FROM msg;"; 
$result=mysqli_query($con,$query);
 
?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<title> Fetch Data From Database </title> 
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	</head> 
	<body> 
	<table class="table table-dark table-bordered table-hover"> 
	<tr> 
		<th colspan="12"><h2 style="text-align: center;">Messages From Users</h2></th> 
		</tr> 

			  <th> Name </th> 
			  <th> Email </th> 
			  <th> Subject </th> 
			  <th> Message </th> 
			 
			    
			  
		</tr> 
		
		<?php 
		while($row=mysqli_fetch_array($result)) 
		{ 
		?> 
		<tr> <td><?php echo $row['name']; ?></td> 
		<td><?php echo $row['email']; ?></td> 
		<td><?php echo $row['subject']; ?></td>
		<td><?php echo $row['msgg']; ?></td> 
	
		 
		</tr> 
	<?php 
               } 
          ?> 

	</table> 

	<div style="text-align: center;"><button class="btn btn-dark"onclick="window.location.href='display.php';" style="width: 150px; ">Exit</button></div>
	</body> 
	</html>