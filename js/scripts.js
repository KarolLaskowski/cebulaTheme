"use strict";

var MainModule = (function () {
  function addScrollListenerTo(selectors) {
    for (let i = 0; i < selectors.length; i++) {
      const stickyElement = selectors[i];
      window.addEventListener("scroll", function () {
        if (stickyElement.addClass) {
          stickyElement.$element.classList.toggle(
            stickyElement.addClass,
            window.scrollY > stickyElement.scrollY
          );
        }
        if (stickyElement.removeClass) {
          stickyElement.$element.classList.toggle(
            stickyElement.removeClass,
            window.scrollY <= stickyElement.scrollY
          );
        }
      });
    }
  }

  function rnd(from, to) {
    const random = Math.random();
    const floor = Math.floor(random * (to - from + 1)) + from;
    return floor;
  }

  const maxSnowflakesOnScreen = 10;
  const depthClassNames = {
    1: "snowflake--front",
    2: "snowflake--middle",
    3: "snowflake--back",
  };
  let $snowflakes;
  let $main404;
  let $mainFooter;

  function letItSnow404($main404, $mainFooter, emojisArray) {
    $snowflakes = $main404.querySelectorAll(".snowflake");
    window.setInterval(function () {
      if ($snowflakes.length <= maxSnowflakesOnScreen && Math.random() < 0.1) {
        let randomEmoji = emojisArray[rnd(0, emojisArray.length)];
        let randomPosition = rnd(10, 90);
        let $newSnowflake = document.createElement("span");
        const randomDepthNum = rnd(1, 3);
        const randomDepthClass = depthClassNames[randomDepthNum];
        $newSnowflake.classList.add("snowflake", randomDepthClass);
        $newSnowflake.style.left = randomPosition + "%";
        $newSnowflake.innerText = randomEmoji;
        $main404.appendChild($newSnowflake);
        $snowflakes = $main404.querySelectorAll(".snowflake");
      }

      let i = $snowflakes.length;
      while (i--) {
        const $snowflake = $snowflakes[i];
        const emojiTopTxt = getComputedStyle($snowflake).top;
        const footerHeightTxt = getComputedStyle($mainFooter).height;
        const emojiTop = Number(emojiTopTxt.substr(0, emojiTopTxt.length - 2));
        const footerHeight = Number(
          footerHeightTxt.substr(0, footerHeightTxt.length - 2)
        );
        if (emojiTop > window.innerHeight - footerHeight - 10) {
          $main404.removeChild($snowflake);
          $snowflakes = $main404.querySelectorAll(".snowflake");
        }
      }
    }, 100);
  }

  function init() {
    const $headerNavbar = document.querySelector("header#navbar");
    const $postHeader = document.querySelector("div.post-header");
    const stickiesArray = [];
    if ($headerNavbar) {
      stickiesArray.push({
        $element: $headerNavbar,
        addClass: "small-navbar",
        scrollY: 60,
      });
    }
    if ($postHeader) {
      stickiesArray.push({
        $element: $postHeader,
        addClass: "small-fixed-header",
        scrollY: 170,
      });
    }

    addScrollListenerTo(stickiesArray);

    $main404 = document.getElementById("page-404");
    $mainFooter = document.getElementById("main-footer");
    if ($main404) {
      letItSnow404($main404, $mainFooter, [
        "🦄",
        "🧠",
        "👩‍⚕️",
        "👨‍⚕️",
        "👩‍🎓",
        "👨‍🎓",
        "👩‍🏫",
        "👨‍🏫",
        "👩‍🔬",
        "👨‍🔬",
        "🥼",
        "🥽",
        "🧪",
        "🩺",
        "🧬",
        "🧫",
        "💉",
        "🩹",
        "💊",
        "🔬",
        "🚑",
        "🏥",
        "🏫",
      ]);
    }
  }

  return {
    Init: init,
  };
})();
