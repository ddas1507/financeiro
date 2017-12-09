<table border="0" cellpadding="3" cellspacing="3" width="1024px" height="10px" align="left">
<tr ><td ><hr>CONCESSION&Aacute;RIAS > <a href="index.php?tabela=consultar_concessionaria&acao=consultar_concessionaria">CONSULTAR</a> > <b>DETALHES</b><hr></td></tr>
</table>
<table class="bordas" border="0" cellpadding="0" cellspacing="0" width="1024px" height="10px" align="left">
	<tr >
		<td colspan="2" align="left" readonly="readonly">
			<input type="text" value="<?php echo $oquefazer->registros->CAP_CONS_STATUS;?>" readonly="readonly">
		</td>
	</tr>
	
	<tr >
		<td colspan="2" align="left">
			<input type="text" value="<?php echo $oquefazer->registros->CAP_CONS_EMPRESA;?>" readonly="readonly">
		</td>
	</tr>
	<tr >
		<td colspan="2" align="left">
			<input type="text" value="R$ <?php echo $oquefazer->registros->CAP_CONS_VALOR;?>" readonly="readonly">
		</td>
	</tr>
	<tr >
		<td colspan="2" align="left">
			<input type="text" value="<?php echo $oquefazer->registros->CAP_CONS_TIPO;?>" readonly="readonly">
		</td>
	</tr>
	
	<tr >
		<td colspan="2" align="left">
			<input type="text" value="<?php echo $oquefazer->registros->CAP_CONS_DTD_VENC;?>/<?php echo $oquefazer->registros->CAP_CONS_DTM_VENC;?>/<?php echo $oquefazer->registros->CAP_CONS_DTA_VENC;?>" readonly="readonly">
		</td>
	</tr>

	<tr >
		<td colspan="2" align="left">
			<input type="text" value="<?php echo $oquefazer->registros->CAP_CONS_DT_CAD;?>" readonly="readonly">
		</td>
	</tr>
	<tr>
		<td align="left" colspan="2"><input type="text" size="50" value=" D&Eacute;BITO  CADASTRADO EM: <?php echo $oquefazer->registros->CAP_CONS_DT_CAD;?>" readonly="readonly"></td>
	</tr>
	<tr>
		<td align="left" colspan="2"><input type="text" size="50" value=" D&Eacute;BITO  ALTERADO EM: <?php echo $oquefazer->registros->CAP_CONS_DT_ALT;?>" readonly="readonly"></td>
	</tr>
</table>
