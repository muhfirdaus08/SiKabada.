// NAVBAR

const navbar = document.getElementsByTagName("nav")[0];
window.addEventListener("scroll", function () {
    console.log(this.window.scrollY);
    if (window.scrollY > 1) {
        navbar.classList.replace("bg-transparent", "nav-color");
    } else if (window.scrollY <= 0) {
        navbar.classList.replace("nav-color", "bg-transparent");
    }
});

// END NAVBAR

// JQUERY LOADMORE
$(document).ready(function () {
    $(".artikel-card").slice(0, 6).show();
    $("#nocontent").hide();
    $("#loadmore").on("click", function (e) {
        e.preventDefault();
        $(".artikel-card:hidden").slice(0, 3).slideDown();
        if ($(".artikel-card:hidden").length == 0) {
            $("#loadmore").hide();
            $("#nocontent").show();
        }
    });
});

// END JQUERY LOADMORE
