window.onload = function mobilBGAttachFix() {
  "use strict";
  if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|Opera Mini|IEMobile/i.test(navigator.userAgent)) {
    document.body.style.backgroundAttachment = "scroll";
  }
};