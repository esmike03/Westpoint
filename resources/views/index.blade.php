<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" type="image/png" href="{{ asset('IMAGES/logowestpoint.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <title>Westpoint pharma inc.</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <style>
        .fade {
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }
        .fade.show {
            opacity: 1;
        }
    </style>
</head>


<body>
    <header
        class="fixed border-b-4 border-green-500 top-0 left-0 right-0 mb-2 px-4 shadow bg-white z-50 backdrop-filter backdrop-blur-xl bg-opacity-30">

        <div class="relative mx-auto flex max-w-screen-lg flex-col py-4 sm:flex-row sm:items-center sm:justify-between">
            <a class="flex items-center text-2xl font-black" href="/">
                <img src="{{ asset('IMAGES/wespointv2nb.png') }}" class="w-36 my-0" alt="BISU Logo" />


            </a>
            <input class="peer hidden" type="checkbox" id="navbar-open" />
            <label class="absolute right-0 mt-1 cursor-pointer text-white text-xl sm:hidden" for="navbar-open">
                <span class="sr-only">Toggle Navigation</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="0.88em" height="1em"
                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 448 512">
                    <path fill="currentColor"
                        d="M0 96c0-17.7 14.3-32 32-32h384c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32h384c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zm448 160c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32h384c17.7 0 32-14.3 32 32z" />
                </svg>
            </label>
            <nav aria-label="Header Navigation" class="peer-checked:block hidden pl-2 py-6 sm:block sm:py-0">
                <ul class="flex flex-col gap-y-4 sm:flex-row sm:gap-x-8">

                    <li>
                        <a href="/">
                            <button class="text-black hover:text-green-400"><i class="fas fa-house"></i>
                                <span class="border-b-2 border-green-500">Home</span></button>
                        </a>

                    </li>
                    <li>
                        <a href="/products">
                            <button class="text-black hover:text-green-400"><i class="fas fa-prescription-bottle"></i>
                                Products</button>
                        </a>

                    </li>
                    <li>
                        <a href="/business">
                            <button class="text-black hover:text-green-400"><i class="fas fa-question-circle"></i>
                                About us</button>
                        </a>
                    </li>

                </ul>
            </nav>
        </div>

    </header>


    <!-- Changed background color to green -->
    <section class="pt-12 bg-[url('https://pagedone.io/asset/uploads/1691055810.png')] bg-center bg-cover ">
        <div id="animated-section" class="grid max-w-screen-xl h-screen px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 opacity-0 transition-opacity duration-1000">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-4xl font-bold tracking-tight leading-none md:text-4xl xl:text-5xl text-black">
                    Distributor of Quality and affordable Medicines
                </h1>
                <p class="max-w-2xl mb-6 font-light text-gray-700 lg:mb-8 md:text-lg lg:text-xl">
                    With a commitment to excellence, we ensure your shelves are stocked with the best.
                </p>
                <a href="#whyus" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-green-500 rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                    Learn more
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-green-500 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    Speak to Sales
                </a>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img id="animateRight" src="{{ asset('IMAGES/truck.png') }}" class="opacity-0 -translate-x-full transition-all duration-1000 w-full" />
                <img src="{{asset('IMAGES/dna.png')}}" class="opacity-40 absolute h-28 mt-2 ml-96"/>
            </div>
            <img src="{{asset('IMAGES/dna.png')}}" class="opacity-30 absolute h-24 mt-12"/>

        </div>

    </section>


    <section id="whyus" class="text-gray-700 body-font mx-auto mt-10 p-10">
        <div id="quality" class="flex  justify-center text-3xl font-bold text-gray-800 text-center opacity-0 translate-y-20 transition-all duration-1000">
            Why Us?
        </div>
        <div class="container px-5 py-12 mx-auto">
            <div class="flex flex-wrap md:flex-nowrap items-center">
                <!-- Left Side Image -->
                <div id="quality" class="w-full md:w-1/2 flex justify-center mb-6 md:mb-0 opacity-0 translate-y-20 transition-all duration-1000">
                    <img src="{{ asset('IMAGES/women.png') }}" alt="Why Us Image" class="w-full max-w-md object-cover rounded-lg">
                </div>

                <!-- Right Side (2-Column Features) -->
                <div class="w-full md:w-1/2 grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <!-- Quality Assurance -->
                    <div id="quality" class="opacity-0 translate-y-20 transition-all duration-1000">
                        <div class="px-4 py-6 transform transition-all duration-500 hover:scale-110 text-center">
                            <div class="flex justify-center">
                                <div class="w-24 h-24 rounded-full p-2 bg-green-500 flex items-center justify-center">
                                    <img src="{{ asset('IMAGES/high-quality.png') }}" class="w-full filter invert brightness-0">
                                </div>
                            </div>
                            <h2 class="title-font font-regular text-2xl text-gray-900">Quality Assurance</h2>
                        </div>
                    </div>

                    <!-- Reliable Distribution -->
                    <div id="distribution" class="opacity-0 translate-y-20 transition-all duration-1000">
                        <div class="px-4 py-6 transform transition-all duration-500 hover:scale-110 text-center">
                            <div class="flex justify-center">
                                <div class="w-24 h-24 rounded-full p-2 bg-green-500 flex items-center justify-center">
                                    <img src="{{ asset('IMAGES/delivery-truck.png') }}" class="w-full filter invert brightness-0">
                                </div>
                            </div>
                            <h2 class="title-font font-regular text-2xl text-gray-900">Reliable Distribution</h2>
                        </div>
                    </div>

                    <!-- Competitive Pricing -->
                    <div id="pricing" class="opacity-0 translate-y-20 transition-all duration-1000">
                        <div class="px-4 py-6 transform transition-all duration-500 hover:scale-110 text-center">
                            <div class="flex justify-center">
                                <div class="w-24 h-24 rounded-full p-2 bg-green-500 flex items-center justify-center">
                                    <img src="{{ asset('IMAGES/cuba.png') }}" class="w-full filter invert brightness-0">
                                </div>
                            </div>
                            <h2 class="title-font font-regular text-2xl text-gray-900">Competitive Pricing</h2>
                        </div>
                    </div>

                    <!-- Exceptional Support -->
                    <div id="support" class="opacity-0 translate-y-20 transition-all duration-1000">
                        <div class="px-4 py-6 transform transition-all duration-500 hover:scale-110 text-center">
                            <div class="flex justify-center">
                                <div class="w-24 h-24 rounded-full p-2 bg-green-500 flex items-center justify-center">
                                    <img src="{{ asset('IMAGES/support.png') }}" class="w-full filter invert brightness-0">
                                </div>
                            </div>
                            <h2 class="title-font font-regular text-2xl text-gray-900">Exceptional Support</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="whyus" class="text-gray-700 body-font mx-auto mt-10 p-10 bg-[url('/public/IMAGES/bg3.png')] bg-center bg-cover">
        <div id="quality" class=" flex justify-center text-3xl font-bold text-gray-800 text-center opacity-0 translate-y-20 transition-all duration-1000">
            Featured Brands
        </div>
        <div class="container px-5 py-12 mx-auto">
            <div class="flex flex-wrap text-center justify-center">
                <!-- Quality Assurance -->
                <div id="quality" class="p-4 md:w-1/4 sm:w-1/2 opacity-0 translate-y-20 transition-all duration-1000">
                    <div class="px-4 py-6 transform transition-all duration-500 hover:scale-110">
                        <div class="flex justify-center">
                            <div class="w-36 h-36 p-2 m-2 flex items-center justify-center">
                                <img src="{{ asset('IMAGES/unilab.jpg') }}" class="w-full filter rounded-full">
                            </div>
                        </div>
                        <h2 class="title-font font-regular text-2xl text-gray-900"></h2>
                    </div>
                </div>

                <!-- Reliable Distribution -->
                <div id="distribution" class="p-4 md:w-1/4 sm:w-1/2 opacity-0 translate-y-20 transition-all duration-1000">
                    <div class="px-4 py-6 transform transition-all duration-500 hover:scale-110">
                        <div class="flex justify-center">
                            <div class="flex justify-center">
                                <div class="w-36 h-36  p-2 m-2  flex items-center justify-center">
                                    <img src="{{ asset('IMAGES/2mg.png') }}" class="w-full filter ">
                                </div>
                            </div>
                        </div>
                        <h2 class="title-font font-regular text-2xl text-gray-900"></h2>
                    </div>
                </div>

                <!-- Competitive Pricing -->
                <div id="pricing" class="p-4 md:w-1/4 sm:w-1/2 opacity-0 translate-y-20 transition-all duration-1000">
                    <div class="px-4 py-6 transform transition-all duration-500 hover:scale-110">
                        <div class="flex justify-center">
                            <div class="flex justify-center">
                                <div class="w-36 h-36 p-2 m-2 flex items-center justify-center">
                                    <img src="{{ asset('IMAGES/johnson.png') }}" class="w-full ">
                                </div>
                            </div>
                        </div>
                        <h2 class="title-font font-regular text-2xl text-gray-900"></h2>
                    </div>
                </div>

                <!-- Exceptional Support -->
                <div id="support" class="p-4 md:w-1/4 sm:w-1/2 opacity-0 translate-y-20 transition-all duration-1000">
                    <div class="px-4 py-6 transform transition-all duration-500 hover:scale-110">
                        <div class="flex justify-center">
                            <div class="flex justify-center">
                                <div class="w-36 h-36 p-4 m-2  flex items-center justify-center">
                                    <img src="{{ asset('IMAGES/northfield.png') }}" class="w-full rounded-full">
                                </div>
                            </div>
                        </div>
                        <h2 class="title-font font-regular text-2xl text-gray-900"></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div id="quality" class="opacity-0 translate-y-20 transition-all mt-14 duration-1000 mb-12 w-full mx-auto max-w-7xl p-4 bg-white rounded-md">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                <!-- Left Column (Image) -->
                <div class="overflow-hidden rounded-lg">
                    <img id="slideshow" class="w-full h-96 fade show" alt="Slideshow Image">
                </div>
                <!-- Right Column (Description) -->
                <div class="flex flex-col justify-center">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Placeholder</h2>
                    <p class="text-lg text-gray-700 mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris.
                    </p>

                </div>
            </div>
        </div>
    </section>



    <footer class="bg-gradient-to-r from-green-700 via-green-600 to-green-500">

        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="https://www.facebook.com/westpointpi/about" class="flex items-center">
                        <img src="{{ asset('IMAGES/wespointv2nbwall.png') }}" class="w-44 me-3"
                            alt="FlowBite Logo" />

                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                        <ul class="text-gray-200 font-medium">
                            <li class="mb-4">
                                <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                            </li>
                            <li>
                                <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                        <ul class="text-gray-200 font-medium">
                            <li class="mb-4">
                                <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                            </li>
                            <li>
                                <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                        <ul class="text-gray-200 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-100 sm:text-center ">© 2025 <a href="https://flowbite.com/"
                        class="hover:underline">Westpoint Pharma Inc.</a> All Rights Reserved.
                </span>

            </div>
        </div>

    </footer>

</body>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const images = [
            'https://c8.alamy.com/comp/AYCGDB/medicines-on-pharmacy-shelves-AYCGDB.jpg',
            'https://eurorack.vn/vnt_upload/service/10_2019/ke_de_duoc_pham_5.jpg',
            'https://images.seattletimes.com/wp-content/uploads/2024/11/11182024_coldmeds111824-tzr_tzr_042810.jpg?d=1200x630'
        ];

        let currentIndex = 0;
        const imgElement = document.getElementById('slideshow');

        function changeImage() {
            imgElement.classList.remove("show"); // Start fade out
            setTimeout(() => {
                currentIndex = (currentIndex + 1) % images.length;
                imgElement.src = images[currentIndex];
                imgElement.classList.add("show"); // Fade in new image
            }, 1000); // Wait for fade out before changing
        }

        // Initialize first image
        imgElement.src = images[currentIndex];

        // Change image every 3 seconds
        setInterval(changeImage,3000);
    });
</script>


</html>
