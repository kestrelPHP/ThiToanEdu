//	tinyMCE.init({
		// General options
//		mode : "textareas",
//		theme : "advanced",
//		plugins : "asciimath,asciisvg",
		// Theme options
//		theme_advanced_buttons1 : "asciimath,asciimathcharmap",
//		theme_advanced_resizing : true,

//	});


tinyMCE.init({
    mode : "textareas",
    theme : "advanced",
    theme_advanced_resizing_min_height : 20, //chiều cao cho trình soạn thảo
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

		plugins : "tiny_mce_wiris,asciimath,asciisvg",
		// Theme options
		theme_advanced_buttons1 : "asciimath,asciimathcharmap,tiny_mce_wiris_formulaEditor,tiny_mce_wiris_CAS",
		theme_advanced_resizing : true,

    setup : function(ed) {
        ed.onInit.add(function() {
            var e = tinymce.DOM.get(ed.id + '_tbl'), ifr = tinymce.DOM.get(ed.id + '_ifr'), w = ed.getWin(), dh;
            var h = 10; //Chiều cao cho trình soạn thảo
            dh = e.clientHeight - ifr.clientHeight; //get the height of the toolbars
            ed.theme.resizeTo(w.clientWidth, h + dh);
        });
    }
});