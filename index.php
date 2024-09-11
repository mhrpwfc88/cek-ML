<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Akun Mobile Legends</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded shadow-lg max-w-md w-full">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Cek Akun Mobile Legends</h2>
        <form action="cek.php" method="GET" class="space-y-4">
            <div>
                <label for="userId" class="block text-sm font-medium text-gray-700">User ID:</label>
                <input type="text" name="userId" id="userId" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
            </div>

            <div>
                <label for="zoneId" class="block text-sm font-medium text-gray-700">Zone ID:</label>
                <input type="text" name="zoneId" id="zoneId" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
            </div>

            <div class="text-center">
                <button type="submit" class="bg-teal-500 text-white px-4 py-2 rounded-md shadow hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Cek Akun
                </button>
            </div>
        </form>
        <footer class="bg-teal-500 rounded text-white py-4 mt-8">
            <div class="container mx-auto text-center">
                <p class="text-sm">
                    &copy; <?php echo date("Y"); ?> Mh_ProCode. All Rights Reserved.
                </p>
            </div>
        </footer>

    </div>

</body>

</html>