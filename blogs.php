<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fun Olympic Paris 2024</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


</head>

<body>
    <?php include('header.php'); ?>
    <div class="mt-20 bg-gradient-to-r from-blue-600 to-green-200">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl md:text-6xl">Blogs</h2>
                <p class="mt-3 text-lg leading-6 text-white">See whats happening</p>
            </div>
        </div>
    </div>
    <!-- blogs section started  -->
    <?php
include "connection.php"; // Include the database connection file

// Query to select values from the "posts" table
$query = "SELECT title, content, image FROM posts";

// Perform the query
$result = mysqli_query($conn, $query);

// Check if there are any posts
if (mysqli_num_rows($result) > 0) {
    // Loop through each row of the result set
    while ($row = mysqli_fetch_assoc($result)) {
        // Extract values from the current row
        $title = $row['title'];
        $content = $row['content'];
        $image = $row['image'];
?>
        <section class="p-5 flex-col items-center bg-gradient-to-r from-blue-100 to-green-100 justify-center">
            <a href="#" class="flex mt-4 flex-col items-center bg-gradient-to-r from-blue-700 to-green-400 border border-gray-200 rounded-lg shadow-md md:flex-row md:max-w-9xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-56 md:w-72 md:rounded-none md:rounded-s-lg" src="assets/images/<?php echo $image; ?>" alt="<?php echo $title; ?>">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white"><?php echo $title; ?></h5>
                    <p class="mb-3 font-normal text-white dark:text-gray-400"><?php echo $content; ?></p>
                </div>
            </a>
        </section>
<?php
    }
} else {
    // Display a message if there are no posts
    echo "<p>No posts found.</p>";
}

// Close the database connection
mysqli_close($conn);
?>




    <?php include('footer.php'); ?>

</body>

</html>