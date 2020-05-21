<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />

    <title>SeeYou | Profile @deepaksharma550</title>
    <link rel="shortcut icon" href="../assets/images/icons/favicon.ico">

    <link rel="stylesheet" href="../assets/style/view_profile.css">
    <link rel="stylesheet" href="../assets/style/home.css">

    <script src="../assets/scripts/index.js"></script>
  </head>

  <body id="body">
    <!---Including-Website-Header-->
    <?php include_once './header.php';?>

    <main>
      <section class="profile_card">
        <div class="profile_pic">
          <img src="../usr_data/profile_pic/100x100/deepaksharma550.jpg" alt="profile_pic">
        </div>
        <div class="profile_info">
          <button onclick="followToggle()" value="false" class="follow" id="follow_btn">Follow</button>
          <span class="user_tag">@deepaksharma550</span>
          <span class="user_name">Deepak Sharma</span>
          <span class="user_about">
            Male,25 from Shimla. Staying hydrated by always being in the sea.
          </span>
        </div>
      </section>
      <section class="gallary">
        <article class="image">
          <a href="./full_post.php">
            <img src="../usr_data/uploads/google_1.jpg" alt="user_dp">
          </a>
        </article>
        <article class="image">
          <a href="./full_post.php">
            <img src="../usr_data/uploads/google_2.jpg" alt="user_dp">
          </a>
        </article>
        <article class="image">
          <a href="./full_post.php">
            <img src="../usr_data/uploads/google_3.jpg" alt="user_dp">
          </a>
        </article>
        <article class="image">
          <a href="./full_post.php">
            <img src="../usr_data/uploads/j_for_jassu_1.jpg" alt="user_dp">
          </a>
        </article>
        <article class="image">
          <a href="./full_post.php">
            <img src="../usr_data/uploads/j_for_jassu_2.jpg" alt="user_dp">
          </a>
        </article>
        <article class="image">
          <a href="./full_post.php">
            <img src="../usr_data/uploads/j_for_jassu_3.jpg" alt="user_dp">
          </a>
        </article>
      </section>
    </main>

    <!---Including-Website-Footer-->
    <?php include_once './footer.php';?>
  </body>

</html>
