<?php
session_start();
require_once './config/config.php';
require_once 'includes/auth_validate.php';

include_once 'includes/header.php';
?>

<div id="page-wrapper">
<div class="row">
     <div class="col-lg-6">
            <h1 class="page-header">Acesso não autorizado</h1>
        </div>
</div>
	

<?php include_once 'includes/footer.php'; ?>