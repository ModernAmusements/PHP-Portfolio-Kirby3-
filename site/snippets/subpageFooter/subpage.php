<!-- FOOTER -->
<footer>
    <section class="cta">
        <h1>Do You NEED A Visual Translator for you Project?</h1>
        <svg viewBox="0 0 402 42" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M397 23.5002H0V18.5002H397V23.5002Z" />
            <path d="M398.506 17.6775L401.335 20.5059L380.828 41.012L378 38.1836L398.506 17.6775Z" />
            <path d="M401.335 20.5059L398.506 23.3345L378 2.82843L380.828 0L401.335 20.5059Z" />
        </svg>
        <div class="buttons">
            <a href="#fffModal" category="header-navigation" action="home" label="consultation-modal" rel="modal:open">
                <button class="btn-large consultation">HIT ME UP</button>
            </a>
        </div>
    </section>
    <section id="mobile">
        <article class="information">
            <div class="row-1">
                <strong><p><?= date('Y') ?></p></strong>
            </div>
            <div class="row-2">
                <a aria-label="Read more about Seminole tax hike" href="test"><p>Develop</p></a>
                <a aria-label="Read more about Seminole tax hike" href="test"><p>Shady Tawfik</p></a>
                <p>All Rights Reserved©</p>
            </div>
        </article>
        <article class="information-1">
            <div class="row-1">
                <strong><p>Follow Me</p></strong>
            </div>
            <div class="row-2">
            <?php foreach ($site->social()->toStructure() as $profile): ?>
                <a aria-label="Read more about Seminole tax hike" rel="noreferrer" href="<?= $profile->link() ?>"><p><?= $profile->platform() ?></p></a>
            <?php endforeach ?>
            </div>
        </article>
        <article class="information-2">
            <div class="row-1">
                <strong> <p>Work with Me</p> </strong>
            </div>
            <div class="row-2">
                <a aria-label="Read more about Seminole tax hike" href="<?= $site->email()->url() ?>"> <p><?= Html::email($site->email()) ?></p></a>
            </div>
        </article>
        <article class="information-3">
            <div class="row-1">
                <strong> <p>Write about me</p></strong>
            </div>
            <div class="row-2">
                <a aria-label="Read more about Seminole tax hike" href="<?= $site->emailPress()->url() ?>"><p><?= Html::email($site->emailPress()) ?></p></a>
            </div>
        </article>
        <article class="information-4">
            <div class="row-1">
                <strong><p>Legal</p></strong>
            </div>
            <div class="row-2">
              <a aria-label="Read more about Seminole tax hike" href="/imprint"><p>Datenschutz</p></a>
              <a aria-label="Read more about Seminole tax hike" href="/imprint"><p>Impressum</p></a>
              <a aria-label="Read more about Seminole tax hike" href="test"><p><?= $site->title() ?></p></a>
            </div>
        </article>
    </section>
    <section id="desktop">
        <article class="information">
            <div class="row-1">
                <strong><p><?= date('Y') ?></p></strong>
            </div>
            <div class="row-2">
                <a aria-label="Read more about Seminole tax hike" href="/test"><p>Develop</p></a>
                <a aria-label="Read more about Seminole tax hike" href="/test"><p>Shady Tawfik</p></a>
                <p>All Rights Reserved©</p>
            </div>
        </article>
        <article class="information-1">
            <div class="row-1">
                <strong><p>Follow me</p></strong>
            </div>
            <div class="row-2">
              <?php foreach ($site->social()->toStructure() as $profile): ?>
                  <a aria-label="Read more about Seminole tax hike" rel="noreferrer" href="<?= $profile->link() ?>" target="_blank"><p><?= $profile->platform() ?></p></a>
              <?php endforeach ?>
            </div>
            <br>
            <strong>
                <p>Legal</p>
            </strong>
            </div>
            <div class="row-2">
              <a aria-label="Read more about Seminole tax hike" href="/imprint"><p>Datenschutz</p></a>
              <a aria-label="Read more about Seminole tax hike" href="/imprint"><p>Impressum</p></a>
            </div>
        </article>
        <article class="information-2">
            <div class="row-1">
                <strong> <p class="medium">Work With Me</p> </strong>
            </div>
            <div class="row-2">
              <a aria-label="Read more about Seminole tax hike" href="<?= $site->email()->url() ?>"><p><?= Html::email($site->email()) ?></p></a>
              <a aria-label="Read more about Seminole tax hike" href="<?= $site->phone()->url() ?>"><p><?= Html::tel($site->phone()) ?></p></a>
            </div>
            <br>
            <strong>
                <p class="medium">Write About Me</p>
            </strong>
            </div>
            <div class="row-2">
              <a aria-label="Read more about Seminole tax hike" href="<?= $site->emailPress()->url() ?>"><p><?= Html::email($site->emailPress()) ?></p></a>
            </div>
        </article>
    </section>
</footer>
<!-- POP-UP MODAL -->
<?php snippet('subpageFooter/popUpSubpage') ?>
<?= js('assets/js/libs.js') ?>
<?= js('assets/js/main.js', ['async' => false, 'defer' => true ]) ?>
</body>
</html>