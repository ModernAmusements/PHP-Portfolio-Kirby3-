<?php snippet('header') ?>
<div class="about-page">
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
  <section class="about-page">
    <section class="work-subpage-content">
      <article class="subpage-information">
        <div class="subpage-meta">
          <p class="small">Block A</p>
          <h2 class="large title"><?= $page->about() ?></h2>
        </div>
        <div class="subpage-description">
          <p class="small">Block B</p>
          <h3 class="large"><?= $page->info() ?></h3>
        </div>
        <div class="subpage-concept">
          <p class="small">Block C</p>
          <h3 class="large"><?= $page->cv() ?></h3>
        </div>
        <div class="subpage-capabilities">
          <p class="small"><?= $page->capabilitiesHeading() ?></p>
          <ul>
            <?php foreach ($page->capabilities()->toStructure() as $profile): ?>
            <li>
              <h3 class="large"><?= $profile->capabilities() ?></h3>
            </li>
            <?php endforeach ?>
          </ul>
        </div>
        <div class="subpage-contact">
          <p class="small">Get In Touch</p>
          <h3 class="large">
            <?= $page->street() ?><br />
            <?= $page->zip() ?>
            <?= $page->city() ?><br />
            <?= $page->country() ?>
          </h3>
          <h3 class="large">
            Email:
            <?= Html::email($page->email()) ?><br />
            Phone:
            <?= Html::tel($page->phone()) ?><br />
          </h3>
        </div>        
        <?php if ($image = $page->image()->resize(600)): ?>
        <article class="work-images">
        <img class="lazy" data-src="<?= $image->url() ?>" alt="<?= $image->alt() ?>" />
          <?php endif ?>
          <div class="work-legend">
            <h3 class="large"><?= $page->company() ?></h3>
            <h3 class="flex-start large">
              Designer<br />
              Enjoying VR
            </h3>
          </div>
        </article>
      </article>
    </section>
  </section>
</main>

<?php snippet('footer') ?>
