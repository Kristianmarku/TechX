const cartIcon = document.getElementById("cart-icon-a");
const cartSection = document.querySelector(".cart-a");

cartIcon.addEventListener("click", () => {
    anime({
        targets: cartSection,
        translateX: ["100%", "0%"],
        duration: 500,
        easing: "easeInOutQuad",
        begin: () => {
            cartSection.style.display = "block";
        },
    });
});

const closeButton = document.getElementById("close-cart-a");

closeButton.addEventListener("click", () => {
    anime({
        targets: cartSection,
        translateX: ["0%", "100%"],
        duration: 500,
        easing: "easeInOutQuad",
        complete: () => {
            cartSection.style.display = "none";
        },
    });
});
