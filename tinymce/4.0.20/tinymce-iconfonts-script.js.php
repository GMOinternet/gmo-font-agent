(function() {
    var each = tinymce.each;

    tinymce.create('tinymce.plugins.mceIconfonts', {
        init : function(ed, url) {
            var t = this;
            t.editor = ed;

            // Register commands
            ed.addCommand('mceIconfonts', function(ui) {
                ed.windowManager.open({
                    file : '<?php echo admin_url('admin-ajax.php?action=tinymce_iconfonts_popup'); ?>',
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
                title : '<?php _e('Iconfonts by GMO Font Agent', 'gmofontagent'); ?>',
                cmd : 'mceIconfonts',
                image : '<?php echo GMOFONTAGENT_URL."/img/tinymce-icon.png";?>'
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
