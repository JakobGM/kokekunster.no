try {
AJS.toInit(function ($) {
    $("#comments-actions").hide();
});
} catch (err) {
    if (console && console.log) {
        console.log("Error loading resource (19776)");
        console.log(err);
    }
}

