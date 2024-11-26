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
                    <img src="./img/logo1.png" alt="Logo" class="logo">
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
                        <img src="./img/google-icon.png" alt="Google Icon" class="google-icon"> 
                        Sign in with Google
                    </button>
                    
                </div>
            </form>
        </div>

        <!-- Sign Up Form -->
        <div class="form-container sign-up-container" id="signUpContainer">
            <form id="signUpForm" action="#">
                <div class="form-header">
                    <img src="./img/logo1.png" alt="Logo" class="logo">
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
                        <img src="./img/google-icon.png" alt="Google Icon" class="google-icon"> 
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
                    <img src="./img/lo.png" alt="Pic" class="pic">
                    <div class="third-circle"></div>
                </div>
                <div class="overlay-panel overlay-right">
                    <h3>Everything you need, <b>right on campus.</b></h3>
                    <img src="./img/lo.png" alt="Pic" class="pic">
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

    <script src="script.js"></script>
</body>
</html>
