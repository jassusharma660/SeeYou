<?php
// Initialize the session
session_start();

// Check if the user is already logged in,
// if yes then redirect him to dashboard page

if(isset($_SESSION["logged"]) && $_SESSION["logged"] === true){
    header("location: ./views/");
    exit;
}
if(isset($_GET['action']) && $_GET['action'] === "registerSuccess")
  echo ("<div style='color:#fff;background-color:#4caf50;padding: 0.5%;position:fixed;width:100%;'>You are successfully registered! Login now.</div>");


include_once "./core/config.php";
include_once "./core/helper.php";

$username = $password = "";
$error = "";
if (!isset($_SESSION['attempts']))
  $_SESSION['attempts'] = 0;

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if(isset($_POST['username']) && isset($_POST['password'])) {
    if(isUsernameValid("validate") && isPasswordValid("pass")) {
      $sql = "SELECT uid, pass, status from userlogindata WHERE uid=?";

      if($stmt = mysqli_prepare($con, $sql)) {
        mysqli_stmt_bind_param($stmt,"s",$_POST['username']);

        if(mysqli_stmt_execute($stmt)) {
          // Store result
          mysqli_stmt_store_result($stmt);
          if(mysqli_stmt_num_rows($stmt) === 1) {
            $password = $_POST['password'];
            mysqli_stmt_bind_result($stmt, $username, $hashed_password, $status);

            if(mysqli_stmt_fetch($stmt)) {
              if($_SESSION['attempts']<4 && $status === "active") {

                if(password_verify($password, $hashed_password)) {
                  session_destroy();
                  session_start();
                  $_SESSION['logged'] = true;
                  $_SESSION['username'] = $username;
                  header('location: ./views/home.php');
                }
                else {
                  $_SESSION['attempts'] += 1;
                  $error .= "Only ".(5-$_SESSION['attempts'])." attempts left! After that you will have to reset your password.";
                }
              }
              else {
                $error .= "Too many attempts! Please click on Forgot Password.";
                $sql_block = "UPDATE userlogindata SET status = 'blocked' WHERE uid=?";
                $stmt_block = mysqli_prepare($con, $sql_block);
                mysqli_stmt_bind_param($stmt_block, "s", $username);
                mysqli_stmt_execute($stmt_block);

                mysqli_stmt_close($stmt_block);
              }
            }
            else
              $error .= "Someting went wrong. Try again.";
          }
          else
            $error .= "You are not registered! Create an account first.";
        }
        else
          $error .= "Someting went wrong. Try again.";
        mysqli_stmt_close($stmt);
      }
      else
        $error .= "Someting went wrong. Try again.";
      mysqli_close($con);
    }
  }
  else
    $error .= "Invalid request! Please reload the page and try agin.";
}
?>

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
        <img src="./assets/images/pictures/login.svg" width="100%"/>
        <h1>Welcome to a new experiences!</h1>
        <span class="blue bold">Login to proceed.</span>
      </section>
      <section id="right_pane" class="login_right_pane">
        <div class="alert">
          <span>!</span><span>We need to verify its you. Please enter your username and password to continue.</span>
        </div>
        <?php if(!empty($error)) { ?>
        <div id="server_side_error">
          <?= $error ?>
        </div>
        <?php } ?>
        <div class="login_form">
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" name="loginForm" onsubmit="/*return validateLogin()*/">
            <!---Form-Start-Here--->
            <div class="inputFormError" id="usernameInputFormError"></div>

            <div class="input_container">
              <div class="input_icon">
                  <span></span>
                  <img src="./assets/images/icons/email-sign-50.png" alt="user_img">
              </div>
              <div class="input_area">
                <label for="username">Username</label>
                <input type="text" name="username" onblur="validUserName(document.forms['loginForm']['username'])" placeholder="My_Username" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['username'])) echo $_POST['username'];?>">
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
