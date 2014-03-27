var iconfontsDialog = {
	init : function() {
		this.resize();
		for (var name in icons) {
			$('#tabs').append('<div id="'+name+'" class="tab"></div>');
			$('#fonts').append('<option value="'+name+'">'+name+'</option>');
			for (var j=0; j<icons[name].length; j++) {
				var btn = $('<a class="icons '+name+'" data-icon="'+icons[name][j]+'"></a>');
				btn.append('<span class="genericon '+icons[name][j]+'"></span>');
				$('#'+name).append(btn);
				$(btn).click(function(){
					$('a.icons').removeClass('active');
					$(this).addClass('active');
                    $('#iconfont').val($(this).attr('data-icon'));
				});
			}
		}
        this.hide();
        var self = this;
        $('#fonts').change(function(){
            self.hide();
        });
	},

    hide: function() {
        $('a.icons').each(function(){
            if (!$(this).hasClass($('#fonts').val())) {
                $(this).hide();
            } else {
                $(this).show();
            }
        });
    },

	resize : function() {
		var h, e;

		if (!self.innerWidth) {
			h = document.body.clientHeight;
		} else {
			h = self.innerHeight;
		}

		e = document.getElementById('source');

		if (e) {
			e.style.height = Math.abs(h - 50) + 'px';
		}
	},

 	insert : function() {
        if (document.getElementById('iconfont').value) {
            tinyMCEPopup.execCommand(
                'mceInsertPreformattedText',
                '[icon class="'+document.getElementById('iconfont').value+'"]'
            );

            tinyMCEPopup.close();
        }
	}

};

tinyMCEPopup.onInit.add(iconfontsDialog.init, iconfontsDialog);

