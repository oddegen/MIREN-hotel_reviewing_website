const hearts = document.querySelectorAll(".heart");
const bannerBtn = document.querySelector(".banner-btn button");
const home = document.querySelector(".home");
const banner = document.querySelector(".banner");

hearts.forEach((heart) => {
  return heart.addEventListener("click", () => {
    heart.classList.toggle("like");
  });
});

document.addEventListener("DOMContentLoaded", () => {
  bannerBtn.addEventListener("click", (e) => {
    e.preventDefault();
    banner.classList.add("visually-hidden");
    home.classList.remove("visually-hidden");
    home.classList.add("revealed");
  });
});
