<?php snippet('header') ?>
<main>
  <article class="pageContent">
    <section class="svg-home-bg">
      <div id="coords" data-html2canvas-ignore="true">(0,0)</div>
      <div class="repo-svg">
      <svg id="bauhausShapes">
        <circle
          cx="1100"
          cy="250"
          r="100"
          style="stroke-width: 65px; stroke: rgb(255, 214, 0); fill: rgb(255, 214, 0);"
        ></circle>
        <rect
          x="740"
          y="483"
          width="100"
          height="100"
          style="stroke-width: 65px; stroke: rgb(255, 77, 0); fill: rgb(255, 77, 0);"
        ></rect>
        <polygon
          points="295,372 345,462 245 ,462"
          style="stroke-width: 109px; stroke: rgb(36, 0, 255); fill: rgb(36, 0, 255);"
        ></polygon>
      </svg>
      </div>
    </section>
    <section class="homeSvg">
      <svg
        id="homeSVG"
        class="stroke"
        viewBox="0 0 1250 640"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M.47,472V179.61H638.31V80.83h-86V.47h697.18V527.11H1109.09V477H756.33V639.53H238.61V558.72h29.92V472Z"
        />
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
      <span class="blur-slider"
        >Blur:
        <span id="output"></span>
        <label class="slide">
          <input
            class="svg-blur"
            type="range"
            min="0"
            max="220"
            value="30"
            step="1"
            id="blur"
          />
        </label>
      </span>
      <span class="spacing-slider"
        >Spacing:
        <span id="output-spacing"></span>
        <label class="slide">
          <input type="range" id="spacing" min="0" max="200" value="0" />
        </label>
      </span>
      <span class="rotation-slider"
        >Rotation:
        <span id="output-rotation"></span>
        <label class="slide">
          <input type="range" id="rotation" min="0" max="360" value="0" />
        </label>
      </span>
      <span class="home-svg-toggle">
      <span id="fill-msg">Shape:</br>
       Stroked</span>
        <label class="fillSwitch">
          <span class="fillSlider">
            <div id="home-svg-toggle-circle"></div>
          </span>
        </label>
      </span>
      <button class="controller" id="btn-remove-svg">Remove Shape</button>
    </section>
  </article>
</main>
<div id="preload-homepage">
  <div class="intro">
    <div class="intro-items">
      <h1 class="large">Florian Nagel</h1>
      <h1 class="xxlarge">2017-2020</h1>
      <h1 class="xxxlarge">FFF-Corp</h1>
      <h1 class="xlarge">Visual Diary</h1>
      <span class="intro-enter medium">(Click to Enter)</span>
    </div>
  </div>
</div>
<?= js('assets/js/homePageScripts.js', true) ?>
<?php snippet('footer') ?>
