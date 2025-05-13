<?php
/**
 * Title: Author
 * Slug: govwind/author
 * Categories: content
 * Description: Displays the post author
 *
 * @package WordPress
 * @subpackage Govwind
 * @since Govwind 0.1.0
 */
?>

<?php
    $firstname = get_the_author_meta('first_name');
    $surname = get_the_author_meta('last_name');
    $fullname = $firstname . " " . $surname;
    if (trim($fullname) == "") $fullname = get_the_author_meta('display_name');
?>

<div class="pb-10 text-sm font-bold">
    Penned by <?php echo $fullname; ?> <br />
    Penned by <!-- wp:post-author-name /-->
</div>
