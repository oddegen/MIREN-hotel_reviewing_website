const openModal = document.querySelector(".btn-sort-filter");
const modal = document.querySelector(".modal");
const closeModal = document.querySelector(".btn-close");
const btnDone = document.querySelector(".btn-done");
const overlay = document.querySelector(".overlay");

const searchForm = document.querySelector(".search-form");
const results = document.getElementById("results");

function openModalF() {
  modal.classList.remove("display-none");
  overlay.classList.remove("display-none");
}

function closeModalF() {
  modal.classList.add("display-none");
  overlay.classList.add("display-none");
}

openModal.addEventListener("click", openModalF);
closeModal.addEventListener("click", closeModalF);
btnDone.addEventListener("click", closeModalF);

overlay.addEventListener("click", closeModalF);

let searchResults = JSON.parse(sessionStorage.getItem("search"));

const pShow = document.querySelector(".p-show");

pShow.innerHTML =
  searchResults.length === 0
    ? "No result"
    : `Showing <span>10</span> results for <span>${searchResults[0]["hotel_location"]}</span>`;

//Building search functionalities
let localResult = searchResults;

const showResults = () => {
  if (localResult.length !== 0) {
    localResult.forEach((result) => {
      console.log(result);
      // Create container div
      const hotelInfoDiv = document.createElement("div");
      hotelInfoDiv.className = "hotel-info flex-container bg-white round br-shadow mr-bottom400 relative";

      // Create photo container
      const photoContDiv = document.createElement("div");
      photoContDiv.className = "photo-cont";
      const hotelPhotoImg = document.createElement("img");
      hotelPhotoImg.className = "hotel-photo";
      hotelPhotoImg.src = `../assets/images/${result["hotel_images"]}`;
      hotelPhotoImg.alt = "hotel image";
      photoContDiv.appendChild(hotelPhotoImg);
      hotelInfoDiv.appendChild(photoContDiv);

      // Create content container
      const contentDiv = document.createElement("div");
      contentDiv.className = "flex-col p-2 gap-1x";

      // Create title
      const titleDiv = document.createElement("div");
      titleDiv.className = "mx-w400";
      const titleHeader = document.createElement("h4");
      titleHeader.className = "fs-300 fw-bold";
      titleHeader.textContent = `${result["hotel_name"]}`;
      titleDiv.appendChild(titleHeader);

      // Create star ratings
      const starContainer = document.createElement("div");
      for (let i = 0; i < 5; i++) {
        const starSvg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
        starSvg.setAttribute("class", "star");
        starSvg.setAttribute("height", "8");
        starSvg.setAttribute("width", "10");
        starSvg.setAttribute("viewBox", "0 0 384 512");
        const starPath = document.createElementNS("http://www.w3.org/2000/svg", "path");
        starPath.setAttribute("fill", "red");
        starPath.setAttribute(
          "d",
          "M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
        );
        starSvg.appendChild(starPath);
        starContainer.appendChild(starSvg);
      }

      // Create location
      const locationP = document.createElement("p");
      locationP.textContent = `${result["hotel_location"]}`;

      titleDiv.appendChild(starContainer);
      titleDiv.appendChild(locationP);
      contentDiv.appendChild(titleDiv);

      // Create distance from city center
      const locDiv = document.createElement("div");
      const distanceP = document.createElement("p");
      distanceP.innerHTML = `<span>${Math.random() * 67}</span> <span>km</span> from city center`;

      // Create show on map link
      const showOnMapP = document.createElement("p");
      showOnMapP.className = "link";
      const showOnMapA = document.createElement("a");
      showOnMapA.href = "./map.html";
      const showOnMapSvg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
      showOnMapSvg.setAttribute("class", "loc-svg");
      showOnMapSvg.setAttribute("height", "12");
      showOnMapSvg.setAttribute("width", "8");
      showOnMapSvg.setAttribute("viewBox", "0 0 384 512");
      const showOnMapPath = document.createElementNS("http://www.w3.org/2000/svg", "path");
      showOnMapPath.setAttribute("fill", "red");
      showOnMapPath.setAttribute(
        "d",
        "M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"
      );
      showOnMapSvg.appendChild(showOnMapPath);
      showOnMapA.appendChild(showOnMapSvg);
      showOnMapA.innerHTML += " show on map";
      showOnMapP.appendChild(showOnMapA);

      locDiv.appendChild(distanceP);
      locDiv.appendChild(showOnMapP);

      contentDiv.appendChild(locDiv);

      // Create hotel description
      const descriptionDiv = document.createElement("div");
      descriptionDiv.className = "pr-6";
      const descriptionHeader = document.createElement("h4");
      descriptionHeader.className = "fs-300 fw-bold";
      descriptionHeader.textContent = `Centrally Located Hotel in ${result["hotel_location"]}`;
      const descriptionP = document.createElement("p");
      descriptionP.textContent = `${result["hotel_description"]}`;
      descriptionDiv.appendChild(descriptionHeader);
      descriptionDiv.appendChild(descriptionP);
      contentDiv.appendChild(descriptionDiv);

      // Create rating and price container
      const ratingPriceDiv = document.createElement("div");
      ratingPriceDiv.className = "grid-container grid1x2 pr-2";

      // Create rating section
      const ratingSectionDiv = document.createElement("div");
      ratingSectionDiv.className = "flex-container gap-1x";
      const ratingDiv = document.createElement("div");
      ratingDiv.className = "rating bg-red round p-2";
      ratingDiv.textContent = `${Math.random * 5 + 1}`;
      const ratingInfoDiv = document.createElement("div");
      const ratingHeader = document.createElement("h5");
      ratingHeader.textContent = "Good";
      const reviewP = document.createElement("p");
      reviewP.textContent = "1 review";
      ratingInfoDiv.appendChild(ratingHeader);
      ratingInfoDiv.appendChild(reviewP);
      ratingSectionDiv.appendChild(ratingDiv);
      ratingSectionDiv.appendChild(ratingInfoDiv);

      // Create price section
      const priceSectionDiv = document.createElement("div");
      priceSectionDiv.className = "flex-col vertical-align-end";
      const priceHeader = document.createElement("h5");
      priceHeader.textContent = `${result["room_fee"]}`;
      const priceP1 = document.createElement("p");
      priceP1.textContent = "for 1 night";
      const priceP2 = document.createElement("p");
      priceP2.textContent = "includes taxes and fees";
      priceSectionDiv.appendChild(priceHeader);
      priceSectionDiv.appendChild(priceP1);
      priceSectionDiv.appendChild(priceP2);

      ratingPriceDiv.appendChild(ratingSectionDiv);
      ratingPriceDiv.appendChild(priceSectionDiv);

      contentDiv.appendChild(ratingPriceDiv);

      hotelInfoDiv.appendChild(contentDiv);

      // Create book button
      const bookButton = document.createElement("a");
      bookButton.className = "bg-red px-6py-2 absolute top-right round text-primary-400";
      bookButton.href = "../../Hotel Details page/index.html";
      bookButton.textContent = "Book";
      hotelInfoDiv.appendChild(bookButton);

      // Append hotel info div to the body
      results.appendChild(hotelInfoDiv);
    });
  }
};

const fetchResults = async (e) => {
  e.preventDefault();
  let value = searchForm.children[0].children[1].value;

  let searchResult = await fetch(`http://localhost:3000/hotels?hotel_location=${value}`)
    .then((res) => res.json())
    .catch(() => {
      return [];
    });

  localResult = JSON.parse(JSON.stringify(searchResult));
  showResults();
};

searchForm.addEventListener("submit", fetchResults);
