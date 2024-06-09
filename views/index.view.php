<?php require('partials/head.view.php') ?>
<?php require('partials/nav.view.php') ?>

  <main>
        <section class="relative bg-cover bg-center h-96" style="background-image: url('https://via.placeholder.com/1920x1080');">
            <div class="container mx-auto px-6 h-full flex items-center justify-center">
                <div class="text-center text-white">
                    <h1 class="text-4xl font-bold mb-4">Find your perfect hotel with HotelVista</h1>
                    <p class="mb-8">Over 1 million rooms worldwide are waiting for you!</p>
                    <div class="bg-white bg-opacity-90 p-4 rounded-lg inline-block">
                        <form class="flex space-x-4" action="/search">
                            <input type="text" name="location" placeholder="Location" class="border rounded p-2 flex-1 text-black">
                            <input type="date" name="check-in-date" placeholder="Check-in date" class="border rounded p-2 text-black">
                            <input type="date" name="check-out-date" placeholder="Check-out date" class="border rounded p-2 text-black">
                            <input type="number" name="number-of-guests" placeholder="Number of guests" class="border rounded p-2 text-black" min="1" max="20">
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">></button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="container mx-5 px-6 py-12">
            <h2 class="text-2xl font-bold mb-6">Explore popular destinations</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                <div class="relative">
                    <img src="https://via.placeholder.com/400x300" alt="Paris" class="rounded-lg">
                    <div class="absolute bottom-2 left-2 bg-gray-800 bg-opacity-75 text-white px-2 py-1 rounded">Paris</div>
                </div>
                <div class="relative">
                    <img src="https://via.placeholder.com/400x300" alt="London" class="rounded-lg">
                    <div class="absolute bottom-2 left-2 bg-gray-800 bg-opacity-75 text-white px-2 py-1 rounded">London</div>
                </div>
                <div class="relative">
                    <img src="https://via.placeholder.com/400x300" alt="Tokyo" class="rounded-lg">
                    <div class="absolute bottom-2 left-2 bg-gray-800 bg-opacity-75 text-white px-2 py-1 rounded">Tokyo</div>
                </div>
                <div class="relative">
                    <img src="https://via.placeholder.com/400x300" alt="Rome" class="rounded-lg">
                    <div class="absolute bottom-2 left-2 bg-gray-800 bg-opacity-75 text-white px-2 py-1 rounded">Rome</div>
                </div>
                <div class="relative">
                    <img src="https://via.placeholder.com/400x300" alt="Barcelona" class="rounded-lg">
                    <div class="absolute bottom-2 left-2 bg-gray-800 bg-opacity-75 text-white px-2 py-1 rounded">Barcelona</div>
                </div>
                <div class="relative">
                    <img src="https://via.placeholder.com/400x300" alt="New York" class="rounded-lg">
                    <div class="absolute bottom-2 left-2 bg-gray-800 bg-opacity-75 text-white px-2 py-1 rounded">New York</div>
                </div>
            </div>
        </section>
        <section class="container mx-5 px-6 py-12">
    <h2 class="text-2xl font-bold mb-6">Top-rated hotels by guests</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-6">
        <?php for ($i=0; $i < 5; $i++): ?>
            <div class="relative bg-white rounded-lg shadow-lg overflow-hidden">
              <img src="https://via.placeholder.com/300x200" alt="Soho Hotel" class="w-full h-48 object-cover">
              <div class="p-4">
                  <div class="absolute top-2 left-2 bg-red-500 text-white px-2 py-1 rounded">9.6</div>
                  <h3 class="font-bold text-lg">Soho Hotel</h3>
                  <p class="text-gray-600">London</p>
                  <p class="font-semibold mt-2">Starting from $130/night</p>
              </div>
              <button class="absolute top-2 right-2 bg-white text-gray-800 p-1 rounded-full">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 5.121A7.953 7.953 0 0012 4c2.209 0 4.209.897 5.656 2.344A7.953 7.953 0 0020 12c0 2.209-.897 4.209-2.344 5.656A7.953 7.953 0 0112 20a7.953 7.953 0 01-5.656-2.344A7.953 7.953 0 014 12c0-2.209.897-4.209 2.344-5.656z"></path>
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12l-3-3m0 0l-3 3m3-3v12"></path>
                  </svg>
              </button>
            </div>
        <?php endfor; ?>
    </div>
</section>

<section class="container mx-5 px-6">
    <div class="flex justify-around items-center py-12 bg-gray-200 rounded-lg">
        <div>
            <h3 class="text-xl font-bold">Exclusive Offer!</h3>
            <p class="text-gray-600">Want to receive exclusive offers and the best prices for your dream stays? Sign up now to join our Travel Club!</p>
        </div>
        <a href="/register" class="bg-red-500 text-white px-6 py-3 rounded">Sign up</a>
    </div>
</section>

  </main>

  <?php require('partials/footer.view.php') ?>
