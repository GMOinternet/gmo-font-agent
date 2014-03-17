<?php
/**
 * Plugin Name: GMO Font Agent
 * Plugin URI:  https://digitalcube.jp/
 * Description: This is a awesome cool plugin.
 * Version:     0.1.0
 * Author:      Digitalcube Co,.Ltd
 * Author URI:  https://digitalcube.jp/
 * License:     GPLv2
 * Text Domain: gmofontagent
 * Domain Path: /languages
 */

/**
 * Copyright (c) 2013 Digitalcube Co,.Ltd (https://digitalcube.jp/)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2 or, at
 * your discretion, any later version, as published by the Free
 * Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */


define('GMOFONTAGENT_URL',  plugins_url('', __FILE__));
define('GMOFONTAGENT_PATH', dirname(__FILE__));

$gmofontagent = new GMOFontAgent();
$gmofontagent->register();

class GMOFontAgent {

private $fonts = array(
    'iconmoon' => array(
        "icon-home",
        "icon-home2",
        "icon-home3",
        "icon-office",
        "icon-newspaper",
        "icon-pencil",
        "icon-pencil2",
        "icon-image",
        "icon-images",
        "icon-camera",
        "icon-music",
        "icon-headphones",
        "icon-play",
        "icon-diamonds",
        "icon-pawn",
        "icon-bullhorn",
        "icon-connection",
        "icon-podcast",
        "icon-feed",
        "icon-file",
        "icon-file2",
        "icon-copy",
        "icon-copy2",
        "icon-copy3",
        "icon-paste",
        "icon-tags",
        "icon-barcode",
        "icon-qrcode",
        "icon-ticket",
        "icon-cart",
        "icon-cart2",
        "icon-phone-hang-up",
        "icon-address-book",
        "icon-notebook",
        "icon-envelope",
        "icon-pushpin",
        "icon-location",
        "icon-clock",
        "icon-alarm",
        "icon-alarm2",
        "icon-bell",
        "icon-stopwatch",
        "icon-calendar",
        "icon-storage",
        "icon-undo",
        "icon-redo",
        "icon-flip",
        "icon-flip2",
        "icon-undo2",
        "icon-bubble",
        "icon-bubbles",
        "icon-bubbles2",
        "icon-user",
        "icon-users",
        "icon-user2",
        "icon-spinner",
        "icon-spinner2",
        "icon-spinner3",
        "icon-spinner4",
        "icon-spinner5",
        "icon-binoculars",
        "icon-contract",
        "icon-key",
        "icon-key2",
        "icon-lock",
        "icon-lock2",
        "icon-unlocked",
        "icon-hammer",
        "icon-wand",
        "icon-aid",
        "icon-bug",
        "icon-pie",
        "icon-stats",
        "icon-food",
        "icon-leaf",
        "icon-rocket",
        "icon-meter",
        "icon-meter2",
        "icon-dashboard",
        "icon-briefcase",
        "icon-airplane",
        "icon-truck",
        "icon-road",
        "icon-accessibility",
        "icon-target",
        "icon-list",
        "icon-numbered-list",
        "icon-menu",
        "icon-menu2",
        "icon-tree",
        "icon-cloud",
        "icon-globe",
        "icon-earth",
        "icon-link",
        "icon-flag",
        "icon-attachment",
        "icon-eye",
        "icon-contrast",
        "icon-star",
        "icon-star2",
        "icon-star3",
        "icon-heart",
        "icon-heart2",
        "icon-smiley",
        "icon-tongue",
        "icon-tongue2",
        "icon-sad",
        "icon-sad2",
        "icon-wink",
        "icon-angry",
        "icon-evil",
        "icon-evil2",
        "icon-shocked",
        "icon-shocked2",
        "icon-confused",
        "icon-point-right",
        "icon-point-down",
        "icon-point-left",
        "icon-warning",
        "icon-notification",
        "icon-question",
        "icon-close",
        "icon-checkmark",
        "icon-checkmark2",
        "icon-spell-check",
        "icon-minus",
        "icon-plus",
        "icon-forward",
        "icon-play2",
        "icon-pause",
        "icon-stop",
        "icon-backward",
        "icon-forward2",
        "icon-volume-medium",
        "icon-volume-low",
        "icon-volume-mute",
        "icon-volume-mute2",
        "icon-volume-increase",
        "icon-volume-decrease",
        "icon-arrow-up-right",
        "icon-arrow-right",
        "icon-arrow-down-right",
        "icon-arrow-down",
        "icon-arrow-down-left",
        "icon-arrow-left",
        "icon-arrow-down-left2",
        "icon-arrow-left2",
        "icon-arrow-up-left",
        "icon-arrow-up",
        "icon-arrow-up-right2",
        "icon-arrow-right2",
        "icon-checkbox-unchecked",
        "icon-checkbox-partial",
        "icon-radio-checked",
        "icon-radio-unchecked",
        "icon-crop",
        "icon-scissors",
        "icon-underline",
        "icon-italic",
        "icon-strikethrough",
        "icon-omega",
        "icon-sigma",
        "icon-table",
        "icon-paragraph-center",
        "icon-paragraph-right",
        "icon-paragraph-justify",
        "icon-paragraph-left",
        "icon-paragraph-center2",
        "icon-paragraph-right2",
        "icon-console",
        "icon-share",
        "icon-mail",
        "icon-mail2",
        "icon-mail3",
        "icon-mail4",
        "icon-facebook",
        "icon-facebook2",
        "icon-facebook3",
        "icon-instagram",
        "icon-twitter",
        "icon-twitter2",
        "icon-vimeo",
        "icon-vimeo2",
        "icon-vimeo3",
        "icon-lanyrd",
        "icon-flickr",
        "icon-flickr2",
        "icon-dribbble",
        "icon-forrst",
        "icon-forrst2",
        "icon-deviantart",
        "icon-deviantart2",
        "icon-steam",
        "icon-wordpress",
        "icon-wordpress2",
        "icon-joomla",
        "icon-blogger",
        "icon-blogger2",
        "icon-tumblr",
        "icon-windows",
        "icon-windows8",
        "icon-soundcloud",
        "icon-soundcloud2",
        "icon-skype",
        "icon-reddit",
        "icon-stackoverflow",
        "icon-pinterest",
        "icon-pinterest2",
        "icon-xing",
        "icon-xing2",
        "icon-flattr",
        "icon-libreoffice",
        "icon-file-pdf",
        "icon-file-openoffice",
        "icon-file-word",
        "icon-file-excel",
        "icon-file-zip",
        "icon-css3",
        "icon-yelp",
        "icon-image2",
        "icon-clubs",
        "icon-file3",
        "icon-tag",
        "icon-phone",
        "icon-clock2",
        "icon-mobile",
        "icon-drawer",
        "icon-box-add",
        "icon-box-remove",
        "icon-download",
        "icon-upload",
        "icon-IcoMoon",
        "icon-safari",
        "icon-IE",
        "icon-chrome",
        "icon-firefox",
        "icon-opera",
        "icon-stumbleupon",
        "icon-disk",
        "icon-bubbles3",
        "icon-spinner6",
        "icon-expand",
        "icon-cog",
        "icon-mug",
        "icon-remove",
        "icon-list2",
        "icon-upload2",
        "icon-brightness-contrast",
        "icon-smiley2",
        "icon-angry2",
        "icon-point-up",
        "icon-spam",
        "icon-backward2",
        "icon-volume-high",
        "icon-arrow-up2",
        "icon-arrow-down2",
        "icon-checkbox-checked",
        "icon-bold",
        "icon-paragraph-left2",
        "icon-code",
        "icon-google-drive",
        "icon-youtube",
        "icon-dribbble2",
        "icon-github",
        "icon-android",
        "icon-mobile2",
        "icon-tablet",
        "icon-tv",
        "icon-cabinet",
        "icon-drawer2",
        "icon-drawer3",
        "icon-html5",
        "icon-redo2",
        "icon-forward3",
        "icon-reply",
        "icon-bubble2",
        "icon-bubbles4",
        "icon-users2",
        "icon-user3",
        "icon-user4",
        "icon-quotes-left",
        "icon-busy",
        "icon-search",
        "icon-zoom-in",
        "icon-zoom-out",
        "icon-expand2",
        "icon-contract2",
        "icon-wrench",
        "icon-settings",
        "icon-equalizer",
        "icon-cog2",
        "icon-cogs",
        "icon-bars",
        "icon-bars2",
        "icon-gift",
        "icon-trophy",
        "icon-glass",
        "icon-hammer2",
        "icon-fire",
        "icon-lab",
        "icon-magnet",
        "icon-remove2",
        "icon-shield",
        "icon-lightning",
        "icon-switch",
        "icon-power-cord",
        "icon-signup",
        "icon-cloud-download",
        "icon-cloud-upload",
        "icon-download2",
        "icon-upload3",
        "icon-download3",
        "icon-eye-blocked",
        "icon-eye2",
        "icon-bookmark",
        "icon-bookmarks",
        "icon-brightness-medium",
        "icon-heart-broken",
        "icon-thumbs-up",
        "icon-thumbs-up2",
        "icon-happy",
        "icon-happy2",
        "icon-wink2",
        "icon-grin",
        "icon-grin2",
        "icon-cool",
        "icon-cool2",
        "icon-confused2",
        "icon-neutral",
        "icon-neutral2",
        "icon-wondering",
        "icon-wondering2",
        "icon-info",
        "icon-info2",
        "icon-blocked",
        "icon-cancel-circle",
        "icon-checkmark-circle",
        "icon-enter",
        "icon-exit",
        "icon-play3",
        "icon-pause2",
        "icon-stop2",
        "icon-first",
        "icon-last",
        "icon-previous",
        "icon-next",
        "icon-eject",
        "icon-loop",
        "icon-loop2",
        "icon-loop3",
        "icon-shuffle",
        "icon-arrow-up-left2",
        "icon-arrow-up-left3",
        "icon-arrow-up3",
        "icon-arrow-up-right3",
        "icon-arrow-right3",
        "icon-arrow-down-right2",
        "icon-arrow-down-right3",
        "icon-arrow-down3",
        "icon-arrow-down-left3",
        "icon-arrow-left3",
        "icon-tab",
        "icon-filter",
        "icon-filter2",
        "icon-font",
        "icon-text-height",
        "icon-text-width",
        "icon-table2",
        "icon-insert-template",
        "icon-pilcrow",
        "icon-left-toright",
        "icon-right-toleft",
        "icon-paragraph-justify2",
        "icon-indent-increase",
        "icon-indent-decrease",
        "icon-new-tab",
        "icon-embed",
        "icon-google",
        "icon-google-plus",
        "icon-google-plus2",
        "icon-google-plus3",
        "icon-google-plus4",
        "icon-twitter3",
        "icon-feed2",
        "icon-feed3",
        "icon-feed4",
        "icon-youtube2",
        "icon-flickr3",
        "icon-flickr4",
        "icon-picassa",
        "icon-picassa2",
        "icon-dribbble3",
        "icon-steam2",
        "icon-github2",
        "icon-github3",
        "icon-github4",
        "icon-github5",
        "icon-tumblr2",
        "icon-yahoo",
        "icon-tux",
        "icon-apple",
        "icon-finder",
        "icon-linkedin",
        "icon-lastfm",
        "icon-lastfm2",
        "icon-delicious",
        "icon-stumbleupon2",
        "icon-foursquare",
        "icon-foursquare2",
        "icon-paypal",
        "icon-paypal2",
        "icon-paypal3",
        "icon-file-powerpoint",
        "icon-file-xml",
        "icon-file-css",
        "icon-html52",
        "icon-laptop",
        "icon-quill",
        "icon-pen",
        "icon-blog",
        "icon-droplet",
        "icon-paint-format",
        "icon-film",
        "icon-camera2",
        "icon-dice",
        "icon-pacman",
        "icon-spades",
        "icon-book",
        "icon-books",
        "icon-library",
        "icon-file4",
        "icon-profile",
        "icon-paste2",
        "icon-paste3",
        "icon-stack",
        "icon-folder",
        "icon-folder-open",
        "icon-cart3",
        "icon-coin",
        "icon-credit",
        "icon-calculate",
        "icon-support",
        "icon-location2",
        "icon-compass",
        "icon-map",
        "icon-map2",
        "icon-history",
        "icon-calendar2",
        "icon-print",
        "icon-keyboard",
        "icon-screen",
    ),
    'genericons' => array(
        'genericon-standard',
        'genericon-aside',
        'genericon-image',
        'genericon-gallery',
        'genericon-video',
        'genericon-status',
        'genericon-quote',
        'genericon-link',
        'genericon-chat',
        'genericon-audio',
        'genericon-github',
        'genericon-dribbble',
        'genericon-twitter',
        'genericon-facebook',
        'genericon-facebook-alt',
        'genericon-wordpress',
        'genericon-googleplus',
        'genericon-linkedin',
        'genericon-linkedin-alt',
        'genericon-pinterest',
        'genericon-pinterest-alt',
        'genericon-flickr',
        'genericon-vimeo',
        'genericon-youtube',
        'genericon-tumblr',
        'genericon-instagram',
        'genericon-codepen',
        'genericon-polldaddy',
        'genericon-googleplus-alt',
        'genericon-path',
        'genericon-skype',
        'genericon-digg',
        'genericon-reddit',
        'genericon-stumbleupon',
        'genericon-pocket',
        'genericon-dropbox',
        'genericon-comment',
        'genericon-category',
        'genericon-tag',
        'genericon-time',
        'genericon-user',
        'genericon-day',
        'genericon-week',
        'genericon-month',
        'genericon-pinned',
        'genericon-search',
        'genericon-unzoom',
        'genericon-zoom',
        'genericon-show',
        'genericon-hide',
        'genericon-close',
        'genericon-close-alt',
        'genericon-trash',
        'genericon-star',
        'genericon-home',
        'genericon-mail',
        'genericon-edit',
        'genericon-reply',
        'genericon-feed',
        'genericon-warning',
        'genericon-share',
        'genericon-attachment',
        'genericon-location',
        'genericon-checkmark',
        'genericon-menu',
        'genericon-refresh',
        'genericon-minimize',
        'genericon-maximize',
        'genericon-404',
        'genericon-spam',
        'genericon-summary',
        'genericon-cloud',
        'genericon-key',
        'genericon-dot',
        'genericon-next',
        'genericon-previous',
        'genericon-expand',
        'genericon-collapse',
        'genericon-dropdown',
        'genericon-dropdown-left',
        'genericon-top',
        'genericon-draggable',
        'genericon-phone',
        'genericon-send-to-phone',
        'genericon-plugin',
        'genericon-cloud-download',
        'genericon-cloud-upload',
        'genericon-external',
        'genericon-document',
        'genericon-book',
        'genericon-cog',
        'genericon-unapprove',
        'genericon-cart',
        'genericon-pause',
        'genericon-stop',
        'genericon-skip-back',
        'genericon-skip-ahead',
        'genericon-play',
        'genericon-tablet',
        'genericon-send-to-tablet',
        'genericon-info',
        'genericon-notice',
        'genericon-help',
        'genericon-fastforward',
        'genericon-rewind',
        'genericon-portfolio',
        'genericon-heart',
        'genericon-code',
        'genericon-subscribe',
        'genericon-unsubscribe',
        'genericon-subscribed',
        'genericon-reply-alt',
        'genericon-reply-single',
        'genericon-flag',
        'genericon-print',
        'genericon-lock',
        'genericon-bold',
        'genericon-italic',
        'genericon-picture',
        'genericon-fullscreen',
        'genericon-uparrow',
        'genericon-rightarrow',
        'genericon-downarrow',
        'genericon-leftarrow',
    ),
);

private $google_font_api = 'https://www.googleapis.com/webfonts/v1/webfonts?key=%s&sort=popularity';

private $version       = '';
private $langs         = '';
private $default_tags  = array('h1', 'h2', 'h3', 'h4', 'h5', 'h6', '.entry-content');
private $sample_text   = "Grumpy wizards make toxic brew for the evil Queen and Jack.";

function __construct()
{
    $data = get_file_data(
        __FILE__,
        array(
            'ver' => 'Version',
            'langs' => 'Domain Path'
        )
    );
    $this->version = $data['ver'];
    $this->langs   = $data['langs'];
}

public function register()
{
    add_action('plugins_loaded', array($this, 'plugins_loaded'));
}

public function plugins_loaded()
{
    load_plugin_textdomain(
        'gmofontagent',
        false,
        dirname(plugin_basename(__FILE__)).$this->langs
    );

    add_action('admin_menu', array($this, 'admin_menu'));
    add_action('admin_enqueue_scripts', array($this, 'admin_enqueue_scripts'));
    add_action('admin_menu', array($this, 'admin_menu'));
    add_action('admin_init', array($this, 'admin_init'));
    add_action('wp_enqueue_scripts', array($this, 'wp_enqueue_scripts'));
    add_action('wp_head', array($this, 'wp_head'));

    add_action("wp_ajax_tinymce_iconfonts_popup", array($this, "wp_ajax_tinymce_iconfonts_popup"));
    add_action("wp_ajax_tinymce_iconfonts_script", array($this, "wp_ajax_tinymce_iconfonts_script"));
    add_action("wp_ajax_fonts", array($this, "wp_ajax_fonts"));

    add_shortcode('icon', array($this, 'icon'));

    require_once(GMOFONTAGENT_PATH.'/includes/mceplugins.class.php');

    new mcePlugins(
        'iconfonts',
        admin_url('admin-ajax.php?action=tinymce_iconfonts_script'),
        GMOFONTAGENT_PATH.'/languages/langs.php',
        array($this, 'add_button'),
        false
    );
}

public function wp_ajax_fonts()
{
    header('Content-Type: application/javascript');
    $fonts = get_transient("gmofontagent-fonts");
    echo json_encode($fonts);
    exit;
}

public function wp_ajax_tinymce_iconfonts_script()
{
    header('Content-type: application/javascript; charset=utf-8');
    require_once(dirname(__FILE__).'/includes/tinymce-iconfonts-script.js.php');
}

public function wp_ajax_tinymce_iconfonts_popup()
{
    header('Content-type: text/html; charset=utf-8');
    require_once(dirname(__FILE__).'/includes/tinymce-iconfonts-popup.html.php');
    exit;
}

public function add_button($buttons){
    array_unshift($buttons, '|');
    array_unshift($buttons, 'iconfonts');
    return $buttons;
}

public function icon($p, $content)
{
    if (isset($p['class']) && $p['class']) {
        $icon = $p['class'];
    } elseif (isset($p[0]) && $p[0]) {
        $icon = $p[0];
    } else {
        $icon = '';
    }

    if (preg_match("/genericon/", $icon)) {
        $icon = 'genericon '.$icon;
    }

    return sprintf(
        '<span class="%s"></span>',
        $icon
    );
}

public function wp_enqueue_scripts()
{
    wp_enqueue_style(
        'gmo-genericons',
        plugins_url("fonts/genericons/genericons.css", __FILE__),
        array(),
        $this->version,
        'all'
    );
    wp_enqueue_style(
        'gmo-icomoon',
        plugins_url("fonts/icomoon/style.css", __FILE__),
        array(),
        $this->version,
        'all'
    );
    foreach (get_option('gmofontagent-styles', array()) as $tag => $style) {
        if ($style['fontname']) {
            $handle = 'gmofontagent-'.preg_replace("/[^a-z0-9]/", "-", strtolower($style['fontname']));
            wp_enqueue_style(
                $handle,
                '//fonts.googleapis.com/css?family='.urlencode($style['fontname']),
                array(),
                false,
                "all"
            );
        }
    }
}

public function wp_head()
{
    $active_fonts = get_option('gmofontagent-styles', array());
    if ($active_fonts) {
        echo "<!-- GMO Font Agent-->\n";
        echo '<style type="text/css" media="screen">';
        foreach ($active_fonts as $tag => $style) {
            $css = array();
            if (isset($style['fontname']) && $style['fontname']) {
                $css[] = sprintf("font-family: '%s' !important", $style['fontname']);
            }
            if (isset($style['font-size']) && intval($style['font-size'])) {
                $css[] = sprintf('font-size: %dpx !important', intval($style['font-size']));
                $css[] = 'line-height: 1.25 !important';
            }
            if (count($css)) {
                printf('%s{%s}', $tag, join(';', $css).';');
            }
        }
        echo '</style>'."\n";
    }
}

public function admin_enqueue_scripts()
{
    global $wp_scripts;

    $ui = $wp_scripts->query('jquery-ui-core');

    wp_enqueue_style(
        'jquery-ui-smoothness',
        "//ajax.googleapis.com/ajax/libs/jqueryui/{$ui->ver}/themes/smoothness/jquery-ui.min.css",
        false,
        null
    );

    wp_enqueue_style(
        'gmo-font-agent-style',
        plugins_url('css/gmo-font-agent.min.css', __FILE__),
        array(),
        $this->version,
        'all'
    );

    if (defined("WP_DEBUG") && WP_DEBUG === true) {
        wp_enqueue_script(
            'gmo-font-agent-script',
            plugins_url('js/gmo-font-agent.js', __FILE__),
            array('jquery-ui-tabs'),
            $this->version,
            true
        );
    } else {
        wp_enqueue_script(
            'gmo-font-agent-script',
            plugins_url('js/gmo-font-agent.min.js', __FILE__),
            array('jquery-ui-tabs'),
            $this->version,
            true
        );
    }
}

public function admin_init()
{
    if (isset($_POST['gmofontagent']) && $_POST['gmofontagent']){
        if (check_admin_referer('gmofontagent', 'gmofontagent')){
            if (isset($_POST['styles']) && is_array($_POST['styles'])) {
                update_option("gmofontagent-styles", $_POST['styles']);
            }
            if (isset($_POST['apikey']) && trim($_POST['apikey'])) {
                update_option("gmofontagent-apikey", trim($_POST['apikey']));
            } else {
                update_option("gmofontagent-apikey", '');
            }
            wp_redirect('options-general.php?page=gmofontagent');
        }
    }
}

public function admin_menu()
{
    add_options_page(
        __('GMO Font Agent', 'gmofontagent'),
        __('GMO Font Agent', 'gmofontagent'),
        'publish_posts',
        'gmofontagent',
        array($this, 'options_page')
    );
}

public function options_page()
{
    $api = "";
    if (get_option('gmofontagent-apikey')) {
        $api = sprintf(
            $this->google_font_api,
            get_option('gmofontagent-apikey')
        );
    }

    $fonts = array();
    if ((false === ($fonts = get_transient('gmofontagent-fonts'))) && $api) {
        $res = wp_remote_get($api);
        if(!is_wp_error($res) && $res["response"]["code"] === 200) {
            $json = json_decode($res["body"]);
            foreach ($json->items as $item) {
                $fonts[$item->category][$item->family] = $item->variants;
            }
            set_transient('gmofontagent-fonts', $fonts, 86400);
        } else {
            echo '<div class="error">Failed to load Google fonts API. Please check your API key or reload after few minutes.</div>';
        }
    }

    require_once(dirname(__FILE__).'/includes/admin.php');
}

private function get_style($tag, $style)
{
    $styles = get_option('gmofontagent-styles', array());
    if (isset($styles[$tag]) && $styles[$tag]) {
        if (isset($styles[$tag][$style]) && $styles[$tag][$style]) {
            return $styles[$tag][$style];
        }
    }
}

private function get_font_selector($tag)
{
    $active_fontname = $this->get_style($tag, 'fontname');
    $options = array();
    foreach ($this->get_default_fonts() as $fontname => $meta) {
        if ($fontname === $active_fontname) {
            $select = 'selected';
        } else {
            $select = '';
        }
        $options[] = sprintf(
            '<option value="%1$s" %2$s>%1$s</option>',
            $fontname,
            $select
        );
    }
    return join("", $options);
}

private function get_default_tags()
{
    return apply_filters("gmofontagent_default_tags", $this->default_tags);
}

} // end class GMOFontAgent

// EOF
