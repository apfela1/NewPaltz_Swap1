<?php require_once('../private/initialize.php'); ?>
<?php require_once(SHARED_PATH . '/header1.php'); ?>

                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="listings.php">Listings</a></li>
                    <li><a href="forum.php">Forum</a></li>
                    <li><a href="about.php">About & Contact</a></li>
						
<?php require_once(SHARED_PATH . '/header2.php'); ?>

<div id="main-menu">
  <h2>Main Menu</h2>
  <ul>
    <li><a href="<?php echo url_for('/nonuser/index.php'); ?>">SUP</a>
</li>
  </ul>
</div>

<?php require_once(SHARED_PATH . '/footer.php'); ?>