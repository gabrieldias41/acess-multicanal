<?php
session_start();
require_once './config/config.php';
//If User has already logged in, redirect to dashboard page.
if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === TRUE) {
    header('Location:index.php');
}

//If user has previously selected "remember me option", his credentials are stored in cookies.
if(isset($_COOKIE['username']) && isset($_COOKIE['password']))
{
	//Get user credentials from cookies.
	$username = filter_var($_COOKIE['username']);
	$passwd = filter_var($_COOKIE['password']);
	$db->where ("user_name", $username);
	$db->where ("passwd", $passwd);
    $row = $db->get('accounts');

    if ($db->count >= 1) 
    {
    	//Allow user to login.
        $_SESSION['user_logged_in'] = TRUE;
        $_SESSION['user_type'] = $row[0]['user_type'];
		$_SESSION['nome'] = $row[0]['nome'];
		$_SESSION['fone'] = $row[0]['fone'];
		$_SESSION['id'] = $row[0]['id'];
		$_SESSION['acesso_whats'] = $row[0]['acesso_whats'];
		$_SESSION['acesso_mail'] = $row[0]['acesso_mail'];
		$_SESSION['acesso_sms'] = $row[0]['acesso_sms'];
		$_SESSION['acesso_bot'] = $row[0]['acesso_bot'];
		$_SESSION['acesso_higien'] = $row[0]['acesso_higien'];
        header('Location:index.php');
        exit;
    }
    else //Username Or password might be changed. Unset cookie
    {
    unset($_COOKIE['username']);
    unset($_COOKIE['password']);
    setcookie('username', null, -1, '/');
    setcookie('password', null, -1, '/');
    header('Location:login.php');
    exit;
    }
}



include_once 'includes/header.php';
?>
<div id="page-" class="col-md-4 col-md-offset-4">
	<form class="form loginform" method="POST" action="authenticate.php">
		<div class="login-panel panel panel-default">
			<center>
				<br>
				<img src="images/logo2.png" width="120px" height="120px"/>
				<br>
			</center>
			
			<div class="panel-body">
				<div class="form-group">
					<label class="control-label">Usuario</label>
					<input type="text" name="username" class="form-control" required="required">
				</div>
				<div class="form-group">
					<label class="control-label">Senha</label>
					<input type="password" name="passwd" class="form-control" required="required">
				</div>
				<div class="checkbox">
					<label>
						<input name="remember" type="checkbox" value="1">Lembrar o login
					</label>
				</div>
				<?php
				if(isset($_SESSION['login_failure'])){ ?>
				<div class="alert alert-danger alert-dismissable fade in">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<?php echo $_SESSION['login_failure']; unset($_SESSION['login_failure']);?>
				</div>
				<?php } ?>
				
				<center>
					<button type="submit" class="btn btn-success loginField" >Entrar</button>
				</center>
			</div>
		</div>
	</form>
</div>
<!-- ?php include_once 'includes/footer.php'; ? -->