	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",

//công thức toán tiny_mce_wiris:
    wirisimagebgcolor: '#FFFFFF',
    wirisimagesymbolcolor: '#000000',
    wiristransparency: 'true',
    wirisimagefontsize: '16',
    wirisimagenumbercolor: '#000000',
    wirisimageidentcolor: '#000000',
    wirisformulaeditorlang: 'es',
	wiristransparency: true,
	wirisimagesymbolcolor: '#000000',
	wirisimageidentmathvariant: 'italic-sans-serif',
	wirisimagenumbermathvariant: 'sans-serif',
	wirisimagefontident: 'Courier',
	wirisimagefontnumber: 'Dialog',
	wirisimagefontranges: 'font1, font2',
	font1: 'x3b1-x3ff;DialogInput,105',
	font2: 'x41-x5A;FreeSans',
//End công thức toán:


		plugins : "ibrowser,tiny_mce_wiris,asciimath,asciisvg,table,inlinepopups,media,autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks,asciimath,asciimathcharmap,asciisvg,tiny_mce_wiris_formulaEditor,tiny_mce_wiris_CAS,ibrowser",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,
				AScgiloc : 'http://www.imathas.com/editordemo/php/svgimg.php',			      //change me  
				ASdloc : 'http://www.imathas.com/editordemo/jscripts/tiny_mce/plugins/asciisvg/js/d.svg',  //change me  	

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Style formats
		style_formats : [
			{title : 'Bold text', inline : 'b'},
			{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
			{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
			{title : 'Example 1', inline : 'span', classes : 'example1'},
			{title : 'Example 2', inline : 'span', classes : 'example2'},
			{title : 'Table styles'},
			{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
		],


        mode : "textareas", //mặc định font chữ cho trình soạn thảo
            setup : function(ed)
            {
                // set the editor font size
                ed.onInit.add(function(ed)
                {
                ed.getBody().style.fontSize = '15px';
                });
            },


		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}



	});
