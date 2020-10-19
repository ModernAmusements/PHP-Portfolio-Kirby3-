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
         <?= $page->about()->kt() ?>
        </div>
        <div class="subpage-description">
          <p class="sub-sub-heading small">I. Haftungsausschluss</p>
        <?= $page->info()->kt() ?>
        </div>
        <div class="subpage-concept">
          <p class="sub-sub-heading small">II. Urheberrecht</p>
         <?= $page->cv()->kt() ?>
        </div>
        <div class="subpage-capabilities">
          <p class="sub-sub-heading small">III. Datenschutz</p>
             <?= $page->capabilities()->kt() ?>
        </div>
        <div class="subpage-contact">
          <p class="sub-sub-heading small">IV. Cookies</p>
        <?= $page->cookies()->kt() ?>
        </div>        
      </article>
      <article class="subpage-information">
        <div class="subpage-meta">
          <p class="sub-sub-heading small">Diensteanbieter gemäß § 5 TMG</p>
        <?= $page->googleAnalytics()->kt() ?>
        </div>
        <div class="subpage-description">
          <p class="sub-sub-heading small">I. Google Analytics</p>
         <?= $page->googleAnalyticsConsent()->kt() ?>
        </div>
        <div class="subpage-concept">
          <p class="sub-sub-heading small">II. Widerspruch Werbe-Mails</p>
         <?= $page->noConsent()->kt() ?>
        </div>
        <div class="subpage-capabilities">
          <p class="sub-sub-heading small">III. Zweck der Verarbeitung</p>
              <?= $page->reason()->kt() ?>
        </div>
        <div class="subpage-contact">
          <p class="sub-sub-heading small">IV. Instagram</p>
          <?= $page->instagram()->kt() ?>
        </div>        
      </article>
    </section>
  </section>
  <!-- <script>
  	$('.subpage-information').find('div').children('p').addClass('tags');
</script> -->
</main>

<?php snippet('footer') ?>
