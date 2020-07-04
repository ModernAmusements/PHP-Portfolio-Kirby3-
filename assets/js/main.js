let css = `
    html {
        --pointer - move - line - color: #03f;
    }
    html.inverted {
        --pointer - move - line - color: #f3a;

      /*--background-color: #101214;
      --foreground-color-rgb: 250,255,240;*/

      /*--background-color: #131310;
      --foreground-color-rgb: 210,230,255;*/

      /*--background-color: #111;
      --foreground-color-rgb: 255,255,255;*/

      --background-color: #111;
      --foreground-color-rgb: 255,254,245;

      --foreground-color-a: 0.8;
      --base-grid-color1: rgba(240,155,255, 0.1);
      --base-grid-color2: rgba(240,155,255, 0.05);
    }
    `.trim()
        let style = document.createElement('style')
        style.appendChild(document.createTextNode(css))
        document.head.appendChild(style)
        let link = document.createElement('link')
        link.rel = "stylesheet"
        document.head.appendChild(link)



function setLabel(id, value) {
    let label = document.getElementById(id)
    label && (label.innerText = value)
}


let tapevent = 'PointerEvent' in window ? 'pointerdown' : 'click'

function bindTapableOption(msgname, fn) {
    let label = document.getElementById(msgname + '-msg')
    label && label.parentElement.addEventListener(tapevent, fn)
}

$("#sun").click(function() { 
    	$('body').toggleClass("sun-active"); 
  	});

function updateInvertedLabel() {
    let on = document.documentElement.classList.contains('inverted')
    setLabel('inverted-msg', on ? 'On' : 'Off')
}

function toggleInvertedMode() {
    document.documentElement.classList.toggle('inverted')
    updateInvertedLabel()
}


bindTapableOption('inverted', toggleInvertedMode)


updateInvertedLabel()














