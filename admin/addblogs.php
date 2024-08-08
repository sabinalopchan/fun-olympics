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

<body class="bg-gradient-to-r from-green-500 to-blue-600">

    <?php
    include "sidebar.php"
    ?>
    <div class="p-4 sm:ml-64">
        <div class="p-8 border-2 border-gray-200 border-solid rounded-lg dark:border-white  to-blue-500">
            <div class="flex justify-center items-center min-h-screen">
                <div class="bg-gradient-to-r from-green-300 to-blue-600 rounded-lg shadow-lg p-8 max-w-md w-full space-y-6">
                    <h1 class="text-3xl font-bold text-center text-white">Add New Post</h1>
                    <form action="" method="post" enctype="multipart/form-data" class="space-y-4">
                        <div>
                            <label for="title" class="block text-sm font-medium text-white">Title:</label>
                            <input type="text" name="title" id="title" placeholder="Title" class="w-full px-3 py-2 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-400 focus:border-blue-500">
                        </div>
                        <div>
                            <label for="content" class="block text-sm font-medium text-white">Content:</label>
                            <textarea name="content" id="content" rows="3" placeholder="Content" class="w-full px-3 py-2 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-400 focus:border-blue-500"></textarea>
                        </div>
                        <div>
                            <label for="image" class="block text-sm font-medium   text-white">Select Image:</label>
                            <input type="file" name="image" id="image" class="mt-1 bg-gradient-to-r from-green-400 to-blue-500  focus:outline-none focus:ring focus:ring-blue-400 focus:border-blue-500">
                        </div>
                        <div class="flex justify-end space-x-4">
                            <button type="submit" name="submit" class="inline-flex items-center justify-center px-4 py-2 text-white bg-gradient-to-r from-green-400 to-blue-500 rounded-md hover:from-green-500 hover:to-blue-600 focus:outline-none focus:ring focus:ring-blue-400 focus:ring-opacity-50">Upload</button>
                            <button type="reset" name="reset" class="inline-flex items-center justify-center px-4 py-2 text-white bg-gradient-to-r from-red-400 to-pink-500 rounded-md hover:from-red-500 hover:to-pink-600 focus:outline-none focus:ring focus:ring-red-400 focus:ring-opacity-50">Cancel</button>
                        </div>
                    </form>
                    <div class="text-center">
                        <?php
                        include '../connection.php';
                        if (isset($_POST["submit"])) {
                            $title = $_POST['title'];
                            $content = $_POST['content'];
                            $image_name = $_FILES['image']['name'];
                            $image_type = $_FILES['image']['type'];
                            $image_tmp = $_FILES['image']['tmp_name'];
                            if ($title == "" || $content == "" || $image_name == "") {
                                echo "<p class='text-red-500'>Some fields are empty!</p>";
                            } else {
                                $run = move_uploaded_file($image_tmp, "../assets/images/$image_name");
                                $query = "INSERT INTO posts(title, content, image) VALUES ('$title', '$content', '$image_name')";
                                $run = mysqli_query($conn, $query);
                                if ($run) {
                                    echo "<p class='text-white'>Uploaded successfully!</p>";
                                } else {
                                    echo "<p class='text-red-500'>Error found!</p>";
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>