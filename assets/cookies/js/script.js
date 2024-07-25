const cookieBox = document.querySelector(".wrappercoo"),
    buttons = document.querySelectorAll(".buttoncoo");

const executeCodes = () => {
    // If cookie contains codinglab it will be returned and below code will not run
    if (document.cookie.includes("codinglab")) return;
    cookieBox.classList.add("show");

    buttons.forEach((button) => {
        button.addEventListener("click", () => {
            cookieBox.classList.remove("show");

            // If button has acceptBtn id
            if (button.id == "acceptBtn") {
                // Set cookies for 1 month. 60 = 1 min, 60 = 1 hour, 24 = 1 day, 30 = 30 days
                document.cookie = "cookieBy=codinglab; max-age=" + 60 * 60 * 24 * 30;
            }
        });
    });
};

// Execute executeCodes function on webpage load
window.addEventListener("load", executeCodes);
