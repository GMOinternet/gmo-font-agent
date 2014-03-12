<div id="gmofontagent" class="wrap">
<form method="post" action="<?php esc_attr($_SERVER['REQUEST_URI']); ?>">
<?php wp_nonce_field('gmofontagent', 'gmofontagent'); ?>

<!--?php if (get_option('gmofontagent_')): ?-->

<h2>GMO Font Agent</h2>

<div id="tabs">

<ul>
    <li><a href="#tabs-1">Font Settings</a></li>
    <li><a href="#tabs-2">General Settings</a></li>
</ul>

<div id="tabs-1">

    <?php foreach ($this->get_default_tags() as $tag): ?>
    <h3><?php echo $tag; ?></h3>
    <div id="tag-<?php echo $tag; ?>" class="tag-block">
        <div class="alpha">
            <ul>
                <li>
                    <select id="fontcat-<?php echo $tag; ?>" class="fontcat" name="styles[<?php echo $tag; ?>][fontcat]" data-tag="<?php echo $tag; ?>">
                        <option value="">Select category ...</option>
                    </select>
                </li>
                <li>
                    <select id="fontname-<?php echo $tag; ?>" class="fontname" name="styles[<?php echo $tag; ?>][fontname]" data-tag="<?php echo $tag; ?>">
                        <option value="">Select font name ...</option>
                    </select>
                </li>
                <li>
                    <input id="font-size-<?php echo $tag; ?>" class="font-size" type="text" name="styles[<?php echo $tag; ?>][font-size]"
                            value="<?php $font_size = intval($this->get_style($tag, 'font-size')); if ($font_size) echo $font_size; ?>" size=4 data-tag="<?php echo $tag; ?>"> px
                </li>
            </ul>
        </div>
        <div class="beta" data-tag="<?php echo $tag; ?>">
            <<?php echo $tag; ?>><?php echo $this->sample_text; ?></<?php echo $tag; ?>>
        </div>
    </div>
    <?php endforeach; ?>
</div><!-- tabs-1 -->

<div id="tabs-2">

    <table class="form-table">
        <tr>
            <th scope="row">Google Fonts API key</th>
            <td><input type="text" name="apikey" value="<?php echo esc_attr(get_option('gmofontagent-apikey')); ?>"></td>
        </tr>
    </table>

</div><!-- tabs-2 -->

</div><!-- #tabs -->

<p>
    <input type="submit" name="submit" id="submit"
        class="button button-primary" value="<?php _e("Save Changes", "gmofontagent"); ?>">
</p>
</form>
</div><!-- #gmofontagent -->

<script type="text/javascript">
var url = '<?php echo admin_url('admin-ajax.php?action=fonts'); ?>';
var settings = <?php echo json_encode(get_option('gmofontagent-styles', array())); ?>;
</script>
