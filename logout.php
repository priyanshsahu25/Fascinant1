<?php session_start();
if(empty($_SESSION['id'])):
    header('Location:login.php');
endif;
?>
<!DOCTYPE html>
<html>
<body>
    <div style="width:150px;margin:auto;height:500px;margin-top:300px">

    <?php 
     include('databaseconnection.php');
     
     session_destroy();
    

     echo '<meta http-equiv="refresh" content="2;url=index.php">';
     
     echo '<span class="itext">Logging out please wait!...</span>';

    ?>
    </div>

</body>
</html>