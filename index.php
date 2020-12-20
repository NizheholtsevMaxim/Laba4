<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laba 2</title>
    <link media="all" rel="stylesheet" href="styles.css">
    <link media="all" rel="stylesheet" href="calculator.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Istok+Web:400,400italic,700,700italic" type="text/css">
    <style>
      body {
        margin: 0;
        color: #7e7e7e;
        font: 17px/1.412 "Istok Web", "Arial", "Helvetica", sans-serif;
        background: #f9f9f9;
        overflow-y: scroll;
        min-width: 320px;
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: none;
      }
    </style>
  </head>
  <body class="home-page">
    <div id="wrapper">
      <header id="header">
        <div class="panel">
          <div id='header-container' class="container">
            <strong class="logo"><a href="#">Laba 2</a></strong>
            <ul>
              <li><a href="#">Home</a></li>
            </ul>
          </div>
        </div>
        <div class="hero">
          <div class="img">
            <div class="s1">
              <div class="s2" style="background: url('images/banner.jpg') no-repeat 0 0; background-size: cover; width: 100%; height: 300px; display:flex; justify-content: center; align-items: center; color: #fff;">
                <h1>Лабораторное работа №4</h1>
              </div>
            </div>
          </div>

        </div>
        <div class="navigation">
          <nav>
            <ul>
              <li class="active"><a href="#">Пункт 1</a></li>
              <li><a href="#">Пункт 2</a></li>
              <li><a href="#">Пункт 3</a></li>
              <li><a href="#">Пункт 4</a></li>
            </ul>
          </nav>
        </div>
      </header>
      <div id="main">

        <div id='var-7' class="container">
          <h1 class="hide">Вариант №7</h1>
          <div class="holder">
            <!-- Form login -->


            <div class="login-wrapper__each">


              <h2>Войти</h2>

              <?php
              $name = $_POST['name'];
              $password = $_POST['password'];

              $logins = file_get_contents("logins.txt");

              $logins_array = explode("\n", $logins);
              print  $name . '/' . $password;
              print ';';
print_r($logins_array);
              if ($name && $password) {
                $login_exist = false;
                foreach ($logins_array as $login) {
                  if ($login == $name . '/' . $password) {
                    $login_exist = true;
                  }
                }
              }
              ?>
              
              <?php if ($name && $password) { ?>
                <?php if ($login_exist) { ?>
                  <div class="message success">
                    <p>Вы залогинены!</p>
                  </div>
                <?php } else { ?>
                  <div class="message error">
                    <p>Извините, но имя и пароль не существуют..</p>
                  </div>
                <?php } ?>
              <?php } ?>
              
              <form class="login" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">


                <p class="form-row">
                  <input type="text" class="input-text" name="name" id="name" placeholder="Логин" value="<?php print $_POST['name'] ?>">
                </p>
                <p class="form-row">
                  <input class="input-text" type="password" name="password" id="password" placeholder="Пароль" value="<?php print $_POST['password'] ?>">
                </p>
                <p class="form-row">
                  <button type="submit" class="button" name="login" value="Sign In">Войти</button>
                </p>


              </form>


            </div>




          </div>
        </div>
      </div>
      <footer id="footer">
        <ul>
          <li>© Copyright 2020 Maxim</li>
        </ul>
      </footer>
    </div>  
  </body>
</html>
