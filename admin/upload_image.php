<?php
session_start();


if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();
} ?>
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

<body class="bg-gradient-to-br from-blue-400 to-green-600 ">

    <?php
    include "sidebar.php"
    ?>

    <div class="p-4 sm:ml-64">
        <div class="p-6 border-2 border-gray-300 border-solid rounded-lg dark:border-gray-700">
            <div class="flex justify-center items-center min-h-screen">
                <div class="bg-gradient-to-br from-blue-400 to-green-300 rounded-lg shadow-lg p-8 max-w-md w-full space-y-6">
                    <h1 class="text-3xl font-bold text-center text-white ">Upload Image</h1>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="relative">
                            <input type="file" class="opacity-0 absolute inset-0 w-full h-full cursor-pointer" name="image" id="image" onchange="displayFileName()">
                            <label for="image" class="flex items-center justify-center w-full py-2 px-4 bg-gradient-to-r from-blue-500 to-green-500 text-white rounded-lg cursor-pointer transition duration-300 ease-in-out hover:from-blue-600 hover:to-green-800">
                                <span class="mr-2"><i class="bi bi-cloud-upload"></i></span>
                                Select Image
                            </label>

                        </div>
                        <div id="selected-image" class="text-center text-gray-600"></div>
                        <button type="submit" name="submit" class="w-full my-3 py-2 px-4 bg-gradient-to-r from-green-400 to-blue-400 text-white rounded-lg hover:from-green-500 hover:to-blue-500 transition duration-300 ease-in-out">Upload</button>
                    </form>
                    <div class="text-center">
                        <?php
                        if (isset($_POST["submit"])) {
                            $image_name = $_FILES['image']['name'];
                            $image_tmp = $_FILES['image']['tmp_name'];
                            $run = move_uploaded_file($image_tmp, "../assets/gallery/$image_name");
                            if ($run) {
                                echo "<p class='text-green-500 font-bold'>Uploaded successfully!</p>";
                            } else {
                                echo "<p class='text-red-500 font-bold'>Error found!</p>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        function displayFileName() {
            const input = document.getElementById('image');
            const fileName = input.files[0].name;
            const displayDiv = document.getElementById('selected-image');
            displayDiv.innerText = `Selected Image: ${fileName}`;
        }
    </script>
</body>

</html>