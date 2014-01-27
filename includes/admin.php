<div id="gmofontagent" class="wrap">
<form method="post" action="<?php esc_attr($_SERVER['REQUEST_URI']); ?>">
<?php wp_nonce_field('gmofontagent', 'gmofontagent'); ?>

<h2>GMO Font Agent</h2>

<?php foreach ($this->get_default_tags() as $tag): ?>
<h3><?php echo $tag; ?></h3>
<div id="tag-<?php echo $tag; ?>" class="tag-block">
	<div class="alpha">
		<select class="fontname" name="styles[<?php echo $tag; ?>][fontname]" data-tag="<?php echo $tag; ?>">
			<option value="">font-face ...</option>
			<?php echo $this->get_font_selector($tag); ?>
		</select>
	</div>
	<div class="beta">
		<<?php echo $tag; ?>><?php echo $this->sample_text; ?></<?php echo $tag; ?>>
	</div>
</div>
<?php endforeach; ?>

<p>
    <input type="submit" name="submit" id="submit"
        class="button button-primary" value="<?php _e("Save Changes", "gmofontagent"); ?>">
</p>
</form>
</div><!-- #gmofontagent -->

<script type="text/javascript">
var fonts = <?php echo json_encode($this->get_default_fonts()); ?>
</script>