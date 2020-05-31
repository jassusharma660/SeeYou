<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta name="robots" content="noindex, nofollow">
    <meta name="author" content="Jassu Sharma">

    <title>SeeYou | j_for_jassu</title>
    <link rel="shortcut icon" href="../assets/images/icons/favicon.ico">

    <link rel="stylesheet" href="../assets/style/content.css">
    <link rel="stylesheet" href="../assets/style/home.css">

    <script src="../assets/scripts/index.js"></script>
  </head>

  <body id="body" class="scrollbar">

    <!--Overlay-for-edit-->
    <div id="popOverlay"></div>
    <!---Including-Website-Header-->
    <?php include_once './header.php';?>

    <main>
      <section id="left_pane">

        <!--New-Post-Start-->
        <article id="post">
          <span class="title">
            <img src="../assets/images/icons/post-50.png"/>
            <b>Add post to profile.</b>
          </span>

          <img id="file_upload_preview"/>

          <form action="./" method="post" name="uploadPost" onsubmit="return uploadPostAndFile();">
            <input type="file" name="image" id="file_upload" accept=".png,.jpeg,.jpg" onchange="loadPreview(this)" hidden>
            <span class="image_upload" onclick="document.getElementById('file_upload').click();">
              <span>
                <img src="../assets/images/icons/add-50.png"/>
                <b id="file_name">Add Image</b>
              </span>
            </span>
            <textarea placeholder="Write something here...". name="status"></textarea>
            <button type="submit">Post</button>
            <button type="reset" onclick="resetFileInput()">Reset</button>
          </form>
        </article>
        <!--New-Post-End-->

        <!--Post-UI-->
        <article class="profile_post">
          <div class="top">
            <img src="../usr_data/profile_pic/100x100/j_for_jassu.jpg" alt="user_dp" class="user_dp">
            <span id="user_name" class="user_name">j_for_jassu</span>
            <img src="../assets/images/icons/ellipsis-50.png" alt="menu" class="menu" onclick="showPostEditOptions(123)"/>
            <div class="postEditOptions" id="postEditOption123">
              <form method="post" action="editPost.php">
                <input name="postid" value="123" hidden/>
                <button type="submit">Edit</button>
              </form>
              <form method="post" action="deletePost.php">
                <input name="postid" value="123" hidden/>
                <button type="submit">Delete</button>
              </form>
            </div>
          </div>
          <div class="image">
          <!--just change this in php to get txt post-->
            <img src="../usr_data/uploads/j_for_jassu_1.jpg" alt="user_dp" class="user_dp">
          </div>
          <div class="bottom">
            <img src="../assets/images/icons/love-50.png" alt="Like" class="like" id="like123" onclick="likeToggle(true,123)">
            <img src="../assets/images/icons/loved-50.png" alt="Liked"  class="liked" id="liked123" onclick="likeToggle(false,123)">
            Liked by <span id="like_count123">89</span> people.
            <span id="caption">Ah! Beautiful sunset😇</span>
          </div>
          <div id="comment_feed123" class="comment_feed">
            <div><b class="user">deepaksharma</b>Love the view 😍</div>
            <div><b class="user">j_for_jassu</b>Yup!!</div>
          </div>
          <form action="" method="post" onsubmit="return postComment(this)">
            <input type="text" value="123" name="postId" hidden/>
            <input type="text" placeholder="Add a comment..." name="comment"/>
            <button class="btn" type="submit">Post</button>
          </form>
        </article>
        <!--UI-END-->

        <!--Post-UI-->
          <article class="profile_post">
            <div class="top">
              <img src="../usr_data/profile_pic/100x100/j_for_jassu.jpg" alt="user_dp" class="user_dp">
              <span id="user_name" class="user_name">j_for_jassu</span>
              <img src="../assets/images/icons/ellipsis-50.png" alt="menu" class="menu" onclick="showPostEditOptions(234)"/>
              <div class="postEditOptions" id="postEditOption234">
                <form method="post" action="editPost.php">
                  <input name="postid" value="123" hidden/>
                  <button type="submit">Edit</button>
                </form>
                <form method="post" action="deletePost.php">
                  <input name="postid" value="123" hidden/>
                  <button type="submit">Delete</button>
                </form>
              </div>
            </div>
            <div class="textStatus">
              It’s only after you’ve stepped outside your comfort zone that you begin to change, grow, and transform.
            </div>
            <div class="bottom">
              <img src="../assets/images/icons/love-50.png" alt="Like" class="like" id="like234" onclick="likeToggle(true,234)">
              <img src="../assets/images/icons/loved-50.png" alt="Liked"  class="liked" id="liked234" onclick="likeToggle(false,234)">
              Liked by <span id="like_count234">89</span> people.
              <!--span id="caption">No caption post</span-->
            </div>
            <div id="comment_feed234" class="comment_feed">
              <div><b class="user">deepaksharma</b>Well said!</div>
              <div><b class="user">j_for_jassu</b>Yup!!</div>
            </div>
            <form action="" method="post" onsubmit="return postComment(this)">
              <input type="text" value="234" name="postId" hidden/>
              <input type="text" placeholder="Add a comment..." name="comment"/>
              <button class="btn" type="submit">Post</button>
            </form>
          </article>
          <!--UI-END-->



        <!--Demo-Data-Start-From-Here------------------------->
        <!--Post-UI-->
        <article class="profile_post">
          <div class="top">
            <img src="../usr_data/profile_pic/100x100/j_for_jassu.jpg" alt="user_dp" class="user_dp">
            <span id="user_name" class="user_name">j_for_jassu</span>
            <img src="../assets/images/icons/ellipsis-50.png" alt="menu" class="menu">
          </div>
          <div class="image">
          <!--just change this in php to get txt post-->
            <img src="../usr_data/uploads/j_for_jassu_2.jpg" alt="user_dp" class="user_dp">
          </div>
          <div class="bottom">
            <img src="../assets/images/icons/love-50.png" alt="Like" class="like" id="like" onclick="likeToggle(true)">
            <img src="../assets/images/icons/loved-50.png" alt="Liked"  class="liked" id="liked" onclick="likeToggle(false)">
            Liked by <span id="like_count">89</span> people.
            <span id="caption">Ah! Beautiful sunset😇</span>
          </div>
          <div id="comment_feed" class="comment_feed">
            <div><b class="user">deepaksharma</b>Love the view 😍</div>
            <div><b class="user">j_for_jassu</b>Yup!!</div>
          </div>
          <form action="" method="post" onsubmit="return postComment(this)">
            <input type="text" placeholder="Add a comment..." name="comment"/>
            <button class="btn" type="submit">Post</button>
          </form>
        </article>
        <!--UI-END-->
        <!--Post-UI-->
        <article class="profile_post">
          <div class="top">
            <img src="../usr_data/profile_pic/100x100/j_for_jassu.jpg" alt="user_dp" class="user_dp">
            <span id="user_name" class="user_name">j_for_jassu</span>
            <img src="../assets/images/icons/ellipsis-50.png" alt="menu" class="menu">
          </div>
          <div class="image">
          <!--just change this in php to get txt post-->
            <img src="../usr_data/uploads/j_for_jassu_2.jpg" alt="user_dp" class="user_dp">
          </div>
          <div class="bottom">
            <img src="../assets/images/icons/love-50.png" alt="Like" class="like" id="like" onclick="likeToggle(true)">
            <img src="../assets/images/icons/loved-50.png" alt="Liked"  class="liked" id="liked" onclick="likeToggle(false)">
            Liked by <span id="like_count">89</span> people.
            <span id="caption">Ah! Beautiful sunset😇</span>
          </div>
          <div id="comment_feed" class="comment_feed">
            <div><b class="user">deepaksharma</b>Love the view 😍</div>
            <div><b class="user">j_for_jassu</b>Yup!!</div>
          </div>
          <form action="" method="post" onsubmit="return postComment(this)">
            <input type="text" placeholder="Add a comment..." name="comment"/>
            <button class="btn" type="submit">Post</button>
          </form>
        </article>
        <!--UI-END-->
        <!--Post-UI-->
        <article class="profile_post">
          <div class="top">
            <img src="../usr_data/profile_pic/100x100/j_for_jassu.jpg" alt="user_dp" class="user_dp">
            <span id="user_name" class="user_name">j_for_jassu</span>
            <img src="../assets/images/icons/ellipsis-50.png" alt="menu" class="menu">
          </div>
          <div class="image">
          <!--just change this in php to get txt post-->
            <img src="../usr_data/uploads/j_for_jassu_3.jpg" alt="user_dp" class="user_dp">
          </div>
          <div class="bottom">
            <img src="../assets/images/icons/love-50.png" alt="Like" class="like" id="like" onclick="likeToggle(true)">
            <img src="../assets/images/icons/loved-50.png" alt="Liked"  class="liked" id="liked" onclick="likeToggle(false)">
            Liked by <span id="like_count">89</span> people.
            <span id="caption">Ah! Beautiful sunset😇</span>
          </div>
          <div id="comment_feed" class="comment_feed">
            <div><b class="user">deepaksharma</b>Love the view 😍</div>
            <div><b class="user">j_for_jassu</b>Yup!!</div>
          </div>
          <form action="" method="post" onsubmit="return postComment(this)">
            <input type="text" placeholder="Add a comment..." name="comment"/>
            <button class="btn" type="submit">Post</button>
          </form>
        </article>
        <!--UI-END-->
        <span class="end">You are at end. Goto <a href="#body">Top</a></span>

      </section>


      <!--Right-Panel-UI-->
      <!--Profile-Section-->
      <section id="right_pane">
        <div class="logo">
          <img src="../assets/images/logos/text.svg" alt="see_you!" class="logo">
        </div>
        <span id="divide"></span>
        <div class="profile_card">
          <img src="../usr_data/profile_pic/100x100/j_for_jassu.jpg" alt="user_dp" class="user_dp">
          <span id="user_name" class="user_name">Jassu Sharma</span>
          <span id="user_tag" class="user_tag">j_for_jassu</span>
          <a href="./view_profile.php" class="profile">View Profile</a>
        </div>
      <!--Friends-Section-->
        <span class="friends_list_h">You are following</span>
        <div id="friends_list" class="scrollbar">
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
      </section>

      <!--Right-panel-UI-END-->
    </main>

    <!---Including-Website-Footer-->
    <?php include_once './footer.php';?>
  </body>

</html>
