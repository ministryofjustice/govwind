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
    if (trim($fullname) != "") {
?>

<!-- wp:paragraph -->
<p class="">
    Penned by <?php echo $fullname; ?>
</p>
<!-- /wp:paragraph -->

<?php
    }
