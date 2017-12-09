<?php
	require('concessionaria_manutencao.php');
		$oquefazer = new concessionaria_manutencao();
			$acao = $_REQUEST['acao'];
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
	if($acao == 'cadastrar_concessionaria1'){require('concessionaria_form_cad1.php');}//OK
	if($acao == 'cadastrar_concessionaria2'){require('concessionaria_form_cad2.php');}//OK
	
	if($acao == 'gravar_concessionaria1'){$oquefazer->gravar_concessionaria1();$oquefazer->consultar_concessionaria1();require('consultar_concessionaria1.php');}//OK
	if($acao == 'gravar_concessionaria2'){$oquefazer->gravar_concessionaria2();$oquefazer->consultar_concessionaria2();require('consultar_concessionaria2.php');}//OK

	if($acao == 'consultar_concessionaria1'){$oquefazer->consultar_concessionaria1();require('consultar_concessionaria1.php');}//OK
	if($acao == 'consultar_concessionaria2'){$oquefazer->consultar_concessionaria2();require('consultar_concessionaria2.php');}//OK
	
	if($acao == 'atualizar_concessionaria2'){$oquefazer->atualizar_concessionaria2();require('consultar_concessionaria2.php');}//OK

	if($acao == 'alterar_concessionaria1'){$oquefazer->alterar_concessionaria1();require('concessionaria_form_alt1.php');}//OK
	if($acao == 'alterar_concessionaria2'){$oquefazer->alterar_concessionaria2();require('concessionaria_form_alt2.php');}//OK

	if($acao == 'modificar_concessionaria1'){$oquefazer->modificar_concessionaria1();$oquefazer->consultar_concessionaria1();require('consultar_concessionaria1.php');}//OK
	if($acao == 'modificar_concessionaria2'){$oquefazer->modificar_concessionaria2();$oquefazer->atualizar_concessionaria2();require('consultar_concessionaria2.php');}//OK

	if($acao == 'excluir_concessionaria1'){$oquefazer->excluir_concessionaria1();$oquefazer->consultar_concessionaria1();require('consultar_concessionaria1.php');}//OK
	if($acao == 'excluir_concessionaria2'){$oquefazer->excluir_concessionaria2();$oquefazer->consultar_concessionaria2();require('consultar_concessionaria2.php');}//OK
	
	if($acao == 'cd01'){$oquefazer->cd01();require('consultar_concessionaria2.php');}//OK
	if($acao == 'cd02'){$oquefazer->cd02();require('consultar_concessionaria2.php');}//OK
	if($acao == 'cd03'){$oquefazer->cd03();require('consultar_concessionaria2.php');}//OK
	if($acao == 'cd04'){$oquefazer->cd04();require('consultar_concessionaria2.php');}//OK
	if($acao == 'cd05'){$oquefazer->cd05();require('consultar_concessionaria2.php');}//OK
	if($acao == 'cd06'){$oquefazer->cd06();require('consultar_concessionaria2.php');}//OK
	if($acao == 'cd07'){$oquefazer->cd07();require('consultar_concessionaria2.php');}//OK
	if($acao == 'cd08'){$oquefazer->cd08();require('consultar_concessionaria2.php');}//OK
	if($acao == 'cd09'){$oquefazer->cd09();require('consultar_concessionaria2.php');}//OK
	if($acao == 'cd10'){$oquefazer->cd10();require('consultar_concessionaria2.php');}//OK
	if($acao == 'cd11'){$oquefazer->cd11();require('consultar_concessionaria2.php');}//OK
	if($acao == 'cd12'){$oquefazer->cd12();require('consultar_concessionaria2.php');}//OK
	if($acao == 'cd13'){$oquefazer->cd13();require('consultar_concessionaria2.php');}//OK
	if($acao == 'cd14'){$oquefazer->cd14();require('consultar_concessionaria2.php');}//OK
	if($acao == 'cd15'){$oquefazer->cd15();require('consultar_concessionaria2.php');}//OK
	if($acao == 'cd16'){$oquefazer->cd16();require('consultar_concessionaria2.php');}//OK
	if($acao == 'cd17'){$oquefazer->cd17();require('consultar_concessionaria2.php');}//OK
	if($acao == 'cd18'){$oquefazer->cd18();require('consultar_concessionaria2.php');}//OK
	if($acao == 'cd19'){$oquefazer->cd19();require('consultar_concessionaria2.php');}//OK
	if($acao == 'cd20'){$oquefazer->cd20();require('consultar_concessionaria2.php');}//OK
	if($acao == 'cd21'){$oquefazer->cd21();require('consultar_concessionaria2.php');}//OK
	if($acao == 'cd22'){$oquefazer->cd22();require('consultar_concessionaria2.php');}//OK
	if($acao == 'cd23'){$oquefazer->cd23();require('consultar_concessionaria2.php');}//OK
	if($acao == 'cd24'){$oquefazer->cd24();require('consultar_concessionaria2.php');}//OK
	if($acao == 'cd25'){$oquefazer->cd25();require('consultar_concessionaria2.php');}//OK
	if($acao == 'cd26'){$oquefazer->cd26();require('consultar_concessionaria2.php');}//OK
	if($acao == 'cd27'){$oquefazer->cd27();require('consultar_concessionaria2.php');}//OK
	if($acao == 'cd28'){$oquefazer->cd28();require('consultar_concessionaria2.php');}//OK
	if($acao == 'cd29'){$oquefazer->cd29();require('consultar_concessionaria2.php');}//OK
	if($acao == 'cd30'){$oquefazer->cd30();require('consultar_concessionaria2.php');}//OK
	if($acao == 'cd31'){$oquefazer->cd31();require('consultar_concessionaria2.php');}//OK
	
	if($acao == 'cm01'){$oquefazer->cm01();require('consultar_concessionaria2.php');}//OK
	if($acao == 'cm02'){$oquefazer->cm02();require('consultar_concessionaria2.php');}//OK
	if($acao == 'cm03'){$oquefazer->cm03();require('consultar_concessionaria2.php');}//OK
	if($acao == 'cm04'){$oquefazer->cm04();require('consultar_concessionaria2.php');}//OK
	if($acao == 'cm05'){$oquefazer->cm05();require('consultar_concessionaria2.php');}//OK
	if($acao == 'cm06'){$oquefazer->cm06();require('consultar_concessionaria2.php');}//OK
	if($acao == 'cm07'){$oquefazer->cm07();require('consultar_concessionaria2.php');}//OK
	if($acao == 'cm08'){$oquefazer->cm08();require('consultar_concessionaria2.php');}//OK
	if($acao == 'cm09'){$oquefazer->cm09();require('consultar_concessionaria2.php');}//OK
	if($acao == 'cm10'){$oquefazer->cm10();require('consultar_concessionaria2.php');}//OK
	if($acao == 'cm11'){$oquefazer->cm11();require('consultar_concessionaria2.php');}//OK
	if($acao == 'cm12'){$oquefazer->cm12();require('consultar_concessionaria2.php');}//OK

	if($acao == 'ca2012'){$oquefazer->ca2012();require('consultar_concessionaria2.php');}//OK
	if($acao == 'ca2013'){$oquefazer->ca2013();require('consultar_concessionaria2.php');}//OK
	if($acao == 'ca2014'){$oquefazer->ca2016();require('consultar_concessionaria2.php');}//OK
	if($acao == 'ca2015'){$oquefazer->ca2016();require('consultar_concessionaria2.php');}//OK
	if($acao == 'ca2016'){$oquefazer->ca2016();require('consultar_concessionaria2.php');}//OK
	if($acao == 'ca2017'){$oquefazer->ca2017();require('consultar_concessionaria2.php');}//OK
	if($acao == 'ca2018'){$oquefazer->ca2019();require('consultar_concessionaria2.php');}//OK
	if($acao == 'ca2019'){$oquefazer->ca2019();require('consultar_concessionaria2.php');}//OK
	if($acao == 'ca2020'){$oquefazer->ca2020();require('consultar_concessionaria2.php');}//OK
	if($acao == 'ca2021'){$oquefazer->ca2021();require('consultar_concessionaria2.php');}//OK
	if($acao == 'ca2022'){$oquefazer->ca2022();require('consultar_concessionaria2.php');}//OK
	if($acao == 'ca2023'){$oquefazer->ca2023();require('consultar_concessionaria2.php');}//OK

?>