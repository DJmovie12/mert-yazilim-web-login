<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 <?php
    // session_start();
    // if (!isset($_SESSION['email']) || $_SESSION['email'] != 'admin@gmail.com') {
    //   // Kullanıcı yetkisi yoksa login sayfasına yönlendirilir
    //   header('Location: login.php');
    //   exit;
    // }

?> 
    <div class="logo"></div>

    <div class="page">
      
        <div class="container">
          <div class="left">
          </div>
     
          <div class="right">
            <div class="form">
              <form name="Form" method="post" action="http://localhost:3000/register">
              <label for="email">E-Mail</label>
              <input class="yazi-alan" type="email" id="email" name="email">
              <label for="password">Password</label>
              <input class="yazi-alan" type="password" id="passw" name="passw">
              <button style=" margin-left: 47px;" type="submit" class="btnregister">Register</button>
            </form>
            </div>
          </div>
        </div>
      </div>
    
    </div>

      <script src="app.js"></script>
</body>
</html>