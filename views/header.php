<header>
  <a href="./">
    <section class="logo container">
      <img src="../assets/images/logos/icon.svg" alt="see_you!" class="logo">
      <span class="header_divider"></span>
      <img src="../assets/images/logos/text.svg" alt="see_you!" class="logo">
    </section>
  </a>
  <section class="options container">
    <img src="../assets/images/icons/notification-50.png" style="height:116%;" alt="notifications" class="notification" onclick="window.location.href='./notification.php';">
    <span class="alert"></span>
    <img src="../assets/images/icons/speech-bubble-50.png" alt="messages" class="message" onclick="window.location.href='./message.php';">
    <span class="alert"></span>
  </section>
  <section class="search container">
    <form action="" method="post" onsubmit="return false">
      <button type="submit"></button>
      <input type="text" name="query" placeholder="Search" autocomplete="off" onfocus="liveSearch()" onblur="liveSearch(true)">
    </form>
    <span class="header_divider"></span>
    <img src="../assets/images/icons/settings-50.png" alt="setting" class="setting" onclick="window.location.href='./setting.php';">
  </section>

  <div id="search_result" class="scrollbar">
    <a href="./view_profile.php">
      <div class="friend">
        <img src="../usr_data/profile_pic/100x100/google.jpg" alt="user_dp" class="user_dp">
        google
      </div>
    </a>

    <a href="./view_profile.php">
      <div class="friend">
        <img src="../usr_data/profile_pic/100x100/deepaksharma550.jpg" alt="user_dp" class="user_dp">
        deepaksharma550
      </div>
    </a>

    <a href="./view_profile.php">
      <div class="friend">
        <img src="../usr_data/profile_pic/100x100/yogita_sharma28.jpg" alt="user_dp" class="user_dp">
        yogita_sharma28
      </div>
    </a>

    <a href="./view_profile.php">
      <div class="friend">
        <img src="../usr_data/profile_pic/100x100/aman_rai___.jpg" alt="user_dp" class="user_dp">
        aman_rai___
      </div>
    </a>

    <a href="./view_profile.php">
      <div class="friend">
        <img src="../usr_data/profile_pic/100x100/j_for_jassu.jpg" alt="user_dp" class="user_dp">
        j_for_jassu
      </div>
    </a>
  </div>

</header>
