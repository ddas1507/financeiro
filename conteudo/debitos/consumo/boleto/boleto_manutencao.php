<?php
	class boleto_manutencao{
		var $resultado;
		var $registros;
		
		function boleto_manutencao(){$this->con = new conexao();}
		
		function consultar_boleto1(){
			$filtro = @$_REQUEST['pesquisa'];			
			if($filtro == '')@$filtrar_por == '';else@$filtrar_por = $filtro;

			$sql = "SELECT * FROM contasapagarboletos";
			$this->resultado = $this->con->banco->Execute($sql);
		}		
		
		function atualizar_boleto2(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			CONCAT( BLT_BANCO, '-', BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos
			ORDER BY BLT_CEDENTE";
			$this->resultado = $this->con->banco->Execute($sql);
		}		
		
		function consultar_boleto2(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			CONCAT( BLT_BANCO, '-', BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_BANCO LIKE '".@$_REQUEST['banco']."'
			order by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}

		function excluir_boleto1(){
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
		function excluir_boleto2(){
			$sql = "delete from boletos where BLT_CODIGO =".$_REQUEST['codigo'];
				if($this->resultado = $this->con->banco->Execute($sql)){
					alerta("Cadastro excluido com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar excluir o cadastro!");
						return false;
				}
		}
		
		function alterar_boleto1(){
			$sql = "select * from contasapagarboletos where CAP_BLT_CODIGO =".$_REQUEST['codigo'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}
		function alterar_boleto2(){
			$sql = "select * from boletos where BLT_CODIGO =".$_REQUEST['codigo'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}
		
		function modificar_boleto1(){
			$dt = date('d/m/Y');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));	
			$data_hora = "$dt - $hr";
			
			$sql = "update contasapagarboletos 
			set CAP_BLT_BANCO 	= '".$_REQUEST['CAP_BLT_BANCO']."' 	
			where CAP_BLT_CODIGO 	= ".$_REQUEST['codigo'];
				if($this->resultado = $this->con->banco->Execute($sql)){
					alerta("Debito alterado com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar alterar o debito!");
						return false;
				}
		}		
		function modificar_boleto2(){
			$dt = date('d/m/Y');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));	
			$data_hora = "$dt - $hr";
			
			$sql = "update boletos set 
			
			BLT_BANCO   = '".$_POST['CAP_BLT_BANCO']."', 
			BLT_CEDENTE   = '".$_POST['CAP_BLT_CEDENTE']."', 
			BLT_CODBARBL1 = '".$_POST['CAP_BLT_CODBARBL1']."', 
			BLT_CODBARBL2 = '".$_POST['CAP_BLT_CODBARBL2']."', 
			BLT_CODBARBL3 = '".$_POST['CAP_BLT_CODBARBL3']."', 
			BLT_CODBARBL4 = '".$_POST['CAP_BLT_CODBARBL4']."', 
			BLT_CODBARBL5 = '".$_POST['CAP_BLT_CODBARBL5']."', 
			BLT_CODBARBL6 = '".$_POST['CAP_BLT_CODBARBL6']."', 
			BLT_CODBARBL7 = '".$_POST['CAP_BLT_CODBARBL7']."', 
			BLT_CODBARBL8 = '".$_POST['CAP_BLT_CODBARBL8']."', 
			
			BLT_VALOR = '".$_POST['CAP_BLT_VALOR']."', 
			
			BLT_DTD_EMIS = '".$_POST['CAP_BLT_DTD_EMIS']."', 
			BLT_DTM_EMIS = '".$_POST['CAP_BLT_DTM_EMIS']."', 
			BLT_DTA_EMIS = '".$_POST['CAP_BLT_DTA_EMIS']."', 
			
			BLT_DTD_VENC = '".$_POST['CAP_BLT_DTD_VENC']."', 
			BLT_DTM_VENC = '".$_POST['CAP_BLT_DTM_VENC']."', 
			BLT_DTA_VENC = '".$_POST['CAP_BLT_DTA_VENC']."', 
			
			BLT_OBS = '".$_POST['CAP_BLT_OBS']."', 
			
			BLT_STATUS = '".$_POST['CAP_BLT_STATUS']."', 
			BLT_DT_ALT = '".$data_hora."'
			
			where BLT_CODIGO	 = ".$_REQUEST['codigo'];
				if($this->resultado = $this->con->banco->Execute($sql)){
					alerta("Debito alterado com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar alterar o debito!");
						return false;
				}
		}

		function gravar_boleto1(){
			$dt = date('d/m/Y');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));	
			$data_hora = "$dt - $hr";
		
			$sql = "insert into contasapagarboletos (CAP_BLT_BANCO) values ('".$_REQUEST['CAP_BLT_BANCO']."')";
				if($this->resultado = $this->con->banco->Execute($sql)){
					alerta("Debito cadastro com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar cadastrar o debito!");
						return false;
				}
		}		
		function gravar_boleto2(){
			$dt = date('d/m/Y');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));	
			$data_hora = "$dt - $hr";
		
			$sql = "insert into boletos (
			BLT_BANCO, 
			BLT_CEDENTE, 
			BLT_CODBARBL1, 
			BLT_CODBARBL2, 
			BLT_CODBARBL3, 
			BLT_CODBARBL4, 
			BLT_CODBARBL5, 
			BLT_CODBARBL6, 
			BLT_CODBARBL7, 
			BLT_CODBARBL8, 
			
			BLT_VALOR, 
			
			BLT_DTD_EMIS, 
			BLT_DTM_EMIS, 
			BLT_DTA_EMIS, 
			
			BLT_DTD_VENC, 
			BLT_DTM_VENC, 
			BLT_DTA_VENC, 

			BLT_OBS, 
			
			BLT_STATUS, 
			BLT_DT_CAD) 
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

		function total1(){
			$sql = "select COUNT(*) as TOTAL1 from contasapagarboletos";
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
			return $this->registros->TOTAL1;
		}
		function total2(){
			$sql = "select COUNT(*) as TOTAL2 
			from boletos 
			WHERE BLT_BANCO LIKE '".@$_REQUEST['banco']."' ";
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
			return $this->registros->TOTAL2;
		}

		function media(){
			$sql = "select CONCAT( 'R$ ', AVG(BLT_VALOR)) as MEDIA 
			from boletos 
			WHERE BLT_BANCO LIKE '".@$_REQUEST['banco']."' ";
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
			return $this->registros->MEDIA;
		}
		function soma(){
			$sql = "select CONCAT( 'R$ ', SUM(BLT_VALOR)) as SOMA 
			from boletos
			WHERE BLT_BANCO LIKE '".@$_REQUEST['banco']."' ";
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
			return $this->registros->SOMA;
		}
	
		function bd01(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTD_VENC = '01'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}
		function bd02(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTD_VENC = '02'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}
		function bd03(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTD_VENC = '03'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}
		function bd04(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTD_VENC = '04'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}		
		function bd05(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTD_VENC = '05'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}	
		function bd06(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTD_VENC = '06'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}	
		function bd07(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTD_VENC = '07'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}	
		function bd08(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTD_VENC = '08'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}	
		function bd09(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTD_VENC = '09'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}	
		function bd10(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTD_VENC = '10'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}	
		function bd11(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTD_VENC = '11'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}	
		function bd12(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTD_VENC = '12'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}	
		function bd13(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTD_VENC = '13'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}	
		function bd14(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTD_VENC = '14'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}	
		function bd15(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTD_VENC = '15'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}	
		function bd16(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTD_VENC = '16'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}	
		function bd17(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTD_VENC = '17'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}	
		function bd18(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTD_VENC = '18'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}	
		function bd19(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTD_VENC = '19'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}	
		function bd20(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTD_VENC = '20'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}	
		function bd21(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTD_VENC = '21'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}	
		function bd22(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTD_VENC = '22'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}	
		function bd23(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTD_VENC = '23'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}	
		function bd24(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTD_VENC = '24'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}	
		function bd25(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTD_VENC = '25'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}	
		function bd26(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTD_VENC = '26'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}	
		function bd27(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTD_VENC = '27'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}	
		function bd28(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTD_VENC = '28'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}
		function bd29(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTD_VENC = '29'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}
		function bd30(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTD_VENC = '30'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}
		function bd31(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTD_VENC = '31'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}
		
		function bm01(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTM_VENC = '01'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}		
		function bm02(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTM_VENC = '02'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}			
		function bm03(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTM_VENC = '03'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}			
		function bm04(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTM_VENC = '04'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}			
		function bm05(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTM_VENC = '05'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}			
		function bm06(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTM_VENC = '06'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}			
		function bm07(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTM_VENC = '07'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}	
		function bm08(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTM_VENC = '08'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}			
		function bm09(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTM_VENC = '09'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}			
		function bm10(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTM_VENC = '10'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}			
		function bm11(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTM_VENC = '11'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}			
		function bm12(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTM_VENC = '12'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}	
		
		function ba2012(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTA_VENC = '2012'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}			
		function ba2013(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTA_VENC = '2013'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}					
		function ba2014(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTA_VENC = '2014'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}					
		function ba2015(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTA_VENC = '2015'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}					
		function ba2016(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTA_VENC = '2016'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}					
		function ba2017(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTA_VENC = '2017'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}					
		function ba2018(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTA_VENC = '2018'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}					
		function ba2019(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTA_VENC = '2019'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}					
		function ba2020(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTA_VENC = '2020'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}					
		function ba2021(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTA_VENC = '2021'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}					
		function ba2022(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTA_VENC = '2022'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}					
		function ba2023(){
			$sql = "SELECT 
			BLT_CODIGO,
			UPPER(BLT_CEDENTE) AS BLT_CEDENTE,
			CONCAT( BLT_DTD_EMIS, '/', BLT_DTM_EMIS, '/', BLT_DTA_EMIS) AS BLT_DTA_EMIS,
			CONCAT( BLT_DTD_VENC, '/', BLT_DTM_VENC, '/', BLT_DTA_VENC) AS BLT_DTA_VENC,
			
			CONCAT( BLT_CODBARBL1, '.', BLT_CODBARBL2) AS BLT_CODBARBL2,
			CONCAT( BLT_CODBARBL3, '.', BLT_CODBARBL4) AS BLT_CODBARBL4,
			CONCAT( BLT_CODBARBL5, '.', BLT_CODBARBL6) AS BLT_CODBARBL6,
			CONCAT( BLT_CODBARBL7, '.', BLT_CODBARBL8) AS BLT_CODBARBL8,
			
			CONCAT( 'R$ ', BLT_VALOR,'') BLT_VALOR,
			BLT_STATUS
			
			from boletos WHERE BLT_DTA_VENC = '2023'
			ORDER by BLT_DTM_VENC,BLT_DTA_VENC,BLT_DTD_VENC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}					


	}
	
?>