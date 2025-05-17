<?php include 'auth.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-2xl shadow-xl max-w-md w-full text-center">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Welcome, 
                <span class="text-blue-600"><?= htmlspecialchars($_SESSION['user']) ?>!</span>
            </h2>
            <p class="text-gray-600 mb-6">This is your dashboard. Only logged-in users can see this.</p>

            <div class="flex flex-col gap-4">
                <a href="aboutme.php" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-xl transition duration-200">
                    visit About me page
                </a>
                <a href="logout.php" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded-xl transition duration-200">
                    Logout
                </a>
            </div>
        </div>
    </div>
</body>
</html>
