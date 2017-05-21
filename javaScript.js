function show(shown, hidden) {
    document.getElementById(shown).style.display = 'block';
    document.getElementById(hidden).style.display = 'none';
    return false;
}

/**************************ABOUT*****************************/
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function () {

        var id = this.id;

        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }

        $('html, body').animate({
            scrollTop: $('#' + id).offset().top
        }, 900);
    }
}


/**************************INDEX*****************************/
/* Adding and removing the "responsive" class to topnav on click */
function TopnavOpen() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";

        x.parentNode.className += " alignBase";
    } else {
        x.className = "topnav";

        x.parentNode.className = "topnavInnerContainer";
    }
}
