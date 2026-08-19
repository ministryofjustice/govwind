<?php
/**
 * Title: Summary
 * Slug: govwind/summary
 * Categories: content
 * Description: Displays the post summary
 *
 * @package WordPress
 * @subpackage Govwind
 * @since Govwind 0.1.0
 */
?>

<?php
$summary = get_field("post_summary");

if (!empty($summary)): ?>
	<div style="padding-bottom:var(--wp--preset--spacing--60)">
		<?php echo wpautop(esc_html($summary)); ?>
	</div>
<?php endif;


?>
