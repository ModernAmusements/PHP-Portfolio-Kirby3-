<?php

/**
 * Templates render the content of your pages.
 *   <?php snippet('intro') ?> 
 * They contain the markup together with some control structures like loops or if-statements.
 * The `$page` variable always refers to the currently active page. 
 * To fetch the content from each field we call the field name as a method on the `$page` object, e.g. `$page->title()`.
 * This template lists all all the subpages of the `notes` page with their title date sorted by date and links to each subpage.
 * Snippets like the header, footer and intro contain markup used in multiple templates. They also help to keep templates clean.
 * More about templates: https://getkirby.com/docs/guide/templates/basics
 */
?>
<?php snippet('header') ?>


<nav class="categories" id="filter">
  <button class="categories-title">
    <span>Filter</span>
      <svg class="p-left" version="1.1" width="11px" height="11px" viewBox="0 0 11 11">
          <circle cx="5.5" cy="5.5" r="5.5" />
          <rect class="vertical" id="a" x="5" y="2" width="1" height="7"/>
          <rect transform="translate(5.5 5.5) rotate(90) translate(-5.5 -5.5)" x="5" y="2"
                width="1" height="7" />
      </svg>
  </button>
  <!-- (FILTER) ---------------------------------------------------------------Filter---->
  <ul>
    <li class="category-li active">
      <button class="button category-button" data-slug="all">
        All</button>
    </li>
    <li class="category-li">
      <button class="button category-button" data-slug="Film">
        Film</button>
      </li>
    <li class="category-li">
      <button class="button category-button" data-slug="Documentary">
        Documentary</button>
      </li>
    <li class="category-li">
      <button class="button category-button" data-slug="Advertising">
        Advertising</button>
      </li>
    <li class="category-li">
      <button class="button category-button" data-slug="Animation">
        Animation</button>
      </li>
    <li class="category-li">
      <button class="button category-button" data-slug="Experiments">
        Experiments</button>
      </li>
  </ul>
</nav>


<div class="post-legend">
  <p>Title</p>
  <p>Client</p>
  <p>Field</p>
  <p>Year</p>
</div>


<?php foreach ($page->children()->listed()->sortBy('date', 'desc') as $note) : ?>
  <article class="post" data-categories="<?= $tags = implode(' ', $note->tags()->split(','));?> all">
    <div id="information-handler">
      <div class="post-header">
      
        <!-- (TITLE) ------------------------------------->
        <h3>
        <?= $note->title() ?>
        </h3>
        <!-- (CLIENT) ------------------------------------->
        <h4 id="open-work"><?= $note->client()->kt() ?></h4>
        <!-- (FIELD) ------------------------------------->
        <?php foreach ($note->tags()->kt() as $tag): ?>
          <h4 class="medium"><?= $tag ?></h4>
        <?php endforeach ?>
        <!-- (YEAR) ------------------------------------->
        

          <p><time><?= $note->date()->toDate('Y') ?>
          </time></p>
          
          <svg id="open-work" viewBox="0 0 50 50" >
              <line class="st0plus" x1="49.5" y1="25" x2="0.5" y2="25" />
              <line class="st0plus" x1="25" y1="49.5" x2="25" y2="0.5" />
          </svg>

        
      </div>
    </div>

      
    <div id="collection-information">
      <div class="post-content">
        <div class="post-gallery">
          <?php foreach ($note->videos()->template('note-videos') as $image): ?>
            <div class="video-wrapper post-video" data-state="not-init">
            <video playsinline preload="metadata"
                poster="<?= $image->url() ?>">
                <source
                    src="<?= $image->url() ?>"
                    type="video/mp4">
            </video>
            <button class="intro-play"><span>Play</span></button>
            <div class="vid-controls">
                <button class="vid-icon vid-playpause" data-state="play">Play</button>
                <button class="vid-icon vid-mute" data-state="mute">Sound</button>
                <button class="vid-icon vid-fullscreen"
                    data-state="go-fullscreen">Fullscreen</button>
                <div class="vid-progress-wrap" max="14.53756">
                    <div class="vid-progress-bar" data-value="0" min="0"></div>
                </div>
            </div>
          </div>
          <?php endforeach ?> 
        <div class="slider-wrapper">
        <figure class="slider slider-0">


        <?php if ($cover = $note->cover()) : ?>
        <img class="jslghtbx-thmb active"
                src="<?= $cover->url() ?>"
                alt="<?= $cover->alt() ?>"
                data-jslghtbx="<?= $cover->url() ?>"
                data-jslghtbx-group="mygroup0"
                data-jslghtbx-caption="<?= $cover->caption() ?>">
        <?php endif ?>



        <?php foreach ($note->images()->template('note-image') as $image): ?>
            <img class="jslghtbx-thmb"
                src="<?= $image->url() ?>"
                alt="<?= $image->alt() ?>"
                data-jslghtbx="<?= $image->url() ?>"
                data-jslghtbx-group="mygroup0"
                data-jslghtbx-caption="<?= $image->caption() ?>">

        <?php endforeach ?>

  
            </figure>
            <div class="slider-controls">
                <svg class="slider-control arrow-left" id="btnArrow" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" >
                <polyline points="10.5 5 13.5 8 10.5 11" transform="scale(-1,1) translate(-16,0)"></polyline>

                Left</svg>
                <svg class="slider-control arrow-right" id="btnArrow" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" >
                <polyline  points="10.5 5 13.5 8 10.5 11"></polyline>

                Right</svg>
            </div>
            
            
            <ul class="current-indicator">
                <?php if ($cover = $note->cover()) : ?>
                  <li class="active"><?= $cover->caption() ?></li>
                <?php endif ?>
                <?php foreach ($note->images()->template('note-image') as $image): ?>
                  <li class=""><?= $image->caption() ?></li>
                <?php endforeach ?>
            </ul>
        </div>
        </div>
          <div class="post-info">
            <h4>Beschreibung:</h4>
            <p>Kormelink is a delicate titling Roman serif which pays homage to a smorgasbord of
              historical origins. Its underlying Roman architecture is a nod to Victor Lardent's
              renowned 1931 typeface 'Times New Roman' whilst its inherent
              grandeur is a hark back to the opulence of the Renaissance and Baroque.</p>
          <h4>Mitwirkende:</h4>
          <ol>
            <li><p>Peter Feldbuch</p></li>
            <li><p>Garnier Eecout</p></li>
            <li><p>Garnier Eecout</p></li>
          </ol>
          <h4>Beschreibung:</h4>
            <p>Kormelink is a delicate titling Roman serif which pays homage to a smorgasbord of
              historical origins. Its underlying Roman architecture is a nod to Victor Lardent's
              renowned 1931 typeface 'Times New Roman' whilst its inherent
              grandeur is a hark back to the opulence of the Renaissance and Baroque.
              Kormelink is a delicate titling Roman serif which pays homage to a smorgasbord of
              historical origins. Its underlying Roman architecture is a nod to Victor Lardent's
              renowned 1931 typeface 'Times New Roman' whilst its inherent
              grandeur is a hark back to the opulence of the Renaissance and Baroque.
              Kormelink is a delicate titling Roman serif which pays homage to a smorgasbord of
              historical origins. Its underlying Roman architecture is a nod to Victor Lardent's
              renowned 1931 typeface 'Times New Roman' whilst its inherent
              grandeur is a hark back to the opulence of the Renaissance and Baroque.</p>
          </div>
        </div>
      </div>
      </article>
<?php endforeach ?>


<?php snippet('footer') ?>