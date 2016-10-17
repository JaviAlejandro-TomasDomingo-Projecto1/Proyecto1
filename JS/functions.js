//**********************************************************************************************************************  GET URL PARAMETERS  *******************************************************************************
var QueryString = function () {
  // This function is anonymous, is executed immediately and 
  // the return value is assigned to QueryString!
  var query_string = {};
  var query = window.location.search.substring(1);
  var vars = query.split("&");
  for (var i=0;i<vars.length;i++) {
    var pair = vars[i].split("=");
        // If first entry with this name
    if (typeof query_string[pair[0]] === "undefined") {
      query_string[pair[0]] = pair[1];
        // If second entry with this name
    } else if (typeof query_string[pair[0]] === "string") {
      var arr = [ query_string[pair[0]], pair[1] ];
      query_string[pair[0]] = arr;
        // If third or later entry with this name
    } else {
      query_string[pair[0]].push(pair[1]);
    }
  } 
    return query_string;
} ();

//**********************************************************************************************************************  SLIDES HOME  **************************************************************************************
function initSliders(){
			// Set starting slide to 1
			var startSlide = 1;
			// Get slide number if it exists
			if (window.location.hash) {
				startSlide = window.location.hash.replace('#','');
			}
			// Initialize Slides
			$('#slides').slides({
				preload: true,
				preloadImage: '../images/loading.gif',
				generatePagination: true,
				play: 10000,
				pause: 9000,
				hoverPause: true,
				// Get the starting slide
				start: startSlide,
				animationComplete: function(current){
					// Set the slide number as a hash
					window.location.hash = '#' + current;
				}
			});

		
}

//********************************************************************************************************** SUBMENUS DESPLEGABLES MENU PRINCIPAL  **************************************************************************
//var dins1,dins2,dins3 = false;
function initSubmenus(){
	
	$('.submenu').hide();
	$('.triangulo-submenu').hide();
	
	$('#menuBici').mouseenter(function(){
		//$('.triangulo-submenu').show();
		$('.submenu').show();
		//document.getElementById("verTodas").style="background-color: #acc314; color:#000; text-decoration:none; padding:2px 5px;";
			
	});	
	
	//$('.triangulo-submenu').mouseenter(function(){
	//	//$('.triangulo-submenu').show();
	//	$('.submenu').show();
	//});
	//
	
	
	
	//$('.submenu').mouseenter(function(){
	//	//$('.triangulo-submenu').show();
	//	$('.submenu').show();
	//});
	
	
	//
	//$('#menu').mouseleave(function(){
	//	$('.triangulo-submenu').hide();
	//	$('.submenu').hide();
	//});
	//
	//
	$('#menu').children().not(':first').mouseenter(function(){

	      $('.submenu').hide();
	      
	
	});
	
	$('.submenu').mouseleave(function(){
		//$('.triangulo-submenu').hide();
		$('.submenu').hide();
	});
		

	
	initCarrito();		
}
/*
function amagar(aux){
	//if(!dins1 && !dins2){
		$('.triangulo-submenu').hide();
		$('.submenu').hide();	
	//}
}*/

//********************************************************************************************************** POP-UP IMATGE EN GRAN  *****************************************************************************************
function initFancyBox(){
	
$("a#fancyBox").fancybox();

}

