<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once('head.php'); ?>
  <title>Chats</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header class="top-header">
    <?php require_once('header_top.php'); ?>
    <div class="header__bottom">
      <div class="header__column">
        <span class="header__text">create</span>
      </div>
      <div class="header__column">
        <span class="header__text">board</span>
      </div>
      <div class="header__column">

      </div>
    </div>
  </header>
  <main class="chats">
    <div class="search-bar">
      <i class="fa fa-search"></i>
      <input type="text" placeholder="게시글을 검색 해 보세요">
    </div>
    <ul class="chats__list">
      
        <li class="chats__chat">
          <a href="chat.php">
            <div class="chat__content">
              <img src="images/person-icon.png">
              <div class="chat__preview">
                <h3 class="chat__user">Lynn</h3>
                <span class="chat__last-message">Hello! This is a test message!</span>
              </div>
            </div>
            <span class="chat__date-time">
              15:55
            </span>
          </a>
        </li>
        <li class="chats__chat">
          <a href="chat.php">
            <div class="chat__content">
              <img src="images/person-icon.png">
              <div class="chat__preview">
                <h3 class="chat__user">KakaoTalk</h3>
                <span class="chat__last-message">You logged into KakaoTalk PC</span>
              </div>
            </div>
            <span class="chat__date-time">
              Jul 29
            </span>
          </a>
        </li>
    </ul>
    <div class="chat-btn">
      <i class="fa fa-comment"></i>
    </div>
  </main>
  <nav class="tab-bar">
    <a href="index.php" class="tab-bar__tab">
      <i class="fa fa-user"></i>
      <span class="tab-bar__title">Friends</span>
    </a>
    <a href="chats.php" class="tab-bar__tab">
      <i class="fa fa-comment"></i>
      <span class="tab-bar__title">Chats</span>
    </a>
    <a href="board.php" class="tab-bar__tab tab-bar__tab--selected">
      <i class="fas fa-clipboard-list"></i>
      <span class="tab-bar__title">board</span>
    </a>
    <a href="find.php" class="tab-bar__tab">
      <i class="fa fa-search"></i>
      <span class="tab-bar__title">Find</span>
    </a>
    <a href="more.php" class="tab-bar__tab">
      <i class="fa fa-ellipsis-h"></i>
      <span class="tab-bar__title">More</span>
    </a>
  </nav>
</body>
</html>
