jQuery(document).ready(function ($) {

    $(document).foundation()


    let hamburgerButton = document.querySelector("#masthead .hamburger-wrapper #hamburger-icon");

    hamburgerButton.addEventListener("click", function () {
        showHamburgerMenu();
    })



    function showHamburgerMenu() {
        let x = document.querySelector("#bygone-hamburger-menu");
        console.log(x.style.display);


        if (x.style.display == "none") {
            x.style.display = "block";
            $("#bygone-hamburger-menu").animate({
                opacity: 1
            }, 500);
        } else {
            x.style.display = "none";
        }
        console.log(x.style.display);
    }
});