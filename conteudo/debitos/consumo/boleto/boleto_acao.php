<?php
	require('boleto_manutencao.php');
		$oquefazer = new boleto_manutencao();
			$acao = $_REQUEST['acao'];
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
	if($acao == 'cadastrar_boleto1'){require('boleto_form_cad1.php');}//OK
	if($acao == 'cadastrar_boleto2'){require('boleto_form_cad2.php');}//OK
	
	if($acao == 'gravar_boleto1'){$oquefazer->gravar_boleto1();$oquefazer->consultar_boleto1();require('consultar_boleto1.php');}//OK
	if($acao == 'gravar_boleto2'){$oquefazer->gravar_boleto2();$oquefazer->consultar_boleto2();require('consultar_boleto2.php');}//OK

	if($acao == 'consultar_boleto1'){$oquefazer->consultar_boleto1();require('consultar_boleto1.php');}//OK
	if($acao == 'consultar_boleto2'){$oquefazer->consultar_boleto2();require('consultar_boleto2.php');}//OK
	
	if($acao == 'atualizar_boleto2'){$oquefazer->atualizar_boleto2();require('consultar_boleto2.php');}//OK

	if($acao == 'alterar_boleto1'){$oquefazer->alterar_boleto1();require('boleto_form_alt1.php');}//OK
	if($acao == 'alterar_boleto2'){$oquefazer->alterar_boleto2();require('boleto_form_alt2.php');}//OK

	if($acao == 'modificar_boleto1'){$oquefazer->modificar_boleto1();$oquefazer->consultar_boleto1();require('consultar_boleto1.php');}//OK
	if($acao == 'modificar_boleto2'){$oquefazer->modificar_boleto2();$oquefazer->atualizar_boleto2();require('consultar_boleto2.php');}//OK

	if($acao == 'excluir_boleto1'){$oquefazer->excluir_boleto1();$oquefazer->consultar_boleto1();require('consultar_boleto1.php');}//OK
	if($acao == 'excluir_boleto2'){$oquefazer->excluir_boleto2();$oquefazer->consultar_boleto2();require('consultar_boleto2.php');}//OK
	
	if($acao == 'bd01'){$oquefazer->bd01();require('consultar_boleto2.php');}//OK
	if($acao == 'bd02'){$oquefazer->bd02();require('consultar_boleto2.php');}//OK
	if($acao == 'bd03'){$oquefazer->bd03();require('consultar_boleto2.php');}//OK
	if($acao == 'bd04'){$oquefazer->bd04();require('consultar_boleto2.php');}//OK
	if($acao == 'bd05'){$oquefazer->bd05();require('consultar_boleto2.php');}//OK
	if($acao == 'bd06'){$oquefazer->bd06();require('consultar_boleto2.php');}//OK
	if($acao == 'bd07'){$oquefazer->bd07();require('consultar_boleto2.php');}//OK
	if($acao == 'bd08'){$oquefazer->bd08();require('consultar_boleto2.php');}//OK
	if($acao == 'bd09'){$oquefazer->bd09();require('consultar_boleto2.php');}//OK
	if($acao == 'bd10'){$oquefazer->bd10();require('consultar_boleto2.php');}//OK
	if($acao == 'bd11'){$oquefazer->bd11();require('consultar_boleto2.php');}//OK
	if($acao == 'bd12'){$oquefazer->bd12();require('consultar_boleto2.php');}//OK
	if($acao == 'bd13'){$oquefazer->bd13();require('consultar_boleto2.php');}//OK
	if($acao == 'bd14'){$oquefazer->bd14();require('consultar_boleto2.php');}//OK
	if($acao == 'bd15'){$oquefazer->bd15();require('consultar_boleto2.php');}//OK
	if($acao == 'bd16'){$oquefazer->bd16();require('consultar_boleto2.php');}//OK
	if($acao == 'bd17'){$oquefazer->bd17();require('consultar_boleto2.php');}//OK
	if($acao == 'bd18'){$oquefazer->bd18();require('consultar_boleto2.php');}//OK
	if($acao == 'bd19'){$oquefazer->bd19();require('consultar_boleto2.php');}//OK
	if($acao == 'bd20'){$oquefazer->bd20();require('consultar_boleto2.php');}//OK
	if($acao == 'bd21'){$oquefazer->bd21();require('consultar_boleto2.php');}//OK
	if($acao == 'bd22'){$oquefazer->bd22();require('consultar_boleto2.php');}//OK
	if($acao == 'bd23'){$oquefazer->bd23();require('consultar_boleto2.php');}//OK
	if($acao == 'bd24'){$oquefazer->bd24();require('consultar_boleto2.php');}//OK
	if($acao == 'bd25'){$oquefazer->bd25();require('consultar_boleto2.php');}//OK
	if($acao == 'bd26'){$oquefazer->bd26();require('consultar_boleto2.php');}//OK
	if($acao == 'bd27'){$oquefazer->bd27();require('consultar_boleto2.php');}//OK
	if($acao == 'bd28'){$oquefazer->bd28();require('consultar_boleto2.php');}//OK
	if($acao == 'bd29'){$oquefazer->bd29();require('consultar_boleto2.php');}//OK
	if($acao == 'bd30'){$oquefazer->bd30();require('consultar_boleto2.php');}//OK
	if($acao == 'bd31'){$oquefazer->bd31();require('consultar_boleto2.php');}//OK
	
	if($acao == 'bm01'){$oquefazer->bm01();require('consultar_boleto2.php');}//OK
	if($acao == 'bm02'){$oquefazer->bm02();require('consultar_boleto2.php');}//OK
	if($acao == 'bm03'){$oquefazer->bm03();require('consultar_boleto2.php');}//OK
	if($acao == 'bm04'){$oquefazer->bm04();require('consultar_boleto2.php');}//OK
	if($acao == 'bm05'){$oquefazer->bm05();require('consultar_boleto2.php');}//OK
	if($acao == 'bm06'){$oquefazer->bm06();require('consultar_boleto2.php');}//OK
	if($acao == 'bm07'){$oquefazer->bm07();require('consultar_boleto2.php');}//OK
	if($acao == 'bm08'){$oquefazer->bm08();require('consultar_boleto2.php');}//OK
	if($acao == 'bm09'){$oquefazer->bm09();require('consultar_boleto2.php');}//OK
	if($acao == 'bm10'){$oquefazer->bm10();require('consultar_boleto2.php');}//OK
	if($acao == 'bm11'){$oquefazer->bm11();require('consultar_boleto2.php');}//OK
	if($acao == 'bm12'){$oquefazer->bm12();require('consultar_boleto2.php');}//OK

	if($acao == 'ba2012'){$oquefazer->ba2012();require('consultar_boleto2.php');}//OK
	if($acao == 'ba2013'){$oquefazer->ba2013();require('consultar_boleto2.php');}//OK
	if($acao == 'ba2014'){$oquefazer->ba2016();require('consultar_boleto2.php');}//OK
	if($acao == 'ba2015'){$oquefazer->ba2016();require('consultar_boleto2.php');}//OK
	if($acao == 'ba2016'){$oquefazer->ba2016();require('consultar_boleto2.php');}//OK
	if($acao == 'ba2017'){$oquefazer->ba2017();require('consultar_boleto2.php');}//OK
	if($acao == 'ba2018'){$oquefazer->ba2019();require('consultar_boleto2.php');}//OK
	if($acao == 'ba2019'){$oquefazer->ba2019();require('consultar_boleto2.php');}//OK
	if($acao == 'ba2020'){$oquefazer->ba2020();require('consultar_boleto2.php');}//OK
	if($acao == 'ba2021'){$oquefazer->ba2021();require('consultar_boleto2.php');}//OK
	if($acao == 'ba2022'){$oquefazer->ba2022();require('consultar_boleto2.php');}//OK
	if($acao == 'ba2023'){$oquefazer->ba2023();require('consultar_boleto2.php');}//OK

?>