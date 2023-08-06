<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="logo"></div>


    <div class="page">
      
        <div class="container">
          <div class="left">
            <!-- <div class="login">Login</div> -->
          </div>
     
          <div class="right">
            <div class="form">
              <form name="Form" method="post" onsubmit="return kontrolEt()" action="http://localhost:3000/login">
              <label for="email">E-Mail</label>
              <input class="yazi-alan" type="email" id="email" name="email">
              <label class="uyari" id="email-uyari"></label>
              <label for="password">Password</label>
              <input class="yazi-alan" type="password" id="passw" name="passw">
              <label class="uyari" id="sifre-uyari"></label><br>
              <!-- <input type="submit" class="btn1" id="submit" value="Login"> -->
              <button style=" margin-left: 47px;" type="submit" class="btn btn-primary btn-lg btn-block">LOGİN</button>
            </form>
            </div>
          </div>
        </div>
      </div>
    
    </div>
    <?php
        session_start();
        if (isset($_SESSION['email']) && $_SESSION['email'] == 'admin@gmail.com') {
          header('Location: admin.php');
          exit;
        }
    ?>
      <script src="script.js"></script>
      <script src="app.js"></script>

</body>
</html>



