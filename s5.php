<?php
session_start();
require_once 'config/config.php';
require_once 'includes/auth_validate.php';

//Get DB instance. function is defined in config.php
$db = getDbInstance();

//Get Dashboard information
//$numAccounts = $db->getValue ("accounts", "count(*)");
//$numTasks = $db->getValue ("tasks", "COUNT(*)");

include_once('includes/header.php');
?>
<style>
	iframe {
		scrolling: no;
		background: white;
		margin: none;
		padding: none;
		padding-right: 5px;
		border: none;
		height: 1500px;
	}
</style>

<script>
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
  }
</script>

<iframe src="services/higienizacao.php" width="100%" scrolling="no" onload="resizeIframe(this)"></iframe>
<?php include_once('includes/footer.php'); ?>
