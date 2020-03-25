jQuery(document).ready(function ($) {

    $(document).foundation()


    let hamburgerButton = document.querySelector("#masthead .hamburger-wrapper #hamburger-icon");

    hamburgerButton.addEventListener("click", function () {
        showHamburgerMenu();
    })



    function showHamburgerMenu() {
        // let x = hamburgerMenu;
        // let x = document.querySelector("#bygone-hamburger-menu .hamburger-menu");
        let x = document.querySelector("#bygone-hamburger-menu");
        console.log(x.style.display);


        if (x.style.display == "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
        console.log(x.style.display);
    }
});