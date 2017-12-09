<table border="0" cellpadding="1" cellspacing="1" width="1024px" height="10px" align="center">
<tr ><td ><hr><b>HOME</b><hr></td></tr>
<table border="0" cellpadding="1" cellspacing="1" width="1024px" height="100px" align="center">
	<tr>
		<td colspan="7" align="right">
			<table class="bordas" border="1" cellpadding="3" cellspacing="3" width="300px" height="100px" align="left">
				<tr bgcolor="#000000" >
					<td colspan="2" align="left"><font color="#ffffff"><b>Contas a Pagar</b></font></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<a href="index.php?tabela=consultar_concessionaria&acao=consultar_concessionaria">Concession&aacute;rias</a>
					</td>
				</tr>
				<tr>
					<td width="75px" align="right">Registros:</td>
					<td width="75px" align="left">
						<b>
							<? //echo $oquefazer->totalderegistrosemcontasapagarconcessionarias();?>
						</b>
					</td>
				</tr>
				<tr>
					<td width="75px" align="right">D&eacute;bito:</td>
					<td width="75px" align="left">
						<b>
							<font color="red">R$ <? //echo $oquefazer->totaldedebitosemcontasapagarconcessionarias();?></font>
						</b>
					</td>
				</tr>
				<tr><td colspan="2" align="center"><a href="index.php?tabela=consultar_boleto&acao=consultar_boleto">Boletos</a></td></tr>
				<tr><td width="75px" align="right">Registros:</td>
					<td width="75px" align="left">
						<b><? //echo $oquefazer->totalderegistrosemcontasapagarboletos();?></b>
					</td>
				</tr>
				<tr><td width="75px" align="right">D&eacute;bito:</td>
					<td width="75px" align="left">
						<b><font color="red">R$ <? //echo $oquefazer->totaldedebitosemcontasapagarboletos();?></b></font>
					</td>
				</tr>
			</table>		
		</td>
	</tr>
</table>