<?php
/**
 * Snippets are a great way to store code snippets for reuse or to keep your templates clean.
 * in loops or simply to keep your templates clean.
 * This footer snippet is reused in all templates. In fetches information from the `site.txt` content file
 * and from the `about` page.
 * More about snippets: https://getkirby.com/docs/guide/templates/snippets
 */
?>
<div class="grid">
<footer>
  <h3>
    <a href="<?= url() ?>"><?= $site->title() ?>
  </h3>
  <div class="text-right">
    <p><?= date('Y') ?> &copy; All Rights Reserved</p>
  </div>
  </a>
</footer>





</div>


<?= js('assets/js/script.js') ?>




<?= js('assets/js/global.js') ?>
<?= js('assets/js/libs.js') ?>
<?= js('assets/js/scripts.js') ?>
<?= js('assets/js/main.js') ?>







</body>
</html>