//********************************************************************************************************** CAMBIAR IMATGE SUBMENU + FOCUS *********************************************************************************
function changeImgSubmenu(elem){
	
	//alert(elem.id);
	document.getElementById("foto_submenu").src = "images/imagen-menu-"+elem.id+".jpg";
	setFocus(elem);
	switch(elem.id){
		case "rigidas":
			document.getElementById("titol_peu_foto").innerHTML = "BICICLETAS R&Iacute;GIDAS";
			document.getElementById("descr_peu_foto").innerHTML = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut congue neque nisl. Etiam nibh mauris, consequat dictum pretium nec, pharetra convallis massa.";
		break;
		case "doble":
			document.getElementById("titol_peu_foto").innerHTML = "BICICLETAS DOBLES";
			document.getElementById("descr_peu_foto").innerHTML = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut congue neque nisl. Etiam nibh mauris, consequat dictum pretium nec, pharetra convallis massa.";
		break;
		case "carretera":
			document.getElementById("titol_peu_foto").innerHTML = "BICICLETAS DE CARRETERA";
			document.getElementById("descr_peu_foto").innerHTML = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut congue neque nisl. Etiam nibh mauris, consequat dictum pretium nec, pharetra convallis massa.";
		break;
		case "confort":
			document.getElementById("titol_peu_foto").innerHTML = "BICICLETAS DE CONFORT";
			document.getElementById("descr_peu_foto").innerHTML = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut congue neque nisl. Etiam nibh mauris, consequat dictum pretium nec, pharetra convallis massa.";
		break;
		case "cross":
			document.getElementById("titol_peu_foto").innerHTML = "BICICLETAS DE CROSS";
			document.getElementById("descr_peu_foto").innerHTML = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut congue neque nisl. Etiam nibh mauris, consequat dictum pretium nec, pharetra convallis massa.";
		break;
		case "hibrida":
			document.getElementById("titol_peu_foto").innerHTML = "BICICLETAS H&Iacute;BRIDAS";
			document.getElementById("descr_peu_foto").innerHTML = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut congue neque nisl. Etiam nibh mauris, consequat dictum pretium nec, pharetra convallis massa.";
		break;
		case "infantil":
			document.getElementById("titol_peu_foto").innerHTML = "BICICLETAS INFANTILES";
			document.getElementById("descr_peu_foto").innerHTML = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut congue neque nisl. Etiam nibh mauris, consequat dictum pretium nec, pharetra convallis massa.";
		break;
		case "paseo":
			document.getElementById("titol_peu_foto").innerHTML = "BICICLETAS DE PASEO";
			document.getElementById("descr_peu_foto").innerHTML = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut congue neque nisl. Etiam nibh mauris, consequat dictum pretium nec, pharetra convallis massa.";
		break;
		case "plegable":
			document.getElementById("titol_peu_foto").innerHTML = "BICICLETAS PLEGABLES";
			document.getElementById("descr_peu_foto").innerHTML = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut congue neque nisl. Etiam nibh mauris, consequat dictum pretium nec, pharetra convallis massa.";
		break;
		case "fixed":
			document.getElementById("titol_peu_foto").innerHTML = "BICICLETAS FIXED";
			document.getElementById("descr_peu_foto").innerHTML = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut congue neque nisl. Etiam nibh mauris, consequat dictum pretium nec, pharetra convallis massa.";
		break;		
	}
}

function setFocus(elem){
	elem.style="background-color: #acc314; color:#000; text-decoration:none; padding:2px 5px;";
}
function removeFocus(elem){
	elem.style="backgraund-color:#FFF; color:#000; text-decoration:none; padding:2px 5px;";
}

//********************************************************************************************************** CAMBIAR IMATGE SUBMENU + FOCUS *********************************************************************************
function changeImgGalery(quin, capa){

	document.getElementById("galeria_imgCambia"+capa+"").src = "images/images_noticias/gran_foto"+quin+"_noticia1.jpg";
}

//********************************************************************************************************** BOTON OUTLET *********************************************************************************
/*
function changeOutlet(quin){
	if(quin == 0){
		$('#outlet_productos').show();
		$('#outlet_catalogo').hide();
		document.getElementById("banner_producte").className = "producteSel";
		document.getElementById("banner_cataleg").className = "cataleg";
	}else if(quin == 1){
		$('#outlet_productos').hide();
		$('#outlet_catalogo').show();
		document.getElementById("banner_producte").className = "producte";
		document.getElementById("banner_cataleg").className = "catalegSel";
	}else{
		//error
	}
}
*/

function desplegablesOutlet(){
	$('#cond_compr_despl').hide();
	$('#pol_dev_despl').hide();
	$('#garantias_despl').hide();
	$('#plazos_entr_despl').hide();
	
	$('#cond_compr').mouseenter(function(){
		$('#cond_compr_despl').show();
	});
	$('#cond_compr_despl').mouseenter(function(){
		$('#cond_compr_despl').show();
	});
	
	$('#cond_compr').mouseleave(function(){
		$('#cond_compr_despl').hide();
	});
	$('#cond_compr_despl').mouseleave(function(){
		$('#cond_compr_despl').hide();
	});
	////////
	$('#pol_dev').mouseenter(function(){
		$('#pol_dev_despl').show();
	});
	$('#pol_dev_despl').mouseenter(function(){
		$('#pol_dev_despl').show();
	});
	
	$('#pol_dev').mouseleave(function(){
		$('#pol_dev_despl').hide();
	});
	$('#pol_dev_despl').mouseleave(function(){
		$('#pol_dev_despl').hide();
	});
	/////////
	$('#garantias').mouseenter(function(){
		$('#garantias_despl').show();
	});
	$('#garantias_despl').mouseenter(function(){
		$('#garantias_despl').show();
	});
	
	$('#garantias').mouseleave(function(){
		$('#garantias_despl').hide();
	});
	$('#garantias_despl').mouseleave(function(){
		$('#garantias_despl').hide();
	});
	/////////
	$('#plazos_entr').mouseenter(function(){
		$('#plazos_entr_despl').show();
	});
	$('#plazos_entr_despl').mouseenter(function(){
		$('#plazos_entr_despl').show();
	});
	
	$('#plazos_entr').mouseleave(function(){
		$('#plazos_entr_despl').hide();
	});
	$('#plazos_entr_despl').mouseleave(function(){
		$('#plazos_entr_despl').hide();
	});
}

