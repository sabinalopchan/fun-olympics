<?php
include "connection.php";

$modalScript = "";
$passwordError = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['g-recaptcha-response'])) {
    $secretkey = "6Leei2AoAAAAAIhxCM6r-o5TquBrZyHWQyLYAQtg";
    $ip = $_SERVER['REMOTE_ADDR'];
    $response = $_POST['g-recaptcha-response'];
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$response&remoteip=$ip";
    $request = file_get_contents($url);
    $data = json_decode($request);
    $fname = $_POST['fname'];
    $lname = $_POST["lname"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["cpassword"];

    // Password policy regex
    $passwordPolicyRegex = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,12}$/";

    if ($data->success == false) {
        echo "<script>alert('Please complete the reCAPTCHA verification.');</script>";
    } elseif ($fname == "" || $lname == "" || $username == "" || $password == "" || $confirmPassword == "") {
        echo "<script>alert('Please fill in all fields.');</script>";
    } elseif ($password != $confirmPassword) {
        $confirmPasswordError = 'Password does not match';
    } else {
        $hashedPassword = md5($password); // Encrypt the password using md5
        $query = "INSERT INTO users(first_name, last_name, username, password) 
        VALUES('$fname','$lname','$username','$hashedPassword')";
        $run = mysqli_query($conn, $query);
        if ($run) {
            $modalScript = "<script>alert('Sign up successful.'); document.getElementById('createaccount-modal')
            .classList.remove('modal-visible');</script>";
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

        var meterWidth = score * 20; // Each criteria contributes 20% to the score
        strengthMeter.style.width = meterWidth + "%";
       // Determine strength text and color
        if (score >= 4) {
            strength = "Strong";
            textColor = "text-green-500";
            meterColor = "bg-green-500"; 
        } else if (score >= 3) {
            strength = "Medium";
            textColor = "text-yellow-500";
            meterColor = "bg-yellow-500"; 
        }

        // Display strength and color
        strengthText.innerHTML = strength;
        strengthText.classList.remove("text-red-500", "text-yellow-500", "text-green-500");
        strengthText.classList.add(textColor);

        // Update the meter color
        strengthMeter.classList.remove("bg-red-500", "bg-yellow-500", "bg-green-500");
        strengthMeter.classList.add(meterColor);
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
                    <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <input type="text" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Email" required />
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required oninput="checkPasswordStrength()" />
                    <!-- Display password error message if set -->
                    <?php if (!empty($passwordError)): ?>
                        <p class="text-red-500 text-sm mt-1"><?php echo htmlspecialchars($passwordError); ?></p>
                    <?php endif; ?>
                </div>
                <!-- Password strength meter -->
                <div class="text-sm mb-2">Password Strength: <span id="password-strength-text" class="font-medium">Weak</span></div>
                <div class="relative h-2 mb-4 rounded-lg overflow-hidden bg-gray-200">
                    <div id="password-strength-meter" class="absolute top-0 left-0 h-full bg-red-500" style="width: 20%;"></div>
                </div>
            
                <div>
                    <label for="cpassword" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm Password</label>
                    <input type="password" name="cpassword" id="cpassword" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                    <?php if (!empty($confirmPasswordError)): ?>
                        <p class="text-red-500 text-sm mt-1"><?php echo htmlspecialchars($confirmPasswordError); ?></p>
                    <?php endif; ?>
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
