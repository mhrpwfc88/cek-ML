<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Cek Akun Mobile Legends</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded shadow-lg max-w-md w-full">
        <?php
        if (isset($_GET['userId']) && isset($_GET['zoneId'])) {
            $userId = $_GET['userId'];
            $zoneId = $_GET['zoneId'];
            $url = "https://mlbb.casperproject.net/api/v1/check?userId=" . urlencode($userId) . "&zoneId=" . urlencode($zoneId);

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_HTTPGET, true);

            $response = curl_exec($ch);
            curl_close($ch);

        
            // echo "<pre>";
            // print_r($response);
            // echo "</pre>";

     
            $result = json_decode($response, true);

      
            if ($result === null) {
                echo "<p class='text-red-600'>Error: Respons dari API tidak valid. Pastikan format JSON benar.</p>";
            } elseif (isset($result['status']) && $result['status'] === true) {
                // Ambil data jika status true
                $username = $result['data']['username'] ?? 'N/A';
                $create_country = $result['data']['create_role_country'] ?? 'N/A';
                $login_country = $result['data']['this_login_country'] ?? 'N/A';
                $reg_time = $result['data']['user_reg_time'] ?? 'N/A';
                $reg_time_human = $result['data']['user_reg_time_human'] ?? 'N/A';

                echo "<h3 class='text-xl font-bold text-gray-800 mb-4'>Akun Ditemukan</h3>";
                echo "<p class='text-gray-600'><strong>Username:</strong> " . htmlspecialchars($username) . "</p>";
                echo "<p class='text-gray-600'><strong>Negara Pembuatan Akun:</strong> " . htmlspecialchars($create_country) . "</p>";
                echo "<p class='text-gray-600'><strong>Negara Login Terakhir:</strong> " . htmlspecialchars($login_country) . "</p>";
                echo "<p class='text-gray-600'><strong>Waktu Registrasi:</strong> " . htmlspecialchars($reg_time) . "</p>";
                echo "<p class='text-gray-600'><strong>Waktu Registrasi (Detail):</strong> " . htmlspecialchars($reg_time_human) . "</p>";
            } else {
                // Tampilkan pesan error jika status false
                echo "<h3 class='text-xl font-bold text-red-600 mb-4'>Error</h3>";
                echo "<p class='text-gray-600'>Pesan: " . htmlspecialchars($result['errors'] ?? 'Unknown error') . "</p>";
            }
        } else {
            echo "<p class='text-gray-600'>User ID dan Zone ID harus diisi.</p>";
        }
        ?>
        <div class="mt-6 text-center">
            <a href="index.php" class="bg-teal-500 text-white px-4 py-2 rounded-md shadow hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Cek Lagi</a>
        </div>
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
