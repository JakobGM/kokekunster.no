/*
 * Copyright 2002, Institutt for energi- og prosessteknikk, NTNU 
 * 
 * Skrevet av Øyvind Haave og Rasmus Høseggen 
 *
 * Modifisert Oktober 2002 av Rasmus Høseggen for EPT, NTNU
 * 
 * Legges mellom head tag'ene i toppen av nettsiden:
 * <script src="scripts/aspam.js"></script>
 *
 */


// epost-funksjon for å unngå spam

function getEmail(fornavn,etternavn,domene) {
	
	if(domene != "tev" && domene != "kkt" && domene != "mtf" && domene != "maskin"){
		
		
		if(etternavn==""){
		
			document.write('<a href="' + 'mailto:' + fornavn + '@' + domene  + '" target="_self">' + fornavn + '@' + domene  +'</a>');
		}
	
		else{

			document.write('<a href="' + 'mailto:' + fornavn + '.' + etternavn + '@' + domene + '" target="_self">' + fornavn + '.' + etternavn + '@' + domene +'</a>');
		}
		
	}
	else {
		
	var resten = '.ntnu.no';
		
	if(etternavn==""){
		
		document.write('<a href="' + 'mailto:' + fornavn + '@' + domene + resten + '" target="_self">' + fornavn + '@' + domene + resten +'</a>');
	}
	
	else{

		document.write('<a href="' + 'mailto:' + fornavn + '.' + etternavn + '@' + domene + resten + '" target="_self">' + fornavn + '.' + etternavn + '@' + domene + resten +'</a>');

	}
   }

} //end function getEmail

function getRedaktor(fornavn,etternavn,domene){
	
	//document.write('<a href="mailto:' + fornavn + '.' + etternavn + '@' +'ntnu.no" target="_self">'+ 'Instituttleder</a>');
	document.write('<a href="mailto:johan.e.hustad' + '@' +'ntnu.no" target="_self">'+ 'Instituttleder</a>');
}

function getDrift(bruker,domene){
	
	document.write('<a href="mailto:ept@ivt.ntnu.no" target="_self">'+ 'Drift</a>');
}
function eptpost(){
	document.write('<a href="mailto:ept@ivt.ntnu.no" target="_self">'+'ept@ivt.ntnu.no'+'</a>');

}
// Funksjonen oppretterr et nytt vindu for visning av bilde

function bildeVindu(kilde,bredde,hoyde,tittel,posX,posY) {
	
	
	vindu = window.open("","Vindu","width="+bredde+",height="+hoyde+",left="+posX+",top="+posY);
	vindu.document.open();
	vindu.document.write('<html><title>'+tittel+'</title><body leftmargin="0" topmargin="0" marginheight="0" marginwidth="0" onBlur="self.close()">'); 
	vindu.document.write('<img src='+kilde+' width='+bredde+' height='+hoyde+' alt='+tittel+'>'); 
	vindu.document.write('</body></html>');
	vindu.document.close();
	vindu.focus();
}

 	
// Funksjonen oppretter et nytt vindu for visning av html-sider
 	
function htmlVindu(kilde,bredde,hoyde,posX,posY) {
	
	vindu = window.open(kilde,"Vindu","width="+bredde+",height="+hoyde+",left="+posX+",top="+posY);
	vindu.focus();	
		
}

// Timestamp: Skrevet av Anne Lise Berg : 28.01.05

	 function leadingZero(nr)
	 {
		if (nr < 10) nr = "0" + nr;
		return nr;
	 }

     function PageLastUpdated(){
		 var last = document.lastModified;
		 var dato = new Date(last);
		 		 
		 var aar=dato.getYear();
		 var maaned=leadingZero(dato.getMonth()+1);
		 var dag=leadingZero(dato.getDate());
		 
	     document.writeln(dag+"."+maaned+"."+aar);   
     }
