<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fun Olympic Paris 2024</title>
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body class="bg-gray-100">

  <!-- Navbar -->
  <nav class="bg-blue-900 text-white">
    <div class="container mx-auto px-4 py-2 flex justify-between items-center">
      <a class="text-2xl font-bold" href="#">Verify OTP</a>
      <ul class="flex">
        <li class="mr-6">
          <a class="hover:text-gray-300" href="index.php">Home</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- End Navbar -->

  <!-- OTP Verification Form -->
  <div class="container mx-auto px-4 py-8">
    <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden shadow-md">
      <div class="p-6">
        <h2 class="text-2xl font-semibold mb-6">Verify OTP</h2>
        <form action="" method="post">
          <div class="mb-4">
            <label for="otp" class="block text-sm font-medium text-gray-700">Enter OTP:</label>
            <input type="text" name="otp" id="otp" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" placeholder="e.g. 123" required autofocus>
          </div>

          <div class="flex justify-between">
            <button type="submit" name="submit" class="bg-blue-800 text-white py-2 px-4 rounded-md hover:bg-blue-900 focus:outline-none focus:bg-gray-700">Verify Code</button>
            <button type="reset" class="bg-red-500 text-white py-2 px-4 rounded-md hover:bg-red-600 focus:outline-none focus:bg-red-600">Cancel</button>
          </div>

          <p class="mt-4 text-sm text-center">Don't have an account? <a href="signup.php" class="text-blue-500">Create New Account</a></p>
        </form>

        <?php
        include 'connection.php';
        if (isset($_POST['submit'])) {
          $a = $_POST['otp'];
          $query = "SELECT * FROM otp WHERE otp='$a'";
          $run = mysqli_query($conn, $query);
          if (mysqli_num_rows($run) > 0) {
            echo "<script>window.open('update-password.php','_self')</script>";
          } else {
            echo "<p class='mt-4 text-sm text-red-600 text-center'>Invalid OTP!</p>";
          }
        }
        mysqli_close($conn);
        ?>
      </div>
    </div>
  </div>
  <!-- End OTP Verification Form -->

</body>

</html>