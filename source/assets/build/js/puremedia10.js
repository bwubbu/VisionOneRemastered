/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./source/_assets/js/puremedia10.js":
/*!******************************************!*\
  !*** ./source/_assets/js/puremedia10.js ***!
  \******************************************/
/***/ (() => {

/*-----------------------------------------------------------------------------------
/*
/* Main JS
/*
-----------------------------------------------------------------------------------*/

(function ($) {
  /*---------------------------------------------------- */
  /* Preloader
  ------------------------------------------------------ */
  $(window).load(function () {
    // will first fade out the loading animation 
    $("#status").fadeOut("slow");

    // will fade out the whole DIV that covers the website. 
    $("#preloader").delay(500).fadeOut("slow").remove();
  });

  /*----------------------------------------------------*/
  /* Backstretch
  /*----------------------------------------------------*/

  if ($("html").hasClass('ie8')) {
    $("#hero").backstretch("images/hero-bg.jpg");
    $("#page-title").backstretch("images/hero-bg.jpg");
  }

  /*----------------------------------------------------*/
  /* FitText Settings
  ------------------------------------------------------ */
  setTimeout(function () {
    $('#page-title h1').fitText(1, {
      minFontSize: '38px',
      maxFontSize: '54px'
    });
  }, 100);

  /*----------------------------------------------------*/
  /* Adjust Primary Navigation Background Opacity
  ------------------------------------------------------*/
  $(window).on('scroll', function () {
    var h = $('header').height();
    var y = $(window).scrollTop();
    var header = $('#main-header');
    if (y > h + 30 && $(window).outerWidth() > 768) {
      header.addClass('opaque');
    } else {
      if (y < h + 30) {
        header.removeClass('opaque');
      } else {
        header.addClass('opaque');
      }
    }
  });

  /*-----------------------------------------------------*/
  /* Alert Boxes
  	-------------------------------------------------------*/
  $('.alert-box').on('click', '.close', function () {
    $(this).parent().fadeOut(500);
  });

  /*-----------------------------------------------------*/
  /* Mobile Menu
  ------------------------------------------------------ */
  var menu_icon = $("<span class='menu-icon'></span>");
  var toggle_button = $("<a>", {
    id: "toggle-btn",
    html: "<span class='menu-text'>Menu</span>",
    title: "Menu",
    href: "#"
  });
  var nav_wrap = $('nav#nav-wrap');
  var nav = $("ul#nav");

  /* if JS is enabled, remove the two a.mobile-btns 
  	 and dynamically prepend a.toggle-btn to #nav-wrap */
  nav_wrap.find('a.mobile-btn').remove();
  toggle_button.append(menu_icon);
  nav_wrap.prepend(toggle_button);
  toggle_button.on("click", function (e) {
    e.preventDefault();
    nav.slideToggle("fast");
  });
  if (toggle_button.is(':visible')) nav.addClass('mobile');
  $(window).resize(function () {
    if (toggle_button.is(':visible')) nav.addClass('mobile');else nav.removeClass('mobile');
  });
  $('ul#nav li a').on("click", function () {
    if (nav.hasClass('mobile')) nav.fadeOut('fast');
  });

  /*----------------------------------------------------*/
  /* Smooth Scrolling
  ------------------------------------------------------ */
  $('.smoothscroll').on('click', function (e) {
    e.preventDefault();
    var target = this.hash,
      $target = $(target);
    $('html, body').stop().animate({
      'scrollTop': $target.offset().top
    }, 800, 'swing', function () {
      window.location.hash = target;
    });
  });

  /*----------------------------------------------------*/
  /* Highlight the current section in the navigation bar
  ------------------------------------------------------*/
  var sections = $("section"),
    navigation_links = $("#nav-wrap a");
  if ($("body").hasClass('homepage')) {
    sections.waypoint({
      handler: function handler(event, direction) {
        var active_section;
        active_section = $(this);
        if (direction === "up") active_section = active_section.prev();
        var active_link = $('#nav-wrap a[href="#' + active_section.attr("id") + '"]');
        navigation_links.parent().removeClass("current");
        active_link.parent().addClass("current");
      },
      offset: '25%'
    });
  }

  /*----------------------------------------------------*/
  /* Flexslider
  /*----------------------------------------------------*/
  $(window).load(function () {
    $('#hero-slider').flexslider({
      namespace: "flex-",
      controlsContainer: ".flex-container",
      animation: 'fade',
      controlNav: true,
      directionNav: false,
      smoothHeight: true,
      slideshowSpeed: 7000,
      animationSpeed: 600,
      randomize: false
    });
  });

  /*----------------------------------------------------*/
  /*	contact form
  ------------------------------------------------------*/

  $('form#contactForm button.submit').on('click', function () {
    $('#image-loader').fadeIn();
    var contactFname = $('#contactForm #contactFname').val();
    var contactLname = $('#contactForm #contactLname').val();
    var contactEmail = $('#contactForm #contactEmail').val();
    var contactSubject = $('#contactForm #contactSubject').val();
    var contactMessage = $('#contactForm #contactMessage').val();
    var data = 'contactFname=' + contactFname + '&contactLname=' + contactLname + '&contactEmail=' + contactEmail + '&contactSubject=' + contactSubject + '&contactMessage=' + contactMessage;
    $.ajax({
      type: "POST",
      url: "inc/sendEmail.php",
      data: data,
      success: function success(msg) {
        // Message was sent
        if (msg == 'OK') {
          $('#image-loader').fadeOut();
          $('#message-warning').hide();
          $('#contactForm').fadeOut();
          $('#message-success').fadeIn();
        }
        // There was an error
        else {
          $('#image-loader').fadeOut();
          $('#message-warning').html(msg);
          $('#message-warning').fadeIn();
        }
      }
    });
    return false;
  });

  /*-----------------------------------------------------*/
  /* Back to top
  ------------------------------------------------------ */
  var pxShow = 300; // height on which the button will show
  var fadeInTime = 400; // how slow/fast you want the button to show
  var fadeOutTime = 400; // how slow/fast you want the button to hide
  var scrollSpeed = 300; // how slow/fast you want the button to scroll to top. can be a value, 'slow', 'normal' or 'fast'

  // Show or hide the sticky footer button
  jQuery(window).scroll(function () {
    if (jQuery(window).scrollTop() >= pxShow) {
      jQuery("#go-top").fadeIn(fadeInTime);
    } else {
      jQuery("#go-top").fadeOut(fadeOutTime);
    }
  });
})(jQuery);

/***/ }),

/***/ "./source/_assets/sass/main.scss":
/*!***************************************!*\
  !*** ./source/_assets/sass/main.scss ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/puremedia10": 0,
/******/ 			"css/main": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/main"], () => (__webpack_require__("./source/_assets/js/puremedia10.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/main"], () => (__webpack_require__("./source/_assets/sass/main.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;