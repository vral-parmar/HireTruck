<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Shipper</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Transport</a>
    </li>
    <li class="nav-item">
      <?php if (!isset($_SESSION['mail'])) {?>
        <li class="nav-item">
          <a class="nav-link" href="adm_login.php">Login </a>
        </li><?php
      }?>
    </li>
    <li class="nav-item">
      <?php if (isset($_SESSION['mail'])){ ?>
      <a class="nav-link" href="logout.php">Log Out</a>
      <?php } ?>
    </li>
  </ul>
</nav>
