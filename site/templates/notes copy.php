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


<div id="barba-wrapper">
         <div class="barba-container one left" data-namespace="index-page">
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
                <li class="category-li active"><button class="button category-button" data-slug="all">All</button>
                </li>
                <li class="category-li"><button class="button category-button" data-slug="film">Film</button></li>
                <li class="category-li"><button class="button category-button"
                        data-slug="documentary">Documentary</button></li>
                <li class="category-li"><button class="button category-button"
                        data-slug="advertising">Advertising</button></li>
                <li class="category-li"><button class="button category-button"
                        data-slug="animation">Animation</button></li>
                <li class="category-li"><button class="button category-button"
                        data-slug="experiments">Experiments</button></li>
            </ul>
        </nav>
        <!-- Section 01 (Meta) ---------------------------------------------------------------Experiments---->
        <article class="post" data-categories="experiments all">
            <header class="post-header">
                <h3 class="post-title">Henry Ponder &#8216;Home Poems&#8217;</h3>
                <span class="post-meta">Experiments</span>
                <img width="720" height="405"
                    src="https://iaingrantsound.com/wp-content/uploads/2020/05/HP-Home_Featured-720x405.jpg"
                    class="post-thumbnail wp-post-image" alt=""
                    srcset="https://iaingrantsound.com/wp-content/uploads/2020/05/HP-Home_Featured-720x405.jpg 720w, https://iaingrantsound.com/wp-content/uploads/2020/05/HP-Home_Featured-960x540.jpg 960w, https://iaingrantsound.com/wp-content/uploads/2020/05/HP-Home_Featured-1440x810.jpg 1440w, https://iaingrantsound.com/wp-content/uploads/2020/05/HP-Home_Featured-768x432.jpg 768w, https://iaingrantsound.com/wp-content/uploads/2020/05/HP-Home_Featured-1536x864.jpg 1536w, https://iaingrantsound.com/wp-content/uploads/2020/05/HP-Home_Featured.jpg 1920w"
                    sizes="(max-width: 720px) 100vw, 720px" />
            </header>
        </article>
      
          
            <hr>
            
            <?php foreach ($page->children()->listed()->sortBy('date', 'desc') as $note) : ?>
                <div class="post" data-categories="<?= $note->tags() ?>">
                    <cell-r span=2 span-s=row>  
                      <h3 >
                        <a href="<?= $note->url() ?>"><?= $note->title() ?></a>
                      </h3>
                    </cell-r>
                    <cell-r span=5-6 span-s=1-2>
                    <?php foreach ($note->tags()->split(',') as $tag): ?>
                        <p><?= $tag ?></p>
                      <?php endforeach ?>
                    </cell-r>
                    <cell-r span=1>
                      <p>Art-Direction</p>
                    </cell-r>
                    <cell-r span=1>
                      <div class="text-right">
                        <p><time><?= $note->date()->toDate('Y') ?></time></p>
                      </div>
                    </cell-r>

                  <hr>
                </div>
              <?php endforeach ?>

              </main>
        <!-- Barba-Wrapper (JS) --------------------------------------------------------------WRAPPER----->
    </div>
        </div>

<?php snippet('footer') ?>