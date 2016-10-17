/******************************************************************************
* utils.js
*
* Funcions varies genèriques utilitzables a qualsevol lloc i independents de
*	la base de dades o d'una aplicació en concret.
*
*	Juan Carlos M. @ barnacode.com 2011 | http://www.barnacode.com
******************************************************************************/
// Funcion render footer admin

function getFooterAdmin() {
	
	var wrapper = $('#wrapper').height();
	wrapper = wrapper-90;
	var ventana = $(window).height();
	//alert(wrapper+' - '+ventana);
	if (wrapper<ventana) {
		//alert('El documento es mayor que wrapper');
		//$('#wrapper').fadeIn('fast');
		$('#wrapper-footer').css('position', 'fixed').fadeIn('slow');
	}else if (wrapper>ventana) {
		//alert('El wrapper es mayor que el documento');
		//$('#wrapper').fadeIn('fast');
		$('#wrapper-footer').css('position', 'absolute').fadeIn('slow');
	}
	
}

// Funciones para el menubar
/*
var original = $('.menu a.active:first').attr('id');
var last = $('.menu li ul li a.active').attr('id');
//alert(last);

$('.menu li').hover(function() {
	var idm = $(this).attr('id');
	$('.menu li > a').not('.menu li a'+idm).removeClass('active');
	//$('#'+last).addClass('active');
});
$('#menubar ul ul').hover(function(){
	var  id = $(this).attr('class');
	var idp = $(this).attr('id');
	//alert(id);
	//$('#menubar ul li a[id!='+id+']').removeClass('active');
	$('#'+id+'').addClass('active');
	//$('#'+ido+'').removeClass('active');
});

$('#menubar ul').mouseleave(function() {
	//alert('fuera!!!');
	$('.menu li > a').not('.menu li a '+original).removeClass('active');
	$('#'+original).closest('a').addClass('active');
	$('#'+last).addClass('active');
});
*/
$('#input .placeholder').click(function() {
	$('#input input[type="text"]').focus();
	$(this).fadeOut('fast');
});
$('#input input').focus(function() {
	$('#input').addClass('select').fadeTo('fast', 1);
	$('#input .placeholder').fadeOut('fast');
});
$('#input input').blur(function() {
	$('#input').fadeTo('fast', 0.3).removeClass('select');
	$('#input .placeholder').fadeIn('fast');
});


// Foin funciones mail

function isMail(txt){ 
	var filter  = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	
	return filter.test(txt);
}

function isURL(txt){ 
	var filter  = /^http|https/;
	
	return filter.test(txt);
}

function isDate(txt){
	var filter = /^((((0?[1-9]|[12]\d|3[01])[\.\-\/](0?[13578]|1[02])[\.\-\/]((1[6-9]|[2-9]\d)?\d{2}))|((0?[1-9]|[12]\d|30)[\.\-\/](0?[13456789]|1[012])[\.\-\/]((1[6-9]|[2-9]\d)?\d{2}))|((0?[1-9]|1\d|2[0-8])[\.\-\/]0?2[\.\-\/]((1[6-9]|[2-9]\d)?\d{2}))|(29[\.\-\/]0?2[\.\-\/]((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)|00)))|(((0[1-9]|[12]\d|3[01])(0[13578]|1[02])((1[6-9]|[2-9]\d)?\d{2}))|((0[1-9]|[12]\d|30)(0[13456789]|1[012])((1[6-9]|[2-9]\d)?\d{2}))|((0[1-9]|1\d|2[0-8])02((1[6-9]|[2-9]\d)?\d{2}))|(2902((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)|00))))$/;

	return filter.test(txt);
}

function right(str, n){
	/***
	IN: str - the string we are RIGHTing
			n - the number of characters we want to return
	
	RETVAL: n characters from the right side of the string
	***/
	
	if(n<=0) return ""; // Invalid bound, return blank string
	else if(n>String(str).length) return str; // Invalid bound, return entire string
	else { // Valid bound, return appropriate substring
		 var iLen=String(str).length;
		 return String(str).substring(iLen, iLen-n);
	}
}

