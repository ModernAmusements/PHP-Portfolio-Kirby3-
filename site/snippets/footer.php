<?php

/**
 * Snippets are a great way to store code snippets for reuse or to keep your templates clean.
 * in loops or simply to keep your templates clean.
 * This footer snippet is reused in all templates. In fetches information from the `site.txt` content file
 * and from the `about` page.
 * More about snippets: https://getkirby.com/docs/guide/templates/snippets
 */
?>

<cell-r span=row>
  <footer style="margin-top:2.25rem">

    <h3>
      <a href="<?= url() ?>"><?= $site->title() ?>
    </h3>
    <div class="text-right">
      <p><?= date('Y') ?> &copy; All Rights Reserved</p>
    </div>
    </a>
  </footer>
</cell-r>
</grid-r>







<!-- <script>
  $(".work-content").each(function() {
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
</script> -->

<?= js('assets/js/scripts.js') ?>
</body>

</html>