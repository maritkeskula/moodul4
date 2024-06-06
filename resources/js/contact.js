// dropdown open and close
function openNav(menu) {
    menu.style.width = "100%";
}

function closeNav(menu) {
    menu.style.width = "0%";
}

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.menubtn').forEach(btn => {
        btn.addEventListener('click', function() {
            const menu = this.nextElementSibling; // Assuming the menu is the next sibling
            openNav(menu);
        });
    });

    document.querySelectorAll('.closebtn').forEach(btn => {
        btn.addEventListener('click', function() {
            const menu = this.closest('.menu');
            closeNav(menu);
        });
    });
});
