<?php include 'auth.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page 2</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-lg max-w-md w-full text-center">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">
            Hello, <span class="text-blue-600"><?= htmlspecialchars($_SESSION['user']) ?>!</span>
        </h2>
        <p class="text-gray-600 mb-6">This is another protected page.</p>

        <div class="flex flex-col gap-4">
            <a href="dashboard.php" class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded-xl transition duration-200">
                Back to Dashboard
            </a>
            <a href="logout.php" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded-xl transition duration-200">
                Logout
            </a>
        </div>
    </div>
</body>
</html>
