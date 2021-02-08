'use strict';

var ContactPageModule = (function () {
  let tabButtons;
  let tabs;

  function init() {
    tabButtons = document.getElementsByClassName('tab-btn');
    tabs = document.getElementsByClassName('tab');

    for (let tabBtn of tabButtons) {
      tabBtn.addEventListener('click', function (e) {
        const tabId = e.target.getAttribute('for');
        const clickedTab = document.getElementById(tabId);
        const isSelected = e.target.classList.contains('tab-btn-selected');
        for (let btn of tabButtons) {
          btn.classList.remove('tab-btn-selected');
        }
        if (!isSelected) {
          e.target.classList.add('tab-btn-selected');
        }

        for (let tab of tabs) {
          tab.classList.remove('tab-selected');
        }
        if (!isSelected) {
          clickedTab.classList.add('tab-selected');
        }
      });
    }
  }

  return {
    Init: init,
  };
})();
