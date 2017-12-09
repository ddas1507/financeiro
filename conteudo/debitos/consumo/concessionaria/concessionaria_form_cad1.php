<table border="0" cellpadding="1" cellspacing="1" width="1024px" height="10px" align="center">
<tr ><td ><hr>D&Eacute;BITOS > CONCESSION&Aacute;RIAS > <b>NOVO REGISTRO</b><hr></td></tr>

<table class="bordas" border="0" cellpadding="3" cellspacing="3" width="1024px" height="10px" align="left">
<form id="cadastrar_concessionaria" name="cadastrar_concessionaria" action="index.php" method="post" enctype="multipart/form-data" onsubmit="return validar(this);" >
	<tr >
		<td width="175px" align="right"><b>Empresa:</b></td>
		<td >
			<input 
				type="text" 
				name="CAP_CONS_EMPRESA" 
				id="CAP_CONS_EMPRESA" 
				size="62" 
				maxlength="50" 
				onfocus="this.style.backgroundColor='#CCFFCC'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				autofocus="autofocus"
			/>
		</td>

		<td colspan="4">
			<input type="submit" value="Salvar Cadastro" name="Salvar Cadastro" OnClick="check();">
			&nbsp;
			<input type="reset" value="Limpar Cadastro"  name="Limpar Cadastro">
			<input type="hidden" value="gravar_concessionaria1" name="tabela" >
			<input type="hidden" value="gravar_concessionaria1" name="acao" >		
		</td>
	</tr>
</form>	
</table>