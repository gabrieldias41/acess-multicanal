<?php
if( $_SERVER['REQUEST_METHOD']=='POST' )
{
        var_dump( $_FILES );//apenas para debug


        $servidor = 'host';
        $caminho_absoluto = '/httpdocs/uploads/';
        $arquivo = $_FILES['arquivo'];

        $con_id = ftp_connect($servidor) or die( 'Não conectou em: '.$servidor );
        ftp_login( $con_id, 'usuario', 'senha' );

        ftp_put( $con_id, $caminho_absoluto.$arquivo['name'], $arquivo['tmp_name'], FTP_BINARY );
}

?>

<head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Grupo Access</title>

        <!-- Bootstrap Core CSS -->
        <link  rel="stylesheet" href="../css/bootstrap.min.css"/>

        <!-- MetisMenu CSS -->
        <link href="../js/metisMenu/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/sb-admin-2.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="../fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="../js/jquery.min.js" type="text/javascript"></script> 

		<style>
			select {
				height: 28px;
				width: 252px;
			}
			
			.txtarea {
				height: 100px;
				width: 100%;
				resize: none;
			}
		</style>
    </head>

<div style="background: white; padding-left: 10px" id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h2 class="page-header">Higienização</h2>
		</div>
	</div>
	
		<!--
			https://api.assertivasolucoes.com.br/api/1.0.0/localize/xml/pf?empresa=SUA-EMPRESA&usuario=SEU-USUARIO&senha=SUA-SENHA&documento=NUMERO-CPF
		-->
		
		
		<fieldset class="well form-horizontal">
			<legend><br><br>Consultar</legend>
			<form method="GET" action="http://localhost/services/H/consultarPF.php" id="getTable">
			
				<div id="campo"> 
					<input type="text" class="form-control" name="documento" placeholder="Digite o CPF" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
					<br>
															
					<center>
						<div class="buttonenv">
							<input type="submit" class="btn btn-success" onClick="document.getElementById('getTable').submit();" value="Pesquisar" /><br>
						</div>
					</center>
				</div>
			</form>

		</fieldset>
<br>		
</div>