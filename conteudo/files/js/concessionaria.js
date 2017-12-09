//CODIGO EM JAVA SCRIPT PARA SALTOS NOS CAMPOS DO FORMULÁRIO DE CADASTRO DO CONTATO NO MENÚ AGENDA
function proximo_campo_cadastrar_concessionaria(campoatual, proximocampo)
{
	var tamanho_max = eval("document.cadastrar_concessionaria." + campoatual + ".maxLength;");
	var tamanho_atual = eval("document.cadastrar_concessionaria."+ campoatual +".value.length;");
	if (tamanho_atual == tamanho_max){
		eval("document.cadastrar_concessionaria."+ proximocampo +".focus();");
	}
}
function proximo_campo_cadastrar_boleto(campoatual, proximocampo)
{
	var tamanho_max = eval("document.cadastrar_boleto." + campoatual + ".maxLength;");
	var tamanho_atual = eval("document.cadastrar_boleto."+ campoatual +".value.length;");
	if (tamanho_atual == tamanho_max){
		eval("document.cadastrar_boleto."+ proximocampo +".focus();");
	}
}