function mid(str, start, len){
	/***
	IN: str - the string we are LEFTing
			start - our string's starting position (0 based!!)
			len - how many characters from start we want to get
	
	RETVAL: The substring from start to start+len
	***/
	// Make sure start and len are within proper bounds
	if(start<0 || len<0) return "";

	var iEnd, iLen=String(str).length;
	
	if(start+len>iLen) iEnd=iLen;
	else iEnd=start+len;

	return String(str).substring(start,iEnd);
}

var myWin; 

function popup(url, id, w, h, scroll){
	if(!myWin || myWin.closed){
		myWin = window.open(''+url+'',''+id+'','width='+w+',height='+h+',toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars='+scroll+',resizable=yes,top='+((screen.height/2)-(200))+',left='+((screen.width/2) - (150)) + '');
	}else{
		myWin.focus();
	};
	
	void(0); 
}

function popupNoToolsFull(url, nom, scroll){
	settings='height='+screen.availHeight+',width='+screen.availWidth+',top=0,left=0,scrollbars='+scroll+',resizable,toolbar=no,status=no,resizable=yes';
	win=window.open(url, nom, settings);
}

// Hacemos cuenta regresiva y redirigimos a destino
function getCountdownRedirect(id, segs, url) {
	segs=segs+0.5;
	shortly = new Date(); 
    shortly.setSeconds(shortly.getSeconds() + segs);							
	$(id).countdown({until: shortly, format: 's', layout: '{sn}', expiryUrl: url});
}

/**********************************************
*	Función para mostrar mensajes tipo Growl
*	msg = mensaje a mostrar
*	tip = tipo de mensaje ok, ok, null
**********************************************/
function setGrowl(msg,tip) {
	if (tip=='ok') { 
			$.bGrowl({message: msg,icon:'ui-icon-circle-check',timeout:5,className: 'bGrowlSuccess'});
	}else if (tip=='ko') {
		$.bGrowl({message: msg,icon:'ui-icon-alert',timeout:5,className: 'bGrowlFail'});
	}else{
		$.bGrowl({message: msg,timeout:5});
	}
}
// Valida un campo si es obligatorio
function valReq(id) {
	var filter  =  /\S/;
	if (!filter.test($(id).val())) {
		$(id).fadeTo("fast", 0.1, function() { 
			$(this).removeClass("tb").addClass("tberror");
			$(this).fadeTo("slow", 1);
		});
		return false;
	}else{
		$(id).removeClass("tberror").addClass("tb");
		return true;
	}
}
// Valida un campo si es obligatorio y además una dirección de correo valida
function valMail(id) {
	var filter  = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if (!filter.test($(id).val())) {
		$(id).fadeTo("fast", 0.1, function() { 
			$(this).removeClass("tb").addClass("tberror");
			$(this).fadeTo("slow", 1);
		});
		return false;
	}else{
		$(id).removeClass("tberror").addClass("tb");
		return true;				
	}
}
// Resetea un formulario --> $('form').clearForm()
$.fn.clearForm = function() {
	return this.each(function() {
	  var type = this.type, tag = this.tagName.toLowerCase();
	  if (tag == 'form')
		return $(':input',this).clearForm();
	  if (type == 'text' || type == 'password' || tag == 'textarea' || type == 'email')
		this.value = '';
	  else if (type == 'checkbox' || type == 'radio')
		this.checked = false;
	  else if (tag == 'select')
		this.selectedIndex = -1;
	});
};

