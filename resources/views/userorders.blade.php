<!DOCTYPE html>
<html lang="en" x-data="{ showModal: false, selectedProduct: {} }">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="icon" type="image/png" href="{{ asset('IMAGES/logowestpoint.png') }}">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>My Orders</title>
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
                <ul class="flex flex-col gap-y-4 sm:flex-row sm:gap-x-8 md:items-center">

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
                        <a href="/aboutus">
                            <button class="text-black hover:text-green-400"><i class="fas fa-question-circle"></i>
                                About us</button>
                        </a>
                    </li>
                    <li>
                        <a href="/cart">
                            <button class="text-black hover:text-green-400"><i class="fas fa-cart-shopping"></i>
                                Cart</button>
                        </a>
                    </li>
                    <li>
                        @auth
                            <div x-data="{ open: false }" class="relative flex  my-auto gap-2 items-center">
                                <div
                                    class="relative flex  my-auto gap-2 items-center bg-green-500 p-1 rounded-full hover:scale-105">
                                    <img @click="open = !open" src="{{ asset('IMAGES/profile.jpg') }}"
                                        class="h-8 w-8 rounded-full border-green-500 border" />

                                    <!-- User Name (Click to Toggle Logout Button) -->
                                    <span @click="open = !open"
                                        class="text-white font-normal text-sm cursor-pointer hover:text-green-200 pr-2">
                                        {{ Auth::user()->firstname }}
                                    </span>
                                </div>
                                <!-- Profile Image -->


                                <!-- Logout Button (Hidden by Default, Shows When Name is Clicked) -->
                                <div x-show="open" @click.away="open = false"
                                    class="absolute top-full mt-2 ml-10 bg-white border rounded-lg shadow-lg p-2 w-32">
                                    <a href="" class="text-black hover:text-green-500 w-full text-left px-2 py-1">
                                        <i class="fas fa-layer-group"></i> Orders
                                    </a>
                                    <a href="/users/profile"
                                        class="text-black hover:text-green-500 w-full text-left px-2 py-1">
                                        <i class="fas fa-user"></i> Profile
                                    </a>
                                    <form action="{{ route('userlogout') }}" method="POST">
                                        @csrf
                                        <button type="submit"
                                            class="text-black hover:text-red-500 w-full text-left px-2 py-1">
                                            <i class="fas fa-sign-out-alt"></i> Logout
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @else
                            <a href="{{ route('login') }}">
                                <button class="text-black hover:text-green-400">
                                    <i class="fas fa-arrow-right-to-bracket"></i> Login
                                </button>
                            </a>
                        @endauth
                    </li>
                </ul>
            </nav>
        </div>

    </header>
    <!-- Filter Form -->

    <section id="Projects" class="mt-28 container mx-auto px-4 sm:px-6 lg:px-8 mb-5" x-data="{ showModal: false, selectedProduct: {} }">
        <div class="max-w-7xl mx-auto mt-10">
            <h2 class="text-2xl font-semibold text-gray-900 mb-4">My Orders</h2>

            <div class="overflow-x-auto bg-white shadow-md rounded-lg">
                <table class="min-w-full border border-gray-200">
                    <thead class="bg-gray-100">
                        <tr class="text-left">
                            <th class="px-4 py-2 border">Product</th>
                            <th class="px-4 py-2 border">Quantity</th>
                            <th class="px-4 py-2 border">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($orders as $order_id => $orderItems)

                            @foreach ($orderItems as $order)
                                <tr class="border">
                                    <td class="px-4 py-2">{{ $order->product->name }}</td>
                                    <td class="px-4 py-2">{{ $order->quantity }}</td>
                                    <td class="px-4 py-2">
                                        <span
                                            class="px-2 py-1 rounded text-white
                                        {{ $order->status == 'pending' ? 'bg-yellow-500' : 'bg-green-500' }}">
                                            {{ ucfirst($order->status) }}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        @empty
                            <tr>
                                <td colspan="4" class="text-center py-4 text-gray-500">You have no orders yet.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
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
