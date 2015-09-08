$(window).ready(function () {
    console.log("ready");
    $("#email-alert-switch").click(function() {
        $(this).toggleClass("off");

        // Make API to store new user choice
    });
});
