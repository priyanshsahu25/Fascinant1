<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "submitted";
}else{
    echo "Error";
}
mysqli_select_db($con,'hotel');


$name=$_POST['name'];
$email=$_POST['email'];
$subject = $_POST['subject'];
$msgg = $_POST['msgg'];


$query = "INSERT INTO msg (name,email,subject,msgg)
values ('$name','$email','$subject','$msgg')";


$res=mysqli_query($con,$query);



if($res)
   {?>
        <script>alert("Message Send");</script>
        <script type='text/javascript'>document.location='Contact.html'</script>
    
<?php
   }
?>
