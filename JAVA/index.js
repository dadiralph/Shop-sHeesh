let index = 0;
    function moveSlide(step) {
        const carousel = document.querySelector(".carousel");
        const items = document.querySelectorAll(".carousel-item");
        index = (index + step + items.length) % items.length;
        carousel.style.transform = `translateX(${-index * 100}%)`;
    }
    function autoSlide() {
      moveSlide(1);
      setTimeout(autoSlide, 3000);
  }
  
  setTimeout(autoSlide, 3000);