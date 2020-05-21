<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta name="robots" content="noindex, nofollow">
    <meta name="author" content="Jassu Sharma">

    <title>SeeYou | Notification</title>
    <link rel="shortcut icon" href="../assets/images/icons/favicon.ico">

    <link rel="stylesheet" href="../assets/style/header_action.css">
    <link rel="stylesheet" href="../assets/style/home.css">

    <script src="../assets/scripts/index.js"></script>
  </head>

  <body id="body" class="scrollbar">
    <!---Including-Website-Header-->
    <?php include_once './header.php';?>

    <main>
      <span class="activity_icon">
        <img src="../assets/images/icons/notification-50.png"/>
        <b>Notifications</b>
      </span>
      <section class="panel">
        <article>
          <img src="../usr_data/profile_pic/100x100/aman_rai___.jpg">
          <b><a href="./view_profile.php">aman_rai___</a></b> followed you back.
        </article>
        <article>
          <img src="../usr_data/profile_pic/100x100/google.jpg">
          <b><a href="./view_profile.php">google</a></b> accepted your follow request.
        </article>
        <article>
          <img src="../usr_data/profile_pic/100x100/yogita_sharma28.jpg">
          <b><a href="./view_profile.php">yogita_sharma28</a></b> wants to follow you.
          <button class="reject">Reject</button>
          <button class="confirm">Confirm</button>
        </article>
        <article>
          <img src="../usr_data/profile_pic/100x100/deepaksharma550.jpg">
          <b><a href="./view_profile.php">deepaksharma550</a></b> followed you back.
        </article>
      </section>

    </main>

    <!---Including-Website-Footer-->
    <?php include_once './footer.php';?>
  </body>

</html>
