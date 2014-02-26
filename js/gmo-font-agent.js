(function($){

    $("#tabs").tabs();

    function set_style(tag) {
        /*global fonts */
        if ($('#fontname-'+tag).val() && fonts[$('#fontname-'+tag).val()]) {
            var fontname = $('#fontname-'+tag).val();
            $("head").append("<link>");
            var css = $("head").children(":last");
            css.attr({
                rel: "stylesheet",
                type: "text/css",
                href: fonts[fontname]['url']
            });
            $('#tag-'+tag+' .beta '+tag).css('font-family', fonts[fontname]['css']);
        } else {
            $('#tag-'+tag+' .beta '+tag).css('font-family', "inherit");
        }
        if ($('#font-size-'+tag).val()) {
            $('#tag-'+tag+' .beta '+tag).css('font-size', $('#font-size-'+tag).val()+'px');
            $('#tag-'+tag+' .beta '+tag).css('line-height', 1.25);
        } else {
            $('#tag-'+tag+' .beta '+tag).css('font-size', "");
        }
    }

    $('#gmofontagent .fontname').change(function(){
        var tag = $(this).attr('data-tag');
        set_style(tag);
    });

    $('#gmofontagent .font-size').change(function(){
        var tag = $(this).attr('data-tag');
        set_style(tag);
    });

    $('#gmofontagent .beta[data-tag]').each(function(){
        var tag = $(this).attr('data-tag');
        set_style(tag);
    });

})(jQuery);
