<?php
session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logged Out</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-lg text-center w-full max-w-md">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">You have been logged out</h2>
        <p class="text-gray-600 mb-6">Thank you for visiting. You can log in again below.</p>
        <a href="login.php"
           class="inline-block bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-xl transition duration-200">
            Return to Login
        </a>
    </div>
</body>
</html>
