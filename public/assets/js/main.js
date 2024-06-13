const hearts = document.querySelectorAll(".heart");
const bannerBtn = document.querySelector(".banner-btn button");
const home = document.querySelector(".home");
const banner = document.querySelector(".banner");

const form = document.querySelector("form");
const searchBtn = document.querySelector(".searchBtn");

hearts.forEach((heart) => {
  return heart.addEventListener("click", () => {
    heart.classList.toggle("like");
  });
});

document.addEventListener("DOMContentLoaded", () => {
  let played = sessionStorage.getItem("reveled");

  if (!played) {
    bannerBtn.addEventListener("click", (e) => {
      e.preventDefault();

      banner.classList.add("visually-hidden");
      home.classList.remove("visually-hidden");
      home.classList.add("revealed");

      sessionStorage.setItem("reveled", true);
    });
  } else {
    home.classList.remove("visually-hidden");
    banner.innerHTML = "";
    banner.remove();
  }
});

searchBtn.addEventListener("click", async (e) => {
  e.preventDefault();
  let value = form.children[0].children[1].value;

  let searchResult = await fetch(`http://localhost:3000/hotels?hotel_location=${value}`)
    .then((res) => res.json())
    .catch(() => {
      return "No result";
    });

  sessionStorage.setItem("search", JSON.stringify(searchResult));
  window.location.href = "../../Search Result page/results.html";
});
