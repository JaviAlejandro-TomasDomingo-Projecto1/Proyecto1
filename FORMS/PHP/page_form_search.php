
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="./"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tomás Domingo | Tomás Domingo</title>
<meta content="width=1024" name="viewport" />
<meta name="description" content="Tomas Domingo es la mayor tienda de bicicletas especializada de Barcelona, cuenta con casi 2.000 m2 entre las dos tiendas y más de 65 años de historia. Dispone de bicis de Mountain Bike, bicis de carretera, bicis urbanas, bicis plegables e infantiles y ofrece en un mismo espacio, la selección de las mejores marcas de bicicletas del mundo como SPECIALIZED, TREK, SCOTT, GIANT, CANNONDALE y BROMPTON entre otras, así como un trato y atención totalmente personalizada. Dispone de taller altamente cualificado y certificado y servicio de garantías. " lang="" />
<meta name="keywords" content="Bicis, bicicletas, BTT, ciclismo,  Mountain Bikes, carretera, triatlón, SPECIALIZED, TREK, SCOTT, GIANT, CANNONDALE, BROMPTON, taller, bicis 27,5, bicis 29, bicis suspension, bicis rigidas, bicis plegables. " lang="" />
<meta name="title" content="Tomás Domingo | Tomás Domingo" />
<link rel="Shortcut Icon" href="images/favicon.ico">
<link href="http://www.tomasdomingo.com/css/style.css" rel="stylesheet" type="text/css" />
<link href="http://www.tomasdomingo.com/css/south-street/jquery-ui-1.10.3.custom.css" rel="stylesheet">
<link href="http://www.tomasdomingo.com/css/barnacode.css" rel="stylesheet" type="text/css" />
<link href="http://www.tomasdomingo.com/css/barousel.css" rel="stylesheet">
<script type="text/javascript" src="http://www.tomasdomingo.com/http://www.tomasdomingo.com/js/libs/modernizr-2.5.3-respond-1.1.0.min.js"></script>
<script type="text/javascript" src="http://www.tomasdomingo.com/http://www.tomasdomingo.com/js/jquery-1.7.min.js"></script>
<script type="text/javascript" src="http://www.tomasdomingo.com/http://www.tomasdomingo.com/js/jquery-ui-1.10.3.custom.js"></script>
<script type="text/javascript" src="http://www.tomasdomingo.com/http://www.tomasdomingo.com/js/slides.min.jquery.js"></script>
<script type="text/javascript" src="http://www.tomasdomingo.com/http://www.tomasdomingo.com/js/functions.js"></script>
<script type="text/javascript" src="http://www.tomasdomingo.com/http://www.tomasdomingo.com/js/utils.js"></script>
<script type="text/javascript" src="http://www.tomasdomingo.com/http://www.tomasdomingo.com/js/barnacode.js"></script>
<script type="text/javascript" src="http://www.tomasdomingo.com/http://www.tomasdomingo.com/js/jquery.barousel.min.js"></script>
<script src="jquery-1.12.4.min.js"></script>
<script>

function disable1() {
		document.f1.otros.value="";
		document.f1.otros.disabled=true;
		document.f1.ubicacion.disabled = false;
}
function disable11() {
	document.f1.otros.disabled=false;
	document.f1.ubicacion.disabled = true;
	document.f1.ubicacion.value="P0";
}
function disable2() {
		document.f1.multicolor.value="";
		document.f1.multicolor.disabled=true;
		document.f1.ecolor.disabled = false;
}
function disable22() {
	document.f1.multicolor.disabled= false;
	document.f1.ecolor.disabled = true;
	document.f1.ecolor.value="P0";
}
</script>
<script>
function validar(){
	if(document.f1.titulo.value =="" ){
		return exit;
	}
	else {
		var x = document.f1.titulo.value;
		if (x.length <2){ //si el texo es menor a 2
			alert('El texto es muy corto');
		}
		if (document.f1.titulo.value.match(/^[A-Za-z\_\-\.\s\xF1\xD1]+$/) )
		{
		//document.f1.titulo.value.write(x.toLowerCase());
		console.log('correcto')
		}
		else	{
				alert ('Texto no valido , Porfavor introduce solo Texto');
				document.f1.titulo.focus();
			}
	}


}
function validaru(){
	if(document.f1.otros.value =="" ){
		return exit;
	}
	else {
		var x = document.f1.otros.value;
		if (x.length <2){ //si el texo es menor a 2
			alert('El texto es muy corto');
		}

		if (document.f1.otros.value.match(/^[A-Za-z\_\-\.\s\xF1\xD1]+$/) )
		{
		//document.f1.titulo.value.write(x.toLowerCase());
		console.log('correcto')
		}
		else	{
				alert ('Texto no valido , Porfavor introduce solo Texto');
				document.f1.otros.focus();
			}
	}
}
	function validarm(){
		if(document.f1.marca.value =="" ){
			return exit;
		}
		else {
			var x = document.f1.marca.value;
			if (x.length <2){ //si el texo es menor a 2
				alert('El texto es muy corto');
			}
			if (document.f1.marca.value.match(/^[A-Za-z\_\-\.\s\xF1\xD1]+$/) )
			{
			//document.f1.titulo.value.write(x.toLowerCase());
			console.log('correcto')
			}
			else	{
					alert ('Texto no valido , Porfavor introduce solo Texto');
					document.f1.marca.focus();
				}
		}


	}

function validarmul(){
	if(document.f1.multicolor.value =="" ){
		return exit;
	}
	else {
		var x = document.f1.multicolor.value;
		if (x.length <2){ //si el texo es menor a 2
			alert('El texto es muy corto');
		}
		if (document.f1.multicolor.value.match(/^[A-Za-z\_\-\.\s\xF1\xD1]+$/) )
		{
		//document.f1.titulo.value.write(x.toLowerCase());
		console.log('correcto')
		}
		else	{
				alert ('Texto no valido , Porfavor introduce solo Texto');
				document.f1.multicolor.focus();
			}
	}


}
</script>
</head>
<body>
<!-- INICIO DEL MENU DESPLEGABLE !-->

<!-- INICIO QUICK CART!-->
<div id="carrito">
	<ul>
		<!-- onmouseover="showCarrito()" -->
       		<li class="cart_empty"  data-img="img/cesta.png" data-txt="CESTA"><span>CESTA VACIA</span><img src="http://www.tomasdomingo.com/img/cestag.png"><div class="clear"><!-- CLEAR --></div>	</li>

       		<li class="cart_noempty hidden"><a href="#" data-img="img/cestag.png" data-txt="CESTA VACIA"><span>CESTA</span><img src="http://www.tomasdomingo.com/img/cesta.png"></a><div class="clear"><!-- CLEAR --></div>	</li>

	</ul>
	<div class="clear"><!-- CLEAR --></div>
</div>
<div id="carrito_container"  style="display:none;">
	<div id="contanier_carrito">
        <div id="finestra_carrito">
            <div id="requadre">
            	<h2>Su cesta</h2>
              <p class="cart_empty_box">No hay productos en su cesta</p>
            </div>
            <div class="clear"><!-- CLEAR --></div>
            <div class="clear"><!-- CLEAR --></div>

        </div>
    </div>
