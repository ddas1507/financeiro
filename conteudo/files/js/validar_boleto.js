function validar(cadastrar_boleto){
// inicio da Fun��o para o campo Banco
   	if (cadastrar_boleto.CAP_BLT_BANCO.selectedIndex==''){ 
		alert("Selecionar o \"Banco\" � obrigat�rio.");
		document.cadastrar_boleto.CAP_BLT_BANCO.focus() 
      	return false; 
   	} 
// final da Fun��o para o campo Banco
// inicio da Fun��o para o campo Cedente
	else if(cadastrar_boleto.CAP_BLT_CEDENTE.value == ''){
		alert("O campo \"Cedente\" � obrigat�rio.");
		document.cadastrar_boleto.CAP_BLT_CEDENTE.focus()
		return false;
	}
// final da Fun��o para o campo Cedente
// inicio da Fun��o para o bloco 1 
	else if(cadastrar_boleto.CAP_BLT_CODBARBL1.value == ''){
		alert("O campo \"bloco 1\" � obrigat�rio.");
		document.cadastrar_boleto.CAP_BLT_CODBARBL1.focus()
		return false;
	}
	else if(cadastrar_boleto.CAP_BLT_CODBARBL1.value.length < 5){
		alert("Ainda faltam digitos no \"bloco 1\".");
		document.cadastrar_boleto.CAP_BLT_CODBARBL1.focus()
		return false;
	}
// final da Fun��o para o bloco 1
// inicio da Fun��o para o bloco 2 
	else if(cadastrar_boleto.CAP_BLT_CODBARBL2.value == ''){
		alert("O campo \"bloco 2\" � obrigat�rio.");
		document.cadastrar_boleto.CAP_BLT_CODBARBL2.focus()
		return false;
	}
	else if(cadastrar_boleto.CAP_BLT_CODBARBL2.value.length < 5){
		alert("Ainda faltam digitos no \"bloco 2\".");
		document.cadastrar_boleto.CAP_BLT_CODBARBL2.focus()
		return false;
	}	
// final da Fun��o para o bloco 2
// inicio da Fun��o para o bloco 3
	else if(cadastrar_boleto.CAP_BLT_CODBARBL3.value == ''){
		alert("O campo \"bloco 3\" � obrigat�rio.");
		document.cadastrar_boleto.CAP_BLT_CODBARBL3.focus()
		return false;
	}
	else if(cadastrar_boleto.CAP_BLT_CODBARBL3.value.length < 5){
		alert("Ainda faltam digitos no \"bloco 3\".");
		document.cadastrar_boleto.CAP_BLT_CODBARBL3.focus()
		return false;
	}
// final da Fun��o para o bloco 3
// inicio da Fun��o para o bloco 4
	else if(cadastrar_boleto.CAP_BLT_CODBARBL4.value == ''){
		alert("O campo \"bloco 4\" � obrigat�rio.");
		document.cadastrar_boleto.CAP_BLT_CODBARBL4.focus()
		return false;
	}
	else if(cadastrar_boleto.CAP_BLT_CODBARBL4.value.length < 6){
		alert("falta o digito do \"bloco 4\".");
		document.cadastrar_boleto.CAP_BLT_CODBARBL4.focus()
		return false;
	}
// final da Fun��o para o bloco 4
// inicio da Fun��o para o bloco 5
	else if(cadastrar_boleto.CAP_BLT_CODBARBL5.value == ''){
		alert("O campo \"bloco 5\" � obrigat�rio.");
		document.cadastrar_boleto.CAP_BLT_CODBARBL5.focus()
		return false;
	}
	else if(cadastrar_boleto.CAP_BLT_CODBARBL5.value.length < 5){
		alert("Ainda faltam digitos no \"bloco 5\".");
		document.cadastrar_boleto.CAP_BLT_CODBARBL5.focus()
		return false;
	}
// final da Fun��o para o bloco 5
// inicio da Fun��o para o bloco 6
	else if(cadastrar_boleto.CAP_BLT_CODBARBL6.value == ''){
		alert("O campo \"bloco 6\" � obrigat�rio.");
		document.cadastrar_boleto.CAP_BLT_CODBARBL6.focus()
		return false;
	}
	else if(cadastrar_boleto.CAP_BLT_CODBARBL6.value.length < 6){
		alert("falta o digito do \"bloco 6\".");
		document.cadastrar_boleto.CAP_BLT_CODBARBL6.focus()
		return false;
	}
// final da Fun��o para o bloco 6
// inicio da Fun��o para o bloco 7
	else if(cadastrar_boleto.CAP_BLT_CODBARBL7.value == ''){
		alert("O campo \"bloco 7\" � obrigat�rio.");
		document.cadastrar_boleto.CAP_BLT_CODBARBL7.focus()
		return false;
	}
// final da Fun��o para o bloco 7
// inicio da Fun��o para o bloco 8
	else if(cadastrar_boleto.CAP_BLT_CODBARBL8.value == ''){
		alert("O campo \"bloco 8\" � obrigat�rio.");
		document.cadastrar_boleto.CAP_BLT_CODBARBL8.focus()
		return false;
	}
// final da Fun��o para o bloco 8
// inicio da Fun��o para o bloco Total a Pagar
	else if(cadastrar_boleto.CAP_BLT_VALOR.value == ''){
		alert("O campo \"Total a Pagar\" � obrigat�rio.");
		document.cadastrar_boleto.CAP_BLT_VALOR.focus()
		return false;
	}
// final da Fun��o para o bloco Total a Pagar
// inicio da Fun��o para o bloco Data de Emiss�o DIA
	else if(cadastrar_boleto.CAP_BLT_DTD_EMIS.value == ''){
		alert("Favor Preencher o \"Dia\" em \"Data de Emiss�o\".");
		document.cadastrar_boleto.CAP_BLT_DTD_EMIS.focus()
		return false;
	}
	else if(cadastrar_boleto.CAP_BLT_DTD_EMIS.value > 31){
		alert("Escolha um dia entre \"1 e 31\".");
		document.cadastrar_boleto.CAP_BLT_DTD_EMIS.focus()
		return false;
	}
	else if(cadastrar_boleto.CAP_BLT_DTD_EMIS.value.length < 2){
		alert(" faltam digitos no campo dia em \"Data de Emiss�o\".");
		document.cadastrar_boleto.CAP_BLT_DTD_EMIS.focus()
		return false;
	}
// final da Fun��o para o bloco Data de Emiss�o DIA
// inicio da Fun��o para o bloco Data de Emiss�o MES
	else if(cadastrar_boleto.CAP_BLT_DTM_EMIS.value == ''){
		alert("Favor Preencher o \"M�s\" em \"Data de Emiss�o\".");
		document.cadastrar_boleto.CAP_BLT_DTM_EMIS.focus()
		return false;
	}
	else if(cadastrar_boleto.CAP_BLT_DTM_EMIS.value > 12){
		alert("Escolha um M�s entre \"1 e 12\".");
		document.cadastrar_boleto.CAP_BLT_DTM_EMIS.focus()
		return false;
	}
	else if(cadastrar_boleto.CAP_BLT_DTM_EMIS.value.length < 2){
		alert(" faltam digitos no campo M�s em \"Data de Emiss�o\".");
		document.cadastrar_boleto.CAP_BLT_DTM_EMIS.focus()
		return false;
	}
// final da Fun��o para o bloco Data de Emiss�o MES
// inicio da Fun��o para o bloco Data de Emiss�o ANO
	else if(cadastrar_boleto.CAP_BLT_DTA_EMIS.value == ''){
		alert("Favor Preencher o \"Ano\" em \"Data de Emiss�o\".");
		document.cadastrar_boleto.CAP_BLT_DTA_EMIS.focus()
		return false;
	}
	else if(cadastrar_boleto.CAP_BLT_DTA_EMIS.value < 2012){
		alert("Digite um Ano \"a partir de 2012\".");
		document.cadastrar_boleto.CAP_BLT_DTA_EMIS.focus()
		return false;
	}	
	else if(cadastrar_boleto.CAP_BLT_DTA_EMIS.value.length < 4){
		alert(" faltam digitos no campo Ano em \"Data de Emiss�o\".");
		document.cadastrar_boleto.CAP_BLT_DTA_EMIS.focus()
		return false;
	}
// final da Fun��o para o bloco Data de Emiss�o ANO

// inicio da Fun��o para o bloco Data de Vencimento DIA
	else if(cadastrar_boleto.CAP_BLT_DTD_VENC.value == ''){
		alert("Favor Preencher o \"Dia\" em \"Data de Vencimento\".");
		document.cadastrar_boleto.CAP_BLT_DTD_VENC.focus()
		return false;
	}
	else if(cadastrar_boleto.CAP_BLT_DTD_VENC.value > 31){
		alert("Escolha um dia entre \"1 e 31\".");
		document.cadastrar_boleto.CAP_BLT_DTD_VENC.focus()
		return false;
	}	
	else if(cadastrar_boleto.CAP_BLT_DTD_VENC.value.length < 2){
		alert(" faltam digitos no campo dia em \"Data de Vencimento\".");
		document.cadastrar_boleto.CAP_BLT_DTD_VENC.focus()
		return false;
	}
// final da Fun��o para o bloco Data de Vencimento DIA
// inicio da Fun��o para o bloco Data de Vencimento MES
	else if(cadastrar_boleto.CAP_BLT_DTM_VENC.value == ''){
		alert("Favor Preencher o \"M�s\" em \"Data de Vencimento\".");
		document.cadastrar_boleto.CAP_BLT_DTM_VENC.focus()
		return false;
	}
	else if(cadastrar_boleto.CAP_BLT_DTM_VENC.value > 12){
		alert("Escolha um M�s entre \"1 e 12\".");
		document.cadastrar_boleto.CAP_BLT_DTM_VENC.focus()
		return false;
	}
	else if(cadastrar_boleto.CAP_BLT_DTM_VENC.value.length < 2){
		alert(" faltam digitos no campo M�s em \"Data de Vencimento\".");
		document.cadastrar_boleto.CAP_BLT_DTM_VENC.focus()
		return false;
	}
// final da Fun��o para o bloco Data de Vencimento MES
// inicio da Fun��o para o bloco Data de Vencimento ANO
	else if(cadastrar_boleto.CAP_BLT_DTA_VENC.value == ''){
		alert("Favor Preencher o \"Ano\" em \"Data de Vencimento\".");
		document.cadastrar_boleto.CAP_BLT_DTA_VENC.focus()
		return false;
	}
	else if(cadastrar_boleto.CAP_BLT_DTA_VENC.value < 2012){
		alert("Digite um Ano \"a partir de 2012\".");
		document.cadastrar_boleto.CAP_BLT_DTA_VENC.focus()
		return false;
	}		
	else if(cadastrar_boleto.CAP_BLT_DTA_VENC.value.length < 4){
		alert(" faltam digitos no campo Ano em \"Data de Vencimento\".");
		document.cadastrar_boleto.CAP_BLT_DTA_VENC.focus()
		return false;
	}
   	else if (cadastrar_boleto.CAP_BLT_STATUS.selectedIndex==''){
		alert("Selecionar o \"Status\" � obrigat�rio.");
		document.cadastrar_boleto.CAP_BLT_STATUS.focus()
      	return false; 
   	}
// final da Fun��o para o bloco Data de Vencimento ANO
	else
		return true;
}
