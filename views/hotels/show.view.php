<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Norrebro</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <nav class="bg-white p-4 shadow">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-xl font-bold">Tripster</div>
            <div>
                <a href="#" class="mx-2 text-gray-700 hover:text-gray-900">Properties</a>
                <a href="#" class="mx-2 text-gray-700 hover:text-gray-900">Attractions</a>
                <a href="#" class="mx-2 text-gray-700 hover:text-gray-900">Popular</a>
            </div>
            <div>
                <button class="bg-red-500 text-white px-4 py-2 rounded">Sign up</button>
                <button class="bg-gray-500 text-white px-4 py-2 rounded">Log in</button>
            </div>
        </div>
    </nav>

    <div class="container mx-auto mt-8">
        <div class="flex">
            <div class="w-2/3 pr-4">
                <img src="https://via.placeholder.com/600x400" class="w-full rounded-lg shadow" alt="Main Image">
                <div class="flex mt-4">
                    <img src="https://via.placeholder.com/150" class="w-1/3 pr-2 rounded-lg shadow" alt="Image 1">
                    <img src="https://via.placeholder.com/150" class="w-1/3 px-2 rounded-lg shadow" alt="Image 2">
                    <img src="https://via.placeholder.com/150" class="w-1/3 pl-2 rounded-lg shadow" alt="Image 3">
                </div>
            </div>
            <div class="w-1/3 pl-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h1 class="text-3xl font-bold">Hotel Norrebro</h1>
                    <p class="text-gray-700 mt-2">3-star hotel located in the heart of Copenhagen</p>
                    <div class="mt-4">
                        <div class="flex items-center">
                            <span class="text-lg font-semibold">Excellent</span>
                            <span class="ml-auto text-lg font-semibold">9.6</span>
                        </div>
                        <span class="text-gray-600 text-sm">(1,920 reviews)</span>
                    </div>
                    <div class="mt-4">
                        <h2 class="text-lg font-bold">Property overview</h2>
                        <ul class="mt-2 space-y-2">
                            <li class="flex items-center">
                                <span class="material-icons">wifi</span>
                                <span class="ml-2">Free Wifi</span>
                            </li>
                            <li class="flex items-center">
                                <span class="material-icons">local_parking</span>
                                <span class="ml-2">Free parking</span>
                            </li>
                            <li class="flex items-center">
                                <span class="material-icons">ac_unit</span>
                                <span class="ml-2">Air conditioning</span>
                            </li>
                            <li class="flex items-center">
                                <span class="material-icons">bathtub</span>
                                <span class="ml-2">Private bathroom</span>
                            </li>
                            <li class="flex items-center">
                                <span class="material-icons">vpn_key</span>
                                <span class="ml-2">Key card access</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-8">
            <h2 class="text-2xl font-bold">Rooms</h2>
            <div class="flex mt-4 space-x-4">
                <div class="bg-white p-4 rounded-lg shadow w-1/4">
                    <img src="https://via.placeholder.com/150" class="w-full rounded-lg" alt="Room 1">
                    <h3 class="text-lg font-bold mt-2">Double standard room</h3>
                    <p class="text-gray-700">18 sqm • 2 people</p>
                    <p class="text-gray-700">1 queen bed or 2 separate beds</p>
                    <p class="text-gray-700 mt-2">Non-refundable, Breakfast included</p>
                    <button class="bg-red-500 text-white mt-4 w-full py-2 rounded">Book now</button>
                </div>
                <div class="bg-white p-4 rounded-lg shadow w-1/4">
                    <img src="https://via.placeholder.com/150" class="w-full rounded-lg" alt="Room 2">
                    <h3 class="text-lg font-bold mt-2">Comfort single room</h3>
                    <p class="text-gray-700">21 sqm • 2 people</p>
                    <p class="text-gray-700">1 king size bed</p>
                    <p class="text-gray-700 mt-2">Non-refundable, Breakfast included</p>
                    <button class="bg-red-500 text-white mt-4 w-full py-2 rounded">Book now</button>
                </div>
                <div class="bg-white p-4 rounded-lg shadow w-1/4">
                    <img src="https://via.placeholder.com/150" class="w-full rounded-lg" alt="Room 3">
                    <h3 class="text-lg font-bold mt-2">Double standard room</h3>
                    <p class="text-gray-700">25 sqm • 2 people</p>
                    <p class="text-gray-700">1 king size bed</p>
                    <p class="text-gray-700 mt-2">Non-refundable, Breakfast included</p>
                    <button class="bg-red-500 text-white mt-4 w-full py-2 rounded">Book now</button>
                </div>
                <div class="bg-white p-4 rounded-lg shadow w-1/4">
                    <img src="https://via.placeholder.com/150" class="w-full rounded-lg" alt="Room 4">
                    <h3 class="text-lg font-bold mt-2">Double fancy room</h3>
                    <p class="text-gray-700">35 sqm • 2 people</p>
                    <p class="text-gray-700">1 king size bed and couch</p>
                    <p class="text-gray-700 mt-2">Non-refundable, Breakfast included</p>
                    <button class="bg-red-500 text-white mt-4 w-full py-2 rounded">Book now</button>
                </div>
            </div>
        </div>

        <div class="mt-8">
            <h2 class="text-2xl font-bold">Reviews</h2>
            <div class="flex mt-4">
                <div class="w-1/4">
                    <div class="bg-white p-4 rounded-lg shadow">
                        <h3 class="text-3xl font-bold">9.6/10</h3>
                        <div class="mt-2">
                            <div class="flex justify-between">
                                <span>Cleanliness</span>
                                <span>10/10</span>
                            </div>
                            <div class="bg-gray-200 rounded-full h-2 mt-2">
                                <div class="bg-red-500 h-2 rounded-full" style="width: 100%;"></div>
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="flex justify-between">
                                <span>Amenities</span>
                                <span>7/10</span>
                            </div>
                            <div class="bg-gray-200 rounded-full h-2 mt-2">
                                <div class="bg-red-500 h-2 rounded-full" style="width: 70%;"></div>
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="flex justify-between">
                                <span>Location</span>
                                <span>9/10</span>
                            </div>
                            <div class="bg-gray-200 rounded-full h-2 mt-2">
                                <div class="bg-red-500 h-2 rounded-full" style="width: 90%;"></div>
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="flex justify-between">
                                <span>Comfort</span>
                                <span>8/10</span>
                            </div>
                            <div class="bg-gray-200 rounded-full h-2 mt-2">
                                <div class="bg-red-500 h-2 rounded-full" style="width: 80%;"></div>
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="flex justify-between">
                                <span>WiFi Connection</span>
                                <span>9/10</span>
                            </div>
                            <div class="bg-gray-200 rounded-full h-2 mt-2">
                                <div class="bg-red-500 h-2 rounded-full" style="width: 90%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-3/4 pl-4">
                    <div class="bg-white p-4 rounded-lg shadow">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-bold">Excellent value for the price!</h3>
                            <span class="bg-green-500 text-white px-2 py-1 rounded">10</span>
                        </div>
                        <p class="mt-2 text-gray-700">We enjoyed our stay at this hotel. We will definitely come back!</p>
                        <ul class="mt-2 list-disc list-inside">
                            <li>Great location!</li>
                            <li>Service</li>
                            <li>Bottle of champagne in the room!</li>
                        </ul>
                        <p class="mt-4 text-gray-500">Reviewed on 20 September, 2022</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow mt-4">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-bold">Good hotel but noisy location</h3>
                            <span class="bg-yellow-500 text-white px-2 py-1 rounded">5.6</span>
                        </div>
                        <p class="mt-2 text-gray-700">Had room facing the street and it was super noisy. Unfortunately, we couldn't change room.</p>
                        <p class="mt-4 text-gray-500">Reviewed on 10 September, 2022</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