/*	Hack placeholder	*/
jQuery(function() {
	if(!Modernizr.input.placeholder){
		$("input").each(
			function(){
				if($(this).val()=="" && $(this).attr("placeholder")!=""){
					$(this).val($(this).attr("placeholder"));
					$(this).focus(function(){
						if($(this).val()==$(this).attr("placeholder")) $(this).val("");
					});
					$(this).blur(function(){
						if($(this).val()=="") $(this).val($(this).attr("placeholder"));
					});
				}
		});
	}
});

// Codiffica cadena en HTML
function htmlEncode(value){
  return $('<div/>').text(value).html();
}

// Decodifica cadena en desde HTML
function htmlDecode(value){
  return $('<div/>').html(value).text();
}


// Funcion para comprobar que existe un selector
jQuery.fn.exists = function(){return this.length>0;}

// Funcion del modal nyroModal --> class="nyroModal"
/*
$(function() {
  $.nyroModalSettings({
    processHandler: function(settings) {
      var from = settings.from;
      if (from && from.href && from.href.indexOf('http://www.youtube.com/watch?v=') == 0) {
        $.nyroModalSettings({
		  addImageDivTitle: true,	
		  type: 'swf',
          height: 385,
          width: 640,
          url: from.href.replace(new RegExp("watch\\?v=", "i"), 'v/')
        });
      }
    }
  });
});
*/

 /*
 * TipTip
 * Copyright 2010 Drew Wilson
 * www.drewwilson.com
 * code.drewwilson.com/entry/tiptip-jquery-plugin
 *
 * Version 1.3   -   Updated: Mar. 23, 2010
 *
 * This Plug-In will create a custom tooltip to replace the default
 * browser tooltip. It is extremely lightweight and very smart in
 * that it detects the edges of the browser window and will make sure
 * the tooltip stays within the current window size. As a result the
 * tooltip will adjust itself to be displayed above, below, to the left 
 * or to the right depending on what is necessary to stay within the
 * browser window. It is completely customizable as well via CSS.
 *
 * This TipTip jQuery plug-in is dual licensed under the MIT and GPL licenses:
 *   http://www.opensource.org/licenses/mit-license.php
 *   http://www.gnu.org/licenses/gpl.html
 */


	$.fn.tipTip = function(options) {
		var defaults = { 
			activation: "hover",
			keepAlive: false,
			maxWidth: "200px",
			edgeOffset: 3,
			defaultPosition: "top",
			delay: 400,
			fadeIn: 200,
			fadeOut: 200,
			attribute: "title",
			content: false, // HTML or String to fill TipTIp with
		  	enter: function(){},
		  	exit: function(){}
	  	};
	 	var opts = $.extend(defaults, options);
	 	
	 	// Setup tip tip elements and render them to the DOM
	 	if($("#tiptip_holder").length <= 0){
	 		var tiptip_holder = $('<div id="tiptip_holder" style="max-width:'+ opts.maxWidth +';"></div>');
			var tiptip_content = $('<div id="tiptip_content"></div>');
			var tiptip_arrow = $('<div id="tiptip_arrow"></div>');
			$("body").append(tiptip_holder.html(tiptip_content).prepend(tiptip_arrow.html('<div id="tiptip_arrow_inner"></div>')));
		} else {
			var tiptip_holder = $("#tiptip_holder");
			var tiptip_content = $("#tiptip_content");
			var tiptip_arrow = $("#tiptip_arrow");
		}
		
		return this.each(function(){
			var org_elem = $(this);
			if(opts.content){
				var org_title = opts.content;
			} else {
				var org_title = org_elem.attr(opts.attribute);
			}
			if(org_title != ""){
				if(!opts.content){
					org_elem.removeAttr(opts.attribute); //remove original Attribute
				}
				var timeout = false;
				
				if(opts.activation == "hover"){
					org_elem.hover(function(){
						active_tiptip();
					}, function(){
						if(!opts.keepAlive){
							deactive_tiptip();
						}
					});
					if(opts.keepAlive){
						tiptip_holder.hover(function(){}, function(){
							deactive_tiptip();
						});
					}
				} else if(opts.activation == "focus"){
					org_elem.focus(function(){
						active_tiptip();
					}).blur(function(){
						deactive_tiptip();
					});
				} else if(opts.activation == "click"){
					org_elem.click(function(){
						active_tiptip();
						return false;
					}).hover(function(){},function(){
						if(!opts.keepAlive){
							deactive_tiptip();
						}
					});
					if(opts.keepAlive){
						tiptip_holder.hover(function(){}, function(){
							deactive_tiptip();
						});
					}
				}
			
				function active_tiptip(){
					opts.enter.call(this);
					tiptip_content.html(org_title);
					tiptip_holder.hide().removeAttr("class").css("margin","0");
					tiptip_arrow.removeAttr("style");
					
					var top = parseInt(org_elem.offset()['top']);
					var left = parseInt(org_elem.offset()['left']);
					var org_width = parseInt(org_elem.outerWidth());
					var org_height = parseInt(org_elem.outerHeight());
					var tip_w = tiptip_holder.outerWidth();
					var tip_h = tiptip_holder.outerHeight();
					var w_compare = Math.round((org_width - tip_w) / 2);
					var h_compare = Math.round((org_height - tip_h) / 2);
					var marg_left = Math.round(left + w_compare);
					var marg_top = Math.round(top + org_height + opts.edgeOffset);
					var t_class = "";
					var arrow_top = "";
					var arrow_left = Math.round(tip_w - 12) / 2;

                    if(opts.defaultPosition == "bottom"){
                    	t_class = "_bottom";
                   	} else if(opts.defaultPosition == "top"){ 
                   		t_class = "_top";
                   	} else if(opts.defaultPosition == "left"){
                   		t_class = "_left";
                   	} else if(opts.defaultPosition == "right"){
                   		t_class = "_right";
                   	}
					
					var right_compare = (w_compare + left) < parseInt($(window).scrollLeft());
					var left_compare = (tip_w + left) > parseInt($(window).width());
					
					if((right_compare && w_compare < 0) || (t_class == "_right" && !left_compare) || (t_class == "_left" && left < (tip_w + opts.edgeOffset + 5))){
						t_class = "_right";
						arrow_top = Math.round(tip_h - 13) / 2;
						arrow_left = -12;
						marg_left = Math.round(left + org_width + opts.edgeOffset);
						marg_top = Math.round(top + h_compare);
					} else if((left_compare && w_compare < 0) || (t_class == "_left" && !right_compare)){
						t_class = "_left";
						arrow_top = Math.round(tip_h - 13) / 2;
						arrow_left =  Math.round(tip_w);
						marg_left = Math.round(left - (tip_w + opts.edgeOffset + 5));
						marg_top = Math.round(top + h_compare);
					}

					var top_compare = (top + org_height + opts.edgeOffset + tip_h + 8) > parseInt($(window).height() + $(window).scrollTop());
					var bottom_compare = ((top + org_height) - (opts.edgeOffset + tip_h + 8)) < 0;
					
					if(top_compare || (t_class == "_bottom" && top_compare) || (t_class == "_top" && !bottom_compare)){
						if(t_class == "_top" || t_class == "_bottom"){
							t_class = "_top";
						} else {
							t_class = t_class+"_top";
						}
						arrow_top = tip_h;
						marg_top = Math.round(top - (tip_h + 5 + opts.edgeOffset));
					} else if(bottom_compare | (t_class == "_top" && bottom_compare) || (t_class == "_bottom" && !top_compare)){
						if(t_class == "_top" || t_class == "_bottom"){
							t_class = "_bottom";
						} else {
							t_class = t_class+"_bottom";
						}
						arrow_top = -12;						
						marg_top = Math.round(top + org_height + opts.edgeOffset);
					}
				
					if(t_class == "_right_top" || t_class == "_left_top"){
						marg_top = marg_top + 5;
					} else if(t_class == "_right_bottom" || t_class == "_left_bottom"){		
						marg_top = marg_top - 5;
					}
					if(t_class == "_left_top" || t_class == "_left_bottom"){	
						marg_left = marg_left + 5;
					}
					tiptip_arrow.css({"margin-left": arrow_left+"px", "margin-top": arrow_top+"px"});
					tiptip_holder.css({"margin-left": marg_left+"px", "margin-top": marg_top+"px"}).attr("class","tip"+t_class);
					
					if (timeout){ clearTimeout(timeout); }
					timeout = setTimeout(function(){ tiptip_holder.stop(true,true).fadeIn(opts.fadeIn); }, opts.delay);	
				}
				
				function deactive_tiptip(){
					opts.exit.call(this);
					if (timeout){ clearTimeout(timeout); }
					tiptip_holder.fadeOut(opts.fadeOut);
				}
			}				
		});
	}
	// Función que muestra la imagen antes de subirla
	function readURL(input) {
		if (input.files && input.files[0]) {
			var id = $(input).attr('id');
			var reader = new FileReader();
	
			reader.onload = function (e) {
				$('#preview_'+id)
					.attr('src', e.target.result)
					.show()
					/*.width(430)
					.height(465)*/;
			};
			
			$('#preview_'+id).imgAreaSelect({handles: true, onSelectChange: preview });		
	
			reader.readAsDataURL(input.files[0]);
		}
	}
	
