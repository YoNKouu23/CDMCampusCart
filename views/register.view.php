<?php
// Start the session to access session variables
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Retrieve success or error messages and form data from the session
$success = $_SESSION['success'] ?? null;
$errors = $_SESSION['errors'] ?? [];
$formData = $_SESSION['form_data'] ?? [];

// Clear the session variables after using them
unset($_SESSION['success'], $_SESSION['errors'], $_SESSION['form_data']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../public/styles/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-in-container" id="signInContainer">
            <form id="signUpForm" action="../controllers/register.php" method="POST">
                <div class="form-header">
                    <img src="../public/img/logo1.png" alt="Logo" class="logo">
                    <h2>CDM CAMPUS CART</h2>
                </div>

                <!-- Display error messages -->
                <?php if (!empty($errors)): ?>
                    <div class="error-messages">
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li><?php echo htmlspecialchars($error); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <!-- Name field -->
                <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    required 
                    placeholder="Enter your full name" 
                    value="<?php echo htmlspecialchars($formData['name'] ?? ''); ?>">

                <!-- Username field -->
                <input 
                    type="text" 
                    id="username" 
                    name="username" 
                    required 
                    placeholder="Enter your username" 
                    value="<?php echo htmlspecialchars($formData['username'] ?? ''); ?>">

                <!-- Email field -->
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    required 
                    placeholder="Enter your email" 
                    value="<?php echo htmlspecialchars($formData['email'] ?? ''); ?>">

                <!-- Password field -->
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    required 
                    placeholder="Enter your password">

                <!-- New Gender field -->
                <select name="gender" id="gender" required>
                    <option value="" disabled selected>Select your gender</option>
                    <option value="male" <?php echo ($formData['gender'] ?? '') === 'male' ? 'selected' : ''; ?>>Male</option>
                    <option value="female" <?php echo ($formData['gender'] ?? '') === 'female' ? 'selected' : ''; ?>>Female</option>
                    <option value="other" <?php echo ($formData['gender'] ?? '') === 'other' ? 'selected' : ''; ?>>Other</option>
                </select>

                <!-- New Birthdate field -->
                <input 
                    type="date" 
                    id="birthdate" 
                    name="birthdate" 
                    required 
                    value="<?php echo htmlspecialchars($formData['birthdate'] ?? ''); ?>">

                <button type="submit" class="login-btn">Register</button>
                <p>Already have an account? <a href="../controllers/login.php" class="switch-form">Login here!</a></p>

                <div class="error-message" id="error-message"></div>
            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h3>Everything you need, <b>right on campus.</b></h3>
                    <img src="../public/img/lo.png" alt="Pic" class="pic">
                    <div class="third-circle"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Custom alert modal -->
    <div id="customAlert" class="custom-alert">
        <div class="alert-content">
            <p id="alertMessage">This is a custom alert message!</p>
            <button id="alertOkButton" class="alert-ok">OK</button>
        </div>
    </div>

    <script>
        // Function to show the custom alert
        function showCustomAlert(message) {
            const alertMessage = document.getElementById("alertMessage");
            const customAlert = document.getElementById("customAlert");

            // Set the alert message
            alertMessage.textContent = message;

            // Show the custom alert
            customAlert.style.display = "flex";

            // Get the "OK" button and add a click event listener to close the modal
            const okButton = document.getElementById("alertOkButton");
            okButton.addEventListener("click", function() {
                customAlert.style.display = "none"; 
            });
        }

        // Show success or error message if available
        <?php if ($success): ?>
            showCustomAlert("<?php echo addslashes($success); ?>");
        <?php elseif (!empty($errors)): ?>
            showCustomAlert("<?php echo addslashes(implode(', ', $errors)); ?>");
        <?php endif; ?>
    </script>
</body>
</html>
