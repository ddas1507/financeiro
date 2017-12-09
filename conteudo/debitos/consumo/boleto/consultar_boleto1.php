<table border="0" cellpadding="1" cellspacing="1" width="1024px" height="10x" align="center">
<tr ><td ><hr>D&Eacute;BITOS > <b>BOLETOS</b><hr></td></tr>
<table border="0" cellpadding="1" cellspacing="1" width="1024px" height="10x" align="center">
	<tr>
		<td colspan="8" align="right">
			<table border="0" cellpadding="3" cellspacing="3" width="1024px" height="10x" align="center">
				<tr>
					<td colspan="218" align="right">
						<form name="pesquisa" action="index.php?tabela=consultar_boleto1&acao=consultar_boleto1&filtro=pesquisa" method="post">
						<input 
							type="text" 
							name="pesquisa" 
							id="pesquisa" 
							size="50" 
							maxlength="25"
							onfocus="if(this.value=='Buscar boleto'){this.value=''};" 
							onblur="if(this.value==''){this.value='Buscar boleto'};"
							value="Buscar boleto" 
						>
						</form>
					</td>
				</tr>
			</table>
		</td>		
	</tr>
	<tr>
	</tr>
	
	<tr align="center" >
		<td ><hr>BANCO<hr></a></td>
		<td colspan="4" class="LINK_DETALHES" onMouseOver="this.className='LINK_DETALHES_OVER'" onMouseOut="this.className='LINK_DETALHES'">
			<hr>
				<a href="index.php?tabela=cadastrar_boleto1&acao=cadastrar_boleto1">
					<center><b>NOVO REGISTRO</b></center>
				</a>
			<hr>
		</td>			
	</tr>

<?php
	while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
	{
		$codigo	= $oquefazer->registros->CAP_BLT_CODIGO;
		$banco	= $oquefazer->registros->CAP_BLT_BANCO;
?>
	<tr class="DADOS_DB" onMouseOver="this.className='DADOS_DB_OVER'" onMouseOut="this.className='DADOS_DB'">
		<td><hr><? echo $banco;?><hr></td>
		
		<td class="LINK_DETALHES" onMouseOver="this.className='LINK_DETALHES_OVER'" onMouseOut="this.className='LINK_DETALHES'">
			<hr>
				<a href="index.php?tabela=consultar_boleto2&acao=consultar_boleto2&banco=<? echo $banco;?>">
					<center>
						<img src="conteudo/files/imagens/icones/Show.png" width="16px" height="16px" align="center" border="0">&nbsp;<b>DETALHES</b>
					</center>
				</a>
			<hr>
		</td>
		
		<td class="LINK_ALTERAR" onMouseOver="this.className='LINK_ALTERAR_OVER'" onMouseOut="this.className='LINK_ALTERAR'">
			<hr>
				<a href="index.php?tabela=alterar_boleto1&acao=alterar_boleto1&codigo=<? echo $codigo;?>" class="LINK_ALTERAR" onMouseOver="this.className='LINK_ALTERAR_OVER'" onMouseOut="this.className='LINK_ALTERAR'">
					<center>
						<img src="conteudo/files/imagens/icones/Edit page.png" width="16px" height="16px" align="center" border="0">&nbsp;<b>ALTERAR</b>
					</center>
				</a>
			<hr>
		</td>
		
		<td class="LINK_EXCLUIR" onMouseOver="this.className='LINK_EXCLUIR_OVER'" onMouseOut="this.className='LINK_EXCLUIR'">
			<hr>
				<a href="javascript:if(confirm('Deseja excluir este registro?')) {location='index.php?tabela=excluir_boleto1&acao=excluir_boleto1&codigo=<? echo $codigo;?>';}">
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
			Total de Registros:&nbsp;<b><? echo $oquefazer->total1();?></b>
		</td>		
	</tr>
	
</table>