<!-- Navbar -->
<header>
  <!-- Dropdown Structure -->
  <ul id="dropdown1" class="dropdown-content">
    <li><a href="primary">Primary Level</a></li>
    <li><a href="secondary">Secondary Level</a></li>
    <li><a href="advanced">Advanced Level</a></li>
  </ul>
  <div class="navbar-fixed">
    <nav class="nav-wrapper cyan darken-4">
      <div class="container">
        <a href="../img/mayylogo.png" class="brand-logo"><img style="width: 120px; height: 120px;" src="../img/mayylogo.png" alt=""></a>
        <a href="#" data-target="menu" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="index.php">Home</a></li>
          <li><a href="about">About</a></li>
          <li><a href="fees">Fees</a></li>
          <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Learning Stages +</a></li>
          <li><a class="" href="contact">Contact Us</a></li>
        </ul>
      </div>
    </nav>
  </div>
  <ul class="sidenav center cyan darken-4" id="menu">
    <li>
      <img src="img/elder-sister-and-brother-studying-at-home-3769981.jpg" class="responsive-img" alt="" />
    </li>
    <li><a href="<?php echo realpath('index.php') ?>">Home</a></li>
    <li><a href="about">About</a></li>
    <li><a href="fees">Fees</a></li>
    <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">Learning Stages +</a></li>
    <li><a class="btn red accent-3" href="contact">Contact Us</a></li>
  </ul>
  <ul id="dropdown2" class="dropdown-content cyan darken-4">
    <li><a href="primary">Primary Level</a></li>
    <li><a href="secondary">Secondary Level</a></li>
    <li><a href="advanced">Advanced Level</a></li>
  </ul>

</header>