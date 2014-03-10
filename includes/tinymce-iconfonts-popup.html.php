<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>{#iconfonts_dlg.title}</title>
    <link href="<?php echo GMOFONTAGENT_URL."/css/tinymce-popup.css" ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo GMOFONTAGENT_URL.'/fonts/genericons/genericons.css?ver=0.1.0'; ?>" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo GMOFONTAGENT_URL.'/fonts/icomoon/style.css?ver=0.1.0'; ?>" type="text/css" media="all" />
<script type="text/javascript">
var icons = <?php echo json_encode($this->fonts); ?>
</script>
</head>
<body onresize="iconfontsDialog.resize();">

<p><select id="fonts"></select></p>

    <div id="tabs"></div><!-- #tabs -->

    <br clear="all">

    <form onsubmit="iconfontsDialog.insert();return false;">
        <input type="hidden" id="iconfont" value="" />
        <div class="mceActionPanel">
            <div style="float: left">
                <input type="submit" id="insert" name="insert" value="{#insert}" />
            </div>

            <div style="float: right">
                <input type="button" id="cancel" name="cancel" value="{#cancel}" onclick="tinyMCEPopup.close();" />
            </div>

            <br style="clear:both" />
        </div>
    </form>

    <script type="text/javascript" src="<?php echo includes_url('js/tinymce/tiny_mce_popup.js'); ?>"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo GMOFONTAGENT_URL.'/js/iconfonts-mcepopup.js'; ?>"></script>
</body>
</html>
