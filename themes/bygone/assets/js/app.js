$(document).foundation()

let hamburgerMenu = document.querySelector("#bygone-hamburger-menu.hamburger-menu")

function showHamburgerMenu() {
    let x = hamburgerMenu;
    // var x = document.getElementById("bygone-hamburger-menu");
    if (x.style.display == "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
document.querySelector(".hamburger-icon").addEventListener("click", function () {
    showHamburgerMenu();
    console.log("hello")
})

