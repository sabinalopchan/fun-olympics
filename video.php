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

<body class="bg-gray-100">
    <?php include('header.php'); ?>
    <div class="mt-20 bg-gradient-to-r from-blue-600 to-green-200">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl md:text-6xl ">Live <i class="bi bi-broadcast"></i></h2>
                <p class="mt-3 text-lg leading-6 text-white">Watch the Olympic videos live</p>
            </div>
        </div>
    </div>

    <!-- Video content -->
    <section class="video overflow-x-hidden bg-gradient-to-r from-blue-100 to-green-100 p-5 flex flex-col lg:flex-row justify-start lg:justify-between items-center">
        <!-- Video player -->
        <div class="w-full lg:w-3/4">
            <iframe class="w-full h-96 lg:h-128 border border-gray-200 rounded-lg mb-8" controls src="https://www.youtube.com/embed/PF4b8cOfj_M?si=64qtA2wQH9RKkd8V" title="Day 1 court 1 Asian Olympic Qualification Tournament" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

            <div class="p-4  w-screen  bg-gradient-to-r from-blue-900 to-green-900 text-white rounded-lg mb-8">

                <h2 class="text-lg font-semibold p-4">Playlist</h2>
                <ul class="divide-y divide-gray-700">
                    <?php
                    // Use glob function to fetch video files
                    $videos = glob("assets/videos/*.mp4");
                    foreach ($videos as $index => $video) {
                        $videoName = basename($video);
                        echo "<li class='py-2 flex items-center'>";
                        echo "<button onclick='changeVideo(\"$video\")' class='bg-blue-500 text-white py-1 px-3 rounded-md'>Play</button>";
                        echo "<p class='text-white ml-3'>$videoName</p>";
                        echo "</li>";
                    }
                    ?>
                </ul>
            </div>
        </div>

        <div class="w-full mb-52 h-96 lg:w-1/4 bg-gradient-to-r from-blue-600 to-green-200 text-white rounded-lg">
            <h2 class="text-lg font-semibold mb-2">Live Comment Box</h2>
            <textarea class="w-full h-80 bg-gradient-to-r from-blue-900 to-green-900 text-white p-2 rounded-md resize-none" placeholder="Type your comment here..."></textarea>
        </div>
    </section>

    <?php include('footer.php'); ?>

    <!-- JavaScript to change video source -->
    <script>
        function changeVideo(videoSrc) {
            const videoPlayer = document.querySelector('iframe');
            videoPlayer.src = videoSrc;
        }
    </script>
</body>

</html>