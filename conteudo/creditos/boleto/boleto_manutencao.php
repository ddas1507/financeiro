<?php
	class boleto_manutencao{
		var $resultado;
		var $registros;
		
		function boleto_manutencao(){
			$this->con = new conexao();
		}
		function consultar_boleto(){
			$ordenacao = @$_REQUEST['ordem'];
			if($ordenacao == '')
				$ordenacao = "CAP_BLT_BANCO";
				
			$filtro = @$_REQUEST['pesquisa'];
			if($filtro == '')
				@$filtrar_por == '';
			else
				@$filtrar_por = $filtro;

			$sql = "select * from contasapagarboletos where CAP_BLT_BANCO like '%".@$filtrar_por."%' order by ".$ordenacao." ";
			$this->resultado = $this->con->banco->Execute($sql);
		}

		function excluir_boleto(){
			$sql = "delete from contasapagarboletos where CAP_BLT_CODIGO =".$_REQUEST['codigo'];
				if($this->resultado = $this->con->banco->Execute($sql)){
					alerta("Cadastro excluido com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar excluir o cadastro!");
						return false;
				}
		}
		
		function alterar_boleto(){
			$sql = "select * from contasapagarboletos where CAP_BLT_CODIGO =".$_REQUEST['codigo'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}
		
		function detalhes_boleto(){
			$sql = "select * from contasapagarboletos where CAP_BLT_CODIGO =".$_REQUEST['codigo'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}
		
		
		function modificar_boleto(){
			$dt = date('d/m/Y');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));	
			$data_hora = "$dt - $hr";
			
			$sql = "update contasapagarboletos set 
			CAP_BLT_BANCO = '".$_POST['CAP_BLT_BANCO']."', 
			CAP_BLT_CEDENTE = '".$_POST['CAP_BLT_CEDENTE']."', 
			
			CAP_BLT_CODBARBL1 = '".$_POST['CAP_BLT_CODBARBL1']."', 
			CAP_BLT_CODBARBL2 = '".$_POST['CAP_BLT_CODBARBL2']."', 
			CAP_BLT_CODBARBL3 = '".$_POST['CAP_BLT_CODBARBL3']."', 
			CAP_BLT_CODBARBL4 = '".$_POST['CAP_BLT_CODBARBL4']."', 
			CAP_BLT_CODBARBL5 = '".$_POST['CAP_BLT_CODBARBL5']."', 
			CAP_BLT_CODBARBL6 = '".$_POST['CAP_BLT_CODBARBL6']."', 
			CAP_BLT_CODBARBL7 = '".$_POST['CAP_BLT_CODBARBL7']."', 
			CAP_BLT_CODBARBL8 = '".$_POST['CAP_BLT_CODBARBL8']."', 
			
			CAP_BLT_VALOR = '".$_POST['CAP_BLT_VALOR']."', 
			
			CAP_BLT_DTD_EMIS = '".$_POST['CAP_BLT_DTD_EMIS']."', 
			CAP_BLT_DTM_EMIS = '".$_POST['CAP_BLT_DTM_EMIS']."', 
			CAP_BLT_DTA_EMIS = '".$_POST['CAP_BLT_DTA_EMIS']."', 
			
			CAP_BLT_DTD_VENC = '".$_POST['CAP_BLT_DTD_VENC']."', 
			CAP_BLT_DTM_VENC = '".$_POST['CAP_BLT_DTM_VENC']."', 
			CAP_BLT_DTA_VENC = '".$_POST['CAP_BLT_DTA_VENC']."', 
			
			CAP_BLT_OBS = '".$_POST['CAP_BLT_OBS']."', 
			
			CAP_BLT_STATUS = '".$_POST['CAP_BLT_STATUS']."', 
			CAP_BLT_DT_ALT = '".$data_hora."'
			
			where CAP_BLT_CODIGO	 = ".$_REQUEST['codigo'];
				if($this->resultado = $this->con->banco->Execute($sql)){
					alerta("Debito alterado com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar alterar o debito!");
						return false;
				}
		}
		
		function gravar_boleto(){
			$dt = date('d/m/Y');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));	
			$data_hora = "$dt - $hr";
		
			$sql = "insert into contasapagarboletos (
			CAP_BLT_BANCO, 
			CAP_BLT_CEDENTE, 
			
			CAP_BLT_CODBARBL1, 
			CAP_BLT_CODBARBL2, 
			CAP_BLT_CODBARBL3, 
			CAP_BLT_CODBARBL4, 
			CAP_BLT_CODBARBL5, 
			CAP_BLT_CODBARBL6, 
			CAP_BLT_CODBARBL7, 
			CAP_BLT_CODBARBL8, 
			
			CAP_BLT_VALOR, 
			
			CAP_BLT_DTD_EMIS, 
			CAP_BLT_DTM_EMIS, 
			CAP_BLT_DTA_EMIS, 
			
			CAP_BLT_DTD_VENC, 
			CAP_BLT_DTM_VENC, 
			CAP_BLT_DTA_VENC, 

			CAP_BLT_OBS, 
			
			CAP_BLT_STATUS, 
			CAP_BLT_DT_CAD) 
			values ('".
			
			$_REQUEST['CAP_BLT_BANCO']."','".
			$_REQUEST['CAP_BLT_CEDENTE']."','".
			
			$_REQUEST['CAP_BLT_CODBARBL1']."','".
			$_REQUEST['CAP_BLT_CODBARBL2']."','".
			$_REQUEST['CAP_BLT_CODBARBL3']."','".
			$_REQUEST['CAP_BLT_CODBARBL4']."','".
			$_REQUEST['CAP_BLT_CODBARBL5']."','".
			$_REQUEST['CAP_BLT_CODBARBL6']."','".
			$_REQUEST['CAP_BLT_CODBARBL7']."','".
			$_REQUEST['CAP_BLT_CODBARBL8']."','".
			
			$_REQUEST['CAP_BLT_VALOR']."','".
			
			$_REQUEST['CAP_BLT_DTD_EMIS']."','".
			$_REQUEST['CAP_BLT_DTM_EMIS']."','".
			$_REQUEST['CAP_BLT_DTA_EMIS']."','".
			
			$_REQUEST['CAP_BLT_DTD_VENC']."','".
			$_REQUEST['CAP_BLT_DTM_VENC']."','".
			$_REQUEST['CAP_BLT_DTA_VENC']."','".
			
			$_REQUEST['CAP_BLT_OBS']."','".
			
			$_REQUEST['CAP_BLT_STATUS']."',
			'".$data_hora."')";
			
				if($this->resultado = $this->con->banco->Execute($sql)){
					alerta("Debito cadastro com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar cadastrar o debito!");
						return false;
				}
		}
		
		function total_registros()
		{
			$sql = "select count(*) as TOTAL from contasapagarboletos";
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
			return $this->registros->TOTAL;
		}
				
	}
?>