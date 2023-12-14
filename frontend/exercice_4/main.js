let MenuBurgerButton = document.getElementById("menu-burger-button");
let MenuBurger = document.getElementById("menu-burger");
let MenuBurgerClose = document.getElementById("menu-burger-close");
let OpenBurger = document.getElementById("open-burger");
let Link = document.querySelectorAll(".link")

MenuBurgerButton.addEventListener("click", function () {
    if (MenuBurger.style.display === "none" || MenuBurger.style.display === "") {
        MenuBurger.style.display = "block";
    } else {
        MenuBurger.style.display = "none";
    }
});

MenuBurgerClose.addEventListener("click", function () {
    MenuBurger.style.display = "none";
});

Link.forEach(element => {
    element.addEventListener("click", function () {
        MenuBurger.style.display = "none";
    })
});

window.addEventListener("resize", function () {
    if (window.screen > "770px") {
        MenuBurger.style.display = "none";
    }
})
