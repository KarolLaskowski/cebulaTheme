var MainModule = (function () {
  function addScrollListenerTo(selectors) {
    for (let i = 0; i < selectors.length; i++) {
      window.addEventListener("scroll", function () {
        var $element = document.querySelector(selectors[i].selector);
        $element.classList.toggle(
          selectors[i].class,
          window.scrollY > selectors[i].scrollY
        );
      });
    }
  }

  function init() {
    addScrollListenerTo([
      {
        selector: "header#navbar",
        class: "small-navbar",
        scrollY: 60,
      },
    ]);
  }

  return {
    Init: init,
  };
})();
