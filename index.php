<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once('head.php'); ?>
  <title>Friends!</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header class="top-header">
    <?php require_once('header_top.php'); ?>
    <div class="header__bottom">
      <div class="header__column">
        <span class="header__text">Manage</span>
      </div>
      <div class="header__column">
        <span class="header__text">Friends <span class="header__number">1</span></span>
      </div>
      <div class="header__column">
        <i class="fa fa-cog fa-lg"></i>
      </div>
    </div>
  </header>
  <main class="friends">
    <div class="search-bar">
      <i class="fa fa-search"></i>
      <input type="text" placeholder="Find friends, chats, Plus Friends">
    </div>
    <section class="friends__section">
      <header class="friends__section-header">
        <h6 class="friends__section-title">My Profile</h6>
      </header>
      <div class="friends__section-rows">
        <div class="friends__section-row">
            <img src="images/person-icon.png" alt="">
            <a href="profile.php" class="fiends__section-name">
              Hiroki
            </a>
        </div>
        <div class="friends__section-row">
          <img src="images/person-icon.png" alt="">
          <span class="fiends__section-name">공기친구</span>
        </div>
      </div>
    </section>
    <section class="friends__section">
      <header class="friends__section-header">
        <h6 class="friends__section-title">Friends</h6>
      </header>
      <div class="friends__section-rows">
        <div class="friends__section-row with-tagline">
          <div class="friends__section-column">
              <img src="images/person-icon.png" alt="">
              <span class="friends__section-name">공기친구</span>
          </div>
          <span class="friends__section-tagline">
            술마실사람
          </span>
        </div>
      </div>
    </section>
  </main>
  <nav class="tab-bar">
    <a href="index.php" class="tab-bar__tab tab-bar__tab--selected">
      <i class="fa fa-user"></i>
      <span class="tab-bar__title">Friends</span>
    </a>
    <a href="chats.php" class="tab-bar__tab">
      <i class="fa fa-comment"></i>
      <span class="tab-bar__title">Chats</span>
    </a>
    <a href="board.php" class="tab-bar__tab">
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
  <!-- <div class="bigScreenText">
    <span>Please make your screen smaller</span>
  </div> -->
</body>
</html>
