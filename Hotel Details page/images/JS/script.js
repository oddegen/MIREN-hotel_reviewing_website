'use hold'
document.addEventListener("DOMContentLoaded", function() {
  // Smooth scrolling for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();

      document.querySelector(this.getAttribute('href')).scrollIntoView({
        behavior: 'smooth'
      });
    });
  });
});

// JavaScript for rating stars
// JavaScript for rating stars
document.querySelectorAll('.stars').forEach(starDiv => {
  const rating = parseFloat(starDiv.dataset.rating);
  const starPercentage = (rating / 5) * 100;
  const starPercentageRounded = `${Math.round(starPercentage / 10) * 10}%`;
  starDiv.style.width = starPercentageRounded;
  const starTotal = 5;
  const starPercentageFilled = (rating / starTotal) * 100;
  const starPercentageEmpty = 100 - starPercentageFilled;
  starDiv.innerHTML = `
    <div class="stars-inner" style="width: ${starPercentageFilled}%">
      <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
    </div>
    <div class="stars-outer">
      <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
    </div>`;
});


