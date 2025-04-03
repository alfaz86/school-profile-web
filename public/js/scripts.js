document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.getElementById("menu-toggle");
    const menuClose = document.getElementById("menu-close");
    const mobileMenu = document.getElementById("mobile-menu");
    const overlay = document.getElementById("overlay");
    const sidebar = document.getElementById("sidebar");
    const burgerIcon = document.getElementById("menu-toggle"); // Element burger icon

    menuToggle.addEventListener("click", function () {
        // Tampilkan mobile menu
        mobileMenu.classList.remove("hidden");

        // Sembunyikan burger icon
        burgerIcon.classList.add("hidden");

        // Trigger reflow untuk memastikan CSS direset
        void mobileMenu.offsetWidth;

        // Animasikan overlay dan sidebar
        overlay.classList.remove("bg-opacity-0");
        overlay.classList.add("bg-opacity-75");

        sidebar.classList.remove("translate-x-full");

        // Tambahkan overflow hidden ke body
        document.body.style.overflow = "hidden";
    });

    menuClose.addEventListener("click", closeMenu);
    overlay.addEventListener("click", closeMenu);

    // Fungsi untuk menutup menu
    function closeMenu() {
        // Animasikan keluar
        overlay.classList.remove("bg-opacity-75");
        overlay.classList.add("bg-opacity-0");

        sidebar.classList.add("translate-x-full");

        // Set timeout sesuai durasi animasi
        setTimeout(() => {
            mobileMenu.classList.add("hidden");
            document.body.style.overflow = "";

            // Tampilkan kembali burger icon
            burgerIcon.classList.remove("hidden");
        }, 300);
    }

    // Animasi untuk menu items (staggered)
    function animateMenuItems() {
        const menuItems = document.querySelectorAll("#sidebar ul li");
        menuItems.forEach((item, index) => {
            item.style.opacity = "0";
            item.style.transform = "translateX(20px)";

            setTimeout(() => {
                item.style.transition =
                    "opacity 0.3s ease, transform 0.3s ease";
                item.style.opacity = "1";
                item.style.transform = "translateX(0)";
            }, 100 + index * 50);
        });
    }

    // Panggil animateMenuItems saat sidebar dibuka
    menuToggle.addEventListener("click", animateMenuItems);
});
