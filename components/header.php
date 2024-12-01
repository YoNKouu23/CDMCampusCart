
<header>
<!-- Hamburger menu for smaller screens -->
    <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <a href="/index.php" class="logosec">
        <img class="logo" src="../public/images/logo.png" alt="">
        <h3 class="logoname">CDM CAMPUS CART</h3>
    </a>

    <ul class="menu">
        <li><a href="/controllers/department.php">DEPARTMENT SECTION</a></li>
        <li><a href="/controllers/products.php">PRODUCTS</a></li>
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#contact">CONTACT US</a></li>
    </ul>

    <div class="icons">
        <a href="/controllers/profile.php">
            <img src="../public/icons/user.png" alt="">
        </a>
        <a href="/controllers/cart.php">
            <img src="../public/icons/cart.png" alt="">
        </a>
    </div>
</header>

<script>
    const hamburger = document.querySelector('.hamburger');
const menu = document.querySelector('.menu');

hamburger.addEventListener('click', () => {
    menu.classList.toggle('active');
});

</script>