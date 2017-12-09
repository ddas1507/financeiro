<table border="0" cellpadding="1" cellspacing="1" width="1024px" height="10x" align="center">
<tr ><td ><hr>BOLETOS ><a href="index.php?tabela=consultar_boleto&acao=consultar_boleto">CONSULTAR</a> > <b>ALTERAR</b><hr></td></tr>
<table class="bordas" border="0" cellpadding="3" cellspacing="3" width="1024px" height="10x" align="center">
<form name="alterar_boleto" action="index.php" method="post">
	<tr >
		<td width="150px" align="right"><b>Banco:</b></td>
		<td >
 			<select name="CAP_BLT_BANCO" id="CAP_BLT_BANCO">
			<?php
				$Alfa = '';
				$BancodoBrasil = '';
				$BMG = '';
				$Bradesco = '';
				$Cacique = '';
				$CaixaEconomicaFederal = '';
				$CitiBank = '';
				$CruzeirodoSul= '';
				$Daycoval = '';
				$Finasa = '';
				$Fininvest = '';
				$HSBC = '';
				$IBI = '';
				$Intermedium = '';
				$Itaú = '';
				$NossaCaixa = '';
				$Panamericano = '';
				$Real = '';
				$Safra = '';
				$Santander = '';
				$Sofisa = '';
				$Topázio = '';
				$Unibanco = '';
				$Votorantim = '';

				switch($oquefazer->registros->CAP_BLT_BANCO)
				{
					case '298': $Alfa = 'selected'; break;
					case '001': $BancodoBrasil = 'selected'; break;
					case '318': $BMG = 'selected'; break;
					case '237': $Bradesco = 'selected'; break;
					case '263': $Cacique = 'selected'; break;
					case '104': $CaixaEconomicaFederal = 'selected'; break;
					case '745': $CitiBank = 'selected'; break;
					case '229': $CruzeirodoSul = 'selected'; break;
					case '707': $Daycoval = 'selected'; break;
					case '175': $Finasa = 'selected'; break;
					case '252': $Fininvest = 'selected'; break;
					case '399': $HSBC = 'selected'; break;
					case '063': $IBI = 'selected'; break;
					case '077': $Intermedium = 'selected'; break;
					case '341': $Itaú = 'selected'; break;
					case '151': $NossaCaixa = 'selected'; break;
					case '623': $Panamericano = 'selected'; break;
					case '356': $Real = 'selected'; break;
					case '422': $Safra = 'selected'; break;
					case '353': $Santander = 'selected'; break;
					case '637': $Sofisa = 'selected'; break;
					case '082': $Unibanco = 'selected'; break;
					case '655': $Votorantim = 'selected'; break;
				}
			?>		
					<option value="">Escolha...</option>
					<option value="298" <?php echo $Alfa;?>>Alfa</option>
					<option value="001" <?php echo $BancodoBrasil;?>>Banco do Brasil</option>
					<option value="318" <?php echo $BMG;?>>BMG</option>
					<option value="237" <?php echo $Bradesco;?>>Bradesco</option>
					<option value="263" <?php echo $Cacique;?>>Cacique</option>
					<option value="104" <?php echo $CaixaEconomicaFederal;?>>Caixa Economica Federal</option>
					<option value="745" <?php echo $CitiBank;?>>CitiBank</option>
					<option value="229" <?php echo $CruzeirodoSul;?>>Cruzeiro do Sul</option>
					<option value="707" <?php echo $Daycoval;?>>Daycoval</option>
					<option value="175" <?php echo $Finasa;?>>Finasa</option>
					<option value="252" <?php echo $Fininvest;?>>Fininvest</option>
					<option value="399" <?php echo $HSBC;?>>HSBC</option>
					<option value="063" <?php echo $IBI;?>>IBI</option>
					<option value="077" <?php echo $Intermedium;?>>Intermedium</option>
					<option value="341" <?php echo $Itaú;?>>Itaú</option>
					<option value="151" <?php echo $NossaCaixa;?>>Nossa Caixa</option>
					<option value="623" <?php echo $Panamericano;?>>Panamericano</option>
					<option value="356" <?php echo $Real;?>>Real</option>
					<option value="422" <?php echo $Safra;?>>Safra</option>
					<option value="353" <?php echo $Santander;?>>Santander</option>
					<option value="637" <?php echo $Sofisa;?>>Sofisa</option>
					<option value="082" <?php echo $Unibanco;?>>Unibanco</option>
					<option value="655" <?php echo $Votorantim;?>>Votorantim</option>
			</select>
		</td>
	</tr>
	
	<tr >
		<td width="175px" align="right"><b>Cedente:</b></td>
		<td >
			<input 
				type="text" 
				name="CAP_BLT_CEDENTE" 
				id="CAP_BLT_CEDENTE" 
				size="62" 
				maxlength="50" 
				onfocus="this.style.backgroundColor='#FFFF99'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				value="<?php echo $oquefazer->registros->CAP_BLT_CEDENTE;?>"
			/>
		</td>
	</tr>
	<tr>
		<td width="175px" align="right"><b>C&oacute;digo de Barras:</b></td>
		<td >
			<input 
				type="text" 
				name="CAP_BLT_CODBARBL1" 
				id="CAP_BLT_CODBARBL1" 
				size="5" 
				maxlength="5"
				onfocus="this.style.backgroundColor='#FFFF99'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onkeyUp="javascript:proximo_campo_cadastrar_boleto('CAP_BLT_CODBARBL1','CAP_BLT_CODBARBL2');"
				onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
				value="<?php echo $oquefazer->registros->CAP_BLT_CODBARBL1;?>"
			>
			<input 
				type="text" 
				name="CAP_BLT_CODBARBL2" 
				id="CAP_BLT_CODBARBL2" 
				size="5" 
				maxlength="5"
				onfocus="this.style.backgroundColor='#FFFF99'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onkeyUp="javascript:proximo_campo_cadastrar_boleto('CAP_BLT_CODBARBL2','CAP_BLT_CODBARBL3');"
				onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
				value="<?php echo $oquefazer->registros->CAP_BLT_CODBARBL2;?>"
			>
		
			<input 
				type="text" 
				name="CAP_BLT_CODBARBL3" 
				id="CAP_BLT_CODBARBL3" 
				size="5" 
				maxlength="5"
				onfocus="this.style.backgroundColor='#FFFF99'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onkeyUp="javascript:proximo_campo_cadastrar_boleto('CAP_BLT_CODBARBL3','CAP_BLT_CODBARBL4');"
				onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
				value="<?php echo $oquefazer->registros->CAP_BLT_CODBARBL3;?>"
			>
			<input 
				type="text" 
				name="CAP_BLT_CODBARBL4" 
				id="CAP_BLT_CODBARBL4" 
				size="6" 
				maxlength="6"
				onfocus="this.style.backgroundColor='#FFFF99'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onkeyUp="javascript:proximo_campo_cadastrar_boleto('CAP_BLT_CODBARBL4','CAP_BLT_CODBARBL5');"
				onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
				value="<?php echo $oquefazer->registros->CAP_BLT_CODBARBL4;?>"
			>

			<input 
				type="text" 
				name="CAP_BLT_CODBARBL5" 
				id="CAP_BLT_CODBARBL5" 
				size="5" 
				maxlength="5"
				onfocus="this.style.backgroundColor='#FFFF99'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onkeyUp="javascript:proximo_campo_cadastrar_boleto('CAP_BLT_CODBARBL5','CAP_BLT_CODBARBL6');"
				onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
				value="<?php echo $oquefazer->registros->CAP_BLT_CODBARBL5;?>"
			>
			<input 
				type="text" 
				name="CAP_BLT_CODBARBL6" 
				id="CAP_BLT_CODBARBL6" 
				size="6" 
				maxlength="6"
				onfocus="this.style.backgroundColor='#FFFF99'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onkeyUp="javascript:proximo_campo_cadastrar_boleto('CAP_BLT_CODBARBL6','CAP_BLT_CODBARBL7');"
				onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
				value="<?php echo $oquefazer->registros->CAP_BLT_CODBARBL6;?>"
			>

			<input 
				type="text" 
				name="CAP_BLT_CODBARBL7" 
				id="CAP_BLT_CODBARBL7" 
				size="1" 
				maxlength="1"
				onfocus="this.style.backgroundColor='#FFFF99'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onkeyUp="javascript:proximo_campo_cadastrar_boleto('CAP_BLT_CODBARBL7','CAP_BLT_CODBARBL8');"
				onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
				value="<?php echo $oquefazer->registros->CAP_BLT_CODBARBL7;?>"
			>
			<input 
				type="text" 
				name="CAP_BLT_CODBARBL8" 
				id="CAP_BLT_CODBARBL8" 
				size="14" 
				maxlength="14"
				onfocus="this.style.backgroundColor='#FFFF99'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onkeyUp="javascript:proximo_campo_cadastrar_boleto('CAP_BLT_CODBARBL8','CAP_BLT_VALOR');"
				onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
				value="<?php echo $oquefazer->registros->CAP_BLT_CODBARBL8;?>"
			>
		</td>		
	</tr>
	
	<tr>
		<td width="175px" align="right"><b>Total a Pagar R$:</b></td>
		<td >
			<input 
				type="text" 
				name="CAP_BLT_VALOR" id="CAP_BLT_VALOR" 
				size="15" maxlength="15" 
				onfocus="this.style.backgroundColor='#FFFF99'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onKeyPress="return(MascaraMoeda(this,'.',',',event))"
				value="<?php echo $oquefazer->registros->CAP_BLT_VALOR;?>"
			>
		</td>
	</tr>

	<tr>
		<td width="150px" align="right"><b>Data de Emiss&atilde;o:</b></td>
		<td >
			<input 
				type="text" 
				name="CAP_BLT_DTD_EMIS" 
				id="CAP_BLT_DTD_EMIS" 
				size="1" 
				maxlength="2"
				onfocus="this.style.backgroundColor='#FFFF99'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onkeyUp="javascript:proximo_campo_cadastrar_boleto('CAP_BLT_DTD_EMIS','CAP_BLT_DTM_EMIS');"
				onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
				value="<?php echo $oquefazer->registros->CAP_BLT_DTD_EMIS;?>"
			>/
			<input 
				type="text" 
				name="CAP_BLT_DTM_EMIS" 
				id="CAP_BLT_DTM_EMIS" 
				size="1" 
				maxlength="2"
				onfocus="this.style.backgroundColor='#FFFF99'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onkeyUp="javascript:proximo_campo_cadastrar_boleto('CAP_BLT_DTM_EMIS','CAP_BLT_DTA_EMIS');"
				onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
				value="<?php echo $oquefazer->registros->CAP_BLT_DTM_EMIS;?>"				
			>/
			<input 
				type="text" 
				name="CAP_BLT_DTA_EMIS" 
				id="CAP_BLT_DTA_EMIS" 
				size="2" 
				maxlength="4"
				onfocus="this.style.backgroundColor='#FFFF99'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onkeyUp="javascript:proximo_campo_cadastrar_boleto('CAP_BLT_DTA_EMIS','CAP_BLT_DTD_VENC');"
				onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
				value="<?php echo $oquefazer->registros->CAP_BLT_DTA_EMIS;?>"
			>
		</td>
	</tr>
	
	<tr>
		<td width="175px" align="right"><b>Data de Vencimento:</b></td>
		<td >
			<input 
				type="text" 
				name="CAP_BLT_DTD_VENC" 
				id="CAP_BLT_DTD_VENC" 
				size="1" 
				maxlength="2"
				onfocus="this.style.backgroundColor='#FFFF99'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onkeyUp="javascript:proximo_campo_cadastrar_boleto('CAP_BLT_DTD_VENC','CAP_BLT_DTM_VENC');"
				onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
				value="<?php echo $oquefazer->registros->CAP_BLT_DTD_VENC;?>"
			>/
			<input 
				type="text" 
				name="CAP_BLT_DTM_VENC" 
				id="CAP_BLT_DTM_VENC" 
				size="1" 
				maxlength="2"
				onfocus="this.style.backgroundColor='#FFFF99'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onkeyUp="javascript:proximo_campo_cadastrar_boleto('CAP_BLT_DTM_VENC','CAP_BLT_DTA_VENC');"
				onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
				value="<?php echo $oquefazer->registros->CAP_BLT_DTM_VENC;?>"
			>/
			<input 
				type="text" 
				name="CAP_BLT_DTA_VENC" 
				id="CAP_BLT_DTA_VENC" 
				size="2" 
				maxlength="4"
				onfocus="this.style.backgroundColor='#FFFF99'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onkeyUp="javascript:proximo_campo_cadastrar_boleto('CAP_BLT_DTA_VENC','CAP_BLT_OBS');"
				onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
				value="<?php echo $oquefazer->registros->CAP_BLT_DTA_VENC;?>"
			>
		</td>
	</tr>

	<tr >
		<td width="150px" align="right"><b>Observa&ccedil;&atilde;o:</b></td>
		<td >
			<input 
				type="text" 
				name="CAP_BLT_OBS" 
				id="CAP_BLT_OBS" 
				size="62" 
				maxlength="100"
				onfocus="this.style.backgroundColor='#FFFF99'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onkeyUp="javascript:proximo_campo_cadastrar_boleto('CAP_BLT_OBS','CAP_BLT_STATUS');"
				value="<?php echo $oquefazer->registros->CAP_BLT_OBS;?>"
			>		
		</td>
	</tr>
	
	<tr>
		<td align="right"><b>Situa&ccedil;&atilde;o:</b></td>
		<td colspan="14">
			<select name="CAP_BLT_STATUS" id="CAP_BLT_STATUS">
			<?php
				$pago = '';
				$concluido = '';

				switch($oquefazer->registros->CAP_BLT_STATUS)
				{
					case 'pago': $pago = 'selected'; break;
					case 'concluido': $concluido = 'selected'; break;
				}
			?>
				<option value="">Escolha...</option>
				<option value="pago" <?php echo $pago;?>>Pago</option>
				<option value="concluido" <?php echo $concluido;?>>Concluido</option>
			</select>
		</td>
	</tr>

	<tr >
		<td colspan="2" align="right">
			<input type="submit" value="Alterar Cadastro" name="Alterar Cadastro">
			&nbsp;
			<input type="reset" value="Restaurar Cadastro"  name="Restaurar Cadastro">
			<input type="hidden" value="modificar_boleto" name="tabela" >
			<input type="hidden" value="modificar_boleto" name="acao" >		
			<input type="hidden" value="<?php echo $oquefazer->registros->CAP_BLT_CODIGO;?>" name="codigo" >					
		</td>
	</tr>
</form>	
</table>