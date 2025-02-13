<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Account</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center h-screen bg-green-50">
    <div class="bg-white p-8 rounded-2xl shadow-lg max-w-md w-full border border-green-200">
        <h1 class="text-2xl font-bold text-green-700 mb-4 text-center">Edit Account Information</h1>

        <form action="" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label for="name" class="block text-green-700 font-medium">Name</label>
                <input type="text" id="name" name="name" value="" class="w-full px-4 py-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            <div>
                <label for="email" class="block text-green-700 font-medium">Email</label>
                <input type="email" id="email" name="email" value="" class="w-full px-4 py-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            <div>
                <label for="password" class="block text-green-700 font-medium">New Password (optional)</label>
                <input type="password" id="password" name="password" class="w-full px-4 py-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            <div class="flex justify-between items-center mt-6">
                <a href="/" class="text-green-600 hover:underline">Cancel</a>
                <button type="submit" class="px-6 py-3 text-white bg-green-600 rounded-lg hover:bg-green-700 transition">Save Changes</button>
            </div>
        </form>
    </div>
</body>
</html>
{{-- {{ route('account.update') }}database --}}
