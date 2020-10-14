<?php snippet('header') ?>
<div class="imprint-page">
  <section class="cover-animation">
    <div class="type-loop">
      <span class="cover-heading loop-right"
        >––––<?= $page->heading()->html() ?>––––––––<?= $page->heading()->html()?>––––––––<?= $page->heading()->html()
        ?>––––––––<?= $page->heading()->html() ?>––––––––<?= $page->heading()->html()?>––––––––<?= $page->heading()->html()
        ?>––––</span
      >
    </div>
    <div class="type-loop">
      <span class="cover-heading loop-left"
        >––––<?= $page->subheading()->html() ?>––––––––<?= $page->subheading()->html()?>––––––––<?= $page->subheading()->html()
        ?>––––––––<?= $page->subheading()->html() ?>––––––––<?= $page->subheading()->html()?>––––––––<?= $page->subheading()->html()
        ?>––––</span
      >
    </div>
  </section> 
</div>
<main>
  <section class="imprint-page">
    <section class="work-subpage-content">
      <article class="subpage-information">
        <div class="subpage-meta">
          <p class="sub-sub-heading small">Diensteanbieter gemäß § 5 TMG</p>
          <h2 class="medium title"><?= $page->about()->kt() ?></h2>
        </div>
        <div class="subpage-description">
          <p class="sub-sub-heading small">I. Haftungsausschluss</p>
          <h3 class="medium"><?= $page->info()->kt() ?></h3>
        </div>
        <div class="subpage-concept">
          <p class="sub-sub-heading small">II. Urheberrecht</p>
          <h3 class="medium"><?= $page->cv()->kt() ?></h3>
        </div>
        <div class="subpage-capabilities">
          <p class="sub-sub-heading small">III. Datenschutz</p>
              <h3 class="large"><?= $page->capabilities()->kt() ?></h3>
        </div>
        <div class="subpage-contact">
          <p class="sub-sub-heading small">IV. Cookies</p>
          <h3 class="large"><?= $page->cookies()->kt() ?></h3>
        </div>        
      </article>
      <article class="subpage-information">
        <div class="subpage-meta">
          <p class="sub-sub-heading small">Diensteanbieter gemäß § 5 TMG</p>
          <h2 class="medium title"><?= $page->googleAnalytics()->kt() ?></h2>
        </div>
        <div class="subpage-description">
          <p class="sub-sub-heading small">I. Google Analytics</p>
          <h3 class="medium"><?= $page->googleAnalyticsConsent()->kt() ?></h3>
        </div>
        <div class="subpage-concept">
          <p class="sub-sub-heading small">II. Widerspruch Werbe-Mails</p>
          <h3 class="medium"><?= $page->noConsent()->kt() ?></h3>
        </div>
        <div class="subpage-capabilities">
          <p class="sub-sub-heading small">III. Zweck der Verarbeitung</p>
              <h3 class="large"><?= $page->reason()->kt() ?></h3>
        </div>
        <div class="subpage-contact">
          <p class="sub-sub-heading small">IV. Instagram</p>
          <h3 class="large"><?= $page->instagram()->kt() ?></h3>
        </div>        
      </article>
    </section>
  </section>
  <!-- <script>
  	$('.subpage-information').find('div').children('p').addClass('tags');
</script> -->
</main>

<?php snippet('footer') ?>
