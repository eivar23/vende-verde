
function categoria(cat){
			$(".fru").hide();
            $(".veg").hide();
            $(".cer").hide();
            $(".pro").hide();
            $("."+ cat).show();
        
}

function buscar(){

	let nombre = document.querySelector("#search-box").value.toLowerCase(); 
	
	 if(nombre == ""){
	 		$(".fru").show();
            $(".veg").show();
            $(".cer").show();
            $(".pro").show();
	 }else{
	 		$(".fru").hide();
            $(".veg").hide();
            $(".cer").hide();
            $(".pro").hide();
			$("."+ nombre).show();
		
	 }
		
}

 function visor(opcion) {
 	switch(opcion){
 		case 1:
 			$(".listaprod").hide();
 			$(".category").hide();
			$(".visorpro").show();
			document.getElementById("titulopro").innerHTML += "Café tipo exportación";
			$("#p_img").attr("src",'../image/prod-cafe.jpg');
			document.getElementById("prod_precio").innerHTML += "2800";
			document.getElementById("prod_descripcion").innerHTML += "café del altiplano cundiboyacense seleccionado bajo un estricto proceso";
		break;
		case 2:
 			$(".listaprod").hide();
 			$(".category").hide();
			$(".visorpro").show();
			document.getElementById("titulopro").innerHTML += "Fresa seleccionada";
			$("#p_img").attr("src",'../image/prod-fresa.jpg');
			document.getElementById("prod_precio").innerHTML += "3500";
			document.getElementById("prod_descripcion").innerHTML += "Fresa gruesa seleccionada de la mejor calidad, producida en boyacá ";
		break;
		case 3:
 			$(".listaprod").hide();
 			$(".category").hide();
			$(".visorpro").show();
			document.getElementById("titulopro").innerHTML += "Mora de castilla orgánica";
			$("#p_img").attr("src",'../image/prod-mora.jpg');
			document.getElementById("prod_precio").innerHTML += "2000";
			document.getElementById("prod_descripcion").innerHTML += "Mora de castilla producida sin productos químicos, lista para consumo";
		break;
		case 4:
 			$(".listaprod").hide();
 			$(".category").hide();
			$(".visorpro").show();
			document.getElementById("titulopro").innerHTML += "Trigo sin cáscara";
			$("#p_img").attr("src",'../image/prod-trigo.jpg');
			document.getElementById("prod_precio").innerHTML += "1200";
			document.getElementById("prod_descripcion").innerHTML += "Trigo listo para procesar";
		break;
		case 5:
 			$(".listaprod").hide();
 			$(".category").hide();
			$(".visorpro").show();
			document.getElementById("titulopro").innerHTML += "Avena sin cáscara";
			$("#p_img").attr("src",'../image/prod-avena.jpg');
			document.getElementById("prod_precio").innerHTML += "3000";
			document.getElementById("prod_descripcion").innerHTML += "Avena lista para procesar";
		break;
		case 6:
 			$(".listaprod").hide();
 			$(".category").hide();
			$(".visorpro").show();
			document.getElementById("titulopro").innerHTML += "Pitaya";
			$("#p_img").attr("src",'../image/prod-pitaya.jpg');
			document.getElementById("prod_precio").innerHTML += "4500";
			document.getElementById("prod_descripcion").innerHTML += "Pitaya de muy buena calidad producida en el municipio de zetaquirá, boyacá";
		break;
		case 7:
 			$(".listaprod").hide();
 			$(".category").hide();
			$(".visorpro").show();
			document.getElementById("titulopro").innerHTML += "Quinua deshidratada";
			$("#p_img").attr("src",'../image/prod-quinua.jpg');
			document.getElementById("prod_precio").innerHTML += "2500";
			document.getElementById("prod_descripcion").innerHTML += "Quinua producida sin aditivos ni productos químicos";
		break;
		case 8:
 			$(".listaprod").hide();
 			$(".category").hide();
			$(".visorpro").show();
			document.getElementById("titulopro").innerHTML += "Zanahoria seleccionada";
			$("#p_img").attr("src",'../image/prod-zanahoria.jpg');
			document.getElementById("prod_precio").innerHTML += "2000";
			document.getElementById("prod_descripcion").innerHTML += "Zanahoria gruesa producida en boyacá";
		break;
		case 9:
 			$(".listaprod").hide();
 			$(".category").hide();
			$(".visorpro").show();
			document.getElementById("titulopro").innerHTML += "Lechuga fresca";
			$("#p_img").attr("src",'../image/prod-lechuga.jpg');
			document.getElementById("prod_precio").innerHTML += "2500";
			document.getElementById("prod_descripcion").innerHTML += "Lechuga producida sin aditivos ni productos químicos";
		break;
		case 10:
 			$(".listaprod").hide();
 			$(".category").hide();
			$(".visorpro").show();
			document.getElementById("titulopro").innerHTML += "Queso pera";
			$("#p_img").attr("src",'../image/prod-queso.jpg');
			document.getElementById("prod_precio").innerHTML += "10000";
			document.getElementById("prod_descripcion").innerHTML += "Queso pera de excelente calidad, somos una empresa ubicada en el municipio de paipa, producimos todo tipo de quesos y derivados lácteos";
		break;


	
 	}
	

	
}

function tienda(){

			$(".listaprod").show();
 			$(".category").show();
			$(".visorpro").hide();
}

