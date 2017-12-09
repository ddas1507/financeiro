<table border="0" cellpadding="3" cellspacing="3" width="1024px" height="10px" align="left">
<tr ><td ><hr>BOLETOS > <a href="index.php?tabela=consultar_boleto&acao=consultar_boleto">CONSULTAR</a> > <b>DETALHES</b><hr></td></tr>
</table>
<table class="bordas" border="1" cellpadding="2" cellspacing="2" width="1024px" height="10px" align="center">
	<tr >
		<td bgcolor="#000000" colspan="2" align="center">
			<font color="#ffffff">
				<b>
					<?php echo $oquefazer->registros->CAP_BLT_CODBARBL1;?>
					<?php echo $oquefazer->registros->CAP_BLT_CODBARBL2;?>
					<?php echo $oquefazer->registros->CAP_BLT_CODBARBL3;?>
					<?php echo $oquefazer->registros->CAP_BLT_CODBARBL4;?>
					<?php echo $oquefazer->registros->CAP_BLT_CODBARBL5;?>
					<?php echo $oquefazer->registros->CAP_BLT_CODBARBL6;?>
					<?php echo $oquefazer->registros->CAP_BLT_CODBARBL7;?>
					<?php echo $oquefazer->registros->CAP_BLT_CODBARBL8;?>
				</b>
			</font>
		</td>
	</tr>
	<tr >
		<td align="right">
			<b>Banco:</b>
		</td>
		<td align="left">
			<?php echo $oquefazer->registros->CAP_BLT_BANCO;?>
		</td>
	</tr>
	<tr >
		<td align="right">
			<b>Cedente:</b>
		</td>
		<td align="left">
			<?php echo $oquefazer->registros->CAP_BLT_CEDENTE;?>
		</td>
	</tr>
	<tr >
		<td align="right">
			<b>Data de Emiss&atilde;o:</b>
		</td>
		<td align="left">
			<?php echo $oquefazer->registros->CAP_BLT_DTD_EMIS;?>/
			<?php echo $oquefazer->registros->CAP_BLT_DTM_EMIS;?>/
			<?php echo $oquefazer->registros->CAP_BLT_DTA_EMIS;?>
		</td>
	</tr>
	
	<tr >
		<td align="right">
			<b>Data de Vencimento:</b>
		</td>
		<td align="left">
			<?php echo $oquefazer->registros->CAP_BLT_DTD_VENC;?>/
			<?php echo $oquefazer->registros->CAP_BLT_DTM_VENC;?>/
			<?php echo $oquefazer->registros->CAP_BLT_DTA_VENC;?>
		</td>
	</tr>
	<tr >
		<td align="right">
			<b>Valor:</b>
		</td>
		<td align="left">R$
			<?php echo $oquefazer->registros->CAP_BLT_VALOR;?>
		</td>
	</tr>
	<tr >
		<td align="right">
			<b>Observa&ccedil;&atilde;o:</b>
		</td>
		<td align="left">
			<?php echo $oquefazer->registros->CAP_BLT_OBS;?>
		</td>
	</tr>
	<tr >
		<td align="right">
			<b>Data de Cadastro:</b>
		</td>
		<td align="left">
			<?php echo $oquefazer->registros->CAP_BLT_DT_CAD;?>
		</td>
	</tr>
	<tr >
		<td align="right">
			<b>&Uacute;ltima de Altera&ccedil;&atilde;o:</b>
		</td>
		<td align="left">
			<?php echo $oquefazer->registros->CAP_BLT_DT_ALT;?>
		</td>
	</tr>
	<tr >
		<td colspan="2" align="center">
				<?
				$status = $oquefazer->registros->CAP_BLT_STATUS;
				
					if($status == "PENDENTE"){
						echo "<font color=#ff0000><b>Pendente</b></font>";
					}
					else{
						echo "<font color=#009955><b>Conclu&iacute;do</b></font>";
					}
				?>
		</td>
	</tr>
</table>
