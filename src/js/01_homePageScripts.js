// jshint ignore: start
/* eslint-disable */
// Vars
let avgX = [];
let avgY = [];
let previousCoords = [
  Math.random() * window.innerWidth,
  Math.random() * window.innerHeight,
];
let strokeWidth = 65;
let shapes = 0;
let titles = [
  'FFF-Corp',
  '333',
  'Design',
  'Illustration',
  'Direction',
  'Layout',
  'Typography',
  'CGI',
];
let palette = ['#FFD600', '#2400FF', '#FF4D00'];
let randomColor = palette[Math.floor(Math.random() * palette.length)];

// Not
document.addEventListener('DOMContentLoaded', function() {
  // let node = document.querySelector('.preload-transitions');
  // node.classList.remove('preload-transitions');
});

// Mouse random color style
document.documentElement.style.setProperty('--primary', randomColor);
if (randomColor == '#ffff00') {
  document.getElementById('coords').style.color = 'black';
}

// Not
document.title = titles[Math.floor(Math.random() * titles.length)];

// Generate SVG
if (document.getElementById('bauhausShapes') != null) {
  document
    .getElementById('bauhausShapes')
    .setAttribute(
      'viewBox',
      '0 0 ' + window.innerWidth + ' ' + window.innerHeight,
    );
  document
    .getElementById('bauhausShapes')
    .setAttribute('height', window.innerHeight);
  document
    .getElementById('bauhausShapes')
    .setAttribute('width', window.innerWidth);
  document.getElementById('bauhausShapes').classList.add('blur-me');

  window.onresize = function() {
    document
      .getElementById('bauhausShapes')
      .setAttribute(
        'viewBox',
        '0 0 ' + window.innerWidth + ' ' + window.innerHeight,
      );
    document
      .getElementById('bauhausShapes')
      .setAttribute('height', window.innerHeight);
    document
      .getElementById('bauhausShapes')
      .setAttribute('width', window.innerWidth);
  };
}

// Not
function findAvg(arr) {
  sum = arr.reduce(function(a, b) {
    return a + b;
  });
  avg = sum / arr.length;
  return avg;
}

// Mouse current position
document.onmousemove = function(e) {
  document.getElementById('coords').innerHTML =
    'click(' + e.clientX + ',' + e.clientY + ')';
  document.getElementById('coords').style.top = e.clientY + 10 + 'px';
  document.getElementById('coords').style.left = e.clientX + 10 + 'px';
};

// Click to Generate
document.onclick = function(e) {
  if (
    e.target.tagName != 'A' &&
    e.target.tagName != 'INPUT' &&
    e.target.tagName != 'BUTTON' &&
    e.target.tagName != 'SPAN' &&
    e.target.tagName != 'DIV' &&
    e.target.tagName != 'LABEL'
  ) {
    document.getElementById('save').style.opacity = 1;

    document.onkeypress = function() {
      var x = event.which || event.keyCode;
      if (x == 83) {
        saveImage();
      }
    };

    if (previousCoords.length > 0) {
      if (Math.random() <= 0.3) {
        var newShape = document.createElementNS(
          'http://www.w3.org/2000/svg',
          'rect',
        );
        let randomColor = palette[Math.floor(Math.random() * palette.length)];

        newShape.setAttribute('x', e.clientX);
        newShape.setAttribute('y', e.clientY);
        newShape.setAttribute('width', strokeWidth);
        newShape.setAttribute('height', strokeWidth);
        newShape.style.strokeWidth = strokeWidth;
        newShape.style.stroke = randomColor;
        newShape.style.fill = randomColor;

        document.getElementById('bauhausShapes').appendChild(newShape);
      } else if (Math.random() <= 0.6) {
        var newShape = document.createElementNS(
          'http://www.w3.org/2000/svg',
          'circle',
        );
        let randomColor = palette[Math.floor(Math.random() * palette.length)];

        newShape.setAttribute('cx', e.clientX);
        newShape.setAttribute('cy', e.clientY);
        newShape.setAttribute('r', strokeWidth);
        newShape.style.strokeWidth = strokeWidth;
        newShape.style.stroke = randomColor;
        newShape.style.fill = randomColor;

        document.getElementById('bauhausShapes').appendChild(newShape);
      } else {
        var newShape = document.createElementNS(
          'http://www.w3.org/2000/svg',
          'polygon',
        );
        let randomColor = palette[Math.floor(Math.random() * palette.length)];

        newShape.setAttribute(
          'points',
          `${e.clientX + 50},${e.clientY + 10} ${e.clientX + 100},${e.clientY +
            100} ${e.clientX + 0} ,${e.clientY + 100}`,
        );
        // newShape.setAttribute('points', "x1,y1 x2,y2 x3,y4");

        newShape.style.strokeWidth = strokeWidth;
        newShape.style.stroke = randomColor;
        newShape.style.fill = randomColor;

        document.getElementById('bauhausShapes').appendChild(newShape);
      }
    }

    previousCoords = [e.clientX, e.clientY];
    if (shapes >= 9) {
      document.getElementById('bauhausShapes').innerHTML = '';
      shapes = 1;
      strokeWidth = 65;
    } else {
      shapes++;
    }
    strokeWidth += 22;
  }
};

