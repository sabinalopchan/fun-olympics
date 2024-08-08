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

<body class="bg-gradient-to-r from-blue-500 to-red-600">

    <?php
    include "sidebar.php"
    ?>
    <?php
    include '../connection.php';
    if (isset($_GET['submit'])) {

        $a = $_GET['id1'];
        $b = $_GET['fname1'];
        $c = $_GET['lname1'];
        $d = $_GET['address1'];
        $e = $_GET['country1'];
        $f = $_GET['city1'];
        $g = $_GET['phone1'];
        $h = $_GET['email1'];
        $i = $_GET['booking1'];

        $query = "update reservation set first_name='$b',last_name='$c',address='$d',country='$e', city='$f', phone='$g', email='$h', olympicgames='$i'  where id='$a'";
        $run = mysqli_query($conn, $query);
        if ($run) {
            echo "<script>window.location.href='reservation.php';</script>";
            exit;
        } else {
            echo "Update not successful!";
        } 
    }

    ?>
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-solid rounded-lg dark:border-gray-700">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <h1 class="text-2xl font-bold text-white">Modify Reservation</h1>
                    <form action="" method="GET" class="mt-4">
                        <div class="mb-4">
                            <label for="id" class="block text-gray-100">ID</label>
                            <input type="text" name="id1" id="id1" class="form-input mt-1 block w-full rounded-lg bg-white" value="<?php echo $_GET['id']; ?>">
                        </div>

                        <div class="mb-4">
                            <label for="fname" class="block text-gray-100">First Name</label>
                            <input type="text" name="fname1" id="fname1" class="form-input mt-1 block w-full rounded-lg bg-white" value="<?php echo $_GET['fname']; ?>">
                        </div>

                        <div class="mb-4">
                            <label for="lname" class="block text-gray-100">Last Name</label>
                            <input type="text" name="lname1" id="lname1" class="form-input mt-1 block w-full rounded-lg bg-white" value="<?php echo $_GET['lname']; ?>">
                        </div>

                        <div class="mb-4">
                            <label for="address" class="block text-gray-100">Address</label>
                            <input type="text" name="address1" id="address1" class="form-input mt-1 block w-full rounded-lg bg-white" value="<?php echo $_GET['address']; ?>">
                        </div>

                        <div class="mb-4">
                            <label for="country" class="block text-gray-100">Country</label>
                            <input type="text" name="country1" id="country1" class="form-input mt-1 block w-full rounded-lg bg-white" value="<?php echo $_GET['country']; ?>">
                        </div>

                        <div class="mb-4">
                            <label for="city" class="block text-gray-100">City</label>
                            <input type="text" name="city1" id="city1" class="form-input mt-1 block w-full rounded-lg bg-white" value="<?php echo $_GET['city']; ?>">
                        </div>

                        <div class="mb-4">
                            <label for="phone" class="block text-gray-100">Phone</label>
                            <input type="text" name="phone1" id="phone1" class="form-input mt-1 block w-full rounded-lg bg-white" value="<?php echo $_GET['phone']; ?>">
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block text-gray-100">Email</label>
                            <input type="text" name="email1" id="email1" class="form-input mt-1 block w-full rounded-lg bg-white" value="<?php echo $_GET['email']; ?>">
                        </div>

                        <div class="mb-4">
                            <label for="booking" class="block text-gray-100">Booking</label>
                            <input type="text" name="booking1" id="booking1" class="form-input mt-1 block w-full rounded-lg bg-white" value="<?php echo $_GET['booking']; ?>">
                        </div>

                        <button type="submit" name="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg mr-2 hover:bg-blue-600 transition duration-300 ease-in-out">Update</button>
                        <button type="reset" name="reset" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition duration-300 ease-in-out">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


</html>