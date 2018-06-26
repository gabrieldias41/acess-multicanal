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

	//FORM DATA
	$tokn = '3B2F48D0DC3587DA1251';
	$usr = 'adminaccess';
	$varcanal = '2';
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

<div style="background: white; padding-left: 10px">
	<div class="row">
		<div class="col-lg-12">
			<h2 class="page-header">Portal > Chatbot</h2>
		</div>
	</div>
		<!--
		<fieldset class="well form-horizontal">
			<legend><br><br>Envio de lista CSV para SMS Massivo</legend>
				<form action="" method="post" enctype="multipart/form-data">
				
					<div class="form-group">
						<label class="col-md-4 control-label">SELECIONE A CARTEIRA: </label>
						<div class="col-md-4 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
								<select name="CARTEIRA">
									<option value="_cBREITHAUP">BREITHAUP</option>
									<option value="_cHOSPITAIS">HOSPITAIS</option>
									<option value="_cTEST">TEST</option>
								</select>
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-md-4 control-label">SELECIONE O METODO: </label>
						<div class="col-md-4 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-cog"></i></span>
								<select name="METODO">
									<option value="_q15020">15% DA BASE A CADA 20 MIN</option>
									<option value="_q30020">30% DA BASE A CADA 20 MIN</option>
								</select>
							</div>
						</div>
					</div>
						
					<div class="form-group">
						<label class="col-md-4 control-label">MAILING (.CSV) </label>
						<div class="col-md-4 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-folder-open" style="height:5px; top:-3px;"></i></span>
								<input type="file" name="arquivo"/>
							</div>
						</div>
					</div>
					
					<center>
						<input type="submit" name="enviar" value="Enviar" /><br>
					</center>

			</form>
		</fieldset>
		-->

		<fieldset class="well form-horizontal">
			<legend><br><br>Mensagens do chatbot (com bugs)</legend>
			<form method="GET" action="http://s.robbu.com.br/wsInvenioAPI.ashx" id="send_sms">
			
				<div id="newsletter"> 
					<input type="text" hidden="true" name="token" value="<?php echo $tokn; ?>"/>
					<input type="text" hidden="true" name="canal" value="<?php echo $varcanal; ?>"/>
					Data e hora inicio:<br>
					<input type="datetime-local" name="datainicio" value="" placeholder="ddMMyyyyHHmmss"/>
					<br>
					<br>
					Data e hora fim:<br>
					<input type="datetime-local" name="datafim" value="" placeholder="ddMMyyyyHHmmss"/>
					<input type="text" hidden="true" name="acao" value="buscarenvios"/>
										
					<center>
						<div class="buttonenv">
							<!-- input type="hidden" name="submit_newsletter" /> -->
							<!-- a href="#" onClick="document.getElementById('send_sms').submit();">Enviar</a> -->
							<input type="submit" onClick="document.getElementById('send_sms').submit();" name="submit" value="Enviar" /><br>
						</div>
					</center>
				</div>
			</form>
		</fieldset>
<br>		
</div>

