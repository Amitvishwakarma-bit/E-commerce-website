/* global bootstrap: false */
(function() {
    'use strict'
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    tooltipTriggerList.forEach(function(tooltipTriggerEl) {
        new bootstrap.Tooltip(tooltipTriggerEl)
    })
})()


$(document).ready(function() {
    $("ul a").click(function(e) {

        e.preventDefault();

        $("#main_display_frame").attr("src", $(this).attr("href"));
    })

});