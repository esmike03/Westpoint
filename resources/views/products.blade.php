<!DOCTYPE html>
<html lang="en" x-data="{ showModal: false, selectedProduct: {} }">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link rel="icon" type="image/png" href="{{ asset('IMAGES/logowestpoint.png') }}">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Products</title>
</head>

<body>
    <!-- source: https://github.com/mfg888/Responsive-Tailwind-CSS-Grid/blob/main/index.html -->

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
                                <span>Home</span></button>
                        </a>

                    </li>
                    <li>
                        <a href="/products">
                            <button class="text-black hover:text-green-400"><i class="fas fa-prescription-bottle"></i>
                                <span class="border-b-2 border-green-500">Products</span></button>
                        </a>

                    </li>
                    <li>
                        <a href="/business">
                            <button class="text-black hover:text-green-400"><i class="fas fa-question-circle"></i>
                                About us</button>
                        </a>
                    </li>
                    <li>
                        <a href="/">
                            <button class="text-black hover:text-green-400"><i class="fas fa-cart-shopping"></i>
                                Cart</button>
                        </a>
                    </li>
                    <li>
                        <a href="/login">
                            <button class="text-black hover:text-green-400"><i
                                    class="fas fa-arrow-right-to-bracket"></i>
                                Login</button>
                        </a>
                    </li>

                </ul>
            </nav>
        </div>

    </header>
    <!-- Filter Form -->


    <div class="mt-28 mx-4 justify-items-center justify-center">
        <form method="GET" action="/products" x-data="{ search: '{{ request('search') }}' }" class=" flex flex-wrap gap-4 justify-start"
            x-init="$watch('search', value => $event.target.form.submit())">

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

    <section id="Projects" class="container mx-auto px-4 sm:px-6 lg:px-8 mt-6 mb-5" x-data="{ showModal: false, selectedProduct: {} }">
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6 lg:gap-8">
            @forelse ($products as $product)
                <div
                    class="bg-white border border-gray-200 rounded-lg shadow-md transition-transform transform hover:scale-105">
                    <a href="#" class="block w-full"
                        @click.prevent="selectedProduct = {{ json_encode($product) }}; showModal = true;">
                        <img class="w-full h-24 object-contain lg:h-36 rounded-t-lg"
                            src="{{ asset('storage/' . $product->image) }}" alt="product image" />
                    </a>
                    <div class="p-4">
                        <div class="flex justify-between">
                            <a href="#">
                                <h5 class="text-sm lg:text-md font-semibold text-gray-900">
                                    <span class="text-xs text-gray-500">{{ $product->category }}</span><br>
                                    {{ $product->name }}
                                </h5>
                            </a>
                            <p class="text-xs text-green-500 mt-1">{{ $product->brand }}</p>
                        </div>

                        <div class="mt-2 mb-2">
                            <div x-data="{ expanded: false }" class="relative">
                                <p class="text-xs text-justify text-gray-700" :class="expanded ? '' : 'line-clamp-2'">
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
                            <span class="text-sm lg:text-lg font-bold text-gray-900">₱{{ $product->price }}</span>
                            <a href="#"
                                class="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-md text-sm px-4 py-2 text-center">
                                <i class="fa fa-cart-shopping"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-gray-500 text-lg col-span-full text-center">No products found.</p>
            @endforelse
        </div>

        <!-- Product Modal -->
        <div x-show="showModal"
            class="fixed inset-0 flex items-center justify-center bg-black backdrop-blur-sm bg-opacity-50 p-4"
            x-transition>
            <div class="bg-white rounded-lg shadow-lg w-full max-w-xl p-8 relative flex gap-6"
                @click.away="showModal = false">
                <div class="absolute flex gap-2">
                    <p x-text="selectedProduct.brand "
                        class="text-center  text-green-500 m-auto border rounded-md px-1 border-green-500"></p>
                    <p x-text="selectedProduct.category "
                        class="text-center  text-gray-500 m-auto border rounded-md px-1 border-gray-500"></p>
                </div>

                <!-- Close Button (Top Right) -->
                <button @click="showModal = false"
                    class="absolute top-6 right-8 text-gray-500 hover:text-gray-700 text-xl">
                    <i class="fa-solid fa-xmark"></i>
                </button>

                <!-- Product Image (Left Side) -->
                <img :src="'/storage/' + selectedProduct.image" alt="Product Image"
                    class="w-40 h-40 sm:w-48 sm:h-48 object-cover rounded-md">

                <!-- Product Details (Right Side) -->
                <div class="flex flex-col flex-1">

                    <h2 class="text-lg sm:text-xl font-semibold text-gray-900" x-text="selectedProduct.name"></h2>

                    <p class="text-gray-700 text-sm mt-2 text-justify" x-text="selectedProduct.details"></p>

                    <!-- Price & Add to Cart Button -->
                    <div class="mt-4 flex items-center justify-between">
                        <p class="text-lg font-bold text-gray-900">₱<span x-text="selectedProduct.price"></span></p>
                        <button
                            class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 flex items-center gap-2">
                            <i class="fa fa-cart-shopping"></i>
                        </button>
                    </div>
                </div>

            </div>
        </div>



    </section>


    <script>
        function showProductModal(product) {
            Alpine.store('selectedProduct', product);
            Alpine.store('showModal', true);
        }
    </script>
</body>

</html>
