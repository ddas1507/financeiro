<table border="0" cellpadding="1" cellspacing="1" width="1024px" height="10x" align="center">
<tr ><td ><hr>D&Eacute;BITOS > CONCESSION&Aacute;RIAS > DETALHES</a> > <b>ALTERAR</b><hr></td></tr>

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
				value="<?php //echo $oquefazer->registros->CONS_EMPRESA;?>"
				autofocus="autofocus"
			/>
		</td>
	</tr>
	<tr>
		<td width="175px" align="right"><b>C&oacute;digo de Barras:</b></td>
		<td >
			<input 
				type="text" 
				name="CAP_CONS_CODBARBL1" 
				id="CAP_CONS_CODBARBL1" 
				size="10" 
				maxlength="11"
				onfocus="this.style.backgroundColor='#FFFF99'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onkeyUp="javascript:proximo_campo_cadastrar_concessionaria('CAP_CONS_CODBARBL1','CAP_CONS_CODBARBL2');"
				onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
				value="<?php echo $oquefazer->registros->CONS_CODBARBL1;?>"
			>
			<input 
				type="text" 
				name="CAP_CONS_CODBARBL2" 
				id="CAP_CONS_CODBARBL2" 
				size="10" 
				maxlength="1"
				onfocus="this.style.backgroundColor='#FFFF99'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onkeyUp="javascript:proximo_campo_cadastrar_concessionaria('CAP_CONS_CODBARBL2','CAP_CONS_CODBARBL3');"
				onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
				value="<?php echo $oquefazer->registros->CONS_CODBARBL2;?>"
			>
		
			<input 
				type="text" 
				name="CAP_CONS_CODBARBL3" 
				id="CAP_CONS_CODBARBL3" 
				size="10" 
				maxlength="11"
				onfocus="this.style.backgroundColor='#FFFF99'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onkeyUp="javascript:proximo_campo_cadastrar_concessionaria('CAP_CONS_CODBARBL3','CAP_CONS_CODBARBL4');"
				onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
				value="<?php echo $oquefazer->registros->CONS_CODBARBL3;?>"
			>
			<input 
				type="text" 
				name="CAP_CONS_CODBARBL4" 
				id="CAP_CONS_CODBARBL4" 
				size="10" 
				maxlength="1"
				onfocus="this.style.backgroundColor='#FFFF99'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onkeyUp="javascript:proximo_campo_cadastrar_concessionaria('CAP_CONS_CODBARBL4','CAP_CONS_CODBARBL5');"
				onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
				value="<?php echo $oquefazer->registros->CONS_CODBARBL4;?>"
			>

			<input 
				type="text" 
				name="CAP_CONS_CODBARBL5" 
				id="CAP_CONS_CODBARBL5" 
				size="10" 
				maxlength="11"
				onfocus="this.style.backgroundColor='#FFFF99'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onkeyUp="javascript:proximo_campo_cadastrar_concessionaria('CAP_CONS_CODBARBL5','CAP_CONS_CODBARBL6');"
				onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
				value="<?php echo $oquefazer->registros->CONS_CODBARBL5;?>"
			>
			<input 
				type="text" 
				name="CAP_CONS_CODBARBL6" 
				id="CAP_CONS_CODBARBL6" 
				size="10" 
				maxlength="1"
				onfocus="this.style.backgroundColor='#FFFF99'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onkeyUp="javascript:proximo_campo_cadastrar_concessionaria('CAP_CONS_CODBARBL6','CAP_CONS_CODBARBL7');"
				onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
				value="<?php echo $oquefazer->registros->CONS_CODBARBL6;?>"
			>

			<input 
				type="text" 
				name="CAP_CONS_CODBARBL7" 
				id="CAP_CONS_CODBARBL7" 
				size="10" 
				maxlength="11"
				onfocus="this.style.backgroundColor='#FFFF99'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onkeyUp="javascript:proximo_campo_cadastrar_concessionaria('CAP_CONS_CODBARBL7','CAP_CONS_CODBARBL8');"
				onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
				value="<?php echo $oquefazer->registros->CONS_CODBARBL7;?>"
			>
			<input 
				type="text" 
				name="CAP_CONS_CODBARBL8" 
				id="CAP_CONS_CODBARBL8" 
				size="10" 
				maxlength="1"
				onfocus="this.style.backgroundColor='#FFFF99'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onkeyUp="javascript:proximo_campo_cadastrar_concessionaria('CAP_CONS_CODBARBL8','CAP_CONS_VALOR');"
				onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
				value="<?php echo $oquefazer->registros->CONS_CODBARBL8;?>"
			>
		</td>		
	</tr>
	
	<tr>
		<td width="175px" align="right"><b>Total a Pagar R$:</b></td>
		<td >
			<input 
				type="text" 
				name="CAP_CONS_VALOR" id="CAP_CONS_VALOR" 
				size="15" maxlength="15" 
				onfocus="this.style.backgroundColor='#FFFF99'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onKeyPress="return(MascaraMoeda(this,'.',',',event))"
				value="<?php echo $oquefazer->registros->CONS_VALOR;?>"
			>
		</td>
	</tr>

	<tr>
		<td width="150px" align="right"><b>Data de Emiss&atilde;o:</b></td>
		<td >
			<input 
				type="text" 
				name="CAP_CONS_DTD_EMIS" 
				id="CAP_CONS_DTD_EMIS" 
				size="1" 
				maxlength="2"
				onfocus="this.style.backgroundColor='#FFFF99'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onkeyUp="javascript:proximo_campo_cadastrar_concessionaria('CAP_CONS_DTD_EMIS','CAP_CONS_DTM_EMIS');"
				onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
				value="<?php echo $oquefazer->registros->CONS_DTD_EMIS;?>"
			>/
			<input 
				type="text" 
				name="CAP_CONS_DTM_EMIS" 
				id="CAP_CONS_DTM_EMIS" 
				size="1" 
				maxlength="2"
				onfocus="this.style.backgroundColor='#FFFF99'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onkeyUp="javascript:proximo_campo_cadastrar_concessionaria('CAP_CONS_DTM_EMIS','CAP_CONS_DTA_EMIS');"
				onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
				value="<?php echo $oquefazer->registros->CONS_DTM_EMIS;?>"				
			>/
			<input 
				type="text" 
				name="CAP_CONS_DTA_EMIS" 
				id="CAP_CONS_DTA_EMIS" 
				size="2" 
				maxlength="4"
				onfocus="this.style.backgroundColor='#FFFF99'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onkeyUp="javascript:proximo_campo_cadastrar_concessionaria('CAP_CONS_DTA_EMIS','CAP_CONS_DTD_VENC');"
				onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
				value="<?php echo $oquefazer->registros->CONS_DTA_EMIS;?>"
			>
		</td>
	</tr>
	
	<tr>
		<td width="175px" align="right"><b>Data de Vencimento:</b></td>
		<td >
			<input 
				type="text" 
				name="CAP_CONS_DTD_VENC" 
				id="CAP_CONS_DTD_VENC" 
				size="1" 
				maxlength="2"
				onfocus="this.style.backgroundColor='#FFFF99'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onkeyUp="javascript:proximo_campo_cadastrar_concessionaria('CAP_CONS_DTD_VENC','CAP_CONS_DTM_VENC');"
				onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
				value="<?php echo $oquefazer->registros->CONS_DTD_VENC;?>"
			>/
			<input 
				type="text" 
				name="CAP_CONS_DTM_VENC" 
				id="CAP_CONS_DTM_VENC" 
				size="1" 
				maxlength="2"
				onfocus="this.style.backgroundColor='#FFFF99'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onkeyUp="javascript:proximo_campo_cadastrar_concessionaria('CAP_CONS_DTM_VENC','CAP_CONS_DTA_VENC');"
				onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
				value="<?php echo $oquefazer->registros->CONS_DTM_VENC;?>"
			>/
			<input 
				type="text" 
				name="CAP_CONS_DTA_VENC" 
				id="CAP_CONS_DTA_VENC" 
				size="2" 
				maxlength="4"
				onfocus="this.style.backgroundColor='#FFFF99'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onkeyUp="javascript:proximo_campo_cadastrar_concessionaria('CAP_CONS_DTA_VENC','CAP_CONS_TIPO');"
				onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
				value="<?php echo $oquefazer->registros->CONS_DTA_VENC;?>"
			>
		</td>
	</tr>

	<tr >
		<td width="150px" align="right"><b>Observa&ccedil;&atilde;o:</b></td>
		<td >
			<input 
				type="text" 
				name="CAP_CONS_TIPO" 
				id="CAP_CONS_TIPO" 
				size="62" 
				maxlength="100"
				onfocus="this.style.backgroundColor='#FFFF99'" 
				onblur="this.style.backgroundColor='#FFFFFF'"
				onkeyUp="javascript:proximo_campo_cadastrar_concessionaria('CAP_CONS_TIPO','CAP_CONS_STATUS');"
				value="<?php echo $oquefazer->registros->CONS_TIPO;?>"
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

				switch($oquefazer->registros->CONS_STATUS)
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
			<input type="hidden" value="modificar_concessionaria2" name="tabela" >
			<input type="hidden" value="modificar_concessionaria2" name="acao" >		
			<input type="hidden" value="<?php echo $oquefazer->registros->CONS_CODIGO;?>" name="codigo" >					
		</td>
	</tr>
</form>	
</table>