<table border="0" cellpadding="1" cellspacing="1" width="1024px" height="10x" align="center">
<tr ><td ><hr>D&Eacute;BITOS > CONCESSION&Aacute;RIAS</a> > <b>ALTERAR</b><hr></td></tr>

<table class="bordas" border="0" cellpadding="3" cellspacing="3" width="1024px" height="10x" align="center">
<form name="alterar_concessionaria" action="index.php" method="post">
	<tr >
		<td width="175px" align="right"><b>Fornecedora:</b></td>
		<td >
			<input 
				type="text" 
				name="CAP_CONS_EMPRESA" 
				id="CAP_CONS_EMPRESA" 
				size="62" 
				maxlength="50" 
				onfocus="this.style.backgroundColor='#FFFF99'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				value="<?php echo $oquefazer->registros->CAP_CONS_EMPRESA;?>"
			/>
		</td>

		<td colspan="2" align="right">
			<input type="submit" value="Alterar Cadastro" name="Alterar Cadastro">
			&nbsp;
			<input type="reset" value="Restaurar Cadastro"  name="Restaurar Cadastro">
			<input type="hidden" value="modificar_concessionaria1" name="tabela" >
			<input type="hidden" value="modificar_concessionaria1" name="acao" >		
			<input type="hidden" value="<?php echo $oquefazer->registros->CAP_CONS_CODIGO;?>" name="codigo" >					
		</td>
	</tr>
</form>	
</table>