function preview(img, selection) {
    if (!selection.width || !selection.height)
        return;
    
    var scaleX = 100 / selection.width;
    var scaleY = 100 / selection.height;

    $('#preview img').css({
        width: Math.round(scaleX * 300),
        height: Math.round(scaleY * 300),
        marginLeft: -Math.round(scaleX * selection.x1),
        marginTop: -Math.round(scaleY * selection.y1)
    });

    $('#x1').val(selection.x1);
    $('#y1').val(selection.y1);
    $('#x2').val(selection.x2);
    $('#y2').val(selection.y2);
    /*
	$('#w').val(selection.width);
    $('#h').val(selection.height); 
	*/   
}
/***************************************************************************************************************************
*	FUNCIONES BASE64_ENCODE / BASE64_DECODE
***************************************************************************************************************************/
/**
*
*  Base64 encode / decode
*  http://www.webtoolkit.info/
*
**/
 
var Base64 = {
 
	// private property
	_keyStr : "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",
 
	// public method for encoding
	encode : function (input) {
		var output = "";
		var chr1, chr2, chr3, enc1, enc2, enc3, enc4;
		var i = 0;
 
		input = Base64._utf8_encode(input);
 
		while (i < input.length) {
 
			chr1 = input.charCodeAt(i++);
			chr2 = input.charCodeAt(i++);
			chr3 = input.charCodeAt(i++);
 
			enc1 = chr1 >> 2;
			enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
			enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
			enc4 = chr3 & 63;
 
			if (isNaN(chr2)) {
				enc3 = enc4 = 64;
			} else if (isNaN(chr3)) {
				enc4 = 64;
			}
 
			output = output +
			this._keyStr.charAt(enc1) + this._keyStr.charAt(enc2) +
			this._keyStr.charAt(enc3) + this._keyStr.charAt(enc4);
 
		}
 
		return output;
	},
 
	// public method for decoding
	decode : function (input) {
		var output = "";
		var chr1, chr2, chr3;
		var enc1, enc2, enc3, enc4;
		var i = 0;
 
		input = input.replace(/[^A-Za-z0-9\+\/\=]/g, "");
 
		while (i < input.length) {
 
			enc1 = this._keyStr.indexOf(input.charAt(i++));
			enc2 = this._keyStr.indexOf(input.charAt(i++));
			enc3 = this._keyStr.indexOf(input.charAt(i++));
			enc4 = this._keyStr.indexOf(input.charAt(i++));
 
			chr1 = (enc1 << 2) | (enc2 >> 4);
			chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);
			chr3 = ((enc3 & 3) << 6) | enc4;
 
			output = output + String.fromCharCode(chr1);
 
			if (enc3 != 64) {
				output = output + String.fromCharCode(chr2);
			}
			if (enc4 != 64) {
				output = output + String.fromCharCode(chr3);
			}
 
		}
 
		output = Base64._utf8_decode(output);
 
		return output;
 
	},
 
	// private method for UTF-8 encoding
	_utf8_encode : function (string) {
		string = string.replace(/\r\n/g,"\n");
		var utftext = "";
 
		for (var n = 0; n < string.length; n++) {
 
			var c = string.charCodeAt(n);
 
			if (c < 128) {
				utftext += String.fromCharCode(c);
			}
			else if((c > 127) && (c < 2048)) {
				utftext += String.fromCharCode((c >> 6) | 192);
				utftext += String.fromCharCode((c & 63) | 128);
			}
			else {
				utftext += String.fromCharCode((c >> 12) | 224);
				utftext += String.fromCharCode(((c >> 6) & 63) | 128);
				utftext += String.fromCharCode((c & 63) | 128);
			}
 
		}
 
		return utftext;
	},
 
	// private method for UTF-8 decoding
	_utf8_decode : function (utftext) {
		var string = "";
		var i = 0;
		var c = c1 = c2 = 0;
 
		while ( i < utftext.length ) {
 
			c = utftext.charCodeAt(i);
 
			if (c < 128) {
				string += String.fromCharCode(c);
				i++;
			}
			else if((c > 191) && (c < 224)) {
				c2 = utftext.charCodeAt(i+1);
				string += String.fromCharCode(((c & 31) << 6) | (c2 & 63));
				i += 2;
			}
			else {
				c2 = utftext.charCodeAt(i+1);
				c3 = utftext.charCodeAt(i+2);
				string += String.fromCharCode(((c & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63));
				i += 3;
			}
 
		}
 
		return string;
	}
 
}
	

