<table border="0" cellpadding="1" cellspacing="1" width="1024px" height="10px" align="center">
<tr ><td ><hr>D&Eacute;BITOS > BOLETOS > <b>NOVO REGISTRO</b><hr></td></tr>

<table class="bordas" border="0" cellpadding="3" cellspacing="3" width="1024px" height="10px" align="left">
<form id="cadastrar_boleto" name="cadastrar_boleto" action="index.php" method="post" enctype="multipart/form-data" onsubmit="return validar(this);" >
	<tr >
		<td width="150px" align="right"><b>Banco:</b></td>
		<td >
		   <select name="CAP_BLT_BANCO" id="CAP_BLT_BANCO">
			<option value="">Escolha...</option>
			<option value="298">Alfa</option>
			<option value="001">Banco do Brasil</option>
			<option value="318">BMG</option>
			<option value="237">Bradesco</option>
			<option value="263">Cacique</option>
			<option value="104">Caixa Econômica Federal</option>
			<option value="745">CitiBank</option>
			<option value="229">Cruzeiro do Sul</option>
			<option value="707">Daycoval</option>
			<option value="175">Finasa</option>
			<option value="252">Fininvest</option>
			<option value="399">HSBC</option>
			<option value="063">IBI</option>
			<option value="077">Intermedium</option>
			<option value="341">Itaú</option>
			<option value="151">Nossa Caixa</option>
			<option value="623">Panamericano</option>
			<option value="356">Real</option>
			<option value="422">Safra</option>
			<option value="033">Santander</option>
			<option value="637">Sofisa</option>
			<option value="082">Topázio</option>
			<option value="116">Unibanco</option>
			<option value="655">Votorantim</option>
			</select>
		</td>

		<td colspan="4">
			<input type="submit" value="Salvar Cadastro" name="Salvar Cadastro" OnClick="check();">
			&nbsp;
			<input type="reset" value="Limpar Cadastro"  name="Limpar Cadastro">
			<input type="hidden" value="gravar_boleto1" name="tabela" >
			<input type="hidden" value="gravar_boleto1" name="acao" >		
		</td>
	</tr>
</form>	
</table>