
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fun Olympic Paris 2024</title>
    <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


</head>


<body class="bg-gray-200">
    <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-white bg-blue-500 rounded-lg sm:hidden hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
        <span class="sr-only">Open sidebar</span>
        <i class="bi bi-list"></i>
    </button>

    <aside id="default-sidebar" class="fixed top-0 left-0 z-50 w-56 h-full bg-gradient-to-r from-gray-800 to-blue-700 overflow-y-auto transition-transform -translate-x-full sm:translate-x-0">
        <div class="h-full px-4 py-6 text-white">
            <div class="flex items-center mb-8">
                <img src="../assets/images/logo.png" alt="Olympic Logo" class="h-8 mr-3">
                <span class="text-lg font-semibold">Fun Olympic</span>
            </div>
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="dashboard.php" class="flex items-center p-2 text-gray-300 rounded-lg hover:bg-blue-600 group">
                        <i class="bi bi-speedometer2 text-blue-300 group-hover:text-blue-200"></i>
                        <span class="ml-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="users.php" class="flex items-center p-2 text-gray-300 rounded-lg hover:bg-blue-600 group">
                        <i class="bi bi-people text-blue-300 group-hover:text-blue-200"></i>
                        <span class="ml-3">Users</span>
                    </a>
                </li>
                <li>
                    <a href="reservation.php" class="flex items-center p-2 text-gray-300 rounded-lg hover:bg-blue-600 group">
                        <i class="bi bi-calendar-check text-blue-300 group-hover:text-blue-200"></i>
                        <span class="ml-3">Reservation</span>
                    </a>
                </li>
                <li>
                    <a href="upload_image.php" class="flex items-center p-2 text-gray-300 rounded-lg hover:bg-blue-600 group">
                        <i class="bi bi-image text-blue-300 group-hover:text-blue-200"></i>
                        <span class="ml-3">Upload Image</span>
                    </a>
                </li>
                <li>
                    <a href="upload_video.php" class="flex items-center p-2 text-gray-300 rounded-lg hover:bg-blue-600 group">
                        <i class="bi bi-camera-video text-blue-300 group-hover:text-blue-200"></i>
                        <span class="ml-3">Upload Video</span>
                    </a>
                </li>
                <li>
                    <a href="addblogs.php" class="flex items-center p-2 text-gray-300 rounded-lg hover:bg-blue-600 group">
                        <i class="bi bi-file-earmark-plus text-blue-300 group-hover:text-blue-200"></i>
                        <span class="ml-3">Add blogs</span>
                    </a>
                </li>
                <li>
                    <a href="user_audit.php" class="flex items-center p-2 text-gray-300 rounded-lg hover:bg-blue-600 group">
                        <i class="bi bi-file-earmark-plus text-blue-300 group-hover:text-blue-200"></i>
                        <span class="ml-3">User Audit</span>
                    </a>
                </li>
                <li>
                    <a href="logout.php" class="flex items-center p-2 text-gray-300 rounded-lg hover:bg-blue-600 group">
                        <i class="bi bi-box-arrow-right text-blue-300 group-hover:text-blue-200"></i>
                        <span class="ml-3">Log out</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <!-- Add your JavaScript imports or inline scripts here if needed -->

</body>

</html>
