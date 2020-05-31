<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta name="robots" content="noindex, nofollow">
    <meta name="author" content="Jassu Sharma">

    <title>SeeYou | Setting</title>
    <link rel="shortcut icon" href="../assets/images/icons/favicon.ico">

    <link rel="stylesheet" href="../assets/style/header_action.css">
    <link rel="stylesheet" href="../assets/style/home.css">

    <script src="../assets/scripts/index.js"></script>
    <script src="../assets/scripts/setting.js"></script>

  </head>

  <body id="body" class="scrollbar">
    <!---Including-Website-Header-->
    <?php include_once './header.php';?>

    <main>
      <span class="activity_icon">
        <img src="../assets/images/icons/settings-50.png"/>
        <b>Settings</b>
      </span>

      <section class="panel">

        <form action="" name="profileForm">
          <input type="text" name="nameFieldEdit" disabled="true">
          <span id="nameFieldEdit" class="editLinks">Edit</span><br/>
          <button type="button" name="button">Save</button>
        </form>

      </section>
      <section class="panel">2
        <form action="">

        </form>
      </section>
      <section class="panel">3
        <form action="">

        </form>
      </section>
      <section class="panel_nav">
        <span id="activePanel" onclick="togglePanel(this,0)">Profile</span>
        <span onclick="togglePanel(this,1)">Contact</span>
        <span onclick="togglePanel(this,2)">Change Password</span>
      </section>
    </main>

    <!---Including-Website-Footer-->
    <?php include_once './footer.php';?>
  </body>

</html>
