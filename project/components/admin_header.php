<?php
if (isset($message)) {
   foreach ($message as $message) {
      echo '
      <div class="message">
         <span>' . $message . '</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

    <a href="dashboard.php" class="logo">Admin<span>Panel</span></a>


    <nav class="navbar">
        <a href="dashboard.php"><i class="fas fa-home"></i> <span>home</span></a>
        <a href="add_posts.php"><i class="fas fa-pen"></i> <span>add info</span></a>
        <a href="view_posts.php"><i class="fas fa-eye"></i> <span>view info</span></a>
        <a href="admin_accounts.php"><i class="fas fa-user"></i> <span>accounts</span></a>
        <a href="../components/admin_logout.php" style="color:var(--red);"
            onclick="return confirm('logout from info hunter section?');"><i
                class="fas fa-right-from-bracket"></i><span>logout</span></a>
    </nav>

    <div class="flex-btn">
        <a href="admin_login.php" class="option-btn">login</a>
        <a href="register_admin.php" class="option-btn">register</a>
    </div>

</header>

<div id="menu-btn" class="fas fa-bars"></div>