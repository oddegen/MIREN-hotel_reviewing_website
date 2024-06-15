<?php view("partials/head.view.php") ?>
<?php view("partials/nav.view.php") ?>

<main class="container px-6 py-8 mx-auto">
    <form action="/search">
        <div class="flex items-start justify-around">

            <aside class="pt-10">
                <h2>Filters</h2>
                <div class="block">
                    <div class="border-b border-gray-200 py-2">
                        <h3 class="-my-3 flow-root">
                            <div class="flex w-full items-center justify-between py-3 text-sm text-gray-400 hover:text-gray-500" aria-controls="filter-section-0" aria-expanded="false">
                                <span class="font-medium text-gray-900">Amenities</span>
                            </div>
                        </h3>
                        <div class="pt-6" id="filter-section-0">
                            <div class="space-y-4">
                                <?php foreach ($amenities as $amenity) : ?>
                                    <div class="flex items-center">
                                        <input id="filter-color-<?= $amenity ?>" name="amenities[]" value="<?= $amenity ?>" <?= in_array($amenity, $selected_amenities) ? "checked" : ""; ?> type="checkbox" class="h-4 w-4 rounded border-gray-300 text-red-600 focus:ring-red-500">
                                        <label for="filter-color-<?= $amenity ?>" class="ml-3 text-sm text-gray-600"><?= $amenity ?></label>
                                    </div>
                                <?php endforeach; ?>
                                <?php if (isset($errors['amenities'])) : ?>
                                    <?php foreach ($errors['amenities'] as $error) : ?>
                                        <li class="text-red-500 text-xs mt-2"><?= $error ?></li><br>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="border-b border-gray-200 py-6">
                        <h3 class="-my-3 flow-root">
                            <div class="flex w-full items-center justify-between py-3 text-sm text-gray-400 hover:text-gray-500" aria-controls="filter-section-1" aria-expanded="false">
                                <span class="font-medium text-gray-900">Nightly Rate</span>
                            </div>
                        </h3>
                        <div class="pt-6" id="filter-section-1">
                            <div class="space-y-4">
                                <?php foreach ($nightly_rate as $rate) : ?>
                                    <div class="flex items-center">
                                        <input id="filter-category-<?= $rate ?>" name="nightly_rate[]" value="<?= $rate ?>" <?= in_array($rate, $selected_nightly_rate) ? "checked" : "" ?> type="checkbox" class="h-4 w-4 rounded border-gray-300 text-red-600 focus:ring-red-500">
                                        <label for="filter-category-<?= $rate ?>" class="ml-3 text-sm text-gray-600"><?= $rate ?></label>
                                    </div>
                                <?php endforeach; ?>
                                <?php if (isset($errors['nightly_rate'])) : ?>
                                    <?php foreach ($errors['nightly_rate'] as $error) : ?>
                                        <li class="text-red-500 text-xs mt-2"><?= $error ?></li><br>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="border-b border-gray-200 py-6">
                        <h3 class="-my-3 flow-root">
                            <div class="flex w-full items-center justify-between py-3 text-sm text-gray-400 hover:text-gray-500" aria-controls="filter-section-2" aria-expanded="false">
                                <span class="font-medium text-gray-900">Guest Satisfaction</span>
                            </div>
                        </h3>
                        <div class="pt-6" id="filter-section-2">
                            <div class="space-y-4">
                                <?php foreach ($guest_satisfaction as $satisfaction) : ?>
                                    <div class="flex items-center">
                                        <input id="filter-size-<?= $satisfaction ?>" name="guest_satisfaction[]" value="<?= $satisfaction ?>" <?= in_array($satisfaction, $selected_guest_satisfaction) ? "checked" : "" ?> type="checkbox" class="h-4 w-4 rounded border-gray-300 text-red-600 focus:ring-red-500">
                                        <label for="filter-size-<?= $satisfaction ?>" class="ml-3 text-sm text-gray-600"><?= $satisfaction ?></label>
                                    </div>
                                <?php endforeach ?>
                                <?php if (isset($errors['guest_satisfaction'])) : ?>
                                    <?php foreach ($errors['guest_satisfaction'] as $error) : ?>
                                        <li class="text-red-500 text-xs mt-2"><?= $error ?></li><br>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>

            <div class="col-span-1">
                <div class="bg-white bg-opacity-90 p-4 rounded-lg inline-block mb-4">
                    <?php view("partials/search.view.php", [
                        'location' => $location,
                        'check_in_date' => $check_in_date,
                        'check_out_date' => $check_out_date,
                        'number_of_guests' => $number_of_guests,

                        'errors' => $errors
                    ]) ?>
                </div>
                <?php if (!empty($hotels)) : ?>
                    <h2 class="text-2xl font-bold mb-4">Hotels in <?= $location ?></h2>
                    <div class="space-y-4 mb-2">
                        <?php foreach ($hotels as $hotel) : ?>
                            <div class="bg-white shadow rounded p-4 flex h-max">
                                <img src="<?= $hotel["image_url"] ?>" alt="Image of <?= $hotel["hotel_name"] ?>" class="rounded mr-4">
                                <div class="flex-grow">
                                    <h3 class="text-xl font-semibold"><?= $hotel["hotel_name"] ?></h3>
                                    <p class="text-gray-600"><?php foreach (explode(", ", $hotel["amenities_names"]) as $amenity) : ?><?= $amenity ?> · <?php endforeach; ?></p>
                                    <p class="text-black mt-4"><?= $hotel['room_type'] ?></p>
                                    <p class="text-gray-600"><?= $hotel['number_of_beds'] . 'x' . $hotel['bed_type'] . ', ' . $hotel['number_of_bathrooms'] . 'bathroom' ?></p>
                                </div>
                                <div class="text-right flex flex-col gap-8">
                                    <div>
                                        <div class="text-red-500 text-xl font-bold mb-2">Excellent rating</div>
                                        <div class="text-gray-600"><?= $hotel['rating'] ?></div>
                                        <div class="text-gray-600">1,920 reviews</div>
                                    </div>
                                    <div class="flex flex-col gap-3">
                                        <div class="text-lg font-semibold mt-2">$<?= $hotel['price'] ?> per night</div>
                                        <a href="/hotel/123" class="bg-red-500 text-white px-4 py-2 rounded">See booking options</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php else : ?>
                    <div class=" flex  p-44 justify-center items-center">
                        <p>No Result</p>
                    </div>
                <?php endif; ?>

                <?php if(ceil($total_no_results / $num_of_results_per_page) > 0): ?>
                <div>
                    <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6 rounded">
                        <div class="flex flex-1 items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-700">
                                    Showing
                                    <span class="font-medium"><?= ($current_page - 1) * $num_of_results_per_page + 1 ?></span>
                                    to
                                    <span class="font-medium"><?= ($current_page - 1) * $num_of_results_per_page + $num_of_results_per_page ?></span>
                                    of
                                    <span class="font-medium"><?= $total_no_results ?></span>
                                    results
                                </p>
                            </div>
                            <div>
                                <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                                    <?php if($current_page > 1): ?>
                                    <a href="#" class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                                        <span class="sr-only">Previous</span>
                                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                    <?php endif; ?>

                                    
                                    <?php if($current_page > 3): ?>
                                        <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">1</a>
                                        <span class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-inset ring-gray-300 focus:outline-offset-0">...</span>
                                    <?php endif; ?>

                                    <?php if($current_page-2 > 0): ?>
                                        <a href="#" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex"><?= $current_page - 2 ?></a>
                                        <a href="#" aria-current="page" class="relative z-10 inline-flex items-center bg-red-500 px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600"><?= $current_page ?></a>
                                    <?php endif; ?>

                                    <?php if($current_page-1 > 0): ?>
                                        <a href="#" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex"><?= $current_page - 1 ?></a>
                                    <?php endif; ?>

                                    <a href="#" aria-current="page" class="relative z-10 inline-flex items-center bg-red-500 px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600"><?= $current_page ?></a>

                                    <?php if($current_page+1 < ($total_pages+1)): ?>
                                        <a href="#" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex"><?= $current_page + 1 ?></a>
                                    <?php endif; ?>

                                    <?php if($current_page+2 < ($total_pages+1)): ?>
                                        <a href="#" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex"><?= $current_page + 2 ?></a>
                                    <?php endif; ?>

                                    <?php if($current_page < ($total_pages-21)): ?>
                                        <span class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-inset ring-gray-300 focus:outline-offset-0">...</span>
                                        <a href="#" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex"><?= $total_pages ?></a>
                                    <?php endif; ?>

                                    <?php if($current_page < $total_pages): ?>
                                        <a href="#" class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                                        <span class="sr-only">Next</span>
                                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                    <?php endif; ?>
                                </nav>
                            </div>
                        </div>
                    </div>

                </div>
                <?php endif; ?>
            </div>
        </div>

    </form>
</main>

<?php view("partials/footer.view.php") ?>