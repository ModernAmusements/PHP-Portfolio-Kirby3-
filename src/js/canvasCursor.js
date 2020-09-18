// jshint ignore: start
/* eslint-disable */


let mousePos = {
    x: 1000,
    y: 1000
}

let cursor = {
    text: '',
    el: null,
    textEl: null,
    width: {
        target: 23,
        default: 23,
    },
    height: {
        target: 23,
        default: 10
    },
    textOpacity: {
        current: 0
    }
}

const arrowRight = `<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 201.7072 197.5391"><path d="M201.7072,98.77l-74.9131,98.77H107.3768l34.6778-45.7815,34.1243-44.6631H0v-16.65H176.1789L142.0546,45.77,107.3768,0h19.4173Z"/></svg>`
const arrowLeft = `<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 201.7072 197.5391"><path d="M0,98.77,74.913,0H94.33L59.6525,45.7814,25.5283,90.4446H201.7072v16.65H25.5283l34.1242,44.6744,34.6778,45.77H74.913Z"/></svg>`
const btnPlay = `<svg id="btnPlay" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path transform="translate(4.000000, 2.000000)" fill="currentColor" d="M0.783,0.088 C0.630002114,-0.0170415713 0.431410671,-0.0286996621 0.267173326,0.0577189663 C0.102935981,0.144137595 7.5196355e-05,0.314414227 -8.8817842e-16,0.5 L-8.8817842e-16,11.5 C0.00034089524,11.6856642 0.103531693,11.855852 0.268,11.942 C0.339356371,11.9801972 0.419063363,12.0001239 0.5,12 C0.601058826,11.9999404 0.699727531,11.9692589 0.783,11.912 L8.783,6.412 C8.91865945,6.31871934 8.9997051,6.16463526 8.9997051,6 C8.9997051,5.83536474 8.91865945,5.68128066 8.783,5.588 L0.783,0.088 Z"></path></svg>`


function animate() {
    requestAnimationFrame(animate);
    drawCursor(mousePos)
};

function drawCursor(mouse) {
    let x = mouse.x;
    let y = mouse.y;
    if (innerWidth > 1024) {
    const ratio = (mouse.x / window.innerWidth);
    document.body.style.fontVariationSettings = `'tong' ${100 + (ratio * 100)}`

    cursor.el.style.transform = `translateX(calc(${x}px - 50%)) translateY(${y}px)`;
    cursor.el.style.width = `${cursor.width.target}px`;
    cursor.textEl.style.opacity = cursor.textOpacity.current;
    }
}

function initCursor() {
    cursor.el = document.querySelector('.cursor-container')
    cursor.textEl = document.querySelector('.cursor-text')
    if (innerWidth > 1024) {
    let activeElements = document.querySelectorAll('[data-cursorText]');
    activeElements.forEach(el => {
        el.addEventListener('mouseover', (e) => {
            e.stopPropagation();
            const newText = el.getAttribute('data-cursorText')
            
            if (newText === 'arrowRight') {
                cursor.textEl.innerHTML = arrowRight;
            } else if (newText === 'arrowLeft') {
                cursor.textEl.innerHTML = arrowLeft;
            } else if (newText === 'btnPlay') {
                cursor.textEl.innerHTML = btnPlay;
            } else {
                cursor.textEl.textContent = newText
            }
            cursor.width.target = cursor.textEl.scrollWidth;
            cursor.textOpacity.current = 1;
           
        })
        el.addEventListener('mouseout', function() {
            cursor.width.target = cursor.width.default;
            cursor.height.target = cursor.height.default;
            cursor.textOpacity.current = 0;
            cursor.textEl.textContent = ''
        })
        })
    }
}

window.addEventListener('DOMContentLoaded', () => {
    initCursor();
    animate()
    window.addEventListener('resize', e => {
        initCursor()
    })

    window.addEventListener('mousemove', e => {
        mousePos = {
            x: e.clientX,
            y: e.clientY,
        }
    })
})