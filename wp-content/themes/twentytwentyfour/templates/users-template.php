<?php
/*
Template Name: User Manager
*/

get_header();
?>

<h1>New User</h1>
<form name="user" method="POST" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
    <input type="hidden" name="action" value="handle_user_form_submission">
    <label for="name">Name: </label>
    <input type="text" placeholder="name" name="name" required> <br>
    <label for="email">Email: </label>
    <input type="email" placeholder="email" name="email" required> <br>
    <input type="submit" value="Submit" />
</form>

<?php
// Display user list only if it hasn't been displayed after form submission
do_action('users_list');

get_footer();
?>