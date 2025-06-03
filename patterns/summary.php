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
	$summary = get_field('post_summary');

	if ( !empty($summary) ) :
?>
	<div class="pb-10">
		<?php echo wpautop($summary); ?>
	</div>
<?php
	endif;
?>
