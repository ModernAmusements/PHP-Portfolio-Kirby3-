<footer>
    <section id="mobile">
    <article class="information">
      <div class="row-1">
        <strong>
          <p class="medium"><?= date('Y') ?></p>
        </strong>
      </div>
      <div class="row-2">
        <a><p>Develop</p></a>
        <a><p>Shady Tawfik</p></a>
        <p>All Rights Reserved©</p>
      </div>
    </article>
    <article class="information-1">
      <div class="row-1">
        <strong>
          <p class="medium">Follow Me</p>
        </strong>
      </div>
      <div class="row-2">
        <a><p>Instagram</p></a>
        <a><p>Behance</p></a>
      </div>
    </article>
    <article class="information-2">
      <div class="row-1">
        <strong>
          <p class="medium">Work with Me</p>
        </strong>
      </div>
      <div class="row-2">
        <a><p>info@FFFCORP.de</p></a>
      </div>
    </article>
    <article class="information-3">
      <div class="row-1">
        <strong>
          <p class="medium">Write about me</p>
        </strong>
      </div>
      <div class="row-2">
        <a><p>press@FFFCORP.de</p></a>
      </div>
    </article>
    <article class="information-4">
      <div class="row-1">
        <strong>
          <p class="medium">Legal</p>
        </strong>
      </div>
      <div class="row-2">
        <a href="<?= url() ?>"><?= $site->title() ?><p>Datenschutz</p></a>
        <a><p>Impressum</p></a>
      </div>
    </article>
  </section>
  <section id="desktop">
    <article class="information">
      <div class="row-1">
        <strong>
          <p class="medium">2020</p>
        </strong>
      </div>
      <div class="row-2">
        <a><p>Develop</p></a>
        <a><p>Shady Tawfik</p></a>
        <p>All Rights Reserved©</p>
      </div>
    </article>
    <article class="information-1">
      <div class="row-1">
        <strong>
          <p class="medium">Follow me</p>
        </strong>
      </div>
      <div class="row-2">
        <a><p>Instagram</p></a>
        <a><p>Behance</p></a>
      </div>
      <br>
      <strong>
        <p class="medium">Legal</p>
      </strong>
      </div>
      <div class="row-2">
        <a><p>Datenschutz</p></a>
        <a><p>Impressum</p></a>
      </div>
    </article>
   <article class="information-2">
      <div class="row-1">
        <strong>
          <p class="medium">Work With Me</p>
        </strong>
      </div>
      <div class="row-2">
        <a><p>Info@fffcorp.de</p></a>
        <a><p>@fffcorp</p></a>
      </div>
      <br>
      <strong>
        <p class="medium">Write About Me</p>
      </strong>
      </div>
      <div class="row-2">
        <a><p>Press@fffcorp.de</p></a>
      </div>
      </article> 
    </section>
  </footer>
<?= js('assets/lightbox/lightbox.js') ?>
<?= js('assets/js/libs.js') ?>
<?= js('assets/js/main.js') ?>
<script>
    // Lightbox
    let box = null;
    let logo = document.querySelector(".logo");

    Array.from(document.querySelectorAll("[data-lightbox]")).forEach(element => {
      element.onclick = (e) => {
        e.preventDefault();
        box = basicLightbox.create(`<img src="${element.href}">`);
        box.show();
      };
    });

    logo.onclick = (e) => {
      e.stopPropagation();
    };

    document.onclick = () => {
      logo.removeAttribute("open");
    };

    document.onkeydown = (e) => {
      if (e.key === "Escape") {
        if (box) {
          box.close();
        }
        logo.removeAttribute("open");
      }
    }
</script>
</body>
</html>