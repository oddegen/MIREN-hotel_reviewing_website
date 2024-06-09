<?php view("partials/head.view.php") ?>
<?php view("partials/nav.view.php") ?>

<main class="container px-6 py-8 mx-auto">
    <div class="flex items-start justify-around">
        <aside class="pt-10">
            <h2>Filters</h2>
            <form class="block" action="/search">
                <div class="border-b border-gray-200 py-2">
                    <h3 class="-my-3 flow-root">
                        <button type="button" class="flex w-full items-center justify-between py-3 text-sm text-gray-400 hover:text-gray-500" aria-controls="filter-section-0" aria-expanded="false">
                            <span class="font-medium text-gray-900">Color</span>
                        </button>
                    </h3>
                    <!-- Filter section, show/hide based on section state. -->
                    <div class="pt-6" id="filter-section-0">
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <input id="filter-color-0" name="color[]" value="white" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-red-600 focus:ring-red-500">
                                <label for="filter-color-0" class="ml-3 text-sm text-gray-600">White</label>
                            </div>
                            <div class="flex items-center">
                                <input id="filter-color-1" name="color[]" value="beige" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-red-600 focus:ring-red-500">
                                <label for="filter-color-1" class="ml-3 text-sm text-gray-600">Beige</label>
                            </div>
                            <div class="flex items-center">
                                <input id="filter-color-2" name="color[]" value="blue" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-red-600 focus:ring-red-500">
                                <label for="filter-color-2" class="ml-3 text-sm text-gray-600">Blue</label>
                            </div>
                            <div class="flex items-center">
                                <input id="filter-color-3" name="color[]" value="brown" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-red-600 focus:ring-red-500">
                                <label for="filter-color-3" class="ml-3 text-sm text-gray-600">Brown</label>
                            </div>
                            <div class="flex items-center">
                                <input id="filter-color-4" name="color[]" value="green" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-red-600 focus:ring-red-500">
                                <label for="filter-color-4" class="ml-3 text-sm text-gray-600">Green</label>
                            </div>
                            <div class="flex items-center">
                                <input id="filter-color-5" name="color[]" value="purple" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-red-600 focus:ring-red-500">
                                <label for="filter-color-5" class="ml-3 text-sm text-gray-600">Purple</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-b border-gray-200 py-6">
                    <h3 class="-my-3 flow-root">
                        <!-- Expand/collapse section button -->
                        <button type="button" class="flex w-full items-center justify-between py-3 text-sm text-gray-400 hover:text-gray-500" aria-controls="filter-section-1" aria-expanded="false">
                            <span class="font-medium text-gray-900">Category</span>
                        </button>
                    </h3>
                    <!-- Filter section, show/hide based on section state. -->
                    <div class="pt-6" id="filter-section-1">
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <input id="filter-category-0" name="category[]" value="new-arrivals" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-red-600 focus:ring-red-500">
                                <label for="filter-category-0" class="ml-3 text-sm text-gray-600">New Arrivals</label>
                            </div>
                            <div class="flex items-center">
                                <input id="filter-category-1" name="category[]" value="sale" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-red-600 focus:ring-red-500">
                                <label for="filter-category-1" class="ml-3 text-sm text-gray-600">Sale</label>
                            </div>
                            <div class="flex items-center">
                                <input id="filter-category-2" name="category[]" value="travel" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-red-600 focus:ring-red-500">
                                <label for="filter-category-2" class="ml-3 text-sm text-gray-600">Travel</label>
                            </div>
                            <div class="flex items-center">
                                <input id="filter-category-3" name="category[]" value="organization" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-red-600 focus:ring-red-500">
                                <label for="filter-category-3" class="ml-3 text-sm text-gray-600">Organization</label>
                            </div>
                            <div class="flex items-center">
                                <input id="filter-category-4" name="category[]" value="accessories" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-red-600 focus:ring-red-500">
                                <label for="filter-category-4" class="ml-3 text-sm text-gray-600">Accessories</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-b border-gray-200 py-6">
                    <h3 class="-my-3 flow-root">
                        <!-- Expand/collapse section button -->
                        <button type="button" class="flex w-full items-center justify-between py-3 text-sm text-gray-400 hover:text-gray-500" aria-controls="filter-section-2" aria-expanded="false">
                            <span class="font-medium text-gray-900">Size</span>
                        </button>
                    </h3>
                    <!-- Filter section, show/hide based on section state. -->
                    <div class="pt-6" id="filter-section-2">
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <input id="filter-size-0" name="size[]" value="2l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-red-600 focus:ring-red-500">
                                <label for="filter-size-0" class="ml-3 text-sm text-gray-600">2L</label>
                            </div>
                            <div class="flex items-center">
                                <input id="filter-size-1" name="size[]" value="6l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-red-600 focus:ring-red-500">
                                <label for="filter-size-1" class="ml-3 text-sm text-gray-600">6L</label>
                            </div>
                            <div class="flex items-center">
                                <input id="filter-size-2" name="size[]" value="12l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-red-600 focus:ring-red-500">
                                <label for="filter-size-2" class="ml-3 text-sm text-gray-600">12L</label>
                            </div>
                            <div class="flex items-center">
                                <input id="filter-size-3" name="size[]" value="18l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-red-600 focus:ring-red-500">
                                <label for="filter-size-3" class="ml-3 text-sm text-gray-600">18L</label>
                            </div>
                            <div class="flex items-center">
                                <input id="filter-size-4" name="size[]" value="20l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-red-600 focus:ring-red-500">
                                <label for="filter-size-4" class="ml-3 text-sm text-gray-600">20L</label>
                            </div>
                            <div class="flex items-center">
                                <input id="filter-size-5" name="size[]" value="40l" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-red-600 focus:ring-red-500">
                                <label for="filter-size-5" class="ml-3 text-sm text-gray-600">40L</label>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="bg-red-500 text-white w-full py-2 px-4 rounded">Filter</button>
            </form>
        </aside>

        <!-- Product grid -->
        <div class="col-span-1">
            <h2 class="text-2xl font-bold mb-4">Hotels with breakfast included</h2>
            <div class="space-y-4 mb-2">
                <?php for ($i = 0; $i < 5; $i++) : ?>
                    <div class="bg-white shadow rounded p-4 flex items-center">
                        <img src="https://via.placeholder.com/100x100" alt="Hotel Norrebro" class="w-24 h-24 rounded mr-4">
                        <div class="flex-grow">
                            <h3 class="text-xl font-semibold">Hotel Norrebro</h3>
                            <p class="text-gray-600">0.4 km from city centre · Free cancellation · Breakfast included</p>
                            <p class="text-gray-600">Comfort room · 1x king size bed, 1x bathroom</p>
                            <div class="flex space-x-2 mt-2">
                                <span class="bg-red-500 text-white px-2 py-1 rounded">Hot deal</span>
                                <span class="bg-red-500 text-white px-2 py-1 rounded">Popular</span>
                            </div>
                        </div>
                        <div class="text-right">
                            <div class="text-red-500 text-xl font-bold mb-2">Excellent rating</div>
                            <div class="text-gray-600">9.6</div>
                            <div class="text-gray-600">1,920 reviews</div>
                            <div class="text-lg font-semibold mt-2">$180 per night</div>
                            <div class="text-gray-600">3 nights, 2 guests</div>
                            <button class="bg-red-500 text-white px-4 py-2 rounded mt-2">See booking options</button>
                        </div>
                    </div>
                <?php endfor; ?>

            </div>
            <div>
                <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6 rounded">
                    <div class="flex flex-1 items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-700">
                                Showing
                                <span class="font-medium">1</span>
                                to
                                <span class="font-medium">10</span>
                                of
                                <span class="font-medium">97</span>
                                results
                            </p>
                        </div>
                        <div>
                            <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                                <a href="#" class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                                    <span class="sr-only">Previous</span>
                                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <!-- Current: "z-10 bg-red-600 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600", Default: "text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0" -->
                                <a href="#" aria-current="page" class="relative z-10 inline-flex items-center bg-red-500 px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">1</a>
                                <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">2</a>
                                <a href="#" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">3</a>
                                <span class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-inset ring-gray-300 focus:outline-offset-0">...</span>
                                <a href="#" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">8</a>
                                <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">9</a>
                                <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">10</a>
                                <a href="#" class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                                    <span class="sr-only">Next</span>
                                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>

<?php view("partials/footer.view.php") ?>