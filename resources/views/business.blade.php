<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About us</title>
    <link rel="icon" type="image/png" href="{{ asset('IMAGES/logowestpoint.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <style>
        .no-scrollbar::-webkit-scrollbar {
            display: none;
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
            <!-- Move the input before the nav for peer to work -->
            <input class="peer hidden" type="checkbox" id="navbar-open" />

            <!-- Label for toggle button -->
            <label class="absolute right-4 top-6 cursor-pointer text-black text-2xl sm:hidden" for="navbar-open">
                <span class="sr-only">Toggle Navigation</span>
                <i class="fa-solid fa-bars"></i>
            </label>
            <nav aria-label="Header Navigation" class="peer-checked:block hidden pl-2 py-6 sm:block sm:py-0">
                <ul class="flex flex-col gap-y-4 sm:flex-row sm:gap-x-8">

                    <li>
                        <a href="/">
                            <button class="text-black hover:text-green-400"><i class="fas fa-house"></i>
                                <span class="">Home</span></button>
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
                            <button class="text-black  hover:text-green-400">
                                <i class="fas fa-question-circle"></i> <span class="border-b-2 border-green-500">About
                                    us</span>
                            </button>
                        </a>

                    </li>
                    <li @click="messageOpen = true">
                        <a href="#contact">
                             <button class="text-black hover:text-green-400"><i class="fa-solid fa-envelope"></i>
                            Contact us</button>
                        </a>

                    </li>
                </ul>
            </nav>
        </div>

    </header>
    <!-- about us -->
    <section class="bg-[url('/public/IMAGES/bg2.png')] bg-center bg-cover" id="aboutus">
        <div class="container mt-10 mx-auto py-16 px-4 sm:px-6 lg:px-8 ">
            <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
                <div class="max-w-lg">
                    <h2 class="text-3xl font-bold text-gray-800 mb-8">About us</h2>
                    <p class="mt-2 text-gray-600 text-lg text-justify">
                        Westpoint Pharma is a trusted pharmaceutical distributor committed to delivering high-quality
                        medicines and healthcare products to pharmacies, hospitals, and medical institutions. With a
                        strong focus on reliability, affordability, and excellence, we ensure that essential medications
                        reach those who need them most. Our extensive network, rigorous quality standards, and
                        dedication to customer satisfaction set us apart as a leader in the industry. At Westpoint
                        Pharma, we believe in fostering healthier communities by providing safe and effective
                        pharmaceutical solutions with integrity and care.
                    </p>
                </div>
                <div class="mt-4 md:mt-16">
                    <img src="{{ asset('images/WESTPOINT.jpg') }}" alt="About Us Image"
                        class="w-full h-full object-cover rounded-lg">
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 ">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-8">

                <!-- Mission Column -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Mission</h3>
                    <p class="text-gray-600 text-justify">To become the Philippines Pharmaceutical Distribution Company of Choice by providing communities with a constant supply of top-quality medicines at reasonable prices and by  serving them with our compassionate, professional, and talented employees.</p>
                </div>

                <!-- Vision Column -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Vision</h3>
                    <p class="text-gray-600 text-justify">To lead the industry in pharmaceutical distribution by delivering exceptional medical products and supplies, a steadfast focus on customers' needs and top-notch customer service for the wellbeing of all.</p>
                </div>

                <!-- Core Values Column -->


            </div>
            <div class="bg-white mt-6 p-6 rounded-lg shadow-lg ">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Core Values</h3>
                <p class="text-gray-600 text-justify mb-2">In everything we do, we are grounded by the following rules:</p>
                <p class="text-gray-800 text-justify mb-2"><span class="font-bold">Integrity</span> - doing the right thing right regardless of the situation; being honest even if no one is watching.</p>
                <p class="text-gray-800 text-justify mb-2"><span class="font-bold">Entreprenerial Spirit</span> - we seek and pursue opportunities that is best for the company or having the sense of ownership by optimizing and finding cost-efficient use of company resource and always thingking about the company's long-term welfare.</p>
                <p class="text-gray-800 text-justify mb-2"><span class="font-bold">Professionalism</span> - work ethics should be anchored on discipline, reliability and performance.</p>
                <p class="text-gray-800 text-justify mb-2"><span class="font-bold">Service Oriented</span> - delivering sincere care or services to our employees, co-workers, business partners and society we live in.</p>
                <p class="text-gray-800 text-justify mb-2"><span class="font-bold">Teamwork</span> - working together as a team or always thinking of the welfare of the whole team.</p>
                <p class="text-gray-800 text-justify mb-2"><span class="font-bold">Perseverance</span> - being hardworking and finishing taks despite barriers and obstacles encountered.</p>
            </div>
        </div>
    </section>
    <section>
        {{-- <div class="w-full max-w-5xl mx-auto p-6" x-data="{ scrollAmount: 300 }">
            <h2 class="text-3xl font-bold text-center mb-6">Meet Our Team</h2>
            <div class="relative">
                <!-- Scroll Buttons -->
                <button @click="$refs.team.scrollBy({ left: -scrollAmount, behavior: 'smooth' })" class="absolute left-0 top-1/2 -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full shadow-lg">◀</button>
                <button @click="$refs.team.scrollBy({ left: scrollAmount, behavior: 'smooth' })" class="absolute right-0 top-1/2 -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full shadow-lg">▶</button>

                <!-- Scrollable Team Section -->
                <div class="flex space-x-4 overflow-x-auto scroll-smooth no-scrollbar" x-ref="team">
                    <template x-for="i in 5" :key="i">
                        <div class="flex-shrink-0 w-64 bg-white p-4 rounded-lg shadow-lg text-center">
                            <img :src="'https://via.placeholder.com/150?text=Person+' + i" alt="Team Member" class="w-32 h-32 mx-auto rounded-full mb-4">
                            <h3 class="text-xl font-semibold">Member <span x-text="i"></span></h3>
                            <p class="text-gray-500">Position</p>
                        </div>
                    </template>
                </div>
            </div>
        </div> --}}

        <div class="w-full  mx-auto p-6 " x-data="{ scrollAmount: 300 }">
            <h2 class="text-3xl font-bold text-center mb-6">Meet Our Team</h2>
            <div class="relative">
                <!-- Scroll Buttons -->
                <button @click="$refs.team.scrollBy({ left: -scrollAmount, behavior: 'smooth' })" class="absolute left-0 top-1/2 -translate-y-1/2  text-gray-800 p-2 rounded-full shadow-lg"><i class="fa fa-circle-left"></i></button>
                <button @click="$refs.team.scrollBy({ left: scrollAmount, behavior: 'smooth' })" class="absolute right-0 top-1/2 -translate-y-1/2  text-gray-800 p-2 rounded-full shadow-lg"><i class="fa fa-circle-right"></i></button>

                <!-- Scrollable Team Section -->
                <div class="flex space-x-4 overflow-x-auto scroll-smooth no-scrollbar" x-ref="team">
                    <template x-for="i in 5" :key="i">
                        <div class="flex-shrink-0 w-64 p-4 rounded-lg text-center">
                            <img :src="'https://www.wilsoncenter.org/sites/default/files/media/images/person/james-person-1.jpg' " alt="Team Member" class="w-32 h-32 mx-auto rounded-full mb-4">
                            <h3 class="text-xl font-semibold">Member <span x-text="i"></span></h3>
                            <p class="text-gray-500">Position</p>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </section>


    <!-- contact us form -->
    <section id="contact" class="py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <div class="grid lg:grid-cols-2 grid-cols-1">
              <div class="lg:mb-0 mb-10">
                  <div class="group w-full h-full">
                      <div class="relative h-full">
                          <img src="https://pagedone.io/asset/uploads/1696488602.png" alt="ContactUs tailwind section" class="w-full h-full lg:rounded-l-2xl rounded-2xl bg-blend-multiply bg-indigo-700 object-cover"/>
                          <h1 class="font-manrope text-white text-4xl font-bold leading-10 absolute top-11 left-11">Contact us</h1>
                          <div class="absolute bottom-0 w-full lg:p-11 p-5">
                              <div class="bg-white rounded-lg p-6 block">
                                  <a href="javascript:;" class="flex items-center mb-6">
                                      <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M22.3092 18.3098C22.0157 18.198 21.8689 18.1421 21.7145 18.1287C21.56 18.1154 21.4058 18.1453 21.0975 18.205L17.8126 18.8416C17.4392 18.9139 17.2525 18.9501 17.0616 18.9206C16.8707 18.891 16.7141 18.8058 16.4008 18.6353C13.8644 17.2551 12.1853 15.6617 11.1192 13.3695C10.9964 13.1055 10.935 12.9735 10.9133 12.8017C10.8917 12.6298 10.9218 12.4684 10.982 12.1456L11.6196 8.72559C11.6759 8.42342 11.7041 8.27233 11.6908 8.12115C11.6775 7.96998 11.6234 7.82612 11.5153 7.5384L10.6314 5.18758C10.37 4.49217 10.2392 4.14447 9.95437 3.94723C9.6695 3.75 9.29804 3.75 8.5551 3.75H5.85778C4.58478 3.75 3.58264 4.8018 3.77336 6.06012C4.24735 9.20085 5.64674 14.8966 9.73544 18.9853C14.0295 23.2794 20.2151 25.1426 23.6187 25.884C24.9335 26.1696 26.0993 25.1448 26.0993 23.7985V21.2824C26.0993 20.5428 26.0993 20.173 25.9034 19.8888C25.7076 19.6046 25.362 19.4729 24.6708 19.2096L22.3092 18.3098Z" stroke="#4F46E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                      </svg>
                                      <h5 class="text-black text-base font-normal leading-6 ml-5">
                                        (053) 561 2938</h5>
                                  </a>
                                  <a href="javascript:;" class="flex items-center mb-6">
                                      <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2.81501 8.75L10.1985 13.6191C12.8358 15.2015 14.1544 15.9927 15.6032 15.9582C17.0519 15.9237 18.3315 15.0707 20.8905 13.3647L27.185 8.75M12.5 25H17.5C22.214 25 24.5711 25 26.0355 23.5355C27.5 22.0711 27.5 19.714 27.5 15C27.5 10.286 27.5 7.92893 26.0355 6.46447C24.5711 5 22.214 5 17.5 5H12.5C7.78595 5 5.42893 5 3.96447 6.46447C2.5 7.92893 2.5 10.286 2.5 15C2.5 19.714 2.5 22.0711 3.96447 23.5355C5.42893 25 7.78595 25 12.5 25Z" stroke="#4F46E5" stroke-width="2" stroke-linecap="round"/>
                                      </svg>
                                      <h5 class="text-black text-base font-normal leading-6 ml-5">wpi.official2017@yahoo.com</h5>
                                  </a>
                                  <a href="javascript:;" class="flex items-center">
                                      <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M25 12.9169C25 17.716 21.1939 21.5832 18.2779 24.9828C16.8385 26.6609 16.1188 27.5 15 27.5C13.8812 27.5 13.1615 26.6609 11.7221 24.9828C8.80612 21.5832 5 17.716 5 12.9169C5 10.1542 6.05357 7.5046 7.92893 5.55105C9.8043 3.59749 12.3478 2.5 15 2.5C17.6522 2.5 20.1957 3.59749 22.0711 5.55105C23.9464 7.5046 25 10.1542 25 12.9169Z" stroke="#4F46E5" stroke-width="2"/>
                                          <path d="M17.5 11.6148C17.5 13.0531 16.3807 14.219 15 14.219C13.6193 14.219 12.5 13.0531 12.5 11.6148C12.5 10.1765 13.6193 9.01058 15 9.01058C16.3807 9.01058 17.5 10.1765 17.5 11.6148Z" stroke="#4F46E5" stroke-width="2"/>
                                      </svg>
                                      <h5 class="text-black text-base font-normal leading-6 ml-5">
                                        204 sss village, Ormoc City, Ormoc City, Philippines</h5>
                                  </a>
                                  <a href="javascript:;" class="flex items-center mt-5">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="15" cy="15" r="13" stroke="#4F46E5" stroke-width="2"/>
                                        <line x1="15" y1="15" x2="15" y2="5" stroke="#4F46E5" stroke-width="2"/>
                                        <line x1="15" y1="15" x2="22" y2="15" stroke="#4F46E5" stroke-width="2"/>
                                    </svg>

                                    <h5 class="text-black text-base font-normal leading-6 ml-5">
                                        Monday - Saturday : 8am - 5pm</h5>
                                </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="bg-gray-50 p-5 lg:p-11 lg:rounded-r-2xl rounded-2xl">
                  <h2 class="text-green-600 font-manrope text-4xl font-semibold leading-10 mb-11">Send Us A Message</h2>
                  <input type="text" class="w-full h-12 text-gray-600 placeholder-gray-400  shadow-sm bg-transparent text-lg font-normal leading-7 rounded-full border border-gray-200 focus:outline-none pl-4 mb-10" placeholder="Name">
                  <input type="text" class="w-full h-12 text-gray-600 placeholder-gray-400 shadow-sm bg-transparent text-lg font-normal leading-7 rounded-full border border-gray-200 focus:outline-none pl-4 mb-10" placeholder="Email">
                  <input type="text" class="w-full h-12 text-gray-600 placeholder-gray-400 shadow-sm bg-transparent text-lg font-normal leading-7 rounded-full border border-gray-200 focus:outline-none pl-4 mb-10" placeholder="Phone">

                  <input type="text" class="w-full h-12 text-gray-600 placeholder-gray-400 bg-transparent text-lg shadow-sm font-normal leading-7 rounded-full border border-gray-200 focus:outline-none pl-4 mb-10" placeholder="Message">
                  <button class="w-full h-12 text-white text-base font-semibold leading-6 rounded-full transition-all duration-700 hover:bg-green-800 bg-green-600 shadow-sm">Send</button>
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

    <script>
        document.getElementById("hamburger").onclick = function toggleMenu() {
            const navToggle = document.getElementsByClassName("toggle");
            for (let i = 0; i < navToggle.length; i++) {
                navToggle.item(i).classList.toggle("hidden");
            }
        };
    </script>
</body>

</html>
