<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="logo/lets-shopping-logo-design.jpg" alt="Logo" width="100" height="70" class="d-inline-block align-text-top">
      Project-3
    </a>
  </div>
</nav>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        
          <a class="nav-link" href="Home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Login</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="signup.php">Register</a>
        </li>
        <ul class = "menu-member">
        <?php 
        if(isset($_SESSION["userid"])) 
        {
        ?>
        <li><a href = '#'><?php echo $_SESSION["useruid"]; ?></a></li>
        <li><a href = "includes/logout.inc.php" class = "header-login-a">LOGOUT</a></li>
        <?php
        }
        else 
        {
          ?>
          <li><a href = "#">SIGN UP</a></li>
          <li><a href = "#" class = "header-login-a">LOGIN</a></li>
          <?php
        }
      ?>
      </ul>
      </ul>
    <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
    <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
    </ul>

      </form>
    </div>
  </div>
</nav>
