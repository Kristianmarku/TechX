//  Cart
let cartIcon = document.querySelector("#cart-icon-a");
let cart = document.querySelector(".cart-a");
let closeCart = document.querySelector("#close-cart-a");
import { gsap } from "gsap";

// Open Cart
let open = false;

cartIcon.onclick = () => {
    if (open === false) {
        cart.classList.add("active-a");
        gsap.from(".cart-a", { duration: 1, y: "-100%", ease: "bounce" });
        open = true;
    } else {
        cart.classList.remove("active-a");
        open = false;
        console.log("OPENNN");
    }
};
// Close Cart
closeCart.onclick = () => {
    cart.classList.remove("active-a");
    open = false;
};

// Cart Working JS
if (document.readyState == "loading") {
    document.addEventListener("DOMContentLoaded", ready);
} else {
    ready();
}