/***************************************************************************************************************************
*	FUNCIONES PLUPLOAD
***************************************************************************************************************************/

function upload_avatar() {
	
	var host = window.location.host;
	host = 'http://'+host;
	
	var uploader = new plupload.Uploader({
		runtimes : 'gears,html5,flash,silverlight,browserplus',
		browse_button : 'pickfiles',
		multi_selection:false,
		container : 'div_input_file',
		max_file_size : '20mb',
		url : host+'/php/ajax/plupload.php',
		flash_swf_url : host+'/js/plupload/js/plupload.flash.swf',
		silverlight_xap_url : host+'/js/plupload/js/plupload.silverlight.xap',
		filters : [
			{title : "Archivo imagen", extensions : "jpg,gif,png"}
		]
	});
	/*
	uploader.bind('Init', function(up, params) {
		$('#filelist').html("<div>Current runtime: " + params.runtime + "</div>");
		alert("Current runtime: " + params.runtime);
	});
	*/
	$('#uploadfiles').click(function(e) {
		uploader.start();
		e.preventDefault();
	});

	uploader.init();

	uploader.bind('FilesAdded', function(up, files) {
		$.each(files, function(i, file) {
			$('#file_progress').append(
				'<div class="item" id="' + file.id + '">' +
				file.name + ' (' + plupload.formatSize(file.size) + ') <b></b>' +
			'</div>');
		});
		$('#pickfiles').hide();
		up.refresh(); 			// Repos-ition Flash/Silverlight
		uploader.start();  		// Iniciamos upload
	});

	uploader.bind('UploadProgress', function(up, file) {
		$('#' + file.id + " b").html(file.percent + "%");
		$('.progress').css('width', file.percent + "%");
	});

	uploader.bind('Error', function(up, err) {
		alert("Error: " + err.code + ", Message: " + err.message);
		up.refresh(); // Reposition Flash/Silverlight
	});

	uploader.bind('FileUploaded', function(up, file, response) {
		 var data = jQuery.parseJSON(response.response); 
		 if(data.result==1) {
			 $('#datos_usuario').append("<input type='hidden' name='file' id='file' value='"+data.fi.name+"'/>");
			 $('#datos_usuario').append("<input type='hidden' name='file_path' id='file_id' value='"+data.fi.path+"'/>");
			 $('#' + file.id + " b").html("100% | <a href='#' id='delete_uploaded_file' data-file='"+data.fi.path+data.fi.name+"' data-input='file'>Eliminar</a>");
			 $('#avatar').attr('src', data.fi.path+data.fi.name);
			// Eliminamos ficheros subidos con plupload
			$('#delete_uploaded_file').click(function() {
				var id = "#"+$(this).attr('data-input');
				$.post('php/ajax/actions.php', {acc:'delete_file', file:data.fi.path+data.fi.name}, function(data) {
					if(data==1) {
						$(id).remove();
						$('#file_id').remove();
						$('#'+file.id).remove();
						$('.progress').css('width', "0%");
						$('#pickfiles').show();
						$('#avatar').attr('src', '../../img/perfil.jpg');
					}
				});
				return false;
			}); 			 
		 }else{
			 alert(data.msg);
		 }
	});	
}

