// jQuery(document).ready(function ($) {

    // $(document).foundation()


    let hamburgerMenu = document.querySelector("#bygone-hamburger-menu.hamburger-menu")



    window.onload = function () {
        let hamburgerButton = document.querySelector("#masthead .hamburger-wrapper #hamburger-icon");
        
        hamburgerButton.addEventListener("click", function () {
            showHamburgerMenu();
            console.log("hello");
        })
    }


    function showHamburgerMenu() {
        // let x = hamburgerMenu;
        // let x = document.querySelector("#bygone-hamburger-menu .hamburger-menu");
        let x = document.querySelector("#bygone-hamburger-menu");
        console.log(x);
        
        console.log(x.style.display);
        

        if (x.style.display == "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
// });


