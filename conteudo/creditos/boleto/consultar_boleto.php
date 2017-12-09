<table border="0" cellpadding="1" cellspacing="1" width="1024px" height="10x" align="center">
<tr ><td ><hr>BOLETOS > <b>CONSULTAR</b><hr></td></tr>
<table border="0" cellpadding="1" cellspacing="1" width="1024px" height="10x" align="center">
	<tr>
		<td colspan="7" align="right">
			<form name="pesquisa" action="index.php?tabela=consultar_boleto&acao=consultar_boleto&filtro=pesquisa" method="post">
			<input 
				type="text" 
				name="pesquisa" 
				id="pesquisa" 
				size="50" 
				maxlength="25"
				onfocus="if(this.value=='Buscar Boleto'){this.value=''};" 
				onblur="if(this.value==''){this.value='Buscar Boleto'};"
				value="Buscar Boleto" 
			>
			</form>					
		</td>		
	</tr>
	
	<tr align="center" >
		<td ><a href="index.php?tabela=consultar_boleto&acao=consultar_boleto&ordem=CAP_BLT_BANCO"><hr>Banco<hr></a></td>
		<td ><a href="index.php?tabela=consultar_boleto&acao=consultar_boleto&ordem=CAP_BLT_VALOR"><hr>Valor<hr></a></td>
		<td ><a href="index.php?tabela=consultar_boleto&acao=consultar_boleto&ordem=CAP_BLT_DTD_VENC"><hr>Vencimento<hr></a></td>
		<td ><a href="index.php?tabela=consultar_boleto&acao=consultar_boleto&ordem=CAP_BLT_DTD_VENC"><hr>Situa&ccedil;&atilde;o<hr></a></td>
		<td colspan="3" ><a href="#"><hr>PAINEL DE TAREFAS<hr></td>
	</tr>

<?php
	while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
	{
		$banco	= $oquefazer->registros->CAP_BLT_BANCO;
		$valor 		= $oquefazer->registros->CAP_BLT_VALOR;
		$dia_venc 	= $oquefazer->registros->CAP_BLT_DTD_VENC;
		$mes_venc 	= $oquefazer->registros->CAP_BLT_DTM_VENC;
		$ano_venc 	= $oquefazer->registros->CAP_BLT_DTA_VENC;
		$status 	= $oquefazer->registros->CAP_BLT_STATUS;
?>
	<tr class="DADOS_DB" onMouseOver="this.className='DADOS_DB_OVER'" onMouseOut="this.className='DADOS_DB'">
		<td>
			<hr><? echo $banco;?><hr>
		</td>
		<td align="center"><hr>R$ <? echo $valor;?><hr></td>
		<td align="center">
			<hr>
				<? echo $dia_venc;?>/
				<? echo $mes_venc;?>/
				<? echo $ano_venc;?>
			<hr>
		</td>
		<td align="center">
			<hr>
				<?
					if($status == "PENDENTE")
					{
						echo "<font color=#ff0000><b>Pendente</b></font>";
					}
					else
					{
						echo "<font color=#009900><b>Conclu&iacute;do</b></font>";
					}

				?>
			<hr>
		</td>
		
		<td class="LINK_DETALHES" onMouseOver="this.className='LINK_DETALHES_OVER'" onMouseOut="this.className='LINK_DETALHES'">
			<hr>
				<a href="index.php?tabela=detalhes_boleto&acao=detalhes_boleto&codigo=<? echo $oquefazer->registros->CAP_BLT_CODIGO;?>">
					<center>
						<img src="conteudo/files/imagens/icones/Show.png" width="16px" height="16px" align="center" border="0">&nbsp;<b>DETALHES</b>
					</center>
				</a>
			<hr>
		</td>
		
		<td class="LINK_ALTERAR" onMouseOver="this.className='LINK_ALTERAR_OVER'" onMouseOut="this.className='LINK_ALTERAR'">
			<hr>
				<a href="index.php?tabela=alterar_boleto&acao=alterar_boleto&codigo=<? echo $oquefazer->registros->CAP_BLT_CODIGO;?>" class="LINK_ALTERAR" onMouseOver="this.className='LINK_ALTERAR_OVER'" onMouseOut="this.className='LINK_ALTERAR'">
					<center>
						<img src="conteudo/files/imagens/icones/Edit page.png" width="16px" height="16px" align="center" border="0">&nbsp;<b>ALTERAR</b>
					</center>
				</a>
			<hr>
		</td>
		
		<td class="LINK_EXCLUIR" onMouseOver="this.className='LINK_EXCLUIR_OVER'" onMouseOut="this.className='LINK_EXCLUIR'">
			<hr>
				<a href="index.php?tabela=excluir_boletos&acao=excluir_boletos&codigo=<? echo $oquefazer->registros->CAP_BLT_CODIGO;?>">
					<center>
						<img src="conteudo/files/imagens/icones/delete_page.png" width="16px" height="16px" align="center" border="0">&nbsp;<b>EXCLUIR</b>
					</center>
				</a>
			<hr>
		</td>
	</tr>
	<?php 
	} ?>
	<tr>
		<td colspan="7" align="right">
			Total de Registros:&nbsp;<b><? echo $oquefazer->total_registros();?></b>
		</td>		
	</tr>
	
</table>