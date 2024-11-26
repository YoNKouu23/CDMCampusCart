<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../public/styles/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-in-container" id="signInContainer">
            <form id="signInForm" action="#">
                <div class="form-header">
                    <img src="../public/img/logo1.png" alt="Logo" class="logo">
                    <h2>CDM CAMPUS ADMIN</h2>
                </div>
                <input type="text" id="username" name="username" required placeholder="Enter your username">
                <input type="password" id="password" name="password" required placeholder="Enter your password">    
                <button type="submit" class="login-btn">Login</button>
                
                <div class="error-message" id="error-message"></div>
            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h3>Everything you need, <b>right on campus.</b></h3>
                    <img src="../public/img/logoo.png" alt="Pic" class="pic">
                    <div class="third-circle"></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('signInForm').addEventListener('submit', function(event) {
            event.preventDefault();

            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;
            var errorMessage = document.getElementById('error-message');

            errorMessage.innerHTML = '';
            
            if (username === '' || password === '') {
                errorMessage.innerHTML = 'Please fill in both fields.';
            } else if (username !== 'admin' || password !== 'admin123') {
                errorMessage.innerHTML = 'Incorrect username or password.';
            } else {
                alert('Login successful!');
                window.location.href = './views/dashboard.view.php';  
            }
        });
    </script>
</body>
</html>
