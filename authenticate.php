<?php 
require_once './config/config.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    $username = filter_input(INPUT_POST, 'username');
    $passwd = filter_input(INPUT_POST, 'passwd');
    $remember = filter_input(INPUT_POST, 'remember');
    $passwd=  md5($passwd);
   	
    //Get DB instance. function is defined in config.php
    $db = getDbInstance();

    $db->where ("user_name", $username);
    $db->where ("passwd", $passwd);
    $row = $db->get('accounts');
     
    if ($db->count >= 1) {
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
       	if($remember)
       	{
       		setcookie('username',$username , time() + (86400 * 90), "/");
       		setcookie('password',$passwd , time() + (86400 * 90), "/");
       	}
        header('Location:index.php');
        exit;
    } else {
        $_SESSION['login_failure'] = "Invalid user name or password";
        header('Location:login.php');
        exit;
    }
  
}