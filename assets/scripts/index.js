function showPopup(state) {
  var popup = document.getElementById("reset_popup");
  if (state)
    popup.style.visibility = "visible";
  else
    popup.style.visibility = "hidden";
}

function likeToggle(state,id) {
  var like = document.getElementById(`like${id}`);
  var liked = document.getElementById(`liked${id}`);
  var count = document.getElementById(`like_count${id}`);

  if (state) {
    like.style.display = "none";
    liked.style.display = "inline-block";
    ++count.innerText;
  } else {
    liked.style.display = "none";
    like.style.display = "inline-block";
    --count.innerText;
  }
}

function followToggle() {
  var btn = document.getElementById("follow_btn");

  if (btn.value == "true") {
    btn.value = "false";
    btn.innerHTML = "Follow";
    btn.style.backgroundColor = "#fff";
  } else {
    btn.value = "true";
    btn.innerHTML = "Following";
    btn.style.backgroundColor = "#eee";
  }
}

function liveSearch(a) {
  var state = document.getElementById('search_result');

  if (state.style.visibility == "visible" || a == true)
    state.style.visibility = "hidden";
  else
    state.style.visibility = "visible";
}

function showPostEditOptions(id) {
  let popOverlay = document.getElementById("popOverlay");
  let postEditOptions = document.getElementById(`postEditOption${id}`);
  popOverlay.style.visibility = "visible";
  postEditOptions.style.visibility = "visible";

  popOverlay.onclick = function() {
    popOverlay.style.visibility = "hidden";
    postEditOptions.style.visibility = "hidden";
    document.body.style.filter ="inherit";
  }
}
function loadPreview(e) {
  const file = e.files[0];
  document.getElementById('file_name').innerHTML = file.name;
  if(file) {
    const reader = new FileReader();

    reader.addEventListener("load", function(){
      document.getElementById("file_upload_preview").setAttribute("src",this.result);
    });
    reader.readAsDataURL(file);
  }
}

function resetFileInput() {
  document.getElementById("file_name").innerHTML='Add Image';
  document.getElementById("file_upload_preview").setAttribute("src","");
}

function postComment(e) {

  let id = e['postId'].value;
  let comment = e['comment'].value;

  if(id=="" || comment=="") return false;

  let comment_feed = document.getElementById(`comment_feed${id}`);
  let userTag = document.getElementById('user_name').innerText;

  //Ajax fetch() data sending ..
  let div = document.createElement('div');
  let b = document.createElement('b');
  b.classList = "user";
  b.innerText = userTag;
  div.append(b);
  div.append(comment);
  comment_feed.append(div);

  e['comment'].value ="";

  return false;
}
/*
function uploadPostAndFile() {
  const file = document.forms["uploadPost"]["image"].files[0];
  const status = document.forms["uploadPost"]["status"].value;

  if(file || status) {
    if(file && status) {
      alert("both");
    }
    else if(file) {
      alert("file");
    }
    else if(status) {
      alert("text");
    }
  }

  return false;
}*/
