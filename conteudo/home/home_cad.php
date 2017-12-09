<table border="0" cellpadding="1" cellspacing="1" width="1024px" height="10px" align="center">
<tr ><td ><hr>CONCESSION&Aacute;RIAS > <b>CADASTRAR</b><hr></td></tr>

<table class="bordas" border="1" cellpadding="3" cellspacing="3" width="1024px" height="10px" align="left">
<form name="cadastrar_concessionaria" action="index.php" method="post" enctype="multipart/form-data">
	<tr >
		<td width="100px" align="right"><b>Cendente:</b></td>
		<td >
			<input 
				type="text" 
				name="CAP_CONS_EMPRESA" 
				id="CAP_CONS_EMPRESA" 
				size="30" 
				maxlength="30" 
				onfocus="this.style.backgroundColor='#CCFFCC'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				autofocus="autofocus"
			/>
		</td>
	</tr>
	
	<tr>
		<td width="120px" align="right"><b>Valor: R$</b></td>
		<td >
			<input 
				type="text" 
				name="CAP_CONS_VALOR" 
				id="CAP_CONS_VALOR" 
				size="15" 
				maxlength="15" 
				onfocus="this.style.backgroundColor='#CCFFCC'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onKeyPress="return(MascaraMoeda(this,'.',',',event))"
				/>
		</td>
	</tr>
	
	<tr>
		<td width="120px" align="right"><b>Vencimento:</b></td>
		<td >
			<input 
				type="text" 
				name="CAP_CONS_DTD_VENC" 
				id="CAP_CONS_DTD_VENC" 
				size="1" 
				maxlength="2"
				onfocus="this.style.backgroundColor='#CCFFCC'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onkeyUp="javascript:proximo_campo_cadastrar_concessionaria('CAP_CONS_DTD_VENC','CAP_CONS_DTM_VENC');"
			>/
			<input 
				type="text" 
				name="CAP_CONS_DTM_VENC" 
				id="CAP_CONS_DTM_VENC" 
				size="1" 
				maxlength="2"
				onfocus="this.style.backgroundColor='#CCFFCC'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onkeyUp="javascript:proximo_campo_cadastrar_concessionaria('CAP_CONS_DTM_VENC','CAP_CONS_DTA_VENC');"
			>/
			<input 
				type="text" 
				name="CAP_CONS_DTA_VENC" 
				id="CAP_CONS_DTA_VENC" 
				size="2" 
				maxlength="4"
				onfocus="this.style.backgroundColor='#CCFFCC'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onkeyUp="javascript:proximo_campo_cadastrar_concessionaria('CAP_CONS_DTA_VENC','CAP_CONS_TIPO');"
			>
		</td>
	</tr>
	
	<tr >
		<td width="120px" align="right"><b>Observa&ccedil;&atilde;o:</b></td>
		<td >
			<input 
				type="text" 
				name="CAP_CONS_TIPO" 
				id="CAP_CONS_TIPO" 
				size="15" 
				maxlength="15"
				onfocus="this.style.backgroundColor='#CCFFCC'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onkeyUp="javascript:proximo_campo_cadastrar_concessionaria('CAP_CONS_TIPO','CAP_CONS_STATUS');"
			>		
		</td>
	</tr>
	
	<tr >
		<td width="120px" align="right"><b>Situa&ccedil;&atilde;o:</b></td>
		<td >
			<select name="CAP_CONS_STATUS" id="CAP_CONS_STATUS">
				<option value="PENDENTE">PENDENTE</option>
				<option value="CONCLUIDO">CONCLUIDO</option>
			</select>
		</td>
	</tr>
	
	<tr align="right">
		<td colspan="4">
			<input type="submit" value="Salvar Cadastro" name="Salvar Cadastro">
			&nbsp;
			<input type="reset" value="Limpar Cadastro"  name="Limpar Cadastro">
			<input type="hidden" value="gravar_concessionaria" name="tabela" >
			<input type="hidden" value="salvar_dados_form" name="acao" >		
		</td>
	</tr>
</form>	
</table>