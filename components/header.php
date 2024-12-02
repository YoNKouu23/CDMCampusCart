<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <a href="/index.php" class="logosec">
            <img class="logo" src="../public/images/logo.png" alt="Logo">
            <h3 class="logoname">CDM CAMPUS CART</h3>
        </a>

        <ul class="menu">
            <li><a href="/controllers/department.php">Department Section</a></li>
            <li><a href="/controllers/products.php">Products</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact Us</a></li>
        </ul>

        <div class="icons">
            <a href="/controllers/profile.php">
                <img src="../public/icons/user.png" alt="User Icon">
            </a>
            <a href="/controllers/cart.php">
                <img src="../public/icons/cart.png" alt="Cart Icon">
            </a>
        </div>
    </header>

    <script>
     const hamburger = document.querySelector('.hamburger');
    const menu = document.querySelector('.menu');
    const menuItems = document.querySelectorAll('.menu li a');

    hamburger.addEventListener('click', () => {
        menu.classList.toggle('active');
    });

    menuItems.forEach(item => {
        item.addEventListener('click', () => {
            menu.classList.remove('active');
        });
    });

    </script>
</body>
</html>
