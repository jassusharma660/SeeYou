<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title>SeeYou | Home</title>
    <meta name="description" content="SeeYou - A new social networking experiance.">
    <meta name="keywords" content="SeeYou,social networking,chatting,follow,profile,share">
    <meta name="author" content="Jassu Sharma">

    <link rel="shortcut icon" href="./assets/images/icons/favicon.ico">
    <link rel="stylesheet" href="./assets/style/master.css">
    <link rel="stylesheet" href="./assets/style/form.css">
    <link rel="stylesheet" href="./assets/style/login.css">

    <script src="./assets/scripts/index.js"></script>
    <script src="./assets/scripts/validation.js"></script>
  </head>

  <body>
    <header>
        <a href="./">
          <img src="./assets/images/logos/logo.svg" alt="see_you!" id="logo">
        </a>
    </header>

    <main>

      <section id="left_pane" class="login_left_pane">
        <h1>Welcome to a new experiences!</h1>
        <span class="blue bold">Login to proceed.</span>
      </section>
      <section id="right_pane" class="login_right_pane">
        <div class="alert">
          <span>!</span><span>We need to verify its you. Please enter your username and password to continue.</span>
        </div>
        <div class="login_form">
          <form method="post" action="./views/home.php" name="loginForm" onsubmit="return validateLogin()">
            <!---Form-Start-Here--->
            <div class="inputFormError" id="usernameInputFormError"></div>

            <div class="input_container">
              <div class="input_icon">
                  <span></span>
                  <img src="./assets/images/icons/email-sign-50.png" alt="user_img">
              </div>
              <div class="input_area">
                <label for="username">Username</label>
                <input type="text" name="username" onblur="validUserName(document.forms['loginForm']['username'])" placeholder="My_Username">
              </div>
            </div>
            <!-------------->
            <div class="inputFormError" id="passwordInputFormError"></div>

            <div class="input_container">
              <div class="input_icon">
                  <span></span>
                <img src="./assets/images/icons/password-50.png" alt="pass_img">
              </div>
              <div class="input_area">
                <label for="password">Password</label>
                <input type="password" name="password" onblur="validPassword(document.forms['loginForm']['password'])" placeholder="*****************">
              </div>

            </div>
            <!-------------->
            <div class="login_form_options">
              <label>
                <input type="checkbox" name="remember" checked>
                <span></span>
                Remember Me
              </label>
              <a href="#" onclick="showPopup(true)">Forgot Password?</a>
            </div>
            <div class="login_form_button bottom_buttons">
              <input type="submit" name="" id="submit" value="Login Now">
              <button type="button" onclick="window.location.href='./views/register.php';" name="register">Create Account</button>
            </div>
            <!-------------->
          </form>
        </div>
      </section>
      <section id="reset_popup">
        <span class="close" onclick="showPopup(false)">✕ Close</span>
        <div id="reset_form">
          <span>Forgot Password?</span>
          Don't Worry! Just type your email.
          <form method="post" action="" name="resetForm" onsubmit="return false">
            <input type="email" name="email" value="" placeholder="Enter your email">
            <button>
              <img src="./assets/images/icons/enter-100.png"/>
            </button>
          </form>
        </div>
      </section>
    </main>
    <footer>
      <span class="developer">Made with <img src="./assets/images/icons/pixel-heart-50.png" alt="love"> by Jassu Sharma</span>
      <span id="copyright"></span>
    </footer>
  </body>

  <script>
    document.getElementById("copyright").innerHTML = "&copy; "+new Date().getFullYear();
  </script>

</html>