//********************************************************************************************************** POP UP PEDIR INFO *********************************************************************************
function initPopup(){
	$( "#dialog" ).dialog({
		autoOpen: false,
		width: 800,
		height: 400,
		modal: true,
		buttons: [
			{
				text: "Ok",
				click: function() {
					
					var form_id = $(this).attr('data-form');
					$('#'+form_id).submit();
					//$( this ).dialog( "close" );
				}
			},
			{
				text: "Cancel",
				click: function() {
					$( this ).dialog( "close" );
					location.href='http://www.tomasdomingo.com/es/';
				}
			}
		]
	});
	
	$("#dialog").on( "dialogclose", function( event, ui ) {
		//submit form
		location.href='http://www.tomasdomingo.com/es/';
	} );
	
	// Link to open the dialog
	$( "#dialog-link" ).click(function( event ) {
		$( "#dialog" ).dialog( "open" );
		event.preventDefault();
	});
	
	//console.log(window.location.hash);
	if(window.location.hash=="#newsletter") $( "#dialog" ).dialog( "open" );;
	
}


//********************************************************************************************************** DESPLEGAR CARITO *********************************************************************************

function showCarrito(){
	$('#carrito_container').show();
}

function hideCarrito(){
	$('#carrito_container').hide();
}

function initCarrito(){
	/*
	$('#carrito_container').hide();
	//$('#finestra_carrito').hide();
	
	$('#carrito_link').mouseenter(function(){
		$('#finestra_carrito').show();			
	});
	
	$('#finestra_carrito').mouseenter(function(){
		$('#finestra_carrito').show();			
	});
	
	$('#carrito_link').mouseleave(function(){
		$('#finestra_carrito').hide();
	});
	
	$('#finestra_carrito').mouseleave(function(){
		$('#finestra_carrito').hide();
	});
	*/	
}


//********************************************************************************************************** DESPLEGABLE FAQS *********************************************************************************
var text1;
var element;
var obert = false;
function desplegarText(elem, quin){
	if(obert){
		plegarText();
	}
	text1=elem.innerHTML;
	element = elem;
	elem.innerHTML = "";	
	
	var offset = 38;
	var margeTop = 95+(offset*(quin-1));
	document.getElementById("faqs_desplegables").style = "display:block; float:right; margin-top:"+margeTop+"px;";
	switch(quin){
		case 1:			
			document.getElementById("faqs_text").innerHTML = "Somos tiendas físicas de bicicletas de venta al público.  Nos dedicamos a la venta de bicicletas, accesorios y recambios, así como de toda la equipación para cualquier ciclista.";
		break;
		case 2:
			document.getElementById("faqs_text").innerHTML = "Somos especialistas en Mountain Bike en todas sus modalidades y en ciclismo de carretera y triatlón tanto para hombre como específicas de mujer. También tenemos bicis urbanas o bicis de ciudad, de paseo,  bicis híbridas, asi como bicis plegables. ¿Y para los niños? Tenemos bicis infantiles para niños y niñas desde los 3 años.";
		break;
		case 3:
			document.getElementById("faqs_text").innerHTML = "";
		break;
	}
	obert = true;
}

function plegarText(){
	element.innerHTML = text1;
	document.getElementById("faqs_desplegables").style = "display:none;"
	obert = false;
	//elem.style = "background-color:#BBB; font-size:0.8em; font-weight:bold; padding:2px; text-align:center";	
	//document.getElementById("faqs"+quin+"").style = "display:none;";	
}

	
