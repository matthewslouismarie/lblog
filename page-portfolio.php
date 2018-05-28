<?php

the_post();

get_header();
?>

<main class="main-content">
  <h1 class="document-title"><?= get_the_title() ?></h1>
  <?= get_the_content() ?>
</main>

<?php
get_footer();
