$(document).ready(function () {
    var availableTags = [];

    $.ajax({
        method: "GET",
        url: "/api/suggestion",
        success: function (response) {
            startAutocomplete(response);
        }
    });

    function startAutocomplete(availableTags) {
        $("#search-bar").autocomplete({
            source: availableTags
        });
    }
  });
