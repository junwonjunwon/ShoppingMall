<?php
session_start();
?>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="./">TARK</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li id="home">
          <a href="./">Home</a>
        </li>
        <li id="upload">
          <a href="./?page=upload">Upload</a>
        </li>
      </ul>
      <ul class="nav navbar-nav right">
        <?php
        if (isset($_SESSION['name'])) {
          ?>
          <li id="login">
            <a href="#;" onclick="return false;"><?php echo $_SESSION['name']; ?></a>
          </li>
          <li id="register">
            <a href="./controllers/logout.php">Logout</a>
          </li>
          <?php
        } else {
          ?>
          <li id="login">
            <a href="./?page=login">Login</a>
          </li>
          <li id="register">
            <a href="./?page=register">Register</a>
          </li>
          <?php
        }
        ?>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container -->
</nav>
