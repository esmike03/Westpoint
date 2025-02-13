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

<body class="font-mono">
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
                    <a href="/admin" class="block py-2 px-4 rounded hover:bg-green-100 text-gray-700">
                        <i class="fas fa-shopping-cart mr-2"></i>Orders
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
                        <li><a href="/modifyproducts"
                                class="block py-2 px-4 rounded hover:bg-green-200 text-gray-700">Modify
                                Products</a></li>
                        <li><a href="/moresettings"
                                class="block py-2 px-4 rounded hover:bg-green-200 text-gray-700">More Settings</a></li>
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
                <a class="flex items-center text-2xl font-black" href="/admin">
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
        <div class="mt-28 mx-4 justify-items-center justify-center">
            <form method="GET" action="/modifyproducts" x-data="{ search: '{{ request('search') }}' }"
                class=" flex flex-wrap gap-4 justify-start" x-init="$watch('search', value => $event.target.form.submit())">

                <!-- Search Bar (Auto-submits when typing) -->
                <input type="text" name="search" x-model="search" placeholder="Search products..."
                    class="border text-sm border-gray-300 rounded-md px-3 py-1 text-gray-700 w-32">

                <!-- Category Filter (Auto-submits on change) -->
                <select name="category" class="border border-gray-300 rounded-md px-3 py-1 text-sm w-32 text-gray-700"
                    x-on:change="$event.target.form.submit()">
                    <option value="">All Categories</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category }}" {{ request('category') == $category ? 'selected' : '' }}>
                            {{ ucfirst($category) }}
                        </option>
                    @endforeach
                </select>

                <!-- Brand Filter (Auto-submits on change) -->
                <select name="brand" class="border border-gray-300 rounded-md px-3 py-1 text-sm text-gray-700"
                    x-on:change="$event.target.form.submit()">
                    <option value="">All Brands</option>
                    @foreach ($brands as $brand)
                        <option value="{{ $brand }}" {{ request('brand') == $brand ? 'selected' : '' }}>
                            {{ ucfirst($brand) }}
                        </option>
                    @endforeach
                </select>
            </form>
        </div>
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Whoops!</strong> Something went wrong.
                <ul class="mt-2 list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        @if (session('success'))
            <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg">
                {{ session('success') }}
            </div>
        @endif
        <!-- ✅ Grid Section - Starts Here 👇 -->
        <section id="Projects"
            class=" w-fit mx-20 grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-6 mb-5">

            <!--   ✅ Product card 1 - Starts Here 👇 -->

            @forelse ($products as $product)
                <div
                    class="w-64 h-fit max-w-sm bg-white border border-gray-200 rounded-lg shadow-lg transform transition-all duration-500 hover:scale-105">

                    <form method="POST" action="{{ route('products.destroy', $product->id) }}" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            @click.prevent="if(confirm('Are you sure?')) { show = false; $el.remove(); fetch('{{ route('products.destroy', $product->id) }}', { method: 'DELETE', headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' } }); }"
                            class="text-red-500 m-2 text-sm  rounded-md">
                            <i class="fa fa-trash text-red-500 m-2 text-sm shadow-lg p-1 rounded-md "> Delete</i>
                        </button>
                    </form>
                    <a href="#" class="w-full justify-center flex">
                        <img class="p-2 rounded-t-lg h-36"
                            src="{{ isset($product->image) && !empty($product->image) ? asset('storage/' . $product->image) : asset('IMAGES/logowestpoint.png') }}"
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

                        <div class="flex items-center">
                            <div x-data="{ expanded: false }" class="relative">
                                <p class="text-justify text-gray-700 text-xs" :class="expanded ? '' : 'line-clamp-1'">
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
