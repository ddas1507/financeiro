<?php
	class home_manutencao{
		var $resultado;
		var $registros;
		
		function home_manutencao(){
			$this->con = new conexao();
		}
		
		function totalderegistrosemcontasapagarconcessionarias(){
			$sql = "select count(*) as TOTAL from contasapagarconcessionarias";
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
			return $this->registros->TOTAL;
		}
		
		function totaldedebitosemcontasapagarconcessionarias(){
			$sql = "SELECT SUM(REPLACE(CAP_CONS_VALOR, ',', '.')) as TT_DEB_CONC FROM contasapagarconcessionarias";
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
			return $this->registros->TT_DEB_CONC;
		}
		
		function totalderegistrosemcontasapagarboletos(){
			$sql = "select count(*) as TOTAL from contasapagarboletos";
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
			return $this->registros->TOTAL;
		}
		
		function totaldedebitosemcontasapagarboletos(){
			$sql = "SELECT SUM(REPLACE(CAP_BLT_VALOR, ',', '.')) as TT_DEB_BLT FROM contasapagarboletos";
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
			return $this->registros->TT_DEB_BLT;
		}
	}
?>