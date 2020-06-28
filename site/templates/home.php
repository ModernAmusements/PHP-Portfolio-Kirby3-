<?php
/**
 * Templates render the content of your pages. 
 * They contain the markup together with some control structures like loops or if-statements.
 * The `$page` variable always refers to the currently active page. 
 * To fetch the content from each field we call the field name as a method on the `$page` object, e.g. `$page->title()`. 
 * This home template renders content from others pages, the children of the `photography` page to display a nice gallery grid.
 * Snippets like the header and footer contain markup used in multiple templates. They also help to keep templates clean.
 * More about templates: https://getkirby.com/docs/guide/templates/basics
 */
?>

<?php snippet('header') ?>


            <div id="information-handler">
                <article class="post">
                <div class="post-header">
                    <!-- (TITLE) ------------------------------------->
                    <h3>
                     Projekt Darkmode
                    </h3>
                    <!-- (CLIENT) ------------------------------------->
                    <h4>Nasa</h4>
                    <!-- (FIELD) ------------------------------------->
                    
                    <h4>MoneyMaker</h4>
                   
                    <!-- (YEAR) ------------------------------------->
                    <p class="right">2019
                    </time></p>
                </div>
            </article>
                <svg viewBox="0 0 50 50">
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

            <div id="collection-information">
            <p>Kormelink is a delicate titling Roman serif which pays homage to a smorgasbord of
            historical origins. Its underlying Roman architecture is a nod to Victor Lardent's
            renowned 1931 typeface 'Times New Roman' whilst its inherent
            grandeur is a hark back to the opulence of the Renaissance and Baroque.</p>


            </div>

        </div>
   


<?php snippet('footer') ?>
