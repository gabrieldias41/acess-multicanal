<?php
session_start();
require_once 'config/config.php';
require_once 'includes/auth_validate.php';

//Get DB instance. function is defined in config.php
$db = getDbInstance();

//Get Dashboard information
$numAccounts = $db->getValue ("accounts", "count(*)");
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
		height: 1200px;
	}
</style>


<iframe src="services/whats.php" width="100%" scrolling="no"></iframe>
<?php include_once('includes/footer.php'); ?>
