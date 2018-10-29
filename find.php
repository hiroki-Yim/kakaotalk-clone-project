<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once('head.php'); ?>
  <title>Find</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header class="top-header">
    <?php require_once('header_top.php'); ?>
    <div class="header__bottom">
      <div class="header__column">
        <span class="header__text">Edit</span>
      </div>
      <div class="header__column">
        <span class="header__text">Find</span>
      </div>
      <div class="header__column">

      </div>
    </div>
  </header>
  <main class="find">
    <section class="find__options">
      <div class="find__option">
        <i class="fa fa-address-book fa-lg"></i>
        <span class="find__option-title">Find</span>
      </div>
      <div class="find__option">
        <i class="fa fa-qrcode fa-lg"></i>
        <span class="find__option-title">QR Code</span>
      </div>
      <div class="find__option">
        <i class="fa fa-mobile fa-lg"></i>
        <span class="find__option-title">Shake</span>
      </div>
      <div class="find__option">
        <i class="fa fa-envelope-o fa-lg"></i>
        <span class="find__option-title">Invite via SMS</span>
      </div>
    </section>
    <section class="find__recommended">
      <header>
        <h6 class="recommended__title">Recommended Friends</h6>
      </header>
      <div class="recommended__none">
        <span class="recommended__text">You have no recommended friends.</span>
      </div>
    </section>
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
    <a href="board.php" class="tab-bar__tab">
      <i class="fas fa-clipboard-list"></i>
      <span class="tab-bar__title">board</span>
    </a>
    <a href="find.php" class="tab-bar__tab tab-bar__tab--selected">
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
