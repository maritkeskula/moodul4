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

// carousel
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}


// toggle see more/see less
document.addEventListener('DOMContentLoaded', () => {
  const toggleButton = document.getElementById('toggle-button');
  const hiddenContent = document.getElementById('hidden-content');

  toggleButton.addEventListener('click', (event) => {
    event.preventDefault(); // Prevent the default anchor behavior

    if (toggleButton.getAttribute('data-state') === 'less') {
      hiddenContent.style.display = 'inline';
      toggleButton.setAttribute('data-state', 'more');
      toggleButton.textContent = 'See Less';
    } else {
      hiddenContent.style.display = 'none';
      toggleButton.setAttribute('data-state', 'less');
      toggleButton.textContent = 'See More';
    }
  });
});
