<?php
include "connection.php";

$modalScript = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['g-recaptcha-response'])) {
    $secretkey = "6Leei2AoAAAAAIhxCM6r-o5TquBrZyHWQyLYAQtg";
    $ip = $_SERVER['REMOTE_ADDR'];
    $response = $_POST['g-recaptcha-response'];
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$response&remoteip=$ip";
    $request = file_get_contents($url);
    $data = json_decode($request);
    $a = $_POST['fname'];
    $b = $_POST["lname"];
    $c = $_POST["username"];
    $d = $_POST["password"];
    $e = $_POST["cpassword"];

    // Password policy regex
    $passwordPolicyRegex = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,12}$/";

    if ($data->success == false) {
        echo "<script>alert('Please complete the reCAPTCHA verification.');</script>";
    } elseif ($a == "" || $b == "" || $c == "" || $d == "" || $e == "") {
        echo "<script>alert('Please fill in all fields.');</script>";
    } elseif ($d != $e) {
        echo "<script>alert('Passwords do not match.');</script>";
    } elseif (!preg_match($passwordPolicyRegex, $d)) {
        echo "<script>alert('Password must be 8-12 characters long and include at least one uppercase letter, one lowercase letter, one number, and one special character.');</script>";
    } else {
        $d = md5($d); // Encrypt the password using md5
        $query = "INSERT INTO users(first_name, last_name, username, password)
                  VALUES('$a','$b','$c','$d')";
        $run = mysqli_query($conn, $query);
        if ($run) {
            $modalScript = "<script>alert('Sign up successful.'); document.getElementById('createaccount-modal').classList.remove('modal-visible');</script>";
        } else {
            echo "<script>alert('An error occurred. Please try again later.');</script>";
        }
    }
}

echo $modalScript;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Fun Olympic Paris 2024</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
    function checkPasswordStrength() {
        var password = document.getElementById("password").value;
        var strengthMeter = document.getElementById("password-strength-meter");
        var strengthText = document.getElementById("password-strength-text");

        // Default strength is weak
        var strength = "Weak";
        var textColor = "text-red-500";

        // Regular expressions to match different types of characters
        var regex = {
            lowerCase: /[a-z]/,
            upperCase: /[A-Z]/,
            numbers: /[0-9]/,
            specialChars: /[^A-Za-z0-9]/
        };

        // Check for each type of character and increase strength
        var score = 0;
        if (regex.lowerCase.test(password)) score++;
        if (regex.upperCase.test(password)) score++;
        if (regex.numbers.test(password)) score++;
        if (regex.specialChars.test(password)) score++;
        if (password.length >= 8 && password.length <= 12) score++;

        // Set the width of the strength meter based on the score
        var meterWidth = score * 20; // Each criteria contributes 20% to the score
        strengthMeter.style.width = meterWidth + "%";

        // Determine strength text and color
        if (score >= 4) {
            strength = "Strong";
            textColor = "text-green-500";
        } else if (score >= 3) {
            strength = "Medium";
            textColor = "text-yellow-500";
        }

        // Display strength and color
        strengthText.innerHTML = strength;
        strengthText.classList.remove("text-red-500", "text-yellow-500", "text-green-500");
        strengthText.classList.add(textColor);
    }
</script>

</head>

<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-md form-container">
            <form class="space-y-4" action="" method="post">
                <div>
                    <label for="fname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                    <input type="text" name="fname" id="fname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="First name" required />
                </div>
                <div>
                    <label for="lname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                    <input type="text" name="lname" id="lname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Last name" required />
                </div>
                <div>
                    <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                    <input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Username" required />
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required oninput="checkPasswordStrength()" />
                </div>
                <!-- Password strength meter -->
                <div class="text-sm mb-2">Password Strength: <span id="password-strength-text" class="font-medium">Weak</span></div>
                <div class="relative h-2 mb-4 rounded-lg overflow-hidden bg-gray-200">
                    <div id="password-strength-meter" class="absolute top-0 left-0 h-full bg-red-500" style="width: 20%;"></div>
                </div>
                <div>
                    <label for="cpassword" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm Password</label>
                    <input type="password" name="cpassword" id="cpassword" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                </div>
                <div class="g-recaptcha" data-sitekey="6Leei2AoAAAAAFcQOfwIcx4kCHg8FbHdMOKexmZB"></div>
                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Sign Up</button>
                <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                    Already have an account? <a href="login.php" class="text-blue-700 hover:underline dark:text-blue-500">Login</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>


<!-- loginnnnnnnnnnnnnnnnn -->
<?php
session_start();
include "connection.php";

// Check if the user is already logged in
if (isset($_SESSION['username'])) {
    header("Location: index.php"); // Redirect to index.php if already logged in
    exit();
}

// Authentication logic for login
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['g-recaptcha-response'])) {
    $secretkey = "6Leei2AoAAAAAIhxCM6r-o5TquBrZyHWQyLYAQtg";
    $ip = $_SERVER['REMOTE_ADDR'];
    $response = $_POST['g-recaptcha-response'];
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$response&remoteip=$ip";
    $request = file_get_contents($url);
    $data = json_decode($request);
    $a = $_POST['username'];
    $b = md5($_POST['password']);

    if ($data->success == false) {
        echo "<script>alert('Please complete the reCAPTCHA verification.');</script>";
    } elseif ($a == '' || $b == '') {
        echo "<script>alert('Some fields are empty!');</script>";
    } else {
        $query = "SELECT * FROM users WHERE username='$a' AND password='$b'";
        $run = mysqli_query($conn, $query);
        if (mysqli_num_rows($run) > 0) {
            $_SESSION['username'] = $a;
            // Redirect to index.php after successful login
            header("Location: index.php");
            exit();
        } else {
            echo "<script>alert('Invalid User!');</script>";
        }
    }
}
?>
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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>

<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-lg form-container">
            <!-- Your inherited form code -->
            <form class="space-y-4" action="login.php" method="post">
                <div>
                    <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your username</label>
                    <input type="username" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="username" required />
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                    <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                </div>
                <div class="flex justify-between">
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
                        </div>
                        <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                    </div>
                    <a href="forgot-password.php" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Lost Password?</a>
                </div>
                <div class="g-recaptcha" data-sitekey="6Leei2AoAAAAAFcQOfwIcx4kCHg8FbHdMOKexmZB"></div>
                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login to your account</button>
                <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                    Not registered? <a href="signup.php" class="cursor-pointer text-blue-700 hover:underline dark:text-blue-500">Create account</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
