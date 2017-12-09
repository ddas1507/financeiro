<?php
	require('boleto_manutencao.php');
		$oquefazer = new boleto_manutencao();
			$acao = $_REQUEST['acao'];
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
	if($acao == 'cadastrar_boleto'){
		require('boleto_form_cad.php');
	}

	if($acao == 'salvar_dados_form'){
		$oquefazer->gravar_boleto();
		$oquefazer->consultar_boleto();
		require('consultar_boleto.php');
	}

	if($acao == 'consultar_boleto'){
		$oquefazer->consultar_boleto();
		require('consultar_boleto.php');
	}
	
	if($acao == 'detalhes_boleto'){
		$oquefazer->detalhes_boleto();
		require('detalhes_boleto.php');
	}

	if($acao == 'alterar_boleto'){
		$oquefazer->alterar_boleto();
		require('boleto_form_alt.php');
	}

	if($acao == 'modificar_boleto'){
		$oquefazer->modificar_boleto();
		$oquefazer->consultar_boleto();
		require('consultar_boleto.php');
	}

	if($acao == 'excluir_boletos'){
		$oquefazer->excluir_boleto();
		$oquefazer->consultar_boleto();
		require('consultar_boleto.php');
	}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
	
?>