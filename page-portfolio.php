<?php

the_post();

get_header();
?>

<main class="main-content">
<?= get_the_title() ?>
<?= get_the_content() ?>
</main>

<?php
get_footer();
