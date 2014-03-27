(function($, url, settings){

$("#tabs").tabs();

$.getJSON(url, function(data){
    $('.fontcat').each(function(){
        for (var category in data) {
            $(this).append($('<option value="'+category+'">'+category+'</option>'));
        }
        $(this).change(function(){
            var cat = $(this).val();
            var tag = $(this).attr('data-tag');
            set_fonts(tag, cat, data);
        });
        var tag = $(this).attr('data-tag');
        if (settings[tag] && settings[tag].fontcat) {
            $(this).val(settings[tag].fontcat);
        }
        set_fonts(tag, $(this).val(), data);
    });

    $('#gmofontagent .beta[data-tag]').each(function(){
        var tag = $(this).attr('data-tag');
        set_style(tag);
    });
});

function set_fonts(tag, cat, data) {
    var escaped_tag = tag.replace(/^(\.|\#)/, '_');
    $('#fontname-'+escaped_tag).html('<option value="">Select font name ...</option>');
    for (var name in data[cat]) {
        $('#fontname-'+escaped_tag).append($('<option value="'+name+'">'+name+'</option>'));
    }

    if (settings[tag] && settings[tag].fontcat) {
        $('#fontname-'+escaped_tag).val(settings[tag].fontname);
    }
}

function set_style(tag) {
    var escaped_tag = tag.replace(/^(\.|\#)/, '_');
    if ($('#fontname-'+escaped_tag).val()) {
        var fontname = $('#fontname-'+escaped_tag).val();
        $("head").append("<link>");
        var css = $("head").children(":last");
        css.attr({
            rel: "stylesheet",
            type: "text/css",
            href: 'http://fonts.googleapis.com/css?family='+encodeURI($('#fontname-'+escaped_tag).val())
        });
        $('#tag-'+escaped_tag+' .beta '+tag).css('font-family', $('#fontname-'+escaped_tag).val());
    } else {
        $('#tag-'+escaped_tag+' .beta '+tag).css('font-family', "inherit");
    }
    if ($('#font-size-'+escaped_tag).val()) {
        $('#tag-'+escaped_tag+' .beta '+tag).css('font-size', $('#font-size-'+escaped_tag).val()+'px');
        $('#tag-'+escaped_tag+' .beta '+tag).css('line-height', 1.25);
    } else {
        $('#tag-'+escaped_tag+' .beta '+tag).css('font-size', "");
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

})(jQuery, url, settings);
