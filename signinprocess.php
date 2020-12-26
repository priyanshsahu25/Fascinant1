<?php session_start();

include('databaseconnection.php');

if(isset($_POST['signin']));
{
    $user_valid=$_POST['email'];
    $pass_valid=$_POST['password'];

    $email = mysqli_real_escape_string($con,$user_valid);
    $password = mysqli_real_escape_string($con,$pass_valid);

    $query=mysqli_query($con,"SELECT * from hotel1 where email='$email' and password='$password'")
    or die(mysqli_error($con));

    $row=mysqli_fetch_array($query);

    $name=$row['name'];
    $password=$row['password'];
    $email = $row['email'];
    $password1 = $row['password1'];
   
    //$role= $row['role'];


    $counter=mysqli_num_rows($query);
    $id=$row['id'];

    if ($counter == 0)
    {
       echo "<script type='text/javascript'>alert('Invalid Usrename or Password!');
       document.location='login.php'</script>";
    }
    else
    {   if($row["role"]=="admin")
        {
           $_SESSION['id']=$id;
           header('Location: display.php');
        }
       else{

       

       $_SESSION['id']=$id;
       
       $_SESSION['password']=$password;
       
    
       $_SESSION['name']=$name;
   
       $_SESSION['email']=$email;
       


       echo "<script type='text/javascript'>alert('sigin sucessfully');document.location='index1.php'</script>";
    }

}
}

?>
          
