//-----------------------------------------------------    
//Funcao: MascaraMoeda
//Sinopse: Mascara de preenchimento de moeda    
//Parametro:    
//   objTextBox : Objeto (TextBox)    
//   SeparadorMilesimo : Caracter separador de mil�simos    
//   SeparadorDecimal : Caracter separador de decimais    
//   e : Evento    
//Retorno: Booleano    
//Autor: Gabriel Fr�es - www.codigofonte.com.br    
//   
// Altera��o: Altera��o para a permiss�o de pagar o conte�do do componente.  
// Autor: Bruno Lins Alves - www.brunolinsalves.com  
//-----------------------------------------------------    
function MascaraMoeda(objTextBox, SeparadorMilesimo, SeparadorDecimal, e){    
    var sep = 0;    
    var key = '';    
    var i = j = 0;    
    var len = len2 = 0;    
    var strCheck = '0123456789';    
    var aux = aux2 = '';    
    var whichCode = (window.Event) ? e.which : e.keyCode;    
    if (whichCode == 13 || whichCode == 8) return true;    
    key = String.fromCharCode(whichCode); // Valor para o c�digo da Chave    
    if (strCheck.indexOf(key) == -1) return false; // Chave inv�lida    
    len = objTextBox.value.length;    
    for(i = 0; i < len; i++)    
        if ((objTextBox.value.charAt(i) != '0') && (objTextBox.value.charAt(i) != SeparadorDecimal)) break;    
    aux = '';    
    for(; i < len; i++)    
        if (strCheck.indexOf(objTextBox.value.charAt(i))!=-1) aux += objTextBox.value.charAt(i);    
    aux += key;    
    len = aux.length;    
    if (len == 0) objTextBox.value = '';    
    if (len == 1) objTextBox.value = '0'+ SeparadorDecimal + '0' + aux;    
    if (len == 2) objTextBox.value = '0'+ SeparadorDecimal + aux;    
    if (len > 2) {    
        aux2 = '';    
        for (j = 0, i = len - 3; i >= 0; i--) {    
            if (j == 3) {    
                aux2 += SeparadorMilesimo;    
                j = 0;    
            }    
            aux2 += aux.charAt(i);    
            j++;    
        }    
        objTextBox.value = '';    
        len2 = aux2.length;    
        for (i = len2 - 1; i >= 0; i--)    
        objTextBox.value += aux2.charAt(i);    
        objTextBox.value += SeparadorDecimal + aux.substr(len - 2, len);    
    }    
    return false;    
}    

function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
}
