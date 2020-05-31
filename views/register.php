<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="SeeYou - A new social networking experiance.">
    <meta name="keywords" content="SeeYou,social networking,chatting,follow,profile,share,register">
    <meta name="author" content="Jassu Sharma">

    <title>SeeYou | Home</title>
    <link rel="shortcut icon" href="../assets/images/icons/favicon.ico">
    <link rel="stylesheet" href="../assets/style/master.css">
    <link rel="stylesheet" href="../assets/style/form.css">
    <link rel="stylesheet" href="../assets/style/register.css">

    <script src="../assets/scripts/validation.js"></script>
  </head>

  <body>
    <header>
        <a href="../">
          <img src="../assets/images/logos/logo.svg" alt="see_you!" id="logo">
        </a>
    </header>

    <main>

      <section id="left_pane" class="register_left_pane">
        <h1>Welcome to the family!</h1>
        <span class="blue bold">Register to be a part of this journey.</span>
        <img src="../assets/images/pictures/register.svg" width="100%"/>
      </section>

      <section id="right_pane" class="register_right_pane">
        <div class="alert">
          <span>!</span><span>Create your SeeYou account to continue.</span>
        </div>
        <div class="register_form">
          <form method="post" action="" name="registerForm" onsubmit="return validateRegister()">
            <!---Form-Start-Here--->

            <!-------------->
            <div class="inputFormError" id="nameInputFormError"></div>

            <div class="input_container">
              <div class="input_icon">
                  <span></span>
                <img src="../assets/images/icons/face-id-50.png" alt="name_img">
              </div>
              <div class="input_area">
                <label for="fullname">Name</label>
                <input type="text" name="fullname" onblur="validName()" placeholder="Enter your full name.">
              </div>

            </div>
            <!-------------->
            <div class="inputFormError" id="usernameInputFormError"></div>

            <div class="input_container">
              <div class="input_icon">
                  <span></span>
                  <img src="../assets/images/icons/email-sign-50.png" alt="user_img">
              </div>
              <div class="input_area">
                <label for="username">Username</label>
                <input type="text" name="username" onblur="validUserName()" placeholder="Choose a username.">
              </div>
            </div>
            <!-------------->
            <div class="inputFormError" id="emailInputFormError"></div>

            <div class="input_container">
              <div class="input_icon">
                  <span></span>
                <img src="../assets/images/icons/secured-letter-50.png" alt="email_img">
              </div>
              <div class="input_area">
                <label for="email">Email</label>
                <input type="email" name="email" onblur="validEmail()" placeholder="Enter your email.">
              </div>

            </div>
            <!-------------->
            <div class="inputFormError" id="passwordInputFormError"></div>

            <div class="input_container">
              <div class="input_icon">
                  <span></span>
                <img src="../assets/images/icons/password-50.png" alt="pass_img">
              </div>
              <div class="input_area">
                <label for="password">Password</label>
                <input type="password" name="password" onblur="validPassword()" placeholder="Enter your password.">
              </div>

            </div>
            <!-------------->
            <div class="inputFormError" id="rpasswordInputFormError"></div>

            <div class="input_container">
              <div class="input_icon">
                  <span></span>
                <img src="../assets/images/icons/password-50.png" alt="pass_img">
              </div>
              <div class="input_area">
                <label for="password">Repeat Password</label>
                <input type="password" name="rpassword" onblur="validRePassword()" placeholder="Repeat your password.">
              </div>

            </div>
            <!-------------->
            <div class="inputFormError" id="birthdayInputFormError"></div>

            <div class="input_container">
              <div class="input_icon">
                  <span></span>
                <img src="../assets/images/icons/birthday-50.png" alt="birthday_img">
              </div>
              <div class="input_area">
                <label for="dob">Birthday</label>
                <input type="date" name="dob" onblur="validBirthday()"/>
              </div>

            </div>
            <!-------------->

            <div class="register_form_button bottom_buttons">
              <input type="submit" name="" id="submit" value="Sign Up Now">
              <button type="button" onclick="window.location.href='../';" name="register">Get Login</button>
            </div>
            <!-------------->
          </form>
        </div>
      </section>

    </main>
    <?php include_once './footer.php';?>
  </body>

</html>
