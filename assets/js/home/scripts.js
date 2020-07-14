let avgX = [];
let avgY = [];
let previousCoords = [Math.random() * window.innerWidth, Math.random() * window.innerHeight];
let strokeWidth = 65;
let lines = 0;
let titles = ["(ﾉ◕ヮ◕)ﾉ*:･ﾟ✧", "(☞ﾟ∀ﾟ)☞", "༼ つ ◕_◕ ༽つ", "(▀̿Ĺ̯▀̿ ̿)", "ᕦ(Ò_Óˇ)ᕤ", "☜(˚▽˚)☞", "☜(⌒▽⌒)☞", "(ノಠ益ಠ)ノ彡┻━┻"];
let palette = ["#ff3030", "#ffff00", "#00b05b"];
let randomColor = palette[Math.floor(Math.random() * palette.length)];

document.addEventListener("DOMContentLoaded", function() {
    let node = document.querySelector('.preload-transitions');
    node.classList.remove('preload-transitions');
});

document.documentElement.style.setProperty('--primary', randomColor);
if (randomColor == "#ffff00") {
    document.getElementById("coords").style.color = 'black';
}


document.title = titles[Math.floor(Math.random() * titles.length)];

if (document.getElementById('svg') != null) {

    document.getElementById("svg").setAttribute("viewBox", "0 0 " + window.innerWidth + " " + window.innerHeight);
    document.getElementById("svg").setAttribute("height", window.innerHeight);
    document.getElementById("svg").setAttribute("width", window.innerWidth);

    window.onresize = function() {
        document.getElementById("svg").setAttribute("viewBox", "0 0 " + window.innerWidth + " " + window.innerHeight);
        document.getElementById("svg").setAttribute("height", window.innerHeight);
        document.getElementById("svg").setAttribute("width", window.innerWidth);
    }

}


function findAvg(arr) {
    sum = arr.reduce(function(a, b) {
        return a + b;
    });
    avg = sum / arr.length;
    return avg;
}

document.onmousemove = function(e) {
    document.getElementById("coords").innerHTML = "click(" + e.clientX + "," + e.clientY + ")";
    document.getElementById("coords").style.top = e.clientY + 10 + "px";
    document.getElementById("coords").style.left = e.clientX + 10 + "px";

    avgX.push(e.clientX);
    avgY.push(e.clientY);
    document.getElementById("avg").style.left = findAvg(avgX) + "px";
    document.getElementById("avg").style.top = findAvg(avgY) + "px";



}




document.onclick = function(e) {
    if (e.target.tagName != 'A') {

        document.getElementById("save").style.opacity = 1;

        document.onkeypress = function() {
            var x = event.which || event.keyCode;
            if (x == 115) {
                saveImage();
            }
            console.log("The Unicode value is: " + x);
        }


        if (previousCoords.length > 0) {
            let newLine = document.createElementNS("http://www.w3.org/2000/svg", "line");
            newLine.setAttribute('x1', previousCoords[0]);
            newLine.setAttribute('y1', previousCoords[1]);
            newLine.setAttribute('x2', e.clientX);
            newLine.setAttribute('y2', e.clientY);
            newLine.style.strokeWidth = strokeWidth;
            newLine.style.stroke = randomColor;
            document.getElementById("svg").appendChild(newLine);
        }

        previousCoords = [e.clientX, e.clientY];
        if (lines >= 200) {
            document.getElementById("svg").innerHTML = '';
            lines = 1;
            strokeWidth = 65;
        } else {
            lines++;
        }
        strokeWidth += 22;
    }
}








document.addEventListener("visibilitychange", function() {
    if (document.hidden) {
        // console.log("Browser tab is hidden" + new Date());
        for (let activeLink of document.getElementsByClassName("active")) {
            activeLink.classList.remove("active");
        }
        document.title = "Talia Cotton";
        document.getElementsByClassName("original")[0].classList.add("active");
        document.getElementsByTagName("body")[0].classList.remove("transition");
    } else {
        // console.log("Browser tab is visible" + new Date())
        document.title = titles[Math.floor(Math.random() * titles.length)];
    }
});


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




function saveImage() {
    let w = Math.max(document.documentElement.clientWidth, window.innerWidth);
    let h = Math.max(document.documentElement.clientHeight, window.innerHeight);

    html2canvas(document.body, {
        width: w,
        height: h
    }).then(function(canvas) {
        // document.body.appendChild(canvas);
        // canvas.backgroundColor = "#eeeeee";                
        var svg = document.getElementById('svg');
        var img = document.querySelector('img');
        // var canvas = document.querySelector('canvas');

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

        saveAs(canvas.toDataURL(), 'img-final-final-final.png');
    });
}