<table border="0" cellpadding="1" cellspacing="1" width="1024px" height="10px" align="center">
<tr ><td ><hr>CONCESSION&Aacute;RIAS > <b>CADASTRAR</b><hr></td></tr>

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
			<option value="353">Santander</option>
			<option value="637">Sofisa</option>
			<option value="082">Topázio</option>
			<option value="116">Unibanco</option>
			<option value="655">Votorantim</option>
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
				onfocus="this.style.backgroundColor='#CCFFCC'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				value=""
			/>
		</td>
	</tr>
	<tr>
		<td width="150px" align="right"><b>C&oacute;digo de Barras:</b></td>
		<td >
			<input 
				type="text" 
				name="CAP_BLT_CODBARBL1" 
				id="CAP_BLT_CODBARBL1" 
				size="5" 
				maxlength="5"
				onfocus="this.style.backgroundColor='#CCFFCC'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onkeyUp="javascript:proximo_campo_cadastrar_boleto('CAP_BLT_CODBARBL1','CAP_BLT_CODBARBL2');"
				onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
				value=""
			>
			<input 
				type="text" 
				name="CAP_BLT_CODBARBL2" 
				id="CAP_BLT_CODBARBL2" 
				size="5" 
				maxlength="5"
				onfocus="this.style.backgroundColor='#CCFFCC'" 
				onblur="this.style.backgroundColor='#FFFFFF'"				
				onkeyUp="javascript:proximo_campo_cadastrar_boleto('CAP_BLT_CODBARBL2','CAP_BLT_CODBARBL3');"
				onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
				value=""
			>
		
			<input 
				type="text" 
				name="CAP_BLT_CODBARBL3" 
				id="CAP_BLT_CODBARBL3" 
				size="5" 
				maxlength="5"
				onfocus="this.style.backgroundColor='#CCFFCC'" 
				onblur="this.style.backgroundColor='#FFFFFF'"				
				onkeyUp="javascript:proximo_campo_cadastrar_boleto('CAP_BLT_CODBARBL3','CAP_BLT_CODBARBL4');"
				onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
				value=""
			>
			<input 
				type="text" 
				name="CAP_BLT_CODBARBL4" 
				id="CAP_BLT_CODBARBL4" 
				size="6" 
				maxlength="6"
				onfocus="this.style.backgroundColor='#CCFFCC'" 
				onblur="this.style.backgroundColor='#FFFFFF'"				
				onkeyUp="javascript:proximo_campo_cadastrar_boleto('CAP_BLT_CODBARBL4','CAP_BLT_CODBARBL5');"
				onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
				value=""
			>

			<input 
				type="text" 
				name="CAP_BLT_CODBARBL5" 
				id="CAP_BLT_CODBARBL5" 
				size="5" 
				maxlength="5"
				onfocus="this.style.backgroundColor='#CCFFCC'" 
				onblur="this.style.backgroundColor='#FFFFFF'"				
				onkeyUp="javascript:proximo_campo_cadastrar_boleto('CAP_BLT_CODBARBL5','CAP_BLT_CODBARBL6');"
				onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
				value=""
			>
			<input 
				type="text" 
				name="CAP_BLT_CODBARBL6" 
				id="CAP_BLT_CODBARBL6" 
				size="6" 
				maxlength="6"
				onfocus="this.style.backgroundColor='#CCFFCC'" 
				onblur="this.style.backgroundColor='#FFFFFF'"				
				onkeyUp="javascript:proximo_campo_cadastrar_boleto('CAP_BLT_CODBARBL6','CAP_BLT_CODBARBL7');"
				onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
				value=""
			>

			<input 
				type="text" 
				name="CAP_BLT_CODBARBL7" 
				id="CAP_BLT_CODBARBL7" 
				size="1" 
				maxlength="1"
				onfocus="this.style.backgroundColor='#CCFFCC'" 
				onblur="this.style.backgroundColor='#FFFFFF'"				
				onkeyUp="javascript:proximo_campo_cadastrar_boleto('CAP_BLT_CODBARBL7','CAP_BLT_CODBARBL8');"
				onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
				value=""
			>
			<input 
				type="text" 
				name="CAP_BLT_CODBARBL8" 
				id="CAP_BLT_CODBARBL8" 
				size="14" 
				maxlength="14"
				onfocus="this.style.backgroundColor='#CCFFCC'" 
				onblur="this.style.backgroundColor='#FFFFFF'"				
				onkeyUp="javascript:proximo_campo_cadastrar_boleto('CAP_BLT_CODBARBL8','CAP_BLT_VALOR');"
				onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
				value=""
			>
		</td>		
	</tr>

	<tr>
		<td width="175px" align="right"><b>Total a Pagar R$:</b></td>
		<td >
			<input 
				type="text" 
				name="CAP_BLT_VALOR" 
				id="CAP_BLT_VALOR" 
				size="20" 
				maxlength="15" 
				onfocus="this.style.backgroundColor='#CCFFCC'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onKeyPress="return(MascaraMoeda(this,'.',',',event))"
			/>
		</td>
	</tr>

	<tr>
		<td width="175px" align="right"><b>Data de Emiss&atilde;o:</b></td>
		<td >
			<input 
				type="text" 
				name="CAP_BLT_DTD_EMIS" 
				id="CAP_BLT_DTD_EMIS" 
				size="1" 
				maxlength="2"
				onfocus="this.style.backgroundColor='#CCFFCC'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onkeyUp="javascript:proximo_campo_cadastrar_boleto('CAP_BLT_DTD_EMIS','CAP_BLT_DTM_EMIS');"
				onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
			>/
			<input 
				type="text" 
				name="CAP_BLT_DTM_EMIS" 
				id="CAP_BLT_DTM_EMIS" 
				size="1" 
				maxlength="2"
				onfocus="this.style.backgroundColor='#CCFFCC'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onkeyUp="javascript:proximo_campo_cadastrar_boleto('CAP_BLT_DTM_EMIS','CAP_BLT_DTA_EMIS');"
				onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
			>/
			<input 
				type="text" 
				name="CAP_BLT_DTA_EMIS" 
				id="CAP_BLT_DTA_EMIS" 
				size="2" 
				maxlength="4"
				onfocus="this.style.backgroundColor='#CCFFCC'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onkeyUp="javascript:proximo_campo_cadastrar_boleto('CAP_BLT_DTA_EMIS','CAP_BLT_DTD_VENC');"
				onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
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
				onfocus="this.style.backgroundColor='#CCFFCC'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onkeyUp="javascript:proximo_campo_cadastrar_boleto('CAP_BLT_DTD_VENC','CAP_BLT_DTM_VENC');"
				onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
			>/
			<input 
				type="text" 
				name="CAP_BLT_DTM_VENC" 
				id="CAP_BLT_DTM_VENC" 
				size="1" 
				maxlength="2"
				onfocus="this.style.backgroundColor='#CCFFCC'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onkeyUp="javascript:proximo_campo_cadastrar_boleto('CAP_BLT_DTM_VENC','CAP_BLT_DTA_VENC');"
				onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
			>/
			<input 
				type="text" 
				name="CAP_BLT_DTA_VENC" 
				id="CAP_BLT_DTA_VENC" 
				size="2" 
				maxlength="4"
				onfocus="this.style.backgroundColor='#CCFFCC'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onkeyUp="javascript:proximo_campo_cadastrar_boleto('CAP_BLT_DTA_VENC','CAP_BLT_OBS');"
				onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
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
				onfocus="this.style.backgroundColor='#CCFFCC'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onkeyUp="javascript:proximo_campo_cadastrar_boleto('CAP_BLT_OBS','CAP_BLT_STATUS');"
			>		
		</td>
	</tr>

	<tr >
		<td width="150px" align="right"><b>Situa&ccedil;&atilde;o:</b></td>
		<td >
			<select name="CAP_BLT_STATUS" id="CAP_BLT_STATUS">
				<option value="">Escolha...</option>
				<option value="pago">Pago</option>
				<option value="concluido">Concluido</option>
			</select>
		</td>
	</tr>

	<tr align="right">
		<td colspan="4">
			<input type="submit" value="Salvar Cadastro" name="Salvar Cadastro" OnClick="check();">
			&nbsp;
			<input type="reset" value="Limpar Cadastro"  name="Limpar Cadastro">
			<input type="hidden" value="gravar_boleto" name="tabela" >
			<input type="hidden" value="salvar_dados_form" name="acao" >		
		</td>
	</tr>
</form>	
</table>