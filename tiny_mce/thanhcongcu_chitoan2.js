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

		plugins : "asciimath,asciisvg",
		// Theme options
		theme_advanced_buttons1 : "asciimath,asciimathcharmap",
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