
<!DOCTYPE html>
<html>
<head>
	<title> Login & Registration </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>
<body>
  <div class="cont">
  <form action="signinprocess.php" method="POST">
   <div class="form sign-in">
      <h2>Sign In</h2>
      <label>
        <span>Email Address</span>
        <input type="email" name="email">
      </label>
      <label>
        <span>Password</span>
        <input type="password" name="password" id="pwd">
      </label>
      <button class="button" type="submit" name="signin">Sign In</button>
      
    </div>
    </form>

    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>New here?</h2>
          <p>Sign up and discover great amount of new opportunities!</p>
        </div>
        <div class="img-text m-in">
          <h2>One of us?</h2>
          <p>If you already has an account, just sign in. We've missed you!</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>
      
      <div class="form sign-up" >
      <form action="regis.php" method="post">
        <h2>Sign Up</h2>
        <label>
          <span>Name</span>
          <input type="text" name="name">
        </label>
        <label>
          <span>Email</span>
          <input type="text" name="email">
        </label>
        <label>
          <span>Password</span>
          <input type="password" name="password" id="password">
        </label>
        <label>
          <span>Confirm Password</span>
          <input type="password" name="password1" id="confirm_password">
        </label>
        <div>
        <button type="submit" class="button">Sign Up Now</button>
      
      </form>
      
      </div>
    </div>
  </div>
<script type="text/javascript" src="script.js"></script>
<script>

var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
</body>
</html>