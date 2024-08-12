<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();
}
?>
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

<body class="bg-gradient-to-r from-blue-400 to-red-400">

    <?php
    include "sidebar.php";
    ?>

    <div class="p-4 sm:ml-64">
        <div class="p-6 bg-gradient-to-r from-blue-800 to-red-600 border-2 border-gray-300 rounded-lg shadow-md">
            <h1 class="text-3xl text-white font-bold mb-4">Audit Logs</h1>
            <div class="overflow-x-auto">
                <table class="w-full table-auto border-collapse border border-gray-300">
                    <thead class="bg-gradient-to-r from-blue-900 to-red-900 text-white">
                        <tr>
                            <th class="px-4 py-2">Username</th>
                            <th class="px-4 py-2">Action</th>
                            <th class="px-4 py-2">Timestamp</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-800">
                        <?php
                        include "../connection.php";
                        $query = "SELECT * FROM audit_logs ORDER BY timestamp DESC";
                        $run = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($run)) {
                            $username = $row['username'];
                            $action = $row['action'];
                            $timestamp = $row['timestamp'];
                        ?>
                            <tr class="bg-gradient-to-r from-blue-300 to-red-300">
                                <td class="border px-4 py-2"><?php echo htmlspecialchars($username); ?></td>
                                <td class="border px-4 py-2"><?php echo htmlspecialchars($action); ?></td>
                                <td class="border px-4 py-2"><?php echo htmlspecialchars($timestamp); ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>
