// document.addEventListener("DOMContentLoaded", function () {
//     const buttonSupport = document.querySelector(".button-support");
//     const chatContainer = document.querySelector(".chat-container");

//     let isOpen = false; // Track the state of the chat container

//     buttonSupport.addEventListener("click", function () {
//         this.classList.toggle("active");

//         if (!isOpen) {
//             // If the chat container is closed, animate opening
//             chatContainer.style.display = "block";
//             anime({
//                 targets: chatContainer,
//                 opacity: [0, 1],
//                 translateY: ["100%", 0],
//                 easing: "easeInOutExpo",
//                 duration: 500,
//             });
//             isOpen = true;
//         } else {
//             // If the chat container is open, animate closing
//             anime({
//                 targets: chatContainer,
//                 opacity: [1, 0],
//                 translateY: [0, "100%"],
//                 easing: "easeInOutExpo",
//                 duration: 500,
//                 complete: function () {
//                     chatContainer.style.display = "none";
//                 },
//             });
//             isOpen = false;
//         }
//     });
// });

document.addEventListener("DOMContentLoaded", function () {
    const buttonSupport = document.querySelector(".button-support");
    const chatContainer = document.querySelector(".chat-container");

    let isOpen = false; // Track the state of the chat container

    buttonSupport.addEventListener("click", function () {
        this.classList.toggle("active");

        if (!isOpen) {
            // If the chat container is closed, animate opening
            chatContainer.style.display = "block";
            anime({
                targets: chatContainer,
                opacity: [0, 1],
                translateY: ["100%", 0],
                easing: "easeInOutExpo",
                duration: 500,
            });
            isOpen = true;
        } else {
            // If the chat container is open, animate closing
            anime({
                targets: chatContainer,
                opacity: [1, 0],
                translateY: [0, "100%"],
                easing: "easeInOutExpo",
                duration: 500,
                complete: function () {
                    chatContainer.style.display = "none";
                },
            });
            isOpen = false;
        }
    });

    // Handle issue button clicks
    const issueButtons = document.querySelectorAll("[id^='issue-btn-']");
    issueButtons.forEach(function (button) {
        button.addEventListener("click", function () {
            const issueId = this.id.split("-")[2]; // Extract the issue ID from the button ID
            // Go fullscreen
            chatContainer.style.width = "100%";
            chatContainer.style.height = "100%";
            chatContainer.style.top = "0";
            chatContainer.style.left = "0";
            chatContainer.style.borderRadius = "0";

            // Fetch issue data using Livewire
            Livewire.emit("fetchIssue", issueId);
        });
    });
});
