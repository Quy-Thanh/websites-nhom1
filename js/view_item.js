   document.addEventListener("DOMContentLoaded", function() {
      const productContainer = document.querySelector(".product-list");
      const prevBtn = document.querySelector(".prev-btn");
      const nextBtn = document.querySelector(".next-btn");
      const scrollStep = 220;

      prevBtn.addEventListener("click", scrollProductsBackward);
      nextBtn.addEventListener("click", scrollProductsForward);

      function scrollProductsBackward() {
        productContainer.scrollBy({
          left: -scrollStep,
          behavior: "smooth"
        });
      }

      function scrollProductsForward() {
        productContainer.scrollBy({
          left: scrollStep,
          behavior: "smooth"
        });
      }
    });