onePageScroll(".main", {
    sectionContainer : "section",
    loop : true,
    responsiveFallback : false
});

$('.dropdown').dropdown({
    onChange : function(value, text, $selectedItem) {
        alert(value);
    }
});