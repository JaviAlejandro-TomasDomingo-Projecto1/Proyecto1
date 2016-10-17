/******************************************************************************
* web.js
*
* Scritps geenrals per la web
*
*	Juan Carlos M. @ barnacode.com 2011 | http://www.barnacode.com
******************************************************************************/

$(document).ready(function(){
	
	$("img.lazy").lazyload();
	// Politica de cookies
	$.cookieCuttr({
			
		cookieNoMessage: false,
		cookieDisable: '.cookie_law'
		
	});
		
	if (jQuery.cookie('cc_cookie_accept') == "cc_cookie_accept") {
		
		$('.cookie_law').hide();
		
	}
	
	
	/** Enlla�os generals *******************************/
	$('a[rel="external"]').click(function(){
		window.open(''+this.href+'');
		return false;
	});
	
	
	// SIMULAMOS BACK DE NAVEGADOR
    $('a.back').click(function(){
        if(document.referrer.indexOf(window.location.hostname) != -1){
            parent.history.back();
            return false;
        }
    });
	
	// HOVER FAMILIAS
	$('.subfam').hover(function() {
		
		var id = $(this).attr('id');
		
		$('.subfam').removeClass('active');
		$(this).addClass('active');
		
		$('.marcas .submar').parent('li').addClass('hidden');
		$('.marcas .'+id).removeClass('hidden');
		//$('#marcas .'+$(this).attr('id')).removeClass('hidden');
		//console.log('ID:'+id)
		
	});
	
	$('.submenu').mouseleave(function() {
		
		$('.subfam').removeClass('active');
		$('.marcas .submar').parent('li').addClass('hidden');
		
	});
	
	// HOVER SUBMENU
	if($('.submenu').size()>0) {
		
		//alert("Existe submenu.");
		$('.submenu li a').hover(function() {
			
			var itm = $(this);
			var def = $('#submenu_descr');
			
			if(itm.attr('id')=="verTodas") {
				
				//console.log($(this));
				$('#foto_submenu').attr('src', def.attr('data-img'));
				$('#titol_peu_foto').html(def.attr('data-nom'));
				$('#descr_peu_foto').html(def.attr('data-des'));
				
			}else{
				
				$('#foto_submenu').attr('src', itm.attr('data-img'));
				$('#titol_peu_foto').html(itm.attr('data-nom'));
				$('#descr_peu_foto').html(itm.attr('data-des'));				
				
			}
			
		});
		
	}
	
	// SELECT FILTROS
	if($('.selitem').size()>0) {
		
		$('.selitem').change(function() {
			
			window.location=$(this).val();
			
		});
		
	}
	
	// FAQS
	var titol;
	if($('#faqs_contingut').size()>0) {
		
		var obert = false;
		
		$('.faq .tit').hover(function(){
			
			var pre = $(this).html();
			var res = $(this).siblings('.res').html();
			var ind = $(this).parent().index();
			
			var offset = 38;
			//var margeTop = 95+(offset*(ind-1));	
			var margeTop = 95	
						
			
			if(obert) {			
				$('#faqs_desplegables').css({'display':'none'});		
				//alert(titol);
				$(this).text(titol);
				obert = false;
				$(this).removeClass('faq_hover');
				
			}else{		
				titol = $(this).html();
				//alert(titol);
				//$(this).html(''); //Substitueix el text de din sper lo que possem entre les cometes
				$(this).addClass('faq_hover');
				$('#faqs_desplegables').css({'display':'block', 'float':'right', 'margin-top':''+margeTop+'px'});
				obert = true;				
			
			}
	
			
			$('#faqs_desplegables .tit .titol').html(pre);
			$('#faqs_desplegables .res. .text').html(res);
			
		
		});
		
	}
	
	// FOMULARIO DE BUSQUEDA
	$('.search_form').submit(function(e) {
		
		//e.preventDefault();
		
		var action = $(this).attr('action') + '' + $('#q').val() + '/'
		$(this).attr('action', action);
		
		
	});
	
	/* LISTADO NOTICIAS CENTRAMOS IMAGENES	*/
	if($('.galeria_item_noticia').size()>0) {
		
		$(window).resize(function() {
			// Portada
			$(".galeria_item_noticia .portada > img").each(function() {
				var cHeight = $(this).parent(".portada").height(),
					cWidth = $(this).parent(".portada").width(),
					iHeight = $(this).height(),
					iWidth = $(this).width();
					
				$(this).css({
					top: 0.5*(cHeight - iHeight),
					left: 0.5*(cWidth - iWidth)
				});
			});
			// Miniaturas
			$(".galeria_item_noticia .thumbnail > img").each(function() {
				var cHeight = $(this).parent(".thumbnail").height(),
					cWidth = $(this).parent(".thumbnail").width(),
					iHeight = $(this).height(),
					iWidth = $(this).width();
					
				$(this).css({
					top: 0.5*(cHeight - iHeight),
					left: 0.5*(cWidth - iWidth)
				});
			});			
		}).resize();  // Fires resize event when document is first loaded	
		
		/*	CAMBIAMOS EN HOVER	*/
		$('li.thumbnail img').hover(function(){
			
			var id = $(this).attr('data-id');
			var img = $(this).attr('src');
			var target = '#'+id;
			
			$('#'+id).hide().attr({'src':img, 'width':'100%'}).show();
			
		});
	
	}
	
	/* MOSTRMAOS QUICK CART	*/
	
	$('#carrito li.cart_noempty,#finestra_carrito').hover(function() {
		
		$('#carrito_container').show();
		
	}, function() {
		
		$('#carrito_container').hide();
		
	});	
	
	/*	A�ADIMOS PRODUCTO A LA CESTA	*/
	$('.add_to_cart').click(function(e) {
		
		e.preventDefault();
		
		var url = $(this).attr('data-url');
		var form = $('#addCart').serialize();
		
		$.post('../php/ajax/actions.php', form, function(data){
		
			if(data.res==1){
				
				window.location=url;
				
			}else{
			
				alert("Ha ocurrido un error al a�adir su producto a la cesta.");	
				
			}
		
		}, 'json');
		
		
	});
	
	/*	A�ADIMOS PRODUCTO A LA CESTA	*/
	$('.add_to_cart2').click(function(e) {
		
		e.preventDefault();
		
		var url = $(this).attr('data-url');
		var form = $('#addCart2').serialize();
		
		$.post('../php/ajax/actions.php', form, function(data){
		
			if(data.res==1){
				
				window.location=url;
				
			}else{
			
				alert("Ha ocurrido un error al a�adir su producto a la cesta.");	
				
			}
		
		}, 'json');
		
		
	});	
	
	/*	ELIMINAMOS PRODUCTO DEL QUICK-CART	*/
	$('.del_item_cart').click(function(e) {
		
		e.preventDefault();
		
		var form = {};
		
		form.acc = 'delete_item';
		form.cod = $(this).attr('data-cod');
		
		$.post('../php/ajax/actions.php', form, function(data){
		
			if(data.res==1){
				
				$('#item_'+data.cod).remove();
				
				if(data.empty==1) {
					
					$('.cart_noempty').addClass('hidden');
					$('.cart_empty').removeClass('hidden');
					$('#carrito_container').hide();
					
				}
				
				//alert(data.msg);
				
			}else{
			
				alert("Ha ocurrido un error al eliminar su producto de la cesta.");	
				
			}
		
		}, 'json');
		
		
	});	
	
	/*	ELIMINAMOS PRODUCTO DE LA CESTA	*/
	$('.del_item_cart_cesta').click(function(e) {
		
		e.preventDefault();
		
		var url = $(this).attr('data-url');
		var form = {};
		
		form.acc = 'delete_item';
		form.cod = $(this).attr('data-cod');
		
		$.post('../php/ajax/actions.php', form, function(data){
		
			if(data.res==1){
				
				window.location=url;
				
				//alert(data.msg);
				
			}else{
			
				alert("Ha ocurrido un error al eliminar su producto de la cesta.");	
				
			}
		
		}, 'json');
		
		
	});		
	
	// ACTUALIZAMOS CANTIDAD DE UN PRODUCTO EN LA CESTA
	$('.update_cart_item_qty').change(function(e) {
	
		e.preventDefault();
		
		var url = $(this).attr('data-url');
		var form = {};
		
		form.acc = 'update_item';
		form.cod = $(this).attr('data-cod');
		form.qty = $(this).val();//$(this).children(':selected').val();
		
		$.post('../php/ajax/actions.php', form, function(data){
		
			if(data.res==1){
				
				window.location=url;
				
			}else{
			
				alert(data.msg);	
				
			}
		
		}, 'json');	
	
	});
	
	/*	A�ADIMOS PRODUCTO A LA CESTA	*/
	$('#addCartE').submit(function(e) {
		
		e.preventDefault();
		
		var url = $('#addCartE input[type="submit"]').attr('data-url');
		var form = $('#addCartE').serialize();
		
		$.post('../php/ajax/actions.php', form, function(data){
		
			if(data.res==1){
				
				window.location=url;
				
			}else{
			
				alert("Ha ocurrido un error al a�adir su producto a la cesta.");	
				
			}
		
		}, 'json');
		
		
	});	
	
	// A�adimos inscripcion gratuita
	$('#addEvent').submit(function(e) {
		
		e.preventDefault();
		
		//$('#addCart #acc').val('add_to_inscription');
		
		//var url = $(this).attr('data-url');
		var form = $('#addEvent').serialize();
		
		$.post('../php/ajax/actions.php', form, function(data){
		
			if(data.res==1){
				
				//window.location=url;
				$('#datos_factura_actividad form').hide();
				$('#datos_factura_actividad .msg').text(data.msg).removeClass('hidden');
				
			}else{
			
				alert("Ha ocurrido un error al realizar la inscripci�n a este evento.");	
				
			}
		
		}, 'json');
		
		
	});	
	
	// A�adimos suscriptor newsletters
	$('#add_newsletters').submit(function(e) {
	
		e.preventDefault();
		
		var msg = $(this).attr('data-msg');
		var form = $(this).serialize();
		var nom = $('#nom').val();
        var ace = $('#ace');
		var mai = isMail($('#mai').val());
		
		$('#form_conatainer .message').addClass('hidden');
		
		//console.log(nom+' | '+mai);
		
		if(nom!='' && mai && ace.is(':checked')){
		
			//console.log("Enviamos formulario...");
			$.post('../php/ajax/actions.php', form, function(data){
				
				if(data.res==1) {
					
					//$('#form_conatainer #add_newsletters').hide();
					$('#form_conatainer .message').html('<p>'+data.msg+'</p>').removeClass('hidden');
					$('#nom').val('');
					$('#mai').val('')
					//$('.ui-dialog-buttonpane').hide();
					
				}else{

                    alert(data.msg);
					
				}
				
			}, 'json');
		
		}else{
			

            if(!ace.is(':checked')){

                alert('¿Debe aceptar la política de privacidad!');

            }else {

                alert(msg);

            }
			
		}
	
	});
	
	// A�adimos suscriptor newsletters
	$('#info_products').submit(function(e) {
	
		e.preventDefault();
		
		var msg = $(this).attr('data-msg');
		var form = $(this).serialize();
		var nom = $('#nom').val();
		var msg1 = $('#msg').val();
		var mai = isMail($('#mai').val());
		
		$('#form_conatainer .message').addClass('hidden');
		
		//console.log(nom+' | '+mai);
		
		if(nom!='' && mai && msg1!=''){
		
			//console.log("Enviamos formulario...");
			$.post('../php/ajax/actions.php', form, function(data){
				
				if(data.res==1) {
					
					//$('#form_conatainer #add_newsletters').hide();
					$('#form_conatainer .message').html('<p>'+data.msg+'</p>').removeClass('hidden');
					$('#nom').val('');
					$('#mai').val('');
					$( "#dialog" ).dialog('close');
					//$('.ui-dialog-buttonpane').hide();
					
				}else{
					
					alert(data.msg);
					
				}
				
			}, 'json');
		
		}else{
			
			alert(msg);
			
		}
	
	});
	
	// PROCESAMOS BAJA NEWSLETTERS
	$('#baja_newsletter').submit(function(e) {
		
		e.preventDefault();
		//console.log($(this).serialize());
		$.post('../php/ajax/actions.php', $(this).serialize(), function(data) {
			
			if(data){
				
				$('.datos_form #baja_newsletter').hide();
				$('.datos_form .msg').addClass(data.clase).append('<p>'+data.msg+'</p>').removeClass('hidden');
				
			}
			
		}, 'json');
		
	});	
	
	$('#datos_comprador #md').click(function() {
		
		if($(this).is(':checked')){
			
			$('#de_nom').val($('#df_nom').val());
			$('#de_ape').val($('#df_ape').val());
			$('#de_dir').val($('#df_dir').val());
			$('#de_cp').val($('#df_cp').val());
			$('#de_pro').val($('#df_pro').val());
			$('#de_pob').val($('#df_pob').val());
			$('#de_pai').val($('#df_pai').val());
			$('#de_tel').val($('#df_tel').val());
			$('#de_mai').val($('#df_mai').val());			
			
		}else{
			
			$('#de_nom').val('');
			$('#de_ape').val('');
			$('#de_dir').val('');
			$('#de_cp').val('');
			$('#de_pro').val('');
			$('#de_pob').val('');
			$('#de_pai').val('');
			$('#de_tel').val('');
			$('#de_mai').val('');
			
		}
		
	});
	
	$('#datos_comprador .tier').click(function(){
	
		if($(this).val()==0){
			
			$('#denv input, #denv select').attr('required', true);
			
			$('#info_tie h3').html('');
			$('#info_tie .dirt').html('');
			$('#info_tie .telt').html('');
			$('#info_tie .mapt').attr('src','');
			$('#info_tie a').attr('href','');
			
			$('#info_tie, .tir').hide();
			$('#tir').attr('required', false).val('');
			$('#denv').show();	
			
		}else{
			
			$('#denv input, #denv select').attr('required', false);
			$('#de_nom').val('');
			$('#de_ape').val('');
			$('#de_dir').val('');
			$('#de_cp').val('');
			$('#de_pro').val('');
			$('#de_pob').val('');
			$('#de_pai').val('');
			$('#de_tel').val('');
			$('#de_mai').val('');
			$('#denv').hide();
			$('.tir').show();
			$('#tir').attr('required', true);	
			$('#md').attr('checked', false);	
			
		}
	
	});
	
	$('#datos_comprador #tir').change(function(){
		
		var info=$('#tir').children('option:selected').data('info');
		
		if(info!=''){
			
			$('#info_tie h3').html("Recoger en: "+info.nom);
			$('#info_tie .dirt').html(info.dir);
			$('#info_tie .telt').html(info.tel);
			$('#info_tie .mapt').attr('src',info.map);
			$('#info_tie a').attr('href',info.lmap);
			
			$('#info_tie').show();
			
		}else{
			
			$('#info_tie h3').html('');
			$('#info_tie .dirt').html('');
			$('#info_tie .telt').html('');
			$('#info_tie .mapt').attr('src','');
			$('#info_tie a').attr('href','');
			
			$('#info_tie').hide();
			
		}
		
	});
	
});