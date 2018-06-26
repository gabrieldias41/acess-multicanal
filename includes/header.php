<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Grupo Access - SOMENTE SISTEMAS AVULSOS ESTAO FUNCIONANDO</title>

        <!-- Bootstrap Core CSS -->
        <link  rel="stylesheet" href="css/bootstrap.min.css"/>

        <!-- MetisMenu CSS -->
        <link href="js/metisMenu/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/sb-admin-2.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="js/jquery.min.js" type="text/javascript"></script> 

    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <?php if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] == true ) : ?>
                <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <img src="images/logo.png" width="auto" height="50px" style="margin-left: 25%;"/>
                    </div>
					
                    <!-- /.navbar-header -->
                    <ul class="nav navbar-top-links navbar-right">

						
                        <!-- /.dropdown -->
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
								<li><a href="#"><i class="fa fa-user fa-fw"></i><?php echo $_SESSION['nome']; ?></a>
								</li>
								<li class="divider"></li>
                                <li><a href="#"><i class="fa fa-user fa-fw"></i> Meu Perfil</a>
                                </li>
                                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Confirações</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Sair</a>
                                </li>
                            </ul>
                            <!-- /.dropdown-user -->
                        </li>
                        <!-- /.dropdown -->
                    </ul>
                    <!-- /.navbar-top-links -->

                    <div class="navbar-default sidebar" role="navigation">
                        <div class="sidebar-nav navbar-collapse">
                            <ul class="nav" id="side-menu">
							
								<!-- menu Dashboard -->
                                <li>
                                    <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                                </li>
								
								<!-- menu usuarios -->
								<?php if ($_SESSION['user_type'] == 'admin') : ?>
                                <li>
                                    <a href="admin_users.php"><i class="fa fa-users"></i> Usuarios</a>
                                </li>
								<?php endif; ?>
								
								<!-- menu serviços -->
								<li>
                                    <a href="#"><i class="fa fa-briefcase"></i> Serviços<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
									
										<!-- mostra que não há serviços -->
										<?php if ($_SESSION['acesso_whats'] == '0' && $_SESSION['acesso_mail'] == '0' && $_SESSION['acesso_sms'] == '0' && $_SESSION['acesso_bot'] == '0') : ?>
											<li>
												<a href="#"><i class="fa fa-error"></i>Sem serviços disponiveis</a>
											</li>
										<?php endif; ?>
											
										<!-- verifica acesso ao serviço whatsapp -->
										<?php if ($_SESSION['acesso_whats'] == '1') : ?>
											<li>
												<a href="s1.php"><i class="fa fa-comments"></i>WhatsApp</a>
											</li>
										<?php endif; ?>
										
										<!-- verifica acesso ao serviço mail marketing -->
										<?php if ($_SESSION['acesso_mail'] == '1') : ?>
										<li>
											<a href="s2.php"><i class="fa fa-envelope "></i>Mail Marketing</a>
										</li>
										<?php endif; ?>
										
										<!-- verifica acesso ao serviço send sms -->
										<?php if ($_SESSION['acesso_sms'] == '1') : ?>
										<li>
											<a href="s3.php"><i class="fa fa-envelope "></i>SMS Sender</a>
										</li>
										<?php endif; ?>
										
										<!-- verifica acesso ao serviço  -->
										<?php if ($_SESSION['acesso_bot'] == '1') : ?>
										<li>
											<a href="s4.php"><i class="fa fa-envelope "></i>Chatbot</a>
										</li>
										<?php endif; ?>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- /.sidebar-collapse -->
                    </div>
                    <!-- /.navbar-static-side -->
                </nav>
            <?php endif; ?>