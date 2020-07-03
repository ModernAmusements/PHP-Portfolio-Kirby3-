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
<div id="filter">
  <div class="barba-container" data-namespace="index-page">
    <main id="index">

      <nav class="categories">
        <button class="categories-title">
          <span>Filter </span>
            <svg version="1.1" width="11px" height="11px" viewBox="0 0 11 11"
                xmlns="http://www.w3.org/2000/svg">
                <g fill="none" fill-rule="evenodd">
                <g transform="translate(-80 -112)">
                <g transform="translate(40 109)">
                <g transform="translate(40 3)">
                <circle cx="5.5" cy="5.5" r="5.5" fill="#000" />
                <rect class="vertical" id="a" x="5" y="2" width="1" height="7" fill="#fff" />
                <rect transform="translate(5.5 5.5) rotate(90) translate(-5.5 -5.5)" x="5" y="2"
                      width="1" height="7" fill="#fff" />
                </g>
                </g>
                </g>
                </g>
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
          <div class="post-header" id="information-handler">
            <!-- (TITLE) ------------------------------------->
            <h3>
            <a href="<?= $note->url() ?>"><?= $note->title() ?></a>
            </h3>
            <!-- (CLIENT) ------------------------------------->
            <h4><?= $note->client()->kt() ?></h4>
            <!-- (FIELD) ------------------------------------->
            <?php foreach ($note->tags()->kt() as $tag): ?>
              <h4 class="medium"><?= $tag ?></h4>
            <?php endforeach ?>
            <!-- (YEAR) ------------------------------------->
            <div class="flex">
            <p class="right"><time><?= $note->date()->toDate('Y') ?>
            </time></p>
            <svg viewBox="0 0 50 50" >
                <style type="text/css">
                    .st0plus {
                        fill: none;
                        stroke: #999;
                        stroke-linecap: round;
                        stroke-width: 2px;
                    }
                </style>
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
                      poster="">
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
                          alt=""
                          data-jslghtbx="<?= $cover->url() ?>"
                          data-jslghtbx-group="mygroup0"
                          data-jslghtbx-caption="Henry Ponder &#8216;Home Poems&#8217;">
                  <?php endif ?>



                  <?php foreach ($note->images()->template('note-image') as $image): ?>
                     <img class="jslghtbx-thmb"
                          src="<?= $image->url() ?>"
                          alt=""
                          data-jslghtbx="<?= $image->url() ?>"
                          data-jslghtbx-group="mygroup0"
                          data-jslghtbx-caption="Henry Ponder &#8216;Home Poems&#8217;">

                  <?php endforeach ?>

                     
                          <!-- <img class="jslghtbx-thmb "
                          src="/img/DSC_0101.jpg"
                          alt=""
                          data-jslghtbx="/img/DSC_0101.jpg"
                          data-jslghtbx-group="mygroup0"
                          data-jslghtbx-caption="Henry Ponder &#8216;Home Poems&#8217;"> -->
       
                  </figure>
                  <div class="slider-controls">
                      <button class="slider-control arrow-left">Left</button>
                      <button class="slider-control arrow-right">Right</button>
                  </div> 
                  <ul class="current-indicator">
                      <li class="active">Slide 1</li>
                      <li class="">Slide 2</li>
                      <li class="">Slide 3</li>
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
    </main>
  </div>
</div>

<?php snippet('footer') ?>