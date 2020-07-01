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

<?= js('assets/js/scripts.js') ?>

<?= js('assets/js/swiper.min.js') ?>
<script>
  $(".post-image").each(function() {
    var $status = $(this).find(".text__count");
    var $slider = $(this).find(".slider");

    $slider.on("init reInit afterChange", function(
      event,
      slick,
      currentSlide,
      nextSlide
    ) {
      var i = (currentSlide ? currentSlide : 0) + 1;
      $status.text(i + "/" + slick.slideCount);
    });

    $slider.slick({
      speed: 0,
      arrows: true,
      nextArrow: '<div class="slider__next"></div>',
      prevArrow: '<div class="slider__prev"></div>',
    });
    
  });
</script>

</body>


</html>