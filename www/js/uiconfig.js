$(function() {
  "use strict";
  $("#datepicker")
          .datepicker({
    autoSize: true,
    regional: "pl",
    showWeek: true,
    showAnim: "slide",
    showOtherMonths: true,
    selectOtherMonths: true,
    showButtonPanel: true,
    changeMonth: true,
    changeYear: true,
    yearRange: "1982:2032"
  });
  $(document)
          .tooltip({
    track: true
  });
  var tabs = $("#tabs")
          .tabs();
  tabs.find(".ui-tabs-nav")
          .sortable({
    axis: "x",
    stop: function() {
      tabs.tabs("refresh");
    }
  });
});

