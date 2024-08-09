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
    <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
            width: 80%;
            max-width: 800px;
            /* Max width of the modal content */
            background-color: #fff;
            border-radius: 5px;
            overflow: hidden;
            position: relative;
            top: 65px;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            color: #aaa;
            font-size: 24px;
            cursor: pointer;
        }

        .modal-body {
            text-align: center;
            overflow: hidden;
        }

        .modal-body img {
            width: 100%;
            /* Ensure the image fills the modal content */
            height: auto;
            display: block;
        }
    </style>
</head>

<body>
    <?php include('header.php'); ?>
    <div class="mt-20 bg-gradient-to-r from-blue-600 to-green-200">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl md:text-6xl">Gallery</h2>
                <p class="mt-3 text-lg leading-6 text-white">See the beautiful glimpse of Olympic</p>
            </div>
        </div>
    </div>



    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-4">
        <?php
        // Path to the directory containing images
        $imageDirectory = "assets/gallery";

        // Get all image files from the directory
        $imageFiles = glob($imageDirectory . "/*.{jpg,jpeg,png,gif}", GLOB_BRACE);

        // Loop through each image file
        foreach ($imageFiles as $imageFile) {
        ?>
            <div>
                <img class="h-auto max-w-full rounded-lg image" src="<?php echo $imageFile; ?>" alt="">
            </div>
        <?php
        }
        ?>
    </div>

    <!-- Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="modal-body">
                <img id="modalImage" src="" alt="">
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var images = document.getElementsByClassName('image');
        var modalImg = document.getElementById("modalImage");
        var i;

        for (i = 0; i < images.length; i++) {
            images[i].onclick = function() {
                modal.style.display = "block";
                modalImg.src = this.src;
            }
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>
</body>

</html>