function upload_lod() {
	
	var host = window.location.host;
	host = 'http://'+host;	
	
	var uploader = new plupload.Uploader({
		runtimes : 'gears,html5,flash,silverlight,browserplus',
		browse_button : 'pickfiles',
		multi_selection:false,
		container : 'div_input_file',
		max_file_size : '20mb',
		url : host+'/php/ajax/plupload.php',
		flash_swf_url : host+'/js/plupload/js/plupload.flash.swf',
		silverlight_xap_url : host+'/js/plupload/js/plupload.silverlight.xap',
		filters : [
			{title : "Archivo imagen", extensions : "jpg,gif,png"}
		]
	});

	uploader.bind('Init', function(up, params) {
		//$('#filelist').html("<div>Current runtime: " + params.runtime + "</div>");
		//alert("Current runtime: " + params.runtime);
	});

	$('#uploadfiles').click(function(e) {
		uploader.start();
		e.preventDefault();
	});

	uploader.init();

	uploader.bind('FilesAdded', function(up, files) {
		$.each(files, function(i, file) {
			$('#file_progress').append(
				'<div class="item" id="' + file.id + '">' +
				file.name + ' (' + plupload.formatSize(file.size) + ') <b></b>' +
			'</div>');
		});
		$('#pickfiles').hide();
		up.refresh(); // Repos-ition Flash/Silverlight
		uploader.start();  // Iniciamos upload
	});

	uploader.bind('UploadProgress', function(up, file) {
		$('#' + file.id + " b").html(file.percent + "%");
		$('.progress').css('width', file.percent + "%");
	});

	uploader.bind('Error', function(up, err) {
		/*
		$('#filelist').append("<div>Error: " + err.code +
			", Message: " + err.message +
			(err.file ? ", File: " + err.file.name : "") +
			"</div>"
		);
		*/
		alert("Error: " + err.code + ", Message: " + err.message);
		up.refresh(); // Reposition Flash/Silverlight
	});

	uploader.bind('FileUploaded', function(up, file, response) {
		 var data = jQuery.parseJSON(response.response); 
		 if(data.result==1) {
			 $('#estilos_disenador').append("<input type='hidden' name='file' id='file' value='"+data.fi.name+"'/>");
			 $('#estilos_disenador').append("<input type='hidden' name='file_path' id='file' value='"+data.fi.path+"'/>");
			 $('#estilos_disenador').append("<input type='hidden' name='file_id' id='file_id' value='"+file.id+"'/>");
			 $('#' + file.id + " b").html("100% | <a href='#' id='delete_uploaded_file' data-file='"+data.fi.path+data.fi.name+"' data-input='file'>Eliminar</a>");
			 $('#avatar').attr('src', data.fi.path+data.fi.name);
			// Eliminamos ficheros subidos con plupload
			$('#delete_uploaded_file').click(function() {
				var id = "#"+$(this).attr('data-input');
				$.post('php/ajax/actions.php', {acc:'delete_file', file:data.fi.path+data.fi.name}, function(data) {
					if(data==1) {
						$(id).remove();
						$('#file_id').remove();
						$('#'+file.id).remove();
						$('.progress').css('width', "0%");
						$('#pickfiles').show();
					}
				});
				return false;
			}); 			 
		 }else{
			 alert(data.msg);
		 }
	});	
	
}

