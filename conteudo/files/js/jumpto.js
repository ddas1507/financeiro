function next() { 
	if(document.cadastrar_concessionaria.CAP_CONS_DTD_VENC.value.length == 2) { 
	document.cadastrar_concessionaria.CAP_CONS_DTM_VENC.focus() 
	} 
	if(document.cadastrar_concessionaria.CAP_CONS_DTM_VENC.value.length == 2) { 
	document.cadastrar_concessionaria.CAP_CONS_DTA_VENC.focus() 
	} 	
	if(document.cadastrar_concessionaria.CAP_CONS_DTA_VENC.value.length == 4) { 
	document.cadastrar_concessionaria.CAP_CONS_TIPO.focus() 
	} 
} 