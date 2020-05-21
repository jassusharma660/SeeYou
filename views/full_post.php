<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />

    <title>SeeYou | Post @deepaksharma550</title>
    <link rel="shortcut icon" href="../assets/images/icons/favicon.ico">

    <link rel="stylesheet" href="../assets/style/content.css">
    <link rel="stylesheet" href="../assets/style/home.css">
    <link rel="stylesheet" href="../assets/style/full_post.css">

    <script src="../assets/scripts/index.js"></script>
  </head>

  <body id="body" class="scrollbar">
    <!---Including-Website-Header-->
    <?php include_once './header.php';?>

    <main>
      <section id="left_pane">

      <!--Demo-Data-Start-From-Here------------------------->

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
            <img src="../usr_data/uploads/google_1.jpg" alt="user_dp" class="user_dp">
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
      </section>
      <section class="gallary">
        <h2>Your Collections</h2>
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