function upload_tienda() {
	
	var host = window.location.host;
	host = 'http://'+host;
	
	var uploader = new plupload.Uploader({
		runtimes : 'gears,html5,flash,silverlight,browserplus',
		browse_button : 'pickfiles',
		multi_selection:false,
		container : 'div_input_file',
		max_file_size : '20mb',
		url : host+'/php/ajax/plupload.php',
		flash_swf_url : host+'/js/plupload/js/plupload.flash.swf',
		silverlight_xap_url : host+'/js/plupload/js/plupload.silverlight.xap',
		filters : [
			{title : "Archivo imagen", extensions : "jpg,gif,png"}
		]
	});
	/*
	uploader.bind('Init', function(up, params) {
		$('#filelist').html("<div>Current runtime: " + params.runtime + "</div>");
		alert("Current runtime: " + params.runtime);
	});
	*/
	$('#uploadfiles').click(function(e) {
		uploader.start();
		e.preventDefault();
	});

	uploader.init();

	uploader.bind('FilesAdded', function(up, files) {
		$.each(files, function(i, file) {
			$('#file_progress').append(
				'<div class="item" id="' + file.id + '">' +
				file.name + ' (' + plupload.formatSize(file.size) + ') <b></b>' +
			'</div>');
		});
		$('#pickfiles').hide();
		up.refresh(); 			// Repos-ition Flash/Silverlight
		uploader.start();  		// Iniciamos upload
	});

	uploader.bind('UploadProgress', function(up, file) {
		$('#' + file.id + " b").html(file.percent + "%");
		$('.progress').css('width', file.percent + "%");
	});

	uploader.bind('Error', function(up, err) {
		alert("Error: " + err.code + ", Message: " + err.message);
		up.refresh(); // Reposition Flash/Silverlight
	});

	uploader.bind('FileUploaded', function(up, file, response) {
		 var data = jQuery.parseJSON(response.response); 
		 if(data.result==1) {
			 $('#modificar_tienda').append("<input type='hidden' name='file' id='file' value='"+data.fi.name+"'/>");
			 $('#modificar_tienda').append("<input type='hidden' name='file_path' id='file_id' value='"+data.fi.path+"'/>");
			 $('#' + file.id + " b").html("100% | <a href='#' id='delete_uploaded_file' data-file='"+data.fi.path+data.fi.name+"' data-input='file'>Eliminar</a>");
			 $('#logotipo').attr('src', data.fi.path+data.fi.name);
			// Eliminamos ficheros subidos con plupload
			$('#delete_uploaded_file').click(function() {
				var id = "#"+$(this).attr('data-input');
				$.post('php/ajax/actions.php', {acc:'delete_file', file:data.fi.path+data.fi.name}, function(data) {
					if(data==1) {
						$(id).remove();
						$('#file_id').remove();
						$('#'+file.id).remove();
						$('.progress').css('width', "0%");
						$('#pickfiles').show();
						$('#logotipo').attr('src', '../../img/logo_tienda.jpg');
					}
				});
				return false;
			}); 			 
		 }else{
			 alert(data.msg);
		 }
	});	
}
