<?php require('partials/head.view.php') ?>
<?php require('partials/nav.view.php') ?>

  <main>
        <section class="relative bg-cover bg-center h-96" style="background-image: url('/assets/images/visualsofdana-T5pL6ciEn-I-unsplash.png');">
            <div class="container mx-auto px-6 h-full flex items-center justify-center">
                <div class="text-center text-white">
                    <h1 class="text-4xl font-bold mb-4 text-black">Find your perfect hotel with Miren</h1>
                    <p class="mb-8 text-black">Over <?= $total_rooms ?> rooms worldwide are waiting for you!</p>
                    <div class="bg-white bg-opacity-90 p-4 rounded-lg inline-block">
                        <form action="/search">
                            <?php view("partials/search.view.php") ?>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    <section class="container mx-5 px-6 py-12">
    <h2 class="text-2xl font-bold mb-6">Explore popular destinations</h2>
    <div class="grid grid-cols-[repeat(4,_minmax(10%,_1fr))] auto-rows-[155px] gap-3">
        <div class="relative row-[1/3]">
            <img src="/assets/images/small/redd-f-nTBW1cOY1qI-unsplash.jpg" alt="Paris" class="rounded-lg h-full w-full object-cover" style="border-radius: 10px;">
            <div class="absolute bottom-2 left-2 bg-gray-800 bg-opacity-75 text-white px-2 py-1 rounded">Paris</div>
        </div>
        <div class="relative">
            <img src="/assets/images/small/aurelien-romain-zHth1uFXV6I-unsplash.jpg" alt="London" class="rounded-lg h-full w-full object-cover">
            <div class="absolute bottom-2 left-2 bg-gray-800 bg-opacity-75 text-white px-2 py-1 rounded">London</div>
        </div>
        <div class="relative row-[1/3] col-[3/4]">
            <img src="/assets/images/small/jason-leung-yux412uKpG0-unsplash.jpg" alt="Tokyo" class="rounded-lg h-full w-full object-cover">
            <div class="absolute bottom-2 left-2 bg-gray-800 bg-opacity-75 text-white px-2 py-1 rounded">Tokyo</div>
        </div>
        <div class="relative">
            <img src="/assets/images/small/gaddafi-rusli-2ueUnL4CkV8-unsplash.jpg" alt="Rome" class="rounded-lg h-full w-full object-cover">
            <div class="absolute bottom-2 left-2 bg-gray-800 bg-opacity-75 text-white px-2 py-1 rounded">Rome</div>
        </div>
        <div class="relative">
            <img src="/assets/images/small/jonathan-chng-7_WyzplsaSE-unsplash.jpg" alt="Barcelona" class="rounded-lg h-full w-full object-cover">
            <div class="absolute bottom-2 left-2 bg-gray-800 bg-opacity-75 text-white px-2 py-1 rounded">Barcelona</div>
        </div>
        <div class="relative">
            <img src="/assets/images/small/pietro-de-grandi-T7K4aEPoGGk-unsplash.jpg" alt="New York" class="rounded-lg h-full w-full object-cover">
            <div class="absolute bottom-2 left-2 bg-gray-800 bg-opacity-75 text-white px-2 py-1 rounded">New York</div>
        </div>
    </div>
</section>

    <section class="container mx-5 px-6 py-6">
    <h2 class="text-2xl font-bold mb-6">Top-rated hotels by guests</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-6">
        <?php foreach ($hotels as $hotel): ?>
            <div class="relative bg-white rounded-lg shadow-lg overflow-hidden">
              <img src="https://via.placeholder.com/300x200" alt="Soho Hotel" class="w-full h-48 object-cover">
              <div class="p-4">
                  <div class="absolute top-2 left-2 bg-red-500 text-white px-2 py-1 rounded"><?= $hotel['rating'] ?></div>
                  <h3 class="font-bold text-lg"><?= $hotel['name'] ?></h3>
                  <p class="text-gray-600"><?= $hotel['location'] ?></p>
                  <p class="font-semibold mt-2">Starting from $<?= $hotel['price'] ?></p>
              </div>
              <button class="absolute top-2 right-2 bg-white text-gray-800 p-1 rounded-full w-8 h-8">
                  <img src="/assets/images/heart.svg" alt="like">
              </button>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<section class="container mx-5 px-6">
    <div class="flex justify-around items-center py-12 bg-gray-200 rounded-lg">
        <div>
            <h3 class="text-xl font-bold">Exclusive Offer!</h3>
            <p class="text-gray-600">Want to receive exclusive offers and the best prices for your dream stays? Sign up now to join our Travel Club!</p>
        </div>
        <a href="/register?hotel=true" class="bg-red-500 text-white px-6 py-3 rounded">Sign up</a>
    </div>
</section>

  </main>

  <?php require('partials/footer.view.php') ?>
