(function() {
	var each = tinymce.each;

	tinymce.create('tinymce.plugins.mceIconfonts', {
		init : function(ed, url) {
			var t = this;

			t.editor = ed;

			// Register commands
			ed.addCommand('mceIconfonts', function(ui) {
				ed.windowManager.open({
					file : url + '/iconfonts.html',
					width : ed.getParam('iconfonts_popup_width', 420),
					height : ed.getParam('iconfonts_popup_height', 300),
					inline : 1
				}, {
					plugin_url : url
				});
			});

			ed.addCommand('mceInsertPreformattedText', t._insertPreformattedText, t);

			// Register buttons
			ed.addButton('iconfonts', {
                title : 'iconfonts_dlg.desc', 
                cmd : 'mceIconfonts',
                image : url + '/img/icon.png'
            });
		},

		_insertPreformattedText : function(content) {
            ed = this.editor;
			ed.execCommand('mceInsertContent', false, content);
			ed.addVisual();
		}
	});

	// Register plugin
	tinymce.PluginManager.add('iconfonts', tinymce.plugins.mceIconfonts);
})();
