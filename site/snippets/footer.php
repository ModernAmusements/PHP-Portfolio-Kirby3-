<?php

/**
 * Snippets are a great way to store code snippets for reuse or to keep your templates clean.
 * in loops or simply to keep your templates clean.
 * This footer snippet is reused in all templates. In fetches information from the `site.txt` content file
 * and from the `about` page.
 * More about snippets: https://getkirby.com/docs/guide/templates/snippets
 */
?>

</div>
<footer>
  <h3>
    <a href="<?= url() ?>"><?= $site->title() ?>
  </h3>
  <div class="text-right">
    <p><?= date('Y') ?> &copy; All Rights Reserved</p>
  </div>
  </a>
</footer>


<script>
  //Reload Page when "Go Back" button browser to prevent select option bug
  window.addEventListener("pageshow", function(event) {
    var historyTraversal = event.persisted || (typeof window.performance != "undefined" && window.performance.navigation.type === 2);
    if (historyTraversal) {
      window.location.reload();
    }
  });


  $("#information-handler .flex").click(function() {
    $(this).toggleClass('open');
    $(this).parent().next('#collection-information').slideToggle();
  });
  

  $("#information-handler svg").click(function() {
    $(this).toggleClass('open');
  });

  setTimeout(function() {
    $(".post-header").click(function() {
      $(this).toggleClass('remove-line');
    });
  }, 250);
  
</script>

<?= js('assets/js/libs.js') ?>

<?= js('assets/js/main.js') ?>

<?= js('assets/js/scripts.js') ?>


</body>


</html>