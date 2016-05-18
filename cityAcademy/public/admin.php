<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php confirm_logged_in(); ?>

<?php $layout_context = "admin"; ?>
<?php include("../includes/layouts/header.php"); ?>

<div id="main">
  <div id="navigation">
    &nbsp;
  </div>
  <div id="page">
    <h2>Admin Menu</h2>
    <p>Welcome to the admin area,<b> <?php echo htmlentities($_SESSION["username"]); ?></b>.</p><br>
    <ul>
      <li class ="mContent"><a href="manage_content.php">Manage Website Content</a></li>
      <li class ="mContent"><a href="manage_admins.php">Manage Admin Users</a></li>
      <li class ="mContent"><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</div>

<?php include("../includes/layouts/footer.php"); ?>
