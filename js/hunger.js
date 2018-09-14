var menus = document.getElementsByClassName("hunger-menu");

if (menus.length > 0) {
    var firstMenu = menus[0];
    var firstItem = firstMenu.firstElementChild;
    firstItem.setAttribute("data-balloon-visible", true);
    setTimeout(function() {
        firstItem.removeAttribute("data-balloon-visible");
    }, 7200);
}
