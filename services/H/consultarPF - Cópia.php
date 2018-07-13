<?php 
$documento = filter_input(INPUT_GET, 'documento');
$qry = 'https://api.assertivasolucoes.com.br/api/1.0.0/localize/xml/pf?empresa=ACCESSCOB&usuario=ACCESSCOB-WS&senha=r0qk8ab@&documento='.$documento;
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
			<h2 class="page-header">Portal > Higienização</h2>
		</div>
	</div>
	
		<!--
			https://api.assertivasolucoes.com.br/api/1.0.0/localize/xml/pf?empresa=SUA-EMPRESA&usuario=SEU-USUARIO&senha=SUA-SENHA&documento=NUMERO-CPF
		-->
		
		
		<fieldset class="well form-horizontal">
			<legend><br><br>Consultar</legend>
			
			<?php						
			// get XML remotely / locally / or / just set it as string '<root>...</root>'  
			$sXml = file_get_contents($qry);

			// parse XML  
			$oXML = simplexml_load_string($sXml);  
			if (!$oXML) {  
			  die('xml format not valid or simplexml module missing.');  
			}  

			// assuming running the root  
			$oXmlRoot = $oXML; // or can be [$oXML->food]  

			//echo '<pre>'; print_r( $oXmlRoot ); echo '</pre>';  
			echo xmlToHtmlTable($oXmlRoot);  

			function xmlToHtmlTable($p_oXmlRoot) {  
			  $bIsHeaderProceessed = false;  
				
			  $sTHead = '';  
			  $sTBody = '';       
			  foreach ($p_oXmlRoot as $oNode) {
				   foreach ($oNode as $sName => $oValue){  
						if (!$bIsHeaderProceessed) {  
							//$sTHead .= "<tr>";  
						}  
						$sValue = (string)$oValue;  
						$sTBody .= "<tr><td>{$sName}</td><td>{$sValue}</td></tr>";                 
				   }  
				   $bIsHeaderProceessed = true;  
				   //$sTBody .= '</tr>';  
			  }  
				
			  $sHTML = "<center>
						<table border=1 width=600px>  
							<th>#</th><th>Valor</th>
							{$sTHead}{$sTBody}
						</table>
						</center>";  
			  return $sHTML;  
		}
		?>
		</fieldset>
<br>		
</div>