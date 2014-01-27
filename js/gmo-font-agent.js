(function($){

    function set_style(el) {
        var tag = $(el).attr('data-tag');
        /*global fonts */
        if ($(el).val() && fonts[$(el).val()]) {
            $("head").append("<link>");
            var css = $("head").children(":last");
            css.attr({
                rel: "stylesheet",
                type: "text/css",
                href: fonts[$(el).val()]['url']
            });
            $('#tag-'+tag+' .beta '+tag).css('font-family', fonts[$(el).val()]['css']);
        } else {
            $('#tag-'+tag+' .beta '+tag).css('font-family', "");
        }
    }
    $('#gmofontagent .fontname').change(function(){
        set_style(this);
    });

    $('#gmofontagent .alpha select').each(function(){
        set_style(this);
    });

})(jQuery);
