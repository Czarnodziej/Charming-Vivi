window.onload = function() {
  "use strict";
  var przycisk,
          przycisk = function() {
    var button = document.getElementById('button');
    button.onclick = function() {
      var skillVis = document.getElementById('skills') || document.getElementById('skillsv');
      if (skillVis.id === 'skills') {
        skillVis.id = 'skillsv';
        button.textContent = 'Ukryj detale';
      } else {
        skillVis.id = 'skills';
        button.textContent = 'Pokaż detale';
      }
    };
  };
  przycisk();
};
