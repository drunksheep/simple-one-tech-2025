export function mobileHeader() {
    let openMenu = document.getElementById('open-menu');
    let closeMenu = document.getElementById('close-menu');
    let menuBody = document.getElementById('header-menu');

    if (window.innerWidth < 1025 && openMenu && menuBody) {
        openMenu.addEventListener('click', function () {
            menuBody?.classList.add('is-open');
            closeMenu?.classList.add('is-open');
            document.body.style.overflow = 'hidden';
        });
    }

    if (closeMenu) {
        closeMenu.addEventListener('click', function () {
            menuBody?.classList.remove('is-open');
            closeMenu?.classList.remove('is-open');
            document.body.style.overflow = 'auto';
        })

    }
}
