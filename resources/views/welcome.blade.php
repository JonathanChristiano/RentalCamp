<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>SilverHT Rental (Tailwind)</title>

    <link rel="stylesheet" href="styles.css">

    <style>
        /* CSS Tambahan untuk responsivitas iframe */
        .map-container {
            position: relative;
            width: 100%;
            padding-bottom: 75%;
        }

        .map-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body class="bg-gray-800 text-white">

    <header class="bg-orange-600 shadow-md py-4">
        <div class="max-w-6xl mx-auto px-4 flex justify-between items-center">
            <div class="text-2xl font-bold text-white">
                SilverHT
            </div>
            <nav>
                <ul class="flex space-x-6">
                    <li><a href="#" class="text-white hover:text-yellow-300 transition duration-150">Home</a></li>
                    <li><a href="#" class="text-white hover:text-yellow-300 transition duration-150">Product</a></li>
                    <li><a href="#" class="text-white hover:text-yellow-300 transition duration-150">Rent Form</a></li>
                    <li><a href="#" class="text-white hover:text-yellow-300 transition duration-150">Transaction & Order Info</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-4">

        <div class="py-20 text-center">
            <div class="inline-block bg-white p-6 shadow-xl rounded-lg">
                <img src="silverht-logo-placeholder.png" alt="SilverHT Rental Logo" class="w-72 h-auto">
            </div>
        </div>

        <div class="bg-gray-700 rounded-lg overflow-hidden mb-12 flex flex-col lg:flex-row">

            <div class="p-5 w-full lg:w-96 flex-shrink-0 relative">
                <div class="store-details">
                    <h2 class="text-white text-xl font-semibold mb-1">Silver HT Rental / Rental HT S...</h2>
                    <p class="text-gray-400 text-sm mb-2">Jl. Tulus Harapan No.9, Bendangduwur, Kec. Tembalang, Kota Semarang, Jawa Tengah 50272</p>

                    <div class="flex justify-end lg:absolute lg:top-5 lg:right-5">
                        <a href="#" class="bg-green-500 text-white font-bold text-sm py-1 px-4 rounded hover:bg-green-600 transition">Rute</a>
                    </div>

                    <div class="text-yellow-400 text-sm mt-4">
                        <span class="font-bold">4,6 ⭐⭐⭐⭐⭐</span>
                        <span class="ml-2 text-gray-400">14 ulasan</span>
                    </div>

                    <p class="mt-2">
                        <a href="#" class="text-blue-400 text-xs hover:text-blue-300 transition">Lihat peta lebih besar</a>
                    </p>
                </div>
            </div>

            <div class="map-container flex-grow">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15826.15589146522!2d110.4287864273523!3d-7.06015523412574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708fd42c2957f7%3A0x2a9a957827821610!2sJl.%20Tulus%20Harapan%20No.9!5e0!3m2!1sid!2sid!4v1700200000000!5m2!1sid!2sid"
                    frameborder="0"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </main>
</body>

</html>