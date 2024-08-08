<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit;
}

// Validate login credentials
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = "admin"; // Default username
    $password = "admin"; // Default password

    if ($_POST['username'] === $username && $_POST['password'] === $password) {
        // Set session variables
        $_SESSION['username'] = $username;

        // Redirect to dashboard
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Invalid username or password or you a subscriber.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Admin Panel</title>
    <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</head>

<body class="bg-gradient-to-r from-blue-500 to-red-500 min-h-screen flex items-center justify-center">
  <div class="bg-white rounded-lg shadow-lg p-8 max-w-md w-full">
    <div class="text-center mb-8">
      <i class="bi bi-lock-fill text-5xl text-blue-600"></i>
      <h2 class="text-3xl font-bold text-gray-800 mt-4">Admin Panel</h2>
      <p class="text-gray-600">Fun Olympic Paris 2024</p>
    </div>
    <form class="space-y-6 shadow-lg" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
      <div>
        <label for="username" class="block text-gray-700 font-semibold mb-2">Username</label>
        <div class="relative">
          <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            <i class="bi bi-person-fill text-blue-600"></i>
          </div>
          <input id="username" name="username" type="text" required
            class="block w-full pl-10 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
            placeholder="Enter your username">
        </div>
      </div>
      <div>
        <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
        <div class="relative">
          <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            <i class="bi bi-lock-fill text-blue-600"></i>
          </div>
          <input id="password" name="password" type="password" required
            class="block w-full pl-10 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
            placeholder="Enter your password">
        </div>
      </div>
      <div class="flex items-center justify-between">
        <div class="flex items-center">
          <input id="remember_me" name="remember_me" type="checkbox"
            class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
          <label for="remember_me" class="ml-2 block text-sm text-gray-900">Remember me</label>
        </div>
       
      </div>
      <?php if (isset($error)) : ?>
      <p class="text-red-500 text-sm"><?php echo $error; ?></p>
      <?php endif; ?>
      <div>
        <button type="submit"
          class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
          Log in
        </button>
      </div>
    </form>
  </div>
</body>

</html>