<?php snippet('header') ?>
<div id="preload-homepage">
  <span class="medium">(Click to Enter)</span>
</div>
<main>
  <article class="pageContent">
    <div class="bg">
      <div id="coords" data-html2canvas-ignore="true">(0,0)</div>
      <svg id="bauhausShapes"></svg>
      <img id="img" />
      <a href="#" class="type-lg" id="save" target="_blank">HIT "S" TO SAVE</a>
    </div>
    <section class="homeSvg">
      <svg id="homeSVG" viewBox="0 0 1250 640" fill="none" stroke="var(--foreground-color)" stroke-width="1px"
        xmlns="http://www.w3.org/2000/svg">
        <path
          d="M.47,472V179.61H638.31V80.83h-86V.47h697.18V527.11H1109.09V477H756.33V639.53H238.61V558.72h29.92V472Z" />
      </svg>
    </section>
    <section class="credentialsName">
      <h1 class="displayText">
        Florian Nagel
        <br />
        Graphic Design
      </h1>
    </section>
    <section class="credentialsTime">
      <h1 class="displayText">
        2017-
        <br />
        2020
      </h1>
    </section>
    <section class="credentialsDate">
      <h1 class="displayText">
        Archiv+
        <br />
        Visual Diary
      </h1>
    </section>
    <section class="controlsPage">
      <span class="blur-slider">Blur:
        <span id="output"></span>
        <label class="slide">
          <input class="svg-blur" type="range" min="0" max="220" value="30" step="1" id="blur" />
        </label>
      </span>
      <span class="spacing-slider">Spacing:
        <span id="output-spacing"></span>
        <label class="slide">
          <input type="range" id="spacing" min="0" max="200" value="0" />
        </label>
      </span>
      <span class="rotation-slider">Rotation:
        <span id="output-rotation"></span>
        <label class="slide">
          <input type="range" id="rotation" min="0" max="360" value="0" />
        </label>
      </span>
      <a id="b1" onclick="changeColor()">Background</a>
      <a id="b2" onclick="removeChild()">Remove Shape</a>
      <a id="save" target="_blank">"⇧+S" to Save</a>
    </section>
  </article>
</main>
<?= js('assets/js/homePageScripts.js') ?>
<?php snippet('footer') ?>