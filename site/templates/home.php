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
                                            <rect class="vertical" id="a" x="5" y="2" width="1" height="7"
                                                fill="#fff" />
                                            <rect transform="translate(5.5 5.5) rotate(90) translate(-5.5 -5.5)" x="5"
                                                y="2" width="1" height="7" fill="#fff" />
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </button>
                    <!-- (FILTER) ---------------------------------------------------------------Filter---->
                    <ul>
                        <li class="category-li active"><button class="button category-button"
                                data-slug="all">All</button></li>
                        <li class="category-li"><button class="button category-button" 
                            data-slug="film">Film</button></li>
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
                <article class="post with-video with-slider" data-categories="experiments all">
                    <header class="post-header">
                        <h3 class="post-title">Henry Ponder &#8216;Home Poems&#8217;</h3>
                        <span class="post-meta">Experiments</span>
                        <img width="720" height="405"
                            src="https://iaingrantsound.com/wp-content/uploads/2020/05/HP-Home_Featured-720x405.jpg"
                            class="post-thumbnail wp-post-image" alt=""
                            srcset="https://iaingrantsound.com/wp-content/uploads/2020/05/HP-Home_Featured-720x405.jpg 720w, https://iaingrantsound.com/wp-content/uploads/2020/05/HP-Home_Featured-960x540.jpg 960w, https://iaingrantsound.com/wp-content/uploads/2020/05/HP-Home_Featured-1440x810.jpg 1440w, https://iaingrantsound.com/wp-content/uploads/2020/05/HP-Home_Featured-768x432.jpg 768w, https://iaingrantsound.com/wp-content/uploads/2020/05/HP-Home_Featured-1536x864.jpg 1536w, https://iaingrantsound.com/wp-content/uploads/2020/05/HP-Home_Featured.jpg 1920w"
                            sizes="(max-width: 720px) 100vw, 720px" />
                    </header>
                    <!-- Section 01 (Content) ------------------------------------------------------------------->
                    <section class="post-content">
                        <div class="wyswig post-wyswig">
                            <p><strong>CLIENT</strong>: Naresh Ramchandani @ Pentagram</p>
                            <p><strong>ROLE</strong>: Foley recording, Sound Design and Mix</p>
                            <p><strong>DESCRIPTION</strong></p>
                            <p>Home Poems is a&nbsp;series of ten very short films featuring ten very short poems about
                                things we can consider and enjoy inside our homes.</p>
                            <p>The poems are written by Henry Ponder, a&nbsp;minor British poet who majors in finding
                                interest in the everyday. Naresh Ramchandani and team produced two films about
                                Henry&#8217;s poems ‘Mind your Head’ and ‘Henry Ponder goes
                                to Cannes’ back in 2016.</p>
                            <p>While working from home, the team returned to Henry&#8217;s work and found many poems
                                that celebrated the beauty and wonder of the ordinary things to be found in home life.
                            </p>
                            <p>The films were produced in many homes.</p>
                            <p>The poems were selected and the films were produced in Naresh&#8217;s team&#8217;s homes.
                                Nine out of the ten films were shot in the home of director Steven Qua—with
                                Oscar-winning guest director Kevin Macdonald lending a&nbsp;hand
                                by shooting &#8216;Stairs&#8217; in his home.</p>
                            <p>The music was created by Yuri Suzuki and JeanGa Becker in their homes.</p>
                            <p>The titles were created by Harry Pearce and Tom Walker in their homes. The sound was
                                mixed by Iain Grant in his home. And the poems were kindly voiced by the poet Henry
                                Ponder in his home.</p>
                            <p>Home Poems will be appearing daily @pentagramdesign over the next two weeks.</p>
                        </div>
                        <div class="post-gallery">
                            <div class="video-wrapper post-video" data-state="not-init">
                                <video playsinline preload="metadata"
                                    poster="https://iaingrantsound.com/wp-content/uploads/2020/05/HP-Home_Featured-960x540.jpg">
                                    <source
                                        src="https://iaingrantsound.com/wp-content/uploads/2020/06/ALL-FILMS-COMP-MASTER-2.mp4"
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
                            <div class="slider-wrapper">
                                <figure class="slider slider-0">
                                    <img class="jslghtbx-thmb active"
                                        src="https://iaingrantsound.com/wp-content/uploads/2020/05/HP-Home_Birds-960x540.jpg"
                                        alt=""
                                        data-jslghtbx="https://iaingrantsound.com/wp-content/uploads/2020/05/HP-Home_Birds-1440x810.jpg"
                                        data-jslghtbx-group="mygroup0"
                                        data-jslghtbx-caption="Henry Ponder &#8216;Home Poems&#8217;">
                                    <img class="jslghtbx-thmb "
                                        data-src="https://iaingrantsound.com/wp-content/uploads/2020/05/HP-Home_Biscuit-960x540.jpg"
                                        alt=""
                                        data-jslghtbx="https://iaingrantsound.com/wp-content/uploads/2020/05/HP-Home_Biscuit-1440x810.jpg"
                                        data-jslghtbx-group="mygroup0"
                                        data-jslghtbx-caption="Henry Ponder &#8216;Home Poems&#8217;">
                                    <img class="jslghtbx-thmb "
                                        data-src="https://iaingrantsound.com/wp-content/uploads/2020/05/HP-Home_Bristle-960x540.jpg"
                                        alt=""
                                        data-jslghtbx="https://iaingrantsound.com/wp-content/uploads/2020/05/HP-Home_Bristle-1440x810.jpg"
                                        data-jslghtbx-group="mygroup0"
                                        data-jslghtbx-caption="Henry Ponder &#8216;Home Poems&#8217;">
                                    <img class="jslghtbx-thmb "
                                        data-src="https://iaingrantsound.com/wp-content/uploads/2020/05/HP-Home_Crisps-960x540.jpg"
                                        alt=""
                                        data-jslghtbx="https://iaingrantsound.com/wp-content/uploads/2020/05/HP-Home_Crisps-1440x810.jpg"
                                        data-jslghtbx-group="mygroup0"
                                        data-jslghtbx-caption="Henry Ponder &#8216;Home Poems&#8217;">
                                    <img class="jslghtbx-thmb "
                                        data-src="https://iaingrantsound.com/wp-content/uploads/2020/05/HP-Home_Egg-960x540.jpg"
                                        alt=""
                                        data-jslghtbx="https://iaingrantsound.com/wp-content/uploads/2020/05/HP-Home_Egg-1440x810.jpg"
                                        data-jslghtbx-group="mygroup0"
                                        data-jslghtbx-caption="Henry Ponder &#8216;Home Poems&#8217;">
                                    <img class="jslghtbx-thmb "
                                        data-src="https://iaingrantsound.com/wp-content/uploads/2020/05/HP-Home_Sellotape-960x540.jpg"
                                        alt=""
                                        data-jslghtbx="https://iaingrantsound.com/wp-content/uploads/2020/05/HP-Home_Sellotape-1440x810.jpg"
                                        data-jslghtbx-group="mygroup0"
                                        data-jslghtbx-caption="Henry Ponder &#8216;Home Poems&#8217;">
                                    <img class="jslghtbx-thmb "
                                        data-src="https://iaingrantsound.com/wp-content/uploads/2020/05/HP-Home_Shower-960x540.jpg"
                                        alt=""
                                        data-jslghtbx="https://iaingrantsound.com/wp-content/uploads/2020/05/HP-Home_Shower-1440x810.jpg"
                                        data-jslghtbx-group="mygroup0"
                                        data-jslghtbx-caption="Henry Ponder &#8216;Home Poems&#8217;">
                                    <img class="jslghtbx-thmb "
                                        data-src="https://iaingrantsound.com/wp-content/uploads/2020/05/HP-Home_Spoon-960x540.jpg"
                                        alt=""
                                        data-jslghtbx="https://iaingrantsound.com/wp-content/uploads/2020/05/HP-Home_Spoon-1440x810.jpg"
                                        data-jslghtbx-group="mygroup0"
                                        data-jslghtbx-caption="Henry Ponder &#8216;Home Poems&#8217;">
                                    <img class="jslghtbx-thmb "
                                        data-src="https://iaingrantsound.com/wp-content/uploads/2020/05/HP-Home_Stairs-960x540.jpg"
                                        alt=""
                                        data-jslghtbx="https://iaingrantsound.com/wp-content/uploads/2020/05/HP-Home_Stairs-1440x810.jpg"
                                        data-jslghtbx-group="mygroup0"
                                        data-jslghtbx-caption="Henry Ponder &#8216;Home Poems&#8217;">
                                    <img class="jslghtbx-thmb "
                                        data-src="https://iaingrantsound.com/wp-content/uploads/2020/05/HP-Home_Tea2-960x540.jpg"
                                        alt=""
                                        data-jslghtbx="https://iaingrantsound.com/wp-content/uploads/2020/05/HP-Home_Tea2-1440x810.jpg"
                                        data-jslghtbx-group="mygroup0"
                                        data-jslghtbx-caption="Henry Ponder &#8216;Home Poems&#8217;">
                                </figure>
                                <div class="slider-controls">
                                    <button class="slider-control arrow-left">Left</button>
                                    <button class="slider-control arrow-right">Right</button>
                                </div>
                                <ul class="current-indicator">
                                    <li class="active">Slide 1</li>
                                    <li class="">Slide 2</li>
                                    <li class="">Slide 3</li>
                                    <li class="">Slide 4</li>
                                    <li class="">Slide 5</li>
                                    <li class="">Slide 6</li>
                                    <li class="">Slide 7</li>
                                    <li class="">Slide 8</li>
                                    <li class="">Slide 9</li>
                                    <li class="">Slide 10</li>
                                </ul>
                            </div>
                        </div>
                        <button class="close-post button">Close</button>
                    </section>
                </article>
                <!-- Section 01 (Content) ---------------------------------------------------------------END---->
                 <!-- Section 02 (Meta) ----------------------------------------------------------------Animation--->
                <article class="post with-video with-slider" data-categories="film documentary all">
                    <header class="post-header">
                        <h3 class="post-title">Red Trees</h3>
                        <span class="post-meta">Animation</span>
                        <img width="720" height="405"
                            src="https://iaingrantsound.com/wp-content/uploads/2019/11/Red-Trees_Featured-720x405.jpg"
                            class="post-thumbnail wp-post-image" alt=""
                            srcset="https://iaingrantsound.com/wp-content/uploads/2019/11/Red-Trees_Featured-720x405.jpg 720w, https://iaingrantsound.com/wp-content/uploads/2019/11/Red-Trees_Featured-960x540.jpg 960w, https://iaingrantsound.com/wp-content/uploads/2019/11/Red-Trees_Featured-768x432.jpg 768w, https://iaingrantsound.com/wp-content/uploads/2019/11/Red-Trees_Featured-1440x810.jpg 1440w, https://iaingrantsound.com/wp-content/uploads/2019/11/Red-Trees_Featured.jpg 1920w"
                            sizes="(max-width: 720px) 100vw, 720px" />
                    </header>
                    <!-- Section 02 (Content) ------------------------------------------------------------------->
                    <section class="post-content">
                        <div class="wyswig post-wyswig">
                            <p><strong>CLIENT</strong>: Marina Willer (Director)</p>
                            <p><strong>ROLE</strong>: Location Sound Recordist, Sound Design and Mix</p>
                            <p><strong>DESCRIPTION</strong></p>
                            <p>Narrated by the late Bafta award winning actor Tim Pigott-Smith, Red Trees is
                                a&nbsp;glimpse into the fear and hope that refugees experience, offering a&nbsp;timely
                                account of emigration in the face of war.</p>
                            <p>Red Trees reflects on the story of Willer&#8217;s father and grandfather, forced out of
                                Europe for their Jewish origins; how theirs was one of only twelve Jewish families to
                                survive the Nazi occupation of Prague during World
                                War Two; and how they escaped to a&nbsp;new life in Brazil where her father Alfred
                                Willer grew to become a&nbsp;successful and influential architect.</p>
                            <p>Beautifully shot by City of God’s César Charlone and Jonathan Clabburn, narrated by the
                                late Bafta award winning actor Tim Pigott-Smith, the film premiered at the 2017 Cannes
                                Film Festival and is available to watch on Netflix
                                worldwide.</p>
                            <p>Watch &#8216;Red Trees&#8217; on <a href="https://www.netflix.com/gb/title/80206758"
                                    target="_blank" rel="noreferrer noopener"
                                    aria-label="Netflix (opens in a&nbsp;new tab)">Netflix</a></p>
                        </div>
                        <div class="post-gallery">
                            <div class="video-wrapper post-video" data-state="not-init">
                                <video playsinline preload="metadata"
                                    poster="https://iaingrantsound.com/wp-content/uploads/2019/11/Red-Trees_Still3-960x540.jpg">
                                    <source
                                        src="https://iaingrantsound.com/wp-content/uploads/2019/11/Red-Trees-2017-Official-Trailer.mp4"
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
                            <div class="slider-wrapper">
                                <figure class="slider slider-1">
                                    <img class="jslghtbx-thmb active"
                                        src="https://iaingrantsound.com/wp-content/uploads/2019/11/Red-Trees_Still5-960x540.jpg"
                                        alt=""
                                        data-jslghtbx="https://iaingrantsound.com/wp-content/uploads/2019/11/Red-Trees_Still5-1440x810.jpg"
                                        data-jslghtbx-group="mygroup1" data-jslghtbx-caption="Red Trees">
                                    <img class="jslghtbx-thmb "
                                        data-src="https://iaingrantsound.com/wp-content/uploads/2019/11/Red-Trees_Still2-960x540.jpg"
                                        alt=""
                                        data-jslghtbx="https://iaingrantsound.com/wp-content/uploads/2019/11/Red-Trees_Still2-1440x810.jpg"
                                        data-jslghtbx-group="mygroup1" data-jslghtbx-caption="Red Trees">
                                    <img class="jslghtbx-thmb "
                                        data-src="https://iaingrantsound.com/wp-content/uploads/2019/11/Red-Trees_Still4-960x540.jpg"
                                        alt=""
                                        data-jslghtbx="https://iaingrantsound.com/wp-content/uploads/2019/11/Red-Trees_Still4-1440x810.jpg"
                                        data-jslghtbx-group="mygroup1" data-jslghtbx-caption="Red Trees">
                                    <img class="jslghtbx-thmb "
                                        data-src="https://iaingrantsound.com/wp-content/uploads/2019/11/Red-Trees_Still1-960x540.jpg"
                                        alt=""
                                        data-jslghtbx="https://iaingrantsound.com/wp-content/uploads/2019/11/Red-Trees_Still1-1440x810.jpg"
                                        data-jslghtbx-group="mygroup1" data-jslghtbx-caption="Red Trees">
                                </figure>
                                <div class="slider-controls">
                                    <button class="slider-control arrow-left">Left</button>
                                    <button class="slider-control arrow-right">Right</button>
                                </div>
                                <ul class="current-indicator">
                                    <li class="active">Slide 1</li>
                                    <li class="">Slide 2</li>
                                    <li class="">Slide 3</li>
                                    <li class="">Slide 4</li>
                                </ul>
                            </div>
                        </div>
                        <button class="close-post button">Close</button>
                    </section>
                </article>
                <!-- Section 02 (Content) ---------------------------------------------------------------END---->
                <!-- Section 03 (Meta) ---------------------------------------------------------------Animation---->
                <article class="post with-video with-slider" data-categories="animation all">
                    <header class="post-header">
                        <h3 class="post-title">Five Stone Of Lead</h3>
                        <span class="post-meta">Animation</span>
                        <img width="720" height="405"
                            src="https://iaingrantsound.com/wp-content/uploads/2019/11/5StoneOfLead_Featured-720x405.jpg"
                            class="post-thumbnail wp-post-image" alt=""
                            srcset="https://iaingrantsound.com/wp-content/uploads/2019/11/5StoneOfLead_Featured-720x405.jpg 720w, https://iaingrantsound.com/wp-content/uploads/2019/11/5StoneOfLead_Featured-960x540.jpg 960w, https://iaingrantsound.com/wp-content/uploads/2019/11/5StoneOfLead_Featured-768x432.jpg 768w, https://iaingrantsound.com/wp-content/uploads/2019/11/5StoneOfLead_Featured-1440x810.jpg 1440w, https://iaingrantsound.com/wp-content/uploads/2019/11/5StoneOfLead_Featured.jpg 1920w"
                            sizes="(max-width: 720px) 100vw, 720px" />
                    </header>
                    <!-- Section 03 (Content) ------------------------------------------------------------------->
                    <section class="post-content">
                        <div class="wyswig post-wyswig">
                            <p><strong>CLIENT:</strong> Directors: Jonny Madderson, Jono Stevens @ Just So Films</p>
                            <p><strong>ROLE:</strong> Sound Design and mix</p>
                            <p><strong>DESCRIPTION</strong></p>
                            <p>On the west coast of Ireland, kids don’t dream about winning the world cup. They dream
                                about being championship jockeys, but with Ireland still in the grip of recession, there
                                are less horses for kids to ride and less opportunities.
                                This is the story of a&nbsp;12 year old jockey called Dylan who is tiny, even for
                                a&nbsp;jockey. Since stepping up a&nbsp;level he has to compete against older, stronger
                                jockeys with more experience. At the Glenbeigh Races,
                                one of the biggest events in the grassroots horse racing calendar, Dylan has the chance
                                to make a&nbsp;name for himself.</p>
                            <p><strong>Awards</strong><br>Winner &#8211; Best Short Documentary: Kinsale Sharks 2016
                                (Gold)<br>Winner &#8211; Best Cinematography: 5Point Film Festival<br>Winner &#8211;
                                Best Documentary: Endorphin Awards 2017<br>Vimeo Staff
                                Pick</p>
                        </div>
                        <div class="post-gallery">
                            <div class="video-wrapper post-video" data-state="not-init">
                                <video playsinline preload="metadata"
                                    poster="https://iaingrantsound.com/wp-content/uploads/2019/11/5StoneOfLead_Still2-960x400.jpg">
                                    <source
                                        src="https://iaingrantsound.com/wp-content/uploads/2019/11/Five-Stone-of-Lead.mp4"
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
                            <div class="slider-wrapper">
                                <figure class="slider slider-2">
                                    <img class="jslghtbx-thmb active"
                                        src="https://iaingrantsound.com/wp-content/uploads/2019/11/5StoneOfLead_Still4-960x400.jpg"
                                        alt=""
                                        data-jslghtbx="https://iaingrantsound.com/wp-content/uploads/2019/11/5StoneOfLead_Still4-1440x600.jpg"
                                        data-jslghtbx-group="mygroup2" data-jslghtbx-caption="Five Stone Of Lead">
                                    <img class="jslghtbx-thmb "
                                        data-src="https://iaingrantsound.com/wp-content/uploads/2019/11/5StoneOfLead_Still6-960x400.jpg"
                                        alt=""
                                        data-jslghtbx="https://iaingrantsound.com/wp-content/uploads/2019/11/5StoneOfLead_Still6-1440x600.jpg"
                                        data-jslghtbx-group="mygroup2" data-jslghtbx-caption="Five Stone Of Lead">
                                    <img class="jslghtbx-thmb "
                                        data-src="https://iaingrantsound.com/wp-content/uploads/2019/11/5StoneOfLead_Still1-960x400.jpg"
                                        alt=""
                                        data-jslghtbx="https://iaingrantsound.com/wp-content/uploads/2019/11/5StoneOfLead_Still1-1440x600.jpg"
                                        data-jslghtbx-group="mygroup2" data-jslghtbx-caption="Five Stone Of Lead">
                                    <img class="jslghtbx-thmb "
                                        data-src="https://iaingrantsound.com/wp-content/uploads/2019/11/5StoneOfLead_Still5-960x400.jpg"
                                        alt=""
                                        data-jslghtbx="https://iaingrantsound.com/wp-content/uploads/2019/11/5StoneOfLead_Still5-1440x600.jpg"
                                        data-jslghtbx-group="mygroup2" data-jslghtbx-caption="Five Stone Of Lead">
                                    <img class="jslghtbx-thmb "
                                        data-src="https://iaingrantsound.com/wp-content/uploads/2019/11/5StoneOfLead_Still7-960x400.jpg"
                                        alt=""
                                        data-jslghtbx="https://iaingrantsound.com/wp-content/uploads/2019/11/5StoneOfLead_Still7-1440x600.jpg"
                                        data-jslghtbx-group="mygroup2" data-jslghtbx-caption="Five Stone Of Lead">
                                    <img class="jslghtbx-thmb "
                                        data-src="https://iaingrantsound.com/wp-content/uploads/2019/11/5StoneOfLead_Still3-960x400.jpg"
                                        alt=""
                                        data-jslghtbx="https://iaingrantsound.com/wp-content/uploads/2019/11/5StoneOfLead_Still3-1440x600.jpg"
                                        data-jslghtbx-group="mygroup2" data-jslghtbx-caption="Five Stone Of Lead">
                                </figure>
                                <div class="slider-controls">
                                    <button class="slider-control arrow-left">Left</button>
                                    <button class="slider-control arrow-right">Right</button>
                                </div>
                                <ul class="current-indicator">
                                    <li class="active">Slide 1</li>
                                    <li class="">Slide 2</li>
                                    <li class="">Slide 3</li>
                                    <li class="">Slide 4</li>
                                    <li class="">Slide 5</li>
                                    <li class="">Slide 6</li>
                                </ul>
                            </div>
                        </div>
                        <button class="close-post button">Close</button>
                    </section>
                </article>
                 <!-- Section 03 (Content) ---------------------------------------------------------------END---->
                <!-- Section 04 (Meta) ---------------------------------------------------------------Advertising---->
                <article class="post with-video with-slider" data-categories="advertising all">
                    <header class="post-header">
                        <h3 class="post-title">Red Bull &#8216;The Way Of The Wildcard&#8217;</h3>
                        <span class="post-meta">Advertising</span>
                        <img width="720" height="405"
                            src="https://iaingrantsound.com/wp-content/uploads/2019/11/WayofTheWildcard_Featured-720x405.jpg"
                            class="post-thumbnail wp-post-image" alt=""
                            srcset="https://iaingrantsound.com/wp-content/uploads/2019/11/WayofTheWildcard_Featured-720x405.jpg 720w, https://iaingrantsound.com/wp-content/uploads/2019/11/WayofTheWildcard_Featured-960x540.jpg 960w, https://iaingrantsound.com/wp-content/uploads/2019/11/WayofTheWildcard_Featured-768x432.jpg 768w, https://iaingrantsound.com/wp-content/uploads/2019/11/WayofTheWildcard_Featured-1440x810.jpg 1440w, https://iaingrantsound.com/wp-content/uploads/2019/11/WayofTheWildcard_Featured.jpg 1920w"
                            sizes="(max-width: 720px) 100vw, 720px" />
                    </header>
                    <!-- Section 04 (Content) ------------------------------------------------------------------->
                    <section class="post-content">
                        <div class="wyswig post-wyswig">
                            <p><strong>CLIENT:</strong> Just So Films (Directors: Jonny Madderson, Jono Stevens)</p>
                            <p><strong>ROLE:</strong> Sound Design and mix</p>
                            <p><strong>DESCRIPTION</strong></p>
                            <p>&#8216;The Way of the Wildcard&#8217; is a&nbsp;four part series, telling the individual
                                and very human stories of incredible yet unconventional athletes. </p>
                            <p>The series was launched on Red Bull TV and earned national PR coverage on Sky News and
                                was supported by an online and grassroots campaign taking the #wayofthewildcard message
                                to inspire and give practical advice, empowering
                                young people to take up sport.</p>
                            <p></p>
                            <ul>
                                <li>Winner &#8211; Best Online Series, Realscreen Awards</li>
                                <li>Winner &#8211; Overall Excellence, Realscreen Awards</li>
                                <li>Winner &#8211; Best Short Documentary, Kinsale Sharks </li>
                                <li>Nominee &#8211; Best Short Documentary, Grierson British Documentary </li>
                            </ul>
                        </div>
                        <div class="post-gallery">
                            <div class="video-wrapper post-video" data-state="not-init">
                                <video playsinline preload="metadata"
                                    poster="https://iaingrantsound.com/wp-content/uploads/2019/11/TheWayOfTheWildCard_Still9-960x540.jpg">
                                    <source
                                        src="https://iaingrantsound.com/wp-content/uploads/2019/11/The-Way-Of-The-Wildcard-Trailer_R2.mp4"
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
                            <div class="slider-wrapper">
                                <figure class="slider slider-3">
                                    <img class="jslghtbx-thmb active"
                                        src="https://iaingrantsound.com/wp-content/uploads/2019/11/TheWayOfTheWildCard_Poster-960x540.jpg"
                                        alt=""
                                        data-jslghtbx="https://iaingrantsound.com/wp-content/uploads/2019/11/TheWayOfTheWildCard_Poster-1440x810.jpg"
                                        data-jslghtbx-group="mygroup3"
                                        data-jslghtbx-caption="Red Bull &#8216;The Way Of The Wildcard&#8217;">
                                    <img class="jslghtbx-thmb "
                                        data-src="https://iaingrantsound.com/wp-content/uploads/2019/11/TheWayOfTheWildCard_Still5-960x540.jpg"
                                        alt=""
                                        data-jslghtbx="https://iaingrantsound.com/wp-content/uploads/2019/11/TheWayOfTheWildCard_Still5-1440x810.jpg"
                                        data-jslghtbx-group="mygroup3"
                                        data-jslghtbx-caption="Red Bull &#8216;The Way Of The Wildcard&#8217;">
                                    <img class="jslghtbx-thmb "
                                        data-src="https://iaingrantsound.com/wp-content/uploads/2019/11/TheWayOfTheWildCard_Still11-960x540.jpg"
                                        alt=""
                                        data-jslghtbx="https://iaingrantsound.com/wp-content/uploads/2019/11/TheWayOfTheWildCard_Still11-1440x810.jpg"
                                        data-jslghtbx-group="mygroup3"
                                        data-jslghtbx-caption="Red Bull &#8216;The Way Of The Wildcard&#8217;">
                                    <img class="jslghtbx-thmb "
                                        data-src="https://iaingrantsound.com/wp-content/uploads/2019/11/TheWayOfTheWildCard_Still9-960x540.jpg"
                                        alt=""
                                        data-jslghtbx="https://iaingrantsound.com/wp-content/uploads/2019/11/TheWayOfTheWildCard_Still9-1440x810.jpg"
                                        data-jslghtbx-group="mygroup3"
                                        data-jslghtbx-caption="Red Bull &#8216;The Way Of The Wildcard&#8217;">
                                    <img class="jslghtbx-thmb "
                                        data-src="https://iaingrantsound.com/wp-content/uploads/2019/11/TheWayOfTheWildCard_Still1-960x540.jpg"
                                        alt=""
                                        data-jslghtbx="https://iaingrantsound.com/wp-content/uploads/2019/11/TheWayOfTheWildCard_Still1-1440x810.jpg"
                                        data-jslghtbx-group="mygroup3"
                                        data-jslghtbx-caption="Red Bull &#8216;The Way Of The Wildcard&#8217;">
                                    <img class="jslghtbx-thmb "
                                        data-src="https://iaingrantsound.com/wp-content/uploads/2019/11/TheWayOfTheWildCard_Still2-960x540.jpg"
                                        alt=""
                                        data-jslghtbx="https://iaingrantsound.com/wp-content/uploads/2019/11/TheWayOfTheWildCard_Still2-1440x810.jpg"
                                        data-jslghtbx-group="mygroup3"
                                        data-jslghtbx-caption="Red Bull &#8216;The Way Of The Wildcard&#8217;">
                                    <img class="jslghtbx-thmb "
                                        data-src="https://iaingrantsound.com/wp-content/uploads/2019/11/TheWayOfTheWildCard_Still10-960x540.jpg"
                                        alt=""
                                        data-jslghtbx="https://iaingrantsound.com/wp-content/uploads/2019/11/TheWayOfTheWildCard_Still10-1440x810.jpg"
                                        data-jslghtbx-group="mygroup3"
                                        data-jslghtbx-caption="Red Bull &#8216;The Way Of The Wildcard&#8217;">
                                    <img class="jslghtbx-thmb "
                                        data-src="https://iaingrantsound.com/wp-content/uploads/2019/11/TheWayOfTheWildCard_Still8-960x540.jpg"
                                        alt=""
                                        data-jslghtbx="https://iaingrantsound.com/wp-content/uploads/2019/11/TheWayOfTheWildCard_Still8-1440x810.jpg"
                                        data-jslghtbx-group="mygroup3"
                                        data-jslghtbx-caption="Red Bull &#8216;The Way Of The Wildcard&#8217;">
                                    <img class="jslghtbx-thmb "
                                        data-src="https://iaingrantsound.com/wp-content/uploads/2019/11/TheWayOfTheWildCard_Still6-960x540.jpg"
                                        alt=""
                                        data-jslghtbx="https://iaingrantsound.com/wp-content/uploads/2019/11/TheWayOfTheWildCard_Still6-1440x810.jpg"
                                        data-jslghtbx-group="mygroup3"
                                        data-jslghtbx-caption="Red Bull &#8216;The Way Of The Wildcard&#8217;">
                                    <img class="jslghtbx-thmb "
                                        data-src="https://iaingrantsound.com/wp-content/uploads/2019/11/TheWayOfTheWildCard_Still12-960x540.jpg"
                                        alt=""
                                        data-jslghtbx="https://iaingrantsound.com/wp-content/uploads/2019/11/TheWayOfTheWildCard_Still12-1440x810.jpg"
                                        data-jslghtbx-group="mygroup3"
                                        data-jslghtbx-caption="Red Bull &#8216;The Way Of The Wildcard&#8217;">
                                    <img class="jslghtbx-thmb "
                                        data-src="https://iaingrantsound.com/wp-content/uploads/2019/11/TheWayOfTheWildCard_Still13-960x540.jpg"
                                        alt=""
                                        data-jslghtbx="https://iaingrantsound.com/wp-content/uploads/2019/11/TheWayOfTheWildCard_Still13-1440x810.jpg"
                                        data-jslghtbx-group="mygroup3"
                                        data-jslghtbx-caption="Red Bull &#8216;The Way Of The Wildcard&#8217;">
                                    <img class="jslghtbx-thmb "
                                        data-src="https://iaingrantsound.com/wp-content/uploads/2019/11/TheWayOfTheWildCard_Still3-960x540.jpg"
                                        alt=""
                                        data-jslghtbx="https://iaingrantsound.com/wp-content/uploads/2019/11/TheWayOfTheWildCard_Still3-1440x810.jpg"
                                        data-jslghtbx-group="mygroup3"
                                        data-jslghtbx-caption="Red Bull &#8216;The Way Of The Wildcard&#8217;">
                                    <img class="jslghtbx-thmb "
                                        data-src="https://iaingrantsound.com/wp-content/uploads/2019/11/TheWayOfTheWildCard_Still4-960x540.jpg"
                                        alt=""
                                        data-jslghtbx="https://iaingrantsound.com/wp-content/uploads/2019/11/TheWayOfTheWildCard_Still4-1440x810.jpg"
                                        data-jslghtbx-group="mygroup3"
                                        data-jslghtbx-caption="Red Bull &#8216;The Way Of The Wildcard&#8217;">
                                    <img class="jslghtbx-thmb "
                                        data-src="https://iaingrantsound.com/wp-content/uploads/2019/11/TheWayOfTheWildCard_Still7-960x540.jpg"
                                        alt=""
                                        data-jslghtbx="https://iaingrantsound.com/wp-content/uploads/2019/11/TheWayOfTheWildCard_Still7-1440x810.jpg"
                                        data-jslghtbx-group="mygroup3"
                                        data-jslghtbx-caption="Red Bull &#8216;The Way Of The Wildcard&#8217;">
                                </figure>
                                <div class="slider-controls">
                                    <button class="slider-control arrow-left">Left</button>
                                    <button class="slider-control arrow-right">Right</button>
                                </div>
                                <ul class="current-indicator">
                                    <li class="active">Slide 1</li>
                                    <li class="">Slide 2</li>
                                    <li class="">Slide 3</li>
                                    <li class="">Slide 4</li>
                                    <li class="">Slide 5</li>
                                    <li class="">Slide 6</li>
                                    <li class="">Slide 7</li>
                                    <li class="">Slide 8</li>
                                    <li class="">Slide 9</li>
                                    <li class="">Slide 10</li>
                                    <li class="">Slide 11</li>
                                    <li class="">Slide 12</li>
                                    <li class="">Slide 13</li>
                                    <li class="">Slide 14</li>
                                </ul>
                            </div>
                        </div>
                        <button class="close-post button">Close</button>
                    </section>
                </article>
                <!-- Section 04 (Content) --------------------------------------------------------------END----->
            </main>
            <footer id="main-footer">
                <div class="footer content">
                    <p>Shady Tawfik © 2020 All Rights Reserved</p>
                </div>
                <a class="audio-game" href="https://iaingrantsound.com/audio/">Audio game</a>
            </footer>
       </div> 
        <!-- Barba-Wrapper (JS) --------------------------------------------------------------WRAPPER----->
    </div> 
<?php snippet('footer') ?>