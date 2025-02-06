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

</head>


<body class="bg-[url('https://pagedone.io/asset/uploads/1691055810.png')] bg-center bg-cover ">
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

        </div>

    </header>

    <section class="mt-36 ">
        <div class="flex flex-col items-center mt-14 px-6 mx-auto md:h-screen lg:py-0">
            <div
                class="w-full rounded-lg  md:mt-0 sm:max-w-md xl:p-0 bg-green-700 backdrop-filter backdrop-blur-md bg-opacity-100">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight md:text-2xl text-white">
                        LOG IN
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="/admin/authenticate" method="GET">
                        @csrf
                        <div>
                            <label for="username" class="block mb-2 text-sm font-medium text-gray-200">
                                Username</label>
                            <input type="text" name="username" id="username" placeholder="Username" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required=""/>
                        </div>
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-200">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" value="{{ old('password')}}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required="">
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                            </div>
                            {{-- <a href="#"
                                class="text-sm font-medium hover:underline text-gray-400">Reset
                                password?</a> --}}
                        </div>
                        <button type="submit" @click="loading = true; fetch('/api/endpoint').then(() => loading = false)"
                            class="w-full text-white bg-amber-500 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 hover:bg-amber-700 dark:focus:ring-primary-800">Sign
                            in</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


</body>

</html>
