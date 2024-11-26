<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CDM</title>
    <link rel="stylesheet" href="../public/styles/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    
</head>
<body>
    <div class="container" id="container">
        <!-- Sign In Form -->
        <div class="form-container sign-in-container" id="signInContainer">
            <form id="signInForm" action="#">
                <div class="form-header">
                    <img src="../public/img/logo1.png" alt="Logo" class="logo">
                    <h2>CDM CAMPUS CART</h2>
                </div>
                <input type="email" placeholder="Email" required>
                <input type="password" placeholder="Enter your Password" required>
                <input type="submit" value="Sign In" class="sign-In-button">
                <p>Don't have an account? <span class="switch-form" onclick="switchToRegister()">Register here!</span></p>

                <div class="social-login">
                    <div class="line-container">
                        <hr class="line">
                        <span>or continue with</span>
                        <hr class="line">
                    </div>
                    <button type="button" class="social-btn google">
                        <img src="../public//img/google-icon.png" alt="Google Icon" class="google-icon"> 
                        Sign in with Google
                    </button>
                    
                </div>
            </form>
        </div>

        <!-- Sign Up Form -->
        <div class="form-container sign-up-container" id="signUpContainer">
            <form id="signUpForm" action="#">
                <div class="form-header">
                    <img src="../public/img/logo1.png" alt="Logo" class="logo">
                    <h2>CDM CAMPUS CART</h2>
                </div>
                <input type="text" placeholder="Enter your Name" required>
                <input type="email" placeholder="Email" required>
                <input type="password" placeholder="Enter your Password" required>
                <input type="submit" value="Sign Up" class="sign-Up-button">
                <p>Already have an account? <span class="switch-form" onclick="switchToLogin()">Login here!</span></p>

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
                <div class="overlay-panel overlay-left">
                    <h3>Everything you need, <b>right on campus.</b></h3>
                    <img src="../public/img/lo.png" alt="Pic" class="pic">
                    <div class="third-circle"></div>
                </div>
                <div class="overlay-panel overlay-right">
                    <h3>Everything you need, <b>right on campus.</b></h3>
                    <img src="../public//img/lo.png" alt="Pic" class="pic">
                    <div class="third-circle"></div>
                </div>
            </div>
        </div>
    </div>
    
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

// Function to switch to the Register form (Sign-Up)
function switchToRegister() {
    // Add the right-panel-active class to the container
    document.getElementById('container').classList.add('right-panel-active');
}

// Function to switch to the Login form (Sign-In)
function switchToLogin() {
    // Remove the right-panel-active class to go back to sign-in
    document.getElementById('container').classList.remove('right-panel-active');
}


// Add event listener for the Sign Up form submission
const signUpForm = document.getElementById('signUpForm');
signUpForm.addEventListener("submit", function(event) {
    event.preventDefault(); 

    const nameInput = this.querySelector("input[type='text']");
    const emailInput = this.querySelector("input[type='email']");
    const passwordInput = this.querySelector("input[type='password']");
    const password = passwordInput.value;

    // Password validation
    const passwordRequirements = /^(?=.*\d)(?=.*[!@#$%_^&*])(?=.*[a-zA-Z]).{8,}$/;

    // Check if all fields are filled
    if (!nameInput.value || !emailInput.value || !passwordInput.value) {
        showCustomAlert("Please enter all the required fields.");
        return; // Exit the function
    } else if (!passwordRequirements.test(password)) { 
        showCustomAlert("Password must be at least 8 characters long, contain a number, and a special character.");
        return; // Exit the function
    }

    // Store the name and email in localStorage
    localStorage.setItem("userName", nameInput.value);
    localStorage.setItem("userEmail", emailInput.value);

    // Redirect to the homepage after successful sign-up
    window.location.href = "../controllers/login.php"; 
});

// Add event listener for the Sign In form submission
const signInForm = document.getElementById('signInForm');
signInForm.addEventListener("submit", function(event) {
    event.preventDefault();
    const emailInput = this.querySelector("input[type='email']");
    const passwordInput = this.querySelector("input[type='password']");
    const password = passwordInput.value;

    // Password validation
    const passwordRequirements = /^(?=.*\d)(?=.*[!@#$%_^&*])(?=.*[a-zA-Z]).{8,}$/;

    // Check if email and password are filled
    if (!emailInput.value || !passwordInput.value) {
        showCustomAlert("Please enter both email and password.");
        return;
    } else if (!passwordRequirements.test(password)) {
        showCustomAlert("Password must be at least 8 characters long, contain a number, and a special character.");
        return;
    }

    // Redirect to the homepage if validation passes
    window.location.href = "../index.php"; 
});


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

// Function to switch to the Register form (Sign-Up)
function switchToRegister() {
    // Add the right-panel-active class to the container
    document.getElementById('container').classList.add('right-panel-active');
}



    </script>
</body>
</html>
