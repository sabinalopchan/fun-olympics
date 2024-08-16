<?php
session_start();

// Security Headers
header("X-Content-Type-Options: nosniff");
header("X-Frame-Options: DENY");
// Check if the user is logged in
$username = isset($_SESSION['username']) ? $_SESSION['username'] : null;
?>

<nav class="bg-gradient-to-r from-blue-500 to-green-500 dark:bg-gray-900 fixed w-full z-40 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="assets/images/logo.png" class="h-14 w-32" alt="Flowbite Logo">
        </a>
        <div class="flex md:order-2 gap-3 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <?php if ($username) : ?>
                <span class="text-white font-semibold mt-1 mr-8"> <i class="bi bi-person-circle"></i> Welcome <?php echo $username; ?></span>
                <a href="logout.php">
                    <button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 transition duration-300 ease-in-out">Log out</button>
                </a>
            <?php else : ?>
                <a href="login.php">
                    <button type="button" class="text-white bg-gradient-to-r from-yellow-300 to-green-400 hover:from-green-500 hover:to-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-lg px-6 py-3 dark:bg-gradient-to-r dark:from-yellow-900 dark:to-green-400 dark:hover:from-yellow-800 dark:hover:to-green-500 dark:focus:ring-yellow-800 transition duration-300 ease-in-out">Sign in</button>

                </a>
            <?php endif; ?>
            <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" type="button" class="text-white bg-yellow-500 hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800 transition duration-300 ease-in-out">Reserve Now</button>
            <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 transition duration-300 ease-in-out" aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium bg-transparent md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent dark:bg-transparent md:dark:bg-transparent dark:border-gray-700">
                <li>
                    <a href="index.php" class="block py-2 px-3 text-white rounded hover:bg-opacity-40 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:hover:bg-opacity-40 dark:text-white md:dark:hover:bg-transparent dark:border-gray-700 transition duration-300 ease-in-out">Home</a>
                </li>
                <li>
                    <a href="about.php" class="block py-2 px-3 text-white rounded hover:bg-opacity-40 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-opacity-40 md:dark:hover:bg-transparent dark:border-gray-700 transition duration-300 ease-in-out">About</a>
                </li>
                <li>
                    <a href="gallery.php" class="block py-2 px-3 text-white rounded hover:bg-opacity-40 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-opacity-40 md:dark:hover:bg-transparent dark:border-gray-700 transition duration-300 ease-in-out">Gallery</a>
                </li>
                <?php if ($username) : ?>
                    <li>
                        <a href="video.php" class="block py-2 px-3 text-white rounded hover:bg-opacity-40 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-opacity-40 md:dark:hover:bg-transparent dark:border-gray-700 transition duration-300 ease-in-out">Videos</a>
                    </li>
                <?php endif; ?>
                <li>
                    <a href="blogs.php" class="block py-2 px-3 text-white rounded hover:bg-opacity-40 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-opacity-40 md:dark:hover:bg-transparent dark:border-gray-700 transition duration-300 ease-in-out">Blogs</a>
                </li>
                <li>
                    <a href="contact.php" class="block py-2 px-3 text-white rounded hover:bg-opacity-40 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-opacity-40 md:dark:hover:bg-transparent dark:border-gray-700 transition duration-300 ease-in-out">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>












<!-- rservation modal  -->
<!-- Modal toggle -->


<!-- Main modal -->
<div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 bg-gradient-to-r from-blue-500 to-blue-600">
                <h3 class="text-lg font-semibold text-gray-100 dark:text-white">
                    Reserve Your Spot for Olympic Paris 2024
                </h3>
                <button type="button" class="text-gray-100 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-4 md:p-5" action="" method="POST">
                <div class="grid gap-4 mb-4">
                    <div>
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                        <input type="text" name="fname" id="fname" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Enter your first name" required="">
                    </div>
                    <div>
                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                        <input type="text" name="lname" id="lname" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Enter your last name" required="">
                    </div>
                    <div>
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                        <input type="text" name="address" id="address" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Enter your address" required="">
                    </div>
                    <div>
                        <label for="country" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Country</label>
                        <input type="text" name="country" id="country" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Enter your country" required="">
                    </div>
                    <div>
                        <label for="city" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">City</label>
                        <input type="text" name="city" id="city" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Enter your city" required="">
                    </div>
                    <div>
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone</label>
                        <input type="text" name="phone" id="phone" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Enter your phone" required="">
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="email" id="email" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Enter your email" required="">
                    </div>
                    <div>
                        <label for="sport" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Interested Sport</label>
                        <select id="sport" name="sport" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Select your interested sport</option>
                            <option value="Archery">Archery</option>
                            <option value="Badminton">Badminton</option>
                            <option value="Basketball">Basketball</option>
                            <option value="Fencing">Fencing</option>
                            <option value="Taekwondo">Taekwondo</option>
                            <option value="Swimming">Swimming</option>
                            <option value="Table Tennis">Table Tennis</option>
                            <!-- Add other sports as needed -->
                        </select>
                    </div>
                </div>
                <div class="g-recaptcha mb-2" data-sitekey="6Leei2AoAAAAAFcQOfwIcx4kCHg8FbHdMOKexmZB"></div>
                <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                    </svg>
                    Submit
                </button>
            </form>
            <?php
            include 'connection.php';
            $encryption_method = "AES-256-CBC";
            $secret_key = "YourSecretKey123"; // Use a secure key
            $secret_iv = "YourSecretIV123"; // Initialization vector (IV)

            // Hash the key and IV to ensure they are the correct length
            $key = hash('sha256', $secret_key);
            $iv = substr(hash('sha256', $secret_iv), 0, 16);

            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['g-recaptcha-response'])) {
            $secretkey = "6Leei2AoAAAAAIhxCM6r-o5TquBrZyHWQyLYAQtg";
            $ip = $_SERVER['REMOTE_ADDR'];
            $response = $_POST['g-recaptcha-response'];
            $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$response&remoteip=$ip";
            $request = file_get_contents($url);
            $data = json_decode($request);
            $a = $_POST['fname'];
            $b = $_POST['lname'];
            $c = $_POST['address'];
            $d = $_POST['city'];
            $e = $_POST['country'];
            // Encrypt phone number and email
            $f = openssl_encrypt($_POST['phone'], $encryption_method, $key, 0, $iv);
            $g = openssl_encrypt($_POST['email'], $encryption_method, $key, 0, $iv);
            $h = $_POST['sport'];

            $query = "INSERT INTO reservation (first_name, last_name, address, city, country, phone, email, olympicGames)
                    VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h')";
            $run = mysqli_query($conn, $query);

            if ($run) {
                echo "<script>window.alert('Reservation Successful!')</script>";
            } else {
                echo "<script>window.alert('Not Success! Try Again')</script>";
            }
        }
            ?>


        </div>
    </div>
</div>