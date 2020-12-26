<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "Proceeding For Payment";
}else{
    echo "Error";
}
mysqli_select_db($con,'hotel');


$name=$_POST['name'];
$email=$_POST['email'];
$mobile = $_POST['mobile'];
$guests = $_POST['guests'];
$room = $_POST['room'];
$cab = $_POST['cab'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];


$query = "INSERT INTO tri (name,email,mobile,guests,room,cab,checkin,checkout)
values ('$name','$email','$mobile','$guests','$room','$cab','$checkin','$checkout')";


$res=mysqli_query($con,$query);



if($res)
   {?>
        <script>alert("Booking Confirmed");</script>
        <script type='text/javascript'>document.location='payment.html'</script>
    
<?php
   }
?>
