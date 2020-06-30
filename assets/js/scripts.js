"use strict";
var windowWidth = isNaN(window.innerWidth)
    ? window.clientWidth
    : window.innerWidth,
  windowHeight = isNaN(window.innerHeight)
    ? window.clientHeight
    : window.innerHeight,
  touchInterval = void 0,
  introFlag = !0,
  lightboxWidth = 0.8,
  isTouch = "ontouchstart" in window || 0 < navigator.msMaxTouchPoints;

isTouch
  ? (console.log("touch"),
    document.body.classList.add("touch-device"),
    (lightboxWidth = 1))
  : document.body.classList.add("not-touch-device");

var vh = 0.01 * window.innerHeight;
document.documentElement.style.setProperty("--vh", vh + "px"),
  window.addEventListener("resize", function () {
    (vh = 0.01 * window.innerHeight),
      document.documentElement.style.setProperty("--vh", vh + "px");
  });

var ua = window.navigator.userAgent,
  iOS = !!ua.match(/iPad/i) || !!ua.match(/iPhone/i),
  webkit = !!ua.match(/WebKit/i),
  iOSSafari = iOS && webkit && !ua.match(/CriOS/i);

function getRandomInt(e, t) {
  return Math.floor(Math.random() * (t - e)) + e;
}

function handlePosts(e) {
  var n = e.querySelector(".categories"),
    t = e.querySelector(".categories-title"),
    r = Array.from(e.querySelectorAll(".post"));
  t &&
    t.addEventListener("click", function () {
      t.parentElement.parentElement.classList.toggle("active-filters"),
        t.parentElement.parentElement.classList.contains("active-filters") ||
          t.nextElementSibling.children[0].children[0].click(); // active filters!
    }),
    document.fonts.load('1rem "Surt Semi Bold"').then(function () {
      r.forEach(function (e, t) {
        e.children[0].children[0].offsetWidth >= e.children[0].offsetWidth
      }); // show all kat.
    }),
    n &&
      r &&
      (Array.from(n.querySelectorAll(".category-button")).forEach(function (e) {
        e.addEventListener("click", function () {
          n.querySelector(".category-li.active").classList.remove("active"),
            e.parentElement.classList.add("active");
          var t = e.dataset.slug;
          r.forEach(function (e) {
            e.dataset.categories
              .split(" ")
              .filter(function (e) {
                return "" != e;
              })
              .some(function (e) {
                return t == e;
              })
              ? e.classList.remove("hide")
              : (e.classList.add("hide"),
                e.classList.remove("toggle"),
                e.removeAttribute("style"));
          });
        });
      }),
      r.forEach(function (i, e) {
        var o = i.querySelector("post");
        i.children[0].addEventListener("mouseenter", function (e) {
          i.children[0].children[2] &&
            !i.classList.contains("toggle") &&
            ((i.children[0].children[2].style.left = e.clientX + "px"),
            (i.children[0].children[2].style.top = e.clientY + "px"));
        }),
          i.children[0].addEventListener("mouseleave", function (e) {
            i.children[0].children[2] &&
              i.children[0].children[2].removeAttribute("style");
          }),
          i.children[0].addEventListener("click", function () {
            // close tab remove all style hide !
            if (
              !i.classList.contains("toggle") &&
              i.classList.contains("post-header")
            ) {
              var t = r.find(function (e) {
                return e.classList.contains("toggle");
              });
              if (t) {
                t.classList.remove("toggle"), t.removeAttribute("style");
              }
              (i.dataset.height = i.children[1].offsetHeight + 50 + "px"),
                i.classList.add("toggle"),
                (i.style.height = i.dataset.height);
            } else i.classList.remove("toggle"), i.removeAttribute("style"),
                document.body.classList.remove("post-toggled"),
                o && (o.pause(), (o.currentTime = 0));

            setTimeout(function () {
              i.children[1].scrollIntoView({
                behavior: "smooth",
                block: "end"
              });
            }, 500);
          });
        var t = i.querySelector(".slider img.active");
        if (
          (t &&
            t.addEventListener("load", function () {
              i.classList.add("first-img-loaded");
            }),
          o)
        ) {
          var n = o.getAttribute("poster"),
            a = new Image();
          a.addEventListener("load", function () {
            i.classList.add("video-loaded");
          }),
            (a.src = n);
        }
      }));
}




iOSSafari && document.body.classList.add("ios-safari");
var Landingview = Barba.BaseView.extend({
  namespace: "landing-page",
  onEnter: function () {
    handleLandingSounds(this.container);
  },
  onEnterCompleted: function () {
    document.body.insertAdjacentHTML(
      "afterbegin",
      '\n  \t\t<style type="text/css">\n\t\t\t  html, body {margin:0;height:100%;overflow:hidden}\n\t\t\t\tbody {position:fixed;-webkit-overflow-scrolling:touch;overflow-y:scroll;width:100%;}\n\t\t\t</style>\n  \t\t'
    );
  },
  onLeave: function () {
    document.body.removeChild(document.body.children[0]);
  },
  onLeaveCompleted: function () {
    clearInterval(touchInterval);
  },
});

Landingview.init();
var Indexview = Barba.BaseView.extend({
  namespace: "index-page",
  onEnter: function () {
    var e = this.container;
    if (!isTouch) {
      var t = {
        maxImgSize: lightboxWidth,
        onopen: function () {},
      };
      new Lightbox().load(t);
    }
    handlePosts(e),
      handlePageVideos(e),
      handleSliders(e),
      handlePostCloseButton(e);
  },
  onEnterCompleted: function () {},
  onLeave: function () {},
  onLeaveCompleted: function () {},
});


Indexview.init(),
  Barba.Pjax.init(),
  Barba.Prefetch.init(),
  (Barba.Pjax.originalPreventCheck = Barba.Pjax.preventCheck),
  (Barba.Pjax.preventCheck = function (e, t) {
    return (
      !!Barba.Pjax.originalPreventCheck(e, t) &&
      !/.pdf/.test(t.href.toLowerCase())
    );
  });
var MRTransition = Barba.BaseTransition.extend({
  start: function () {
    document.body.classList.add("loading-initialized"),
      document.body.classList.add("transition-started"),
      Promise.all([this.newContainerLoading, this.minimalTimeout()]).then(
        this.finish.bind(this)
      );
  },
  minimalTimeout: function () {
    var e = Barba.Utils.deferred();
    return (
      setTimeout(function () {
        e.resolve();
      }, 500),
      e.promise
    );
  },
  finish: function () {
    this.oldContainer, this.newContainer;
    window.scrollTo(0, 0),
      document.body.classList.remove("loading-initialized"),
      setTimeout(function () {
        document.body.classList.remove("transition-started");
      }, 500),
      this.done();
  },
});
