<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "Proceeding For Payment";
}else{
    echo "Error";
}
mysqli_select_db($con,'hotel');



$email=$_POST['email'];



$query = "INSERT INTO newsletter (email)
values ('$email')";


$res=mysqli_query($con,$query);



if($res)
   {?>
        <script>alert("Message Send");</script>
        <script type='text/javascript'>document.location='Contact.html'</script>
    
<?php
   }
?>
