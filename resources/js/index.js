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


// slider
document.addEventListener('DOMContentLoaded', () => {
  const sliderContainer = document.querySelector('.slider');
  const images = document.querySelectorAll('.slider .slide');
  let currentImageIndex = 0;

  if (!sliderContainer) {
    console.error('Slider container not found');
    return;
  }

  function slideShow() {
    images.forEach((img, index) => {
      if (index === currentImageIndex) {
        img.style.display = 'block';
      } else {
        img.style.display = 'none';
      }
    });
  }

  function nextSlide() {
    currentImageIndex = (currentImageIndex + 1) % images.length;
    slideShow();
  }

  slideShow();

  setInterval(nextSlide, 3000);
});
