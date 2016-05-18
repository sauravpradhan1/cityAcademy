<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php $layout_context = "public"; ?>
<?php include("../includes/layouts/header1.php"); ?>
<?php find_selected_page(true); ?>

<div id="main">
  <div id="navigation">
		<?php echo public_navigation($current_subject, $current_page); ?>
  </div>
  <div id="page">
		<?php if ($current_page) { ?>
			<br><br>
			
			<h2><?php echo htmlentities($current_page["menu_name"]); ?></h2><br><br>
			<font size="4"><?php echo nl2br(htmlentities($current_page["content"])); ?></font>
			
		<?php } else { ?>
			<br><br>
			
			<font size="4"><p>Welcome!</p></font>
			
		<?php }?>
  </div>
</div>

<?php include("../includes/layouts/footer.php"); ?>
