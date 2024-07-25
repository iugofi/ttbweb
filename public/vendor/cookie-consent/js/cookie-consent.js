(() => {
    "use strict";

    // Utility Functions
    function getCookie(name) {
        const match = document.cookie.match(new RegExp('(^| )' + encodeURIComponent(name) + '=([^;]+)'));
        return match ? decodeURIComponent(match[2]) : null;
    }

    function showElement(element) {
        element.style.display = "";
    }

    function hideElement(element) {
        element.style.display = "none";
    }

    function isHidden(element) {
        return element.style.display === "none";
    }

    function elementMatches(element, selector) {
        return element.matches ? element.matches(selector) : false;
    }

    function getSiblings(element, filter) {
        const siblings = [];
        let sibling = element.parentNode.firstChild;
        while (sibling) {
            if (sibling.nodeType === 1 && sibling !== element && (!filter || elementMatches(sibling, filter))) {
                siblings.push(sibling);
            }
            sibling = sibling.nextSibling;
        }
        return siblings;
    }

    function addEventListenerToSelector(event, selector, handler) {
        document.querySelectorAll(selector).forEach(element => {
            element.addEventListener(event, handler);
        });
    }

    function activateModal(modal, skipFocus = false) {
        getSiblings(modal, ":not(.js-lcc-backdrop)").forEach(sibling => {
            sibling.inert = true;
        });
        modal.inert = false;
        if (!skipFocus) toggleBackdrop();
        showElement(modal);
    }

    function deactivateModal(modal, skipFocus = false) {
        getSiblings(modal, ":not(.js-lcc-modal)").forEach(sibling => {
            sibling.inert = false;
        });
        modal.inert = true;
        hideElement(modal);
        if (!skipFocus) toggleBackdrop();
    }

    function toggleBackdrop() {
        const backdrop = document.querySelector(".js-lcc-backdrop");
        if (isHidden(backdrop)) {
            document.querySelector("html").classList.add("js-lcc-active");
            showElement(backdrop);
            backdrop.style.opacity = "1";
        } else {
            document.querySelector("html").classList.remove("js-lcc-active");
            backdrop.addEventListener("transitionend", function handleTransitionEnd() {
                hideElement(backdrop);
                backdrop.removeEventListener("transitionend", handleTransitionEnd);
            });
            backdrop.style.opacity = "0";
        }
    }

    // Variables
    const alertModal = document.querySelector(".js-lcc-modal-alert");
    const settingsModal = document.querySelector(".js-lcc-modal-settings");
    const settingsToggleButton = document.querySelector("button.js-lcc-settings-toggle");
    const backdrop = document.querySelector(".js-lcc-backdrop");
    const analyticsCheckbox = document.getElementById("lcc-checkbox-analytics");
    const marketingCheckbox = document.getElementById("lcc-checkbox-marketing");
    const cookieKey = alertModal.dataset.cookieKey || "__cookie_consent";
    const cookieValueAnalytics = alertModal.dataset.cookieValueAnalytics || "2";
    const cookieValueMarketing = alertModal.dataset.cookieValueMarketing || "3";
    const cookieValueNone = alertModal.dataset.cookieValueNone || "false";
    const cookieValueBoth = alertModal.dataset.cookieValueBoth || "true";
    const cookieExpirationDays = parseInt(alertModal.dataset.cookieExpirationDays) || 365;
    const gtmEvent = alertModal.dataset.gtmEvent || "pageview";
    const sessionDomain = alertModal.dataset.sessionDomain;
    const ignoredPaths = alertModal.dataset.ignoredPaths ? alertModal.dataset.ignoredPaths.split(',').map(path => path.trim()) : null;

    let cookieChangeHandler = null;

    function openSettingsModal() {
        function closeModal() {
            backdrop.removeEventListener("click", closeModal);
            document.body.removeEventListener("keydown", handleEscKey);
            deactivateModal(settingsModal, !getCookie(cookieKey));
            if (!getCookie(cookieKey)) activateModal(alertModal, true);
            settingsToggleButton.focus();
        }

        function handleEscKey(event) {
            if (event.keyCode === 27) {
                event.preventDefault();
                closeModal();
            }
        }

        if (isHidden(settingsModal)) {
            activateModal(settingsModal, !isHidden(alertModal));
            updateCheckboxesFromCookie();
            backdrop.addEventListener("click", closeModal);
            document.body.addEventListener("keydown", handleEscKey);
        } else {
            closeModal();
        }
    }

    function updateCheckboxesFromCookie() {
        const cookieValue = getCookie(cookieKey);
        analyticsCheckbox.checked = cookieValue === cookieValueBoth || cookieValue === cookieValueAnalytics;
        marketingCheckbox.checked = cookieValue === cookieValueBoth || cookieValue === cookieValueMarketing;
    }

    function setCookie(value) {
        const expirationDate = new Date();
        expirationDate.setTime(expirationDate.getTime() + (cookieExpirationDays * 24 * 60 * 60 * 1000));
        const cookieString = `${encodeURIComponent(cookieKey)}=${encodeURIComponent(value)}; expires=${expirationDate.toUTCString()}; path=/; domain=${sessionDomain || ''}`;
        document.cookie = cookieString;
        if (cookieChangeHandler) cookieChangeHandler(value);
        if (window.dataLayer) window.dataLayer.push({ event: gtmEvent });
    }

    function initialize() {
        if (/bot|google|baidu|bing|msn|duckduckbot|teoma|slurp|yandex/i.test(navigator.userAgent)) return;

        if (ignoredPaths && ignoredPaths.includes(location.pathname)) return;

        if (!getCookie(cookieKey)) {
            activateModal(alertModal);
        }

        updateCheckboxesFromCookie();

        addEventListenerToSelector("click", ".js-lcc-settings-toggle", openSettingsModal);
        addEventListenerToSelector("click", ".js-lcc-essentials", () => {
            setCookie(cookieValueNone);
            deactivateModal(settingsModal, true);
            deactivateModal(alertModal);
        });
        addEventListenerToSelector("click", ".js-lcc-accept", () => {
            setCookie("true");
            deactivateModal(settingsModal, true);
            deactivateModal(alertModal);
        });
        addEventListenerToSelector("click", ".js-lcc-settings-save", () => {
            const cookieValue = analyticsCheckbox.checked && marketingCheckbox.checked ? cookieValueBoth
                : analyticsCheckbox.checked ? cookieValueAnalytics
                : marketingCheckbox.checked ? cookieValueMarketing
                : cookieValueNone;
            setCookie(cookieValue);
            openSettingsModal();
            deactivateModal(alertModal);
        });
    }

    // Initialize the script
    initialize();

    // Public function to change cookie consent
    window.cookieBannerConsentChange = function (handler) {
        cookieChangeHandler = handler;
    };
})();
