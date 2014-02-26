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

private $google_font_api = 'https://www.googleapis.com/webfonts/v1/webfonts?key=%s&sort=popularity';

private $version       = '';
private $langs         = '';
private $default_tags  = array('h1', 'h2', 'h3', 'h4', 'h5', 'h6');
private $sample_text   = "Grumpy wizards make toxic brew for the evil Queen and Jack.";
private $default_fonts = array(
    "Droid Sans" => array(
        "url" => "//fonts.googleapis.com/css?family=Droid+Sans",
        "css" => "'Droid Sans', sans-serif",
    ),
    "Lato" => array(
        "url" => "//fonts.googleapis.com/css?family=Lato",
        "css" => "'Lato', sans-serif",
    ),
    "PT Sans" => array(
        "url" => "//fonts.googleapis.com/css?family=PT+Sans",
        "css" => "'PT Sans', sans-serif",
    ),
    "Droid Serif" => array(
        "url" => "//fonts.googleapis.com/css?family=Droid+Serif",
        "css" => "'Droid Serif', serif",
    ),
    "Roboto" => array(
        "url" => "//fonts.googleapis.com/css?family=Roboto",
        "css" => "'Roboto', sans-serif",
    ),
    "Ubuntu" => array(
        "url" => "//fonts.googleapis.com/css?family=Ubuntu",
        "css" => "'Ubuntu', sans-serif",
    ),
    "PT Sans Narrow" => array(
        "url" => "//fonts.googleapis.com/css?family=PT+Sans+Narrow",
        "css" => "'PT Sans Narrow', sans-serif",
    ),
    "Lobster" => array(
        "url" => "//fonts.googleapis.com/css?family=Lobster",
        "css" => "'Lobster', cursive",
    ),
    "Arvo" => array(
        "url" => "//fonts.googleapis.com/css?family=Arvo",
        "css" => "'Arvo', serif",
    ),
    "Lora" => array(
        "url" => "//fonts.googleapis.com/css?family=Lora",
        "css" => "'Lora', serif",
    ),
    "Roboto Condensed" => array(
        "url" => "//fonts.googleapis.com/css?family=Roboto+Condensed",
        "css" => "'Roboto Condensed', sans-serif",
    ),
    "Nunito" => array(
        "url" => "//fonts.googleapis.com/css?family=Nunito",
        "css" => "'Nunito', sans-serif",
    ),
    "Raleway" => array(
        "url" => "//fonts.googleapis.com/css?family=Raleway",
        "css" => "'Raleway', sans-serif",
    ),
    "Rokkitt" => array(
        "url" => "//fonts.googleapis.com/css?family=Rokkitt",
        "css" => "'Rokkitt', serif",
    ),
    "Bitter" => array(
        "url" => "//fonts.googleapis.com/css?family=Bitter",
        "css" => "'Bitter', serif",
    ),
);

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

    add_shortcode('icon', array($this, 'icon'));

    require_once(GMOFONTAGENT_PATH.'/includes/mceplugins.class.php');

    new mcePlugins(
        'iconfonts',
        GMOFONTAGENT_URL.'/mce_plugins/plugins/iconfonts/editor_plugin.js',
        GMOFONTAGENT_PATH.'/mce_plugins/plugins/iconfonts/langs/langs.php',
        array($this, 'add_button'),
        false
    );
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
        'gmofontagent-genericons',
        plugins_url("fonts/genericons/genericons.css", __FILE__),
        array(),
        $this->version,
        'all'
    );
    wp_enqueue_style(
        'gmofontagent-icomoon',
        plugins_url("fonts/icomoon/style.css", __FILE__),
        array(),
        $this->version,
        'all'
    );
    $fonts = $this->get_default_fonts();
    foreach (get_option('gmofontagent-styles', array()) as $tag => $style) {
        if ($style['fontname']) {
            $handle = 'gmofontagent-'.preg_replace("/[^a-z0-9]/", "-", strtolower($style['fontname']));
            wp_enqueue_style(
                $handle,
                $fonts[$style['fontname']]['url'],
                array(),
                false,
                "all"
            );
        }
    }
}

public function wp_head()
{
    $fonts = $this->get_default_fonts();
    $active_fonts = get_option('gmofontagent-styles', array());
    if ($active_fonts) {
        echo "<!-- GMO Font Agent-->\n";
        echo '<style type="text/css" media="screen">';
        foreach ($active_fonts as $tag => $style) {
            $css = array();
            if (isset($style['fontname']) && $style['fontname']) {
                $css[] = sprintf('font-family: %s !important', $fonts[$style['fontname']]['css']);
            }
            if (isset($style['font-size']) && intval($style['font-size'])) {
                $css[] = sprintf('font-size: %dpx !important', intval($style['font-size']));
                $css[] = 'line-height: 1.25 !important';
            }
            if (count($css)) {
                //printf('.hentry %s{%s}', $tag, join(';', $css).';');
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

    wp_enqueue_script(
        'gmo-font-agent-script',
        plugins_url('js/gmo-font-agent.min.js', __FILE__),
        array('jquery-ui-tabs'),
        $this->version,
        true
    );
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

private function get_default_fonts()
{
    return apply_filters('gmofontagent_default_fonts', $this->default_fonts);
}

} // end class GMOFontAgent

// EOF
