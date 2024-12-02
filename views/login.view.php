<?php
session_start();

// Handle error messages from login failure
$errors = $_SESSION['errors'] ?? [];
unset($_SESSION['errors']); // Clear errors after displaying them

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../public/styles/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <div class="container" id="container">

        <!-- Sign In Form -->
        <div class="form-container sign-in-container" id="signInContainer">
            <form id="signInForm" action="../controllers/login.php" method="POST">
                <div class="form-header">
                    <img src="../public/img/logo1.png" alt="Logo" class="logo">
                    <h2>CDM CAMPUS CART</h2>
                </div>

                <!-- Display error messages -->
                <?php if (isset($_SESSION['login_failed'])): ?>
                    <div class="error-messages">
                        <p><?php echo $_SESSION['login_failed']; ?></p>
                    </div>
                    <?php unset($_SESSION['login_failed']); ?>
                <?php endif; ?>

                <!-- Login fields -->
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Enter your Password" required>
                <input type="submit" value="Sign In" class="sign-In-button">
                <p>Don't have an account? <a href="../controllers/register.php" class="switch-form">Register here!</a></p>

                <div class="social-login">
                    <div class="line-container">
                        <hr class="line">
                        <span>or continue with</span>
                        <hr class="line">
                    </div>
                    <button type="button" class="social-btn google">
                        <img src="../public/img/google-icon.png" alt="Google Icon" class="google-icon"> 
                        Sign in with Google
                    </button>
                </div>
            </form>
        </div>

        <!-- Overlay for Form Transition -->
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

    <!-- Custom Alert -->
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

        // Check if there is a success or error message passed from the PHP session and show custom alert
        <?php if (isset($_SESSION['login_success'])): ?>
            showCustomAlert("Login successful!");
            <?php unset($_SESSION['login_success']); ?>
        <?php elseif (isset($_SESSION['login_failed'])): ?>
            showCustomAlert("Login failed: <?php echo $_SESSION['login_failed']; ?>");
            <?php unset($_SESSION['login_failed']); ?>
        <?php endif; ?>
    </script>
</body>
</html>
