<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <title>Login</title>
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="bg-white p-8 rounded shadow-md w-96">

        <h2 class="text-2xl font-semibold mb-4">Login</h2>

        <form id="loginForm" action="#" method="post">

            <div class="mb-4">
                <label for="username" class="block text-gray-600 text-sm font-medium mb-2">Username</label>
                <input type="text" id="username" name="username" class="w-full px-3 py-2 border rounded focus:outline-none focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-600 text-sm font-medium mb-2">Password</label>
                <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded focus:outline-none focus:border-blue-500">
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue">
                Login
            </button>

        </form>

        <p class="text-gray-600 text-sm mt-4">Don't have an account? <a href="#" class="text-blue-500 hover:underline">Sign up</a></p>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script defer src="/ecom/public/js/login.js"></script>
</body>

</html>