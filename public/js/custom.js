// To use this JS: <script src="{{ asset('js/custom.js') }}"></script>

window.addEventListener("scroll", function () {
    const header = document.getElementById("mainHeader");
    if (window.scrollY > 14) {
        header.classList.add("scrolled");
    } else {
        header.classList.remove("scrolled");
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const switches = document.querySelectorAll("#langSwitch, #langSwitch1");
    const langEN = document.querySelectorAll(".lang-en");
    const langID = document.querySelectorAll(".lang-id");

    function updateLanguageUI(lang) {
        if (lang === "id") {
            langEN.forEach((el) => el.classList.add("d-none"));
            langID.forEach((el) => el.classList.remove("d-none"));
            switches.forEach((sw) => (sw.checked = true));
        } else {
            langEN.forEach((el) => el.classList.remove("d-none"));
            langID.forEach((el) => el.classList.add("d-none"));
            switches.forEach((sw) => (sw.checked = false));
        }
    }

    const savedLang = localStorage.getItem("selectedLang") || "id";
    updateLanguageUI(savedLang);

    switches.forEach((switcher) => {
        switcher.addEventListener("change", function () {
            const lang = switcher.checked ? "id" : "en";
            localStorage.setItem("selectedLang", lang);
            updateLanguageUI(lang);
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const offcanvasEl = document.getElementById("mobileMenu");
    const offcanvas = bootstrap.Offcanvas.getOrCreateInstance(offcanvasEl);

    offcanvasEl
        .querySelectorAll(
            "a.nav-link, a.accordion-button, a.text-decoration-none"
        )
        .forEach(function (link) {
            link.addEventListener("click", function () {
                offcanvas.hide();
            });
        });
});

document.addEventListener("DOMContentLoaded", function () {
    const submenuToggles = document.querySelectorAll(".dropdown-submenu > a");
    let manuallyOpened = null;

    document
        .querySelectorAll(".dropdown-submenu .dropdown-menu")
        .forEach((menu) => {
            menu.classList.remove("show");
        });

    submenuToggles.forEach((toggle) => {
        const parentLi = toggle.parentElement;
        const submenu = toggle.nextElementSibling;

        parentLi.addEventListener("mouseenter", () => {
            if (manuallyOpened !== submenu) {
                submenu.classList.add("show");
            }
        });

        parentLi.addEventListener("mouseleave", () => {
            if (manuallyOpened !== submenu) {
                submenu.classList.remove("show");
            }
        });

        toggle.addEventListener("click", function (e) {
            e.preventDefault();
            e.stopPropagation();

            const isOpen = submenu.classList.contains("show");

            if (manuallyOpened === submenu) {
                submenu.classList.remove("show");
                manuallyOpened = null;
            } else {
                document
                    .querySelectorAll(".dropdown-submenu .dropdown-menu")
                    .forEach((menu) => {
                        menu.classList.remove("show");
                    });

                submenu.classList.add("show");
                manuallyOpened = submenu;
            }
        });
    });

    document.addEventListener("click", function (e) {
        if (!e.target.closest(".dropdown-menu")) {
            document
                .querySelectorAll(".dropdown-submenu .dropdown-menu")
                .forEach((menu) => {
                    menu.classList.remove("show");
                });
            manuallyOpened = null;
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const submenuToggles = document.querySelectorAll(".submenu-toggle");

    submenuToggles.forEach((toggle) => {
        toggle.addEventListener("click", function (e) {
            e.preventDefault();
            e.stopPropagation();

            const submenu = this.nextElementSibling;

            const isShown = submenu.classList.contains("show");

            document.querySelectorAll(".submenu-list").forEach((list) => {
                list.classList.remove("show");
            });

            if (!isShown) {
                submenu.classList.add("show");
            }
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const toastElList = document.querySelectorAll(".toast");
    toastElList.forEach(function (toastEl) {
        const toast = new bootstrap.Toast(toastEl);
        toast.show();
    });
});
