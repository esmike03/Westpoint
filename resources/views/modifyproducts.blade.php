<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Modify Products</title>
</head>

<body>
    <!-- source: https://github.com/mfg888/Responsive-Tailwind-CSS-Grid/blob/main/index.html -->

    <aside
        class="fixed mt-20 left-0 top-0 w-64 h-screen bg-white shadow-lg p-4 transition-transform transform -translate-x-full sm:translate-x-0">
        <div class="flex items-center justify-between mb-6">


        </div>
        <nav>
            <ul class="space-y-2">
                <li>
                    <a href="/admin" class="block py-2 px-4 rounded hover:bg-green-100 text-gray-700">
                        <i class="fas fa-home mr-2"></i>Dashboard
                    </a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-4 rounded hover:bg-green-100 text-gray-700">
                        <i class="fas fa-user mr-2"></i>Profile
                    </a>
                </li>
                <li>
                    <button id="settingsToggle"
                        class="w-full text-left block py-2 px-4 rounded hover:bg-green-100 text-gray-700 flex justify-between items-center">
                        <span><i class="fas fa-cogs mr-2"></i>Settings</span>
                        <i class="fas fa-chevron-down transition-transform duration-300"></i>
                    </button>
                    <ul id="settingsSublist" class="ml-6 mt-1 hidden space-y-2">
                        <li><a href="/addproducts" class="block py-2 px-4 rounded hover:bg-green-200 text-gray-700">Add
                                Products</a></li>
                        <li><a href="/modifyproducts" class="block py-2 px-4 rounded hover:bg-green-200 text-gray-700">Modify
                                Products</a></li>

                    </ul>
                </li>
                <li>
                    <a href="#" class="block py-2 px-4 rounded hover:bg-red-100 text-red-600">
                        <i class="fas fa-sign-out-alt mr-2"></i>Logout
                    </a>
                </li>
            </ul>

        </nav>
    </aside>
    <main class="flex-1 ml-0 sm:ml-64 p-4 transition-all">
        <header
            class="fixed border-b-4 border-green-500 top-0 left-0 right-0 mb-2 px-4 shadow bg-white z-50 backdrop-filter backdrop-blur-xl bg-opacity-30">

            <div
                class="relative mx-auto flex max-w-screen-lg flex-col py-4 sm:flex-row sm:items-center sm:justify-between">
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

            </div>

        </header>


        <!-- ✅ Grid Section - Starts Here 👇 -->
        <section id="Projects"
        class="pt-24 w-fit mx-20 grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-6 mb-5">

        <!--   ✅ Product card 1 - Starts Here 👇 -->

        @forelse ($products as $product)
            <div
                class="w-64 h-fit max-w-sm bg-white border border-gray-200 rounded-lg shadow-lg transform transition-all duration-500 hover:scale-105">
                <a>
                    <i class="fa fa-trash text-red-500 m-2 text-sm shadow-lg p-1 rounded-md"> Delete</i>
                </a>
                <a href="#" class="w-full justify-center flex">
                    <img class="p-2 rounded-t-lg h-36" src="{{ asset('storage/' . $product->image) }}"
                        alt="product image" />
                </a>
                <div class="px-5 pb-5">
                    <div class="flex">
                        <a href="#">
                            <h5 class="text-lg font-semibold tracking-tight text-gray-900"><span
                                    class="text-xs text-gray-500">{{ $product->category }}</span><br>{{ $product->name }}
                            </h5>
                        </a>
                        <div class="ml-auto text-right mt-1">
                            <p class="text-sm text-green-400">{{ $product->brand }}</p>
                        </div>

                    </div>

                    <div class="flex items-center mt-2.5 mb-5">
                        <div x-data="{ expanded: false }" class="relative">
                            <p class="text-justify text-gray-700 text-xs" :class="expanded ? '' : 'line-clamp-3'">
                                {{ $product->details }}
                            </p>
                            <button @click="expanded = !expanded"
                                class="text-blue-600 text-xs font-medium mt-1 hover:underline">
                                <span x-show="!expanded">Read More</span>
                                <span x-show="expanded">Show Less</span>
                            </button>
                        </div>


                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-xl font-bold text-gray-900 ">₱{{ $product->price }}</span>
                        <a href="#"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Modify</a>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-gray-500 text-lg">No products found.</p>
        @endforelse






    </section>

        <!-- 🛑 Grid Section - Ends Here -->


        <!-- credit -->
        <div class="text-center py-10 px-10">

        </div>


        <!-- Support Me 🙏🥰 -->
    </main>
    <script>
        // Sidebar Toggle for Mobile
        document.getElementById('sidebarToggle')?.addEventListener('click', function() {
            document.querySelector('aside').classList.toggle('-translate-x-full');
        });

        document.getElementById('mobileMenuToggle')?.addEventListener('click', function() {
            document.querySelector('aside').classList.toggle('-translate-x-full');
        });
        document.getElementById('settingsToggle').addEventListener('click', function() {
            let sublist = document.getElementById('settingsSublist');
            let icon = this.querySelector('i:last-child');

            sublist.classList.toggle('hidden');
            icon.classList.toggle('rotate-180');
        });
    </script>
</body>

</html>
