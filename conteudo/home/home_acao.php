<?php
	require('home_manutencao.php');
		$oquefazer = new home_manutencao();
			$acao = $_REQUEST['acao'];
	if($acao == 'consultar_home'){
		$oquefazer->totalderegistrosemcontasapagarconcessionarias();
		$oquefazer->totaldedebitosemcontasapagarconcessionarias();
		$oquefazer->totalderegistrosemcontasapagarboletos();
		$oquefazer->totaldedebitosemcontasapagarboletos();
			require('consultar_home.php');
	}
?>