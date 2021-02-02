var MainModule = (function () {
  function addScrollListenerTo(selectors) {
    for (let i = 0; i < selectors.length; i++) {
      const stickyElement = selectors[i];
      window.addEventListener("scroll", function () {
        stickyElement.$element.classList.toggle(
          stickyElement.class,
          window.scrollY > stickyElement.scrollY
        );
      });
    }
  }

  function init() {
    addScrollListenerTo([
      {
        $element: document.querySelector("header#navbar"),
        class: "small-navbar",
        scrollY: 60,
      },
      {
        $element: document.querySelector("header#post-header"),
        class: "small-post-header",
        scrollY: 120,
      },
    ]);
  }

  return {
    Init: init,
  };
})();
