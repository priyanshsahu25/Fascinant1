<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "Registration successful";
}else{
    echo "Error";
}
mysqli_select_db($con,'hotel');


$name=$_POST['name'];
$password=$_POST['password'];
$email = $_POST['email'];
$password1 = $_POST['password1'];

$query = "INSERT INTO hotel1 (name,email,password,password1)
values ('$name','$email','$password','$password1')";


$res=mysqli_query($con,$query);



if($res)
   {?>
        <script>alert("Signup sucessfully");</script>
        <script type='text/javascript'>document.location='login.php'</script>
    
<?php
   }
?>
