$(function () {

    var btnEvent = $(".btnEvent").add(".formEvent");
    middlewareEvent(btnEvent);
    $.ui.fancytree.debugLevel = 0;

    // Menu lateral
    var e = document.getElementsByClassName("sidebar")[0];
    document.getElementsByClassName("sidebar-toggle")[0].addEventListener("click", () => {
        e.classList.toggle("collapsed"), e.addEventListener("transitionend", () => {
            window.dispatchEvent(new Event("resize"))
        })
    });
    
    eventoCierreInesperado(true);
    menuAnalitos();
    
});