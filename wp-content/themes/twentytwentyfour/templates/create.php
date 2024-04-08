<?php
/*
Template Name: Create User Template
*/
get_header();
?>
<ul class="menu">
    <li><a href="creae.php">Create Use</a></li>
</ul>
<?php
do_action('user_form');
do_action('posts_list');
get_footer();
?>
