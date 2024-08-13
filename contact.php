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
                <h2 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl md:text-6xl">Contact Us</h2>
                <p class="mt-3 text-lg leading-6 text-white">Get in touch with us</p>
            </div>
        </div>
    </div>

    <!-- Contact Page Content -->
    <div class="container mx-auto py-12 px-4 sm:px-6 lg:px-8 bg-gradient-to-r from-blue-100 to-green-100">
        <!-- Contact Form Section -->
        <div class="mb-12">

            <form action="" method="POST" class="max-w-lg mx-auto">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Your Name</label>
                        <input type="text" id="name" name="name" class="mt-1 p-3 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Your name" required>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Your Email</label>
                        <input type="email" id="email" name="email" class="mt-1 p-3 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Your email" required>
                    </div>
                </div>
                <div class="mt-6">
                    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea id="message" name="message" rows="4" class="mt-1 p-3 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Your message" required></textarea>
                </div>
                <div class="text-center mt-6">
                    <button type="submit" class="inline-flex justify-center items-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-gradient-to-r from-blue-600 to-green-400 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Send Message
                    </button>
                </div>
            </form>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Handle form submission here
                // You can process the form data, validate it, and then perform any necessary actions
                // For demonstration purposes, let's assume the form submission was successful
                $messageSent = true;
            }
            ?>

            <!-- JavaScript to show alert if form was submitted successfully -->
            <?php if (isset($messageSent) && $messageSent) : ?>
                <script>
                    window.onload = function() {
                        alert('Message sent successfully!');
                    };
                </script>
            <?php endif; ?>
        </div>



        <!-- Social Media Links Section -->
        <h2 class="text-3xl font-extrabold text-center  text-gray-500 mb-6">Follow us on</h2>
        <div class="flex justify-center">

            <div class="flex space-x-4">
                <a href="#" class="text-gray-600 hover:text-indigo-600">
                    <i class="bi bi-facebook text-4xl"></i>
                </a>
                <a href="#" class="text-gray-600 hover:text-indigo-600">
                    <i class="bi bi-twitter text-4xl"></i>
                </a>
                <a href="#" class="text-gray-600 hover:text-indigo-600">
                    <i class="bi bi-instagram text-4xl"></i>
                </a>
            </div>

        </div>
    </div>


    <?php include('footer.php'); ?>

</body>

</html>