function saveAs(uri, filename) {
  var link = document.createElement('a');

  if (typeof link.download === 'string') {
    link.href = uri;
    link.download = filename;

    //Firefox requires the link to be in the body
    document.body.appendChild(link);

    //simulate click
    link.click();

    //remove the link when done
    document.body.removeChild(link);
  } else {
    window.open(uri);
  }
}

import html2canvas from './02_homeHtml2Canvas';

function saveImage() {
  let w = Math.max(document.documentElement.clientWidth, window.innerWidth);
  let h = Math.max(document.documentElement.clientHeight, window.innerHeight);

  html2canvas(document.body, {
    width: w,
    height: h,
  }).then(function(canvas) {
    var svg = document.getElementById('bauhausShapes');
    var img = document.querySelector('img');

    // get svg data
    var xml = new XMLSerializer().serializeToString(svg);

    // make it base64
    var svg64 = btoa(xml);
    var b64Start = 'data:image/svg+xml;base64,';

    // prepend a "header"
    var image64 = b64Start + svg64;
    // set it as the source of the img element
    img.src = image64;

    // draw the image onto the canvas
    canvas.getContext('2d').drawImage(img, 0, 0);

    saveAs(canvas.toDataURL(), 'fff-corp™-2020®.png');
  });
}

// Homepage Control
// Remove Shapes
var btnRemoveSvg = document.querySelector('#btn-remove-svg');
function removeChild() {
  var list = document.getElementById('bauhausShapes'),
    item = list.lastElementChild;
  list.removeChild(item);
}
btnRemoveSvg.onclick = function() {
  removeChild();
};

// Fill BG



// Fill Home 
var homeSvg = document.getElementById('homeSVG');
var msg = document.getElementById("fill-msg")
const svgFillToggle = document.querySelector('#home-svg-toggle-circle');
const svgFillSlider = document.querySelector('.fillSlider');
const homeSvgToggle = document.querySelector('.home-svg-toggle');

function toggle() {
  if (homeSvg.classList == 'stroke') {
    homeSvg.classList.add('fill')
    msg.innerHTML = "Shape:</br> Filled"
  }
  else {
    homeSvg.classList.remove('fill');
    msg.innerHTML = "Shape:</br> Stroked"
  }
}

homeSvgToggle.addEventListener('click', () => {
  svgFillToggle.classList.toggle('fillSlide');
  svgFillSlider.classList.toggle('sliderToggleActive');
  toggle();
});


// Slider Controls
var sliderRotation = document.getElementById('rotation');
var outputRotation = document.getElementById('output-rotation');
var sliderSpacing = document.getElementById('spacing');
var outputSpacing = document.getElementById('output-spacing');
var slider = document.getElementById('blur');
var output = document.getElementById('output');
sliderSpacing.oninput = function() {
  outputSpacing.innerHTML = this.value;
};
sliderRotation.oninput = function() {
  outputRotation.innerHTML = this.value;
};
slider.oninput = function() {
  output.innerHTML = this.value;
};
outputRotation.innerHTML = sliderRotation.value;
outputSpacing.innerHTML = sliderSpacing.value;
output.innerHTML = slider.value;
const inputs = [].slice.call(
  document.querySelectorAll('input#blur,input#spacing'),
);
const inputRotation = document.querySelectorAll('#rotation');
inputRotation.forEach(input =>
  input.addEventListener('change', handleUpdateRotation),
);
inputRotation.forEach(input =>
  input.addEventListener('mousemove', handleUpdateRotation),
);
inputs.forEach(input => input.addEventListener('change', handleUpdate));
inputs.forEach(input => input.addEventListener('mousemove', handleUpdate));
function handleUpdate(e) {
  const suffix = this.id === 'base' ? '' : 'px';
  document
    .getElementById('bauhausShapes')
    .style.setProperty(`--${this.id}`, this.value + suffix);
}
function handleUpdateRotation(e) {
  const suffixDeg = this.id === 'base' ? '' : 'deg';
  document
    .getElementById('bauhausShapes')
    .style.setProperty(`--${this.id}`, this.value + suffixDeg);
}

// Preloader
$(function() {
  $('#preload-homepage').click(function() {
    $(this)
      .fadeOut('300')
      .remove();
  });
  if (!sessionStorage.getItem('homePagePreloader')) {
    sessionStorage.setItem('homePagePreloader', true);
    $('#preload-homepage').css('display', 'block');
    setTimeout(function() {
      $('#preload-homepage').fadeOut();
    }, 2000);
    setTimeout(function() {
      $('#preload-homepage').remove();
    }, 2500);
  } else {
    $('#preload-homepage').css('display', 'none');
  }

});
