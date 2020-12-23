<?php declare(strict_types=1) ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laba 4</title>
  </head>
  <body class="home-page">
  <h1>Лабораторноя работа №4</h1>
       
            <!-- Form login -->


            <div class="login-wrapper__each">


              <h2>Войти</h2>

              <?php
              $name = $_POST['name'];
              $password = $_POST['password'];

              $logins = file_get_contents("logins.txt");

              $logins_array = explode("\n", $logins);
              if ($name && $password) {
                $login_exist = false;
                foreach ($logins_array as $login) {
                  if (trim($login) == $name . '/' . $password) {
                    $login_exist = true;
                  }
                }
              ?>
              
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
    </div>  
  </body>
</html>
