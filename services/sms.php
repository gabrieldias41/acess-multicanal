<?php
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

        <title>AC Soluções</title>

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
			<h2 class="page-header">SMS</h2>
		</div>
	</div>
	
		<fieldset class="well form-horizontal">
			<legend><br><br>Envio de lista CSV para SMS Massivo</legend>
			
			<iframe src="http://gabrieldias.freeasphost.net/SMS.aspx" width="100%" frameborder="0" height="280px"></iframe>
			
		</fieldset>
		<fieldset class="well form-horizontal">
			<legend><br><br>Envio avulso de SMS</legend>
			<form method="GET" action="http://s.robbu.com.br/wsInvenioAPI.ashx" id="send_sms">
				<div id="newsletter"> 
					<input type="text" hidden="true" name="token" value="<?php echo $tokn; ?>"/>
					<input type="text" hidden="true" name="acao" value="enviarmensagem"/>
					<input type="text" hidden="true" name="nomeusuario" value="<?php echo $usr; ?>"/>
					
					
					<div class="form-group">
						<label class="col-md-4 control-label">DDD</label>
						<div class="col-md-4 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
								<input  type="text" name="dddtelefone" placeholder="DDD" class="form-control" value="">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label">Telefone</label>
						<div class="col-md-4 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
								<input  type="text" name="numerotelefone" placeholder="XXXX-XXXX" class="form-control" value="">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label">Mensagem</label>
						<div class="col-md-4 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
								
								<textarea class="txtarea" name="mensagem" rows="5" cols="32" maxlength="159"></textarea>
							</div>
						</div>
					</div>
					
					<input type="text" hidden="true" name="canal" value="<?php echo $varcanal; ?>"/>
					<input type="text" hidden="true" name="codcarteira" value=""/>
					<input type="text" hidden="true" name="EnderecoEmail" value=""/>
					<input type="text" hidden="true" name="CpfCnpj" value=""/>
					<input type="text" hidden="true" name="WhatsappSaidaDDD" value=""/>
					<input type="text" hidden="true" name="WhatsappSaidaTelefone" value=""/>
					<input type="text" hidden="true" name="massivo" value="n"/>
					
					<center>
						<div class="buttonenv">
							<input type="submit" onClick="document.getElementById('send_sms').submit();" name="submit" value="Enviar" /><br>
						</div>
					</center>
				</div>
			</form>
		</fieldset>
<br>		
</div>

