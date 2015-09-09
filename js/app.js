$(document).ready(function () {
    $("form").submit(function(e) {
        console.log("logging in ...");
        // Make API call to verify credentials
        // redirect to #A2.0 onsuccess otherwise show error message
        e.preventDefault();
    });
});

