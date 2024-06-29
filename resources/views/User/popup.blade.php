
<style>
    /* Popup container */
    .popup {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
        z-index: 1000;
    }

    /* Popup content */
    .popup-content {
        background: white;
        padding: 80px;
        border-radius: 10px;
        text-align: center;
        position: relative;
        max-width: 500px;
        width: 90%;
    }

    /* Close button */
    .popup-content .close-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        background: transparent;
        border: none;
        font-size: 30px;
        cursor: pointer;
    }

    /* Popup image */
    .popup-content img {
        max-width: 100%;
        height: auto;
    }

    /* Popup text */
    .popup-content h1,
    .popup-content p {
        margin: 10px 0;
    }

    /* Button */
    .popup-content .btn {
        display: inline-block;
        padding: 10px 20px;
        font-size: 1rem;
        color: white;
        background-color: #13d8aa;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .popup-content .btn:hover {
        background-color: #0bb38c;
    }
</style>

<!-- Popup HTML -->
<div class="popup" id="popup">
    <div class="popup-content">
        <button class="close-btn" id="closePopup">&times;</button>
        <img src="https://www.ttbinternetsecurity.com/assets/img/logo.png" alt="Popup Image">
        <h1>Special Offer!</h1>
        <p>Get 10% off your next purchase. <br>Use code: SPECIAL10 at checkout.</p>
        <a href="/" class="btn" id="redirectHome">Purchase Now!</a>
    </div>
</div>

<script>
    // Get the popup element
    const popup = document.getElementById('popup');

    // Get the close button element
    const closePopup = document.getElementById('closePopup');

    // Show the popup after 15 seconds
    setTimeout(() => {
        popup.style.display = 'flex';
    }, 1000);

    // Close the popup when the close button is clicked
    closePopup.addEventListener('click', () => {
        popup.style.display = 'none';
    });

    // Close the popup when clicking outside of the popup content
    window.addEventListener('click', (event) => {
        if (event.target === popup) {
            popup.style.display = 'none';
        }
    });

    // Redirect to the home page when the button is clicked
    document.getElementById('redirectHome').addEventListener('click', (event) => {
        event.preventDefault();
        window.location.href = '/';
    });
</script>
 