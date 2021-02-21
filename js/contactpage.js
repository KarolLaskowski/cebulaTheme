'use strict';

var ContactPageModule = (function () {
  let tabButtons;
  let tabs;

  function openTab(tabId, e) {
    const $clickedTab = document.getElementById(tabId);
    if (!!$clickedTab) {
      const $clickedBtn = e?.target || document.querySelector('button[for="' + tabId + '"]');
      const isSelected = $clickedBtn.classList.contains('tab-btn-selected');
      for (let btn of tabButtons) {
        btn.classList.remove('tab-btn-selected');
      }
      if (!isSelected) {
        $clickedBtn.classList.add('tab-btn-selected');
      }

      for (let tab of tabs) {
        tab.classList.remove('tab-selected');
      }
      if (!isSelected) {
        $clickedTab.classList.add('tab-selected');
      }
    }
  }

  function init() {
    tabButtons = document.getElementsByClassName('tab-btn');
    tabs = document.getElementsByClassName('tab');

    if (window.location.hash) {
      openTab(window.location.hash.slice(1));
    }

    for (let tabBtn of tabButtons) {
      tabBtn.addEventListener('click', function (e) {
        const tabId = e.target.getAttribute('for');
        openTab(tabId, e);

        history.pushState({}, '', '#' + tabId);
      });
    }
  }

  return {
    Init: init,
  };
})();
