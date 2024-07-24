<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register| Certificate</title>
  <link rel="stylesheet" href="styles.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <div class="wrapper">
    <form action="dashboard.php" method="post" >
      <h1>Login</h1>
      <div class="input-box">
        <input name="fullname" type="text" placeholder="Fullname" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input name="username" type="text" placeholder="Username" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input  name="password" type="password" placeholder="Password" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <div class="input-box">
      
        <select name="state"  required class="select" >
        <option selected disabled value="">Choose...</option>
        <option name="State" value="ibadan">Oyo</option>
                      <option  name="State" value="Ondo">Ondo</option>
                      <option  name="State" value="Osun">Osun</option>
                      <option  name="State" value="Akwa-ibom">Akwa-Ibom</option>
                      <option  name="State" value="Edo">Edo</option>
                      <option  name="State" value="ibadan">Ibadan</option>
                      <option  name="State" value="Lagos">Lagos</option>
                      <option name="State" value="Kwara">Kwara</option>
                      <option name="State" value="Abuja">Abuja</option>
                      <option  name="State" value="Kogi">Kogi</option>
        </select>
        
      </div> 
      <div class="remember-forgot">
        <label><input name="checkbox" type="checkbox">Remember Me</label>
        <a href="#">Forgot Password</a>
      </div>
      <button type="submit" class="btn">Login</button>
      <div class="register-link">
        <p>Dont have an account? <a href="#">Register</a></p>
      </div>
    </form>
  </div>
</body>
</html>