</div>
	<div id="header_nav_container">
	    <div id="header_nav">
	        <a href="../index.html"><img src="http://www.tomasdomingo.com/imagenesPrueba/logo-domingo.png"></a>
	        <ul>
	            	<li><a href="es/estaticas/faqs/" >FAQS</a></li>
	            	<li><a href="es/estaticas/trabaja-con-nosotros/" >TRABAJA CON NOSOTROS</a></li>
	            	<li><a href="es/estaticas/tiendascontacto/" >TIENDAS/CONTACTO</a></li>
	            <li><a href="https://www.facebook.com/pages/Tomas-Domingo-The-Bike-House/270923404115" title="Ver en facebook" target="_blank"><img src="http://www.tomasdomingo.com/imagenesPrueba/facebook-icono-domingo.jpg"></a></li>
						<br/><li class="boton" style="float: right;padding-top: 10px;font-size: 13px;font-weight: 800;"><a href="page_form_search.html"><span>BICICLETAS PERDIDAS</span></a></li>
					</ul>
	    </div>
	</div>
	<div id="container">

	    <ul id="menu">
	        <li>
	            <a  href="es/catalogo/bicis/0/0/desc/" title="Ver bicis" id="menuBici" style="padding:15px 0;" >BICIS</a>
	            <div class="triangulo-submenu" style="background: url('imagenesPrueba/triangulo-submenu-domingo.gif') no-repeat scroll left top transparent; height: 14px; position: absolute; width: 14px; margin:0 0 0 45px;">
	            <!-- IMAGEN SUBMENU --></div>
	        </li>
	        <li>
	            <a  href="es/catalogo/complementos/0/0/desc/" title="Ver complementos"  >COMPLEMENTOS</a>

	        </li>
	        <li>
	            <a  href="es/catalogo/partes/0/0/desc/" title="Ver partes"  >PARTES</a>

	        </li>
	        <li>
	            <a  href="es/catalogo/ropa/0/0/desc/" title="Ver ropa"  >ROPA</a>

	        </li>
	        <li>
	            <a  href="es/catalogo/segunda-mano/0/0/desc/" title="Ver segunda mano"  >2ª MANO</a>

	        </li>
	        <li>|</li>
	        <li><a href="es/corporativas/empresa/" title="Ver empresa" >EMPRESA</a></li>
	        <li class="boton_outlet"><a href="es/catalogo/outlet/" title="Ver productos outlet"><img  src="http://www.tomasdomingo.com/imagenesPrueba/outlet.png"></a></li>
	        <li class="buscar"><span>BUSCAR</span><img src="http://www.tomasdomingo.com/imagenesPrueba/flecha-buscar-domingo.png"><form action="http://www.tomasdomingo.com/es/catalogo/resultados/" method="post" class="search_form"><input type="text" id="q" name="q" value="" /><input type="submit" value=""></input></form></li>
	    </ul>

	    <div class="submenu">
	        <ul class="familias">
	            <li><a id="verTodas" href="" title=""></a></li>
	            <li><a id="bici-carretera" class="subfam" href="es/catalogo/bicis/bici-carretera/0/desc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/trek/506955.jpg" data-nom="BICICLETAS BICI CARRETERA" data-des="">BICI CARRETERA</a></li>
	            <li><a id="bici-carretera-mujer" class="subfam" href="es/catalogo/bicis/bici-carretera-mujer/0/desc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/trek/802727.jpg" data-nom="BICICLETAS BICI CARRETERA MUJER" data-des="">BICI CARRETERA MUJER</a></li>
	            <li><a id="bici-confort" class="subfam" href="es/catalogo/bicis/bici-confort/0/desc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/specialized/92015-6204.jpg" data-nom="BICICLETAS BICI CONFORT" data-des="">BICI CONFORT</a></li>
	            <li><a id="bici-cross" class="subfam" href="es/catalogo/bicis/bici-cross/0/desc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/trek/505155.jpg" data-nom="BICICLETAS BICI CROSS" data-des="">BICI CROSS</a></li>
	            <li><a id="bici-doble-275" class="subfam" href="es/catalogo/bicis/bici-doble-275/0/desc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/cannondale/CM2401MD01.jpg" data-nom="BICICLETAS BICI DOBLE 27.5" data-des="">BICI DOBLE 27.5</a></li>
	            <li><a id="bici-doble-29" class="subfam" href="es/catalogo/bicis/bici-doble-29/0/desc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/cannondale/CM2108MD02.jpg" data-nom="BICICLETAS BICI DOBLE 29" data-des="">BICI DOBLE 29</a></li>
	            <li><a id="bici-electrica" class="subfam" href="es/catalogo/bicis/bici-electrica/0/desc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/quipplan/BE0019.jpg" data-nom="BICICLETAS BICI ELECTRICA" data-des="">BICI ELECTRICA</a></li>
	            <li><a id="bici-hibrida" class="subfam" href="es/catalogo/bicis/bici-hibrida/0/desc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/trek/500776.jpg" data-nom="BICICLETAS BICI HIBRIDA" data-des="">BICI HIBRIDA</a></li>
	            <li><a id="bici-hibrida-mujer" class="subfam" href="es/catalogo/bicis/bici-hibrida-mujer/0/desc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/trek/500720.jpg" data-nom="BICICLETAS BICI HIBRIDA MUJER" data-des="">BICI HIBRIDA MUJER</a></li>
	            <li><a id="bici-infantil" class="subfam" href="es/catalogo/bicis/bici-infantil/0/desc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/conor/BI6HALRS.jpg" data-nom="BICICLETAS BICI INFANTIL" data-des="">BICI INFANTIL</a></li>
	            <li><a id="bici-paseo" class="subfam" href="es/catalogo/bicis/bici-paseo/0/desc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/liv/50022213.jpg" data-nom="BICICLETAS BICI PASEO" data-des="">BICI PASEO</a></li>
	            <li><a id="bici-plegable" class="subfam" href="es/catalogo/bicis/bici-plegable/0/desc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/brompton/888880.jpg" data-nom="BICICLETAS BICI PLEGABLE" data-des="">BICI PLEGABLE</a></li>
	            <li><a id="bici-reserva" class="subfam" href="es/catalogo/bicis/bici-reserva/0/desc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/cannondale/7899877.jpg" data-nom="BICICLETAS BICI RESERVA" data-des="">BICI RESERVA</a></li>
	            <li><a id="bici-rigida-26" class="subfam" href="es/catalogo/bicis/bici-rigida-26/0/desc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/specialized/99515-7703.jpg" data-nom="BICICLETAS BICI RIGIDA 26" data-des="">BICI RIGIDA 26</a></li>
	            <li><a id="bici-rigida-27" class="subfam" href="es/catalogo/bicis/bici-rigida-27/0/desc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/scott/238275007.jpg" data-nom="BICICLETAS BICI RIGIDA 27" data-des="">BICI RIGIDA 27</a></li>
	            <li><a id="bici-rigida-29" class="subfam" href="es/catalogo/bicis/bici-rigida-29/0/desc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/specialized/91215-5603.jpg" data-nom="BICICLETAS BICI RIGIDA 29" data-des="">BICI RIGIDA 29</a></li>
	            <li><a id="bici-rigida-mujer-27" class="subfam" href="es/catalogo/bicis/bici-rigida-mujer-27/0/desc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/trek/519361.jpg" data-nom="BICICLETAS BICI RIGIDA MUJER 27" data-des="">BICI RIGIDA MUJER 27</a></li>
	            <li><a id="bici-rigida-mujer-29" class="subfam" href="es/catalogo/bicis/bici-rigida-mujer-29/0/desc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/specialized/91815-6504.jpg" data-nom="BICICLETAS BICI RIGIDA MUJER 29" data-des="">BICI RIGIDA MUJER 29</a></li>
	        </ul>
	        <ul class="marcas">
	            <li><a id="verTodas" href="" title=""></a></li>
	            <li class="hidden bici-carretera"><a id="cannondale" class="submar" href="es/catalogo/bicis/bici-carretera/cannondale/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/cannondale/C11186M1056.jpg" data-nom="BICICLETAS CANNONDALE" data-des="">CANNONDALE</a></li>
	            <li class="hidden bici-carretera"><a id="giant" class="submar" href="es/catalogo/bicis/bici-carretera/giant/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/giant/60003114.jpg" data-nom="BICICLETAS GIANT" data-des="">GIANT</a></li>
	            <li class="hidden bici-carretera"><a id="scott" class="submar" href="es/catalogo/bicis/bici-carretera/scott/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/scott/241417022.jpg" data-nom="BICICLETAS SCOTT" data-des="">SCOTT</a></li>
	            <li class="hidden bici-carretera"><a id="specialized" class="submar" href="es/catalogo/bicis/bici-carretera/specialized/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/specialized/90617-3354.jpg" data-nom="BICICLETAS SPECIALIZED" data-des="">SPECIALIZED</a></li>
	            <li class="hidden bici-carretera"><a id="trek" class="submar" href="es/catalogo/bicis/bici-carretera/trek/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/trek/534601.jpg" data-nom="BICICLETAS TREK" data-des="">TREK</a></li>
	            <li class="hidden bici-carretera-mujer"><a id="cannondale" class="submar" href="es/catalogo/bicis/bici-carretera-mujer/cannondale/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/cannondale/C12306F1044.jpg" data-nom="BICICLETAS CANNONDALE" data-des="">CANNONDALE</a></li>
	            <li class="hidden bici-carretera-mujer"><a id="liv" class="submar" href="es/catalogo/bicis/bici-carretera-mujer/liv/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/liv/6S003813.jpg" data-nom="BICICLETAS LIV" data-des="">LIV</a></li>
	            <li class="hidden bici-carretera-mujer"><a id="scott" class="submar" href="es/catalogo/bicis/bici-carretera-mujer/scott/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/scott/241489015.jpg" data-nom="BICICLETAS SCOTT" data-des="">SCOTT</a></li>
	            <li class="hidden bici-carretera-mujer"><a id="specialized" class="submar" href="es/catalogo/bicis/bici-carretera-mujer/specialized/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/specialized/97217-3048.jpg" data-nom="BICICLETAS SPECIALIZED" data-des="">SPECIALIZED</a></li>
	            <li class="hidden bici-carretera-mujer"><a id="trek" class="submar" href="es/catalogo/bicis/bici-carretera-mujer/trek/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/trek/519175.jpg" data-nom="BICICLETAS TREK" data-des="">TREK</a></li>
	            <li class="hidden bici-confort"><a id="specialized" class="submar" href="es/catalogo/bicis/bici-confort/specialized/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/specialized/92015-6204.jpg" data-nom="BICICLETAS SPECIALIZED" data-des="">SPECIALIZED</a></li>
	            <li class="hidden bici-cross"><a id="cannondale" class="submar" href="es/catalogo/bicis/bici-cross/cannondale/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/cannondale/C17226M1054.jpg" data-nom="BICICLETAS CANNONDALE" data-des="">CANNONDALE</a></li>
	            <li class="hidden bici-cross"><a id="scott" class="submar" href="es/catalogo/bicis/bici-cross/scott/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/scott/241466023.jpg" data-nom="BICICLETAS SCOTT" data-des="">SCOTT</a></li>
	            <li class="hidden bici-cross"><a id="trek" class="submar" href="es/catalogo/bicis/bici-cross/trek/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/trek/505155.jpg" data-nom="BICICLETAS TREK" data-des="">TREK</a></li>
	            <li class="hidden bici-doble-275"><a id="cannondale" class="submar" href="es/catalogo/bicis/bici-doble-275/cannondale/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/cannondale/C23306M6003.jpg" data-nom="BICICLETAS CANNONDALE" data-des="">CANNONDALE</a></li>
	            <li class="hidden bici-doble-275"><a id="giant" class="submar" href="es/catalogo/bicis/bici-doble-275/giant/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/giant/60033115.jpg" data-nom="BICICLETAS GIANT" data-des="">GIANT</a></li>
	            <li class="hidden bici-doble-275"><a id="specialized" class="submar" href="es/catalogo/bicis/bici-doble-275/specialized/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/specialized/93316-5403.jpg" data-nom="BICICLETAS SPECIALIZED" data-des="">SPECIALIZED</a></li>
	            <li class="hidden bici-doble-29"><a id="cannondale" class="submar" href="es/catalogo/bicis/bici-doble-29/cannondale/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/cannondale/C24206M3002.jpg" data-nom="BICICLETAS CANNONDALE" data-des="">CANNONDALE</a></li>
	            <li class="hidden bici-doble-29"><a id="scott" class="submar" href="es/catalogo/bicis/bici-doble-29/scott/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/scott/249546007.jpg" data-nom="BICICLETAS SCOTT" data-des="">SCOTT</a></li>
	            <li class="hidden bici-doble-29"><a id="specialized" class="submar" href="es/catalogo/bicis/bici-doble-29/specialized/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/specialized/90317-1103.jpg" data-nom="BICICLETAS SPECIALIZED" data-des="">SPECIALIZED</a></li>
	            <li class="hidden bici-doble-29"><a id="trek" class="submar" href="es/catalogo/bicis/bici-doble-29/trek/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/trek/523849.jpg" data-nom="BICICLETAS TREK" data-des="">TREK</a></li>
	            <li class="hidden bici-electrica"><a id="cannondale" class="submar" href="es/catalogo/bicis/bici-electrica/cannondale/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/cannondale/CM20385701.jpg" data-nom="BICICLETAS CANNONDALE" data-des="">CANNONDALE</a></li>
	            <li class="hidden bici-electrica"><a id="giant" class="submar" href="es/catalogo/bicis/bici-electrica/giant/asc/" data-img="http://tomasdomingo.com/images/nores.jpg" data-nom="BICICLETAS GIANT" data-des="">GIANT</a></li>
	            <li class="hidden bici-electrica"><a id="liv" class="submar" href="es/catalogo/bicis/bici-electrica/liv/asc/" data-img="http://tomasdomingo.com/images/nores.jpg" data-nom="BICICLETAS LIV" data-des="">LIV</a></li>
	            <li class="hidden bici-electrica"><a id="quipplan" class="submar" href="es/catalogo/bicis/bici-electrica/quipplan/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/quipplan/BE0085.jpg" data-nom="BICICLETAS QUIPPLAN" data-des="">QUIPPLAN</a></li>
	            <li class="hidden bici-electrica"><a id="scott" class="submar" href="es/catalogo/bicis/bici-electrica/scott/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/scott/241493006.jpg" data-nom="BICICLETAS SCOTT" data-des="">SCOTT</a></li>
	            <li class="hidden bici-electrica"><a id="specialized" class="submar" href="es/catalogo/bicis/bici-electrica/specialized/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/specialized/95216-5104.jpg" data-nom="BICICLETAS SPECIALIZED" data-des="">SPECIALIZED</a></li>
	            <li class="hidden bici-electrica"><a id="trek" class="submar" href="es/catalogo/bicis/bici-electrica/trek/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/trek/536325.jpg" data-nom="BICICLETAS TREK" data-des="">TREK</a></li>
	            <li class="hidden bici-hibrida"><a id="cannondale" class="submar" href="es/catalogo/bicis/bici-hibrida/cannondale/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/cannondale/C31116M1003.jpg" data-nom="BICICLETAS CANNONDALE" data-des="">CANNONDALE</a></li>
	            <li class="hidden bici-hibrida"><a id="giant" class="submar" href="es/catalogo/bicis/bici-hibrida/giant/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/giant/60012224.jpg" data-nom="BICICLETAS GIANT" data-des="">GIANT</a></li>
	            <li class="hidden bici-hibrida"><a id="scott" class="submar" href="es/catalogo/bicis/bici-hibrida/scott/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/scott/241513007.jpg" data-nom="BICICLETAS SCOTT" data-des="">SCOTT</a></li>
	            <li class="hidden bici-hibrida"><a id="specialized" class="submar" href="es/catalogo/bicis/bici-hibrida/specialized/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/specialized/90916-3003.jpg" data-nom="BICICLETAS SPECIALIZED" data-des="">SPECIALIZED</a></li>
	            <li class="hidden bici-hibrida"><a id="trek" class="submar" href="es/catalogo/bicis/bici-hibrida/trek/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/trek/518331.jpg" data-nom="BICICLETAS TREK" data-des="">TREK</a></li>
	            <li class="hidden bici-hibrida-mujer"><a id="trek" class="submar" href="es/catalogo/bicis/bici-hibrida-mujer/trek/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/trek/500720.jpg" data-nom="BICICLETAS TREK" data-des="">TREK</a></li>
	            <li class="hidden bici-infantil"><a id="cannondale" class="submar" href="es/catalogo/bicis/bici-infantil/cannondale/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/cannondale/CM2329OS02.jpg" data-nom="BICICLETAS CANNONDALE" data-des="">CANNONDALE</a></li>
	            <li class="hidden bici-infantil"><a id="conor" class="submar" href="es/catalogo/bicis/bici-infantil/conor/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/conor/670415XALM.jpg" data-nom="BICICLETAS CONOR" data-des="">CONOR</a></li>
	            <li class="hidden bici-infantil"><a id="scott" class="submar" href="es/catalogo/bicis/bici-infantil/scott/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/scott/238433043.jpg" data-nom="BICICLETAS SCOTT" data-des="">SCOTT</a></li>
	            <li class="hidden bici-infantil"><a id="specialized" class="submar" href="es/catalogo/bicis/bici-infantil/specialized/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/specialized/94016-7313.jpg" data-nom="BICICLETAS SPECIALIZED" data-des="">SPECIALIZED</a></li>
	            <li class="hidden bici-paseo"><a id="giant" class="submar" href="es/catalogo/bicis/bici-paseo/giant/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/giant/60020823.jpg" data-nom="BICICLETAS GIANT" data-des="">GIANT</a></li>
	            <li class="hidden bici-paseo"><a id="liv" class="submar" href="es/catalogo/bicis/bici-paseo/liv/asc/" data-img="http://tomasdomingo.com/images/nores.jpg" data-nom="BICICLETAS LIV" data-des="">LIV</a></li>
	            <li class="hidden bici-plegable"><a id="brompton" class="submar" href="es/catalogo/bicis/bici-plegable/brompton/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/brompton/88888891.jpg" data-nom="BICICLETAS BROMPTON" data-des="">BROMPTON</a></li>
	            <li class="hidden bici-plegable"><a id="dahon" class="submar" href="es/catalogo/bicis/bici-plegable/dahon/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/dahon/DAHONKAC083FRO.jpg" data-nom="BICICLETAS DAHON" data-des="">DAHON</a></li>
	            <li class="hidden bici-plegable"><a id="tern" class="submar" href="es/catalogo/bicis/bici-plegable/tern/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/tern/946240.jpg" data-nom="BICICLETAS TERN" data-des="">TERN</a></li>
	            <li class="hidden bici-reserva"><a id="cannondale" class="submar" href="es/catalogo/bicis/bici-reserva/cannondale/asc/" data-img="http://tomasdomingo.com/images/nores.jpg" data-nom="BICICLETAS CANNONDALE" data-des="">CANNONDALE</a></li>
	            <li class="hidden bici-reserva"><a id="giant" class="submar" href="es/catalogo/bicis/bici-reserva/giant/asc/" data-img="http://tomasdomingo.com/images/nores.jpg" data-nom="BICICLETAS GIANT" data-des="">GIANT</a></li>
	            <li class="hidden bici-reserva"><a id="scott" class="submar" href="es/catalogo/bicis/bici-reserva/scott/asc/" data-img="http://tomasdomingo.com/images/nores.jpg" data-nom="BICICLETAS SCOTT" data-des="">SCOTT</a></li>
	            <li class="hidden bici-reserva"><a id="specialized" class="submar" href="es/catalogo/bicis/bici-reserva/specialized/asc/" data-img="http://tomasdomingo.com/images/nores.jpg" data-nom="BICICLETAS SPECIALIZED" data-des="">SPECIALIZED</a></li>
	            <li class="hidden bici-reserva"><a id="tomas-domingo" class="submar" href="es/catalogo/bicis/bici-reserva/tomas-domingo/asc/" data-img="http://tomasdomingo.com/images/nores.jpg" data-nom="BICICLETAS TOMAS DOMINGO" data-des="">TOMAS DOMINGO</a></li>
	            <li class="hidden bici-reserva"><a id="trek" class="submar" href="es/catalogo/bicis/bici-reserva/trek/asc/" data-img="http://tomasdomingo.com/images/nores.jpg" data-nom="BICICLETAS TREK" data-des="">TREK</a></li>
	            <li class="hidden bici-rigida-26"><a id="scott" class="submar" href="es/catalogo/bicis/bici-rigida-26/scott/asc/" data-img="http://tomasdomingo.com/images/nores.jpg" data-nom="BICICLETAS SCOTT" data-des="">SCOTT</a></li>
	            <li class="hidden bici-rigida-26"><a id="specialized" class="submar" href="es/catalogo/bicis/bici-rigida-26/specialized/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/specialized/99515-7703.jpg" data-nom="BICICLETAS SPECIALIZED" data-des="">SPECIALIZED</a></li>
	            <li class="hidden bici-rigida-26"><a id="trek" class="submar" href="es/catalogo/bicis/bici-rigida-26/trek/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/trek/523626.jpg" data-nom="BICICLETAS TREK" data-des="">TREK</a></li>
	            <li class="hidden bici-rigida-27"><a id="cannondale" class="submar" href="es/catalogo/bicis/bici-rigida-27/cannondale/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/cannondale/C25406M1002.jpg" data-nom="BICICLETAS CANNONDALE" data-des="">CANNONDALE</a></li>
	            <li class="hidden bici-rigida-27"><a id="giant" class="submar" href="es/catalogo/bicis/bici-rigida-27/giant/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/giant/62040115.jpg" data-nom="BICICLETAS GIANT" data-des="">GIANT</a></li>
	            <li class="hidden bici-rigida-27"><a id="scott" class="submar" href="es/catalogo/bicis/bici-rigida-27/scott/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/scott/241302008.jpg" data-nom="BICICLETAS SCOTT" data-des="">SCOTT</a></li>
	            <li class="hidden bici-rigida-27"><a id="specialized" class="submar" href="es/catalogo/bicis/bici-rigida-27/specialized/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/specialized/96016-3003.jpg" data-nom="BICICLETAS SPECIALIZED" data-des="">SPECIALIZED</a></li>
	            <li class="hidden bici-rigida-27"><a id="trek" class="submar" href="es/catalogo/bicis/bici-rigida-27/trek/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/trek/519070.jpg" data-nom="BICICLETAS TREK" data-des="">TREK</a></li>
	            <li class="hidden bici-rigida-29"><a id="cannondale" class="submar" href="es/catalogo/bicis/bici-rigida-29/cannondale/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/cannondale/C26337M70XL.jpg" data-nom="BICICLETAS CANNONDALE" data-des="">CANNONDALE</a></li>
	            <li class="hidden bici-rigida-29"><a id="giant" class="submar" href="es/catalogo/bicis/bici-rigida-29/giant/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/giant/64031114.jpg" data-nom="BICICLETAS GIANT" data-des="">GIANT</a></li>
	            <li class="hidden bici-rigida-29"><a id="scott" class="submar" href="es/catalogo/bicis/bici-rigida-29/scott/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/scott/241297009.jpg" data-nom="BICICLETAS SCOTT" data-des="">SCOTT</a></li>
	            <li class="hidden bici-rigida-29"><a id="specialized" class="submar" href="es/catalogo/bicis/bici-rigida-29/specialized/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/specialized/91316-3204.jpg" data-nom="BICICLETAS SPECIALIZED" data-des="">SPECIALIZED</a></li>
	            <li class="hidden bici-rigida-29"><a id="trek" class="submar" href="es/catalogo/bicis/bici-rigida-29/trek/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/trek/536046.jpg" data-nom="BICICLETAS TREK" data-des="">TREK</a></li>
	            <li class="hidden bici-rigida-mujer-27"><a id="liv" class="submar" href="es/catalogo/bicis/bici-rigida-mujer-27/liv/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/liv/60032015.jpg" data-nom="BICICLETAS LIV" data-des="">LIV</a></li>
	            <li class="hidden bici-rigida-mujer-27"><a id="scott" class="submar" href="es/catalogo/bicis/bici-rigida-mujer-27/scott/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/scott/241482005.jpg" data-nom="BICICLETAS SCOTT" data-des="">SCOTT</a></li>
	            <li class="hidden bici-rigida-mujer-27"><a id="specialized" class="submar" href="es/catalogo/bicis/bici-rigida-mujer-27/specialized/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/specialized/95617-5002.jpg" data-nom="BICICLETAS SPECIALIZED" data-des="">SPECIALIZED</a></li>
	            <li class="hidden bici-rigida-mujer-27"><a id="trek" class="submar" href="es/catalogo/bicis/bici-rigida-mujer-27/trek/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/trek/523797.jpg" data-nom="BICICLETAS TREK" data-des="">TREK</a></li>
	            <li class="hidden bici-rigida-mujer-29"><a id="specialized" class="submar" href="es/catalogo/bicis/bici-rigida-mujer-29/specialized/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/specialized/93116-5203.jpg" data-nom="BICICLETAS SPECIALIZED" data-des="">SPECIALIZED</a></li>
	            <li class="hidden bici-rigida-mujer-29"><a id="trek" class="submar" href="es/catalogo/bicis/bici-rigida-mujer-29/trek/asc/" data-img="http://tomasdomingo.com/uploads/imagenes/catalogo/trek/519358.jpg" data-nom="BICICLETAS TREK" data-des="">TREK</a></li>
	        </ul>
	        <div id="submenu_descr" data-img="http://tomasdomingo.com/uploads/imagenes/IMAGOTIPO2.jpg" data-nom="BICIS" data-des="">
	            <div class="submenu_img"><img id="foto_submenu" src="http://www.tomasdomingo.com/http://tomasdomingo.com/uploads/imagenes/IMAGOTIPO2.jpg" width="742"></div>
				<div class="submenu_text">
					<p id="titol_peu_foto" class="peu_gran">BICIS</p>
					<p id="descr_peu_foto" class="peu_petit"></p>
				</div>
	        </div>
	    </div>

	    <div class="clear"><!-- CLEAR --></div>
    <!--Start FORM -->
		<h2>ESTAS SON LAS BICILETAS ENCONTRADAS SEGUN TU BUSQUEDA :</h2><br/>
		<?php

		//realizamos la conexión
		$conexion = mysqli_connect('localhost', 'root','', 'bd_bicis');
		$acentos = mysqli_query($conexion, "SET NAMES 'utf8'");

		//igualaciones de variable
		$anu_titol = $_POST['titulo'];
		$anu_data_anunci = $_POST['data_post'];
		$anu_data_robatori = $_POST['fecha'];
		if ($_POST['ubicacion'] != "P0"){
			$anu_ubicacio_robatori = $_POST['ubicacion'];
		}
		else{
			$anu_ubicacio_robatori = $_POST['otros'];
		}
		$anu_marca = $_POST['marca'];
		$anu_model = $_POST['model'];
		if ($_POST['ecolor'] != "P0"){
			$anu_color = $_POST['ecolor'];
		}
		else{
			$anu_color = $_POST['multicolor'];
		}
		$anu_antiguitat = $_POST['antiguedad'];
		$anu_numero_serie = $_POST['numero'];

		if (!$conexion) {
				echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
				echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
				exit;
		}

		extract($_REQUEST);
		$sentencia = "WHERE";

		$sql = "SELECT * FROM anunci ";
		$anunci = mysqli_query($conexion, $sql);

		if($anu_titol != "" || $anu_data_anunci != "" || $anu_data_robatori != "" || $anu_ubicacio_robatori != "" || $anu_marca != "" || $anu_model != "" || $anu_color != "" || $anu_antiguitat != "" ||  $anu_numero_serie != "" ) {
			//COMPROBAR QUE LOS DATOS DE LA BD NO ESTAN SIN
			$anunci = mysqli_fetch_array($anunci);
			$primera_vuelta = 0
			$lista_campos_anunci =  array( 'anu_titol' => $anu_titol  , 'anu_data_anunci' => $anu_data_anunci , 'anu_data_robatori' => $anu_data_robatori, 'anu_ubicacio_robatori' =>  $anu_ubicacio_robatori ,'anu_marca' => $anu_marca , 'anu_model' => $anu_model  , 'anu_color' => $anu_color , 'anu_antiguitat' => $anu_antiguitat, 'anu_numero_serie' => $anu_numero_serie );
			foreach ( $lista_campos_anunci as $campo => $valor) {
					if ($campo != "" && $primera_vuelta = 0 ){
							$sentencia .= " " .$campo=$anunci['$valor'];
					}
					elseif ($campo != "") {
							$sentencia .= " " ."AND" ." " .$campo=$anunci['$valor'];
					}
					else{
						 echo "<script>console.log( 'No se ha rellenado el campo " .$campo "' );</script>";
					}
					$primera_vuelta .= +1;
			}
			$sql = "SELECT * FROM anunci " ." " .$sentencia ;
		else{
			//COMPROBAR QUE LOS DATOS DE LA BD NO ESTAN SIN
			echo "<script language='javascript'>alert('NO SE HA ENCONTRADO NINGUNA BICI DE ESAS CARACTERISTICAS');</script>";
			echo "<h1 style='text-align:center;'> Todas las Bicis Encontradas </h1> <br/>";
			while($anunci = mysqli_fetch_array($anunci)){
				echo "Título: " . $anunci['anu_titol'] . "<br/>";
				echo "Fecha Anuncio: " . $anunci['anu_data_anunci'] . "<br/>";
				echo "Fecha Robo: " . $anunci['anu_data_robatori'] . "<br/>";
				echo "Ubicacion Robo:" . $anunci['anu_ubicacio_robatori'] . "<br/>";
				echo "Marca: " . $anunci['anu_marca'] . "<br/>";
				echo "Modelo: " . $anunci['anu_model'] . "<br/>";
				echo "Color: " . $anunci['anu_color'] . "<br/>";
				echo "Antiguedad:" . $anunci['anu_antiguitat'] . "<br/>";
				echo "Numero de serie: " . $anunci['anu_numero_serie'] . "<br/>";
				echo "Compensación: " . $anunci['anu_compensacio'] . "<br/>";
				echo "Imagen:<br/>";
				$foto='../IMG/'.$anunci['anu_foto'];
				if (file_exists ($foto)){
					echo "<img src='" . $foto . "' width='300'/><br/><br/>";
				} else {
					echo "<img src='../IMG/0.jpg'  width='300'/><br/><br/>";
				}
		}

		mysqli_close($conexion);

		?>
		<!--FINISH FORM -->
    <div class="clear"><!-- CLEAR --></div>

	<!-- INICIO DEL FOOTER!-->
	</div>
	<div id="footer">
	<div id="logo">
		<img src="http://www.tomasdomingo.com/images/icono_footer.jpg">
		<p>Tomás Domingo es hoy en día un gran referente respecto a tiendas de bicicletas. Tomás Domingo, un corredor amateur de prestigio decidió apostar por su pasión i montar su primera tienda, convirtiéndose en el primer distribuidor Campagnolo de España, destacando como distribuidor especializado en carretera. En nuestros días actuales David Domingo continua haciendo crecer el negocio, adaptándose a las nuevas demandas y valorando como principal premisa el buen trato a sus clientes.</br></br>Hoy en día Tomás Domingo the bike house cuenta con 3 tiendas de gran calidad, y se lanza también a la venta online siguiendo la demanda de una sociedad en constante cambio.</p>
	</div>
	<div id="footer_nav">
		<ul class="first">
			<li class="first"><a href="es/catalogo/bicis/">BICIS</a></li>
	       <li><a href="es/catalogo/bicis/0/brompton/asc/" title="Ver brompton">BROMPTON</a></li>
	       <li><a href="es/catalogo/bicis/0/cannondale/asc/" title="Ver cannondale">CANNONDALE</a></li>
	       <li><a href="es/catalogo/bicis/0/conor/asc/" title="Ver conor">CONOR</a></li>
	       <li><a href="es/catalogo/bicis/0/dahon/asc/" title="Ver dahon">DAHON</a></li>
	       <li><a href="es/catalogo/bicis/0/giant/asc/" title="Ver giant">GIANT</a></li>
	       <li><a href="es/catalogo/bicis/0/liv/asc/" title="Ver liv">LIV</a></li>
	       <li><a href="es/catalogo/bicis/0/quipplan/asc/" title="Ver quipplan">QUIPPLAN</a></li>
	       <li><a href="es/catalogo/bicis/0/scott/asc/" title="Ver scott">SCOTT</a></li>
	       <li><a href="es/catalogo/bicis/0/specialized/asc/" title="Ver specialized">SPECIALIZED</a></li>
	       <li><a href="es/catalogo/bicis/0/tern/asc/" title="Ver tern">TERN</a></li>
	       <li><a href="es/catalogo/bicis/0/tomas-domingo/asc/" title="Ver tomas domingo">TOMAS DOMINGO</a></li>
	       <li><a href="es/catalogo/bicis/0/trek/asc/" title="Ver trek">TREK</a></li>
		</ul>
		<ul >
			<li class="first"><a href="es/catalogo/complementos/">COMPLEMENTOS</a></li>
	       <li><a href="es/catalogo/complementos/alforjas/0/asc/" title="Ver alforjas">ALFORJAS</a></li>
	       <li><a href="es/catalogo/complementos/bateria/0/asc/" title="Ver bateria">BATERIA</a></li>
	       <li><a href="es/catalogo/complementos/bebida-energetica/0/asc/" title="Ver bebida energetica">BEBIDA ENERGETICA</a></li>
	       <li><a href="es/catalogo/complementos/bolsa-porta-bicis/0/asc/" title="Ver bolsa porta bicis">BOLSA PORTA BICIS</a></li>
	       <li><a href="es/catalogo/complementos/bolsa-sillin/0/asc/" title="Ver bolsa sillin">BOLSA SILLIN</a></li>
	       <li><a href="es/catalogo/complementos/camara-digital/0/asc/" title="Ver camara digital">CAMARA DIGITAL</a></li>
	       <li><a href="es/catalogo/complementos/candado-clasico/0/asc/" title="Ver candado clasico">CANDADO CLASICO</a></li>
	       <li><a href="es/catalogo/complementos/casco/0/asc/" title="Ver casco">CASCO</a></li>
	       <li><a href="es/catalogo/complementos/casco-infantil/0/asc/" title="Ver casco infantil">CASCO INFANTIL</a></li>
	       <li><a href="es/catalogo/complementos/componentes-electronicos-grupos/0/asc/" title="Ver componentes electronicos grupos">COMPONENTES ELECTRONICOS GRUPOS</a></li>
	       <li><a href="es/catalogo/complementos/cuentakilometros/0/asc/" title="Ver cuentakilometros">CUENTAKILOMETROS</a></li>
	       <li><a href="es/catalogo/complementos/cuentakilometros-inhalambrico/0/asc/" title="Ver cuentakilometros inhalambrico">CUENTAKILOMETROS INHALAMBRICO</a></li>
	       <li><a href="es/catalogo/complementos/gafas/0/asc/" title="Ver gafas">GAFAS</a></li>
	       <li><a href="es/catalogo/complementos/gps/0/asc/" title="Ver gps">GPS</a></li>
	       <li><a href="es/catalogo/complementos/herramientas/0/asc/" title="Ver herramientas">HERRAMIENTAS</a></li>
	       <li><a href="es/catalogo/complementos/luz-delantera/0/asc/" title="Ver luz delantera">LUZ DELANTERA</a></li>
	       <li><a href="es/catalogo/complementos/luz-trasera/0/asc/" title="Ver luz trasera">LUZ TRASERA</a></li>
	       <li><a href="es/catalogo/complementos/pasamontanas/0/asc/" title="Ver pasamonta">PASAMONTA</a></li>
	       <li><a href="es/catalogo/complementos/potenciometro/0/asc/" title="Ver potenciometro">POTENCIOMETRO</a></li>
	       <li><a href="es/catalogo/complementos/pulsometro/0/asc/" title="Ver pulsometro">PULSOMETRO</a></li>
	       <li><a href="es/catalogo/complementos/rodilleras/0/asc/" title="Ver rodilleras">RODILLERAS</a></li>
	       <li><a href="es/catalogo/complementos/rodillo-de-entreno/0/asc/" title="Ver rodillo de entreno">RODILLO DE ENTRENO</a></li>
	       <li><a href="es/catalogo/complementos/sensor/0/asc/" title="Ver sensor">SENSOR</a></li>
	       <li><a href="es/catalogo/complementos/soporte-bici/0/asc/" title="Ver soporte bici">SOPORTE BICI</a></li>
	       <li><a href="es/catalogo/complementos/soporte-camara/0/asc/" title="Ver soporte camara">SOPORTE CAMARA</a></li>
	       <li><a href="es/catalogo/complementos/soporte-pulsometro/0/asc/" title="Ver soporte pulsometro">SOPORTE PULSOMETRO</a></li>
	       <li><a href="es/catalogo/complementos/soporte-varios/0/asc/" title="Ver soporte varios">SOPORTE VARIOS</a></li>
	       <li><a href="es/catalogo/complementos/transmisor-pulsometro/0/asc/" title="Ver transmisor pulsometro">TRANSMISOR PULSOMETRO</a></li>
	       <li><a href="es/catalogo/complementos/tronchacadenas/0/asc/" title="Ver tronchacadenas">TRONCHACADENAS</a></li>
	       <li><a href="es/catalogo/complementos/varios-electronico/0/asc/" title="Ver varios electronico">VARIOS ELECTRONICO</a></li>
	       <li><a href="es/catalogo/complementos/varios-vestuario/0/asc/" title="Ver varios vestuario">VARIOS VESTUARIO</a></li>
	       <li><a href="es/catalogo/complementos/zapatillas-carretera/0/asc/" title="Ver zapatillas carretera">ZAPATILLAS CARRETERA</a></li>
	       <li><a href="es/catalogo/complementos/zapatillas-mtb/0/asc/" title="Ver zapatillas mtb">ZAPATILLAS MTB</a></li>
	       <li><a href="es/catalogo/complementos/zapatillas-mtb-mujer/0/asc/" title="Ver zapatillas mtb mujer">ZAPATILLAS MTB MUJER</a></li>
		</ul>
		<ul >
			<li class="first"><a href="es/catalogo/partes/">PARTES</a></li>
	       <li><a href="es/catalogo/partes/abrazadera-desviador/0/asc/" title="Ver abrazadera desviador">ABRAZADERA DESVIADOR</a></li>
	       <li><a href="es/catalogo/partes/acoples/0/asc/" title="Ver acoples">ACOPLES</a></li>
	       <li><a href="es/catalogo/partes/bidon/0/asc/" title="Ver bidon">BIDON</a></li>
	       <li><a href="es/catalogo/partes/bolsas-varias/0/asc/" title="Ver bolsas varias">BOLSAS VARIAS</a></li>
	       <li><a href="es/catalogo/partes/cadena/0/asc/" title="Ver cadena">CADENA</a></li>
	       <li><a href="es/catalogo/partes/cassette/0/asc/" title="Ver cassette">CASSETTE</a></li>
	       <li><a href="es/catalogo/partes/cinta-manillar/0/asc/" title="Ver cinta manillar">CINTA MANILLAR</a></li>
	       <li><a href="es/catalogo/partes/cubierta-crta-saro/0/asc/" title="Ver cubierta crta s/aro">CUBIERTA CRTA S/ARO</a></li>
	       <li><a href="es/catalogo/partes/cubierta-mtb-caro/0/asc/" title="Ver cubierta mtb c/aro">CUBIERTA MTB C/ARO</a></li>
	       <li><a href="es/catalogo/partes/cubierta-mtb-saro/0/asc/" title="Ver cubierta mtb s/aro">CUBIERTA MTB S/ARO</a></li>
	       <li><a href="es/catalogo/partes/cubierta-tubeless/0/asc/" title="Ver cubierta tubeless">CUBIERTA TUBELESS</a></li>
	       <li><a href="es/catalogo/partes/hinchador-mini/0/asc/" title="Ver hinchador mini">HINCHADOR MINI</a></li>
	       <li><a href="es/catalogo/partes/manillar-mtb-plano/0/asc/" title="Ver manillar mtb plano">MANILLAR MTB PLANO</a></li>
	       <li><a href="es/catalogo/partes/pedales-automaticos-carretera/0/asc/" title="Ver pedales automaticos carretera">PEDALES AUTOMATICOS CARRETERA</a></li>
	       <li><a href="es/catalogo/partes/pedales-automaticos-mtb/0/asc/" title="Ver pedales automaticos mtb">PEDALES AUTOMATICOS MTB</a></li>
	       <li><a href="es/catalogo/partes/plato-y-bielas-mtb/0/asc/" title="Ver plato y bielas mtb">PLATO Y BIELAS MTB</a></li>
	       <li><a href="es/catalogo/partes/porta-bicis-techo/0/asc/" title="Ver porta-bicis techo">PORTA-BICIS TECHO</a></li>
	       <li><a href="es/catalogo/partes/porta-bicis-trasero/0/asc/" title="Ver porta-bicis trasero">PORTA-BICIS TRASERO</a></li>
	       <li><a href="es/catalogo/partes/portabidones/0/asc/" title="Ver portabidones">PORTABIDONES</a></li>
	       <li><a href="es/catalogo/partes/punos/0/asc/" title="Ver puÃos">PUÃOS</a></li>
	       <li><a href="es/catalogo/partes/recambios-zapatillas/0/asc/" title="Ver recambios zapatillas">RECAMBIOS ZAPATILLAS</a></li>
	       <li><a href="es/catalogo/partes/ruedas-carretera/0/asc/" title="Ver ruedas carretera">RUEDAS CARRETERA</a></li>
	       <li><a href="es/catalogo/partes/ruedas-mtb/0/asc/" title="Ver ruedas mtb">RUEDAS MTB</a></li>
	       <li><a href="es/catalogo/partes/sillin-confort/0/asc/" title="Ver sillin confort">SILLIN CONFORT</a></li>
	       <li><a href="es/catalogo/partes/varios/0/asc/" title="Ver varios">VARIOS</a></li>
	       <li><a href="es/catalogo/partes/varios-accesorios/0/asc/" title="Ver varios accesorios">VARIOS ACCESORIOS</a></li>
	       <li><a href="es/catalogo/partes/varios-porta-bicis/0/asc/" title="Ver varios porta bicis">VARIOS PORTA BICIS</a></li>
	       <li><a href="es/catalogo/partes/varios-taller/0/asc/" title="Ver varios taller">VARIOS TALLER</a></li>
		</ul>
		<ul >
			<li class="first"><a href="es/catalogo/ropa/">ROPA</a></li>
	       <li><a href="es/catalogo/ropa/bermudas/0/asc/" title="Ver bermudas">BERMUDAS</a></li>
	       <li><a href="es/catalogo/ropa/botines/0/asc/" title="Ver botines">BOTINES</a></li>
	       <li><a href="es/catalogo/ropa/calcetines/0/asc/" title="Ver calcetines">CALCETINES</a></li>
	       <li><a href="es/catalogo/ropa/camiseta-interior/0/asc/" title="Ver camiseta interior">CAMISETA INTERIOR</a></li>
	       <li><a href="es/catalogo/ropa/camiseta-manga-corta/0/asc/" title="Ver camiseta manga corta">CAMISETA MANGA CORTA</a></li>
	       <li><a href="es/catalogo/ropa/camiseta-manga-larga/0/asc/" title="Ver camiseta manga larga">CAMISETA MANGA LARGA</a></li>
	       <li><a href="es/catalogo/ropa/chaleco/0/asc/" title="Ver chaleco">CHALECO</a></li>
	       <li><a href="es/catalogo/ropa/chaleco-invierno/0/asc/" title="Ver chaleco invierno">CHALECO INVIERNO</a></li>
	       <li><a href="es/catalogo/ropa/chaleco-invierno-mujer/0/asc/" title="Ver chaleco invierno mujer">CHALECO INVIERNO MUJER</a></li>
	       <li><a href="es/catalogo/ropa/chaleco-mujer/0/asc/" title="Ver chaleco mujer">CHALECO MUJER</a></li>
	       <li><a href="es/catalogo/ropa/chaqueta/0/asc/" title="Ver chaqueta">CHAQUETA</a></li>
	       <li><a href="es/catalogo/ropa/chaqueta-mujer/0/asc/" title="Ver chaqueta mujer">CHAQUETA MUJER</a></li>
	       <li><a href="es/catalogo/ropa/cinta-pelo/0/asc/" title="Ver cinta pelo">CINTA PELO</a></li>
	       <li><a href="es/catalogo/ropa/cubrecuellos/0/asc/" title="Ver cubrecuellos">CUBRECUELLOS</a></li>
	       <li><a href="es/catalogo/ropa/culotes-ctirantes/0/asc/" title="Ver culotes c/tirantes">CULOTES C/TIRANTES</a></li>
	       <li><a href="es/catalogo/ropa/culotes-ctirantes-mujer/0/asc/" title="Ver culotes c/tirantes mujer">CULOTES C/TIRANTES MUJER</a></li>
	       <li><a href="es/catalogo/ropa/culotes-stirantes/0/asc/" title="Ver culotes s/tirantes">CULOTES S/TIRANTES</a></li>
	       <li><a href="es/catalogo/ropa/culotes-stirantes-mujer/0/asc/" title="Ver culotes s/tirantes mujer">CULOTES S/TIRANTES MUJER</a></li>
	       <li><a href="es/catalogo/ropa/gorra/0/asc/" title="Ver gorra">GORRA</a></li>
	       <li><a href="es/catalogo/ropa/gorro/0/asc/" title="Ver gorro">GORRO</a></li>
	       <li><a href="es/catalogo/ropa/guantes-cortos/0/asc/" title="Ver guantes cortos">GUANTES CORTOS</a></li>
	       <li><a href="es/catalogo/ropa/guantes-cortos-mujer/0/asc/" title="Ver guantes cortos mujer">GUANTES CORTOS MUJER</a></li>
	       <li><a href="es/catalogo/ropa/guantes-invierno/0/asc/" title="Ver guantes invierno">GUANTES INVIERNO</a></li>
	       <li><a href="es/catalogo/ropa/guantes-largos/0/asc/" title="Ver guantes largos">GUANTES LARGOS</a></li>
	       <li><a href="es/catalogo/ropa/impermeable/0/asc/" title="Ver impermeable">IMPERMEABLE</a></li>
	       <li><a href="es/catalogo/ropa/impermeable-mujer/0/asc/" title="Ver impermeable mujer">IMPERMEABLE MUJER</a></li>
	       <li><a href="es/catalogo/ropa/maillot/0/asc/" title="Ver maillot">MAILLOT</a></li>
	       <li><a href="es/catalogo/ropa/maillot-manga-larga/0/asc/" title="Ver maillot manga larga">MAILLOT MANGA LARGA</a></li>
	       <li><a href="es/catalogo/ropa/maillot-mujer/0/asc/" title="Ver maillot mujer">MAILLOT MUJER</a></li>
	       <li><a href="es/catalogo/ropa/maillot-sin-mangas/0/asc/" title="Ver maillot sin mangas">MAILLOT SIN MANGAS</a></li>
	       <li><a href="es/catalogo/ropa/maillot-sin-mangas-mujer/0/asc/" title="Ver maillot sin mangas mujer">MAILLOT SIN MANGAS MUJER</a></li>
	       <li><a href="es/catalogo/ropa/manguitos/0/asc/" title="Ver manguitos">MANGUITOS</a></li>
	       <li><a href="es/catalogo/ropa/pantalon-ctirantes-h/0/asc/" title="Ver pantalon c/tirantes h">PANTALON C/TIRANTES H</a></li>
	       <li><a href="es/catalogo/ropa/pantalon-ctirantes-m/0/asc/" title="Ver pantalon c/tirantes m">PANTALON C/TIRANTES M</a></li>
	       <li><a href="es/catalogo/ropa/pantalon-stirantes-h/0/asc/" title="Ver pantalon s/tirantes h">PANTALON S/TIRANTES H</a></li>
	       <li><a href="es/catalogo/ropa/pantalon-stirantes-m/0/asc/" title="Ver pantalon s/tirantes m">PANTALON S/TIRANTES M</a></li>
	       <li><a href="es/catalogo/ropa/paravientos/0/asc/" title="Ver paravientos">PARAVIENTOS</a></li>
	       <li><a href="es/catalogo/ropa/perneras/0/asc/" title="Ver perneras">PERNERAS</a></li>
	       <li><a href="es/catalogo/ropa/pirata-ctirantes-h/0/asc/" title="Ver pirata c/tirantes h">PIRATA C/TIRANTES H</a></li>
	       <li><a href="es/catalogo/ropa/pirata-ctirantes-m/0/asc/" title="Ver pirata c/tirantes m">PIRATA C/TIRANTES M</a></li>
	       <li><a href="es/catalogo/ropa/pirata-stirantes-m/0/asc/" title="Ver pirata s/tirantes m">PIRATA S/TIRANTES M</a></li>
		</ul>
		<ul id="referencies">
			<li><a href="es/corporativas/empresa/" title="Ver empresa">Empresa</a></li>
			<li><a href="es/noticias/" title="Ver noticias">Noticias</a></li>
			<li><a href="es/actividades/" title="Ver actividades">Actividades</a></li>
			<li><a href="es/catalogo/ofertas/bicis/" title="Ver ofertas">Ofertas</a></li>
			<li><a href="es/financiacion/" title="Ver financiación">Financiación</a></li>
	        <!--
			<li><a href="outlet.html">OUTLET</a></li>
			<li><a href="noticias.html">NOTICIAS</a></li>
			<li><a href="actividades.html">ACTIVIDADES</a></li>
			<li><a href="ofertas.html">OFERTAS</a></li>
			<li><a href="financiacion.html">FINANCIACION</a></li>
	        -->
		</ul>
	</div>
	<div class="clear"><!-- CLEAR --></div>
	<div id="footer_pago">
		<ul>
			<li>
				<p>Aceptamos:</p>

			</li>
			<li>
				<p class="tarjetas">Iconos tarjetas de pago</p>
			</li>
			<li class="confianza">

				<p>
					<a href="https://www.confianzaonline.es/empresas/tomasdomingo.htm" target="_blank">
						<img src=" https://www.confianzaonline.es/sello70_30.gif" border="0" alt="Entidad adherida a Confianza Online"/>
					</a>
				</p>
			</li>
		</ul>

	</div>
	</div>

	<div id="copyright">
	<hr>
	<div>
		<ul>
			<li>TOMAS DOMINGO S.L</li>
			<li><a href="download/NOTA_LEGAL.pdf">NOTA LEGAL</a></li>
		</ul>
	</div>
	</div>
	<!-- FIN DEL FOOTER !-->
</body>
</html>
