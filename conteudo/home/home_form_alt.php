<table border="0" cellpadding="1" cellspacing="1" width="1024px" height="10x" align="center">
<tr ><td ><hr>CONCESSION&Aacute;RIAS ><a href="index.php?tabela=consultar_concessionaria&acao=consultar_concessionaria">CONSULTAR</a> > <b>ALTERAR</b><hr></td></tr>

<table class="bordas" border="1" cellpadding="1" cellspacing="1" width="1024px" height="10x" align="center">
<form name="alterar_concessionaria" action="index.php" method="post">
	<tr >
		<td width="100px" align="right"><b>Cedente:</b></td>
		<td >
			<input 
				type="text" 
				name="CAP_CONS_EMPRESA" 
				id="CAP_CONS_EMPRESA" 
				size="30" 
				maxlength="30" 
				value="<?php echo $oquefazer->registros->CAP_CONS_EMPRESA;?>"
				onfocus="this.style.backgroundColor='#FFFF99'" 
				onblur="this.style.backgroundColor='#ffffff'"
				>
		</td>
	</tr>

	<tr>
		<td width="120px" align="right"><b>Valor R$:</b></td>
		<td >
			<input 
				type="text" 
				name="CAP_CONS_VALOR" id="CAP_CONS_VALOR" 
				size="15" maxlength="15" 
				value="<?php echo $oquefazer->registros->CAP_CONS_VALOR;?>"
				onfocus="this.style.backgroundColor='#FFFF99'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
			>
		</td>
	</tr>
	
	<tr>
		<td width="120px" align="right"><b>Vencimento:</b></td>
		<td >
			<input 
				type="text" 
				name="CAP_CONS_DTD_VENC" id="CAP_CONS_DTD_VENC" 
				size="1" maxlength="2" 
				value="<?php echo $oquefazer->registros->CAP_CONS_DTD_VENC;?>"
				onfocus="this.style.backgroundColor='#FFFF99'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
			>/
			<input 
				type="text" 
				name="CAP_CONS_DTM_VENC" id="CAP_CONS_DTM_VENC" 
				size="1" maxlength="2" 
				value="<?php echo $oquefazer->registros->CAP_CONS_DTM_VENC;?>"
				onfocus="this.style.backgroundColor='#FFFF99'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
			>/
			<input 
				type="text" 
				name="CAP_CONS_DTA_VENC" id="CAP_CONS_DTA_VENC" 
				size="2" maxlength="4" 
				value="<?php echo $oquefazer->registros->CAP_CONS_DTA_VENC;?>"
				onfocus="this.style.backgroundColor='#FFFF99'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
			>
		</td>
	</tr>

	<tr>
		<td align="right"><b>Observa&ccedil;&atilde;o:</b></td>
		<td colspan="14">
			<input 
				type="text" 
				name="CAP_CONS_TIPO" id="CAP_CONS_TIPO" 
				size="15" maxlength="15" 
				value="<?php echo $oquefazer->registros->CAP_CONS_TIPO;?>"
				onfocus="this.style.backgroundColor='#FFFF99'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
			>
		</td>
	</tr>	
	
	<tr>
		<td align="right"><b>Situa&ccedil;&atilde;o:</b></td>
		<td colspan="14">
			<select name="CAP_CONS_STATUS" id="CAP_CONS_STATUS">
			<?php
				$PENDENTE = '';
				$CONCLUIDO = '';

				switch($oquefazer->registros->CAP_CONS_STATUS)
				{
					case 'PENDENTE': $PENDENTE = 'selected'; break;
					case 'CONCLUIDO': $CONCLUIDO = 'selected'; break;
				}
			?>		
				<option value="PENDENTE" <?php echo $PENDENTE;?>>PENDENTE</option>
				<option value="CONCLUIDO" <?php echo $CONCLUIDO;?>>CONCLUIDO</option>
			</select>
		</td>
	</tr>

	<tr >
		<td colspan="2" align="right">
			<input type="submit" value="Alterar Cadastro" name="Alterar Cadastro">
			&nbsp;
			<input type="reset" value="Restaurar Cadastro"  name="Restaurar Cadastro">
			<input type="hidden" value="modificar_concessionaria" name="tabela" >
			<input type="hidden" value="modificar_concessionaria" name="acao" >		
			<input type="hidden" value="<?php echo $oquefazer->registros->CAP_CONS_CODIGO;?>" name="codigo" >					
		</td>
	</tr>
</form>	
</table>