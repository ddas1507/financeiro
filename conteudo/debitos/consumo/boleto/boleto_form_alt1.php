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
		<td colspan="2" align="right">
			<input type="submit" value="Alterar Cadastro" name="Alterar Cadastro">
			&nbsp;
			<input type="reset" value="Restaurar Cadastro"  name="Restaurar Cadastro">
			<input type="hidden" value="modificar_boleto1" name="tabela" >
			<input type="hidden" value="modificar_boleto1" name="acao" >		
			<input type="hidden" value="<?php echo $oquefazer->registros->CAP_BLT_CODIGO;?>" name="codigo" >					
		</td>
	</tr>
</form>	
</table>